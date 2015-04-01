<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安奈儿第五届-全国亲子创意大赛</title>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<link href="<?=base_url()?>static/css/sccg.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>
</head>

<body>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
          <?php Widget::website_header();?>
            <div class="sccg">
            	<div class="sccg_title">
                	<img src="<?=base_url()?>/static/images/sccg_erweima.jpg">
                        <div class="sccg_word">
                        <p class="gxsccg">恭喜你上传成功啦！</p>
                        <p class="smewm">扫码关注安奈儿领<span>100元券</span>，需要注册一下哦！</p>
                        <p><a href="<?=base_url()?>index.php?c=upload" class="sccg_button"></a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <p class="sccg_dzjsm">电子券使用说明：<br>
1、本券消费满200元可使用，按吊牌价使用，不能同期享受其他优惠及叠加使用。<br>
2、获奖者凭安奈儿官方微信 所发送的电子券进行消费，转发无效。官微：<span>安奈儿ANNIL</span><br> 
3、电子券需一次性消费完毕，不设找赎，电子券金额不足部分须现金补足。<br>
4、电子券消费适用于所有商品（包括饰品、成品）。<br> 
5、本券使用有效期至<span>2015年4月20日</span>。
</p>
            </div>
          	<div class="better">
            	<h2>推荐作品</h2>
                <div class="sccg_more"><p><a href="<?=base_url()?>index.php?c=zuopin"><img src="<?=base_url()?>/static/images/sccg_more.jpg"></a></p></div>
                <div class="clear"></div>
                <ul>
                                      <?php
                  $num = 0;
                    foreach($list as $k => $v){
                      $num++;
                      if($num < 3){
                  ?>
                  
                  <li>
                      <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <p class="name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><?=mb_substr($v['title'],0,10,'utf-8')?></a></p>
                        <p class="zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        <p class="clear"></p>
                        <p class="author">作者：<a href="#" target="_blank"><?=mb_substr($v['nickname'],0,10,'utf-8')?></a></p>
                        <p class="button2"><a href="javascript:void(0);" onclick="zan(<?=$v['id']?>);" class="dianzan"></a>
                          <a href="javascript:void(0);" onclick="copy_clip('<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>');" class="jizan"></a></p>
                    </li>
                    <div class="kong"></div>
                  
                    <?php
                      }else{
                        $num = 0;
                    ?>
                    <li>
                      <p class="image"><a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" onload="DrawImage(this, 250, 177);"></a></p>
                        <p class="name">作品：<a href="<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>" target="_blank"><?=$v['title']?></a></p>
                        <p class="zan"><img src="<?=base_url()?>static/images/zan.png"><?=$v['zan']+$v['ji']?></p>
                        <p class="clear"></p>
                        <p class="author">作者：<a href="#" target="_blank"><?=$v['nickname']?></a></p>
                        <p class="button2"><a href="javascript:void(0);" onclick="zan(<?=$v['id']?>);" class="dianzan"></a>
                          <a href="javascript:void(0);" onclick="copy_clip('<?=base_url()?>index.php?c=zuopin&m=detail&id=<?=$v['id']?>');" class="jizan"></a></p>
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
    <div class="bg_sccg"></div>
    <a href="javascript:void(0);" data-reveal-id="myModal_dzcg" id="myclick"></a> 
     <?php Widget::dianzan();?>  
</body>
</html>
