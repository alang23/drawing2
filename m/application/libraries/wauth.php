<?php
require_once 'saetv2.ex.class.php';

class Wauth extends SaeTOAuthV2
{
	

	private $_CI;


//$consumer_key, $consumer_secret, $oauth_token = NULL, $oauth_token_secret = NULL

	public function __construct()
	{
		$this->_CI = & get_instance();
		
		//$consumer_key, $consumer_secret,
		//$consumer_key = $this->_CI->config->item('Key');
		//$consumer_secret = $this->_CI->config->item('Secret');

		//echo $consumer_key;
		//parent::__construct($arr['consumer_key'],$arr['consumer_secret']);

	}

	public function getOauth($arr)
	{

		parent::__construct($arr['consumer_key'],$arr['consumer_secret'], $arr['oauth_token'], $arr['oauth_token_secret']);
	}

}