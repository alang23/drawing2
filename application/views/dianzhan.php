     <a href="javascript:void(0);" data-reveal-id="myModal_dzcg" id="myclick"></a> 
      <a href="javascript:void(0);" data-reveal-id="myModal_dzxz" id="shibai"></a> 
	  <a href="javascript:void(0);" data-reveal-id="myModal_yzm" id="yzm"></a> 
      
    <div id="myModal_dzcg" class="reveal-modal" style="width:501px; height:289px;background:url(<?=base_url()?>static/images/dzcg_bg.png) no-repeat;">
        <div class="dzcg_word"><img src="<?=base_url()?>static/images/dzcg_gou.png"><p>点赞成功，么么哒！<br>赶快参加幸运大转盘抽奖，<br>多多点赞还有机会获<span>点赞神秘奖！</span></p></div>
        <div class="clear"></div>
        <div class="dzcg_button"><p><a href="javascript:void(0);"  onclick="location.reload();" class="jixu"></a><a href="<?=base_url()?>index.php?c=hjmd" class="choujiang"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>

    <div id="myModal_dzxz" class="reveal-modal" style="width:501px; height:289px;background:url(<?=base_url()?>static/images/dzcg_bg.png) no-repeat;">
        <div class="dzcg_word"><img src="<?=base_url()?>static/images/dzcg_gan.png"><p><br>给每个作品投票不能超过3票哦<br></p></div>
        <div class="clear"></div>
        <div class="dzcg_button"><p><a href="javascript:void(0);"  onclick="location.reload();" class="jixu"></a><a href="<?=base_url()?>index.php?c=hjmd" class="choujiang"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>

	<div id="myModal_yzm" class="reveal-modal" style="">
        <div class="dzcg_word"><img src="<?=base_url()?>static/images/dzcg_gan.png">
                      <label for="Number"> 验证码：</label>
                      <input type="text" name="acode" id="acode"> <input type="hidden" name="id" id="fid"></div>
                      <div style="position:absolute; top:100px; left:210px;"><img src="<?=base_url()?>static/images/yzm.jpg" id="authcode" onclick="getCode();"></div>
                      <div class="dzcg_button" style="margin-left:60px;"><p><a href="javascript:void(0);" onclick="zhan();" style=" width:129px; height:39px;"><img src="<?=base_url()?>static/images/btn_yzm.png"></a></p></div>
        <a class="close-reveal-modal">×</a>
    </div>