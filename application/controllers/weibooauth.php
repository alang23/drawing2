<?php

class Weibooauth extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->library('myqc');
		//$this->myqc->index();
		//$this->myqc->qq_login();

		//echo $this->myqc->qq_callback();
		//echo $this->myqc->get_openid();

		//$consumer_key, $consumer_secret,
		$arr['consumer_key'] = $this->config->item('Key');
		$arr['consumer_secret'] = $this->config->item('Secret');
		$arr['oauth_token'] = NULL;
		$arr['oauth_token_secret'] = NULL;

		$this->load->library('wauth');
		//$keys = $this->wauth->getRequestToken();
		$this->wauth->getOauth($arr);
		//$keys = $this->wauth->getRequestToken();
		//print_r($keys);
		$aurl = $this->wauth->getAuthorizeURL( $this->config->item('Callback') );
		//$this->session->set_userdata('keys',$keys);
		//$aurl = $this->wauth->getAuthorizeURL( $keys['oauth_token'] ,false , $this->config->item('Callback'));
		//echo $aurl;
		header("Location:".$aurl);

	}
}