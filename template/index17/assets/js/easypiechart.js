! function(c, d) {
	"object" == typeof exports ? module.exports = d(require("jquery")) : "function" == typeof define && define.amd ?
		define(["jquery"], d) : d(c.jQuery)
}(this, function(d) {
	var e = function(l, m) {
			var n, o = document.createElement("canvas");
			l.appendChild(o), "undefined" != typeof G_vmlCanvasManager && G_vmlCanvasManager.initElement(o);
			var p = o.getContext("2d");
			o.width = o.height = m.size;
			var q = 1;
			window.devicePixelRatio > 1 && (q = window.devicePixelRatio, o.style.width = o.style.height = [m.size,
					"px"
				].join(""), o.width = o.height = m.size * q, p.scale(q, q)), p.translate(m.size / 2, m.size / 2), p
				.rotate((-0.5 + m.rotate / 180) * Math.PI);
			var r = (m.size - m.lineWidth) / 2;
			m.scaleColor && m.scaleLength && (r -= m.scaleLength + 2), Date.now = Date.now || function() {
				return +new Date
			};
			var s = function(g, h, i) {
					i = Math.min(Math.max(-1, i || 0), 1);
					var j = 0 >= i ? !0 : !1;
					p.beginPath(), p.arc(0, 0, r, 0, 2 * Math.PI * i, j), p.strokeStyle = g, p.lineWidth = h, p
						.stroke()
				},
				t = function() {
					var b, g;
					p.lineWidth = 1, p.fillStyle = m.scaleColor, p.save();
					for (var h = 24; h > 0; --h) {
						h % 6 === 0 ? (g = m.scaleLength, b = 0) : (g = 0.6 * m.scaleLength, b = m.scaleLength - g),
							p.fillRect(-m.size / 2 + b, 0, g, 1), p.rotate(Math.PI / 12)
					}
					p.restore()
				},
				u = function() {
					return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window
						.mozRequestAnimationFrame || function(b) {
							window.setTimeout(b, 1000 / 60)
						}
				}(),
				v = function() {
					m.scaleColor && t(), m.trackColor && s(m.trackColor, m.trackWidth || m.lineWidth, 1)
				};
			this.getCanvas = function() {
				return o
			}, this.getCtx = function() {
				return p
			}, this.clear = function() {
				p.clearRect(m.size / -2, m.size / -2, m.size, m.size)
			}, this.draw = function(b) {
				m.scaleColor || m.trackColor ? p.getImageData && p.putImageData ? n ? p.putImageData(n, 0, 0) :
					(v(), n = p.getImageData(0, 0, m.size * q, m.size * q)) : (this.clear(), v()) : this
				.clear(), p.lineCap = m.lineCap;
				var c;
				c = "function" == typeof m.barColor ? m.barColor(b) : m.barColor, s(c, m.lineWidth, b / 100)
			}.bind(this), this.animate = function(b, g) {
				var h = Date.now();
				m.onStart(b, g);
				var i = function() {
					var a = Math.min(Date.now() - h, m.animate.duration),
						c = m.easing(this, a, b, g - b, m.animate.duration);
					this.draw(c), m.onStep(b, g, c), a >= m.animate.duration ? m.onStop(b, g) : u(i)
				}.bind(this);
				u(i)
			}.bind(this)
		},
		f = function(b, h) {
			var i = {
				barColor: "#ef1e25",
				trackColor: "#f9f9f9",
				scaleColor: "#dfe0e0",
				scaleLength: 5,
				lineCap: "round",
				lineWidth: 3,
				trackWidth: void 0,
				size: 110,
				rotate: 0,
				animate: {
					duration: 1000,
					enabled: !0
				},
				easing: function(g, m, n, o, p) {
					return m /= p / 2, 1 > m ? o / 2 * m * m + n : -o / 2 * (--m * (m - 2) - 1) + n
				},
				onStart: function() {},
				onStep: function() {},
				onStop: function() {}
			};
			if ("undefined" != typeof e) {
				i.renderer = e
			} else {
				if ("undefined" == typeof SVGRenderer) {
					throw new Error("Please load either the SVG- or the CanvasRenderer")
				}
				i.renderer = SVGRenderer
			}
			var j = {},
				k = 0,
				l = function() {
					this.el = b, this.options = j;
					for (var a in i) {
						i.hasOwnProperty(a) && (j[a] = h && "undefined" != typeof h[a] ? h[a] : i[a], "function" ==
							typeof j[a] && (j[a] = j[a].bind(this)))
					}
					j.easing = "string" == typeof j.easing && "undefined" != typeof jQuery && jQuery.isFunction(
							jQuery.easing[j.easing]) ? jQuery.easing[j.easing] : i.easing, "number" == typeof j
						.animate && (j.animate = {
							duration: j.animate,
							enabled: !0
						}), "boolean" != typeof j.animate || j.animate || (j.animate = {
							duration: 1000,
							enabled: j.animate
						}), this.renderer = new j.renderer(b, j), this.renderer.draw(k), b.dataset && b.dataset
						.percent ? this.update(parseFloat(b.dataset.percent)) : b.getAttribute && b.getAttribute(
							"data-percent") && this.update(parseFloat(b.getAttribute("data-percent")))
				}.bind(this);
			this.update = function(c) {
				return c = parseFloat(c), j.animate.enabled ? this.renderer.animate(k, c) : this.renderer.draw(
					c), k = c, this
			}.bind(this), this.disableAnimation = function() {
				return j.animate.enabled = !1, this
			}, this.enableAnimation = function() {
				return j.animate.enabled = !0, this
			}, l()
		};
	d.fn.easyPieChart = function(a) {
		return this.each(function() {
			var b;
			d.data(this, "easyPieChart") || (b = d.extend({}, a, d(this).data()), d.data(this,
				"easyPieChart", new f(this, b)))
		})
	}
});
