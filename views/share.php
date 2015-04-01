<?php
require_once "jssdk.php";
//$jssdk = new JSSDK("wx92f108da5f2e9605", "57d54f34b6dcb520997cc94df3245cd7");
$jssdk = new JSSDK("wxada0d1a0cc2981ed", "68ee59da160bc439c2f838392d930b1c");

$signPackage = $jssdk->GetSignPackage();
?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
       'onMenuShareTimeline',
       'onMenuShareAppMessage'
      // 所有要调用的 API 都要加到这个列表中
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
	  wx.onMenuShareTimeline({
          title: '我在安奈儿参加DIY T恤活动，快帮我加油送到安奈儿工厂！',
          link: '<?=base_url().(@$isHelp?"help?id=".$user_id:"")?>',
          imgUrl: 'http://annil2015.matrixdigi.com/diy/images/200-200.jpg',
          trigger: function (res) {
            
          },
          success: function (res) {
            
          },
          cancel: function (res) {
            
          },
          fail: function (res) {
            
          }
        });
	  wx.onMenuShareAppMessage({
		    title: '我在安奈儿参加DIY T恤活动，快帮我加油送到安奈儿工厂！', // 分享标题
		    desc: '', // 分享描述
		    link: 'http://annil2015.matrixdigi.com/diy/help?id=<?=$user_id?>', // 分享链接
		    imgUrl: 'http://annil2015.matrixdigi.com/diy/images/200-200.jpg', // 分享图标
		    type: '', // 分享类型,music、video或link，不填默认为link
		    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		    success: function () { 
		        // 用户确认分享后执行的回调函数
		    },
		    cancel: function () { 
		        // 用户取消分享后执行的回调函数
		    }
		});
  });
</script>