<?php



class Hjmd extends Base_Controller
{
	


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$userinfo = $this->getMemberinfo();

		$uid = $userinfo['id'];
		//每周最佳
		$this->load->model('works_mdl','works');
		$best = array();
		$bestwhere['where'] = array('w.is_top'=>1);
		$best = $this->works->getList($bestwhere);
		$data['best'] = $best;

		//获奖jilu
		$this->load->model('lottery_logs_mdl','lottery_logs');
		//$where['where'] = array('log.uid'=>$uid);
		$list = $this->lottery_logs->getList();
		$data['list'] = $list;

		$this->load->view('hjmd',$data);
	}

	public function choujiang()
	{
		 $userinfo = $this->getMemberinfo();
		//$userinfo = array('id'=>17);
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
		// print_r($user);
		 if(empty($user)){
		 	$json = array('err'=>-5,'msg'=>'no user');
		 	echo json_encode($json);
		 	exit;
		 }

		 
		 if(($user['piao']) < 3){
		 	$json = array('err'=>-2,'msg'=>'没有抽奖机会了');
		 	echo json_encode($json);
		 	exit;
		 }
		 


		 //减掉票数
		 $this->member->jian($userinfo['id'],3);

		 //判断今天是否中过奖	 
		 $theday = date("Y-m-d");
		 $thedayun = strtotime($theday);
		 $checkconfig = array('uid'=>$userinfo['id'],'createtime > '=>$thedayun);
		 $this->load->model('lottery_logs_mdl','lottery_logs');
		 $checklotterylog = $this->lottery_logs->get_new_by_id($checkconfig);
		 if(!empty($checklotterylog)){
		 	$json = array('err'=>1,'msg'=>'很遗憾，没中奖','biao'=>100);
		 	echo json_encode($json);
		 	exit;
		 }
		 
		/*
		$json = array('err'=>1,'msg'=>'很遗憾，没中奖','biao'=>100);
		 echo json_encode($json);
		 exit;
		 */

		 //读取可以抽奖的奖品
		 $this->load->model('lottery_mdl','lottery');
		 $where['where'] = array('typeid'=>1,'sheng >' => '0');
		 $lottery = $this->lottery->getList($where);
		
		 if(empty($lottery)){
		 	$json = array('err'=>1,'msg'=>'很遗憾，没中奖','biao'=>100);
		 	echo json_encode($json);
		 	exit;
		 }else{
		 	$l = array_rand($lottery,1);
		 	$rad = mt_rand(1,8);
			//$json = array('err'=>1,'msg'=>'很遗憾，没中奖','biao'=>100);
			//echo json_encode($json);
			//exit;
			//echo $rad;
			if($rad == 1 || $rad == 2 || $rad == 4 || $rad == 6){
				$json = array('err'=>1,'msg'=>'很遗憾，没中奖','biao'=>100);
				echo json_encode($json);
				exit;
			}
		 	if(isset($lottery[$l])){
		 		//奖品减一
		 		$jiang = $lottery[$l];
		 		$this->lottery->jian($jiang['id']);
		 		//记录中奖
		 		$this->load->model('lottery_logs_mdl','lottery_logs');
		 		$ladd['uid'] = $user['id'];
		 		$ladd['lottery_id'] = $jiang['id'];
		 		$ladd['createtime'] = time();
		 		
		 		if($this->lottery_logs->add($ladd)){
			 		$json = array('err'=>0,'msg'=>$jiang['title'],'biao'=>45);
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