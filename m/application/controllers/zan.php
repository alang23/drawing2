<?php


class Zan extends Base_Controller{
{
	

	public function __construct()
	{
		parent::__construct();
		//$this->load->model("logs_mdl",'logs')
	}


	public function index()
	{
		echo __FUNCTION__;
	}


}