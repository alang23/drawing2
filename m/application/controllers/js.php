<?php

class Js extends Base_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$userinfo = $this->getMemberinfo();
		$data['userinfo'] = $userinfo;
		//print_r($userinfo);

		$this->load->view('index_test',$data);
	}
}