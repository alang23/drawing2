<?php

class Thumb extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->library('myqc');
		//$this->myqc->index();
		//$this->myqc->qq_login();

		//echo $this->myqc->qq_callback();
		//echo $this->myqc->get_openid();

		//$consumer_key, $consumer_secret,
		//$arr['consumer_key'] = $this->config->item('Key');
		//$arr['consumer_secret'] = $this->config->item('Secret');
		//$arr['oauth_token'] = NULL;
		//$arr['oauth_token_secret'] = NULL;

		//$this->load->library('wauth');
		//$keys = $this->wauth->getRequestToken();
		//$this->wauth->getOauth($arr);
		//$keys = $this->wauth->getRequestToken();
		//print_r($keys);
		//$aurl = $this->wauth->getAuthorizeURL( $this->config->item('Callback') );
		//$this->session->set_userdata('keys',$keys);
		//$aurl = $this->wauth->getAuthorizeURL( $keys['oauth_token'] ,false , $this->config->item('Callback'));
		//echo $aurl;
		//header("Location:".$aurl);

		$dir='./uploads/zuopin/';//原图  ;//这里输入其它路径 
		//PHP遍历文件夹下所有文件 
		$handle=opendir($dir."."); 
		//定义用于存储文件名的数组 
		$array_file = array(); 
		while (false !== ($file = readdir($handle))) 
		{ 
		if ($file != "." && $file != "..") { 
		$array_file[] = $file; //输出文件名 
		} 
		} 
		closedir($handle); 
		//print_r($array_file); 
		//exit;
		$this->load->library("image_lib");//载入图像处理类库 
		foreach($array_file as $k => $v){
			$config_big_thumb=array(  
	                    'image_library' => 'gd2',//gd2图库  
	                    'source_image' => './uploads/zuopin/'.$v,//原图  
	                    'new_image' => "./uploads/thumb/".$v,//大缩略图  
	                    'create_thumb' => true,//是否创建缩略图  
	                    'maintain_ratio' => true,  
	                    'width' => 200,//缩略图宽度  
	                    'height' => 200,//缩略图的高度  
	                   // 'thumb_marker'=>"_300_300"//缩略图名字后加上 "_300_300",可以代表是一个300*300的缩略图  
	        ); 

	        $this->image_lib->initialize($config_big_thumb);  
	        $this->image_lib->resize();//生成big缩略图  
		}
		/*
		$config_big_thumb=array(  
                    'image_library' => 'gd2',//gd2图库  
                    'source_image' => './uploads/zuopin/20150321005504.jpg',//原图  
                    'new_image' => "./uploads/thumb/20150321005504_small.jpg",//大缩略图  
                    'create_thumb' => true,//是否创建缩略图  
                    'maintain_ratio' => true,  
                    'width' => 200,//缩略图宽度  
                    'height' => 200,//缩略图的高度  
                   // 'thumb_marker'=>"_300_300"//缩略图名字后加上 "_300_300",可以代表是一个300*300的缩略图  
        ); 

        $this->image_lib->initialize($config_big_thumb);  
        $this->image_lib->resize();//生成big缩略图  
        */

	}
}