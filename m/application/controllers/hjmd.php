<?php



class Hjmd extends Base_Controller
{
	


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('hjmd');
	}

	public function choujiang()
	{
		 $userinfo = $this->getMemberinfo();
		 //$userinfo = array('id'=>2);
		 if(empty($userinfo)){
		 	$json = array('err'=>-1,'msg'=>'未登录');
		 	echo json_encode($json);
		 	exit;
		 }
 
		 //抽奖次数
		 $this->load->model('member_mdl','member');
		 $id = $userinfo['id'];
		 $config = array('id'=>$id);
		 $user = $this->member->get_one_by_where($config);
		 if(empty($user)){
		 	$json = array('err'=>-5,'msg'=>'no user');
		 	echo json_encode($json);
		 	exit;
		 }
		 if($user['piao'] < 3){
		 	$json = array('err'=>-2,'msg'=>'没有抽奖机会了');
		 	echo json_encode($json);
		 	exit;
		 }
		
		 //读取可以抽奖的奖品
		 $this->load->model('lottery_mdl','lottery');
		 $where['where'] = array('typeid'=>1,'sheng >' => '0');
		 $lottery = $this->lottery->getList($where);
		
		 if(empty($lottery)){
		 	$json = array('err'=>-3,'msg'=>'很遗憾，没中奖');
		 	echo json_encode($json);
		 	exit;
		 }else{
		 	$l = array_rand($lottery,1);
		 	
		 	if(isset($lottery[$l])){
		 		//奖品减一
		 		$jiang = $lottery[$l];
		 		$this->member->jian($jiang['id'],3);
		 		//记录中奖
		 		$this->load->model('lottery_logs_mdl','lottery_logs');
		 		$ladd['uid'] = $user['id'];
		 		$ladd['lottery_id'] = $jiang['id'];
		 		$ladd['createtime'] = time();
		 		
		 		if($this->lottery_logs->add($ladd)){
			 		$json = array('err'=>0,'msg'=>$jiang['title']);
			 		echo json_encode($json);
			 		exit;
		 		}

		 	}else{
		 		$json = array('err'=>-4,'msg'=>'error');
		 		echo json_encode($json);
		 		exit;
		 	}
		 }



	}
}