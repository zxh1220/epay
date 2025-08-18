
<?php
if(!defined('IN_CRONLITE'))exit();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<title><?php echo $conf['title']?></title>
<meta name="keywords" content="<?php echo $conf['keywords']?>">
<meta name="description" content="<?php echo $conf['description']?>">
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="/template/index12/Template/index12/static/css/all.min.css">

    <!-- Quick CSS -->
    <link rel="stylesheet" href="/template/index12/Template/index12/static/css/quick-website.css" id="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="javascript:;" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Go Pro -->
    <!-- <a href="" class="btn btn-block btn-primary text-truncate rounded-0 py-2 d-none d-lg-block" style="z-index: 1000;" target="_blank">
        <strong></strong>
		了解更多 →
    </a>-->
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/">
                <img alt="Image placeholder" src="assets/img/logo.png" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">首页</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">广告合作</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" target="_blank" href="/doc.html">API开发文档</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">联系我们</a>
                    </li>



                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="/user/reg.php" target="_blank">
                    注册
                </a>
                <a class="navbar-btn btn btn-sm btn-warning d-none d-lg-inline-block" href="/user/login.php" target="_blank">
                   登录
                </a>
                <!-- Mobile button --><br>
                <div class="d-lg-none text-center">
                      <a href="/user/reg.php" class="btn btn-primary btn-icon">商户登录</a>
                    <a href="/user/" class="btn btn-primary btn-icon">前往注册</a>
                </div><br>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    
    <section class="slice py-5">
        
        
        <div class="container">    
    <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="/template/index12/Template/index12/static/picture/illustration-8.svg" class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                       <strong class="text-primary">实时到账 拒绝跑路</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                       易支付为每一个需要支付服务的企业提供服务和技术支持，帮助企业快速的搭建自己的支付系统。现在如今，支付是商业变现必不可少的环节。我们聚合所有主流支付渠道，给你更简单、快捷的接入体验，同时提供简单易用的管理平台，让你可以集中进行跨渠道的交易管理和财务管理。我们致力于帮助企业快速和高质量地建立支付模块，满足企业任何支付场景的需求！
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <a href="user/reg.php" class="btn btn-primary btn-icon">
                            <span class="btn-inner--text">前往体验</span><span class="btn-inner--icon" >
                                <i data-feather="arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <span class="badge badge-soft-success badge-pill badge-lg">
                       基本概述
                    </span>
                    <h2 class=" mt-4">特色与服务</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">聚合多种支付方式、支付通道 免签支付通道 ,安全易用</p>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-danger">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="/template/index12/Template/index12/static/picture/illustration-5.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration">
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">快速高效</h5>
                            <p class="text-dark opacity-6 mb-0">10分钟超快速响应，1V1专业客服服务，7*24小时技术支持。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-success">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="/template/index12/Template/index12/static/picture/illustration-6.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration">
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">稳定持久</h5>
                            <p class="text-dark opacity-6 mb-0">多机房异地容灾系统，服务器可用性99.9%，专业运维团队值守。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-warning">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="/template/index12/Template/index12/static/picture/illustration-7.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration">
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">安全可靠</h5>
                            <p class="text-dark opacity-6 mb-0">金融级安全防护标准，强有力抵御外部入侵，支持高并发交易。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">

        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-6 order-lg-2 ml-lg-auto pl-lg-6">
                    <!-- Heading -->
                    <h5 class="h2 mt-4">对接多家 持牌第三方支付 接口</h5>
                    <!-- Text -->
                    <p class="lead lh-190 my-4">
                        “对接行业内优质的多家支付接口。全力保障业务流畅。 让支付接口开发更加简单方便。”
                    </p>
                    <!-- List -->
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">聚合支付 为iOS/Android原生/H5 App提供全套 支付解决方案</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">支持微信支付、支付宝支付、银联、手机支付、 QQ钱包 ,京东钱包等.</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">一次接入所有主流支付接口，99.99% 系统可用性，满 足你丰富的交易场景需求,为你的用户提供完美支付体验.</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <!-- Image -->
                    <div class="position-relative zindex-100">
                        <img alt="Image placeholder" src="/template/index12/Template/index12/static/picture/illustration-2.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveaspectratio="none" x="0px" y="0px" viewbox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                核心优势技术实力
                            </h2>
                            <h4 class="text-white mt-3">用户信赖之选，提供便捷、绿色、安全、快速的销售和购买体验</h4>
                            <!-- Play button -->
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0">
        <div class="container position-relative zindex-100">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mt-n7">
                    <div class="card bg-soft-warning border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5">
                            <div>
                                <span class="badge badge-warning badge-pill">第一</span>
                            </div>
                            <div class="pl-4">
                                <h5 class="lh-130 text-dark">拒资金流</h5>
                                <p class="text-dark opacity-6">
                                    只负责交易处理不参与资金清算，资金全都实时到您的个人账户上，以此来保障您的资金安全。
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="/template/index12/Template/index12/static/picture/illustration-7.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-sm-n7">
                    <div class="card bg-soft-success border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5">
                            <div>
                                <span class="badge badge-success badge-pill">第二</span>
                            </div>
                            <div class="pl-4">
                                <h5 class="lh-130 text-dark">费率超低</h5>
                                <p class="text-dark opacity-6">
                                    接口渠道直接到自己账户，省去中间商赚差价，因此我们可以给商户提供更低廉的费率。
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="/template/index12/Template/index12/static/picture/illustration-6.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-6 mt-xl-n7">
                    <div class="card bg-soft-danger border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5 p">
                            <div>
                                <span class="badge badge-danger badge-pill">第三</span>
                            </div>
                            <div class="pl-3">
                                <h5 class="lh-130 text-dark">REST API</h5>
                                <p class="text-dark opacity-6">
                                    提供了完善的API接口，你可以用于平台应用通道接入，开发各种系统的对接通道插件等。
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="/template/index12/Template/index12/static/picture/illustration-5.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="badge badge-primary badge-pill">易支付</span>
                    <h5 class="lh-180 mt-4 mb-6">为您提供一站式商品在线支付服务!采用群集式服务器，防御高，故障率低，无论用户身在何处，均能获得100%流畅安全可靠的体验。<font style="color:red;"> </font></h5>
                </div>
            </div>
            <!-- Features -->
            <div class="row mx-lg-n4">
                <!-- Features - Col 1 -->
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">定制化支付解决方案</span>
                                <p class="text-sm text-muted mb-0">
                                    免费在线一对一分析支付场景。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">开启支付新时代</span>
                                <p class="text-sm text-muted mb-0">
                                   支付技术服务商，让支付简单、专业、快捷！
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">全支付场景覆盖</span>
                                <p class="text-sm text-muted mb-0">
                                    二维码支付,专业收款工具,线上商户经营必备
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">主流支付接口全支持</span>
                                <p class="text-sm text-muted mb-0">
                                    提出接入建议、定制支付解决方案。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-secondary">
        <div class="container text-center">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8">
                    <!-- Title -->
                    <h2 class="h1 strong-600">
                        立刻加入 联系我们
                    </h2>
                    <!-- Text -->
                    <p class="lead text-muted">
                         易支付是国内领先的支付技术解决方案服务商，致力于帮助企业最低成本接入一套优雅、可靠的支付系统，并以可视化的数据辅助其完成商业决策。
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5">
                           <a href="/user/reg.php" class="btn btn-warning btn-icon hover-translate-y-n10 mt-4">
                                <span class="btn-inner--icon">
                                    <i data-feather="play"></i>
                                </span>
                                <span class="btn-inner--text">立即注册</span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveaspectratio="none" x="0px" y="0px" viewbox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class=" fill-section-secondary">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="/">
                            <img alt="Image placeholder" src="assets/img/logo.png" id="footer-logo">
                        </a>
                        <!-- Webpixels' mission -->
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">易支付免签约支付产品，完美解决支付难题，一站式接入支付宝，微信，财付通，QQ钱包,微信wap，帮助开发者快速集成到自己相应产品，效率高，见效快，费率低！</p>
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="#" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Link</h6>
                        <ul class="list-unstyled">
                            <li><a href="/doc.html">API开发文档</a></li>
                            <li><a href="/agreement.html">用户协议</a></li>
                            <li><a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">联系我们</a></li>
                        

                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About Us</h6>
                        <ul class="list-unstyled">
                            <li><a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">在线客服</a></li>
                            <li><a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">接口合作</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Contact Us</h6>
                        <ul class="list-unstyled">
                            <li><a >Email：<?php echo $conf['kfqq']?>@qq.com</a></li>
							<li><a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes">企业QQ：<br><?php echo $conf['kfqq']?></a></li>
                        </ul>
                    </div>
                </div><br>

            <a class="mt-4 text-sm opacity-8 pr-lg-4" target="_blank">友情链接：</a>
            <a class="mt-4 text-sm opacity-8 pr-lg-4" href="<?php echo $conf['apiurl']?>" target="_blank">聚合易支付</a>
            <a class="mt-4 text-sm opacity-8 pr-lg-4" href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&Site=pay&Menu=yes" target="_blank">广告联系</a>


                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                
		<div class="copyright">
			<div class="wrapper">
				<?php echo $conf['sitename']?>&nbsp;&nbsp;&copy;&nbsp;<?php echo date("Y")?>&nbsp;All Rights Reserved.&nbsp;
				<table width=100%>
<tr>
<td align="center"><?php echo $conf['footer']?></td>
</tr>
			</div>

                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?214f77fa0e9b4af6d03f316b703f2560";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

    <!-- Core JS  -->
    <script src="/template/index12/Template/index12/static/js/jquery.min.js"></script>
    <script src="/template/index12/Template/index12/static/js/bootstrap.bundle.min.js"></script>
    <script src="/template/index12/Template/index12/static/js/svg-injector.min.js"></script>
    <script src="/template/index12/Template/index12/static/js/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="/template/index12/Template/index12/static/js/quick-website.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
<style>
.copyrights{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
</style>
</body>

</html>