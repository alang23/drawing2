
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
<script type="text/javascript" src="<?=base_url()?>m/static/js/jQueryRotate.2.2.js"></script>
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>
<script type="text/javascript">
$(function(){
	/*
参数：animateTo
	转盘旋转次数  360 * 次数（如：要转4次的话为：360*4 = 1440）
	停留说明: 每格坐标顺时针加45， 
		--如：转盘转4圈后停留在第二个格子，则：360*4+45，第三个格子为:360*4+90,以此类推
*/
	$("#startbtn").rotate({
		bind:{
			click:function(){
				choujiang();
				
				//alert(biao);
				//alert(err);
				//if(choujiang()){
                    $(this).rotate({
                        duration:3000,
                        angle: 0, 
                        animateTo:biao,
                        easing: $.easing.easeOutSine,
                        callback: function(){
                         //  alert(err);
						   if(err == 1){
								cj_miss();
								//alert(err);
						   }else if(err == 0){
								cj_zj();
								
						   }else{
								alert(err);
							}
							
                        }
                    });
               // }

			}
		}
	});


});

function lottery()
{
	

}
</script>
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


<title>安奈儿第五届亲子创意大赛</title>
</head>
<body class="loading" onload="showQ();">
<div id="zhao" style="background:#000;height: 100%;position: fixed;top: 0;width: 100%;z-index:1;text-align: center;color: #FFFFFF;font-size: 20px;padding-top: 400px;font-weight: bold;display:block; z-index:1000;">
<img style="position: relative;top:0;width:120px;height:120px;" src="<?=base_url()?>m/static/images/load.gif" /></div>

    <div id="loading"></div>
    	
		<section class="m-page" >
                       
			<div class="m-img" style="background:url(<?=base_url()?>m/static/images/zp_bg.jpg) no-repeat center;height:1008px;">
			 <div class="home"><a href="<?=base_url()?>m/index.php"><img src="<?=base_url()?>m/static/images/home.png"></a></div> 
                 <div class="zp">
                     <div id="disk"></div>
                   <div id="start"><img src="<?=base_url()?>m/static/images/zp_start.png" id="startbtn"></div>
                 </div>
				 <?php
					if(!empty($userinfo)){
				 ?>
                 <div class="zptxt">您还有<span style="text-decoration:underline"><?=$user['lotterynum']?>次</span> 抽奖机会</div>
				 <?php
			}
				 ?>
          </div>	 		
		</section>                		
				    

<!-- 引入脚本 -->	
<script type="text/javascript" >
		function showQ(){
			$("#zhao").hide();
		}
</script>
<script>document.body.className = "";</script>

<div class="reveal-modal" id="myModal_zj" style="background:url(<?=base_url()?>m/static/images/hjts_bg.png) no-repeat;">
         <div class="hjts_tt"><img src="<?=base_url()?>m/static/images/hjts_tt.png"></div>
         <div class="hjts_zjxx">恭喜你中了<span style="color:#fe7d00">小长脚兔</span>，<br>
继续点赞可获得更多抽奖机会！
    </div>
         <div class="hjts_jxdz"><a href="<?=base_url()?>m/index.php?c=zuopin" ></a></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
    
    <div class="reveal-modal" id="myModal_miss" style="background:url(<?=base_url()?>m/static/images/hjts_bg.png) no-repeat;">
         <div class="hjts_ttk"><img src="<?=base_url()?>m/static/images/hjts_ttk.png"></div>
         <div class="hjts_zjxx">没有抽到，<br>
很遗憾你没有中奖！T^T
    </div>
         <div class="hjts_jxdz"><a href="<?=base_url()?>m/index.php?c=zuopin" ></a></div>
	     <a class="close-reveal-modal">×</a> 
    </div>

    <div id="myModal" class="reveal-modal">
       <div class="qq"><a href="<?=base_url()?>m/index.php?c=useroauth"><img src="<?=base_url()?>m/static/images/dlts_qq.png"></a></div>
         <div class="weibo"><a href="<?=base_url()?>m/index.php?c=test"><img src="<?=base_url()?>m/static/images/dlts_weibo.png"></a></div>
       <a class="close-reveal-modal">×</a> 

    </div>
   
	 <a href="javascript:void(0);" data-reveal-id="myModal_zj" id="zhongjiang"></a>   
	 <a href="javascript:void(0);" data-reveal-id="myModal_miss" id="cjmiss"></a> 

	 <a href="javascript:void(0);" data-reveal-id="myModal" id="logindiv"></a>   
</body>
</html>