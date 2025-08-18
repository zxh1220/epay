<!--///////////////////////////////////////////////////////////
//                         _ooOoo_                           //
//                        o8888888o                          //
//                        88" . "88                          //
//                        (| ^_^ |)                          //
//                        O\  =  /O                          //
//                     ____/`---'\____                       //
//                   .'  \\|     |//  `.                     //
//                  /  \\|||  :  |||//  \                    //
//                 /  _||||| -:- |||||-  \                   //
//                 |   | \\\  -  /// |   |                   //
//                 | \_|  ''\---/''  |   |                   //
//                 \  .-\__  `-`  ___/-. /                   //
//               ___`. .'  /--.--\  `. . ___                 //
//             ."" '<  `.___\_<|>_/___.'  >'"".              //
//           | | :  `- \`.;`\ _ /`;.`/ - ` : | |             //
//           \  \ `-.   \_ __\ /__ _/   .-` /  /             //
//     ========`-.____`-.___\_____/___.-`____.-'========     //
//                          `=---='                          //
//     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^     //
//          佛祖保佑         永无BUG         永不修改        //
///////////////////////////////////////////////////////////////-->

<!DOCTYPE html><html class="no-js" lang="zxx"><head><meta charset="utf-8">
    

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $conf['sitename']?>-<?php echo $conf['title']?> </title>
    <meta name="keywords" content="<?php echo $conf['keywords']?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/meanmenu.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/animate.min.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/backToTop.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/style.css">
    <link rel="stylesheet" href="<?=STATIC_ROOT?>css/layui.css">
    <script src="<?=STATIC_ROOT?>js/layui.js"></script>
</head>

<body>

    <!-- header area start -->
    <header>
        <div id="header-sticky" class="header__area header__transparent header__padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a href="/">
                                <img style="width: 150px;height: 64px;" src="assets/img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">首页</a></li>
                                    <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" target="_blank">加盟合作</a></li>
                                    
                                    <?php 
                                    	if ($conf['test_open']== 1) {
                                    	    
                                    	    ?>
                                    <li><a href="/user/test.php">支付测试</a></li>
                                    
                                    <?php
                                    	} else{
    
                                       }
                                    ?>
                                    <li><a href="./doc.html" target="_blank">开发文档</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                        <div class="header__right text-end d-flex align-items-center justify-content-end">
                            <div class="header__right-btn d-none d-md-flex align-items-center">
                                <a href="/user/" class="w-btn-round mr-25 wow fadeInUp">商户中心</a>
                                <a href="./user/reg.php" class="w-btn-round mr-25 wow fadeInUp">商户注册</a>
                            </div>
                            <div class="sidebar__menu d-lg-none">
                                <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- sidebar area start -->
    <div class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>关闭</span>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="logo mb-40">
                    <a href="/">
                        <img style="width: 33px;height: 33px;" src="/Core/Assets/Img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu"></div>
                <div class="sidebar__info mt-350">
                    <a href="/user" class="w-btn w-btn-4 d-block mb-15 mt-15">商户登录</a>
                    <a href="./user/reg.php" class="w-btn d-block">商户注册</a>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->

    <main>

        <!-- hero area start -->
        <section class="hero__area hero__height-4 grey-bg-9 p-relative d-flex align-items-center">
            <div class="hero__shape-4">
                <img class="smile" src="<?=STATIC_ROOT?>img/smile.png" alt="">
                <img class="smile-2" src="<?=STATIC_ROOT?>img/smile-2.png" alt="">
                <img class="cross-1" src="<?=STATIC_ROOT?>img/cross-1.png" alt="">
                <img class="cross-2" src="<?=STATIC_ROOT?>img/cross-2.png" alt="">
                <img class="cross-3" src="<?=STATIC_ROOT?>img/cross-3.png" alt="">
                <img class="dot-2" src="<?=STATIC_ROOT?>img/dot-2.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-6">
                        <div class="hero__content-4 pr-70">
                            <h3 class="hero__title-4 wow fadeInUp" data-wow-delay=".3s"> <span><?php echo $conf['sitename']?></span> </h3>
                            <p class="wow fadeInUp" data-wow-delay=".5s">即时到账 极速支付 覆盖所有的支付项目，专注于小微商户收款及技术服务支持提供，T+0、秒到自己账户无风险!</p>


                            <div class="hero__btn-4">
                                <a href="/user/" class="w-btn-round mr-25 wow fadeInUp" data-wow-delay=".9s">商户中心</a>
                                <a href="./user/reg.php" class="w-btn-round w-btn-round-2 wow fadeInUp" data-wow-delay="1.2s">商户注册</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="hero__thumb-4-wrapper">
                            <div class="hero__thumb-4 p-relative">
                                <img class="girl" src="<?=STATIC_ROOT?>img/girl.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->

        <!-- services area start -->
        <section class="services__area p-relative pt-50 pb-130">
            <div class="services__shape">
                <img class="services-circle-1" src="<?=STATIC_ROOT?>img/circle-6.png" alt="">
                <img class="services-circle-2" src="<?=STATIC_ROOT?>img/circle-7.png" alt="">
                <img class="services-dot" src="<?=STATIC_ROOT?>img/dot.png" alt="">
                <img class="services-triangle" src="<?=STATIC_ROOT?>img/triangle.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 col-md-10 offset-md-1 p-0">
                        <div class="section__title-wrapper text-center mb-75 wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="section__title">专业的即时到账支付平台.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="services__item white-bg text-center transition-3 ">
                                <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                                    <img src="<?=STATIC_ROOT?>img/services-1.png" alt="">
                                </div>
                                <div class="services__content">
                                    <h3 class="services__title"><a href="">实时到账技术</a></h3>
                                    <p>采用程序与系统完全对接技术，实现支付后，立即到账，无需等待.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="services__inner hover__active active mb-30 wow fadeInUp" data-wow-delay=".5s">
                            <div class="services__item white-bg mb-30 text-center transition-3">
                                <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                                    <img src="<?=STATIC_ROOT?>img/services-2.png" alt="">
                                </div>
                                <div class="services__content">
                                    <h3 class="services__title"><a href="">实时支付技术</a></h3>
                                    <p>系统全天24小时运行，避开用户的使用时间，无需担心支付问题.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".7s">
                            <div class="services__item white-bg text-center transition-3">
                                <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                                    <img src="<?=STATIC_ROOT?>img/services-3.png" alt="">
                                </div>
                                <div class="services__content">
                                    <h3 class="services__title"><a href="">云端登陆保护</a></h3>
                                    <p>系统完美支持开启登陆保护\设备锁进行登录，让您的账号安全无忧.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".9s">
                            <div class="services__item white-bg text-center transition-3">
                                <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                                    <img src="<?=STATIC_ROOT?>img/services-4.png" alt="">
                                </div>
                                <div class="services__content">
                                    <h3 class="services__title"><a href="">分布系统架构</a></h3>
                                    <p>多个地域部署代理服务器，覆盖全国所有地区，完美避免异地登陆冻结.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services area end -->

        <!-- about area start -->
        <section class="about__area pb-120 p-relative">
            <div class="about__shape">
                <img class="about-triangle" src="<?=STATIC_ROOT?>img/triangle.png" alt="">
                <img class="about-circle" src="<?=STATIC_ROOT?>img/circle.png" alt="">
                <img class="about-circle-2" src="<?=STATIC_ROOT?>img/circle-
                2.png" alt="">
                <img class="about-circle-3" src="<?=STATIC_ROOT?>img/circle-3.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-9">
                        <div class="about__wrapper mb-10">
                            <div class="section__title-wrapper mb-25">
                                <h2 class="section__title">一站式管理系统.</h2>
                                <p>支付服务器均采用高配独立服务器集群模式搭建,确定每台服务器的稳定高效.</p>
                                <p>您可以随时在电脑/手机/平板登陆本网站进行功能设置提交，客户资料进行多重高级加密，确保数据加密储存，抵抗各种注入破解.</p>
                                <p>保证客户资料保密以及隐私安全,为客户资料负责到底!</p>
                            </div>
                            <ul>
                                <li>简易操作，方便管理</li>
                                <li>一站多号，即时响应</li>
                            </ul>
                            <a href="/user/" target="_blank" class="w-btn w-btn-3 w-btn-1">立即体验</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 offset-xxl-1 col-xl-6 col-lg-6 col-md-10 order-first order-lg-last">
                        <div class="about__thumb-wrapper p-relative ml-40 fix text-end">
                            <img src="<?=STATIC_ROOT?>img/about-bg.png" alt="">
                            <div class="about__thumb p-absolute">
                                <img class="bounceInUp wow about-big" data-wow-delay=".3s" src="<?=STATIC_ROOT?>img/about-1.png" alt="">
                                <img class="about-sm" src="<?=STATIC_ROOT?>img/about-1-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- about area start -->
        <section class="about__area pb-160 pt-80 p-relative">
            <div class="about__shape">
                <img class="about-plus" src="<?=STATIC_ROOT?>img/plus.png" alt="">
                <img class="about-triangle-2" src="<?=STATIC_ROOT?>img/triangle-2.png" alt="">
                <img class="about-circle-4" src="<?=STATIC_ROOT?>img/circle-4.png" alt="">
                <img class="about-circle-5" src="<?=STATIC_ROOT?>img/circle-5.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about__thumb-wrapper p-relative ml--30 fix mr-70">
                            <div class="about__thumb about__thumb-2 p-absolute wow fadeInUp" data-wow-delay=".3s">
                                <img class="about-big bounceInUp wow" data-wow-delay=".5s" src="<?=STATIC_ROOT?>img/about-2.png" alt="">
                                <img class="about-sm about-sm-2" src="<?=STATIC_ROOT?>img/about-2-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9">
                        <div class="about__wrapper about__wrapper-2 ml-60 mb-30">
                            <div class="section__title-wrapper mb-25">
                                <h2 class="section__title">极致响应支付.</h2>
                                <p>独家定制专业支付软件，同步更新QQ微信支付宝最新支付协议,做到稳定不冻结,每天均能稳定支付所有订单!分布式服务器全天24H秒级全能支付，执行所有支付任务，即时到账,再也无需担心因为易支付跑了而影响到您的资金安全.</p>
                            </div>
                            <ul>
                                <li>安全稳定，快速高效</li>
                                <li>多重加密，放心使用</li>
                            </ul>
                            <a href="/user/" target="_blank" class="w-btn w-btn-3 w-btn-1">立即体验</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- pricing area start -->
        <section class="price__area grey-bg pt-105 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 col-md-10 offset-md-1 p-0">
                        <div class="section__title-wrapper text-center mb-75 wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="section__title">意想不到的价格.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 ">
                        <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                            <div class="price__offer mb-15">
                                <span>普通用户套餐</span>
                            </div>
                            <div class="price__tag mb-15">
                                <h3>¥0元/永久</h3>
                            </div>
                            <div class="price__text mb-25">
                                <p>包含本站所有项目.</p>
                            </div>
                            <div class="price__features mb-40">
                                <ul class="fa-ul">
                                      <li><i class="fas fa-check-square">QQ通道免挂</i></li>
                                    <li><i class="fas fa-check-square">微信免挂</i></li>
                                    <li><i class="fas fa-check-square">支付宝免挂</i></li>
                                    
                                    <li><i class="fas fa-check-square">QQ费率： &amp; 4%</i></li>
                                    <li><i class="fas fa-check-square">微信费率： &amp; 4%</i></li>
                                    <li><i class="fas fa-check-square">支付宝费率：&amp; 4%</i></li>
                                    <li><i class="fas fa-check-square">异常通知 &amp;即时到账</i></li>
                                </ul>
                            </div>
                            <a href="/user/" class="w-btn w-btn-4 w-100 price__btn">立即使用</a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="price__item hover__active active white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".5s">
                            <div class="ribbon-box"><span>推荐</span></div>
                            <div class="price__offer mb-15">
                                <span>高级用户套餐</span>
                            </div>
                            <div class="price__tag mb-15">
                                <h3>¥58元/永久</h3>
                            </div>
                            <div class="price__text mb-25">
                                <p>包含本站所有项目.</p>
                            </div>
                            <div class="price__features mb-40">
                                <ul class="fa-ul">
                                    <li><i class="fas fa-check-square">QQ通道免挂</i></li>
                                    <li><i class="fas fa-check-square">微信免挂</i></li>
                                    <li><i class="fas fa-check-square">支付宝免挂</i></li>
                                   
                                    <li><i class="fas fa-check-square">QQ费率： &amp; 3.50%</i></li>
                                    <li><i class="fas fa-check-square">微信费率： &amp; 3.50%</i></li>
                                    <li><i class="fas fa-check-square">支付宝费率：&amp; 3.50%</i></li>
                                    <li><i class="fas fa-check-square">异常通知 &amp;即时到账</i></li>
                                </ul>
                            </div>
                            <a href="/user/" class="w-btn w-btn-4 w-100 price__btn">立即使用</a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".6s">
                            <div class="price__offer mb-15">
                                <span>SVIP用户套餐</span>
                            </div>
                            <div class="price__tag mb-15">
                                <h3>¥188元/永久</h3>
                            </div>
                            <div class="price__text mb-25">
                                <p>包含本站所有项目.</p>
                            </div>
                            <div class="price__features mb-40">
                                <ul class="fa-ul">
                                      <li><i class="fas fa-check-square">QQ通道免挂</i></li>
                                    <li><i class="fas fa-check-square">微信免挂</i></li>
                                    <li><i class="fas fa-check-square">支付宝免挂</i></li>
                                  
                                    <li><i class="fas fa-check-square">QQ费率： &amp; 3.00%</i></li>
                                    <li><i class="fas fa-check-square">微信费率： &amp; 3.00%</i></li>
                                    <li><i class="fas fa-check-square">支付宝费率：&amp; 3.00%</i></li>
                                    <li><i class="fas fa-check-square">异常通知 &amp;即时到账</i></li>
                                </ul>
                            </div>
                            <a href="/user/" class="w-btn w-btn-4 w-100 price__btn">立即使用</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="testimonial__area grey-bg pt-100 pb-70 p-relative overflow-y-visible">
            <div class="circle-animation testimonial">
                <span></span>
            </div>
            <div class="testimonial__shape">
                <img class="testimonial-circle-1" src="<?=STATIC_ROOT?>img/circle-10.png" alt="">
                <img class="testimonial-circle-2" src="<?=STATIC_ROOT?>img/circle-11.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="section__title-wrapper text-center mb-65 wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="section__title">来看看网友是如何评价我们的！</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                            <div class="testimonial__item white-bg transition-3 mb-110">
                                <div class="testimonial__thumb mb-25">
                                    <img src="<?=STATIC_ROOT?>img/testi-1.jpeg" alt="客户评价">
                                </div>
                                <div class="testimonial__text mb-25">
                                    <p>抱着试试看的心态 买了一个月的会员尝试使用，发现真的特别好用，回调也快，客服也很给力</p>
                                </div>
                                <div class="testimonial__author">
                                    <h3>醉亦醒时醒亦醉</h3>
                                    <span>一名小学生</span>
                                </div>
                            </div>
                        <div class="testimonial__item white-bg transition-3 mb-110">
                                <div class="testimonial__thumb mb-25">
                                    <img src="<?=STATIC_ROOT?>img/testi-2.jpeg" alt="">
                                </div>
                                <div class="testimonial__text mb-25">
                                    <p>回调很快，就俩字：牛逼！已经推荐给了朋友使用，真的牛批！ </p>
                                </div>
                                <div class="testimonial__author">
                                    <h3>氵待续情话</h3>
                                    <span>工地搬砖工</span>
                                </div>
                            </div>
                            <div class="testimonial__item white-bg transition-3 mb-110">
                                <div class="testimonial__thumb mb-25">
                                    <img src="<?=STATIC_ROOT?>img/testi-3.jpeg" alt="">
                                </div>
                                <div class="testimonial__text mb-25">
                                    <p>刚开始只是抱着试试的心态买了一个月，结果真的是下单就秒回调，真是即快速又安全。</p>
                                </div>
                                <div class="testimonial__author">
                                    <h3>谦城之脊</h3>
                                    <span>上班E族</span>
                                </div>
                            </div>
                            <div class="testimonial__item white-bg transition-3 mb-110">
                                <div class="testimonial__thumb mb-25">
                                    <img src="<?=STATIC_ROOT?>img/testi-4.jpeg" alt="">
                                </div>
                                <div class="testimonial__text mb-25">
                                    <p>每次给客服发信息几乎都是秒回，有一个凌晨一点多了，本以为客服睡觉了，没想到还是和以前一样秒回。这样的网站觉得让人特别踏实，很放心！ </p>
                                </div>
                                <div class="testimonial__author">
                                    <h3>龙千昂</h3>
                                    <span>养号商人</span>
                                </div>
                            </div>
                            <div class="testimonial__item white-bg transition-3 mb-110">
                                <div class="testimonial__thumb mb-25">
                                    <img src="<?=STATIC_ROOT?>img/testi-5.jpeg" alt="">
                                </div>
                                <div class="testimonial__text mb-25">
                                    <p>我跟着这个平台的站长合作好长时间了，因为我是他下面的分站，有时候客户有一些问题我解决不了的话，就找站长。每一次都给完美的解决了！很奈斯的一个平台！</p>
                                </div>
                                <div class="testimonial__author">
                                    <h3>久伴初心</h3>
                                    <span>分站站长</span>
                                </div>
                            </div>
                            <div class="testimonial__item white-bg transition-3 mb-110">
                                <div class="testimonial__thumb mb-25">
                                    <img src="<?=STATIC_ROOT?>img/testi-6.jpeg" alt="">
                                </div>
                                <div class="testimonial__text mb-25">
                                    <p>我找了好多这种易支付平台 都不靠谱直到遇到了<?php echo $conf['sitename']?>才让我感受到了什么叫做靠谱！</p>
                                </div>
                                <div class="testimonial__author">
                                    <h3>江沉晚吟时</h3>
                                    <span>大学生</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

        <!-- cta area start -->
        <section class="cta__area mb--149 p-relative">
            <div class="circle-animation cta-1">
                <span></span>
            </div>
            <div class="circle-animation cta-1 cta-2">
                <span></span>
            </div>
            <div class="circle-animation cta-3">
                <span></span>
            </div>
            <div class="container">
                <div class="cta__inner p-relative fix z-index-1 wow fadeInUp" data-wow-delay=".5s">
                    <div class="cta__shape">
                        <img class="circle" src="<?=STATIC_ROOT?>img/cta-circle.png" alt="">
                        <img class="circle-2" src="<?=STATIC_ROOT?>img/cta-circle-2.png" alt="">
                        <img class="circle-3" src="<?=STATIC_ROOT?>img/cta-circle-3.png" alt="">
                        <img class="triangle-1" src="<?=STATIC_ROOT?>img/cta-triangle.png" alt="">
                        <img class="triangle-2" src="<?=STATIC_ROOT?>img/cta-triangle-2.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="cta__wrapper d-lg-flex justify-content-between align-items-center">
                                <div class="cta__content">
                                    <h3 class="cta__title">全新支付系统，给你不一样的体验</h3>
                                    <p style="color: white;">支付宝免输金额，h5拉起 国内高防机房，稳定秒回调 / 技术全天在线，有问题立即解决

                                    </p>
                                </div>
                                <div class="cta__btn">
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" target="_blank" class="w-btn w-btn-white">QQ客服</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- cta area end -->

    </main>

    <!-- footer area start -->
    <footer class="footer__area footer-bg-3 pt-270 p-relative fix">
        <div class="footer__shape">
            <img class="footer-circle-1 footer-2-circle-1" src="<?=STATIC_ROOT?>img/circle-8.png" alt="">
            
        </div>
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-title footer__widget-title-3 mb-25">
                                <h3>版权说明</h3>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__link footer__link-3">
                                    <ul>
                                        <p style="color: white;"><?php echo $conf['sitename']?>是全网最大的即时到账支付平台，本系统独立开发，</p>
                                        <p style="color: white;">有着丰富的SDK开发文档，可帮助您极速对接！</p>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="footer__widget mb-50 footer__pl-90">
                            <div class="footer__widget-title footer__widget-title-3 mb-25">
                                <h3>联系我们</h3>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__link footer__link-3">
                                    <ul>
                                        <p style="color: white;"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" target="_blank">QQ客服</a></p>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-title footer__widget-title-3 mb-25">
                                <h3>版权说明</h3>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__link footer__link-3">
                                    <ul>
                                        <p style="color: white;"><?php echo $conf['sitename']?>提供网站使用版权</p>
                                        <p style="color: white;"><?php echo $conf['sitename']?>提供技术支持</p>
                                        <p style="color: white;">
                                            <script type="text/javascript">
                                                document.write(unescape("%3Cspan id='cnzz_stat_icon_1256832161'%3E%3C/span%3E%3Cscript src='https://s95.cnzz.com/z_stat.php%3Fid%3D1256832161%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));
                                            </script>
                                        </p>
                                        <script>
                                            var _hmt = _hmt || [];
                                            (function() {
                                                var hm = document.createElement("script");
                                                hm.src = "https://hm.baidu.com/hm.js?0454058b354e1d2aa1722bae73463695";
                                                var s = document.getElementsByTagName("script")[0];
                                                s.parentNode.insertBefore(hm, s);
                                            })();
                                        </script>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="footer__widget mb-50 float-md-end fix">
                            <div class="footer__widget-title footer__widget-title-3 mb-25">
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__copyright footer__copyright-2">
                    <div class="row">
                        <div class="col-xxl-12 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="footer__copyright-wrapper footer__copyright-wrapper-3 text-center">
                                <p>Copyright © 2020-2024 <?php echo $conf['sitename']?> by&nbsp;<span style="color: #677294;"> <a href="http://beian.miit.gov.cn" target="_blank"><span class="icp"><?php echo $conf['icpgov']?></span></a> </span>
                                </p>
                                <p id="yy_time"> 运行时间： </p>
                                            <p class="text-white mb-0"><?php echo $conf['footer']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- 代挂需要 -->
    <script>
        function siteTime() {
            window.setTimeout("siteTime()", 1000);
            var seconds = 1000;
            var minutes = seconds * 60;
            var hours = minutes * 60;
            var days = hours * 24;
            var years = days * 365;
            var today = new Date();
            var todayYear = today.getFullYear();
            var todayMonth = today.getMonth() + 1;
            var todayDate = today.getDate();
            var todayHour = today.getHours();
            var todayMinute = today.getMinutes();
            var todaySecond = today.getSeconds();
            var t1 = Date.UTC(2020, 12, 05); //北京时间2017-08-14 00: 00:00 
            var t2 = Date.UTC(todayYear, todayMonth, todayDate, todayHour, todayMinute, todaySecond);
            var diff = t2 - t1;
            var diffYears = Math.floor(diff / years);
            var diffDays = Math.floor((diff / days) - diffYears * 365);
            var diffHours = Math.floor((diff - (diffYears * 365 + diffDays) * days) / hours);
            var diffMinutes = Math.floor((diff - (diffYears * 365 + diffDays) * days - diffHours * hours) / minutes);
            var diffSeconds = Math.floor((diff - (diffYears * 365 + diffDays) * days - diffHours * hours - diffMinutes * minutes) / seconds);
            document.getElementById("yy_time").innerHTML = "运营时间: " + diffYears + "年 " + diffDays + "天 " + diffHours + "小时 " + diffMinutes + "分钟 " + diffSeconds + "秒";
        }

        siteTime();
    </script>
    <!--公告栏提示框-->
    <!-- JS here -->
    <script src="<?=STATIC_ROOT?>js/jquery-3.5.1.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/waypoints.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/bootstrap.bundle.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/jquery.meanmenu.js"></script>
    <script src="<?=STATIC_ROOT?>js/owl.carousel.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/jquery.fancybox.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/parallax.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/jquery.counterup.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/ajax-form.js"></script>
    <script src="<?=STATIC_ROOT?>js/wow.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=STATIC_ROOT?>js/main.js"></script>
    <!-- 引入 layui.js -->
    <script src="<?=STATIC_ROOT?>js/layui_1.js"></script>

 <!--弹窗公告开始-->
<script src="<?=STATIC_ROOT?>sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
swal('欢迎使用<?php echo $conf['sitename']?>','<?php echo $conf['sygg1']?>\n\n<?php echo $conf['sygg2']?>','success');

</script>
 <!--弹窗公告结束-->


</body></html>