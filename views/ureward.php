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
<?php include 'application/views/share.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#alterUserInfo").click(function(){

		var taobao_id = $("#taobao_id").val();
		var name = $("#name").val();
		var area = $("#area").val();
		var mobile = $("#mobile").val();
		
		if(name==""){
			alert("请填写真实姓名");
			return;
		}
		if(mobile==""){
			alert("请填写联系电话");
			return;
		}
		if(taobao_id==""){
			alert("请填写淘宝ID");
			return;
		}
		if(area==""){
			alert("请填写收货地址");
			return;
		}

		if(confirm("提交后不可修改，请确认无误？")){
			$.ajax({
				url 	: 'alterUserInfo',
				data	: {'taobao_id': taobao_id,'name': name,'area': area,'mobile': mobile},
				type	: 'post',
				dataType: 'json',
				beforeSend: function(xhr){
				},
				success: function(result, status){
					if(result.success){
						alert("保存成功！");
						$('#alterUserInfo').unbind("click"); //移除click
						$("#name").attr("disabled", true);
						$("#taobao_id").attr("disabled", true);
						$("#area").attr("disabled", true);
						$("#mobile").attr("disabled", true); 
						$('#cj').hide();
					}else {
						alert("保存失败！");
					}
				}, 
				error: function(xhr){
					alert("网络超时，请重试！");
				}
			});
		}
	});
});
function showAward(award_id){
	var award_name = "";
	var desc = "";
	switch (award_id){
		case 1:	//大长脚兔
			award_name = "大长脚兔";
			desc = "恭喜你获得价值68元大长脚兔，请24小时后，联系天猫【安奈儿旗舰店】客服，凭借提交的个人信息（手机号+姓名+淘宝ID），自付邮费领取，或购买任意产品包邮领取，有效期至2015年4月20日。";
			break;
		case 2:
			award_name = "中兔";
			desc = "恭喜你获得价值89元新中兔，请24小时后，联系天猫【安奈儿旗舰店】客服使用，凭借提交的个人信息（手机号+姓名+淘宝ID），自付邮费领取，或购买任意产品包邮领取，有效期至2015年4月20日。";
			break;
		case 3:
			award_name = "100元天猫服饰兑换券";
			desc = "请24小时后在【安奈儿旗舰店】挑选商品吊牌价以内的服饰，包邮，不设找赎，如超出吊牌价金额则需拍下补差链接补齐金额（拍前需联系客服），不可叠加使用，有效期至2015年4月20日。 ";
			break;
		case 4:
			award_name = "50元天猫优惠券";
			desc = "满349元使用，同享店铺日常活动，品牌团/聚划算除外，请24小时后联系天猫【安奈儿旗舰店】客服使用，不可叠加使用，有效期至2015年4月20日。";
			break;
		default:
			award_name = "20元天猫优惠券";
			desc = "满159元使用，同享店铺日常活动，品牌团/聚划算除外，请24小时后联系天猫【安奈儿旗舰店】客服使用，不可叠加使用，有效期至2015年4月20日。  ";
	}

	var str = '<li class="cur"><div class="jpk_ljfz_top">'+
		'<p><img src="images/grzx/jp'+(award_id-1)+'.jpg" ow="277" /></p>'+
		'<p ><br/>'+award_name+'</p>'+
		'</div><div class="jpk_ljfz_bottom">'+
		'<span>注：</span>'+desc+  '</div></li>';
	
	$("#ljfz_ul").html(str);
	$("#cj2").show();
	adaptive();
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

<div class="box7 same"  oh="1008" style="display:none">



  <!--领奖方式-->
	<div class="cj" id="cj2"  style="display:none">
   		<div class="jpk_ljfz same">
              <!--关闭-->
              <a href="javascript:$('#cj2').hide();"><div class="jpk_gb"><img src="images/zhuli/gb.jpg" ow="40"/></div></a>
              <!--顶部换奖品区域  嵌入 .cur 显示-->
              <ul id="ljfz_ul">
              		
              </ul>

              
    	</div>
        <div class="cj_bj"></div>
    </div>



  <!--完善资料-->
    <div class="cj" id="cj" style="display:none">
        <div class="jpk_wszl same">
              <!--关闭-->
              <a href="javascript:$('#cj').hide();"><div class="jpk_gb"><img src="<?=base_url()?>images/zhuli/gb.jpg" ow="40"/></div></a>
              <div class="wszl_top">
                    <div class="wszl_li"><input name="name" id="name" type="text" value=""  maxlength="6" placeholder="真实姓名："></div>
                    <div class="wszl_li"><input name="mobile" id="mobile" type="text" value=""  maxlength="11" placeholder="联系电话："></div>
                    <div class="wszl_li"><input name="taobao_id" id="taobao_id" type="text" value=""  maxlength="30" placeholder="淘宝ID："></div>
                    <div class="wszl_litxt"><textarea name="area" id="area" type="text" value=""  maxlength="120" placeholder="邮寄地址："></textarea></div>
              </div><!--end wszl_top-->
              <div  class="wszl_bottom">
                    <div class="wszl_ts">注：抽奖类奖品在天猫发放，请前往“个人中心”<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;仔细阅读兑换说明，以保证奖品顺利发放。</div>
                    <div class="btn_wszl"><a id="alterUserInfo" href="javascript:void();"><img src="<?=base_url()?>images/jpk/btn_tj.png" ow="277" /></a></div> 
              </div><!--end wszl_bottom-->
              
        </div><!--end cj_nr-->
        <div class="cj_bj"></div>
     </div>
<!--end 完善资料结束-->





  <!--首页-->
  <div class="page p7 active same">
  <div class="fanhui"><a href="index.php"><img src="images/fanhui.png" ow="67"/></a></div>
  		<div class="jpk same">
			<div class="jpk_top "><img src="<?=base_url()?>images/jpk/tz.png" ow="374"/></div>
			<div class="jpk_nr same" oh="800" >
              <ul>
              	<?php foreach ($lotteryRecordList as $row): ?>
                     <li>
               	    	<div class="jpk_nr_left"><img src="<?=base_url()?>images/jpk/zp<?=$row->award_id-1?>.jpg" ow="200"/></div>
                        <div class="jpk_nr_right">
                        	<span><?=$row->name?></span><br/>
                        	<a href="javascript:showAward(<?=$row->award_id?>);"><span>领取方式</span>>></a>
                        </div>
                    </li>
	<?php endforeach; ?>
              </ul>
           	 <div class="jpk_bnt"><a href="javascript:$('#cj').show();"><img src="<?=base_url()?>images/jpk/wszl.png" ow="277"/></a></div>
            </div>
	    </div>
   </div><!--end page02_tips-->
</div>
<script src="<?=base_url()?>js/jpk.js"></script>

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