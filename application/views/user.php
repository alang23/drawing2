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
<script type="text/javascript" src="<?=base_url()?>static/js/common.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.act.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>

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
</head>

<body>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
<?php Widget::website_header();?>
            <div class="grzx">
                 <div class="head"><img src="<?=$userinfo['figureurl']?>"></div>
              <p class="name">昵称：<?=$userinfo['nickname']?></p>
                 <p class="xinxi"><a href="<?=base_url()?>index.php?c=user&m=lottery_log">查看中奖记录</a> &nbsp;&nbsp;您还有 <span style=" color:#fd4d00; text-decoration:underline;"><?=$lotterynum?>次</span> 抽奖机会</p>
              <p class="xinxi2">为了方便中奖与您取得联系请完善资料</p>
                 <div class="btn"><a href="<?=base_url()?>index.php?c=user&m=info"><img src="<?=base_url()?>/static/images/grzx_btn1.jpg"></a></div>
            </div>
            <div class="better">
            	<h2>我上传的照片</h2>
                <div class="grzx_btn2"><a href="<?=base_url()?>index.php?c=upload" class="up"></a></div>
                <div class="clear"></div>
                <ul>
                  <?php
                  $num = 0;
                    foreach($list as $k => $v){
                      $num++;
                      if($num < 3){
                  ?>
                	<li>
                        <?php
                            if($v['enabled'] == 1){
                        ?>
                         <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <p class="name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" ><?=mb_substr($v['title'],0,10,'utf-8')?></a></p>
                        <p class="zan"><img src="<?=base_url()?>/static/images/zan.png"><?=$v['ji']+$v['zan']?></p>
                        <p class="clear"></p>
                        <p class="grzx_btn3"><a  onclick="$.setCopy('<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>','no',false,'请复制以下邀请好友链接发送给您的朋友：','复制成功!发个您的好友邀请Ta来投票吧！')"  class="yaoq"></a></p>
                        <?php
                            }else{
                        ?>
                        <p class="image"><a href="javascript:void(0);" ><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>

                            <p class="ztai">当前状态：已上传/审核中</p>   
                        <?php
                            }
                        ?>
                    </li>
                    <div class="kong"></div>
                   <?php
                      }else{
                        $num = 0;
                    ?>
                    <li>
                       
                        <?php
                            if($v['enabled'] == 1){
                        ?>
                         <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <p class="name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" ><?=mb_substr($v['title'],0,10,'utf-8')?></a></p>
                        <p class="zan"><img src="<?=base_url()?>/static/images/zan.png"><?=$v['ji']+$v['zan']?></p>
                        <p class="clear"></p>
                        <p class="grzx_btn3"><a href="javascript:void(0);" onclick="copy_clip('<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>');"  class="yaoq"></a></p>
                        <?php
                            }else{
                        ?>
                         <p class="image"><a href="javascript:void(0);" ><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                         <p class="ztai">当前状态：已上传/审核中</p>
                         <?php
                            }
                         ?>
                    </li>
                    <?php
                        }
                    }
                    ?>
                    <!--
                    <li>
                    	<p class="image"><a href="#" target="_blank"><img src="<?=base_url()?>/static/images/zuopin1.jpg"></a></p>
                        <p class="name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="zan"><img src="<?=base_url()?>/static/images/zan.png">1000</p>
                        <p class="clear"></p>
                        <p class="grzx_btn3"><a href="#" class="yaoq"></a></p>
                    </li>
                    <div class="kong"></div>
                    <li>
                    	<p class="image"><a href="#" target="_blank"><img src="<?=base_url()?>/static/images/zuopin1.jpg"></a></p>
                        <p class="ztai">当前状态：已上传/审核中</p>                      
                    </li>
                    -->
                </ul>
                <div class="clear"></div>
                <div class="fy">
                    <!--
                    <div class="lr"><a>上一页</a></div>
                    <div class="ym">1</div>
                    <div class="ymx"><a href="#">2</a></div>
                    <div class="ymx"><a href="#">3</a></div>
                    <div class="ymx"><a href="#">4</a></div>
                    <div class="sl">…</div>
                    <div class="ymx"><a href="#">12</a></div>
                    <div class="ymx"><a href="#">13</a></div>
                    <div class="lr"><a>下一页</a></div>
                -->
                <?=$page?>
           </div> 
                
            </div>
             
        </div>
    </div>
	<div class="bg_grzx"></div>
    
    <div id="myModal" class="reveal-modal">
	     <div class="qq"><img src="<?=base_url()?>/static/images/dlts_qq.png"></div>
         <div class="weibo"><img src="<?=base_url()?>/static/images/dlts_weibo.png"></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
    
    <div id="myModal2" class="reveal-modal">
	     <div class="left"><img src="<?=base_url()?>/static/images/dlts_left.jpg"></div>
         <div class="center"></div>
         <div class="right"><img src="<?=base_url()?>/static/images/dlst_right.jpg"></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
                <script type="text/javascript">
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
