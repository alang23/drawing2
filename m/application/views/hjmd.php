<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安奈儿第五届-全国亲子创意大赛</title>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<link href="<?=base_url()?>static/css/hjmd.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jQueryRotate.2.2.js"></script>
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
				if(choujiang()){
                    $(this).rotate({
                        duration:3000,
                        angle: 0, 
                        animateTo:1440+45,
                        easing: $.easing.easeOutSine,
                        callback: function(){
                            alert('中奖了！');
                        }
                    });
                }

			}
		}
	});
});
</script>
</head>

<body>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
<?php Widget::website_header();?>
            <div class="hjmd">
            	<h2>转盘大抽奖</h2>
                <div class="demo">
                     <div id="disk"></div>
                     <div id="start"><img src="<?=base_url()?>static/images/start.png" id="startbtn"></div>
                </div>
                <div class="zjxx">
                     <p class="bt">中奖信息</p>
                     <ul>
                         <li>获得 <span style="color:#fe7d00">抱抱兔</span> 一只</li>
                         <li>获得 <span style="color:#fe7d00">抱抱兔</span> 一只</li>
                         <li>获得 <span style="color:#fe7d00">抱抱兔</span> 一只</li>
                         <li>获得 <span style="color:#fe7d00">抱抱兔</span> 一只</li>
                     </ul>
                     <p class="xz">温馨提示：在获知中奖信息后，请及时在用户中心<span style="color:#ff0000">完善邮寄资料。</span></p>
                </div>
                
                
                <div class="clear"></div>
            </div>
           
            <div class="better">
            	<h2>每周投票榜</h2>
                <div class="week">						
							 <select name="week" size="1">
							        <option>第一周</option>
							        <option>第二周</option>
                                    <option>第三周</option>
                                    <option>第四周</option>
						     </select>
                </div>
                <div class="clear"></div>
                <ul>
                	<li>
                    	<p class="image"><a href="javascript:void(0);" data-reveal-id="myModal_zj" target="_blank"><img src="<?=base_url()?>static/images/zuopin1.jpg"></a></p>
                        <P class="week_zb">1</P>
                        <p class="week_name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png">1000</p>
                        
                    </li>
                    <div class="kong"></div>
                    <li>
                    	<p class="image"><a href="javascript:void(0);" data-reveal-id="myModal_miss" target="_blank"><img src="<?=base_url()?>static/images/zuopin1.jpg"></a></p>
                        <P class="week_zb">2</P>
                        <p class="week_name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png">1000</p>
                        
                    </li>
                    <div class="kong"></div>
                    <li>
                    	<p class="image"><a href="#" target="_blank"><img src="<?=base_url()?>static/images/zuopin1.jpg"></a></p>
                        <P class="week_zb">3</P>
                        <p class="week_name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png">1000</p>
                        
                    </li>
                    <li>
                    	<p class="image"><a href="#" target="_blank"><img src="<?=base_url()?>static/images/zuopin1.jpg"></a></p>
                        <P class="week_zb">4</P>
                        <p class="week_name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png">1000</p>
                        
                    </li>
                    <div class="kong"></div>
                    <li>
                    	<p class="image"><a href="#" target="_blank"><img src="<?=base_url()?>static/images/zuopin1.jpg"></a></p>
                        <P class="week_zb">5</P>
                        <p class="week_name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png">1000</p>
                        
                    </li>
                    <div class="kong"></div>
                    <li>
                    	<p class="image"><a href="#" target="_blank"><img src="<?=base_url()?>static/images/zuopin1.jpg"></a></p>
                        <P class="week_zb">6</P>
                        <p class="week_name">作品：<a href="#" target="_blank">奔跑吧兔子</a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png">1000</p>
                        
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            
        </div>
    </div>
	<div class="hjmd_bg"></div>
    
    <div id="myModal" class="reveal-modal" >
	     <div class="qq"><img src="<?=base_url()?>static/images/dlts_qq.png"></div>
         <div class="weibo"><img src="<?=base_url()?>static/images/dlts_weibo.png"></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
    
    <div id="myModal_zj" class="reveal-modal" style="background:url(<?=base_url()?>static/images/hjts_bg.png) no-repeat;">
         <div class="hjts_tt"><img src="<?=base_url()?>static/images/hjts_tt.png"></div>
         <div class="hjts_zjxx">恭喜你中了<span style="color:#fe7d00">小长脚兔</span>，<br>
继续点赞可获得更多抽奖机会！
</div>
         <div class="hjts_jxdz"><a href="#" target="_blank"></a></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
    
    <div id="myModal_miss" class="reveal-modal" style="background:url(<?=base_url()?>static/images/hjts_bg.png) no-repeat;">
         <div class="hjts_ttk"><img src="<?=base_url()?>static/images/hjts_ttk.png"></div>
         <div class="hjts_zjxx">没有抽到，<br>
很遗憾你没有中奖！T^T
</div>
         <div class="hjts_jxdz"><a href="#" target="_blank"></a></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
    
</body>
</html>
