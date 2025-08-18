<?php
if(!defined('IN_CRONLITE'))exit();
if(!isset($_SESSION['authcode'])){
	$query = curl_get("http://886ds.top/check.php?url=".$_SERVER["HTTP_HOST"]."&authcode=".authcode);
    if ($query = json_decode($query, true)) {
		if ($query["code"] == 1) {
			$_SESSION["authcode"] = authcode;
		}else{
			sysmsg("<h3>".$query["msg"]."</h3>", true);
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $conf['web_name'];?><?php echo $conf['title']?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../favicon.ico" rel="icon">
  <link href="<?php echo STATIC_ROOT?>img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="<?=$cdnpublic?>twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="<?=$cdnpublic?>font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=$cdnpublic?>animate.css/3.5.2/animate.min.css" rel="stylesheet">
  <link href="<?=$cdnpublic?>ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=$cdnpublic?>OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=$cdnpublic?>lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo STATIC_ROOT?>css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="./assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">首页</a></li>
<?php if($conf['ddcs']==1){?>
          <li><a href="<?php echo TEST_PAY;?>">测试支付</a></li>
<?php }?>
           <li><a href="../cd">订单查询</a></li>
          <li><a href="../doc.html">开发文档</a></li>
          <li><a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">联系客服</a></li>
          <li><a href="../user/index.php">登陆</a></li>
          <li><a href="../user/?reg">注册</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="<?php echo STATIC_ROOT?>img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2><?php echo $conf['web_name'];?></h2>
        <div>
          <a href="../user/index.php" class="btn-get-started scrollto">登陆</a>
          <a href="../user/?reg" class="btn-services scrollto">注册</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>关于我们</h3>
          <p>服务不止是一次简单的交易，服务不再是冰冷的数据和枯燥的报表</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
          多级商户场景的服务解决方案，灵活实现多级商户的分润管理
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">接入便利</a></h4>
              <p class="description">全平台SKD让你最小化介入服务的时间与人力</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">稳定可靠</a></h4>
              <p class="description">所有数据的传输和存储符合金融级别的安全标准</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">安全保证a</a></h4>
              <p class="description">全地三中心容灾系统确保服务稳定最快完成交易</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?php echo STATIC_ROOT?>img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="<?php echo STATIC_ROOT?>img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>企业信赖的商业合作伙伴</h4>
            <p>
行业明星团队，顶级风险投资机构支持，历经 3 年积累打造专业的支付系统解决方案和基于交易数据的商业智能平台，历经 273 个版本。迭代升级，服务 70 多个行业近 2 万家企业客户，处理超过 5 亿笔订单。累计为超过 25000 家商户提供服务
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="<?php echo STATIC_ROOT?>img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>管理平台</h4>
            <p>
            简单易用的管理平台，快速概览当日的交易状况财务负责人可以集中进行跨渠道的交易管理，查账对账，数据分析，输出报表开放多角色的职能权限设置，方便开发，运营和财务高效协作
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>我们的优势</h3>
          <p>我们是最简单最轻量最安全的第三方易支付收款平台.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">商户中心</a></h4>
              <p class="description">简单清爽的商户中心,让商户更好的了解我们产品的优势.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">售后服务</a></h4>
              <p class="description">我能有专门的客服24小时引导您接入我们.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">结算时间</a></h4>
              <p class="description">我们会将您的资金次日12.00前打到您的账户哦.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">方便快捷</a></h4>
              <p class="description"><?php echo $conf['web_name'];?>带有通俗易懂的开发稳定SDK.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">结算方式</a></h4>
              <p class="description">我们的易支付采用T+1结算方式,今日满5元，明天就结算哦.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">用户好评</a></h4>
              <p class="description">自打运营以来<?php echo $conf['web_name'];?>常用以高效的能力获得不少用户好评,你还在等什么呢.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->


  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

       

    <div class="container">
      <div class="copyright">
      <p class="text-white mb-0"><?php echo date("Y")?> &copy; <a href=""><?php echo $conf['sitename']?></a></p>
      </div>
      <div class="credits">
      <p class="text-white mb-0"><?php echo $conf['footer']?></p>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?=$cdnpublic?>jquery/3.3.1/jquery.min.js"></script>
  <script src="<?=$cdnpublic?>jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
  <script src="<?=$cdnpublic?>twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo STATIC_ROOT?>lib/easing/easing.min.js"></script>
  <script src="<?php echo STATIC_ROOT?>lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo STATIC_ROOT?>lib/wow/wow.min.js"></script>
  <script src="<?=$cdnpublic?>waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="<?php echo STATIC_ROOT?>lib/counterup/counterup.min.js"></script>
  <script src="<?=$cdnpublic?>OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="<?php echo STATIC_ROOT?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=$cdnpublic?>lightbox2/2.10.0/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo STATIC_ROOT?>contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo STATIC_ROOT?>js/main.js"></script>

</body>
</html>
