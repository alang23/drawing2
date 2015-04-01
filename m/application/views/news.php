<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美的快净,送你时间</title>
<link href="<?=base_url()?>static/css/style.css" rel="stylesheet" type="text/css" />
<meta name="keywords" content="">
<meta name="description" content="">
<script src="<?=base_url()?>static/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>static/js/archefoucs.js" type="text/javascript"></script>

</head>

<body>
    
<div class="nr">    
	<div class="navBar">
    <div class="logo"><img src="<?=base_url()?>static/images/logo.jpg" /></div>	
    </div>
</div>

<!--flash START-->
<div class="flash">
        <div class="gg" id="gg">
            <div class="ggLoading">
                <div class="ggLoading2"><em>动画载入中</em></div>
            </div>
            <div class="ggs">
                <div class="ggBox" id="ggBox">
                  
                    <a target="_blank"  style="z-index: 3; opacity: 4;"><img src="<?=base_url()?>static/images/banner1.jpg" /></a>       
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner2.jpg"  /></a>                    
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner3.jpg"  /></a>
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner2.jpg"  /></a>                    
                    <a target="_blank"><img src="<?=base_url()?>static/images/banner3.jpg"  /></a>
                </div>
            </div>
            <div class="ggb">
                <div class="ggBtns" id="ggBtns">
                    <a href='javascript:void(0)' class="ggOn"></a>
                    <a href='javascript:void(0)'></a>
                    <a href='javascript:void(0)'></a>
                    <a href='javascript:void(0)'></a>
                    <a href='javascript:void(0)'></a>
                </div>
            </div>
        </div>

</div>
<!--flash END-->

<div class="news">
      <div class="news_nr">
            <div class="top"><img src="<?=base_url()?>static/images/news_bt.jpg" /></div>
            <div class="back"><a href="<?=base_url()?>"><img style="float:right;" src="<?=base_url()?>static/images/news_back.jpg" /></a></div>
            <div class="line"></div>
            <?php
                $knum = 0;
                foreach($list as $k => $v){
                    $knum++;
            ?>

            <?php
                if($knum == 1){
            ?>
            <ul>
                <li style="margin-top:15px;"><p class="wz"><a href="<?=base_url()?>index.php?c=news&m=detail&id=<?=$v['id']?>">·<?=$v['title']?></a></p><p class="date">[<?=$v['mytime']?>]</p></li>
             <?php
                }else{
             ?>               
            <li><p class="wz"><a href="<?=base_url()?>index.php?c=news&m=detail&id=<?=$v['id']?>">·<?=$v['title']?></a></p><p class="date">[<?=$v['mytime']?>]</p></li>
            <?php
                }
            ?>

            <?php
                if($knum == 5 || $k == (count($list)-1)){
                        $knum = 0;

            ?>
            </ul>
            <?php
                }
            ?>
            <?php
                }
            ?>


            <div class="fy">
                <!--
                    <div class="lr"><a>上一页</a></div>
                    <div class="ym">1</div>
                    <div class="ymx"><a>2</a></div>
                    <div class="ymx"><a>3</a></div>
                    <div class="ymx"><a>4</a></div>
                    <div class="sl">…</div>
                    <div class="ymx"><a>12</a></div>
                    <div class="ymx"><a>13</a></div>
                    <div class="lr"><a>下一页</a></div>
                -->
                <?=$page?>
           </div> 
      </div>      
</div>

</body>
</html>
