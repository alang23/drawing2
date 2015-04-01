// JavaScript Document
/**
* 鍔熻兘锛氳偛鍎跨綉甯傚満椤圭洰缁勯€氱敤js妗嗘灦v1.0
* 缂栧啓锛氱帇 鐐�
* 鏃堕棿锛�2013.04.10
* 鏈€鍚庢洿鏂版椂闂达細2013.09.05
* 灏佽浜嗕互涓嬪嚱鏁� addNum  銆乫lash 銆乴ogin 銆乸opBox 銆乭idePop 銆乻etCopy 銆乼abSwitch 銆乼abSelect銆亀ordLeft
*/
(function($){
	$.fn.extend({
		/**
		 *鎸囧畾鍏冪礌鏀瑰彉鏁板瓧锛岀敤浜庢娊濂栧墿浣欐鏁帮紝绉垎鍙樺寲绛�
		 * $("#ak").addNum(-3,true); //绗簩涓弬鏁拌缃负true 鏀寔璐熸暟
		*/
		addNum:function(n, f){
			n = n || 1;
			f = f || false;
			var _this=$(this);
			var _html=parseInt(_this.html());
			_html=isNaN(_html)?0:_html;
			_html+=parseInt(n);
			if(!f){
				_html=_html<0? 0:_html;	
			}
			_this.html(_html);
		},
		 /**
		  * 杞藉叆flash $("#ak").flash('js/test.swf',{width:400,height:100,color:"",trans:"transparent",v:1}); 鍙傛暟v鏄増鏈彿
		  *
		  */
		flash:function(url,set){
			var _this=$(this);
			var _setting={ width:100,height:100,size:8,color:"#ffffff",trans:"transparent",v:1} 
			_setting = $.extend(_setting,set);
			if($.isFun('FlashObject')){
				var fo = new FlashObject(url+"?v=" + _setting.v, "Flash", _setting.width, _setting.height,_setting.size, _setting.color);
				fo.addParam("menu", "false");
				fo.addParam("scale", "noscale");
				fo.addParam("wmode", _setting.trans);
				fo.addParam("allowscriptaccess", "always");
				fo.addParam("allownetworking", "always");
				fo.addParam("allowFullScreen", "true");
				fo.write(_this[0].id);
			}else{
				alert("璇疯浇鍏wfobject2.0.js");
			}
		},
		
		//浣跨敤姝ゆ柟娉曡璋冪敤js 172鐗堟湰 http://file2.ci123.com/ast/js/jquery_172.js
		//鏀瑰彉鐖跺厓绱燾lass渚嬪瓙锛�$("#cha1").tabSwitch('.chacont',{fatherClassPre:'change cha'}); 娉ㄦ剰鐖剁被class 璇蜂粠0寮€濮� cha0 cha1 cha2
		//浠卨i class 鏀瑰彉鏃�       $("#cha1").tabSwitch('.chacont',{liOnClassName:'on'});
		tabSwitch:function(contentClass,settings){
			settings = settings ||{};
			//璁剧疆閮ㄥ垎
			var liOnClassName = settings.liOnClassName || '';
			var fatherClassPre = settings.fatherClassPre || '';
			var _this=$(this);
			_this.children().each(function(){
				$(this).live('click',function(){
					 var index=$(this).index();
					 $(contentClass).hide();
					 $(contentClass).eq(index).show();
					 if(fatherClassPre!=''){
						$(this).parent().attr("class",fatherClassPre+index);
					 }else{
						_this.children().removeClass(liOnClassName);
						$(this).addClass(liOnClassName);
					 }
				});
				
			}) 
		},
		/*妯℃嫙windows涓嬫媺鍒楄〃
		*	listId 涓嬫媺閫夋嫨鍣� settings |  (鍙€夐儴鍒�) settings 鍙缃弬鏁�  callback 鍥炶皟鍑芥暟
		*	listOverColor 涓嬫媺鍒楄〃涓紶鏍囨斁涓婂幓鍗曡瀛椾綋棰滆壊 listOutColor 榧犳爣绉诲紑鍗曡瀛椾綋棰滆壊	
		*	listOverBgColor 涓嬫媺鍒楄〃涓紶鏍囨斁涓婂幓鍗曡鑳屾櫙棰滆壊 listOutBgColor  榧犳爣绉诲紑鍗曡鑳屾櫙棰滆壊
		*  inputId 銆乨ivId 榧犳爣鐐瑰嚮鍚� 璧嬪€煎璞￠€夋嫨鍣�			
		* 璋冪敤鏂规硶锛�$("#needTab").tabSelect("#needList",{},function(){alert('aaa')});
		* 绠€鍗曡皟鐢細$("#needTab").tabSelect("#needList");
		*/
		tabSelect:function(listId,settings,callback){
			var _settings={listOverColor:'#fff',listOutColor:'#e0be65',listOverBgColor:'#82A9E9',listOutBgColor:'#fff',tabClass:'',inputId:'',divId:''};//鍙缃弬鏁�
			_settings=$.extend(_settings,settings);
			var _this=$(this);
			_this.click(function(){
				$(listId).toggle();
				_this.toggleClass(_settings.tabClass);
			})
			//榧犳爣鎵嬪瀷
			_this.css({"cursor":"pointer"});
			$(listId).css({"cursor":"pointer"});
			$(listId).children().mouseover(function(){
				$(this).css({"background":_settings.listOverBgColor,"color":_settings.listOverColor});
			}).mouseout(function(){
				$(this).css({"background":_settings.listOutBgColor,"color":_settings.listOutColor});			
			}).click(function(){
				if(_settings.inputId!=''){
					$(_settings.inputId).val($(this).html());
				}
				
				if(_settings.divId!=''){
					$(_settings.divId).html($(this).html());
				}
				
				$(listId).hide();
				if(callback!=undefined){
					callback.call();
				}
			})
			//鐐瑰嚮绐楀彛闅愯棌鍒楄〃
			$(window.document).click(function(e){
				if(e.target.id!=_this.attr("id")){
					$(listId).hide();
				}
			})
		},
		/*
		 * 閫氱敤鍓╀綑澶氬皯瀛楀鐞�
		 * $("#杈撳叆妗咺D").wordLeft("鍓╀綑瀛楁暟ID",10);
		*/
		wordLeft:function(leftId,maxNum){
			$("#"+leftId).html(maxNum);
			var _this=$(this);
			_this.keyup(function(){
				var _l = _this.val().length;
				var left = maxNum - _l;
				left = left<0?0:left;
				$("#"+leftId).html(left);
				if(_l>maxNum){
					_this.val(_this.val().substr(0,maxNum));
				}
			});
			_this[0].onafterpaste=function(){
				var _l = _this.val().length;
				var left = maxNum -  _l;
				left = left<0?0:left;
				$("#"+leftId).html(left);
				if(_l>maxNum){
					_this.val(_this.val().substr(0,maxNum));
				}
			}
		}
	});
	$.extend({
		/**
		 *  璋冪敤鏂规硶 鍦ㄧ偣鍑讳箣鍚庤Е鍙戠殑鍑芥暟涓姞鍏�
		 *	if(!$.login('http://www.baidu.com?aaaa')){
				 return false	;
		 *	}
		  <link href="http://file2.ci123.com/ast/loginface/style5.css" rel="stylesheet" type="text/css" />
   		  <script type="text/javascript" src="http://file2.ci123.com/ast/loginface/cookielogin10.js?d=2013040802"></script>
		 */
		login:function(url){
			if($.isFun("needlogin")){
				if(!needlogin()){
					if(url!=undefined){
						$("#need_back_url").val(url);
					}
					return false;
				}
				return true;
			}else{
				alert("璇疯浇鍏ョ櫥闄哻ss鏂囦欢鍜宩s鏂囦欢");
			}
		},
		isFun:function(name){
			 return  eval("typeof "+ name + "==\"function\"");
		},
		/**
		 * 寮瑰嚭妗�
		 * $.popBox({word:'瑕佹樉绀虹殑娑堟伅',clbtn:'images/close.png',color:'brown',btn:'images/btn.png'});  
		 * 绗竴涓弬鏁版槸璁剧疆鍙傛暟锛屽弬鏁拌鏄庤涓嬮潰娉ㄩ噴 锛岀浜屼釜鍙傛暟鏄脊鍑哄洖璋冨嚱鏁帮紝绗笁涓弬鏁版槸鍏抽棴鍥炶皟鍑芥暟 绗洓涓槸鎸夌‘瀹氾紙 濡傛灉涓嶅啓鍒欒皟鐢ㄥ叧闂洖璋冿級 鍥炶皟鍑芥暟濡傛灉return 'no' 鍒欎笉鍏抽棴绐楀彛
		 */
		popBox:function(settings, popBack, closeBack, sureBack){
			popBack = popBack || function(){}; 				//寮规鍥炶皟鍑芥暟
			$.closeBack = closeBack || function(){};			//鍏抽棴寮规鍥炶皟鍑芥暟
			$.sureBack = sureBack || $.closeBack;			//鎸夌‘瀹氭寜閽�
			
			
			var _setting={isFade:true,speed:1000,sure:true,ishtml:true,isbg:true};//榛樿鍊�
			_setting = $.extend(_setting,settings);
			
			//鍙傛暟閰嶇疆閮ㄥ垎
			_setting		= _setting 			|| {};
			var word 		= _setting.word 	|| "";			//寮瑰嚭妗嗘枃瀛�
			var popbox 		= _setting.popid 	|| "popbox";	//榛樿寮规id
			var popbg 		= _setting.bgid 	|| "popbg"; 	//榛樿鑳屾櫙id
			var w 			= _setting.width 	|| 400; 		//榛樿瀹藉害
			var h 			= _setting.height 	|| 200; 		//榛樿楂樺害
			var clbtn 		= _setting.clbtn 	|| "http://act.ci123.com/global/images/close.png";	//鍏抽棴鎸夐挳鍥剧墖
			var btn			= _setting.btn 		|| "http://act.ci123.com/global/images/btn.png"; 	//纭畾鎸夐挳鍥剧墖
			var topcolor 	= _setting.color 	|| "#ff727f"; 	//鑹插僵椋庢牸
			var sure 		= _setting.sure      //鏄惁鏈夌‘瀹氭寜閽�
			var isbg 		= _setting.isbg 	 //鏄惁鏈夎儗鏅�
			var ishtml		= _setting.ishtml 	 //鏄惁鍙槸寮瑰嚭鍘熸湁妗嗗瓙(鍙互寮瑰嚭椤甸潰涓婂凡鏈夌殑妗嗗瓙)
			var isFade		= _setting.isFade ;  //鏄惁閲囩敤fadeIn
			var speed		= _setting.isFade ;  //fadeIn閫熷害
			
			 
			
			var bod=$(document.body) ;
			
			if(ishtml){
				var html="<div id=\""+popbg+"\" style=\"display:none;\"></div><div id=\""+popbox+"\"><div class=\""+popbox+"\"><div class=\""+popbox+"pop_t\" style=\"\"><a href=\"javascript:void(0);\" onclick=\"$.hidePop('"+popbox+"','"+popbg+"')\"><img src=\""+clbtn+"\" width=\"9\" height=\"9\" border=\"0\" /></a></div><div class=\""+popbox+"pop\" style=\"\"><p style=\"\">"+word+"</p>";
				if (sure){
					html+="<a href=\"javascript:void(0)\" onclick=\"$.surePop('"+popbox+"','"+popbg+"')\"><div class=\""+popbox+"pop_btn\"><img src=\""+btn+"\" boder=\"0\" /></div></a>";
				}
				html+="</div></div></div>";
				bod.append(html);
				
				$("#"+popbox).attr("style","position:absolute;z-index:1000;display:none;");
				$("."+popbox).attr("style","width:"+w+"px;");
				var pt_w=w-27,ptp=w-40;
				$("."+popbox+" ."+popbox+"pop_t").attr("style","width:27px;height:20px; padding:10px 0 0 "+pt_w+"px;  background:"+topcolor+";border-top-left-radius:6px;border-top-right-radius:6px;");
				$("."+popbox+" ."+popbox+"pop").attr("style","width:"+ptp+"px; background:#fff; padding:15px 20px; text-align:center;border:0;border-bottom-left-radius:6px;border-bottom-right-radius:6px;");
				$("."+popbox+" ."+popbox+"pop p").attr("style","font-size:14px; line-height:20px; color:"+topcolor+"; padding-bottom:20px;");
				$("."+popbox+"pop_btn").css({'background':topcolor,'width':'70px','height':'28px','margin':'0 auto'});
			}
			 
			//璁剧疆css锛屼笉绠″師鏉ュ瓨涓嶅瓨鍦╬obbg閮藉厛鐢╦query璁剧疆涓嬭儗鏅牱寮忥紝瑙ｅ喅IE涓� fadeIn 鍚� opacity澶辨晥鐨刡ug
			$("#"+popbg).attr("style","width:100%;position:absolute;top:0;left:0;background:#000;filter:alpha(opacity=50);opacity:0.5;z-index:999;display:none;");
				
			var bw=bod.width();
			var bgh=bod.height();
			var bh=$(window).height();
			var st=$(document).scrollTop();
			var left=(bw-w)/2;
			var top=(bh-h)/2+st;
			if (isbg){
				if(isFade){
					$("#"+popbg).fadeIn(speed).css({"height":bgh});
				}else{
					$("#"+popbg).show().css({"height":bgh});
				}
			}
			if(isFade){
				$("#"+popbox).fadeIn(speed).css({"top":top,"left":left});
			}else{
				$("#"+popbox).show().css({"top":top,"left":left});				
			}

			//寮瑰嚭妗嗗缁堝眳涓�
			var _window = $(window);
			_window.scroll(function(){
				$("#"+popbox+":visible").css({"top":(bh-h)/2+$(document).scrollTop()});
			})

			popBack.call();
		},
		//鍏抽棴寮瑰嚭妗嗘墽琛屽洖璋冨嚱鏁帮紝鍥炶皟鍑芥暟闇€瑕佷簨鍏堣缃�$.closeBack
		hidePop:function(popbox, popbg)
		{
			popbg = popbg || 'popbg';
			$("#"+popbox).remove();
			$("#"+popbg).remove();
			$.closeBack.call();
			$.closeBack = function(){};
		},
		//鐐圭‘瀹氭寜閽墽琛屽洖璋冨嚱鏁帮紝鍥炶皟鍑芥暟闇€瑕佷簨鍏堣缃�$.closeBack
		surePop:function(popbox, popbg)
		{
			popbg = popbg || 'popbg';
			if($.sureBack()!='no'){
				$("#"+popbox).remove();
				$("#"+popbg).remove();
			}
			$.closeBack = function(){};
		},
		/*
		 *澶嶅埗閭€璇烽摼鎺�
		 * content  澶嶅埗鐨勫唴瀹�
		 * needlogin 鏄惁闇€瑕佺櫥褰曪紝榛樿闇€瑕�
		 * callback 澶嶅埗鎴愬姛鍥炶皟
		 * wordsT 闈濱E娴忚鍣� 寮瑰嚭纭妗嗛《閮ㄦ枃妗�
		 * wordsL IE妗嗗鍒跺畬鎴愬悗鏂囨
		 */
		setCopy:function(content,needlogin,callback,wordsT,wordsL) {
			needlogin = needlogin || 'yes';
			wordsT = wordsT || "璇峰鍒朵互涓嬮個璇峰ソ鍙嬮摼鎺ュ彂閫佺粰鎮ㄧ殑鏈嬪弸锛�";
			wordsL = wordsL || "澶嶅埗鎴愬姛!鍙戠粰鎮ㄧ殑濂藉弸涓€璧锋潵鍙傚姞鍚э紒"
			
			if(needlogin == 'yes'){
				if (!$.login()){
					return false;
				}
			}
			var userAgent = navigator.userAgent.toLowerCase();
			var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
			var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
			var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);
			if(is_ie) {
				if(clipboardData.setData('Text', content)){
					if(callback!=undefined&&callback!=false){
						callback.call();
					}else{
						alert(wordsL);
					}
				}
			} else {
				prompt(wordsT, content);
			}
		},
		closeBack:'',
		sureBack:'',
		
		/*
		 * 缃戦〉婊氬姩鏉＄Щ鍔ㄥ嚱鏁�
		 * $.move(100,1000);  //$.move(椤堕儴璺濈,閫熷害,鍥炶皟鍑芥暟)
		*/
		move:function(top, speed, callback){
			var isCallback = false;
			speed = speed || 500;
			$("html,body").animate({'scrollTop':top},speed,function(){
				if(!isCallback&&(callback!=undefined)){
					callback();
					isCallback = true;
				}
			});
			 
		}
	})
})(jQuery)