<?php

class Controller_Demo extends Controller_Base
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Demo &raquo; Index';
		$this->template->content = View::forge('demo/index', $data);
	}

	public function action_test()
	{
		$data["subnav"] = array('test'=> 'active' );
		$this->template->title = 'Demo &raquo; Test';
		$this->template->content = View::forge('demo/test', $data);
	}

	public function action_dummy()
	{
		$data["subnav"] = array('dummy'=> 'active' );
		$this->template->title = 'Demo &raquo; Dummy';
		$this->template->content = View::forge('demo/dummy', $data);
	}

}
