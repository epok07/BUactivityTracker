<?php
class Controller_Company extends Controller_Base
{

	public function action_index()
	{
		$data['companies'] = Model_Company::find('all');
		$this->template->title = "Companies";
		$this->template->content = View::forge('company/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('company');

		if ( ! $data['company'] = Model_Company::find($id))
		{
			Session::set_flash('error', 'Could not find company #'.$id);
			Response::redirect('company');
		}

		$this->template->title = "Company";
		$this->template->content = View::forge('company/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Company::validate('create');

			if ($val->run())
			{
				$company = Model_Company::forge(array(
					'title' => Input::post('title'),
					'description' => Input::post('description'),
				));

				if ($company and $company->save())
				{
					Session::set_flash('success', 'Added company #'.$company->id.'.');

					Response::redirect('company');
				}

				else
				{
					Session::set_flash('error', 'Could not save company.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Companies";
		$this->template->content = View::forge('company/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('company');

		if ( ! $company = Model_Company::find($id))
		{
			Session::set_flash('error', 'Could not find company #'.$id);
			Response::redirect('company');
		}

		$val = Model_Company::validate('edit');

		if ($val->run())
		{
			$company->title = Input::post('title');
			$company->description = Input::post('description');

			if ($company->save())
			{
				Session::set_flash('success', 'Updated company #' . $id);

				Response::redirect('company');
			}

			else
			{
				Session::set_flash('error', 'Could not update company #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$company->title = $val->validated('title');
				$company->description = $val->validated('description');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('company', $company, false);
		}

		$this->template->title = "Companies";
		$this->template->content = View::forge('company/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('company');

		if ($company = Model_Company::find($id))
		{
			$company->delete();

			Session::set_flash('success', 'Deleted company #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete company #'.$id);
		}

		Response::redirect('company');

	}

}
