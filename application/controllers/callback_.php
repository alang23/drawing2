<?php
/**
*@ QQ登录
*
**/
class Callback extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		header("Content-type:text/html;charset=utf-8");
		//print_r($_GET);
		$this->load->library('myqc');
		//授权
		$access_token = $this->myqc->qq_callback();

		$openid = $this->myqc->get_openid();

		$userinfo = $this->myqc->get_user_info();

		if(!empty($openid)  && !empty($userinfo)){
			//验证用户是否已经存在
			$this->load->model('member_mdl','member');
			$where = array('openid'=>$openid);
			$check = $this->member->get_one_by_where($where);
			if(empty($check)){
				$add['openid'] = $openid;
				$add['nickname'] = $userinfo['nickname'];
				$add['gender'] = $userinfo['gender'];
				$add['figureurl'] = $userinfo['figureurl_1'];
				$add['createtime'] = time();
				$add['types'] = 1;
				if($this->member->add($add)){
					$this->session->set_userdata('logininfo',$add);
				}
			}else{
				$this->session->set_userdata('logininfo',$check);
			}
			redirect('');
		}else{
			exit('系统错误，请重新尝试');
		}
		
		

	}
}