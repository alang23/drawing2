<?php
/**
*活动介绍
*
**/


class Jieshao extends Base_Controller{



	public function __construct(){

        parent::__construct();

	}


	public function index(){

		
		$userinfo = $this->getMemberinfo();
		$data['userinfo'] = $userinfo;
		
    	$this->load->view('jieshao',$data);
               
        	
	}
}