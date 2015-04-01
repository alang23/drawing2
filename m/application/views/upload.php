
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
	   <div class="home"><a href="<?=base_url()?>m/index.php"><img src="<?=base_url()?>m/static/images/home.png"></a></div> 
                 <div class="zpg_head"><img src="<?=base_url()?>m/static/images/sczp_bt.jpg" class="bt"></div>
                 <div class="grzx_wszl">请认真填写以下信息：</div>
				 <form name="form1" method="post" action="<?=base_url()?>index.php?c=upload&m=index&frm=mobile" enctype="multipart/form-data"> 
                 <div class="grzx_tb">
				 <!--
                     
                    <input type="text" name="phone" id="phone" value="<?=$work['phone']?>"> 
					-->
					 <label for="Phone"><span style="color:#f00000;"></label>
                   <label>上传作品：&nbsp;&nbsp;</label>
                   <div class="fileInput left" style="margin-top:90px;">
                           <input type="file" name="userfile" id="upfile" class="upfile" onchange="document.getElementById('upfileResult').innerHTML=this.value"/>
                           <input class="upFileBtn" type="button" value="上传图片" onclick="document.getElementById('upfile').click()" style="margin-top:0;"/>
                           <input type="hidden" name="frmid" value="2" />
                   </div> 
                   <div style="position:absolute;font-size:16px; text-align:left; color:#000; width:200px; display:block; left:440px; top:315px;" id="upfileResult"> </div>
                   <div class="smwz">作品要求不超过<span style="color:#ff0000;">5MB</span>，格式<span style="color:#ff0000;">JPG</span>或<span style="color:#ff0000;">PNG</span></div>
                      <label for="Tittle"><span style="color:#f00000;">*</span>创作主题：&nbsp;&nbsp;</label>
                   <input type="text" name="title" id="title">
                      <label for="Feel">创作感想：&nbsp;&nbsp;</label>
                   <textarea name="intro" id="intro"></textarea> 
                      <label></label>
                      <div class="sczp_btn"><a href="#"><img src="<?=base_url()?>m/static/images/sczp_btn2.jpg"  onclick="document.form1.reset();"></a></div>
                      <div class="sczp_btn" style="margin-left:10px;"><a href="javascript:void(0);" onclick="checkfrm();" ><img src="<?=base_url()?>m/static/images/sczp_btn3.jpg"></a></div>
                </div>    
				 </form>
          </div>      
    </section>                    
            
    
<!-- 引入脚本 --> 
<script type="text/javascript" >
    function showQ(){
      $("#zhao").hide();
    }
</script>
<script>document.body.className = "";</script>
  <script>
  String.prototype.Trim = function() {
  var m = this.match(/^\s*(\S+(\s+\S+)*)\s*$/);
  return (m == null) ? "" : m[1];
}
String.prototype.isMobile = function() {
//return (/^(?:13\d|15[89])-?\d{5}(\d{3}|\*{3})$/.test(this.Trim()));
return (/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/.test(this.Trim()));
}

function checkfrm()
{
	
  var phone = $("#phone").val();
  var title = $("#title").val();
  var upfile = $("#upfile").val();
  //alert(phone);
  //alert(title);
 // alert(upfile);
/*
  if (!phone.isMobile()) {
    alert('请正确填写手机号');
    return false;
  }
  */

  if(title == '' || upfile == ''){
      alert('请按要求填写信息');
      return false;
  }
  
  document.form1.submit();
   //$("#modal2").trigger("click");
}
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