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
<?php include 'application/views/share.php';?>
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

<div class="box same"  oh="1136" style="display:none;">
  <!--首页-->
  <div class="page p3 active same">
  <div class="fanhui"><a href="index.php"><img src="images/fanhui.png" ow="67"/></a></div>
  		<div class="phb same" oh="1136">
			<div class="phb_top "><img src="<?=base_url()?>images/zhuli/tz.png" ow="374"/></div>
			<div class="phb_nr same" oh="900">
            	<ul>
            		<?php
            			$i=1; 
            		foreach ($rankingList as $row): ?>
                	 <li>
                    	<div class="fl"><?=$i?>.&nbsp;<span><?=$row->nickname?><span></div>
                        <div class="fr"><span><?=$row->total_length?></span>米</div>
                     </li>
	<?php $i++; endforeach; ?>
					<?php 
						if($myranking>10){
					?>
						<li>...
	                     </li>
						<li>
	                    	<div class="fl"><?=$myranking?>.&nbsp;<span><?=$nickname?><span></div>
	                        <div class="fr"><span><?=$total_length?></span>米</div>
	                     </li>
					<?php 
						}
					?>
                </ul>
            </div>

	</div>
        <div class="bj_fc"><img src="images/p1.png" ow="639"/></div>
   </div><!--end page02_tips-->
</div>

<script src="<?=base_url()?>js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
<script src="<?=base_url()?>js/phb.js"></script>


<script type="text/javascript">
var zhi=1
var t
function timedCount()
{
$('.bj_fc').html("")
	var src_;
	if(zhi==1){
		zhi=zhi+1;
	}else{
		zhi=1;
	}
	src_="<img src='images/p"+zhi+".png' ow='639''/>"
	$('.bj_fc').append($(src_))
	adaptive();
	t=setTimeout("timedCount()",1000)
}
timedCount()
</script>

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