<?php


class Sccg extends Base_Controller{



	public function __construct(){

        parent::__construct();

	}


	public function index(){

   		$list = array();
   		$this->load->model('works_mdl','works');

   		$where['page'] = true;
        $where['limit'] = 2;
        $where['offset'] = 0;
		$where['where'] = array('w.is_top'=>1);
		$list = $this->works->getList($where);
		$data['list'] = $list;

		//print_r($list);
		$this->load->view('sccg',$data);
               
        	
	}
}