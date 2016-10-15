<?php
class Controller_Paymentcategory extends Controller_Base
{

	public function action_index()
	{
		$data['paymentcategories'] = Model_Paymentcategory::find('all');
		$this->template->title = "Paymentcategories";
		$this->template->content = View::forge('paymentcategory/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('paymentcategory');

		if ( ! $data['paymentcategory'] = Model_Paymentcategory::find($id))
		{
			Session::set_flash('error', 'Could not find paymentcategory #'.$id);
			Response::redirect('paymentcategory');
		}

		$this->template->title = "Paymentcategory";
		$this->template->content = View::forge('paymentcategory/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Paymentcategory::validate('create');

			if ($val->run())
			{
				$paymentcategory = Model_Paymentcategory::forge(array(
					'name' => Input::post('name'),
				));

				if ($paymentcategory and $paymentcategory->save())
				{
					Session::set_flash('success', 'Added paymentcategory #'.$paymentcategory->id.'.');

					Response::redirect('paymentcategory');
				}

				else
				{
					Session::set_flash('error', 'Could not save paymentcategory.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Paymentcategories";
		$this->template->content = View::forge('paymentcategory/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('paymentcategory');

		if ( ! $paymentcategory = Model_Paymentcategory::find($id))
		{
			Session::set_flash('error', 'Could not find paymentcategory #'.$id);
			Response::redirect('paymentcategory');
		}

		$val = Model_Paymentcategory::validate('edit');

		if ($val->run())
		{
			$paymentcategory->name = Input::post('name');

			if ($paymentcategory->save())
			{
				Session::set_flash('success', 'Updated paymentcategory #' . $id);

				Response::redirect('paymentcategory');
			}

			else
			{
				Session::set_flash('error', 'Could not update paymentcategory #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$paymentcategory->name = $val->validated('name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('paymentcategory', $paymentcategory, false);
		}

		$this->template->title = "Paymentcategories";
		$this->template->content = View::forge('paymentcategory/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('paymentcategory');

		if ($paymentcategory = Model_Paymentcategory::find($id))
		{
			$paymentcategory->delete();

			Session::set_flash('success', 'Deleted paymentcategory #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete paymentcategory #'.$id);
		}

		Response::redirect('paymentcategory');

	}

}
