<?php

require_once 'saetv2.ex.class.php';

class Wclient extends SaeTClientV2
{
	

	private $_CI;


//$consumer_key, $consumer_secret, $oauth_token = NULL, $oauth_token_secret = NULL

	public function __construct()
	{
		$this->_CI = & get_instance();	

	}

	public function getOauth($arr)
	{

		parent::__construct($arr['consumer_key'],$arr['consumer_secret'], $arr['access_token']);
	}

}