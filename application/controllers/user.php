<?php


class User extends Base_Controller
{
	
	var $userinfo = array();

	public function __construct()
	{
		parent::__construct();
		$this->userinfo = $this->getMemberinfo();
		$this->load->model('works_mdl','works');
		$this->load->model('member_mdl','member');
		/*
		if(empty($userinfo)){
			exit('login please');
		}
		*/


	}


	public function index()
	{
		//个人上传
		$userinfo = $this->getMemberinfo();
		$data['userinfo'] = $userinfo;

		$user = $this->get_user_info($userinfo['id']);
		$data['lotterynum'] = $user['lotterynum'];
		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;

        $orders = isset($_GET['orders']) ? $_GET['orders'] : 0;

        $limit = 12;
        $offset = ($page - 1) * $limit;
        $pagination = '';
        $where = array('uid'=>$userinfo['id']);
        $count = $this->works->get_count($where);

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?c=user';
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();

        $list = array();
        $wherelist['page'] = true;
        $wherelist['limit'] = $limit;
        $wherelist['offset'] = $offset;
        $wherelist['where'] = $where;
        $list = $this->works->getList($wherelist);
        $data['list'] = $list;
        
		$this->load->view('user',$data);
	}

	//地址信息
	public function info()
	{

		$this->load->model('member_mdl','member');
		$uid = $this->userinfo['id'];
		$config = array('id'=>$uid);
		if(!empty($_POST)){
			$add['realname'] = $this->input->post('realname');
			$add['address'] = $this->input->post('address');
			$add['phone'] = $this->input->post('phone');
			$this->member->update($config,$add);
			redirect('c=user&m=info');
		}else{
			$user = $this->get_user_info($uid);
			$data['user'] = $user;
			$info = $this->member->get_one_by_where($config);
			$data['info'] = $info;
			
			$this->load->view('user_info',$data);
		}


	}
	public function edit()
	{

			$uid = $this->userinfo['id'];
			$user = $this->get_user_info($uid);
			$data['user'] = $user;

			$userinfo = $this->getMemberinfo();
			$data['userinfo'] = $userinfo;

			$user = $this->get_user_info($userinfo['id']);
			$data['lotterynum'] = $user['lotterynum'];

			$this->load->model('member_mdl','member');
			$uid = $this->userinfo['id'];
			$config = array('id'=>$uid);
			$info = $this->member->get_one_by_where($config);
			$data['info'] = $info;
			$this->load->view('user_info_edit',$data);

	}

	public function lottery_log()
	{

		$userinfo = $this->getMemberinfo();
		$data['userinfo'] = $userinfo;
		$uid = $userinfo['id'];
		$user = $this->get_user_info($uid);
		$data['user'] = $user;

		//获奖记录
		$this->load->model('lottery_logs_mdl','lottery_logs');
		$where['where'] = array('log.uid'=>$uid);
		$list = $this->lottery_logs->getList($where);
		$data['list'] = $list;

		

		$this->load->view('lottery_log',$data);
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