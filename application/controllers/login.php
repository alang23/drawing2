<?php

class Login extends CI_Controller
{
	



	public function __construct()
	{
		parent::__construct();
	}



	public function index()
	{

	}


	public function logout()
	{
		 $token = $this->session->set_userdata('logininfo','');
		 $this->session->unset_userdata('logininfo');

		 redirect('');

	}
}

?>