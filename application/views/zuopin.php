<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>作品馆</title>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<link href="<?=base_url()?>static/css/zpg.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.act.js"></script>
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/common.js"></script>
</head>

<!--监测代码Part A-->
<script type='text/javascript'>
//<![CDATA[
//Miaozhen Base Code Start
  _mzh=window._mzh || []; _mzt=window._mzt || []; _mz_dp=window._mz_dp || [];
  (function (doc) {
    var t=parseInt((new Date()).getTime()/1000);
    var v=t-t%300;
    var js=doc.createElement("script"),
        fs=doc.getElementsByTagName("script")[0];
    js.src="http://js.miaozhen.com/t.js?v="+v;
    fs.parentNode.insertBefore(js, fs);
  })(document);
  function _mz_evt(ae,n) {_mzh.push(['evt._set_ae', ae], ['evt._set_n', n], ['evt._send']);}
  function _mz_mevt(ae,n) {_mzh.push(['mevt._set_ae', ae], ['mevt._set_n', n], ['mevt._send']);}
  function _mz_simple(cmd) {_mzh.push(['_simple',cmd]);}
  function _mz_simple_param(n,k,v) {_mz_dp[n]=_mz_dp[n]||{};_mz_dp[n][k]=v;}
  function _mz_timer_start(n,u) {_mzt.push(n);if(u)_mzh.push([n+'._urlpre',u]);_mz_simple(n+'._timer_start');}
  function _mz_timer_start_x(n,u) {for(i=0;i<=_mzt.length;i++)_mz_timer_stop(_mzt[i]); _mzt=[];_mzt.push(n);_mz_timer_start(n,u);}
  function _mz_timer_stop(n) {_mz_simple(n+'._timer_stop');}
  _mz_simple_param(0,'timer_start',[10,30*60,0,'v','st:$1,si:$2,']);
//Miaozhen Base Code End
//]]>
</script>
<body>
  <a href="javascript:void(0);" data-reveal-id="myModal_dzcg" id="myclick"></a>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
 <?php Widget::website_header();?>
            <div class="better" style=" border-top:0px; padding-top:0px;">
            	<h2>作品馆</h2>
                <div class="search">  
                	<p class="zpg_paixu">排序：<a href="<?=base_url()?>index.php?c=zuopin&m=index&orders=time">时间</a> | <a href="<?=base_url()?>index.php?c=zuopin&m=index&orders=piao">点赞数</a></p>
                    <p class="zpg_total">作品数量：<span><?=$count?></span></p>              	
                	<div id="search_box"> 
            <form id="search_form" method="get" action="<?=base_url()?>index.php?c=zuopin"> 
              <input type="hidden" name="c" value="zuopin" />
              <input type="text" id="s" value="输入用户名搜索" name="kw" onfocus="this.value=''" onblur="if(this.value==''){this.value='输入用户名搜索'}" class="swap_value" value="<?=$kw?>"/> 

              <input type="image" src="<?=base_url()?>/static/images/sheach.png" width="23" height="22" id="go" alt="Search" title="Search" /> 
            </form> 
					</div>
                </div>
                <div class="clear"></div>
                <ul>
                  <?php
                  $num = 0;
                    foreach($list as $k => $v){
                      $num++;
                      if($num < 3){
                  ?>
                  
                  <li>
                      <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>"><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/thumb/<?=$v['file_name']?>"  onload="DrawImage(this, 250, 177);"></a></p>
                        <p class="name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" ><?=mb_substr($v['title'],0,10,'utf-8')?></a></p>
                        <p class="zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        <p class="clear"></p>
                        <p class="author">作者：<a href="#"><?=mb_substr($v['nickname'],0,10,'utf-8')?></a></p>
                        <?php
                          if(empty($userinfo)){

                          
                        ?>
                         <p class="button2"><a href="javascript:void(0);" data-reveal-id="myModal" target="_blank" id="logindiv" class="dianzan">
                          <?php
                        }else{
                          ?>
                        <p class="button2"><a href="javascript:void(0);" onclick="zan(<?=$v['id']?>);" class="dianzan"></a>
                          <?php
                        }
                          ?>
                          <a href="javascript:void(0);" onclick="$.setCopy('<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>','no',false,'请复制以下邀请好友链接发送给您的朋友：','复制成功!发个您的好友邀请Ta来投票吧！')"  class="jizan"></a></p>
                    </li>
                    <div class="kong"></div>
                  
                    <?php
                      }else{
                        $num = 0;
                    ?>
                    <li>
                      <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" ><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/thumb/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <p class="name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" ><?=mb_substr($v['title'],0,10,'utf-8')?></a></p>
                        <p class="zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        <p class="clear"></p>
                        <p class="author">作者：<a href="#" ><?=mb_substr($v['nickname'],0,10,'utf-8')?></a></p>
                                               <?php
                          if(empty($userinfo)){

                          
                        ?>
                         <p class="button2"><a href="javascript:void(0);" data-reveal-id="myModal" target="_blank" id="logindiv" class="dianzan">
                          <?php
                        }else{
                          ?>
                        <p class="button2"><a href="javascript:void(0);" onclick="zan(<?=$v['id']?>);" class="dianzan"></a>
                          <?php
                        }
                          ?>
                          <a href="javascript:void(0);" onclick="$.setCopy('<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>','no',false,'请复制以下邀请好友链接发送给您的朋友：','复制成功!发个您的好友邀请Ta来投票吧！')" class="jizan"></a></p>
                    </li>
                    <?php 
                      }

                    }
                    ?>

                </ul>
                <div class="clear"></div>
            </div>
            <div class="fy_line"></div>
            <div class="fy" style=" padding-top:20px;">
               <!--
                    <div class="lr"><a>首页</a></div>
                    <div class="lr"><a>上一页</a></div>
                    <div class="ym">1</div>
                    <div class="ymx"><a href="#">2</a></div>
                    <div class="ymx"><a href="#">3</a></div>
                    <div class="ymx"><a href="#">4</a></div>

                    <div class="lr"><a>下一页</a></div>
                    <div class="lr"><a>尾页</a></div>
                -->
                
               <?=$page?>
           </div> 
       </div>
	</div>
  
    <div class="bg_zpg"></div>
    <?php Widget::dialog();?>

    <?php Widget::dianzan();?>

    <script type="text/javascript">

	$(function(){

getCode();
})

  var dmtJsHost = (("https:" == document.location.protocol) ? "https" : "http");
  document.write(unescape("%3Cscript src='" + dmtJsHost + "://d.matrixdigi.com/js/mfa.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
  var dmtTracker = _dmt.init("dmx", "S-000072-01");
  dmtTracker._setTrack(dmtJsHost + '://mo.dmtrck.com');
  dmtTracker._trackSpotLight();
} catch(err) {}
</script>
</body>
</html>
