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
		//$userinfo = array('id'=>2);
		if(!empty($_POST)){
			$add['title'] = $this->input->post('title');
			$add['intro'] = $this->input->post('intro');
			$add['uid'] = $userinfo['id'];
			//$add['phone'] = $this->input->post('phone');
			$add['createtime'] = time();
			$add['frmid'] = isset($_POST['frmid']) ? $_POST['frmid'] : 1; //上传来源 1-pc，2-移动
			$add['enabled'] = 1;
			//print_R($_POST);
			//exit;
			
			if(!empty($_FILES['userfile']['name'])){

	            $config['upload_path'] = './uploads/zuopin/';
	               
	            //$config['allowed_types'] = '*';
	            $config['allowed_types'] = 'jpg|png';
				$config['max_size'] = 0;
	            $config['file_name']  =date("YmdHis");

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload('userfile')){
	                    $error = array('error' => $this->upload->display_errors());
	                    //echo json_encode($error);
	                    header("Content-type:text/html;charset=utf-8");
	                   // echo json_encode($error);
	                    echo '图片大小超k了';
	                    exit;
	            }else{
	                $data = array('upload_data' => $this->upload->data());
	                $picname = $data['upload_data']['orig_name']; 
					$add['file_name'] = $picname;  

					//生成所略图
					$this->load->library("image_lib");//载入图像处理类库  
					$config_big_thumb=array(  
	                    'image_library' => 'gd2',//gd2图库  
	                    'source_image' => './uploads/zuopin/'.$picname,//原图  
	                    'new_image' => "./uploads/thumb/".$picname,//大缩略图  
	                    'create_thumb' => true,//是否创建缩略图  
	                    'maintain_ratio' => true,  
	                    'width' => 250,//缩略图宽度  
	                    'height' => 177,//缩略图的高度  
	                    'thumb_marker'=>""//缩略图名字后加上 "_300_300",可以代表是一个300*300的缩略图  
                	);  
                	$this->image_lib->initialize($config_big_thumb);  
                	$this->image_lib->resize();//生成big缩略图      
	            }
			}
			if(!empty($add['title']) && !empty($add['file_name'])){
				$this->load->model('works_mdl','works');
				if($this->works->add($add)){
					//$this->load->view('sccg');
					if($add['frmid'] == 2){
						redirect(base_url().'m/index.php?c=sccg');
						
					}else{						
						redirect(base_url().'index.php?c=sccg');
					}
					
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

			
			$this->load->view('upload',$data);
		}
	}


}