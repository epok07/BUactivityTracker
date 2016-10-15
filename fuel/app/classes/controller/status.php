<?php
class Controller_Status extends Controller_Base
{

	public function action_index()
	{
		$data['statuses'] = Model_Status::find('all');
		$this->template->title = "Statuses";
		$this->template->content = View::forge('status/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('status');

		if ( ! $data['status'] = Model_Status::find($id))
		{
			Session::set_flash('error', 'Could not find status #'.$id);
			Response::redirect('status');
		}

		$this->template->title = "Status";
		$this->template->content = View::forge('status/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Status::validate('create');

			if ($val->run())
			{
				$status = Model_Status::forge(array(
					'name' => Input::post('name'),
				));

				if ($status and $status->save())
				{
					Session::set_flash('success', 'Added status #'.$status->id.'.');

					Response::redirect('status');
				}

				else
				{
					Session::set_flash('error', 'Could not save status.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Statuses";
		$this->template->content = View::forge('status/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('status');

		if ( ! $status = Model_Status::find($id))
		{
			Session::set_flash('error', 'Could not find status #'.$id);
			Response::redirect('status');
		}

		$val = Model_Status::validate('edit');

		if ($val->run())
		{
			$status->name = Input::post('name');

			if ($status->save())
			{
				Session::set_flash('success', 'Updated status #' . $id);

				Response::redirect('status');
			}

			else
			{
				Session::set_flash('error', 'Could not update status #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$status->name = $val->validated('name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('status', $status, false);
		}

		$this->template->title = "Statuses";
		$this->template->content = View::forge('status/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('status');

		if ($status = Model_Status::find($id))
		{
			$status->delete();

			Session::set_flash('success', 'Deleted status #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete status #'.$id);
		}

		Response::redirect('status');

	}

}
