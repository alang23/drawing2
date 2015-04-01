/**
 * JQuery tweetMove v 1.2 

*/
(function($){
	$.fn.extend({
		tweetMove:function(shoNum,spleed){
			var _this=$(this);
			var _shoNum=shoNum || 3;
			var _spleed=spleed || 3;
		    var _shoNum=shoNum || 3;
			
			var init=function(){
				var m=_this.children();
				var maxShowNum=m.length-1;
				if(_shoNum>maxShowNum){_shoNum=maxShowNum;}
				
				/* 
				1.1
				 for(var i=0;i<m.length;i++){
					if(i<m.length-_shoNum){
						m.eq(i).css({'display':'none','opacity':0});
					}else{
						m.eq(i).css({'display':'block','opacity':1});
					}
				} */
				
				
				if(m.length>1){
					for(var i=m.length-1,j=0;i>-1;i--,j++){
						if(j<m.length-_shoNum){
							m.eq(i).css({'display':'none','opacity':0});
							_this.prepend(m.eq(i));
						}else{
							m.eq(i).css({'display':'block','opacity':1});
						}
					}
				}
			}
			init();
			 
			var tweet=function(){
				var sFirstId =_this.firstShowLi(_this);
				if(sFirstId==undefined) {return false;}
				var objChild=_this.children();
				var oPre =objChild.eq(sFirstId).prev();
				oPre.slideDown(1000,function(){
						oPre.animate({'opacity':1},500,function(){
							 _this.prepend(objChild.eq(objChild.length-1).css({'display':'none','opacity':0}));  
							 
						});
				})
			};
			_this.mouseover(function(){
				if (typeof(_this.tweetInterval)!='undefined') {
					clearInterval(_this.tweetInterval);
					delete _this.tweetInterval;
				}
			});
			_this.mouseout(function(){
				if(typeof(_this.tweetInterval)=="undefined"){
					_this.tweetInterval =  setInterval(tweet,_spleed*1000);
				}
			});
			tweet();
      		_this.tweetInterval =  setInterval(tweet,_spleed*1000);
			
		},
		firstShowLi:function(t){
            var lis = t.children();
            for(var i=0;i<lis.length;i++){
				if(lis.eq(i).css('display')!='none'){
					 return i;
				}
			}
        }
	})
})(jQuery);