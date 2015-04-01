<?php

/**
* 微博返回值
*
**/
class Weibocallback extends Base_Controller
{
	


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		
		$this->load->library('wauth');

		//$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );
		$arr['consumer_key'] = $this->config->item('Key');
		$arr['consumer_secret'] = $this->config->item('Secret');
		$arr['oauth_token'] = NULL;
		$arr['oauth_token_secret'] = NULL;
		$this->wauth->getOauth($arr);

		if (isset($_REQUEST['code'])) {
			$keys = array();
			$keys['code'] = $_REQUEST['code'];
			$keys['redirect_uri'] = $this->config->item('Callback') ;
			try {
				$token = $this->wauth->getAccessToken( 'code', $keys ) ;
			} catch (OAuthException $e) {

			}
		}

		if (!empty($token)) {
			
			$this->session->set_userdata('token',$token);
			//setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
			//$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
			$arr2['consumer_key'] = $this->config->item('Key');
			$arr2['consumer_secret'] = $this->config->item('Secret');
			$arr2['access_token'] = $token['access_token'];
			
			$this->load->library('wclient');
			$this->wclient->getOauth($arr2);
			$ms  = $this->wclient->home_timeline(); // done
			$uid_get = $this->wclient->get_uid();
			$uid = $uid_get['uid'];
			$user_message =$this->wclient->show_user_by_id( $uid);//根据ID获取用户等基本信息
		//	print_r($user_message);
			if(!empty($user_message)){
				$this->load->model('member_mdl','member');
				$where = array('openid'=>$user_message['id']);
				$check = $this->member->get_one_by_where($where);
				//print_r($check);
				//exit;
				if(empty($check)){
					$add['openid'] = $user_message['id'];
					$add['nickname'] = $user_message['screen_name'];
					$add['figureurl'] = $user_message['profile_image_url'];
					$add['createtime'] = time();
					$add['types'] = '2'; //1-qq,2-weibo
					
					if(!empty($add['openid']) && !empty($add['nickname'])){
						if($this->member->add($add)){
							$add['id'] = $this->member->insert_id();
							//print_r($add);
							//exit;
							$this->session->set_userdata('logininfo',$add);
							
						}
					}else{
						exit('授权失败');
					}

				}else{
					$this->session->set_userdata('logininfo',$check);
				}
				//redirect('');
				header("Location:http://annil2015.matrixdigi.com/drawing/m/index.php");
			}else{
				exit('授权失败!');
			}

		}
		
	}
}