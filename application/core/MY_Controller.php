<?php

class Base_Controller extends CI_Controller
{
    var $memberinfo = array();

    public function __construct()
    {
        parent::__construct();
         $this->widget('widget');

    }

    protected function Widget($name = '')
    {


        if (isset($name) && $name != '')
        {
            require_once APPPATH.'widgets/'.$name.EXT;
        }

    }

    public function getMemberinfo(){
        $token = $this->session->userdata('logininfo');
        if(!empty($token)){
            return $token;
        }
    }

    public function checkmember($lang,$url)
    {
        $token = $this->getMemberinfo();
        
        if(empty($token)){
            redirect(base_url().'index.php?c=signin&lang='.$lang.'&redurl='.$url);
        }
    }



}

class Admin_Controller extends CI_Controller
{

    public $userinfo = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->Widget('widget');
        $this->checkLogin();
    }

    public function checkLogin()
    {
        $token = $this->session->userdata('token');
        if(empty($token)){
            redirect('d=home&c=login');
        }

        $this->userinfo = $token;
    }

    protected function Widget($name = '')
    {


        if (isset($name) && $name != '')
        {

            require_once APPPATH.'widgets/'.$name.EXT;

        }


    }
}