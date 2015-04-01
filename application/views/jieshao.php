<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安奈儿第五届-全国亲子创意大赛</title>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<link href="<?=base_url()?>static/css/hdjs.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
</head>
 <script>
var ua=navigator.userAgent.toLowerCase();
var contains=function (a, b){
    if(a.indexOf(b)!=-1){return true;}
};
var toMobileVertion = function(){
    window.location.href = 'm/'
}
if((contains(ua,"android") && contains(ua,"mobile"))||(contains(ua,"android") && contains(ua,"mozilla")) ||(contains(ua,"android") && contains(ua,"opera"))
||contains(ua,"ucweb7")||contains(ua,"iphone")||contains(ua,"ipad")||contains(ua,"iPhone")||contains(ua,"android")||contains(ua,"iindow")){toMobileVertion();}
</script>
<link href="<?=base_url()?>static/css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.reveal.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.act.js"></script>
<script>var hostname="<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url()?>static/js/zan.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/common.js"></script>

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
<body>
	<div class="banner">
    	<div class="wrap">
        	<div class="header">
 <?php Widget::website_header();?>
            <div class="hdjs">
            	<h2>参赛方式</h2>
                <div class="hdjs_up"><p>绘画作品、手工作品、摄影作品等形式均可；作品要求<span>不超过200K</span>，格式JPG或png 。（作品须原创，任何抄袭、借用作品将取消参赛资格。）</p><a href="#" class="hdjsup_button"></a></div>
                <div class="hdjs_zpzt">
                	<h3><img src="<?=base_url()?>static/images/hdjs_zpzt.png"></h3>
                    <p>以“一起长大”为主题，并任选以下四个主题方向进行创作，述说“一起长大”的故事。</p>
                    <div class="hdjs_zhuti">
                    	<div class="zhuti_title"><h4 class="cn">我的动物伙伴</h4><h4 class="en">MY ANIMAL FRIENDS</h4></div>
                        <img src="<?=base_url()?>static/images/hdjs_dwhb.jpg">
                        <div class="clear"></div>
                        <p>动物是小朋友的好朋友、小伙伴！请将你的孩子和动物伙伴“一起长大”的故事用画笔或相机与我们分享吧。</p>
                    </div>
                    <div class="hdjs_zhuti">
                    	<div class="zhuti_title"><h4 class="cn">我们一起的旅行</h4><h4 class="en">OUR JOURNEY TOGETHER</h4></div>
                        <img src="<?=base_url()?>static/images/hdjs_treval.jpg">
                        <div class="clear"></div>
                        <p>美好的旅行总是令人难忘的，请将你的一家人亲子旅行途中的趣事、趣闻用画笔或相机与我们分享吧。</p>
                    </div>
                    <div class="hdjs_zhuti">
                    	<div class="zhuti_title"><h4 class="cn">亲亲我</h4><h4 class="en">GIVE ME A KISS</h4></div>
                        <img src="<?=base_url()?>static/images/hdjs_kiss.jpg">
                        <div class="clear"></div>
                        <p>爱我，你就亲亲我！爱就要大胆地表达出来。快向我们分享属于你的孩子、家人和朋友亲吻的温馨片刻吧。</p>
                    </div>
                    <div class="hdjs_zhuti">
                    	<div class="zhuti_title"><h4 class="cn">我爱我家</h4><h4 class="en">I LOVE MY FAMILY</h4></div>
                        <img src="<?=base_url()?>static/images/hdjs_love.jpg">
                        <div class="clear"></div>
                        <p>家，是我们爱的港湾，是孩子成长的摇篮！ 请向我们分享孩子和家人长大的故事画面吧！</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="hdjs_pxgz">
                	<h3><img src="<?=base_url()?>static/images/hdjs_guize.png"></h3>
                    <div class="pxgz_pxfs">
                    	<img src="<?=base_url()?>static/images/pxgz_wltp.jpg">
                        <div class="wltp">
                        	<h4>按照网络投票数量排名</h4>
                            <p>（大赛期间 每日、每周都会<br>&nbsp;&nbsp;&nbsp;评选出相应奖项）</p>
                        </div>
                        <img src="<?=base_url()?>static/images/pxgz_zjps.jpg">
                        <h4 class="zjps">由大赛组委会<br>专家评审团评定</h4>
                    </div>
                    <div class="clear"></div>
                    <h5>绘画/手工作品：</h5>
                    <p>作品主题符合大赛主题；画面中心内容突出，结构比例恰当准确，色彩协调美观，富有感染力；且作品富于创意性，创作材料、<br>手法体现出源于生活，又高于生活的艺术美感。</p>
                    <h5>摄影作品：</h5>
                    <p>作品内容真实，符合大赛主题要求；作品富有艺术性、技术性和感染力；在色彩、构图、节奏、情感等几方面进行综合评比。</p>
                </div>
                <div class="hdjs_tpgz">
                	<h3><img src="<?=base_url()?>static/images/hdjs_tpgz.png"></h3>
                    <p class="tpgz_date">投票时间：<span>2015年3月18日00：00至2015年4月8日23：59</span></p>
                    <p class="tpgz_cishu">投票次数限制：登陆者每天可为同一副作品投票不超过3票，总体投票数量不限；不登陆者每天投票数不超过10票。</p>
                    <p class="shuapiao">投票过程中如发现刷票行为，组委会将对刷票人进行严厉惩处，行为严重者停止其投票，并进行通报。</p>
                    <p>性质恶劣者直至追究法律责任；刷票作品将取消获奖资格。</p>
                    <p class="zzjsq">活动解析权归大赛组委会所有!</p>
                </div>
            </div>
		</div>
	</div>
    <div class="bg_hdjs"></div>   
    <?php Widget::dialog();?>  

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



<!--监测代码Part B-->
<script type="text/javascript">
//<![CDATA[
_mz_evt('1000960', '100027201');
//]]>
</script>       
</body>
</html>
