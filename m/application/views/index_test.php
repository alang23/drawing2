
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=0.5, maximum-scale=0.5, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="description" id="description" content="安奈儿第五届亲子创意大赛-首页">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-touch-fullscreen" content="no">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">   
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="0">
<link href="<?=base_url()?>m/static/css/page.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/dialog.js"></script>
<?php

$rand = mt_rand(1,100);
?>
<?php include 'application/views/share2.php' ?>

<style> /* Let's get this party started */
::-webkit-scrollbar { width: 0px;} 
body{display:-webkit-box;display: box;-webkit-box-orient: vertical;box-orient: vertical;}
</style>
<meta name="viewport" content="width=640,target-densitydpi=device-dpi,user-scalable=no" /> 
<script type="text/javascript">
  var phoneWidth = parseInt(window.screen.width);
  var phoneScale = phoneWidth/640;
  var ua = navigator.userAgent.toLowerCase(); 
  if (/android (\d+\.\d+)/.test(ua)){
    var version = parseFloat(RegExp.$1);
    if(version>2.3){
      document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
    }else{
      document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
    }
  }else{
    document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
  }
</script>

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

<title>安奈儿第五届亲子创意大赛</title>
<div id='wx_pic' style='margin:0 auto;display:none;'>

<img src='http://annil2015.matrixdigi.com/drawing/m/static/images/fxtb.jpg' />

</div>
</head>
<body class="loading" onload="showQ();">
<div id="zhao" style="background:#000;height: 100%;position: fixed;top: 0;width: 100%;z-index:1;text-align: center;color: #FFFFFF;font-size: 20px;padding-top: 400px;font-weight: bold;display:block; z-index:1000;">
<img style="position: relative;top:0;width:120px;height:120px;" src="<?=base_url()?>m/static/images/load.gif" /></div>

    <div id="loading"></div>
      
    <section class="m-page" id="scene">
                       
      <div class="m-img" style="background:url(<?=base_url()?>m/static/images/ind_bg.jpg) no-repeat center;height:1008px;">
				<?php
					if(empty($userinfo)){
				?>
                 <div class="ind_dl"><a href="javascript:void(0);" data-reveal-id="myModal"><img src="<?=base_url()?>m/static/images/ind_dl.png" ></a></div>
				<?php
					}else{
				?>
                 <div class="ind_login"><a href="<?=base_url()?>m/index.php?c=user"><?=$userinfo['nickname']?></a> <a href="<?=base_url()?>m/index.php?c=login&m=logout">退出</a></div>
				<?php
				}
				?>
                 <div class="ind_tt" ><div class="layer" data-depth="1"><img src="<?=base_url()?>m/static/images/ind_tt.png"></div></div>
			
				<?php
					if(empty($userinfo)){
				?>
                 <div class="ind_upload"><div class="layer" data-depth="0.2"><a href="javascript:void(0);" data-reveal-id="myModal"><img src="<?=base_url()?>m/static/images/ind_upload.png"></a></div></div>	
				 				<?php
					}else{
				?>
				 <div class="ind_upload"><div class="layer" data-depth="0.2"><a href="<?=base_url()?>m/index.php?c=upload" ><img src="<?=base_url()?>m/static/images/ind_upload.png"></a></div></div>
				<?php
				}
				?>

                 <div class="ind_btn"><a href="<?=base_url()?>m/index.php?c=jieshao"><img src="<?=base_url()?>m/static/images/ind_btn1.jpg"></a><a href="<?=base_url()?>m/index.php?c=zuopin"><img src="<?=base_url()?>m/static/images/ind_btn2.jpg"></a><a href="<?=base_url()?>m/index.php?c=lottery"><img src="<?=base_url()?>m/static/images/ind_btn3.jpg"></a></div>
                 
				         
          </div>      
    </section>                    
            
     <div id="myModal" class="reveal-modal">
       <div class="qq"><a href="<?=base_url()?>m/index.php?c=useroauth"><img src="<?=base_url()?>m/static/images/dlts_qq.png"></a></div>
         <div class="weibo"><a href="<?=base_url()?>m/index.php?c=test"><img src="<?=base_url()?>m/static/images/dlts_weibo.png"></a></div>
       <a class="close-reveal-modal">×</a> 

    </div>
<!-- 引入脚本 --> 


<script type="text/javascript" >
    function showQ(){
      $("#zhao").hide();
    }
</script>
<script>document.body.className = "";</script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/global.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/parallax.js"></script>
<script>
  // 视差
  var scene = document.getElementById('scene');
  var parallax = new Parallax(scene, {
    calibrateY: false
  });
</script>

<script type="text/javascript">
  var dmtJsHost = (("https:" == document.location.protocol) ? "https" : "http");
  document.write(unescape("%3Cscript src='" + dmtJsHost + "://d.matrixdigi.com/js/mfa.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
  var dmtTracker = _dmt.init("dmx", "S-000072-02");
  dmtTracker._setTrack(dmtJsHost + '://mo.dmtrck.com');
  dmtTracker._trackSpotLight();
} catch(err) {}
</script>

<!--监测代码Part B-->
<script type="text/javascript">
//<![CDATA[
_mz_evt('1000960', '100027204');
//]]>
</script>

</body>
</html>