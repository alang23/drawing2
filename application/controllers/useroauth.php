<?php


class Useroauth extends Base_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('myqc');
		//授权
		$this->myqc->qq_login();

	}
}
