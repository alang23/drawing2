	/**
	* mini lib by brucewan
	*/
	(function(m){
		if(m) {
			return;
		}
		var vendors = [ "webkit", "moz", "o" ];
		var m = {
			extend: function (destination, source, override, replacer) {
				if (override === undefined) override = true;
				for (var property in source) {
					if (override || !(property in destination)) {
						if(replacer) replacer(property);
						else destination[property] = source[property];
					}
				}
				return destination;
			},
			support: {
				translate3d:  (function() {var sTranslate3D = "translate3d(0px, 0px, 0px)"; var eTemp = document.createElement("div"); eTemp.style.cssText = " -moz-transform:" + sTranslate3D + "; -ms-transform:" + sTranslate3D + "; -o-transform:" + sTranslate3D + "; -webkit-transform:" + sTranslate3D + "; transform:" + sTranslate3D; var rxTranslate = /translate3d\(0px, 0px, 0px\)/g; var asSupport = eTemp.style.cssText.match(rxTranslate); var bHasSupport = (asSupport !== null && asSupport.length == 1); return bHasSupport; })()
			},
			css: function(obj, prop, value){
				var needVendor = /transform/i;
				if(needVendor.test(prop)) {
					for(var i = 0; i < vendors.length; i++) {
						obj.style[vendors[i]+ prop.substr(0, 1).toUpperCase()+prop.substr(1)] = value;
					}
				}
				obj.style[prop] = value;
			}
		};
		window.m = m;
	})(window.m);


	m.Tab = function(config){
		this.config = m.extend(m.extend({}, m.Tab.config), config, true);
		this.init();
	}
	m.Tab.config = {
		touchMove: false,
		animTime: 500,
		touchDis: 40,
		currentClass: 'current'
	}
	m.Tab.prototype = {
		init: function(){
			var self = this;
			var c = self.config;

			self._data = {};

			self.target = c.target;
			self.trigger = c.trigger;
			self.num = self.target.length;
			self.wrap = self.target[0].parentNode;
			// self.wrap.cssText += ';-webkit-transition: all .5s linear;'
			if(m.support.translate3d) {
				self.wrap.style.webkitTransition = '-webkit-transform '+ c.animTime +'ms ease-out';
			}
			m.css(self.wrap, 'transform', 'translate(0,0)');
			self.width = self.wrap.parentNode.clientWidth;

			self._attach();

			self.playTo(0);

		},

		_attach: function(){
			var self = this;
			var c = self.config;

			// 妯珫灞忓垏鎹㈡椂
			window.addEventListener('resize', self.update.bind(self));

			// 鐐瑰嚮鍥炬爣瑙﹀彂
			if(self.trigger) {
				var len = self.trigger.length;
				for(var i = 0; i < len; i++) {
					(function(i){
						self.trigger[i].addEventListener('touchend', function(e){
							self.playTo(i);
						});
					})(i);
				}
			}

			// 婊戝姩灞忓箷瑙﹀彂
			var d = self._data;
			var locked = false;
			var touchMove, touchEnd;
			if(c.touchMove) {
				self.wrap.addEventListener('touchstart', function(e){
					d.pageX = e.touches[0].pageX;
					d.pageY = e.touches[0].pageY;
					self.wrap.style.webkitTransitionDuration = '0ms';
					self.wrap.addEventListener('touchmove', touchMove);
					self.wrap.addEventListener('touchend', touchEnd);
					// self.wrap.addEventListener('touchcancel', touchEnd);
				});
			}
			touchMove = function(e){
				d.dis = e.touches[0].pageX - d.pageX;
				d.disY = e.touches[0].pageY - d.pageY;

				if(Math.abs(d.dis / d.disY) > 0.5) {
					e.stopPropagation();
					e.preventDefault();
				}

				// self.wrap.style.webkitTransform = 'translate3d(' + (d.dis - self.current * self.width) + 'px,0,0)';
				m.css(self.wrap, 'transform', 'translate3d(' + (d.dis - self.current * self.width) + 'px,0,0)');
			}
			touchEnd = function() {
				if(d.dis === undefined || isNaN(d.dis)) {
					d.dis = 0;
				}

				self.wrap.style.webkitTransitionDuration = c.animTime + 'ms';
				self.wrap.removeEventListener('touchmove', touchMove);
				self.wrap.removeEventListener('touchend', touchEnd);

				if(!d.dis || (Math.abs(d.dis) < c.touchDis)) {
					self.playTo(self.current);
					return;
				}
				if(d.dis > 0) {
					self.prev();
				} else {
					self.next();
				}

				d.dis = 0;

			};

			// 鐢ㄦ埛鐐瑰嚮鏃�
			self.wrap.addEventListener('click', function(e){
				c.onclick && c.onclick.call(self, e);
			});


		},

		playTo: function(i){
			var self = this;
			var c = self.config;

			if(i >= self.num -1) {
				i = self.num - 1;
			}
			if(i < 0) {
				i = 0;
			}
			if(m.support.translate3d) {
				m.css(self.wrap, 'transform', 'translate3d('+ (-this.width * i) +'px,0,0)');
			} else {
				m.css(self.wrap, 'transform', 'translate('+ (-this.width * i) +'px,0)');
			}
			// 濡傛灉杩樻槸褰撳墠椤�
			if(i === self.current) return;

			if(self.trigger && self.trigger[self.current]) {
				self.trigger[self.current].classList.remove(c.currentClass);
			}
			self.prevPage = self.current;
			self.current = i;
			if(self.trigger && self.trigger[self.current]) {
				self.trigger[self.current].classList.add(c.currentClass);
			}

			
			window.setTimeout(function(){
				c.onchange && c.onchange.apply(self, [i]);
			}, c.animTime);
		},
		prev: function(){
			this.playTo(this.current - 1);
		},
		next: function(){
			this.playTo(this.current + 1);
		},
		update: function(e){
			var self = this;
			self.width = self.wrap.parentNode.clientWidth;
		}
	}/*  |xGv00|deb5a35dcca125a4a8e71d0a43bb6ba6 */