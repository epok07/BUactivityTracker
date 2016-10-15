<?php

use Carbon\Carbon;

class Controller_Client extends Controller_Base
{

	public function action_index()
	{
		$data['clients'] = Model_Client::find('all', array('related' => array('contacts') ));
		$data['contacts'] = Model_Person::find('all', array('related' => array('client') ));
		$data['clients_lastupdate'] = Model_client::find('first', array(
			'related' => array('contacts'), 
			'order_by' => array('created_at' => 'desc'),
			));

		$data['contacts_lastupdate'] = Model_Person::find('first', array(
			'related' => array('client'), 
			'order_by' => array('created_at' => 'desc'),
			));

		// Debug::dump($data['clients_lastupdate']);

		$last_update = Carbon::createFromTimestamp($data['clients_lastupdate']->created_at);
		//Debug::dump($last_update);
		$data['last_update'] = $last_update;


		$this->template->title = "Clients";
		$this->template->content = View::forge('client/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('client');

		if ( ! $data['client'] = Model_Client::find($id))
		{
			Session::set_flash('error', 'Could not find client #'.$id);
			Response::redirect('client');
		}

		$this->template->title = "Client";
		$this->template->content = View::forge('client/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Client::validate('create');

			if ($val->run())
			{
				$client = Model_Client::forge(array(
					'name' => Input::post('name'),
					'city' => Input::post('city'),
					'country' => Input::post('country'),
					'address' => Input::post('address'),
				));

				if ($client and $client->save())
				{
					Session::set_flash('success', 'Added client #'.$client->id.'.');

					Response::redirect('client');
				}

				else
				{
					Session::set_flash('error', 'Could not save client.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Clients";
		$this->template->content = View::forge('client/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('client');

		if ( ! $client = Model_Client::find($id))
		{
			Session::set_flash('error', 'Could not find client #'.$id);
			Response::redirect('client');
		}

		$val = Model_Client::validate('edit');

		if ($val->run())
		{
			$client->name = Input::post('name');
			$client->city = Input::post('city');
			$client->country = Input::post('country');
			$client->address = Input::post('address');

			if ($client->save())
			{
				Session::set_flash('success', 'Updated client #' . $id);

				Response::redirect('client');
			}

			else
			{
				Session::set_flash('error', 'Could not update client #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$client->name = $val->validated('name');
				$client->city = $val->validated('city');
				$client->country = $val->validated('country');
				$client->address = $val->validated('address');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('client', $client, false);
		}

		$this->template->title = "Clients";
		$this->template->content = View::forge('client/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('client');

		if ($client = Model_Client::find($id))
		{
			$client->delete();

			Session::set_flash('success', 'Deleted client #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete client #'.$id);
		}

		Response::redirect('client');

	}

}
