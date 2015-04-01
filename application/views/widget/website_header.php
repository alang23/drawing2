            <div class="logo"><a href="#" target="_blank"><img src="<?=base_url()?>static/images/logo.png"></a></div>
            <?php
                if(empty($userinfo)){
            ?>
                <div class="login_off">
                    <a href="<?=base_url()?>index.php?c=useroauth" class="qq"><img src="<?=base_url()?>static/images/QQlogin.png"></a>
                    <a href="<?=base_url()?>index.php?c=test"><img src="<?=base_url()?>static/images/weibologin.png"></a>
                </div>
                <?php
                }else{
                ?>
                <div class="login_on" style=" display:block;"><p>欢迎您，<a href="<?=base_url()?>index.php?c=user" target="_blank"><?=$userinfo['nickname']?></a>抽奖机会：<span><?=$user['lotterynum']?>次</span>
                    <a href="<?=base_url()?>index.php?c=login&m=logout">【退出】</a>
                </p></div>
                <?php
                    }
                ?>
            </div>
            <div class="clear"></div>
            <div class="button">
                <?php
                    if(empty($userinfo)){
                ?>
                <a href="javascript:void(0);" data-reveal-id="myModal" target="_blank" id="logindiv"><img src="<?=base_url()?>static/images/button.png"></a>
                <?php
                    }else{
                ?>
                 <a href="<?=base_url()?>index.php?c=upload" ><img src="<?=base_url()?>static/images/button.png"></a>
                 <?php
                }
                 ?>
            </div>
            <div class="share">

               <!-- <img src="<?=base_url()?>static/images/share.png"> -->
               <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>

            </div>
            <div class="nav">
              <ul>
                  <li><a href="<?=base_url()?>" <?php if($nav == 'indexcontroller' || $nav == ''){?> class="slecet" <?php } ?>>首页</a></li>
                    <li><a href="<?=base_url()?>index.php?c=jieshao" <?php if($nav == 'jieshao'){?> class="slecet" <?php } ?>>活动介绍</a></li>
                    <li><a href="<?=base_url()?>index.php?c=zuopin" <?php if($nav == 'zuopin'){?> class="slecet" <?php } ?> >作品馆</a></li>
                    <li><a href="<?=base_url()?>index.php?c=hjmd" <?php if($nav == 'hjmd'){?> class="slecet" <?php } ?>>获奖名单</a></li>
                    <li><a href="<?=base_url()?>index.php?c=jiangpin" <?php if($nav == 'jiangpin'){?> class="slecet" <?php } ?>>奖品设置</a></li>
                    <li><a href="<?=base_url()?>index.php?c=lijie"<?php if($nav == 'lijie'){?> class="slecet" <?php } ?>>往届赛事</a></li>
                    <li><a href="http://www.annil.com/" target="_blank">兔子
                        <img src="<?=base_url()?>static/images/double.png">窝</a></li>
                </ul>
            </div>
            <div class="clear"></div>