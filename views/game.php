<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>一起长大  DIY ·兔gether</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-icon-precomposed" href="<?=base_url()?>touch-icon.png" />
<link rel="icon" href="<?=base_url()?>images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico" type="image/x-icon" /> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/layout.css" />

<?php $isHelp=true;include 'application/views/share.php';?>
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

   <!--loding-->
	<div id="loadLayer" style="position:fixed; width:100%; height:100%; left:0; top:0; z-index:100; ">
		<div id="loading" class="same" style="position:absolute; width:100%; height:130px; text-align:center; left:0; top:35%; margin-top:-65px;">
			<p><img src="<?=base_url()?>images/t1.png" ow="209" oh="255" /></p>
            <p style="margin-top:25px;" id="load_dh"><img src="<?=base_url()?>images/loading.gif" ow="338" oh="76"  /></p>
			<p style="height:30px; line-height:30px; font-size:1.2em; color:#fff;" id="loading_number">0%</p>
	  </div>
	</div><!-- loading end -->


<div class="box same" style="display:none" oh="1136">

  <!--首页-->
  <div class="page p2 active same">
  <div class="fanhui"><a href="index.php"><img src="images/fanhui.png" ow="67"/></a></div>
    <!--T恤选择区-->
    <div class="game_tx same" oh="518">
    	<div class="btn_tj same" oh="108"><img src="<?=base_url()?>images/game/btn_wc.png" ow="108"/></div>
    	<div class="tuzi same" oh="395">
             <div class="tuzi_lian">
            	 <div class="b0"><img src="<?=base_url()?>images/game/03/lian.png" ow="230"/></div>
             </div><!--end tuzi_lian-->
             <div class="tuzi_top">
            	 <div class="b0"><img src="<?=base_url()?>images/game/03/top.png"  ow="230"/></div>
             </div><!--end tuzi_top-->
             <div class="tuzi_bottom">
             	 <div class="b0"><img src="<?=base_url()?>images/game/03/bottom.png"  ow="230"/></div>
            </div><!--end tuzi_top-->
        </div>
    </div><!--end 恤选择区index_tx-->
    
    <!--菜单geme_menuy以及选择内容-->
    <div class="geme_menu same">
    	<ul class="menu_xz">
        	<li class="cur"><img src="<?=base_url()?>images/game/tb0.jpg" ow="80" /></li>
            <li><img src="<?=base_url()?>images/game/tb1.jpg" ow="80" /></li>
            <li><img src="<?=base_url()?>images/game/tb2.jpg" ow="80" /></li>
            <li><img src="<?=base_url()?>images/game/tb3.jpg" ow="80" /></li>
        </ul>
        <ul class="menu_nr">
			<li class="menu_tuzi same" oh="350">
            	<div><img src="<?=base_url()?>images/game/t1.png" ow="210" /></div>
                <div><img src="<?=base_url()?>images/game/t2.png" ow="210" /></div>
                <div><img src="<?=base_url()?>images/game/t3.png" ow="210" /></div>
            </li> 
            <li class="menu_lian same" oh="350">
  				<div class="menu_li01 cur"></div>
                <div class="menu_li02"></div>
                <div class="menu_li03"></div>
                <div class="menu_li04"></div>
                <div class="menu_li05"></div>
                <div class="menu_li06"></div>
            </li> 
            <li class="menu_top same" oh="350">
                <div class="menu_li01 cur"></div>
                <div class="menu_li02"></div>
                <div class="menu_li03"></div>
                <div class="menu_li04"></div>
                <div class="menu_li05"></div>
                <div class="menu_li06"></div>
            </li> 
            <li class="menu_bottom same" oh="350">
                <div class="menu_li01 cur"></div>
                <div class="menu_li02"></div>
                <div class="menu_li03"></div>
                <div class="menu_li04"></div>
                <div class="menu_li05"></div>
                <div class="menu_li06"></div>
            </li> 
		</ul>        
    </div><!--ENG 菜单geme_menu-->
    
    <!--成功后geme_tips-->
    <div class="game_tips" oh="430">
    	<p><img src="<?=base_url()?>images/game/tis1.jpg" ow="640"/></p>
        <p id="btn_fx"><img src="<?=base_url()?>images/game/btn1.png" ow="253"/></p>
    </div>
    
    
    <!--分享提示-->
    <div class="tips_fx"></div>
    
 
  </div><!--end page02_tips-->
</div>

<script src="<?=base_url()?>js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
<script src="<?=base_url()?>js/page.js"></script>

<!--监测代码Part B-->
<script type="text/javascript">
//<![CDATA[
_mz_evt('1000960', '100027218');
//]]>
</script>

<script type="text/javascript">
  var dmtJsHost = (("https:" == document.location.protocol) ? "https" : "http");
  document.write(unescape("%3Cscript src='" + dmtJsHost + "://d.matrixdigi.com/js/mfa.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
  var dmtTracker = _dmt.init("dmx", "S-000072-03");
  dmtTracker._setTrack(dmtJsHost + '://mo.dmtrck.com');
  dmtTracker._trackSpotLight();
} catch(err) {}
</script>




</body>
</html>