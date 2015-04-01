<?php
/**
*@作品
**/

class Works extends Admin_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Works_mdl','works');
	}


	public function index()
	{
	   $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;

        $limit = 10;
        $offset = ($page - 1) * $limit;
        $pagination = '';

        $count = $this->works->get_count();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?d=home&c=works';
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();

        $list = array();
        $where['page'] = true;
        $where['limit'] = $limit;
        $where['offset'] = $offset;
        $list = $this->works->getList($where);
        $data['list'] = $list;
		$this->load->view('home/home_works',$data);
	}


		//delete
	public function del(){
		$id = $this->input->get('id');
		$where['id'] = $id;
		$this->works->del($where);
		redirect('d=home&c=works');
	}

	

}