<?php


class Lottery extends Admin_Controller
{
	


	public function __construct()
	{
		parent::__construct();
		$this->load->model('lottery_mdl','lottery');
	}


	public function index()
	{
		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        $typeid = isset($_GET['typeid']) ? $_GET['typeid'] : 0;
        $data['typeid'] = $typeid;

        $limit = 20;
        $offset = ($page - 1) * $limit;
        $pagination = '';
        $where = array();
        if(!empty($typeid)){
        	$where = array('typeid'=>$typeid);
        }
        $count = $this->lottery->get_count();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?d=home&c=lottery&typeid='.$typeid;
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
        $list = $this->lottery->getList($wherelist);
        $data['list'] = $list;
		$this->load->view('home/home_lottery',$data);

	}

	public function add()
	{

		if(!empty($_POST)){
			$add['title'] = $this->input->post('title');
			$add['intro'] = $this->input->post('intro');
			$add['total'] = $this->input->post('total');
			$add['sheng'] = $this->input->post('sheng');
			$add['typeid'] = $this->input->post('typeid');

			if(!empty($_FILES['userfile']['name'])){

	            $config['upload_path'] = FCPATH.'/uploads/lottery/';
	               
	            $config['allowed_types'] = '*';
	            $config['file_name']  =date("YmdHis");

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload('userfile')){
	                    $error = array('error' => $this->upload->display_errors());
	                    echo json_encode($error);
	            }else{
	                $data = array('upload_data' => $this->upload->data());
	                $picname = $data['upload_data']['orig_name']; 
					$add['pic'] = $picname;       
	            }
			}
			if(!empty($add['title']) && !empty($add['intro']) && !empty($add['typeid'])){
				$this->load->model('lottery_mdl','lottery');
				$id = isset($_POST['id']) ? $_POST['id'] : 0;
				$updateconfig = array('id'=>$id);
				if(!empty($id)){
					
					$this->lottery->update($updateconfig,$add);
				}else{
					$this->lottery->add($add);
				}
				
			}

		}else{
			$typeid = $this->input->get('typeid');
			$data['typeid'] = $typeid;
			$this->load->view('home/home_lottery_add',$data);
		}
	}

	//
	public function edit()
	{
		$id = $this->input->get('id');
		$config = array('id'=>$id);

		$info = $this->lottery->get_new_by_id($config);
		$data['info'] = $info;

		$this->load->view('home/home_lottery_edit',$data);
	}
}