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
			$add['phone'] = $this->input->post('phone');
			$add['uid'] = $userinfo['id'];
			$add['createtime'] = time();
			$add['frmid'] = $this->input->post('frmid');;


			if(!empty($_FILES['userfile']['name'])){

	            $config['upload_path'] = FCPATH.'/uploads/zuopin/';
	               
	            //$config['allowed_types'] = '*';
	            $config['allowed_types'] = 'jpg|png';
	             $config['max_size'] = '200K';
	            $config['file_name']  =date("YmdHis");

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload('userfile')){
	                    $error = array('error' => $this->upload->display_errors());
	                    header("Content-type:text/html;charset=utf-8");
	                   // echo json_encode($error);
	                    echo '图片不符合要求';
	                    exit;
	            }else{
	                $data = array('upload_data' => $this->upload->data());
	                $picname = $data['upload_data']['orig_name']; 
					$add['file_name'] = $picname;       
	            }
			}
			if(!empty($add['title']) && !empty($add['file_name']) && !empty($add['phone'])){
				$this->load->model('works_mdl','works');
				if($this->works->add($add)){
					//$this->load->view('sccg');
					if($add['frmid']== 2){
						redirect(base_url().'m');
					}else{
						redirect('c=sccg');
					}
					
				}

			}

			//redirect('');
			//exit;

		}else{
			$userinfo = $this->getMemberinfo();

			$this->load->view('upload');
		}
	}


}