<?php
require_once(dirname(__FILE__)."/API/qqConnectAPI.php");

class Myqc extends QC
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo __FUNCTION__;
	}

}