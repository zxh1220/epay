(function(a) {
	function d() {
		if (a(".header_aria").length) {
			a(window).scroll(function() {
				var e = a(window).scrollTop();
				if (e) {
					a(".header_aria").addClass("navbar_fixed")
				} else {
					a(".header_aria").removeClass("navbar_fixed")
				}
			})
		}
	}
	d();
	new WOW().init();

	function c() {
		if (a(window).width() < 992) {
			a(".navbar-nav > li .mobile_dropdown_icon").on("click", function(e) {
				e.preventDefault();
				a(this).parent().find(".dropdown-menu").first().slideToggle(700);
				a(this).parent().siblings().find(".dropdown-menu").slideUp(700)
			})
		}
	}
	c();
	a(".logo_slider").slick({
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		loop: true,
		slidesToShow: 5,
		dots: false,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
			},
		}, ],
	});
	a(".slider_aria").slick({
		prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
		arrows: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		loop: true,
		slidesToShow: 4,
		dots: false,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
			},
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
			},
		}, ],
	});
	a(".grid_items_aria").slick({
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		loop: true,
		slidesToShow: 1,
		dots: false,
	});

	function b() {
		if (a(".counter").length) {
			a(".counter").counterUp({
				delay: 1,
				time: 500,
			})
		}
	}
	b();
	a(".single_items").each(function() {
		a(this).waypoint(function() {
			var e = a(".progress-bar");
			e.each(function(f) {
				a(this).css("width", a(this).attr("aria-valuenow") + "%")
			})
		}, {
			triggerOnce: true,
			offset: "bottom-in-view",
		})
	});
	a(document).ready(function() {
		a(".play_btn,.popup-youtube").magnificPopup({
			type: "iframe",
		})
	});
	a(function() {
		a(".chart").easyPieChart({
			size: 160,
			barColor: "#AA46BD",
			scaleLength: 0,
			lineWidth: 4,
			trackColor: "#E6E6E7",
			lineCap: "circle",
			animate: 2000,
		});
		a(".chart2").easyPieChart({
			size: 160,
			barColor: "#F37514",
			scaleLength: 0,
			lineWidth: 4,
			trackColor: "#E6E6E7",
			lineCap: "circle",
			animate: 2000,
		});
		a(".chart3").easyPieChart({
			size: 160,
			barColor: "#0DAA5E",
			scaleLength: 0,
			lineWidth: 4,
			trackColor: "#E6E6E7",
			lineCap: "circle",
			animate: 2000,
		})
	});
	if (a("select").length) {
		a("select").niceSelect()
	}
	a(".search a").on("click", function() {
		if (a(this).parent().hasClass("open")) {
			a(this).parent().removeClass("open")
		} else {
			a(this).parent().addClass("open")
		}
		return false
	})
})(jQuery);
