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
                 <div class="head"><img src="<?=$user['figureurl']?>"></div>
              <p class="name">昵称：<?=$user['nickname']?></p>
                 <p class="xinxi"><a href="<?=base_url()?>index.php?c=user&m=lottery_log">查看中奖记录</a> &nbsp;&nbsp;您还有 <span style=" color:#fd4d00; text-decoration:underline;"><?=$user['lotterynum']?>次</span> 抽奖机会</p>
                 <p class="xinxi2">为了方便中奖与您取得联系请完善资料</p>
                 <div class="btn"><a href="<?=base_url()?>index.php?c=user&m=info"><img src="<?=base_url()?>static/images/grzx_btn1.jpg"></a></div>
            </div>
            <div class="better">
                <div class="wszl">请完善以下信息，以便工作人员联系：</div>
                <form name="form1" method="post" action="<?=base_url()?>index.php?c=user&m=info">
                <div class="grzx_tb">
                      <label for="UserName">真实姓名：</label>
                      <input type="text" name="realname" id="realname" value="<?=$info['realname']?>" >
                      
                      <label for="Address">联系地址：</label>
                      <input type="text" name="address" id="address" value="<?=$info['address']?>">
                      
                       <label for="Address">联系电话：</label>
                      <input type="text" name="phone" id="phone" value="<?=$info['phone']?>">
                     
                     <a href="javascript:void(0);" onclick="document.form1.submit();" class="qdxx"></a>
                       
                </div>    
              </form>
           </div>
             
        </div>
    </div>
	<div class="bg_grzx"></div>
    
    <div id="myModal" class="reveal-modal">
	     <div class="qq"><img src="<?=base_url()?>static/images/dlts_qq.png"></div>
         <div class="weibo"><img src="<?=base_url()?>static/images/dlts_weibo.png"></div>
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
