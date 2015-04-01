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

		$this->load->model('member_mdl','member');
		$uid = $this->userinfo['id'];
		$config = array('id'=>$uid);
		$info = $this->member->get_one_by_where($config);
		$data['info'] = $info;

		//个人上传作品
		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        
        $limit = 4;
        $offset = ($page - 1) * $limit;
        $pagination = '';

        $where = array('uid'=>$uid);

        $count = $this->works->get_count($where);
        $data['count'] = $count;

        $this->load->library('pagination');
        $config['base_url'] = base_url().'m/index.php?c=user&m=index';
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
		$config['display_pages'] = FALSE;
        $config['query_string_segment'] = 'page';

        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();

        $list = array();
        $where['page'] = true;
        $where['limit'] = $limit;
        $where['offset'] = $offset;
        $where['where'] = array('w.uid'=>$uid);
        $list = $this->works->getList($where);
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
			$add['phone'] = $this->input->post('phone');
			$add['address'] = $this->input->post('address');
			$this->member->update($config,$add);
			header(base_url().'m/index.php?c=user&info');
			redirect(base_url().'m/index.php?c=user&m=info');
			exit;
		}else{

			$userinfo = $this->getMemberinfo();
			$data['userinfo'] = $userinfo;

			$user = $this->get_user_info($userinfo['id']);
			$data['lotterynum'] = $user['lotterynum'];

			$this->load->model('member_mdl','member');
			$uid = $this->userinfo['id'];
			$config = array('id'=>$uid);
			$info = $this->member->get_one_by_where($config);
			$data['info'] = $info;
			$this->load->view('user_info',$data);
		}

	}

	public function edit()
	{

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
		//$userinfo['id'] = 683;
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