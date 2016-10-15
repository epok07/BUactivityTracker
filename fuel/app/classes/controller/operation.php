<?php
class Controller_Operation extends Controller_Base
{

	public function action_index()
	{
		$data['operations'] = Model_Operation::find('all');
		$this->template->title = "Operations";
		$this->template->content = View::forge('operation/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('operation');

		if ( ! $data['operation'] = Model_Operation::find($id))
		{
			Session::set_flash('error', 'Could not find operation #'.$id);
			Response::redirect('operation');
		}

		$this->template->title = "Operation";
		$this->template->content = View::forge('operation/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Operation::validate('create');

			if ($val->run())
			{
				$operation = Model_Operation::forge(array(
					'summary' => Input::post('summary'),
					'order_id' => Input::post('order_id'),
					'owner_id' => Input::post('owner_id'),
					'product_id' => Input::post('product_id'),
					'quantity' => Input::post('quantity'),
					'unit_id' => Input::post('unit_id'),
					'packagetype_id' => Input::post('packagetype_id'),
				));

				if ($operation and $operation->save())
				{
					Session::set_flash('success', 'Added operation #'.$operation->id.'.');

					Response::redirect('operation');
				}

				else
				{
					Session::set_flash('error', 'Could not save operation.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Operations";
		$this->template->content = View::forge('operation/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('operation');

		if ( ! $operation = Model_Operation::find($id))
		{
			Session::set_flash('error', 'Could not find operation #'.$id);
			Response::redirect('operation');
		}

		$val = Model_Operation::validate('edit');

		if ($val->run())
		{
			$operation->summary = Input::post('summary');
			$operation->order_id = Input::post('order_id');
			$operation->owner_id = Input::post('owner_id');
			$operation->product_id = Input::post('product_id');
			$operation->quantity = Input::post('quantity');
			$operation->unit_id = Input::post('unit_id');
			$operation->packagetype_id = Input::post('packagetype_id');

			if ($operation->save())
			{
				Session::set_flash('success', 'Updated operation #' . $id);

				Response::redirect('operation');
			}

			else
			{
				Session::set_flash('error', 'Could not update operation #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$operation->summary = $val->validated('summary');
				$operation->order_id = $val->validated('order_id');
				$operation->owner_id = $val->validated('owner_id');
				$operation->product_id = $val->validated('product_id');
				$operation->quantity = $val->validated('quantity');
				$operation->unit_id = $val->validated('unit_id');
				$operation->packagetype_id = $val->validated('packagetype_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('operation', $operation, false);
		}

		$this->template->title = "Operations";
		$this->template->content = View::forge('operation/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('operation');

		if ($operation = Model_Operation::find($id))
		{
			$operation->delete();

			Session::set_flash('success', 'Deleted operation #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete operation #'.$id);
		}

		Response::redirect('operation');

	}

}
