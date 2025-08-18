	  
<?php
if(!defined('IN_CRONLITE'))exit();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="zh" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<title><?php echo $conf['title']?></title>
  	<meta name="keywords" content="<?php echo $conf['keywords']?>">
	<meta name="description" content="<?php echo $conf['description']?>">	
    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php echo STATIC_ROOT?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/flaticon-set.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/style.css" rel="stylesheet">
    <link href="<?php echo STATIC_ROOT?>/css/responsive.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

  	  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="../<?php echo STATIC_ROOT?>/js/html5/html5shiv.min.js"></script>
      <script src="../<?php echo STATIC_ROOT?>/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body><div class="wrapper">

    <!-- Preloader Start -->
    <div class="se-pre-con" style="display: none;"></div>
    <!-- Preloader Ends -->
	  
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default active-bg inc-border navbar-fixed dark bootsnav on no-full no-background">

            <div class="container-full">            

                <!-- Start Atribute Navigation -->
                <div class="attr-nav button fixed-nav">
                    <ul>
                        <li>
                            
                        </li>
                        <li>
                                <a href="user">PC商户中心</a>
                                <a href="user">H5商户中心</a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" style="width:165px;height:45px;" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        
                        <li class="">
                            
                        </li>
                        
                        
                        
                        <li class="">
                            <a class="smooth-menu" href="cd">查单</a>
                        </li>
                        
                        <li>
                            <a class="smooth-menu" href="user/test.php">支付测试</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>   
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
	  
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area bg-cover" style="background-image: url();">
        <div id="bootcarousel" class="carousel light-bg top-padding text-dark slide animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="double-items">
                                <div class="col-md-7">
                                    <div class="info">
                                        <h2 data-animation="animated slideInLeft" class="">我们正在构建<strong>完整的支付生态</strong></h2>
                                        <ul data-animation="animated fadeInLeft" class="">
                                            <li>高并发</li>
                                            <li>低延迟</li>
                                            <li>低费率</li>
                                            <li>实时结算</li>
                                        </ul>
                                        <a data-animation="animated fadeInDown" class="btn circle btn-theme effect btn-md" href="user">PC商户中心</a>
                                        <a data-animation="animated fadeInDown" class="btn circle btn-theme effect btn-md" href="moblie/user">H5商户中心</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="thumb" data-animation="animated slideInRight">
                                        <img src="<?php echo STATIC_ROOT?>/img/illustrations/2.svg" alt="Thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="double-items">
                                <div class="col-md-7">
                                    <div class="info">
                                        <h2 data-animation="animated slideInLeft" class="">持续发展<strong>为您提供</strong>有效的服务</h2>
                                        <ul data-animation="animated fadeInLeft" class="">
                                            <li>高并发</li>
                                            <li>低延迟</li>
                                            <li>低费率</li>
                                            <li>实时结算</li>
                                        </ul>
                                        <a data-animation="animated fadeInDown" class="btn circle btn-theme effect btn-md" href="user">PC商户中心</a>
                                        <a data-animation="animated fadeInDown" class="btn circle btn-theme effect btn-md" href="user">H5商户中心</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="thumb" data-animation="animated slideInRight">
                                        <img src="<?php echo STATIC_ROOT?>/img/illustrations/1.svg" alt="Thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control theme" href="index.html#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control theme" href="index.html#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->
	  
    <!-- Start Our About
    ============================================= -->
    <div id="features" class="features-area bg-gray shape default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Features Content -->
                <div class="features-content">
                    <div class="col-md-5 thumb">
                        <img src="<?php echo STATIC_ROOT?>/img/illustrations/9.svg" alt="Thumb">
                    </div>
                    <div class="col-md-7 info">
                        <div class="info-items">
                            <div class="features">
                                <div class="row">
                                    <!-- Left Grid -->
                                    <div class="col-md-6 col-sm-6 equal-height" style="height: 689px;">
                                        <div class="item">
                                            <!--<i class="flaticon-dashboard"></i>-->
                                            <p>秒级回调，实时监控，无漏单，无暗扣，是我们的初衷</p>
                                            <h4>监控</h4>
                                        </div>
                                        <div class="item">
                                            <!--<i class="flaticon-question"></i>-->
                                            <p>财务7*24时刻准备办理提现</p>
                                            <h4>Support Chat</h4>
                                        </div>
                                    </div>
                                    <!-- End Left Grid -->

                                    <!-- Right Grid -->
                                    <div class="col-md-6 col-sm-6 equal-height" style="height: 719px;">
                                        <div class="item">
                                            <!--<i class="flaticon-analysis"></i>-->
                                            <p>数据都是实时统计的，你可以随时随地查询上一秒的订单</p>
                                            <h4>订单查询</h4>
                                        </div>
                                        <div class="item">
                                            <!--<i class="flaticon-rocket"></i>-->
                                            <p>多节点高可用云负载架构，无需担心并发问题</p>
                                            <h4>高并发</h4>
                                        </div>
                                    </div>
                                    <!-- End Right Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Features Content -->

            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Our About
    ============================================= -->
	  
    <!-- End Our About -->

    <!-- Start Services Area 
    ============================================= -->
    <div id="services" class="services-area half-bg default-padding-top bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>如何使用</h4>
                        <h2>我们的<strong>易支付程序</strong></h2>
                        <p>您只需要根据以下三个操作步骤，即可使用我们的易支付程序</p>
                    </div>
                </div>
            </div>
            <div class="services-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height" style="height: 436px;">
                        <div class="item">
                            <h4>创建商户</h4>
                            <!--<div class="icon">-->
                            <!--    <i class="flaticon-architect"></i>-->
                            <!--</div>-->
                            <p>点击下面的链接，立即前往登录商户</p>
                            <a href="user"><i class="fas fa-angle-right"></i>立即登录</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height" style="height: 436px;">
                        <div class="item">
                            <h4>获取API密钥</h4>
                            <!--<div class="icon">-->
                            <!--    <i class="flaticon-software"></i>-->
                            <!--</div>-->
                            <p>点击下面的链接，获取您的APi</p>
                            <a href="user/"><i class="fas fa-angle-right"></i>获取密钥</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height" style="height: 436px;">
                        <div class="item">
                            <h4>开始赚钱</h4>
                            <!--<div class="icon">-->
                            <!--    <i class="flaticon-testing"></i>-->
                            <!--</div>-->
                            <p>将平台的API信息对接到您的系统，开始赚钱</p>
                            <a href="/user/"><i class="fas fa-angle-right"></i>准备提现</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
	  
    <!-- Start Work Process Area 
    ============================================= -->
    <div id="overview" class="process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb">
                    <img src="<?php echo STATIC_ROOT?>/img/illustrations/5.svg" alt="Thumb">
                </div>
                <div class="col-md-6 info">
                    <h4>如何工作</h4>
                    <h2>专为拥有专业开发人员的初创公司而设计</h2>
                    <!-- Tab Nav -->
                    <div class="tab-navigation text-center">
                        <ul class="nav nav-pills">
                            
                            <li>
                                
                            </li>
                            
                        </ul>
                    </div>
                    <!-- End Tab Nav -->
                    <!-- Start Tab Content -->
                    <div class="tab-content">

                        <!-- Start Single Item -->
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="info">
                                <p>庆祝信念激发原则日。肯定失败或在西部。对我来说，如果它受伤了，我很抱歉。她联合善良的兴趣辩论确实超过了。是他们的时间。</p>
                                <ul>
                                    <li> 
                                        <h5>非常简单的使用</h5>极简对接，仅需7行代码</li>
                                    <li>
                                        <h5>无忧并发</h5>多节点高可用云架构，无忧并发</li>
                                    <li>
                                        <h5>灵活的用户界面</h5>清爽的商户界面，清爽的系统</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div id="tab2" class="tab-pane fade">
                            <div class="info">
                                <p>
                                    Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. partiality affronting unpleasant why add. Esteem garden men yet shy course Consulted.
                                </p>
                                <ul>
                                    <li> 
                                        <h5>Amazingly Simple Use</h5> 
                                        Certainty arranging am smallness by conveying
                                    </li>
                                    <li>
                                        <h5>Clear Documentation</h5>
                                        Frankness pronounce daughters remainder extensive
                                    </li>
                                    <li>
                                        <h5>Flexible user interface</h5>
                                        Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div id="tab3" class="tab-pane fade">
                            <div class="info">
                                <p>
                                    Celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh. Is time from them.
                                </p>
                                <ul>
                                    <li> 
                                        <h5>Amazingly Simple Use</h5> 
                                        Certainty arranging am smallness by conveying
                                    </li>
                                    <li>
                                        <h5>Clear Documentation</h5>
                                        Frankness pronounce daughters remainder extensive
                                    </li>
                                    <li>
                                        <h5>Flexible user interface</h5>
                                        Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->

    <!-- Start Pricing Area 
    ============================================= -->
    
    

    
    
    

	  
    
    

    
    
    

    
    <div class="companies-area bg-gray text-center default-padding">
        <div class="container">
            <div class="companies-items">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading">
                            <h4>我们总计服务了</h4>
                            <h2><strong>12k+</strong>客户</h2>
                            <p>很多电商网站的支付系统均已集成了我们的平台，这是令我们很欣慰的，也很荣幸。</p>
                        </div>
                        <div class="item-list companies-carousel owl-carousel owl-theme owl-loaded owl-drag">
                            
                            
                            
                            
                            
                            
                        <!--<div class="owl-stage-outer">-->
                        <!--    <div class="owl-stage" style="transform: translate3d(-390px, 0px, 0px); transition: all 0s ease 0s; width: 1170px;"><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="item">-->
                        <!--        <img src="../<?php echo STATIC_ROOT?>/img/clients/1.png" alt="Thumb">-->
                        <!--    </div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="item">-->
                        <!--        <img src="../<?php echo STATIC_ROOT?>/img/clients/2.png" alt="Thumb">-->
                        <!--    </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="item">-->
                        <!--        <img src="../<?php echo STATIC_ROOT?>/img/clients/3.png" alt="Thumb">-->
                        <!--    </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="item">-->
                        <!--        <img src="../<?php echo STATIC_ROOT?>/img/clients/4.png" alt="Thumb">-->
                        <!--    </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="item">-->
                        <!--        <img src="../<?php echo STATIC_ROOT?>/img/clients/5.png" alt="Thumb">-->
                        <!--    </div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="item">-->
                        <!--        <img src="../<?php echo STATIC_ROOT?>/img/clients/6.png" alt="Thumb">-->
                        <!--    </div></div></div></div>-->
                            
                            
                            <div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Companies Area -->
	  
    <!-- Start Footer 
    ============================================= -->
    <footer>
        <div class="svg-shape">
            <svg xmlns="http://www.w3.org/2000/svg" class="gray" preserveAspectRatio="none" viewBox="0 0 1070 52">
                <path d="M0,0S247,91,505,32c261.17-59.72,565-13,565-13V0Z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-md-4 col-sm-6 equal-height item" style="height: 288px;">
                        <div class="f-item about">
                            <img src="assets/img/logo.png" alt="Logo">
                            <p>专业支付技术服务商 - 支付接口、三方支付接口、四方支付接口是您的不二之选，欢迎咨询云支付 - 专业支付技术服务商 - 支付接口、三方支付接口、四方支付接口。</p>
                            <h5>专业的支付程序提供商</h5>
                            
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item" style="height: 288px;">
                        <div class="f-item link">
                            <h4>Company</h4>
                            <ul>
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>
                                    <a href="">About us</a>
                                </li>
                                <li>
                                    <a href="">Compnay History</a>
                                </li>
                                <li>
                                    <a href="">Features</a>
                                </li>
                                <li>
                                    <a href="">Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item" style="height: 288px;">
                        <div class="f-item link">
                            <h4>Resources</h4>
                            <ul>
                                <li>
                                    <a href="">Career</a>
                                </li>
                                <li>
                                    <a href="">Leadership</a>
                                </li>
                                <li>
                                    <a href="">Strategy</a>
                                </li>
                                <li>
                                    <a href="">Services</a>
                                </li>
                                <li>
                                    <a href="">History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item" style="height: 288px;">
                        <div class="f-item twitter-widget">
                            <h4>联系我们</h4>
                            <p>您可以根据下方现有的联系方式，与我们专业的技术人员取得联系</p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span><?php echo $conf['email']?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <h5>QQ:</h5>
                                            <span><?php echo $conf['kfqq']?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	  
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><?php echo $conf['footer']?></p><p><a href="https://pay-yzf.top/"><?php echo $conf['sitename']?>&nbsp;&nbsp;&copy;&nbsp;
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="">Terms</a>
                            </li>
                            <li>
                                <a href="">Privacy</a>
                            </li>
                            <li>
                                <a href="">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
	  
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?php echo STATIC_ROOT?>/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/bootstrap.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/equal-height.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/jquery.appear.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/modernizr.custom.13711.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/wow.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/progress-bar.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/count-to.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/YTPlayer.min.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/circle-progress.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/bootsnav.js"></script>
    <script src="<?php echo STATIC_ROOT?>/js/main.js"></script>


</div></body></html>