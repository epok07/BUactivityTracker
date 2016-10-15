<?php
class Controller_Delivery extends Controller_Base
{

	public function action_index()
	{
		$data['deliveries'] = Model_Delivery::find('all');
		$this->template->title = "Deliveries";
		$this->template->content = View::forge('delivery/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('delivery');

		if ( ! $data['delivery'] = Model_Delivery::find($id))
		{
			Session::set_flash('error', 'Could not find delivery #'.$id);
			Response::redirect('delivery');
		}

		$this->template->title = "Delivery";
		$this->template->content = View::forge('delivery/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Delivery::validate('create');

			if ($val->run())
			{
				$delivery = Model_Delivery::forge(array(
					'hash' => Input::post('hash'),
					'client_id' => Input::post('client_id'),
					'order_id' => Input::post('order_id'),
					'issuer_id' => Input::post('issuer_id'),
					'status_id' => Input::post('status_id'),
				));

				if ($delivery and $delivery->save())
				{
					Session::set_flash('success', 'Added delivery #'.$delivery->id.'.');

					Response::redirect('delivery');
				}

				else
				{
					Session::set_flash('error', 'Could not save delivery.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Deliveries";
		$this->template->content = View::forge('delivery/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('delivery');

		if ( ! $delivery = Model_Delivery::find($id))
		{
			Session::set_flash('error', 'Could not find delivery #'.$id);
			Response::redirect('delivery');
		}

		$val = Model_Delivery::validate('edit');

		if ($val->run())
		{
			$delivery->hash = Input::post('hash');
			$delivery->client_id = Input::post('client_id');
			$delivery->order_id = Input::post('order_id');
			$delivery->issuer_id = Input::post('issuer_id');
			$delivery->status_id = Input::post('status_id');

			if ($delivery->save())
			{
				Session::set_flash('success', 'Updated delivery #' . $id);

				Response::redirect('delivery');
			}

			else
			{
				Session::set_flash('error', 'Could not update delivery #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$delivery->hash = $val->validated('hash');
				$delivery->client_id = $val->validated('client_id');
				$delivery->order_id = $val->validated('order_id');
				$delivery->issuer_id = $val->validated('issuer_id');
				$delivery->status_id = $val->validated('status_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('delivery', $delivery, false);
		}

		$this->template->title = "Deliveries";
		$this->template->content = View::forge('delivery/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('delivery');

		if ($delivery = Model_Delivery::find($id))
		{
			$delivery->delete();

			Session::set_flash('success', 'Deleted delivery #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete delivery #'.$id);
		}

		Response::redirect('delivery');

	}

}
