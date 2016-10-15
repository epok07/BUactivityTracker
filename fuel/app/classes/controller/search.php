<?php

class Controller_Search extends Controller_Base
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Search &raquo; Index';
		$this->template->content = View::forge('search/index', $data);
	}

	public function action_details()
	{
		$data["subnav"] = array('details'=> 'active' );
		$this->template->title = 'Search &raquo; Details';
		$this->template->content = View::forge('search/details', $data);
	}

}
