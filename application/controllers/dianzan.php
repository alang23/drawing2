<?php


class Dianzan extends Base_Controller{



	public function __construct(){

                parent::__construct();
                $this->load->model("logs_mdl",'logs');
                $this->load->model('works_mdl','works');
	}


	public function index(){

    
               
        	
	}

	public function zan(){

        $id = $this->input->post('id');
        $userinfo = $this->getMemberinfo();
		$code = $this->input->post('acode');

		$checkcode = $this->session->userdata('auth_code');
		if($checkcode != $code){
				exit(json_encode(array('err' => '-4','msg'=> '验证码错误' )));
		}

        if(empty($userinfo)){
                $json = array('err'=>-2,'msg'=>'每天每个作品限定点赞三次');
                echo json_encode($json);
                exit;
        }
        if($id == '1683' || $id == 2721){
                $json = array('err'=>-2,'msg'=>'每天每个作品限定点赞三次');
                echo json_encode($json);
                exit;
        }

        if(!empty($id)){
            $ip = $this->GetIP();
            $zdate = date("Y-m-d");
            $fid = $id;

            $this->load->model('works_mdl','works');
            $checkarr = array('w.id'=>$id);
            $check = $this->works->get_new_by_id($checkarr);
            if(empty($check)){
                $json = array('err'=>-1,'msg'=>'作品不存在');
                echo json_encode($json);
                exit;
            }

            $uid = 0;
            if(!empty($userinfo)){
                $uid = $userinfo['id'];
                $where = array('ip'=>$ip,'zdate'=>$zdate,'fid'=>$fid,'uid'=>$uid);
                $add['uid'] = $uid;
                $add['islogin'] = 1;
            }else{
                 $where = array('ip'=>$ip,'zdate'=>$zdate,'fid'=>$fid);
                 $add['uid'] = 0;
                 $add['islogin'] = 0;
            }
           
            $num = $this->logs->get_count($where);
            
            if($num < 3){
                $add['fid'] = $id;
                $add['uid'] = $uid;
                $add['ip'] = $ip;             
                $add['createtime'] = time();
                $add['zdate'] = $zdate;
                $this->logs->add($add);

                $this->works->update_zan($add['fid'],$add['islogin']);
                $json = array('err'=>0,'msg'=>'点赞成功');
				//增加点数
				$this->load->model('member_mdl','member');
                if(!empty($userinfo)){
                    $this->member->jia($userinfo['id']);
                   
                }
                echo json_encode($json);
                exit;
            }else{
                $json = array('err'=>-2,'msg'=>'每天每个作品限定点赞三次');
                echo json_encode($json);
                exit;
            }
        }
	}

	//获取验证码
	public function get_code()
	{
		$this->load->library('Authcode');
        $code = new Authcode();
        $code->show();
	}


	public function checkcode()
	{
			$code = $this->input->post('acode');
			$checkcode = $this->session->userdata('auth_code'); 
			if($checkcode != $code){
				exit(json_encode(array('err' => '-2','msg'=> '验证码不正确' )));
			}else{
				exit(json_encode(array('err' => '0','msg'=> '验证码正确' )));
			}
	}

    private function GetIP(){

        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
        else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER['REMOTE_ADDR'];
        else
        $ip = "unknown";

        return($ip);
        } 
    }