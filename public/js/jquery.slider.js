/*!
 * Zino - jQuery Slider plugin 1.0.1
 *
 * Copyright 2012, Dimitar Ivanov (http://www.bulgaria-web-developers.com/projects/javascript/slider/)
 * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.
 * 
 * Date: Sun Jan 08 22:57:31 2012 +0200
 */
(function ($, undefined) {
	var PROP_NAME = 'slider',
		FALSE = false,
		TRUE = true;
		
	function Slider() {
		this._defaults = {
			autoPlay: true,
			easing: 'easeIn',
			focused: 0,
			height: 372,
			interval: 2000,
			orientation: 'horizontal',
			speed: 1000,
			stopOnEnd: false,
			width: 745,
			onStart: null,
			onEnd: null,
			onFirst: null,
			onLast: null
		};
	}
	
	$.extend(Slider.prototype, {
		_attachSlider: function (target, settings) {
			if (this._getInst(target)) {
				return FALSE;
			}
			var $target = $(target),
				self = this,
				inst = self._newInst($target);
			
			$.extend(inst.settings, self._defaults, settings);
			
			var obj = {};
			if (inst.settings.focused > 0) {
				inst.index = inst.settings.focused;
			}
			switch (inst.settings.orientation) {
				case 'horizontal':
					obj.height = inst.settings.height;
					obj.width = $(inst.settings.selectorItem, inst.box).length * inst.settings.width;
					if (inst.settings.focused > 0) {
						obj.left = -inst.settings.focused * inst.settings.width;
					}
					break;
				case 'vertical':
					obj.height = $(inst.settings.selectorItem, inst.box).length * inst.settings.height;
					obj.width = inst.settings.width;
					if (inst.settings.focused > 0) {
						obj.top = -inst.settings.focused * inst.settings.height;
					}
					break;
			}
			inst.box.css(obj);
			inst.container.css({
				width: inst.settings.width,
				height: inst.settings.height
			})
			inst.nav.removeClass(inst.settings.classNavFocus);
			inst.nav.eq(inst.index).addClass(inst.settings.classNavFocus);

			inst.nav.bind("click", function (e) {
				if (e && e.preventDefault) {
					e.preventDefault();
				}
				self._gotoSlider(target, inst.nav.index(this));
				return FALSE;
			});
			inst.container.bind("mouseenter", function () {
				$(inst.settings.selectorArrow, inst.container).show();
			}).bind("mouseleave", function () {
				$(inst.settings.selectorArrow, inst.container).hide();
			}).delegate(inst.settings.selectorPrev, "click", function (e) {
				if (e && e.preventDefault) {
					e.preventDefault();
				}
				self._prevSlider(target);
				return FALSE;
			}).delegate(inst.settings.selectorNext, "click", function (e) {
				if (e && e.preventDefault) {
					e.preventDefault();
				}
				self._nextSlider(target);
				return FALSE;
			}).delegate(inst.settings.selectorPlay, "click", function (e) {
				if (e && e.preventDefault) {
					e.preventDefault();
				}
				self._playSlider(target);
				return FALSE;
			}).delegate(inst.settings.selectorStop, "click", function (e) {
				if (e && e.preventDefault) {
					e.preventDefault();
				}
				self._stopSlider(target);
				return FALSE;
			});
			$.data(target, PROP_NAME, inst);
			if (inst.settings.autoPlay) {
				self._playSlider(target);
			}
		},
		_playSlider: function (target) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			var self = this;
			inst.intervalID = window.setInterval(function () {
				self._nextSlider(target);
				if (inst.settings.stopOnEnd && inst.index === 0) {
					self._stopSlider(target);
				}
			}, inst.settings.interval);
			$.data(target, PROP_NAME, inst);
		},
		_stopSlider: function (target) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			window.clearInterval(inst.intervalID);
			$.data(target, PROP_NAME, inst);
		},
		_animate: function (target, inst, o) {
			var onStart = this._get(inst, 'onStart'),
				onEnd = this._get(inst, 'onEnd'),
				onFirst = this._get(inst, 'onFirst'),
				onLast = this._get(inst, 'onLast');
			if (onStart) {
				onStart.apply(null, [inst]);
			}
			inst.box.animate(o.params, inst.settings.speed, inst.settings.easing, function () {
				if (onEnd) {
					onEnd.apply(null, [inst]);
				}
				if (onFirst && o.index === 0) {
					onFirst.apply(null, [inst]);
				}
				if (onLast && o.index === inst.slides.length - 1) {
					onLast.apply(null, [inst]);
				}
			});
			inst.index = o.index;
			inst.nav.removeClass(inst.settings.classNavFocus);
			inst.nav.eq(inst.index).addClass(inst.settings.classNavFocus);
			$.data(target, PROP_NAME, inst);
		},
		_firstSlider: function (target) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			var o = {};
			switch (inst.settings.orientation) {
				case 'horizontal':
					o.left = "0px";
					break;
				case 'vertical':
					o.top = "0px";
					break;
			}
			this._animate(target, inst, {
				params: o,
				index: 0
			});
		},
		_lastSlider: function (target) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			var o = {};
			switch (inst.settings.orientation) {
				case 'horizontal':
					o.left = "-" + (inst.box.width() - inst.settings.width) + "px";
					break;
				case 'vertical':
					o.top = "-" + (inst.box.height() - inst.settings.height) + "px";
					break;
			}
			this._animate(target, inst, {
				params: o,
				index: inst.slides.length - 1
			});
		},
		_prevSlider: function (target) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			var position = inst.box.position(),
				notFirst = false;
				
			switch (inst.settings.orientation) {
				case 'horizontal':
					notFirst = position.left != 0 && -inst.index * inst.settings.width < 0;
					break;
				case 'vertical':
					notFirst = position.top != 0 && -inst.index * inst.settings.height < 0;
					break;
			}
			
			if (notFirst) {
				var o = {};
				switch (inst.settings.orientation) {
					case 'horizontal':
						o.left = "+=" + inst.settings.width + "px";
						break;
					case 'vertical':
						o.top = "+=" + inst.settings.height + "px";
						break;
				}
				this._animate(target, inst, {
					params: o,
					index: inst.index - 1
				});
			} else {
				this._lastSlider(target);
			}
		},
		_nextSlider: function (target) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			var position = inst.box.position(),
				width, height,
				notLast = false;
				
			switch (inst.settings.orientation) {
				case 'horizontal':
					width = inst.box.width();
					notLast = -position.left != width - inst.settings.width && (inst.index + 1) * inst.settings.width < width;
					break;
				case 'vertical':
					height = inst.box.height();
					notLast = -position.top != height - inst.settings.height && (inst.index + 1) * inst.settings.height < height;
					break;
			}
			if (notLast) {
				var o = {};
				switch (inst.settings.orientation) {
					case 'horizontal':
						o.left = "-=" + inst.settings.width + "px";
						break;
					case 'vertical':
						o.top = "-=" + inst.settings.height + "px";
						break;
				}
				this._animate(target, inst, {
					params: o,
					index: inst.index + 1
				});
			} else {
				this._firstSlider(target);
			}
		},
		_gotoSlider: function (target, index) {
			var inst = this._getInst(target);
			if (!inst) {
				return;
			}
			var o = {};
			switch (inst.settings.orientation) {
				case 'horizontal':
					o.left = "-" + (index * inst.settings.width) + "px";
					break;
				case 'vertical':
					o.top = "-" + (index * inst.settings.height) + "px";
					break;
			}
			this._animate(target, inst, {
				params: o,
				index: index
			});
		},
		_newInst: function(target) {
			var id = target[0].id.replace(/([^A-Za-z0-9_-])/g, '\\\\$1');
			return {
				id: id, 
				container: target,
				box: target.find(".slider-box"), 
				slides: target.find(".slider-box .slider-item"),
				nav: target.find(".slider-nav a"),
				uid: Math.floor(Math.random() * 99999999),
				index: 0,
				intervalID: null,
				settings: {
					classNavFocus: "slider-nav-focus",
					selectorItem: ".slider-item",
					selectorArrow: ".slider-arrow",
					selectorPrev: ".slider-prev, .slider-up",
					selectorNext: ".slider-next, .slider-down",
					selectorPlay: ".slider-play",
					selectorStop: ".slider-stop"
				}
			}; 
		},
		_getInst: function(target) {
			try {
				return $.data(target, PROP_NAME);
			}
			catch (err) {
				throw 'Missing instance data for this slider';
			}
		},
		_get: function(inst, name) {
			return inst.settings[name] !== undefined ? inst.settings[name] : this._defaults[name];
		}
	});
	
	$.fn.slider = function (options) {
		
		var otherArgs = Array.prototype.slice.call(arguments, 1);
		if (typeof options == 'string' && options == 'isDisabled') {
			return $.slider['_' + options + 'Slider'].apply($.slider, [this[0]].concat(otherArgs));
		}
		
		if (options == 'option' && arguments.length == 2 && typeof arguments[1] == 'string') {
			return $.slider['_' + options + 'Slider'].apply($.slider, [this[0]].concat(otherArgs));
		}
		
		return this.each(function() {
			typeof options == 'string' ?
				$.slider['_' + options + 'Slider'].apply($.slider, [this].concat(otherArgs)) :
				$.slider._attachSlider(this, options);
		});
	};

	$.slider = new Slider();
	$.slider.version = "1.0.1";
})(jQuery);