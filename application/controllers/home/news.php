<?php

class News extends Admin_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_mdl','news');
	}


	public function index(){

	
		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;

        $limit = 10;
        $offset = ($page - 1) * $limit;
        $pagination = '';

        $count = $this->news->get_count();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?d=home&c=news';
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
        $list = $this->news->getList($where);
        $data['list'] = $list;
		$this->load->view('home/home_news',$data);

	}

	public function add(){

		if(!empty($_POST)){
			$title = $this->input->post('title');
			$mytime = $this->input->post('mytime');
			$content = $this->input->post('newsContent');
			$lang = $this->input->post('lang');
			print_r($_POST);
			exit;
			if(!empty($title) && !empty($content)){

	            $dataarr['title'] = $title;
	            $dataarr['mytime'] = $mytime;
	            $dataarr['content'] = $content;
	            $dataarr['createtime']  = time();

	            $this->news->add($dataarr);
	            redirect('d=home&c=news&lang='.$lang);
	           
	           
			}

		}else{
			
			$this->load->view('home/home_news_add');	
		}
	}

	//update
	public function update(){
		if(!empty($_POST)){
			header("Content-type:text/html; charset=utf-8");
			$title = $this->input->post('title');
			$mytime = $this->input->post('mytime');
			//$content = $this->input->post('newsContent');
			$content = $_POST['newsContent'];
			//echo $content;
			//exit;
			$id = $this->input->post('id');
			if(!empty($title)  && !empty($content) && !empty($id)){

	            $dataarr['title'] = $title;
	            $dataarr['mytime'] = $mytime;
	            $dataarr['content'] = $content;

	            $where['id'] = $id;
	            $this->news->update($where,$dataarr);
	            redirect('d=home&c=news');
	        }

		}else{

			$id = $this->input->get('id');

			$config['id'] = $id;
			$info = $this->news->get_new_by_id($config);
			$data['info'] = $info;

			$this->load->view('home/home_news_edit',$data);
		}

	}
	//delete
	public function del(){
		$id = $this->input->get('id');
		$where['id'] = $id;
		$this->news->del($where);
		redirect('d=home&c=news');
	}
}