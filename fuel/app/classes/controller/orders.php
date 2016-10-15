<?php
class Controller_Orders extends Controller_Base
{

	public function action_index()
	{
		$data['orders'] = Model_Order::find('all');
		$this->template->title = "Orders";
		$this->template->content = View::forge('orders/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('orders');

		if ( ! $data['order'] = Model_Order::find($id))
		{
			Session::set_flash('error', 'Could not find order #'.$id);
			Response::redirect('orders');
		}

		$this->template->title = "Order";
		$this->template->content = View::forge('orders/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Order::validate('create');

			if ($val->run())
			{
				$order = Model_Order::forge(array(
					'hash' => Input::post('hash'),
					'client_id' => Input::post('client_id'),
					'issuer_id' => Input::post('issuer_id'),
					'status_id' => Input::post('status_id'),
				));

				if ($order and $order->save())
				{
					Session::set_flash('success', 'Added order #'.$order->id.'.');

					Response::redirect('orders');
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
		$this->template->content = View::forge('orders/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('orders');

		if ( ! $order = Model_Order::find($id))
		{
			Session::set_flash('error', 'Could not find order #'.$id);
			Response::redirect('orders');
		}

		$val = Model_Order::validate('edit');

		if ($val->run())
		{
			$order->hash = Input::post('hash');
			$order->client_id = Input::post('client_id');
			$order->issuer_id = Input::post('issuer_id');
			$order->status_id = Input::post('status_id');

			if ($order->save())
			{
				Session::set_flash('success', 'Updated order #' . $id);

				Response::redirect('orders');
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

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('order', $order, false);
		}

		$this->template->title = "Orders";
		$this->template->content = View::forge('orders/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('orders');

		if ($order = Model_Order::find($id))
		{
			$order->delete();

			Session::set_flash('success', 'Deleted order #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete order #'.$id);
		}

		Response::redirect('orders');

	}

}
