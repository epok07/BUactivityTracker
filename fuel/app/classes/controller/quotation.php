<?php
class Controller_Quotation extends Controller_Base
{

	public function action_index()
	{
		$data['quotations'] = Model_Quotation::find('all');
		$this->template->title = "Quotations";
		$this->template->content = View::forge('quotation/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('quotation');

		if ( ! $data['quotation'] = Model_Quotation::find($id))
		{
			Session::set_flash('error', 'Could not find quotation #'.$id);
			Response::redirect('quotation');
		}

		$this->template->title = "Quotation";
		$this->template->content = View::forge('quotation/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Quotation::validate('create');

			if ($val->run())
			{
				$quotation = Model_Quotation::forge(array(
					'price' => Input::post('price'),
					'product_id' => Input::post('product_id'),
					'owner_id' => Input::post('owner_id'),
					'company_id' => Input::post('company_id'),
				));

				if ($quotation and $quotation->save())
				{
					Session::set_flash('success', 'Added quotation #'.$quotation->id.'.');

					Response::redirect('quotation');
				}

				else
				{
					Session::set_flash('error', 'Could not save quotation.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Quotations";
		$this->template->content = View::forge('quotation/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('quotation');

		if ( ! $quotation = Model_Quotation::find($id))
		{
			Session::set_flash('error', 'Could not find quotation #'.$id);
			Response::redirect('quotation');
		}

		$val = Model_Quotation::validate('edit');

		if ($val->run())
		{
			$quotation->price = Input::post('price');
			$quotation->product_id = Input::post('product_id');
			$quotation->owner_id = Input::post('owner_id');
			$quotation->company_id = Input::post('company_id');

			if ($quotation->save())
			{
				Session::set_flash('success', 'Updated quotation #' . $id);

				Response::redirect('quotation');
			}

			else
			{
				Session::set_flash('error', 'Could not update quotation #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$quotation->price = $val->validated('price');
				$quotation->product_id = $val->validated('product_id');
				$quotation->owner_id = $val->validated('owner_id');
				$quotation->company_id = $val->validated('company_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('quotation', $quotation, false);
		}

		$this->template->title = "Quotations";
		$this->template->content = View::forge('quotation/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('quotation');

		if ($quotation = Model_Quotation::find($id))
		{
			$quotation->delete();

			Session::set_flash('success', 'Deleted quotation #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete quotation #'.$id);
		}

		Response::redirect('quotation');

	}

}
