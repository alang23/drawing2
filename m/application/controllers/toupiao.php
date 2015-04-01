<?php

class Toupiao extends Base_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('works_mdl','works');
		$list = $this->works->getList();
		$data['list'] = $list;

		$this->load->view('index',$data);
	}