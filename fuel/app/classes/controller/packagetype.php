<?php
class Controller_Packagetype extends Controller_Base
{

	public function action_index()
	{
		$data['packagetypes'] = Model_Packagetype::find('all');
		$this->template->title = "Packagetypes";
		$this->template->content = View::forge('packagetype/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('packagetype');

		if ( ! $data['packagetype'] = Model_Packagetype::find($id))
		{
			Session::set_flash('error', 'Could not find packagetype #'.$id);
			Response::redirect('packagetype');
		}

		$this->template->title = "Packagetype";
		$this->template->content = View::forge('packagetype/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Packagetype::validate('create');

			if ($val->run())
			{
				$packagetype = Model_Packagetype::forge(array(
					'name' => Input::post('name'),
					'quantity' => Input::post('quantity'),
					'product_id' => Input::post('product_id'),
					'baseunit_id' => Input::post('baseunit_id'),
				));

				if ($packagetype and $packagetype->save())
				{
					Session::set_flash('success', 'Added packagetype #'.$packagetype->id.'.');

					Response::redirect('packagetype');
				}

				else
				{
					Session::set_flash('error', 'Could not save packagetype.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Packagetypes";
		$this->template->content = View::forge('packagetype/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('packagetype');

		if ( ! $packagetype = Model_Packagetype::find($id))
		{
			Session::set_flash('error', 'Could not find packagetype #'.$id);
			Response::redirect('packagetype');
		}

		$val = Model_Packagetype::validate('edit');

		if ($val->run())
		{
			$packagetype->name = Input::post('name');
			$packagetype->quantity = Input::post('quantity');
			$packagetype->product_id = Input::post('product_id');
			$packagetype->baseunit_id = Input::post('baseunit_id');

			if ($packagetype->save())
			{
				Session::set_flash('success', 'Updated packagetype #' . $id);

				Response::redirect('packagetype');
			}

			else
			{
				Session::set_flash('error', 'Could not update packagetype #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$packagetype->name = $val->validated('name');
				$packagetype->quantity = $val->validated('quantity');
				$packagetype->product_id = $val->validated('product_id');
				$packagetype->baseunit_id = $val->validated('baseunit_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('packagetype', $packagetype, false);
		}

		$this->template->title = "Packagetypes";
		$this->template->content = View::forge('packagetype/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('packagetype');

		if ($packagetype = Model_Packagetype::find($id))
		{
			$packagetype->delete();

			Session::set_flash('success', 'Deleted packagetype #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete packagetype #'.$id);
		}

		Response::redirect('packagetype');

	}

}
