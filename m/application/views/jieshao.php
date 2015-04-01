
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=0.5, maximum-scale=0.5, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="description" id="description" content="安奈儿第五届亲子创意大赛-活动规则">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-touch-fullscreen" content="no">
<link href="<?=base_url()?>m/static/css/page.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=base_url()?>m/static/js/jquery.reveal.js"></script>
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


<title>安奈儿创意大赛</title>
</head>
<body class="loading" onload="showQ();">
<div id="zhao" style="background:#000;height: 100%;position: fixed;top: 0;width: 100%;z-index:1;text-align: center;color: #FFFFFF;font-size: 20px;padding-top: 400px;font-weight: bold;display:block; z-index:1000;">
<img style="position: relative;top:0;width:120px;height:120px;" src="<?=base_url()?>m/static/images/load.gif" /></div>

    <div id="loading"></div>
        
        <section class="m-page" >
                       
            <div class="m-img" style=" background:url(<?=base_url()?>m/static/images/bottom_bg.jpg) no-repeat bottom;height:2680px;">
			 <div class="home"><a href="<?=base_url()?>m/index.php" style="width:70px; height:82px;"><img src="<?=base_url()?>m/static/images/home.png"></a></div> 
                 <div class="zpg_head"><img src="<?=base_url()?>m/static/images/hdgz_bt.jpg" class="bt"></div>
                 <div class="hdgz">
                      <P class="bt">参赛方式</P>
                      <P class="xz">绘画作品、手工作品、摄影作品等形式均可；作品要求<span style="color:#ca2961;">不超过5MB</span>，格式JPG或PNG 。</P>
                      <P class="xxz">(作品须原创，任何抄袭、借用作品将取消参赛资格。)</P>
					<?php
					if(!empty($userinfo)){
					?>
                      <div class="btn"><a href="<?=base_url()?>m/index.php?c=upload"><img src="<?=base_url()?>m/static/images/hdgz_btn1.jpg"></a></div>
					  <?php
						}else{	  
						?>
					<div class="btn"><a href="javascript:void(0);" data-reveal-id="myModal"><img src="<?=base_url()?>m/static/images/hdgz_btn1.jpg"></a></div>
					<?php
						}
					?>
					 </div>
                 <div class="zpzt">
                      <P class="bt">作品主题</P>
                      <p class="txt">以“一起长大”为主题，并任选以下四个主题方向进行创作，述说“一起长大”的故事。</p>
                      <img src="<?=base_url()?>m/static/images/hdgz_pic1.jpg">
                      <p class="txt">动物是小朋友的好朋友、小伙伴！请将你的孩子和动物伙伴“一起长大”的故事用画笔或相机与我们分享吧。</p>
                      <img src="<?=base_url()?>m/static/images/hdgz_pic2.jpg">
                      <p class="txt">美好的旅行总是令人难忘的，请将你的一家人亲子旅行途中的趣事、趣闻用画笔或相机与我们分享吧。</p>
                      <img src="<?=base_url()?>m/static/images/hdgz_pic3.jpg">
                      <p class="txt">爱我，你就亲亲我！爱就要大胆地表达出来。快向我们分享属于你的孩子、家人和朋友亲吻的温馨片刻吧。</p>
                      <img src="<?=base_url()?>m/static/images/hdgz_pic4.jpg">
                      <p class="txt">家，是我们爱的港湾，是孩子成长的摇篮！ 请向我们分享孩子和家人长大的故事画面吧！</p>
                 </div>  
                 <div class="zpgz_head"><img src="<?=base_url()?>m/static/images/pxgz_bt.jpg"></div>  
                 <div class="zpgz">
                      <img src="<?=base_url()?>m/static/images/hdgz_ico1.jpg">
                      <p class="dtxt">按照网络投票数量排名</p>
                      <p class="xtxt">（大赛期间 每日、每周都会评选出相应奖项）</p>
                 </div>
                 <div class="zpgz" style="margin-top:36px;">
                      <img src="<?=base_url()?>m/static/images/hdgz_ico2.jpg">
                      <p class="dtxt">按照网络投票数量排名</p>
                      <p class="xtxt">（大赛期间 每日、每周都会评选出相应奖项）</p>
                 </div>
                 <div class="hdyq">
                      <p class="btz">绘画/手工作品：</p>
                      <p class="xzz">作品主题符合大赛主题；画面中心内容突出，结构比例恰当准确，色彩协调美观，富有感染力；且作品富于创意性，创作材料、手法体现出源于生活，又高于生活的艺术美感。</p>
                      <p class="btz">摄影作品：</p>
                      <p class="xzz">作品内容真实，符合大赛主题要求；作品富有艺术性、技术性和感染力；在色彩、构图、节奏、情感等几方面进行综合评比。</p>
                 </div>
                 <div class="zpgz_head" style=" margin-top:0;"><img src="<?=base_url()?>m/static/images/tbgz_bt.jpg"></div> 
                 <div class="tphz">
                      <img src="<?=base_url()?>m/static/images/tpgz_p1.jpg">
                      <p class="time">投票时间：</p>
                      <p class="timenr">2015年3月20日00：00至2015年4月10日23：59</p>
                      <img src="<?=base_url()?>m/static/images/tpgz_p2.jpg" style="margin-top:25px;">                      
                      <p class="xz">投票次数限制：登录者每天可为同一副作品投票不超过<span style="color:#ff4e00;">3</span>票，总体投票数量不限；不登录者每天投票数不超过<span style="color:#ff4e00;">10</span>票。</p>
                      <img src="<?=base_url()?>m/static/images/tpgz_p3.jpg" style="margin-top:25px;">                      
                      <p class="xz">投票过程中如发现刷票行为，组委会将对刷票人进行严厉惩处，行为严重者停止其投票，并进行通报。性质恶劣者直至追究法律责任；刷票作品将取消获奖资格。<br><span style="font-size:18px;">本次大赛解释权归大赛组委会所有！</span></p>
                      
                 </div>
          </div>            
        </section>                      
                    
    
<!-- 引入脚本 -->   
<script type="text/javascript" >
        function showQ(){
            $("#zhao").hide();
        }
</script>
<script>document.body.className = "";</script>

     <div id="myModal" class="reveal-modal">
       <div class="qq"><a href="<?=base_url()?>m/index.php?c=useroauth"><img src="<?=base_url()?>m/static/images/dlts_qq.png"></a></div>
         <div class="weibo"><a href="<?=base_url()?>m/index.php?c=test"><img src="<?=base_url()?>m/static/images/dlts_weibo.png"></a></div>
       <a class="close-reveal-modal">×</a> 

    </div>
</body>
</html>