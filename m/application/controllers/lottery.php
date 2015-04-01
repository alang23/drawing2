<?php

class Lottery extends Base_Controller
{
	


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->model('member_mdl','member');
		$data['userinfo'] =  '';
		$data['user'] = '';
		$userinfo = $this->getMemberinfo();
		if(!empty($userinfo)){
			$data['userinfo'] = $userinfo;
			$uid = $userinfo['id'];
			$user = $this->get_user_info($uid);
			$data['user'] = $user;
		}


		$this->load->view('lottery',$data);
	}

		//
	private function get_user_info($uid)
	{
		$userconfig = array('id'=>$uid);
		$user = $this->member->get_one_by_where($userconfig);
		$num = $user['piao'];
		$lotterynum = $num/3;
		$user['lotterynum'] = (int)$lotterynum;

		return $user;
	}
}