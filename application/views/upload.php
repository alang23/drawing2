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
</head>

<body>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
<?php Widget::website_header();?>
          <div class="upload">
                 <h2>上传作品</h2>
                 <div class="txxx">请认真填写以下信息：<span style="font-size:15px; color:#ff0000;">与亲子创意大赛主题无关的作品，将取消最终的评奖资格！</span></div>
                 <form name="form1" method="post" action="<?=base_url()?>index.php?c=upload" enctype="multipart/form-data"> 
                 <div class="txzl">
				 <!--
                      <label for="Phone"><span style="color:#ff0000;">*</span> 手机号码：</label>
                      <input type="text" name="phone" id="phone" value="<?=$work['phone']?>">     
					  -->
					   <label for="Phone"><span style="color:#ff0000;"></span> </label>
                      <label for="Img"><span style="color:#ff0000;">*</span> 上传作品：</label>
                      <input type="file" name="userfile" id="upfile" class="upfile" onchange="document.getElementById('upfileResult').innerHTML=this.value"/>
                      <div class="upFileBtn" onclick="document.getElementById('upfile').click()" /></div>
                      <label ></label>
                      <div class="smwz">作品要求不超过<span style="color:#ff0000;">5MB</span>，格式<span style="color:#ff0000;">JPG</span>或<span style="color:#ff0000;">PNG</span></div>
                      <label for="Tittle"><span style="color:#ff0000;">*</span> 创作主题：</label>
                      <input type="text" name="title" id="title">              
                      <label for="Feel">&nbsp;&nbsp;创作感言：</label>
                      <textarea name="intro" id="Feel"></textarea> 
                      <label ></label> 
                      <div class="reset"><img src="<?=base_url()?>static/images/upload_reset.jpg" onclick="document.form1.reset();"></div>
                      <div class="qr"><a href="javascript:void(0);" onclick="checkfrm();" ></a></div>
               </div>
               </form>
                 
            </div>
             
        </div>
    </div>
	<div class="bg_grzx"></div>
    
    <div id="myModal" class="reveal-modal" >
	     <div class="qq"><img src="<?=base_url()?>static/images/dlts_qq.png"></div>
         <div class="weibo"><img src="<?=base_url()?>static/images/dlts_weibo.png"></div>
	     <a class="close-reveal-modal">×</a> 

    </div>

<a href="javascript:void(0);" data-reveal-id="myModal2" id="modal2"></a>
    <div id="myModal2" class="reveal-modal" style="background:url(<?=base_url()?>static/images/dlts_bg2.png) no-repeat;">
       <div class="left"><a href="javascript:void();" onclick="document.form1.submit();"><img src="<?=base_url()?>static/images/dlts_left.jpg"></a></div>
         <div class="center"></div>
         <div class="right"><a href="javascript:void();" onclick="document.form1.submit();"><img src="<?=base_url()?>static/images/dlst_right.jpg"></a></div>
       <a class="close-reveal-modal">×</a> 
    </div>

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

  //document.form1.submit();
  
   $("#modal2").trigger("click");
}
  </script>

<script type="text/javascript">
    var dmtJsHost = (("https:" == document.location.protocol) ? "https" : "http");
    document.write(unescape("%3Cscriptsrc='" +dmtJsHost+ "://mo.matrixdigi.com/banner/mfa.js'type='text/javascript'%3E%3C/script%3E"));
  </script>

  <script type="text/javascript">
  try {
  var dmtTracker= _dmt.init("sem_module", "T-000376-01");
  dmtTracker._setTrack(dmtJsHost+ '://mo.matrixdigi.com');dmtTracker._trackSpotLight();
  } catch(err) {}
</script>
</body>
</html>
