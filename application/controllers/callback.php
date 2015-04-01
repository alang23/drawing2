<?php
/**
*@ QQ登录
*
**/
require_once("API/qqConnectAPI.php");  
class Callback extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$mobile = "";
		$ip = $this->input->ip_address();
		$state="drawing";
		if( ! session_start()){
			session_start();
		}
		$openid = $_SESSION[$state.'_open_id'];
		$media = $_SESSION[$state.'_media'];
		$nickname = $_SESSION[$state.'_nickname'];
		$portrait_url = $_SESSION[$state.'_portrait_url'];
		$area = $_SESSION[$state.'_area'];
		
		
		//验证用户是否已经存在
		$this->load->model('member_mdl','member');
		$where = array('openid'=>$openid);
		$check = $this->member->get_one_by_where($where);
		if(empty($check)){
			$add['openid'] = $openid;
			$add['nickname'] = $nickname;
			$add['gender'] = '';
			$add['figureurl'] = $portrait_url;
			$add['createtime'] = time();
			$add['types'] = 1;
			if($this->member->add($add)){
				$add['id'] = $this->member->insert_id();
				$add['piao'] = 0;
				$this->session->set_userdata('logininfo',$add);
			}
		}else{
			$this->session->set_userdata('logininfo',$check);
		}
		redirect('');
	}
	public function index_xxx()
	{
		header("Content-type:text/html;charset=utf-8");
		//print_r($_GET);
		//$this->load->library('myqc');
		//授权
		//$access_token = $this->myqc->qq_callback();

		//$openid = $this->myqc->get_openid();
		$qc = new QC();  
		$acs = $qc->qq_callback();//callback主要是验证 code和state,返回token信息，并写入到文件中存储，方便get_openid从文件中度  
		echo $acs;
		exit;
		$openid = $qc->get_openid();//根据callback获取到的token信息得到openid,所以callback必须在openid前调用  
		$qc = new QC($acs,$openid);  
		$userinfo = $qc->get_user_info();
	
		//$userinfo = $this->myqc->get_user_info();

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
					$add['id'] = $this->member->insert_id();
					$add['piao'] = 0;
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