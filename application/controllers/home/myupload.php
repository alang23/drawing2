<?php

class Myupload extends Admin_Controller
{
	

		public function __construct()
		{
			parent::__construct();
			 $this->load->model('works_mdl','works');

		}	


		public function index()
		{



			if(!empty($_POST)){
                /**
                 * 批量上传证书图片
                 */
                //echo FCPATH.'/uploads/zuopin/';//.$id;
               // exit;
                $uid = 0;
                $nickname = $this->input->post('nickname');
                if(!empty($nickname)){
                	$nameconfig = array('nickname'=>$nickname);
                	$this->load->model('member_mdl','member');
                	$check = $this->member->get_one_by_where($nameconfig);
                	if(!empty($check)){
                		$uid = $check['id'];
                	}else{
                		$madd['openid'] = time().mt_rand(0,99);
                		$madd['nickname'] = $nickname;
                		$madd['createtime'] = time();
                		$madd['flag'] = 1;
                		$this->member->add($madd);
                		$uid = $this->member->insert_id();
                	}
                	
                }
                
                $title = $this->input->post('title');
                $createtime = $this->input->post('createtime');
                $num = 0;
                if(!empty($_FILES['userfile'])){ 
                    $this->load->library('upload');
                    $this->load->library("image_lib");//载入图像处理类库  
                    $upload_path = FCPATH.'uploads/zuopin/';//.$id;
                    if(!is_dir($upload_path)){
                        mkdir($upload_path);
                    }
                    $count = count($_FILES['userfile']['name']);

                    //重新构造 $_FILES
                    for($i=0; $i<$count; $i++){
                        foreach($_FILES['userfile'] as $k => $v){
                            $_FILES['newfile'][$k] = $v[$i];
                        }

                        if(!empty($_FILES['newfile']['name'])){



                        	$upload_config = array(
	                            'upload_path'   => $upload_path,
	                            'allowed_types' => '*',
	                            'max_size'      => '2048',
	                            'max_width'     => '2048',
	                            'max_height'    => '2048',
	                            'file_name'     => time().mt_rand(0,999)
	                        );
	                        $this->upload->initialize($upload_config);
	                        if ($this->upload->do_upload('newfile')) {
	                                $updata = array('upload_data' => $this->upload->data());
	                                $picname = $updata['upload_data']['orig_name'];
	                                
	                                //生成所略图
									
									$config_big_thumb=array(  
					                    'image_library' => 'gd2',//gd2图库  
					                    'source_image' => FCPATH.'uploads/zuopin/'.$picname,//原图  
					                    'new_image' => FCPATH."uploads/thumb/".$picname,//大缩略图  
					                    'create_thumb' => true,//是否创建缩略图  
					                    'maintain_ratio' => true,  
					                    'width' => 250,//缩略图宽度  
					                    'height' => 177,//缩略图的高度  
					                    'thumb_marker'=>""//缩略图名字后加上 "_300_300",可以代表是一个300*300的缩略图  
				                	);  
				                	$this->image_lib->initialize($config_big_thumb);  
				                	$this->image_lib->resize();//生成big缩略图      
								if( !empty($picname) || !empty($title[$i]) || !empty($uid)){
									$add['uid'] = $uid;

					               $add['file_name'] = $picname;
					               $add['title'] = $title[$i];
					               $add['createtime'] = strtotime($createtime[$i]);
					              
					               $this->works->add($add);
								}else{
									exit('信息不完整');
								}		           

				               $num++;

                        	}

                        } else { 
                                echo $this->upload->display_errors();
                        }
                    }

                }
               echo '成功上传了:'.$num.'张图片';
			}else{

				$dates = array();
				$date1 = strtotime(date("Y-m-d"));
				$date2 = time();

				//echo $date2;
				//exit;
				$num = 10;
				$i=0;
				while ($i < $num){
				 $date = $this->rand_time($date1,$date2);
				 $datea[]= $date;
				 $i++;
				}
				sort($datea);

				foreach ($datea as $values)
				{

				//echo $values."<br>";
					$dates[] = $values;

				}

				$data['dates'] = $dates;

				$this->load->view('home/home_uploads',$data);
			}
		}

		private function rand_time($a,$b)
		{
			//$a=strtotime($a);
			//$b=strtotime($b);
			return date( "Y-m-d H:m:s", mt_rand($a,$b));
		} 
}