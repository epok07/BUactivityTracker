<?php
class Controller_Order extends Controller_Base
{

	public function action_index()
	{
		$data['orders'] = Model_Order::find('all', array(
			"raleted" => array("comapany", "client", "operations", "deliveries")
			));
		$this->template->title = "Orders";
		$this->template->content = View::forge('order/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('order');

		if ( ! $data['order'] = Model_Order::find($id))
		{
			Session::set_flash('error', 'Could not find order #'.$id);
			Response::redirect('order');
		}

		$this->template->title = "Order";
		$this->template->top_action_btns = View::forge('order/_order_action');
		$this->template->content = View::forge('order/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Order::validate('create');

			if ($val->run())
			{
				$order = Model_Order::forge(array(
					'hash' =>  Model_Order::struuid('hash'),
					'client_id' => Input::post('client_id'),
					'issuer_id' => Input::post('issuer_id'),
					'status_id' => Input::post('status_id'),
					'company_id' => Input::post('company_id'),
				));

				if ($order and $order->save())
				{
					Session::set_flash('success', 'Added order #'.$order->id.'.');

					Response::redirect('order');
				}

				else
				{
					Session::set_flash('error', 'Could not save order.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Orders";
		$this->template->content = View::forge('order/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('order');

		if ( ! $order = Model_Order::find($id))
		{
			Session::set_flash('error', 'Could not find order #'.$id);
			Response::redirect('order');
		}

		$val = Model_Order::validate('edit');

		if ($val->run())
		{
			$order->hash = Input::post('hash');
			$order->client_id = Input::post('client_id');
			$order->issuer_id = Input::post('issuer_id');
			$order->status_id = Input::post('status_id');
			$order->company_id = Input::post('company_id');

			if ($order->save())
			{
				Session::set_flash('success', 'Updated order #' . $id);

				Response::redirect('order');
			}

			else
			{
				Session::set_flash('error', 'Could not update order #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$order->hash = $val->validated('hash');
				$order->client_id = $val->validated('client_id');
				$order->issuer_id = $val->validated('issuer_id');
				$order->status_id = $val->validated('status_id');
				$order->company_id = $val->validated('company_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('order', $order, false);
		}

		$this->template->title = "Orders";
		$this->template->content = View::forge('order/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('order');

		if ($order = Model_Order::find($id))
		{
			$order->delete();

			Session::set_flash('success', 'Deleted order #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete order #'.$id);
		}

		Response::redirect('order');

	}

}
