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
<script src="<?=base_url()?>js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
<?php $isHelp=true;include 'application/views/share.php';?>
<script type="text/javascript">
var overplus_draw_num = <?=$overplus_draw_num?>;
function draw(){
	overplus_draw_num--;
	$("#draw1_num").text(overplus_draw_num);
	$("#draw3_num").text(overplus_draw_num);

	$("#cj_nr_top").html("抽奖中...");
	if(overplus_draw_num>0){
	}else { 
		$("#draw_btn1").attr('href','javascript:void();');
		$("#draw_btn3").attr('href','javascript:void();');

		$("#draw_btn1_img").attr('src','<?=base_url()?>images/grzx/btn_fx.png');
		$("#draw_btn3_img").attr('src','<?=base_url()?>images/grzx/btn_right0.png');
	}
	$.ajax({
		url 	: 'draw',
		data	: {},
		type	: 'get',
		dataType: 'json',
		beforeSend: function(xhr){
		},
		success: function(result, status){
			if(result.success){
				var chtml="";
				if(result.award_id>0){
					chtml='<p><img src="<?=base_url()?>images/grzx/jp'+(result.award_id-1)+'.jpg" ow="277" /></p>'+
	                    '<p class="cj_nr_top_xx">恭喜你中得<span>'+result.award_name+'</span></p>'+
	                    '<p class="cj_nr_top_ts">去“我的奖品”查看奖品并完善领取信息</p>';
				}else {
					chtml='<br/><img src="<?=base_url()?>images/grzx/wzj.jpg" ow="332"/>';
				}
				$("#cj_nr_top").html(chtml);
				$("#cj").show();
				adaptive();
			}else {
				$("#cj_nr_top").html(result.msg);
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


<div class="box5 same"  oh="1236" style="display:none">
 <!--抽奖页面 弹框-->
 <div class="cj" id="cj" style="display:none">
 	<div class="cj_nr same">
          <!--关闭-->
   		  <a href="javascript:$('#cj').hide();"><div class="cj_gb" id="cj_gb"><img src="<?=base_url()?>images/grzx/gb.jpg" ow="72" /></div></a>
          <!--！！！！！！！！中奖后-->
          <div id="cj_zj">
              <!--顶部换奖品区域-->
              <div class="cj_nr_top" id="cj_nr_top">
              		<!--奖品顺序：jp0，jp1，jp2，jp3，jp4-->
              </div><!--end cj_nr_top-->
              <!--底部按钮-->
              <div class="cj_nr_bottom"> 
              	 <!--有抽奖机会-->		
              	 <a id="draw_btn1" href="javascript:draw();"><p class="cj_nr_bottom_btn"><img id="draw_btn1_img" src="<?=base_url()?>images/grzx/btn_jxcj.png" ow="277" oh="89"/></p></a>
				 <!--没有有抽奖机会-->	
                 <!--<p class="cj_nr_bottom_btn"><img src="<?=base_url()?>images/grzx/btn_fx.png" ow="277" oh="89"/></p>-->
                 <p class="cj_nr_bottom_ts">还有<span id="draw1_num">2</span>次抽奖机会，精彩奖品等你拿！</p>
              	 <p class="cj_nr_bottom_zs"><img src="<?=base_url()?>images/grzx/jpdb.jpg" ow="506" oh="133"/></p>
              </div><!--end cj_nr_bottom-->
          </div> <!--end 中奖后cj_zj-->
          
     
    </div><!--end cj_nr-->
 	<div class="cj_bj"></div>
 </div>


  <!--首页-->
  <div class="page p5 active same">
  <div class="fanhui"><a href="index.php"><img src="images/fanhui.png" ow="67"/></a></div>
  		<div class="grzx same" oh="1136">
          <!--个人头像-->
       	  <div class="grzx_tx">
             	  <div class="fl same"><img src="<?=$portrait?>" ow="90"/></div>
                  <!--!!!!!!!!!!!!!!显示我的助力米数1-->
                  <div class="grzx_zltxt">经过好友们的努力，</br>你已前进<span><?=$total_length?></span>米,加油！</div>
		  </div><!--end grzx_tx-->
          <!--个人头像底部装饰-->
          <div class="grzx_zs">
          <div class="grzx_tts"><?=$total_length?>m</div>
          
          <img src="<?=base_url()?>images/zhuli/ttt.png" ow="532" />
          
          </div>
          <div class="grzx_bt same" >
          		<!--!!!!!!!!!!!!!!显示我的助力米数2-->
          		<div class="grzx_bt_txt">我的里程：<?=$total_length?>米</div>
   		  		<img src="<?=base_url()?>images/grzx/bt.png" ow="394"/>
          
           </div>
          <div class="grzx_nr" >
          	   <ul>
          	   		<?php foreach ($helps as $row): ?>
	<li>
                    	<div class="fl"><?=$row->nickname?></div>
                        <div class="fr">为我<?=$row->length>0?"加":"减"?>了<span class="s1"><?=abs($row->length)?>m</span></div>
                    </li>
	<?php endforeach; ?>
	<?php
		for($i=0;$i<5-count($helps);$i++){
			echo '<li>-</li>';
		} 
	?>
               </ul>
          </div><!--end grzx_nr-->

		<!--底部按钮部分-->
       <div class="grzx_ph">
            <a href="<?=base_url()?>ranking" class="fl" target="_self"><img src="<?=base_url()?>images/grzx/tb1.png" ow="36" class="pt1"/> &nbsp;点击查看排行榜</a>
            <a href="<?=base_url()?>ureward" class="fr" target="_self"><img src="<?=base_url()?>images/grzx/tb2.png" ow="31" class="pt1"/>&nbsp;我的奖品</a>
        </div>

		<div class="grzx_btn same">
        	 <a href="http://annil2015.matrixdigi.com/drawing/m/" class="fl" target="_self"><img src="<?=base_url()?>images/grzx/btn_left.png" ow="277"/></a>
             <!--!!!!!!!!!!!ID=btn_cj
             没有抽奖机会<img src="<?=base_url()?>images/grzx/btn_right0.png" ow="277"/>     
             有抽奖机会img src="<?=base_url()?>images/grzx/btn_right1.png" ow="277"/>-->
             <?php 
             	if($overplus_draw_num>0){
             		echo '<a id="draw_btn3" href="javascript:draw();" class="fr" id="btn_cj" target="_self"><img id="draw_btn3_img" src="'.base_url().'images/grzx/btn_right1.png" ow="277"/></a>';
             	}else {
             		echo '<a id="draw_btn3" href="javascript:void();" class="fr" id="btn_cj" target="_self"><img id="draw_btn3_img" src="'.base_url().'images/grzx/btn_right0.png" ow="277"/></a>';
             	}
             ?>
        </div>
        <!--!!!!!!!!!!!!!!显示抽奖次数-->
		<div class="grzx_czts same">你还有<span id="draw3_num"><?=$overplus_draw_num?></span>次抽奖机会</div>
       </div><!--end grzx-->
   </div><!--end p5-->
</div>

<script src="<?=base_url()?>js/grzx.js"></script>

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