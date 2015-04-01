
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


<title>安奈儿创意大赛</title>
</head>
<body class="loading" onload="showQ();">
<div id="zhao" style="background:#000;height: 100%;position: fixed;top: 0;width: 100%;z-index:1;text-align: center;color: #FFFFFF;font-size: 20px;padding-top: 400px;font-weight: bold;display:block; z-index:1000;">
<img style="position: relative;top:0;width:120px;height:120px;" src="images/load.gif" /></div>

    <div id="loading"></div>
    	
		<section class="m-page" >
                       
			<div class="m-img" style=" background:url(<?=base_url()?>m/static/images/bottom_bg.jpg) no-repeat bottom;height:1008px;">
			 <div class="home"><a href="<?=base_url()?>m/index.php"><img src="<?=base_url()?>m/static/images/home.png"></a></div> 
              <div class="grzx_head">
                <img src="<?=$user['figureurl']?>">
                <p class="name">昵称：<?=$user['nickname']?></p>
                <p class="xinxi">您还有 <span style=" color:#fd4d00; text-decoration:underline;"><?=$user['lotterynum']?>次</span> 抽奖机会</p>
                 </div>
                 <div class="grzx_btn"> 
                      <a href="#"><img src="<?=base_url()?>m/static/images/grzx_btn1.jpg" class="left"></a>
                      <a href="<?=base_url()?>m/index.php?c=user&m=info"><img src="<?=base_url()?>m/static/images/grzx_btn2.jpg" class="right"></a>
                 </div>
                 <div class="grzx_zjxx">
                      <p class="bt">中奖信息</p>
                      <ul>
					   <?php
                         // foreach($list as $k => $v){
                        if(!empty($list)){
                        ?>
                           <li>获得 <span style="color:#fe7d00"><?=$list[0]['title']?></span> <?=count($list)?>只</li>
                        <?php
                         }
                        ?>
                        
                     </ul>
                     <p class="xz">温馨提示：在获知中奖信息后，请及时在用户中心<span style="color:#ff0000">完善邮寄资料。</span></p>
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

</body>
</html>