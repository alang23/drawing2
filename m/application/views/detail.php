<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美的快净,送你时间</title>
<link href="<?=base_url()?>static/css/style.css" rel="stylesheet" type="text/css" />
<meta name="keywords" content="">
<meta name="description" content="">
<script src="<?=base_url()?>static/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>static/js/archefoucs.js" type="text/javascript"></script>

</head>

<body>
	
<div class="nr">    
	<div class="navBar">
    <div class="logo"><img src="<?=base_url()?>static/images/logo.jpg" /></div>	
    </div>
</div>

<!--flash START-->
<div class="flash">
        <div class="gg" id="gg">
            <div class="ggLoading">
                <div class="ggLoading2"><em>动画载入中</em></div>
            </div>
            <div class="ggs">
                <div class="ggBox" id="ggBox">
                  
                    <a target="_blank"  style="z-index: 3; opacity: 4;"><img src="<?=base_url()?>static/images/banner1.jpg" /></a>       
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner2.jpg"  /></a>                    
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner3.jpg"  /></a>
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner4.jpg"  /></a>                    
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner5.jpg"  /></a>
                </div>
            </div>
            <div class="ggb">
                <div class="ggBtns" id="ggBtns">
                    <a href='javascript:void(0)' class="ggOn"></a>
                    <a href='javascript:void(0)'></a>
                    <a href='javascript:void(0)'></a>
                    <a href='javascript:void(0)'></a>
                    <a href='javascript:void(0)'></a>
                </div>
            </div>
        </div>

</div>
<!--flash END-->

<div class="newslist">
      <div class="newslist_nr">
            <div class="top">
                  <p class="bt"><?=$info['title']?></p>
                  <p class="date">时间：<?=$info['mytime']?></p>
            </div>
            <div class="zw">
              <?=$info['content']?>          
           </div>
           <div class="share">
                 <div class="ico">
<div class="bshare-custom icon-medium"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script><a class="bshareDiv" onclick="javascript:return false;"></a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                 </div>
                 <p>
                  <a href="<?=base_url()?>index.php">返回首页</a>
                  <a href="<?=base_url()?>index.php?c=news">返回新闻列表</a>
                </p>
                 
           </div> 
            
      </div>            
</div>

</body>
</html>
