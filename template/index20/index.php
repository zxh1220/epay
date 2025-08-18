<!DOCTYPE html>
<!-- saved from url=(0029)/#pricing -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/favicon.ico">

    <link rel="stylesheet" href="/template/index20/new/assets/newindex/bootstrap.min.css">
    <link rel="stylesheet" href="/template/index20/new/assets/newindex/all.min.css">
    <link rel="stylesheet" href="/template/index20/new/assets/newindex/swiper.min.css">

    <script src="/template/index20/new/assets/newindex/jquery.slim.min.js"></script>
    <script src="/template/index20/new/assets/newindex/popper.min.js"></script>
    <script src="/template/index20/new/assets/newindex/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/template/index20/new/assets/newindex/style.css">
    <link rel="stylesheet" href="/template/index20/new/assets/newindex/bootstrap.min(1).css">
    <link rel="stylesheet" href="/template/index20/new/assets/newindex/materialdesignicons.min.css">

    <title><?=$conf['sitename']?></title>
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top nav-sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="/Core/Assets/Img/logo.png">
                <h2 class="logo-dark"><i class="fa fa-globe"></i>&nbsp;<?=$conf['sitename']?></h2>
                <h2 class="logo-light" style="color:#dee2e6;font-weight: 400;"><i class="fa fa-globe"></i>&nbsp;<?=$conf['sitename']?></h2>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item"><a href="#home" class="nav-link active">首页</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">服务</a></li>
                    <li class="nav-item"><a href="#features" class="nav-link">特性</a></li>
                    <li class="nav-item"><a href="/user/test.php" class="nav-link">测试</a></li>
                </ul>
                                <a href="./user/" class="btn btn-sm rounded-pill nav-btn ms-lg-3"><i class="fas fa-sign-in-alt"></i> 登录</a>
                            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero-1 bg-center bg-primary position-relative" style="background-image: url(/template/index20/new/assets//newindex/hero-g-bg.png);" id="home">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-5">
                    <h1 class="text-white display-4 font-weight-bold mb-4 hero-1-title"><?=$conf['sitename']?>-免签支付平台</h1>
                    <p class="text-white-70 mb-4"> <?=$conf['sitename']?>,以信誉求市场,以稳定求发展，行业内最安全，简单易用，专业的技术团队，最放心的免签约支付平台。费率低至0.5％、会员费率更低！！；</p>
                    <a class="btn btn-lg btn-light rounded-pill mb-2" href="./user/reg.php"><strong>开始使用</strong> <i class="fa fa-plane" aria-hidden="true"></i></a>
                </div>

                <div id="carouselExampleIndicators" class="col-lg-6 col-sm-12 mx-auto ms-lg-auto me-lg-0 carousel slide pointer-event" data-ride="carousel">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
                        <!--<div class="swiper-wrapper" style="transform: translate3d(-2544px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 636px;"><img src="/template/new/assets/newindex/banner-hulu-333.png" class="d-block w-100"></div>-->
                            
                            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 636px;"><img src="/template/index20/new/assets/newindex/banner-hbo-1111.png" class="d-block w-100">
                                <p></p>
                            </div>
                            <!--<div class="swiper-slide" data-swiper-slide-index="1" style="width: 636px;"><img src="/template/new/assets/newindex/banner-netflix-1.png" class="d-block w-100">-->
                            <!--    <p></p>-->
                            <!--</div>-->
                            <!--<div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 636px;"><img src="/template/new/assets/newindex/banner-hulu-3.png" class="d-block w-100"></div>-->
                            
                        <!--<div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 636px;"><img src="/template/new/assets/newindex/banner-hbo-1111.png" class="d-block w-100">-->
                                <p></p>
                            </div></div>
                        <div class="swiper-pagination"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="hero-bottom-shape">
            <img src="/template/index20/new/assets/newindex/hero-1-bottom-shape.png" alt="" class="img-fluid d-block mx-auto">
        </div>
        <!-- end hero shape -->
    </section>
    <!-- Hero End -->


    <!-- Services start -->
    <section class="section" id="services" tabindex="-1" style="outline: none;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">为什么选择我们?</h2>
                    <p class="text-muted">提供多种支付接入方式，方便，简单，快捷，快速集成到，效率高，见效快，费率低。支持全球三大主流结算币种，多元化产品为你提供一站式支付服务。无假期，无账期，365天随时随地提现。</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box text-primary">-->
                                <!--    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>-->
                                <!--    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>-->
                                <!--    <line x1="12" y1="22.08" x2="12" y2="12"></line>-->
                                <!--</svg>-->
                                 <img src="https://codepay.ddmzf.cn/template/ddcode/assets/template/includes/img_15.png" alt="" class="img-fluid d-block mx-auto">
                            </div>
                            <h4 class="mb-3 font-size-22">支付宝免挂</h4>
                            <p class="text-muted mb-0"><?=$conf['sitename']?>提升收银效率、降低收银成本。便捷的界面操作性，高效稳定的技术支持，一站式数据财务管理。</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers text-primary">-->
                                <!--    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>-->
                                <!--    <polyline points="2 17 12 22 22 17"></polyline>-->
                                <!--    <polyline points="2 12 12 17 22 12"></polyline>-->
                                <!--</svg>-->
                                <img src="/template/index20/assets/template/includes/img_16.png" alt="" class="img-fluid d-block mx-auto">
                            </div>
                            <h4 class="mb-3 font-size-22 text-white-90">微信免挂</h4>
                            <p class="text-white mb-0 text-white-90">平台已实现支付宝、微信免输入金额，实时秒回调，无需繁琐的软件挂机等操作.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server text-primary">-->
                                <!--    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>-->
                                <!--    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>-->
                                <!--    <line x1="6" y1="6" x2="6.01" y2="6"></line>-->
                                <!--    <line x1="6" y1="18" x2="6.01" y2="18"></line>-->
                                <!--</svg>-->
                                <img src="/template/index20/assets/template/includes/img_17.png" alt="" class="img-fluid d-block mx-auto">
                            </div>
                            <h4 class="mb-3 font-size-22">QQ钱包免挂</h4>
                            <p class="text-muted mb-0">您的网站可以通过<?=$conf['sitename']?>免签约个人支付、免软件挂机服务、免输入金额、实时监控秒回调。。</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    </section>
    <!-- Services end -->

    <!-- Features start -->
    <section class="section bg-light" id="features" tabindex="-1" style="outline: none;">
        <div class="container">
        <div class="row align-items-center mb-5">
                <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
                    <!--<span class="badge badge-pill badge-primary mb-4">聚合钱包，融合支付</span>-->
                    <h2 class="mb-4">长期稳定支付通道</h2>
                    <p class="text-muted mb-5"><?=$conf['sitename']?>易支付·通过简单的页面配置，可以替代复杂繁琐的人工资金结算业务，提高业务实时性，降低错误。</p>
                    <a href="./user/reg.php" class="btn btn-primary">立即接入<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right icon-xs ms-2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
                <div class="col-md-6 ms-md-auto order-1 order-md-2">
                    <div class="position-relative">
                        <div class="ms-5 features-img">
                            <!--<video width="100%" height="auto" controls="">-->
  <!--<source poster="&lt;img src=&#39;https://pan.kuaiyin.vip/kuaiyin_video.png&#39; /&gt;" src="https://pan.kuaiyin.vip/kuaiyin.mp4#t=0.5" type="video/mp4">-->
  <!--您的浏览器不支持 HTML5 video 标签。-->
<!--</video>-->
                            <img src="/template/index20/new/assets/newindex/td2.png" alt="" class="img-fluid d-block mx-auto">
                        </div>
                        <img src="/template/index20/new/assets/newindex/dot-img.png" alt="" class="dot-img-left">
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
                    <!--<span class="badge badge-pill badge-primary mb-4">资金实时到账</span>-->
                    <h2 class="mb-4">高效实时监控订单。</h2>
                    <p class="text-muted mb-5">一次轻松接入所有支付（QQ钱包，支付宝，微信），省时省心省力， 结算费率低，对接费率超低，比其它平台更便宜.全天监视订单 和资金安全，正规支付接口！。</p>
                    <a href="/User/Login.php" class="btn btn-primary">立即接入 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right icon-xs ms-2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
                <div class="col-md-6 ms-md-auto order-1 order-md-2">
                    <div class="position-relative">
                        <div class="ms-5 features-img">
                            <img src="/template/index20/new/assets/newindex/jh.png" alt="" class="img-fluid d-block mx-auto">
                        </div>
                        <img src="/template/index20/new/assets/newindex/dot-img.png" alt="" class="dot-img-left">
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row align-items-center section pb-0">
                <div class="col-md-6">
                    <div class="position-relative mb-md-0 mb-5">
                        <div class="me-5 features-img">
                            <img src="/template/index20/new/assets/newindex/zf.png" alt="" class="img-fluid d-block mx-auto rounded shadow">
                        </div>
                        <img src="/template/index20/new/assets/newindex/dot-img.png" alt="" class="dot-img-right">
                    </div>
                </div>
                <div class="col-md-5 ms-md-auto">
                    <!--<span class="badge badge-pill badge-primary mb-4">UNBLOCK STREAMING MEDIA</span>-->
                    <h2 class="mb-4">资金实时到账</h2>
                    <p class="text-muted mb-5">我们提供7X24小时在线服务，对日交易高额用户提供贵宾服务！用最具影响力品牌协助，并全力协助新兴品牌，我们以设计助力众多品牌走向行业领先地位，鼎力相助每一个梦想。</p>
                    <a href="./user/reg.php" class="btn btn-primary">立即接入 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right icon-xs ms-2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Features end -->

    <!-- Ticket start -->
    <section class="section bg-gradient-primary">
        <div class="bg-overlay-img" ></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h1 class="text-white mb-4">客户支持</h1>
                        <p class="text-white mb-5 font-size-16">
                            有任何关于会员计划的疑问？联系我们的售前咨询小组，马上为您解答。我们将在您的订阅周期内为您提供一定程度上的技术支持。</p>
                        <a href="https://wpa.qq.com/msgrd?v=3&uin=1931135643&site=qq&menu=yes" class="btn btn-lg btn-light fw-bold">联系我们</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Ticket end -->

 

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="bg-overlay-img">
                </div>
                <div class="col-lg-5">
                    <div class="mb-4">
                        <a href="/#"><h2 class="logo-dark"><i class="fa fa-globe"></i>&nbsp;<?=$conf['sitename']?></h2></a>
                        <p class="text-white-50 mt-4 mb-1" style="font-size: 1rem;line-height: 1.6rem;">
                            我们趋行在人生这个亘古的旅途，在坎坷中奔跑，在挫折里涅槃，忧愁缠满全身，痛苦飘洒一地。我们累，却无从止歇；我们苦，却无法回避。</p>
                        <!--<p style="font-size: 0.8rem;line-height: 1.2rem;">We dedicate to providing the finest network-->
                        <!--    proxy-->
                        <!--    service, Make you never feel a thing of the existence of the GFW again; We made easy for any-->
                        <!--    internet service subscriber to use our service.</p>-->
                        <p class="text-white-50 mb-0" style="font-size: 0.8rem!important;">
                            Powered © by
                            <a href="/" target="_blank" data-bs-original-title="" title=""><?=$conf['sitename']?></a>
                        
                            <a href="https://beian.miit.gov.cn/" target="_blank" data-bs-original-title="" title=""><?=$conf['icpgov']?></a>
                        </p>
                    </div>
                </div>
                
                <!-- end col -->

                <div class="col-lg-7 d-none d-sm-none d-md-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-3 col-6"></div>
                        <div class="col-lg-3 col-6"></div>
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3 text-end">首页</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li class="text-end">
                                        <a href="./user/reg.php" class="footer-link">商户注册</a></li>
                                    <li class="text-end">
                                        <a href="./doc.html" class="footer-link">对接文档</a>
                                    </li>
                                    <li class="text-end">
                                        <a href="/user/test.php" class="footer-link">支付测试</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3 text-end">支持</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li class="text-end">
                                        <a href="https://wpa.qq.com/msgrd?v=3&uin=1931135643&site=qq&menu=yes" class="footer-link">联系我们</a>
                                    </li>
                                    <li class="text-end">
                                        <a href="./agreement.html" class="footer-link">服务条款</a>
                                    </li>
                                    <li class="text-end">
                                        <a href="#" class="footer-link">官方网站</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
<p class="text-white mb-0"><?php echo $conf['footer']?></p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer End -->

    <!-- javascript -->
    <script src="/template/index20/new/assets/newindex/bootstrap.bundle.min.js"></script>
    <script src="/template/index20/new/assets/newindex/smooth-scroll.polyfills.min.js"></script>

    <!-- App Js -->
    <script src="/template/index20/new/assets/newindex/feather-icons"></script>
    <script src="/template/index20/new/assets/newindex/app.js"></script>

    <!--End mc_embed_signup-->
    <script src="/template/index20/new/assets/newindex/swiper.min.js"></script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
        })
    </script>
</body></html>