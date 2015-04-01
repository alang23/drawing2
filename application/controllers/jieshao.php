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
		$info = $userinfo = $this->getMemberinfo();
		$data['info'] = $info;

    	$this->load->view('jieshao',$data);
               
        	
	}
}