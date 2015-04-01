<?php


class News extends Base_Controller{



	public function __construct(){

                parent::__construct();
                $this->load->model("logs_mdl",'logs');
	}


	public function index(){

    
               
        	
	}

	public function zan(){
        $id = $this->input->get('id');
           
        if(!empty($id)){
            $ip = '127.0.0.1';
            $zdate = date("Y-m-d");
            $fid = $id;

            $this->load->model('works_mdl','works');
            $checkarr = array('id'=>$id);
            $check = $this->works->get_new_by_id($checkarr);
            if(empty($check)){
                $json = array('err'=>-1,'msg'=>'作品不存在');
                echo json_encode($json);
                exit;
            }

            $where = array('ip'=>$ip,'zdate'=>$zdate,'fid'=>$fid);
            $num = $this->logs->get_count($where);
            
            if($num < 3){
                $add['fid'] = $id;
                $add['uid'] = 0;
                $add['ip'] = $ip;
                $add['islogin'] = 0;
                $add['createtime'] = time();
                $add['zdate'] = $zdate;
                $this->logs->add($add);
                $json = array('err'=>0,'msg'=>'点赞成功');
                    echo json_encode($json);
                    exit;
                }else{
                    $json = array('err'=>-2,'msg'=>'每天每个作品限定点赞三次');
                    echo json_encode($json);
                    exit;
                }
            }
	}
}