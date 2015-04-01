<?php


class Sccg extends Base_Controller{



	public function __construct(){

        parent::__construct();

	}


	public function index(){

   		$this->load->model('works_mdl','works');
		$where['where'] = array('w.is_top'=>1);
		$list = $this->works->getList($where);
		$data['list'] = $list;


		$this->load->view('sccg',$data);
               
        	
	}
}