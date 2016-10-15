<?php
class Controller_Person extends Controller_Base
{

	public function action_index()
	{
		$data['people'] = Model_Person::find('all');
		$this->template->title = "People";
		$this->template->content = View::forge('person/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('person');

		if ( ! $data['person'] = Model_Person::find($id))
		{
			Session::set_flash('error', 'Could not find person #'.$id);
			Response::redirect('person');
		}

		$this->template->title = "Person";
		$this->template->content = View::forge('person/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Person::validate('create');

			if ($val->run())
			{
				$person = Model_Person::forge(array(
					'firtname' => Input::post('firtname'),
					'lastname' => Input::post('lastname'),
					'email' => Input::post('email'),
					'tel' => Input::post('tel'),
					'client_id' => Input::post('client_id'),
				));

				if ($person and $person->save())
				{
					Session::set_flash('success', 'Added person #'.$person->id.'.');

					Response::redirect('person');
				}

				else
				{
					Session::set_flash('error', 'Could not save person.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "People";
		$this->template->content = View::forge('person/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('person');

		if ( ! $person = Model_Person::find($id))
		{
			Session::set_flash('error', 'Could not find person #'.$id);
			Response::redirect('person');
		}

		$val = Model_Person::validate('edit');

		if ($val->run())
		{
			$person->firtname = Input::post('firtname');
			$person->lastname = Input::post('lastname');
			$person->email = Input::post('email');
			$person->tel = Input::post('tel');
			$person->client_id = Input::post('client_id');

			if ($person->save())
			{
				Session::set_flash('success', 'Updated person #' . $id);

				Response::redirect('person');
			}

			else
			{
				Session::set_flash('error', 'Could not update person #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$person->firtname = $val->validated('firtname');
				$person->lastname = $val->validated('lastname');
				$person->email = $val->validated('email');
				$person->tel = $val->validated('tel');
				$person->client_id = $val->validated('client_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('person', $person, false);
		}

		$this->template->title = "People";
		$this->template->content = View::forge('person/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('person');

		if ($person = Model_Person::find($id))
		{
			$person->delete();

			Session::set_flash('success', 'Deleted person #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete person #'.$id);
		}

		Response::redirect('person');

	}

}
