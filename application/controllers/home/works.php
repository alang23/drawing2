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
	function myup($id){
		$config['upload_path'] = FCPATH.'/uploads/zuopin/';		   
		$config['allowed_types'] = '*';
		$config['file_name']  =date("YmdHis")."_".$id;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'.$id)){
				$error = array('error' => $this->upload->display_errors());
				echo json_encode($error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$picname = $data['upload_data']['orig_name']; 
			return $picname;
		}
	}
	public function add()
	{

		if(!empty($_POST)){
			$add['title'] = $this->input->post('title');

			$this->load->model('works_mdl','works');
			$id = isset($_POST['id']) ? $_POST['id'] : 0;
			$updateconfig = array('id'=>$id);
			if(!empty($id)){
				$this->works->update($updateconfig,$add);
			}else{	//批量增加作品
				print_r($this->input->post('nickname'));

				$add['title'] = $this->input->post('title1');
				if(!empty($_FILES['userfile1']['name'])){
					$add['file_name'] = $this->myup(1);
				}
				print_r($add);
				$add['title'] = $this->input->post('title2');
				if(!empty($_FILES['userfile2']['name'])){
					$add['file_name'] = $this->myup(2);
				}
				print_r($add);
			}
			
		}else{
			$this->load->view('home/home_works_add',$data);
		}
	}
//
	public function edit()
	{
		$id = $this->input->get('id');
		$config = array('w.id'=>$id);

		$info = $this->works->get_new_by_id($config);
		$data['info'] = $info;

		$this->load->view('home/home_works_edit',$data);
	}
	public function index()
	{
	   $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        $typeid = isset($_GET['typeid']) ? $_GET['typeid'] : 0 ;
		$kw = $this->input->get('kw');
        $data['pagenum'] = $page;
        $data['typeid'] = $typeid;
		

        $limit = 30;
        $offset = ($page - 1) * $limit;
        $pagination = '';
		$where = array();
		if(empty($typeid)){
			 $where['where'] = array('enabled <'=>1);
		}else{
			$where['where'] = array('enabled'=>1);
		}
		
		if(!empty($kw)){
			 $where['where'] = array('w.id'=>$kw);
		}

        //$where = array('enabled'=>$typeid);
        $count = $this->works->get_count($where);
		//echo $count;
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?d=home&c=works&m=index&typeid='.$typeid;
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
        
        $wherelist['where'] = array('w.enabled'=>$typeid);
		if(!empty($kw)){
			 $wherelist['where'] = array('w.id'=>$kw);
		}
        $list = $this->works->getList($wherelist);
        $data['list'] = $list;

       
		$this->load->view('home/home_works',$data);
	}


		//delete
	public function del(){
		$id = $this->input->get('id');
        $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $typeid = isset($_GET['typeid']) ? $_GET['typeid'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
		$where['id'] = $id;
		$this->works->del($where);
		redirect('d=home&c=works&m=index&page='.$page.'&typeid='.$typeid);
	}

        //设置推荐
    public function tuijian()
        {
            $id = $this->input->post('id');
            $is_top = $this->input->post('is_top');

            $config = array('id'=>$id);
            $updatedata = array('is_top'=>$is_top);

            $this->works->update($config,$updatedata);
            $json = array('errcode'=>0,'msg'=>'ok');

            echo json_encode($json);
            exit;
                
    }

    public function shenhe()
    {
            $id = $this->input->post('id');
            $is_top = $this->input->post('is_top');

            $config = array('id'=>$id);
            $updatedata = array('enabled'=>$is_top);

            $this->works->update($config,$updatedata);
            $json = array('errcode'=>0,'msg'=>'ok');

            echo json_encode($json);
            exit;
    }

	

}