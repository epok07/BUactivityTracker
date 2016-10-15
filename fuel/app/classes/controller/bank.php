<?php
class Controller_Bank extends Controller_Base
{

	public function action_index()
	{
		$data['banks'] = Model_Bank::find('all');
		$this->template->title = "Banks";
		$this->template->content = View::forge('bank/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('bank');

		if ( ! $data['bank'] = Model_Bank::find($id))
		{
			Session::set_flash('error', 'Could not find bank #'.$id);
			Response::redirect('bank');
		}

		$this->template->title = "Bank";
		$this->template->content = View::forge('bank/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bank::validate('create');

			if ($val->run())
			{
				$bank = Model_Bank::forge(array(
					'name' => Input::post('name'),
					'contact' => Input::post('contact'),
					'address' => Input::post('address'),
				));

				if ($bank and $bank->save())
				{
					Session::set_flash('success', 'Added bank #'.$bank->id.'.');

					Response::redirect('bank');
				}

				else
				{
					Session::set_flash('error', 'Could not save bank.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Banks";
		$this->template->content = View::forge('bank/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('bank');

		if ( ! $bank = Model_Bank::find($id))
		{
			Session::set_flash('error', 'Could not find bank #'.$id);
			Response::redirect('bank');
		}

		$val = Model_Bank::validate('edit');

		if ($val->run())
		{
			$bank->name = Input::post('name');
			$bank->contact = Input::post('contact');
			$bank->address = Input::post('address');

			if ($bank->save())
			{
				Session::set_flash('success', 'Updated bank #' . $id);

				Response::redirect('bank');
			}

			else
			{
				Session::set_flash('error', 'Could not update bank #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bank->name = $val->validated('name');
				$bank->contact = $val->validated('contact');
				$bank->address = $val->validated('address');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bank', $bank, false);
		}

		$this->template->title = "Banks";
		$this->template->content = View::forge('bank/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('bank');

		if ($bank = Model_Bank::find($id))
		{
			$bank->delete();

			Session::set_flash('success', 'Deleted bank #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete bank #'.$id);
		}

		Response::redirect('bank');

	}

}
