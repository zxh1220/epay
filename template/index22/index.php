<!DOCTYPE html><html lang="zh-CN">
    <head><meta charset="utf-8">
		
		<title><?php echo $conf['web_name'];?><?php echo $conf['title']?></title>
	<meta name="description" content="Chart.js 是一套简单、干净并且有吸引力的基于 HTML5 技术的 JavaScript 图表工具。Chart.js 为你提供了完整的易于集成到你的网站的生动、交互的图表。">

		<link rel="icon" href="/assets/img/logo.png">
	    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_ROOT?>css/styles.css">
	</head>

	
	<body class="homepage">
		<div class="background-chart fade-in">
			<canvas id="background-bar"></canvas>
		</div>
		<div class="content-overlay fade-in-up animation-delay__1">
			<div class="hero-container">
				<img class="chart-logo fade-in animation-delay__3" src="/assets/img/logo.png" style="width:30%;">
				<div class="fade-in fade-in animation-delay__5">
					<h1 class="hero-title"><?php echo $conf['web_name'];?></h1>
					<h2 class="hero-subtitle"><?php echo $conf['web_name'];?><?php echo $conf['title']?></h2>
				</div>
				<div class="hero-button-wrapper fade-in animation-delay__6">
					<a class="button button__red" href="/user/?login">登录</a>
					<a class="button button__blue" href="/user/?reg">注册</a>
<?php if($conf['ddcs']==1){?>
					<a class="button button__black" href="<?php echo TEST_PAY;?>" target="_blank">测试支付</a>
<?php }?>
					<a class="button button__black" href="/cd" target="_blank">订单查询</a>
				</div>
			</div>
			<hr>
			<div class="feature-container fade-in animation-delay__7">
				<div class="feature">
					<div class="feature-text">
						<h3 class="subtitle">
							<span class="pill pill__new">稳定</span>
							完整的文档
						</h3>
						<p class="description">开发文档,接口文档,尽在在线文档库</p>
					</div>
					<div class="feature-chart feature-chart__right">
						<canvas id="mixed-chart" height="200" width="300"></canvas>
					</div>
				</div>
				<div class="feature">
					<div class="feature-text feature-text__pull-right">
						<h3 class="subtitle">
							<span class="pill pill__new">速度</span>
							功能全面
						</h3>
						<p class="description">强大的运营管理平台,商户管理,支付渠道,订单管理,商户通知等等</p>
					</div>
					<div class="feature-chart feature-chart__left feature-chart__pull-right">
						<canvas id="axis-chart" height="200" width="300"></canvas>
					</div>
				</div>
				<div class="feature">
					<div class="feature-text">
						<h3 class="subtitle">
							<span class="pill pill__new">强势</span>
							贴心售后
						</h3>
						<p class="description">为您提供7*24专业售后技术服务,无需为交易而烦恼</p>
					</div>
					<div class="feature-chart feature-chart__right">
						<canvas id="animate-chart" height="200" width="300"></canvas>
					</div>
				</div>
			</div>
			<hr>
			<div class="feature-small-container fade-in animation-delay__7">
				<div class="feature-small">
					<div class="feature-icon">
						<img src="<?php echo STATIC_ROOT?>img/open-source.svg">
					</div>
					<h4 class="subtitle subtitle__small">秒速</h4>
					<p class="description description__small">您仅需集成SDK敲几行代多重数据加密严控访问权</p>
				</div>
				<div class="feature-small">
					<div class="feature-icon">
						<img src="<?php echo STATIC_ROOT?>img/chart-types.svg">
					</div>
					<h4 class="subtitle subtitle__small">高效</h4>
					<p class="description description__small">多重数据加密严控访问权限保障交易安全</p>
				</div>
				<div class="feature-small">
					<div class="feature-icon">
						<img src="<?php echo STATIC_ROOT?>img/canvas-icon.svg">
					</div>
					<h4 class="subtitle subtitle__small">稳定</h4>
					<p class="description description__small">统计系统运行状态随时随地查看系统运转情况</p>
				</div>
				<div class="feature-small">
					<div class="feature-icon">
						<img src="<?php echo STATIC_ROOT?>img/responsive.svg">
					</div>
					<h4 class="subtitle subtitle__small">响应式</h4>
					<p class="description description__small">根据窗口尺寸的变化重绘UI界面，展现更加细腻！</p>
				</div>
			</div>

		
		</div>

		<footer class="fade-in animation-delay__8">
			
<p class="footer-note">Copyright &copy; <a href=""><?php echo $conf['sitename']?></a></p>
<p class="text-white mb-0"><?php echo $conf['footer']?></p>


		</p></footer>

		<script async="" src="<?php echo STATIC_ROOT?>js/build.js"></script>
	



</body></html>