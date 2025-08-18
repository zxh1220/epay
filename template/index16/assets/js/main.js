(function (a) {
    jQuery(document).on("ready", function () {
        a(window).on("scroll", function () {
            if (a(this).scrollTop() > 120) {
                a(".navbar-area").addClass("is-sticky")
            } else {
                a(".navbar-area").removeClass("is-sticky")
            }
        });
        jQuery(".mean-menu").meanmenu({meanScreenWidth: "991"});
        a(function () {
            a(".default-btn").on("mouseenter", function (g) {
                var h = a(this).offset(), i = g.pageX - h.left, j = g.pageY - h.top;
                a(this).find("span").css({top: j, left: i})
            }).on("mouseout", function (g) {
                var h = a(this).offset(), i = g.pageX - h.left, j = g.pageY - h.top;
                a(this).find("span").css({top: j, left: i})
            })
        });
        a(".odometer").appear(function (g) {
            var h = a(".odometer");
            h.each(function () {
                var i = a(this).attr("data-count");
                a(this).html(i)
            })
        });
        (function (g) {
            g(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
            g(".tab ul.tabs li a").on("click", function (h) {
                var j = g(this).closest(".tab"), i = g(this).closest("li").index();
                j.find("ul.tabs > li").removeClass("current");
                g(this).closest("li").addClass("current");
                j.find(".tab_content").find("div.tabs_item").not("div.tabs_item:eq(" + i + ")").slideUp();
                j.find(".tab_content").find("div.tabs_item:eq(" + i + ")").slideDown();
                h.preventDefault()
            })
        })(jQuery);
        a(".popup-youtube").magnificPopup({
            disableOn: 320,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        a(".testimonial-slider").owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            autoplayHoverPause: true,
            autoplay: true,
            smartSpeed: 1000,
            margin: 20,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {0: {items: 1,}, 768: {items: 2,}, 1200: {items: 1,}}
        });
        a(".partner-slider").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            autoplay: true,
            margin: 30,
            navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-right-chevron'></i>"],
            responsive: {0: {items: 2,}, 576: {items: 3,}, 768: {items: 4,}, 1200: {items: 5,}}
        });
        a("select").niceSelect();
        a(".input-counter").each(function () {
            var l = jQuery(this), i = l.find('input[type="text"]'), h = l.find(".plus-btn"), g = l.find(".minus-btn"),
                k = i.attr("min"), j = i.attr("max");
            h.on("click", function () {
                var n = parseFloat(i.val());
                if (n >= j) {
                    var m = n
                } else {
                    var m = n + 1
                }
                l.find("input").val(m);
                l.find("input").trigger("change")
            });
            g.on("click", function () {
                var n = parseFloat(i.val());
                if (n <= k) {
                    var m = n
                } else {
                    var m = n - 1
                }
                l.find("input").val(m);
                l.find("input").trigger("change")
            })
        });
        a(function () {
            a(".accordion").find(".accordion-title").on("click", function () {
                a(this).toggleClass("active");
                a(this).next().slideToggle("fast");
                a(".accordion-content").not(a(this).next()).slideUp("fast");
                a(".accordion-title").not(a(this)).removeClass("active")
            })
        });
        a(".image-sliders").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplay: true,
            smartSpeed: 1000,
            margin: 20,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {0: {items: 1,}, 768: {items: 1,}, 1200: {items: 1,}}
        });
        a(".newsletter-form").validator().on("submit", function (g) {
            if (g.isDefaultPrevented()) {
                c();
                f(false, "Please enter your email correctly.")
            } else {
                g.preventDefault()
            }
        });

        function b (g) {
            if (g.result === "success") {
                d()
            } else {
                c()
            }
        }

        function d () {
            a(".newsletter-form")[0].reset();
            f(true, "Thank you for subscribing!");
            setTimeout(function () {
                a("#validator-newsletter").addClass("hide")
            }, 4000)
        }

        function c () {
            a(".newsletter-form").addClass("animated shake");
            setTimeout(function () {
                a(".newsletter-form").removeClass("animated shake")
            }, 1000)
        }

        function f (i, g) {
            if (i) {
                var h = "validation-success"
            } else {
                var h = "validation-danger"
            }
            a("#validator-newsletter").removeClass().addClass(h).text(g)
        }

        a(function () {
            a(window).on("scroll", function () {
                var g = a(window).scrollTop();
                if (g > 600) {
                    a(".go-top").addClass("active")
                }
                if (g < 600) {
                    a(".go-top").removeClass("active")
                }
            });
            a(".go-top").on("click", function () {
                a("html, body").animate({scrollTop: "0"}, 500)
            })
            a(".nav-item a").click(function (e) {
                e.preventDefault();
                var href = $(this).attr('href');
                if(href.indexOf('#') === 0) {
                    $('html, body').animate({
                        'scrollTop': a(href).offset().top
                    }, 500);
                    return;
                }
                if (href === '/') {
                    a(".go-top").click();
                    return;
                }

                window.location.href = href;
            })
        });

        function e () {
            var h = new Date("September 30, 2020 17:00:00 PDT");
            var h = (Date.parse(h)) / 1000;
            var k = new Date();
            var k = (Date.parse(k) / 1000);
            var m = h - k;
            var g = Math.floor(m / 86400);
            var i = Math.floor((m - (g * 86400)) / 3600);
            var j = Math.floor((m - (g * 86400) - (i * 3600)) / 60);
            var l = Math.floor((m - (g * 86400) - (i * 3600) - (j * 60)));
            if (i < "10") {
                i = "0" + i
            }
            if (j < "10") {
                j = "0" + j
            }
            if (l < "10") {
                l = "0" + l
            }
            a("#days").html(g + "<span>Days</span>");
            a("#hours").html(i + "<span>Hours</span>");
            a("#minutes").html(j + "<span>Minutes</span>");
            a("#seconds").html(l + "<span>Seconds</span>")
        }

        setInterval(function () {
            e()
        }, 1000)
    });
    a(window).on("load", function () {
        if (a(".wow").length) {
            var b = new WOW({boxClass: "wow", animateClass: "animated", offset: 20, mobile: true, live: true,});
            b.init()
        }
    });
    a(window).on("load", function () {
        a(".preloader").addClass("preloader-deactivate")
    })
}(jQuery));
