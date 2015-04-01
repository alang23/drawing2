
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>一起长大  DIY ·兔gether</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-icon-precomposed" href="<?=base_url()?><?=base_url()?>touch-icon.png" />
<link rel="icon" href="<?=base_url()?><?=base_url()?>images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?=base_url()?><?=base_url()?>images/favicon.ico" type="image/x-icon" /> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/layout.css" />
<script src="<?=base_url()?>js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
<?php include 'application/views/share.php';?>
<script type="text/javascript">
function addHelp(){
	$.ajax({
		url 	: 'help_add',
		data	: {'id':<?=$target_user_id?>},
		type	: 'get',
		dataType: 'json',
		beforeSend: function(xhr){
		},
		success: function(result, status){
			if(result.success){
				if(result.length>0){
					$("#cjimg").attr("src","<?=base_url()?>images/zhuli/ts_cg.jpg");
				}else {
					$("#cjimg").attr("src","<?=base_url()?>images/zhuli/ts_sb.jpg");
				}
				$("#cj").show();
			}else {
				alert(result.msg);
			}
		}, 
		error: function(xhr){
			alert("网络超时，请重试！");
		}
	});
}
</script>
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
			<p><img src="images/t1.png" ow="209" oh="255" /></p>
            <p style="margin-top:25px;" id="load_dh"><img src="images/loading.gif" ow="338" oh="76"  /></p>
			<p style="height:30px; line-height:30px; font-size:1.2em; color:#fff;" id="loading_number">0%</p>
	  </div>
	</div><!-- loading end -->


<div class="box5 same"  oh="1136" style="display:none">

 <!--助力弹框-->
 <div class="cj" style="display:none" id="cj">
 	<!--关闭-->
 	<div class="zl_cgnr">
       	<a href="javascript:$('#cj').hide();"><div class="zl_gg same"><img src="<?=base_url()?>images/zhuli/gb.jpg" ow="40" /></div></a>
		<!--助力成功<img src="<?=base_url()?>images/zhuli/ts_cg.jpg" ow="445" />-->
        <!--助力失败<img src="<?=base_url()?>images/zhuli/ts_sb.jpg" ow="445" />-->
   		 <img id="cjimg" src="<?=base_url()?>images/zhuli/ts_sb.jpg" ow="445" />
    </div>
 	<div class="cj_bj"></div>
 </div> <!--END 助力弹框-->
 
  <!--首页-->
  <div class="page p6 active same">
  
  <div class="fanhui"><a href="index.php"><img src="images/fanhui.png" ow="67"/></a></div>
  		<div class="zl same" oh="1136">
          <!--个人头像-->
       	  <div class="zl_tx">
             	  <div class="fl same"><img src="<?=$target_user->portraitURL?$target_user->portraitURL:"images/tou.jpg"?>" ow="90"/></div>
                  <!--!!!!!!!!!!!!!!显示我的助力米数1-->
                  <div class="zltxt"><span><?=$target_user->nickname?></span>已前进<span><?=$target_user->total_length?></span>米</div>
		  </div><!--end zl_tx-->
          <!--个人头像底部装饰-->
          <div class="zl_zs">
          <div class="grzx_tts"><?=$target_user->total_length?>m</div>
          <img src="<?=base_url()?>images/zhuli/ttt.png" ow="532" /></div>
          
          <div class="zl_btn">
          		<a href="javascript:addHelp();"><div class="fl"><img src="<?=base_url()?>images/zhuli/btn_wtjy.png" ow="252"/></div></a>
                <div class="fr"><a href="index.php" target="_self"><img src="<?=base_url()?>images/zhuli/btn_wyy.png" ow="252"/></a></div>
               <!-- <div class="fr"><a href="<?=base_url()?>game" target="_self"><img src="<?=base_url()?>images/zhuli/btn_wyy.png" ow="252"/></a></div>-->
          </div>
          <!--排行榜，只显示五条-->
          <div class="zl_bt same" >
   		  		<img src="<?=base_url()?>images/zhuli/tz.png" ow="394"/>
           </div>
          <div class="zl_nr" >
          	   <ul>
          	   <?php $i=1; foreach ($rankingList as $row): ?>
                     <li>
                    	<div class="fl"><?=$i?>.&nbsp;<?=$row->nickname?></div>
                        <div class="fr"><span class="s1"><?=$row->total_length?>m</span></div>
                    </li>
	<?php $i++; endforeach; ?>
					<?php 
						if($myranking>5){
					?>
						<li>...
	                     </li>
						<li>
	                    	<div class="fl"><?=$myranking?>.&nbsp;<span><?=$nickname?><span></div>
	                        <div class="fr"><span class="s1"><?=$total_length?></span>米</div>
	                     </li>
					<?php 
						}
					?>
               </ul>
          </div><!--end 排行榜zl_nr-->
       </div><!--end zl-->
   </div><!--end p6-->
</div>

<script src="<?=base_url()?>js/zl.js"></script>

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