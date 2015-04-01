<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安奈儿第五届-全国亲子创意大赛</title>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<link href="<?=base_url()?>static/css/hjmd.css" type="text/css" rel="stylesheet">
<!--
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jQueryRotate.2.2.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery_172.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.tweetmove.js" ></script>
-->
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jQueryRotate.2.2.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.tweetmove.js" ></script>
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>

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
                     <!--
                     <ul>
                      <?php
                        foreach($list as $lk => $lv){
                      ?>
                         <li>获得 <span style="color:#fe7d00"><?=$lv['title']?></span> 一只</li>
                         <?php
                          }
                         ?>
                     </ul>
                   -->
                         <ul>
                            <?php
                                $count = count($list);
                                $num = $count/2;
                            ?>
                         <div class="left" id="tweetDiv1">
                            <?php
                                
                                foreach($list as $k => $v){
                                   if($k%2==1){
                           
                            ?>
                         <li><span class="name"><?=$v['nickname']?></span>&nbsp;获得 <span style="color:#fe7d00"><?=$v['title']?></span> </li>            
                            <?php
                                }
                            }
                            ?>
                         </div>  

                         <div class="left" id="tweetDiv2">
                        <?php
                                
                                foreach($list as $k2 => $v2){
                                   if($k%2 != 1){
                           
                            ?>
                         <li><span class="name"><?=$v['nickname']?></span>&nbsp;获得 <span style="color:#fe7d00"><?=$v2['title']?></span> </li>            
                            <?php
                                }
                            }
                            ?>      
                         </div>                    
                     </ul>
                     <p class="xz">温馨提示：在获知中奖信息后，请及时在用户中心<a href="<?=base_url()?>index.php?c=user&m=info"><span style="color:#ff0000">完善邮寄资料。</span></a></p>
                </div>
                
                
                <div class="clear"></div>
            </div>
             <div class="better">
                <h2>每日投票榜</h2>
                <div class="week" style="display:none;">                        
                             <select name="week" size="1">
                                    <option>第一周</option>
                                    <option>第二周</option>
                                    <option>第三周</option>
                                    <option>第四周</option>
                             </select>
                </div>
                <div class="clear"></div>
                <ul>
                  <?php
                  $num = 0;
                    foreach($daybest as $k => $v){
                      $num++;
                      if($num < 3){
                  ?>
                    <li>
                        <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/thumb/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <P class="week_zb"><?=$k+1?></P>
                        <p class="week_name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><?=$v['title']?></a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        
                    </li>
                    <div class="kong"></div>
                     <?php
                      }else{
                        $num = 0;
                    ?>
                <li>
                        <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/thumb/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <P class="week_zb"><?=$k+1?></P>
                        <p class="week_name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><?=$v['title']?></a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        
                    </li>
                    <?php 
                      }

                    }
                    ?>

                </ul>
                <div class="clear"></div>
            </div>


            <div class="better">
            	<h2>每周投票榜</h2>
                <div class="week" style="display:none;">						
							 <select name="week" size="1">
							        <option>第一周</option>
							        <option>第二周</option>
                                    <option>第三周</option>
                                    <option>第四周</option>
						     </select>
                </div>
                <div class="clear"></div>
                <ul>
                  <?php
                  $num = 0;
                    foreach($best as $k => $v){
                      $num++;
                      if($num < 3){
                  ?>
                	<li>
                    	<p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <P class="week_zb"><?=$k+1?></P>
                        <p class="week_name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><?=$v['title']?></a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        
                    </li>
                    <div class="kong"></div>
                     <?php
                      }else{
                        $num = 0;
                    ?>
                <li>
                        <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="http://sw.matrixdigi.com/minis/annil2015/drawing/uploads/thumb/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <P class="week_zb"><?=$k+1?></P>
                        <p class="week_name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><?=$v['title']?></a></p>
                        <p class="week_zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        
                    </li>
                    <?php 
                      }

                    }
                    ?>

                </ul>
                <div class="clear"></div>
            </div>
            
        </div>
    </div>
	<div class="hjmd_bg" style="height:1500px;"></div>
    
<?php Widget::dialog();?>
    
    <div id="myModal_zj" class="reveal-modal" style="background:url(<?=base_url()?>static/images/hjts_bg.png) no-repeat;">
         <div class="hjts_tt"><img src="<?=base_url()?>static/images/hjts_tt.png"></div>
         <div class="hjts_zjxx">恭喜你中了<span style="color:#fe7d00">小长脚兔</span>，<br>
继续点赞可获得更多抽奖机会！
</div>
         <div class="hjts_jxdz"><a href="<?=base_url()?>index.php?c=zuopin"></a></div>
	     <a class="close-reveal-modal">×</a> 
    </div>
    
    <div id="myModal_miss" class="reveal-modal" style="background:url(<?=base_url()?>static/images/hjts_bg.png) no-repeat;">
         <div class="hjts_ttk"><img src="<?=base_url()?>static/images/hjts_ttk.png"></div>
         <div class="hjts_zjxx">没有抽到，<br>
很遗憾你没有中奖！T^T
</div>
         <div class="hjts_jxdz"><a href="<?=base_url()?>index.php?c=zuopin"></a></div>
	     <a class="close-reveal-modal">×</a> 
    </div>

	 <a href="javascript:void(0);" data-reveal-id="myModal_zj" id="zhongjiang"></a>   
	 <a href="javascript:void(0);" data-reveal-id="myModal_miss" id="cjmiss"></a> 
	 

    <script type="text/javascript">
$("#tweetDiv1").tweetMove(5);
$("#tweetDiv2").tweetMove(5);
</script> 

        <script type="text/javascript">
  var dmtJsHost = (("https:" == document.location.protocol) ? "https" : "http");
  document.write(unescape("%3Cscript src='" + dmtJsHost + "://d.matrixdigi.com/js/mfa.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
  var dmtTracker = _dmt.init("dmx", "S-000072-01");
  dmtTracker._setTrack(dmtJsHost + '://mo.dmtrck.com');
  dmtTracker._trackSpotLight();
} catch(err) {}
</script>
</body>
</html>
