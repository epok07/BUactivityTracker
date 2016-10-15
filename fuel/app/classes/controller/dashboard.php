<?php

class Controller_Dashboard extends Controller_Base
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Dashboard &raquo; Index';
		$this->template->content = View::forge('dashboard/index', $data);
	}

	public function action_rapport()
	{
		$data["subnav"] = array('rapport'=> 'active' );
		$this->template->title = 'Dashboard &raquo; Rapport';
		$this->template->content = View::forge('dashboard/rapport', $data);
	}

}
