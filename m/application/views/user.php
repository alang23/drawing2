
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=0.5, maximum-scale=0.5, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-touch-fullscreen" content="no">
<link href="<?=base_url()?>m/static/css/page.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>

<style> /* Let's get this party started */
::-webkit-scrollbar { width: 0px;} </style>
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
</head>
<body class="loading" onload="showQ();">
<div id="zhao" style="background:#000;height: 100%;position: fixed;top: 0;width: 100%;z-index:1;text-align: center;color: #FFFFFF;font-size: 20px;padding-top: 400px;font-weight: bold;display:block; z-index:1000;">
<img style="position: relative;top:0;width:120px;height:120px;" src="<?=base_url()?>m/static/images/load.gif" /></div>

    <div id="loading"></div>
        
        <section class="m-page" >
                       
            <div class="m-img" style=" background:url(<?=base_url()?>m/static/images/bottom_bg.jpg) no-repeat bottom;height:1008px;">
              <div class="grzx_head">
                <img src="<?=$userinfo['figureurl']?>">
                <p class="name">昵称：<?=$userinfo['nickname']?></p>
                <p class="xinxi">您还有 <span style=" color:#fd4d00; text-decoration:underline;"><?=$lotterynum?>次</span> 抽奖机会</p>
                 </div>
                 <div class="grzx_btn"> 
                      <a href="<?=base_url()?>m/index.php?c=user&m=lottery_log"><img src="<?=base_url()?>m/static/images/grzx_btn1.jpg" class="left"></a>
                      <a href="<?=base_url()?>m/index.php?c=user&m=info"><img src="<?=base_url()?>m/static/images/grzx_btn2.jpg" class="right"></a>
                 </div>
                 <div class="grzx_sczp">
                      <p>我上传的作品：</p>
                      <a href="javascript:void(0);" data-reveal-id="myModal_ljsc"><img src="<?=base_url()?>m/static/images/grzx_btn3.jpg"></a>
                 </div>

                 <div class="grzx_zp">
                 <?php
                    foreach($list as $k => $v){
                 ?>
                    <?php
                      if($v['enabled'] == 1){
                    ?>
                      <div class="nr"> 
                       <div style="border:1px solid #999;width:250px; height:177px;display:table-cell;vertical-align:middle; text-align:center;">

                      <a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>"><img  src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 170);"></a></div>
                          <p class="bt">作品：<?=$v['title']?></p>
                          <p class="zan"><?=$v['ji']+$v['zan']?></p>
                          <img class="btn" src="<?=base_url()?>m/static/images/grzx_btn5.jpg">
                      </div>
                        <?php
                          }else{
                        ?>
                      <div class="nr">
                          <div style="border:1px solid #999;width:250px; height:177px;display:table-cell;vertical-align:middle; text-align:center;">
                          <img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 170);"></div>
                          <p class="bt">当前状态：已上传/审核中</p>                          
                      </div>
                        <?php
                          }
                        ?>
                     <?php
                 }
                     ?>
                      <!--
                      <div class="nr">
                          <img class="zuopin" src="images/zuopin1.jpg">
                          <p class="bt">当前状态：已上传/审核中</p>                          
                      </div>
                  -->
                 </div>
                 <div class="grzx_fy">
                      <!--<a href="#">上一页</a><a href="#" style="float:right;">下一页</a>-->
                 </div>
          </div>            
        </section>                      
                    
<div id="myModal_ljsc" class="reveal-modal">
         <div class="left"><a href="<?=base_url()?>m/index.php?c=upload"><img src="<?=base_url()?>m/static/images/dlts_left.jpg"></a></div>
  <div class="center"></div>
  <div class="right"><a href="<?=base_url()?>m/index.php?c=upload"><img src="<?=base_url()?>m/static/images/dlts_right.jpg"></a></div>
         <a class="close-reveal-modal">×</a> 
</div>
<!-- 引入脚本 -->   
<script type="text/javascript" >
        function showQ(){
            $("#zhao").hide();
        }
</script>
<script>document.body.className = "";</script>
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