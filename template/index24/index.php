<?php
if(!defined('IN_CRONLITE'))exit();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $conf['title']?> - 数据统计</title>
    <meta name="keywords" content="<?php echo $conf['keywords']?>">
    <meta name="description" content="<?php echo $conf['description']?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- 引入Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js"></script>
    <!-- 引入jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- 自定义Tailwind配置 -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#165DFF',
                        secondary: '#FF7D00',
                        dark: '#333333',
                        light: '#F5F7FA',
                        muted: '#666666',
                        success: '#00B42A',
                        warning: '#FF7D00',
                        danger: '#F53F3F',
                        info: '#86909C'
                    },
                    fontFamily: {
                        inter: ['Inter', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .text-shadow-lg {
                text-shadow: 0 4px 8px rgba(0,0,0,0.2);
            }
            .transition-custom {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .bg-gradient-blue {
                background: linear-gradient(135deg, #165DFF 0%, #0040C1 100%);
            }
            .card-hover {
                @apply transition-all duration-300 hover:shadow-xl hover:-translate-y-1;
            }
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .carousel-slide-in {
                animation: slideIn 0.5s ease forwards;
            }
            .carousel-fade-in {
                animation: fadeIn 0.5s ease forwards;
            }
            @keyframes slideIn {
                from { transform: translateX(100%); }
                to { transform: translateX(0); }
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .btn-hover-effect {
                @apply transform hover:scale-105 active:scale-95 transition-all duration-300;
            }
            .text-balance {
                text-wrap: balance;
            }
        }
    </style>
    
    <style>
        /* 平滑滚动 */
        html {
            scroll-behavior: smooth;
        }
        
        /* 导航栏滚动效果 */
        .navbar-scroll {
            @apply bg-white shadow-md;
        }
        
        /* 自定义滚动条 */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #165DFF;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #0040C1;
        }
        
        /* 轮播图样式 */
        .carousel-container {
            position: relative;
            overflow: hidden;
        }
        
        .carousel-slide {
            display: none;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .carousel-slide.active {
            display: block;
        }
        
        .carousel-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .carousel-indicator.active {
            width: 36px;
            border-radius: 6px;
        }
        
        /* 按钮样式 */
        .btn-primary {
            @apply bg-primary hover:bg-primary/90 text-white font-medium py-3 px-6 rounded-lg shadow-lg hover:shadow-xl transition-all btn-hover-effect;
        }
        
        .btn-secondary {
            @apply bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-medium py-3 px-6 rounded-lg shadow-lg hover:shadow-xl transition-all border border-white/30 btn-hover-effect;
        }
        
        /* 响应式高度 */
        @media (max-width: 768px) {
            .carousel-container {
                height: 300px;
            }
            .carousel-buttons {
                flex-direction: column;
                gap: 10px;
            }
            .btn-primary, .btn-secondary {
                padding: 10px 16px;
                font-size: 14px;
            }
        }
        
        @media (min-width: 769px) {
            .carousel-container {
                height: 450px;
            }
            .carousel-buttons {
                flex-direction: row;
                gap: 20px;
            }
        }
        
        /* 实体化按钮样式 */
        .btn-3d-primary {
            @apply bg-gradient-to-br from-primary to-primary/80 text-white font-medium py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all btn-hover-effect;
            box-shadow: 0 4px 0 0 #0040C1, 0 5px 15px rgba(22, 93, 255, 0.3);
        }
        
        .btn-3d-secondary {
            @apply bg-gradient-to-br from-white/20 to-white/10 text-white font-medium py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all border border-white/30 btn-hover-effect;
            box-shadow: 0 4px 0 0 rgba(0, 0, 0, 0.2), 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-3d-primary:active {
            transform: translateY(4px);
            box-shadow: 0 0 0 0 #0040C1, 0 2px 8px rgba(22, 93, 255, 0.2);
        }
        
        .btn-3d-secondary:active {
            transform: translateY(4px);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* 轮播图左右切换按钮 */
        .carousel-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(22, 93, 255, 0.8);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 20;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .carousel-container:hover .carousel-nav-btn {
            opacity: 1;
        }
        
        .carousel-prev {
            left: 20px;
        }
        
        .carousel-next {
            right: 20px;
        }
        
        /* 表格样式优化 */
        .table-hover tbody tr:hover {
            @apply bg-light transition-colors;
        }
        
        /* 图表容器样式 */
        .chart-container {
            @apply bg-white rounded-xl shadow-md p-6;
        }
        
        /* 卡片内容居中 */
        .card-content-center {
            @apply flex flex-col items-center justify-center text-center;
        }
        
        /* 平滑显示元素 */
        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
        
        /* 页面载入动画 */
        .page-load {
            animation: pageLoad 0.8s ease forwards;
        }
        
        @keyframes pageLoad {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="font-inter text-dark bg-white page-load">
    <!-- 导航栏 -->
    <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 py-4">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <img src="assets/img/logo.png" alt="<?php echo $conf['sitename']?>" class="h-10 md:h-12">
                    </a>
                </div>
                
                <!-- 桌面导航 -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-dark hover:text-primary transition-colors font-medium">网站首页</a>
                    <a href="/user/test.php" target="_blank" class="text-dark hover:text-primary transition-colors font-medium">demo测试</a>
                    <a href="/doc.html" target="_blank" class="text-dark hover:text-primary transition-colors font-medium">开发文档</a>
                    <a href="/about.php" class="text-dark hover:text-primary transition-colors font-medium">关于我们</a>
                    <a href="/contact.php" class="text-dark hover:text-primary transition-colors font-medium">联系我们</a>
                </nav>
                
                <!-- 登录/注册按钮 -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/user/" class="px-4 py-2 rounded-md text-primary border border-primary hover:bg-primary/5 transition-colors">商户登录</a>
                    <a href="/user/reg.php" class="px-4 py-2 rounded-md bg-primary text-white hover:bg-primary/90 transition-colors shadow-md hover:shadow-lg">注册商户</a>
                </div>
                
                <!-- 移动端菜单按钮 -->
                <button id="mobile-menu-button" class="md:hidden text-dark focus:outline-none">
                    <i class="fa fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- 移动端导航菜单 -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 bg-white rounded-lg shadow-lg p-4 animate-fadeIn">
                <nav class="flex flex-col space-y-4">
                    <a href="/" class="text-dark hover:text-primary transition-colors font-medium py-2">网站首页</a>
                    <a href="/user/test.php" target="_blank" class="text-dark hover:text-primary transition-colors font-medium py-2">测试支付</a>
                    <a href="/doc.html" target="_blank" class="text-dark hover:text-primary transition-colors font-medium py-2">开发文档</a>
                    <a href="/about.php" class="text-dark hover:text-primary transition-colors font-medium py-2">关于我们</a>
                    <a href="/contact.php" class="text-dark hover:text-primary transition-colors font-medium py-2">联系我们</a>
                    <div class="flex space-x-4 pt-2">
                        <a href="/user/" class="px-4 py-2 rounded-md text-primary border border-primary hover:bg-primary/5 transition-colors flex-1 text-center">商户登录</a>
                        <a href="/user/reg.php" class="px-4 py-2 rounded-md bg-primary text-white hover:bg-primary/90 transition-colors shadow-md hover:shadow-lg flex-1 text-center">注册商户</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- 轮播图区域 -->
    <section class="pt-24">
        <div class="container mx-auto px-0">
            <div id="carousel" class="carousel-container">
                <!-- 轮播图将通过JavaScript动态生成 -->
                <div id="carousel-controls" class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center space-x-3 z-10">
                    <!-- 指示器将通过JavaScript动态生成 -->
                </div>
                <button id="carousel-prev" class="carousel-nav-btn carousel-prev">
                    <i class="fa fa-chevron-left text-xl"></i>
                </button>
                <button id="carousel-next" class="carousel-nav-btn carousel-next">
                    <i class="fa fa-chevron-right text-xl"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- 数据统计页面 -->
    <section class="pt-12 pb-16 bg-light">
        <div class="container mx-auto px-4 md:px-6">
            <!-- 页面标题 -->
            <div class="mb-12">
                <h1 class="text-[clamp(1.8rem,4vw,2.5rem)] font-bold text-dark mb-2">数据统计中心</h1>
                <p class="text-muted text-lg text-balance">全面了解您的业务状况，掌握关键数据指标</p>
            </div>
            
            <!-- 数据概览卡片 -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- 总交易额 -->
                <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-muted mb-1">总交易额</p>
                            <h3 class="text-3xl font-bold">¥1,258,960</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i class="fa fa-rmb text-primary text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-success flex items-center mr-2">
                            <i class="fa fa-arrow-up mr-1"></i> 12.5%
                        </span>
                        <span class="text-muted text-sm">较上月</span>
                    </div>
                </div>
                
                <!-- 交易笔数 -->
                <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-muted mb-1">交易笔数</p>
                            <h3 class="text-3xl font-bold">12,850</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center">
                            <i class="fa fa-exchange text-secondary text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-success flex items-center mr-2">
                            <i class="fa fa-arrow-up mr-1"></i> 8.3%
                        </span>
                        <span class="text-muted text-sm">较上月</span>
                    </div>
                </div>
                
                <!-- 活跃用户 -->
                <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-muted mb-1">活跃用户</p>
                            <h3 class="text-3xl font-bold">2,860</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-success/10 flex items-center justify-center">
                            <i class="fa fa-users text-success text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-success flex items-center mr-2">
                            <i class="fa fa-arrow-up mr-1"></i> 15.2%
                        </span>
                        <span class="text-muted text-sm">较上月</span>
                    </div>
                </div>
                
                <!-- 转化率 -->
                <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-muted mb-1">转化率</p>
                            <h3 class="text-3xl font-bold">32.6%</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-info/10 flex items-center justify-center">
                            <i class="fa fa-line-chart text-info text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-danger flex items-center mr-2">
                            <i class="fa fa-arrow-down mr-1"></i> 2.1%
                        </span>
                        <span class="text-muted text-sm">较上月</span>
                    </div>
                </div>
            </div>
            
            <!-- 图表区域 -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- 交易趋势图 -->
                <div class="chart-container lg:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">交易趋势分析</h3>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-sm bg-primary/10 text-primary rounded-md">日</button>
                            <button class="px-3 py-1 text-sm bg-light text-muted rounded-md">周</button>
                            <button class="px-3 py-1 text-sm bg-light text-muted rounded-md">月</button>
                            <button class="px-3 py-1 text-sm bg-light text-muted rounded-md">年</button>
                        </div>
                    </div>
                    <div class="h-80">
                        <canvas id="transactionChart"></canvas>
                    </div>
                </div>
                
                <!-- 支付方式占比 -->
                <div class="chart-container">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">支付方式分布</h3>
                        <div class="text-muted">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </div>
                    <div class="h-80 flex items-center justify-center">
                        <canvas id="paymentMethodChart"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- 第二行图表 -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- 地域分布 -->
                <div class="chart-container">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">地域分布</h3>
                        <div class="text-muted">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </div>
                    <div class="h-80 flex items-center justify-center">
                        <canvas id="regionChart"></canvas>
                    </div>
                </div>
                
                <!-- 销售时段分析 -->
                <div class="chart-container">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">销售时段分析</h3>
                        <div class="text-muted">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </div>
                    <div class="h-80">
                        <canvas id="timeChart"></canvas>
                    </div>
                </div>
                
                <!-- 热门商品 -->
                <div class="chart-container">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">热门商品</h3>
                        <div class="text-muted">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mr-4">
                                <i class="fa fa-shopping-bag text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">高级会员服务</h4>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="ml-4 font-bold">¥458,960</div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mr-4">
                                <i class="fa fa-laptop text-secondary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">企业解决方案</h4>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-secondary h-2 rounded-full" style="width: 72%"></div>
                                </div>
                            </div>
                            <div class="ml-4 font-bold">¥386,520</div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-success/10 flex items-center justify-center mr-4">
                                <i class="fa fa-database text-success"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">数据存储服务</h4>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-success h-2 rounded-full" style="width: 63%"></div>
                                </div>
                            </div>
                            <div class="ml-4 font-bold">¥256,380</div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-info/10 flex items-center justify-center mr-4">
                                <i class="fa fa-line-chart text-info"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">分析工具包</h4>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-info h-2 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="ml-4 font-bold">¥157,100</div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-danger/10 flex items-center justify-center mr-4">
                                <i class="fa fa-cogs text-danger"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">技术支持</h4>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-danger h-2 rounded-full" style="width: 32%"></div>
                                </div>
                            </div>
                            <div class="ml-4 font-bold">¥100,000</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 最近交易 -->
            <div class="chart-container mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold">最近交易记录</h3>
                    <a href="#" class="text-primary font-medium flex items-center">
                        查看全部 <i class="fa fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full table-hover">
                        <thead>
                            <tr class="border-b">
                                <th class="py-3 text-left text-muted font-medium">订单编号</th>
                                <th class="py-3 text-left text-muted font-medium">客户名称</th>
                                <th class="py-3 text-left text-muted font-medium">支付方式</th>
                                <th class="py-3 text-left text-muted font-medium">金额</th>
                                <th class="py-3 text-left text-muted font-medium">时间</th>
                                <th class="py-3 text-left text-muted font-medium">状态</th>
                                <th class="py-3 text-left text-muted font-medium">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-4">#ORD-20250715-1001</td>
                                <td class="py-4">张三</td>
                                <td class="py-4">微信支付</td>
                                <td class="py-4 font-bold">¥2,580.00</td>
                                <td class="py-4 text-muted">2025-07-15 10:23</td>
                                <td class="py-4"><span class="px-2 py-1 bg-success/10 text-success rounded-full text-xs">已完成</span></td>
                                <td class="py-4">
                                    <a href="#" class="text-primary hover:underline">详情</a>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-4">#ORD-20250715-1000</td>
                                <td class="py-4">李四</td>
                                <td class="py-4">支付宝</td>
                                <td class="py-4 font-bold">¥1,860.00</td>
                                <td class="py-4 text-muted">2025-07-15 09:45</td>
                                <td class="py-4"><span class="px-2 py-1 bg-success/10 text-success rounded-full text-xs">已完成</span></td>
                                <td class="py-4">
                                    <a href="#" class="text-primary hover:underline">详情</a>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-4">#ORD-20250714-999</td>
                                <td class="py-4">王五</td>
                                <td class="py-4">银联支付</td>
                                <td class="py-4 font-bold">¥3,650.00</td>
                                <td class="py-4 text-muted">2025-07-14 18:30</td>
                                <td class="py-4"><span class="px-2 py-1 bg-success/10 text-success rounded-full text-xs">已完成</span></td>
                                <td class="py-4">
                                    <a href="#" class="text-primary hover:underline">详情</a>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-4">#ORD-20250714-998</td>
                                <td class="py-4">赵六</td>
                                <td class="py-4">微信支付</td>
                                <td class="py-4 font-bold">¥980.00</td>
                                <td class="py-4 text-muted">2025-07-14 16:15</td>
                                <td class="py-4"><span class="px-2 py-1 bg-warning/10 text-warning rounded-full text-xs">处理中</span></td>
                                <td class="py-4">
                                    <a href="#" class="text-primary hover:underline">详情</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4">#ORD-20250714-997</td>
                                <td class="py-4">孙七</td>
                                <td class="py-4">支付宝</td>
                                <td class="py-4 font-bold">¥1,250.00</td>
                                <td class="py-4 text-muted">2025-07-14 14:05</td>
                                <td class="py-4"><span class="px-2 py-1 bg-danger/10 text-danger rounded-full text-xs">已取消</span></td>
                                <td class="py-4">
                                    <a href="#" class="text-primary hover:underline">详情</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- 数据导出 -->
            <div class="chart-container">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold">数据导出</h3>
                    <p class="text-muted">导出详细数据报表，支持多种格式</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="border border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition-colors cursor-pointer card-hover">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa fa-file-excel-o text-primary text-2xl"></i>
                        </div>
                        <h4 class="font-medium mb-2">Excel 格式</h4>
                        <p class="text-muted text-sm">导出.xlsx格式数据报表</p>
                    </div>
                    
                    <div class="border border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition-colors cursor-pointer card-hover">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa fa-file-text-o text-primary text-2xl"></i>
                        </div>
                        <h4 class="font-medium mb-2">CSV 格式</h4>
                        <p class="text-muted text-sm">导出.csv格式数据报表</p>
                    </div>
                    
                    <div class="border border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition-colors cursor-pointer card-hover">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa fa-file-pdf-o text-primary text-2xl"></i>
                        </div>
                        <h4 class="font-medium mb-2">PDF 格式</h4>
                        <p class="text-muted text-sm">导出.pdf格式数据报表</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 页脚 -->
    <footer class="bg-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <img src="assets/img/logo.png" alt="<?php echo $conf['sitename']?>" class="h-10">
                    </div>
                    <p class="text-gray-400 mb-6">专注于提供安全、高效、严谨、便捷的订单数据服务！</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-weixin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-weibo text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-qq text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-github text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">快速链接</h4>
                    <ul class="space-y-4">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors">网站首页</a></li>
                        <li><a href="/user/test.php" target="_blank" class="text-gray-400 hover:text-white transition-colors">测试支付</a></li>
                        <li><a href="/doc.html" target="_blank" class="text-gray-400 hover:text-white transition-colors">开发文档</a></li>
                        <li><a href="/about.php" class="text-gray-400 hover:text-white transition-colors">关于我们</a></li>
                        <li><a href="/contact.php" class="text-gray-400 hover:text-white transition-colors">联系我们</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">帮助中心</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">常见问题</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">商户指南</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">API文档</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">技术支持</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">服务条款</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-6">联系我们</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa fa-map-marker text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">北京市海淀区中关村科技园区</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa fa-phone text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">400-123-4567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa fa-envelope text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">support@example.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa fa-clock-o text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">周一至周日 9:00-22:00</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm mb-4 md:mb-0">
                        <?php echo $conf['sitename']?>&nbsp;&nbsp;&copy;&nbsp;<?php echo date("Y")?>&nbsp;All Rights Reserved.
                    </p>
                    <p class="text-gray-500 text-sm">
                        <?php echo $conf['footer']?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // 导航栏滚动效果
        const navbar = $('#navbar');
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                navbar.addClass('navbar-scroll');
            } else {
                navbar.removeClass('navbar-scroll');
            }
        });

        // 移动端菜单
        const mobileMenuButton = $('#mobile-menu-button');
        const mobileMenu = $('#mobile-menu');
        mobileMenuButton.click(function() {
            mobileMenu.toggleClass('hidden');
            if (mobileMenu.hasClass('hidden')) {
                mobileMenuButton.html('<i class="fa fa-bars text-2xl"></i>');
            } else {
                mobileMenuButton.html('<i class="fa fa-times text-2xl"></i>');
            }
        });

        // 轮播图数据
        const carouselData = [
            {
                image: 'https://picsum.photos/1200/450?random=1',
                alt: '数据统计图表展示',
                title: '全新支付体验',
                description: '实时监控订单数据，助力决策分析',
                bgColor: 'rgba(0, 0, 0, 0.5)',
                button1Text: '了解更多',
                button1Url: '#',
                button2Text: '立即使用',
                button2Url: '/user/reg.php'
            },
            {
                image: 'https://picsum.photos/1200/450?random=2',
                alt: '财务报表展示',
                title: '订单数据一目了然',
                description: '专业的支付数据分析与报表生成',
                bgColor: 'rgba(0, 0, 0, 0.5)',
                button1Text: '查看详情',
                button1Url: '#',
                button2Text: '免费试用',
                button2Url: '/user/reg.php'
            },
            {
                image: 'https://picsum.photos/1200/450?random=3',
                alt: '移动设备订单统计',
                title: '多端数据同步',
                description: '随时随地查看和管理您的业务数据',
                bgColor: 'rgba(0, 0, 0, 0.5)',
                button1Text: '功能介绍',
                button1Url: '#',
                button2Text: '商户登录',
                button2Url: '/user/'
            }
        ];

        // 动态加载轮播图
        function initCarousel() {
            const carouselContainer = document.getElementById('carousel');
            const carouselControls = document.getElementById('carousel-controls');
            
            // 生成轮播图项目
            carouselData.forEach((item, index) => {
                const carouselSlide = document.createElement('div');
                carouselSlide.className = `carousel-slide ${index === 0 ? 'active' : ''}`;
                carouselSlide.innerHTML = `
                    <img src="${item.image}" alt="${item.alt}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                        <div class="container mx-auto px-6 pb-12 md:pb-16">
                            <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold text-white mb-2 carousel-fade-in">${item.title}</h2>
                            <p class="text-[clamp(1rem,2vw,1.25rem)] text-white/90 max-w-3xl carousel-fade-in text-balance" style="animation-delay: 0.2s">${item.description}</p>
                            <div class="mt-6 carousel-buttons flex carousel-btn" style="animation-delay: 0.4s">
                                <a href="${item.button1Url}" class="btn-primary flex items-center justify-center">
                                    ${item.button1Text} <i class="fa fa-arrow-right ml-2"></i>
                                </a>
                                <a href="${item.button2Url}" class="btn-secondary flex items-center justify-center">
                                    ${item.button2Text} <i class="fa fa-rocket ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                `;
                carouselContainer.insertBefore(carouselSlide, carouselControls);
                
                // 生成指示器
                const indicator = document.createElement('button');
                indicator.className = `carousel-indicator ${index === 0 ? 'active bg-primary' : 'bg-white/50'}`;
                indicator.setAttribute('aria-current', index === 0 ? 'true' : 'false');
                indicator.setAttribute('aria-label', `Slide ${index + 1}`);
                indicator.onclick = () => goToSlide(index);
                carouselControls.appendChild(indicator);
            });
            
            // 设置初始状态
            currentSlide = 0;
            
            // 自动轮播
            carouselInterval = setInterval(nextSlide, 5000);
            
            // 鼠标悬停暂停轮播
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(carouselInterval);
            });
            
            // 鼠标离开继续轮播
            carouselContainer.addEventListener('mouseleave', () => {
                carouselInterval = setInterval(nextSlide, 5000);
            });
        }
        
        // 轮播图控制
        let currentSlide = 0;
        let carouselInterval;
        
        function nextSlide() {
            goToSlide((currentSlide + 1) % carouselData.length);
        }
        
        function prevSlide() {
            goToSlide((currentSlide - 1 + carouselData.length) % carouselData.length);
        }
        
        function goToSlide(index) {
            if (index === currentSlide) return;
            
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.carousel-indicator');
            
            // 隐藏当前幻灯片
            slides[currentSlide].classList.remove('active');
            
            // 更新指示器
            indicators[currentSlide].classList.remove('active', 'bg-primary');
            indicators[currentSlide].classList.add('bg-white/50');
            indicators[currentSlide].setAttribute('aria-current', 'false');
            
            // 更新当前幻灯片索引
            currentSlide = index;
            
            // 显示新幻灯片
            slides[currentSlide].classList.add('active');
            
            // 重置动画
            const elements = slides[currentSlide].querySelectorAll('.carousel-fade-in, .carousel-btn');
            elements.forEach(el => {
                el.style.animation = 'none';
                setTimeout(() => {
                    el.style.animation = '';
                }, 10);
            });
            
            // 更新指示器
            indicators[currentSlide].classList.remove('bg-white/50');
            indicators[currentSlide].classList.add('active', 'bg-primary');
            indicators[currentSlide].setAttribute('aria-current', 'true');
        }

        // 初始化图表
        $(document).ready(function() {
            // 初始化轮播图
            initCarousel();
            
            // 设置轮播图按钮事件
            document.getElementById('carousel-prev').onclick = prevSlide;
            document.getElementById('carousel-next').onclick = nextSlide;
            
            // 交易趋势图
            const transactionCtx = document.getElementById('transactionChart').getContext('2d');
            const transactionChart = new Chart(transactionCtx, {
                type: 'line',
                data: {
                    labels: ['1月', '2月', '3月', '4月', '5月', '6月', '7月'],
                    datasets: [
                        {
                            label: '交易金额',
                            data: [120000, 190000, 180000, 210000, 250000, 280000, 320000],
                            borderColor: '#165DFF',
                            backgroundColor: 'rgba(22, 93, 255, 0.1)',
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: '交易笔数',
                            data: [1200, 1500, 1400, 1800, 2200, 2500, 2800],
                            borderColor: '#FF7D00',
                            backgroundColor: 'rgba(255, 125, 0, 0.1)',
                            tension: 0.3,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // 支付方式占比
            const paymentMethodCtx = document.getElementById('paymentMethodChart').getContext('2d');
            const paymentMethodChart = new Chart(paymentMethodCtx, {
                type: 'doughnut',
                data: {
                    labels: ['微信支付', '支付宝', '银联支付', '其他'],
                    datasets: [{
                        data: [45, 35, 15, 5],
                        backgroundColor: [
                            '#165DFF',
                            '#FF7D00',
                            '#00B42A',
                            '#86909C'
                        ],
                        borderWidth: 0,
                        cutout: '70%'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    }
                }
            });

            // 地域分布
            const regionCtx = document.getElementById('regionChart').getContext('2d');
            const regionChart = new Chart(regionCtx, {
                type: 'bar',
                data: {
                    labels: ['北京', '上海', '广州', '深圳', '杭州', '其他'],
                    datasets: [{
                        label: '交易金额',
                        data: [28, 25, 15, 12, 10, 10],
                        backgroundColor: '#165DFF',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // 销售时段分析
            const timeCtx = document.getElementById('timeChart').getContext('2d');
            const timeChart = new Chart(timeCtx, {
                type: 'bar',
                data: {
                    labels: ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00'],
                    datasets: [{
                        label: '交易笔数',
                        data: [120, 80, 320, 450, 380, 520],
                        backgroundColor: '#FF7D00',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // 页面载入动画
            setTimeout(() => {
                document.body.classList.add('loaded');
            }, 300);
        });
    </script>
</body>
</html>    