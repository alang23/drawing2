<?php


class Lottery_log extends Admin_Controller
{
	


	public function __construct()
	{
		parent::__construct();
		$this->load->model('lottery_logs_mdl','lottery_log');
	}


	public function index()
	{
		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
      
        $limit = 20;
        $offset = ($page - 1) * $limit;
        $pagination = '';
        $where = array();
     
        $count = $this->lottery_log->get_count();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?d=home&c=lottery_log';
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
        $list = $this->lottery_log->getList($wherelist);
        $data['list'] = $list;
		$this->load->view('home/home_lottery_log',$data);

	}

		//delete
	public function del(){
		$id = $this->input->get('id');
		$where['id'] = $id;
		$this->lottery_log->del($where);
		redirect('d=home&c=lottery_log');
	}



}