
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=0.5, maximum-scale=0.5, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="description" id="description" content="安奈儿第五届亲子创意大赛-作品馆">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-touch-fullscreen" content="no">
<link href="<?=base_url()?>m/static/css/page.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.reveal.js"></script>
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/common.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/dialog.js"></script>
<?php include 'application/views/share.php';?>
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
<script>
    // var rep;
    //  function repdiv()
    // {
    //   rep =  new  Dialog({type:'id',value:'test'});
    //   rep.show();
      
    // }
    
    // function closediv()
    // {
    //   rep.close();
    // }
    
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
                       
      <div class="m-img" style=" background:url(<?=base_url()?>m/static/images/bottom_bg.jpg) no-repeat bottom;height:1208px;">
	  <div class="home"><a href="<?=base_url()?>m/index.php"><img src="<?=base_url()?>m/static/images/home.png"></a></div> 
          <div class="plwz"><a href="<?=base_url()?>m/index.php?c=zuopin&m=index&orders=time">时间</a>︱<a href="<?=base_url()?>m/index.php?c=zuopin&m=index&orders=piao">点赞数</a></div>
                 <div class="zpg_head">
                      <img src="<?=base_url()?>m/static/images/zpg_bt.jpg" class="bt">
                      <div class="search">                            
                    <div id="search_box"> 
             <form id="search_form" method="get" action="<?=base_url()?>m/index.php?c=zuopin"> 
               <input type="hidden" name="c" value="zuopin" />
              <input type="text" id="s" value="输入用户名搜索" name="kw" onfocus="this.value=''" onblur="if(this.value==''){this.value='输入用户名搜索'}" class="swap_value" /> 
              <input type="image" src="<?=base_url()?>m/static/images/sheach.png" width="23" height="22" id="go" alt="Search" title="Search" /> 
            </form> 
            </div>
                      </div>
                 </div>                
                
                 <div class="grzx_zp">
                  <?php
                    foreach($list as $k =>$v){
                  ?>
                      <div class="nr"> 
                      <div style="border:1px solid #999;width:250px; height:177px;display:table-cell;vertical-align:middle; text-align:center;">
                      <a href="<?=base_url()?>m/index.php?c=zuopin&m=detail&id=<?=$v['id']?>"><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/thumb/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a>
                      </div>
                          <p class="bt">作品：<?=$v['title']?></p>
                          <p class="zan"><?=$v['ji']+$v['zan']?></p>
                          <?php
                            if(empty($userinfo)){
                          ?>
                          <a href="javascript:void(0);" data-reveal-id="myModal"><img class="dz" src="<?=base_url()?>m/static/images/zpg_btn1.jpg"></a>
                          <?php
                            }else{
                          ?>
                          <a  href="javascript:void(0);" onclick="zan(<?=$v['id']?>);" ><img class="dz" src="<?=base_url()?>m/static/images/zpg_btn1.jpg"></a>
                          <?php
                            }
                          ?>
                          <a href="javascript:void(0);" onclick="repdiv();"><img class="wtrdz" src="<?=base_url()?>m/static/images/zpg_btn2.jpg"></a>
                      </div>
                      <?php
                        }
                      ?>
                      <!--
                      <div class="nr">
                          <img class="zuopin" src="<?=base_url()?>m/static/images/zuopin1.jpg">
                          <p class="bt">作品：奔跑吧兔子</p>
                          <p class="zan">10000</p>
                          <img class="dz" src="<?=base_url()?>m/static/images/zpg_btn1.jpg">
                          <img class="wtrdz" src="<?=base_url()?>m/static/images/zpg_btn2.jpg">
                      </div>
                      -->
                 </div>
                 <div class="grzx_fy">
                      <?=$page?>
                 </div>
          </div>      
    </section>                    
    <!--        
    <div id="myModal_dzcg" class="reveal-modal" style="width:501px; height:289px;background:url(<?=base_url()?>m/static/images/dzcg_bg.png) no-repeat;">
        <div class="dzcg_word"><img src="<?=base_url()?>m/static/images/dzcg_gou.png"><p>点赞成功，么么哒！<br>赶快参加幸运大转盘抽奖，<br>多多点赞还有机会获<span>点赞神秘奖！</span></p></div>
        <div class="clear"></div>
        <div class="dzcg_button"><p><a href="<?=base_url()?>m/index.php?c=zuopin" class="jixu"></a><a href="<?=base_url()?>m/index.php?c=zuopin" class="choujiang"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>


   <div id="myModal_dzcgoff" class="reveal-modal" style="width:501px; height:329px;background:url(<?=base_url()?>m/static/images/dzcgoff_bg.png) no-repeat;">
    	<div class="dzcgoff_word"><img src="<?=base_url()?>m/static/images/dzcg_gou.png"><p>点赞成功！<br>登陆后即可获得抽奖机会！</p></div>
        <div class="clear"></div>
        <div class="dzcgoff_line"></div>
	    <div class="dzcgoff_qq"><a href="<?=base_url()?>m/index.php?c=zuopin"><img src="<?=base_url()?>m/static/images/dlts_qq.png"></a></div>
        <div class="dzcgoff_weibo"><a href="<?=base_url()?>m/index.php?c=zuopin"><img src="<?=base_url()?>m/static/images/dlts_weibo.png"></a></div>
	    <a class="close-reveal-modal">×</a> 
    </div>
-->
	 <div id="myModal_dzcg" class="reveal-modal" style="width:501px; height:289px;background:url(<?=base_url()?>m/static/images/dzcg_bg.png) no-repeat;">
        <div class="dzcg_word"><img src="<?=base_url()?>m/static/images/dzcg_gou.png"><p>点赞成功，么么哒！<br>赶快参加幸运大转盘抽奖，<br>多多点赞还有机会获<span>点赞神秘奖！</span></p></div>
        <div class="clear"></div>
        <div class="dzcg_button"><p><a href="javascript:void(0);"  onclick="location.reload();" class="jixu"></a><a href="<?=base_url()?>m/index.php?c=lottery" class="choujiang"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>

	    <div id="myModal_dzxz" class="reveal-modal" style="width:501px; height:289px;background:url(<?=base_url()?>m/static/images/dzcg_bg.png) no-repeat;">
        <div class="dzcg_word"><img src="<?=base_url()?>m/static/images/dzcg_gan.png"><p><br>给每个作品投票不能超过3票哦<br></p></div>
        <div class="clear"></div>
        <div class="dzcg_button"><p><a href="<?=base_url()?>m/index.php?c=zuopin" class="jixu"></a><a href="<?=base_url()?>m/index.php?c=lottery" class="choujiang"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>

    <div id="myModal_dzcgoff" class="reveal-modal" style="width:501px; height:329px;background:url(<?=base_url()?>m/static/images/dzcgoff_bg.png) no-repeat;">
    	<div class="dzcgoff_word"><img src="<?=base_url()?>m/static/images/dzcg_gou.png"><p>点赞成功！<br>登陆后即可获得抽奖机会！</p></div>
        <div class="clear"></div>
        <div class="dzcgoff_line"></div>
	    <div class="dzcgoff_qq"><img src="<?=base_url()?>m/static/images/dlts_qq.png"></div>
        <div class="dzcgoff_weibo"><img src="<?=base_url()?>m/static/images/dlts_weibo.png"></div>
	    <a class="close-reveal-modal">×</a> 
    </div>

<div class="zf" id="test" style="display:none; background:#FFFFFF; width:100%">
  <img src="<?=base_url()?>m/static/images/fxc.png" onClick="closediv();" id="img" width="100%" height="310" style="position:top:0;"/>
</div>

     <div id="myModal" class="reveal-modal">
       <div class="qq"><a href="<?=base_url()?>m/index.php?c=useroauth"><img src="<?=base_url()?>m/static/images/dlts_qq.png"></a></div>
         <div class="weibo"><a href="<?=base_url()?>m/index.php?c=test"><img src="<?=base_url()?>m/static/images/dlts_weibo.png"></a></div>
       <a class="close-reveal-modal">×</a> 

    </div>

    <a href="javascript:void(0);" data-reveal-id="myModal_yzm" id="yzm"></a> 

      <div id="myModal_yzm" class="reveal-modal" style="">
        <div class="dzcg_word"><img src="<?=base_url()?>static/images/dzcg_gan.png">
                      <label for="Number"> 验证码：</label>
                      <input type="text" name="acode" id="acode"> <input type="hidden" name="id" id="fid"></div>
                      <div style="position:absolute; top:100px; left:210px;"><img src="<?=base_url()?>static/images/yzm.jpg" id="authcode" onclick="getCode();"></div>
                      <div class="dzcg_button" style="margin-left:60px;"><p><a href="javascript:void(0);" onclick="zhan();" style=" width:129px; height:39px;"><img src="<?=base_url()?>static/images/btn_yzm.png"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>

<!-- 引入脚本 --> 
<script type="text/javascript" >
    function showQ(){
      $("#zhao").hide();
    }
</script>
<script>document.body.className = "";</script>
     <a href="javascript:void(0);" data-reveal-id="myModal_dzcg" id="myclick"></a> 
      <a href="javascript:void(0);" data-reveal-id="myModal_dzxz" id="shibai"></a> 

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