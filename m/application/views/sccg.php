
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
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/common.js"></script>

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


<title>安奈儿创意大赛</title>
</head>
<body class="loading" onload="showQ();">
<div id="zhao" style="background:#000;height: 100%;position: fixed;top: 0;width: 100%;z-index:1;text-align: center;color: #FFFFFF;font-size: 20px;padding-top: 400px;font-weight: bold;display:block; z-index:1000;">
<img style="position: relative;top:0;width:120px;height:120px;" src="<?=base_url()?>m/static/images/load.gif" /></div>

    <div id="loading"></div>
        
        <section class="m-page" >
                       
            <div class="m-img" style="height:1086px;">
                 <div class="home"><a href="<?=base_url()?>m/index.php"><img src="<?=base_url()?>m/static/images/home.png"></a></div>                           
                 <div style="width:100%; height:560px; position:relative;"><img src="<?=base_url()?>m/static/images/upload_top.jpg"></div>
                 <div style="width:100%; height:526px; position:relative; background:url(<?=base_url()?>m/static/images/upload_bottom.jpg) no-repeat;">
                      <div style=" margin-top:102px; margin-left:210px; float:left;"><a href="<?=base_url()?>m/index.php?c=upload"><img src="<?=base_url()?>m/static/images/sccg_btn.jpg"></a></div>
                 </div>
                 
          </div>            
        </section>                      
    <div id="myModal_dzcg" class="reveal-modal" style="width:501px; height:289px;background:url(<?=base_url()?>/static/images/dzcg_bg.png) no-repeat;">
        <div class="dzcg_word"><img src="<?=base_url()?>/static/images/dzcg_gou.png"><p>点赞成功，么么哒！<br>赶快参加幸运大转盘抽奖，<br>多多点赞还有机会获<span>点赞神秘奖！</span></p></div>
        <div class="clear"></div>
        <div class="dzcg_button"><p><a href="#" class="jixu"></a><a href="#" class="choujiang"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>
    <div id="myModal_dzcgoff" class="reveal-modal" style="width:501px; height:329px;background:url(<?=base_url()?>/static/images/dzcgoff_bg.png) no-repeat;">
        <div class="dzcgoff_word"><img src="<?=base_url()?>/static/images/dzcg_gou.png"><p>点赞成功！<br>登陆后即可获得抽奖机会！</p></div>
        <div class="clear"></div>
        <div class="dzcgoff_line"></div>
        <div class="dzcgoff_qq"><img src="<?=base_url()?>/static/images/dlts_qq.png"></div>
        <div class="dzcgoff_weibo"><img src="<?=base_url()?>/static/images/dlts_weibo.png"></div>
        <a class="close-reveal-modal">×</a> 
    </div>                   
<!-- 引入脚本 -->   
<script type="text/javascript" >
        function showQ(){
            $("#zhao").hide();
        }
</script>
<script>document.body.className = "";</script>

</body>
</html>