<?php
/**
 * 单例模式实现widget.
 *
 * widget即小组件包含自己的控制器，视图，模型(可以共用普通model)。
 * 通常用来实现各页面都有的公共部分
 *
 * @author ricky
 * @since  2010/12/24 09:00
 */
class Widget extends CI_Controller
{
    /**
     * 静态ci对象
     */
    public static $_ci;

    /**
     * 私有构造函数用于实现单例模式
     */
    public function __construct()
    {
        parent::__construct();
        self::$_ci = & get_instance();//php 5.3中self改为static
    }
    /**
     * 获取当前类名
     */
    private static function _getClass()
    {
        return __CLASS__;
    }

    public static function website_header()
    {
                /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $userinfo = array();
        $userinfo = self::getMemberinfo();
        $data['userinfo'] = $userinfo;
        //print_r($userinfo);
        //echo 'asdfasdfasfasd';
        $nav = self::$_ci->router->class;
        $data['nav'] = $nav;

        //中奖次数
        $user = array();
        if(!empty($userinfo)){
             $instance->load->model('member_mdl','member');   
            $userconfig = array('id'=>$userinfo['id']);  
            $member = new member_mdl();
            $config = array('id'=>$userinfo['id']);
            $user = $member->get_one_by_where($config);
             $num = $user['piao'];
            $lotterynum = $num/3;
            $user['lotterynum'] = (int)$lotterynum;
          
        }
        $data['user'] = $user;

       // $num = $user['piao'];
       // $lotterynum = $num/3;
       // $user['lotterynum'] = (int)$lotterynum;
        

        $instance->load->view('widget/website_header',$data);
    }

    public static function dialog()
    {
                /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('dialog');
    }

    public static function dianzan()
    {
                /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('dianzhan');
    }
    /**
     * 普通控制器方法
     */
    public static function footer()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('footer');
    }

        /**
     * 普通控制器方法
     */
    public static function navigate()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('navigate');
    }





    public static function footer_cn()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('footer_cn');
    }



    /**
     * 普通控制器方法
     */
    public static function head()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_head');
    }

    /**
     * 普通控制器方法
     */
    public static function top()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_top');
    }

    /**
     * 普通控制器方法
     */
    public static function sidebar()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_sidebar');
    }

    /**
     * 普通控制器方法
     */
    public static function page_heade()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_page_head');
    }


        //判断用户是否登录
    public  function getMemberinfo(){
        $token = self::$_ci->session->userdata('logininfo');
        if(!empty($token)){
            return $token;
        }
    }



}