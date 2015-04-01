<?php


class Userupload extends Base_Controller
{

	public function __construct()
	{

		parent::__construct();
	}


	public function index()
	{
		 $token = $this->session->userdata('logininfo');
		 print_r($token);
	}
	
}