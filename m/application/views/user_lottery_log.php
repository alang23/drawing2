<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安奈儿第五届-全国亲子创意大赛</title>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<link href="<?=base_url()?>static/css/grzx.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
</head>

<body>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
<?php Widget::website_header();?>
            <div class="grzx">
                 <div class="head"><img src="<?=base_url()?>static/images/grzx_head.jpg"></div>
              <p class="name">昵称：keke</p>
                 <p class="xinxi"><a href="grzx_1.html">查看中奖记录</a> &nbsp;&nbsp;您还有 <span style=" color:#fd4d00; text-decoration:underline;">10次</span> 抽奖机会</p>
                 <p class="xinxi2">为了方便中奖与您取得联系请完善资料</p>
                 <div class="btn"><a href="grzx_2.html"><img src="<?=base_url()?>static/images/grzx_btn1.jpg"></a></div>
            </div>
            <div class="better">
                <div class="wszl">请完善以下信息，以便工作人员联系：</div>
                <div class="grzx_tb">
                      <label for="UserName">真实姓名：</label>
                      <input type="text" name="realname" id="UserName" value="<?=$info['realname']?>">
                      <label for="Address">联系地址：</label>
                      <input type="text" name="address" id="Address" value="<?=$info['address']?>">
                      <a href="#" class="qdxx"></a>
                </div>    
           </div>
             
        </div>
    </div>
	<div class="bg_grzx"></div>
    
    <div id="myModal" class="reveal-modal">
	     <div class="qq"><img src="<?=base_url()?>static/images/dlts_qq.png"></div>
         <div class="weibo"><img src="<?=base_url()?>static/images/dlts_weibo.png"></div>
	     <a class="close-reveal-modal">×</a> 

    </div>
    
</body>
</html>
