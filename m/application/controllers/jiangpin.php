<?php
/**
*活动介绍
*
**/


class Jiangpin extends Base_Controller{



	public function __construct(){

        parent::__construct();

	}


	public function index(){

    	$this->load->view('jiangpin');
               
        	
	}
}