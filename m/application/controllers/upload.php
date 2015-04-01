<?php
/**
*用户上传作品
*
**/
class Upload extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		

	}

	public function index()
	{

		$userinfo = $this->getMemberinfo();
		if(!empty($_POST)){
			$add['title'] = $this->input->post('title');
			$add['intro'] = $this->input->post('intro');
			$add['uid'] = $userinfo['id'];
			$add['createtime'] = time();
			$add['frmid'] = 2;

			if(!empty($_FILES['userfile']['name'])){

	            $config['upload_path'] = FCPATH.'/uploads/zuopin/';
	               
	            $config['allowed_types'] = '*';
	            $config['file_name']  =date("YmdHis");

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload('userfile')){
	                    $error = array('error' => $this->upload->display_errors());
	                    echo json_encode($error);
	            }else{
	                $data = array('upload_data' => $this->upload->data());
	                $picname = $data['upload_data']['orig_name']; 
					$add['file_name'] = $picname;       
	            }
			}
			if(!empty($add['title']) && !empty($add['intro']) && !empty($add['file_name'])){
				$this->load->model('works_mdl','works');
				if($this->works->add($add)){
					//$this->load->view('sccg');
					redirect(base_url().'m');
				}

			}

			//redirect('');
			//exit;

		}else{

			//读取用户最后上传作品填写的手机号
			$this->load->model('works_mdl','works');
			$config = array('uid'=>$userinfo['id']);
			$work = array();
			$work = $this->works->get_new_by_id($config);
			$data['work'] = $work;
			//print_r($work);
			
			$this->load->view('upload',$data);
		}
	}


}