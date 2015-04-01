<?php

class IndexController extends Base_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$userinfo = $this->getMemberinfo();
		$data['userinfo'] = $userinfo;

		$this->load->model('works_mdl','works');
		$where['where'] = array('w.is_top'=>1);
		$list = $this->works->getList($where);
		$data['list'] = $list;

		$this->load->view('index',$data);
	}
}