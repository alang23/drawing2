<?php

class Common{
	
	
	/**
    * CI句柄
    * 
    * @access private
    * @var object
    */
	private $_CI;

  
	
	public function __construct()
	{
		        /** 获取CI句柄 */
		$this->_CI = & get_instance();

	}

        /**
     * 字符串截取，支持中文和其他编码
     *
     * @static
     * @access public
     * @param string $str 需要转换的字符串
     * @param string $start 开始位置
     * @param string $length 截取长度
     * @param string $charset 编码格式
     * @param string $suffix 截断显示字符
     * @return string
     */
    public static function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
    {
        if(function_exists("mb_substr"))
             mb_substr($str, $start, $length, $charset);
        elseif(function_exists('iconv_substr')) {
             iconv_substr($str,$start,$length,$charset);
        }
        $re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
        $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
        $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
        $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
        if($suffix) return $slice."…";
        return $slice;
    }




}