<?php

/**

 * 登录

**/

$is_defend=true;

include("../includes/common.php");



if(isset($_GET['logout'])){

	if(!checkRefererHost())exit();

	setcookie("user_token", "", time() - 2592000);

	@header('Content-Type: text/html; charset=UTF-8');

	exit("<script language='javascript'>alert('您已成功注销本次登录！');window.location.href='./login.php';</script>");

}elseif($islogin2==1){

	exit("<script language='javascript'>alert('您已登录！');window.location.href='./';</script>");

}

$csrf_token = md5(mt_rand(0,999).time());

$_SESSION['csrf_token'] = $csrf_token;

/* if(!isset($_SESSION['authcode'])){

	$query = curl_get("http://886ds.top/check.php?url=".$_SERVER["HTTP_HOST"]."&authcode=".authcode);

    if ($query = json_decode($query, true)) {

		if ($query["code"] == 1) {

			$_SESSION["authcode"] = authcode;

		}else{

			sysmsg("<h3>".$query["msg"]."</h3>", true);

		}

	}

} */

?>



<!DOCTYPE html>

<html lang="zh-CN">

<head>

    <meta charset="UTF-8" >

/**

 * 登录

**/
<?PHP
$is_defend=true;

include("../includes/common.php");



if(isset($_GET['logout'])){

	if(!checkRefererHost())exit();

	setcookie("user_token", "", time() - 2592000);

	@header('Content-Type: text/html; charset=UTF-8');

	exit("<script language='javascript'>alert('您已成功注销本次登录！');window.location.href='./login.php';</script>");

}elseif($islogin2==1){

	exit("<script language='javascript'>alert('您已登录！');window.location.href='./';</script>");

}

$csrf_token = md5(mt_rand(0,999).time());

$_SESSION['csrf_token'] = $csrf_token;

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

<html lang="zh-CN">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>登录 | <?php echo $conf['sitename']?></title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        primary: '#165DFF',

                        secondary: '#4080FF',

                        success: '#00B42A',

                        warning: '#FF7D00',

                        danger: '#F53F3F',

                        neutral: {

                            100: '#F2F3F5',

                            200: '#E5E6EB',

                            300: '#C9CDD4',

                            400: '#86909C',

                            500: '#4E5969',

                            600: '#272E3B',

                            700: '#1D2129',

                        }

                    },

                    fontFamily: {

                        inter: ['Inter', 'system-ui', 'sans-serif'],

                    },

                    boxShadow: {

                        'card': '0 10px 30px -5px rgba(0, 0, 0, 0.1)',

                        'input': '0 2px 5px rgba(22, 93, 255, 0.08)',

                    }

                },

            }

        }

    </script>

    <style type="text/tailwindcss">

        @layer utilities {

            .content-auto {

                content-visibility: auto;

            }

            .transition-custom {

                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);

            }

            .bg-gradient-custom {

                background: linear-gradient(135deg, #165DFF 0%, #4080FF 100%);

            }

            .text-shadow {

                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

            }

            .form-focus {

                @apply focus:border-primary focus:ring-2 focus:ring-primary/20 focus:outline-none;

            }

            .bg-gradient-light {

                background: linear-gradient(135deg, #f5f7fa 0%, #e4ecff 100%);

            }

        }

    </style>

</head>

<body class="font-inter min-h-screen flex items-center justify-center p-4 bg-gradient-light">

    <!-- 主容器 -->

    <div class="w-full max-w-6xl bg-white rounded-2xl shadow-card overflow-hidden flex flex-col md:flex-row">

        <!-- 左侧品牌区域 -->

        <div class="w-full md:w-2/5 bg-gradient-custom p-8 md:p-12 flex flex-col justify-between">

            <div>

                <div class="text-white mb-8">

                    <h1 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold text-shadow mb-2">智能账户中心</h1>

                    <p class="text-white/80 text-lg">安全、高效的一站式登录解决方案</p>

                </div>

                

                <!-- 特点列表 -->

                <div class="space-y-6">

                    <div class="flex items-start">

                        <div class="bg-white/20 rounded-full p-2 mr-4">

                            <i class="fa fa-shield text-white text-lg"></i>

                        </div>

                        <div>

                            <h3 class="text-white font-semibold text-lg mb-1">多重安全保障</h3>

                            <p class="text-white/80">采用先进加密技术，保障您的账户安全</p>

                        </div>

                    </div>

                    

                    <div class="flex items-start">

                        <div class="bg-white/20 rounded-full p-2 mr-4">

                            <i class="fa fa-bolt text-white text-lg"></i>

                        </div>

                        <div>

                            <h3 class="text-white font-semibold text-lg mb-1">快捷登录体验</h3>

                            <p class="text-white/80">多种登录方式，一键快速访问您的账户</p>

                        </div>

                    </div>

                    

                    <div class="flex items-start">

                        <div class="bg-white/20 rounded-full p-2 mr-4">

                            <i class="fa fa-cogs text-white text-lg"></i>

                        </div>

                        <div>

                            <h3 class="text-white font-semibold text-lg mb-1">智能账户管理</h3>

                            <p class="text-white/80">一站式管理您的所有服务和应用</p>

                        </div>

                    </div>

                </div>

            </div>

            

            <!-- 底部版权信息 -->

            <div class="mt-12 text-white/60 text-sm">

                <p>© 2025 <?php echo $conf['sitename']?>. 保留所有权利.</p>

            </div>

        </div>

        

        <!-- 右侧登录区域 -->

        <div class="w-full md:w-3/5 p-8 md:p-12">

            <div class="max-w-md mx-auto">

                <!-- 登录方式切换 -->

                <div class="mb-8">

                    <h2 class="text-2xl font-bold text-neutral-700 mb-2"><?php echo $conf['sitename']?></h2>

                    <p class="text-neutral-500">请输入您的商户信息</p>

                    

                    <?php if(!$conf['close_keylogin']){?>

                    

                    <div class="flex border-b border-neutral-200 mt-6 overflow-x-auto pb-2 hide-scrollbar">

                        <a href="./login.php" class="tab-btn px-4 py-3 font-medium border-b-2 whitespace-nowrap <?php echo (!isset($_GET['m']) || $_GET['m']!='key') ? 'border-primary text-primary active' : 'text-neutral-500 border-transparent';?>">账号密码登录</a>

                        <a href="./login.php?m=key" class="tab-btn px-4 py-3 font-medium border-b-2 whitespace-nowrap <?php echo $_GET['m']=='key' ? 'border-primary text-primary active' : 'text-neutral-500 border-transparent';?>">商户ID登录</a>

                    </div>

                    <?php }?>

                    

                </div>

                

                <!-- 表单区域 -->

                <div class="space-y-6">

                    <!-- 账号密码登录表单 -->

                    <form name="form" class="login-form" method="post" action="login.php">

                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">

                        <div class="space-y-4">

                            <?php if($_GET['m']=='key'){?>

                            <input type="hidden" name="type" value="0"/>

                                <label for="username" class="block text-sm font-medium text-neutral-700 mb-1">商户ID</label>

                                <div class="relative">

                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-400">

                                        <i class="fa fa-user"></i>

                                    </span>

                                    <input type="text" name="user" placeholder="商户ID" value="" class="w-full pl-10 pr-12 py-3 rounded-lg border border-neutral-300 shadow-input form-focus transition-custom" onkeydown="if(event.keyCode==13){$('#submit').click()}">

                                </div>

                                <label for="username" class="block text-sm font-medium text-neutral-700 mb-1">商户密钥</label>

                                <div class="relative">

                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-400">

                                        <i class="fa fa-lock"></i>

                                    </span>

                                    <input type="password" id="key-pass" name="pass" placeholder="商户密钥" value="" class="w-full pl-10 pr-12 py-3 rounded-lg border border-neutral-300 shadow-input form-focus transition-custom" onkeydown="if(event.keyCode==13){$('#submit').click()}">

                                    <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3" onclick="togglePasswordVisibility('key-pass', this)">

                                        <i id="key-pass-icon" class="fa fa-eye-slash text-neutral-400"></i>

                                    </button>

                                </div>

                            <?php }else{?>

                            <input type="hidden" name="type" value="1"/>

                                <label for="username" class="block text-sm font-medium text-neutral-700 mb-1">邮箱/手机号</label>

                                <div class="relative">

                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-400">

                                        <i class="fa fa-user"></i>

                                    </span>

                                    <input type="text" name="user" placeholder="邮箱/手机号" value="" class="w-full pl-10 pr-12 py-3 rounded-lg border border-neutral-300 shadow-input form-focus transition-custom" onkeydown="if(event.keyCode==13){$('#submit').click()}">

                                </div>

                                <label for="username" class="block text-sm font-medium text-neutral-700 mb-1">密码</label>

                                <div class="relative">

                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-400">

                                        <i class="fa fa-lock"></i>

                                    </span>

                                    <input type="password" id="login-pass" name="pass" placeholder="密码" value="" class="w-full pl-10 pr-12 py-3 rounded-lg border border-neutral-300 shadow-input form-focus transition-custom" onkeydown="if(event.keyCode==13){$('#submit').click()}">

                                    <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3" onclick="togglePasswordVisibility('login-pass', this)">

                                        <i id="login-pass-icon" class="fa fa-eye-slash text-neutral-400"></i>

                                    </button>

                                </div>

                            <?php }?>

                            

                            <div class="flex items-center justify-between">

                                <div class="flex items-center">

                                    <input type="checkbox" id="remember-me" class="w-4 h-4 text-primary border-neutral-300 rounded focus:ring-primary">

                                    <label for="remember-me" class="ml-2 text-sm text-neutral-600">记住我</label>

                                </div>

                                <a href="findpwd.php" class="text-sm text-primary hover:text-secondary transition-custom">忘记密码?</a>

                            </div>

                            

                            <button type="button" class="w-full bg-primary hover:bg-primary/90 text-white font-medium py-3 px-4 rounded-lg transition-custom transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-primary/50 flex items-center justify-center" id="submit">登 录<i class="fa fa-arrow-right ml-2"></i></button>

                        </div>

                    </form>

                    

                </div>

                

                <!-- 其他登录方式 -->

                <div class="mt-8">

                    <div class="relative flex items-center justify-center">

                        <div class="flex-grow border-t border-neutral-200"></div>

                        <span class="flex-shrink mx-4 text-neutral-400 text-sm">其他登录方式</span>

                        <div class="flex-grow border-t border-neutral-200"></div>

                    </div>

                    

                    <?php if(!isset($_GET['connect'])){?>

                    <div class="flex justify-center mt-6 space-x-4 md:space-x-6">

                        <?php if($conf['login_alipay']>0 || $conf['login_alipay']==-1){?>

                        <button type="button" class="flex flex-col items-center text-neutral-600 hover:text-primary transition-custom" title="支付宝快捷登录" onclick="connect('alipay')"><div class="w-10 md:w-12 h-10 md:h-12 rounded-full bg-[#00A0E9]/10 flex items-center justify-center hover:bg-[#00A0E9]/20 transition-custom"><i class="fa fa-credit-card text-[#00A0E9] text-lg md:text-xl"></i></div><span class="text-xs mt-2">支付宝</span></button>

                        <?php }?>

                        <?php if($conf['login_qq']>0){?>

                        <button type="button" class="flex flex-col items-center text-neutral-600 hover:text-primary transition-custom" title="QQ快捷登录" onclick="connect('qq')"><div class="w-10 md:w-12 h-10 md:h-12 rounded-full bg-[#00A0E9]/10 flex items-center justify-center hover:bg-[#00A0E9]/20 transition-custom"><i class="fa fa-qq text-[#12B7F5] text-lg md:text-xl"></i></div><span class="text-xs mt-2">QQ</span></button>

                        <?php }?>

                        <?php if($conf['login_wx']>0 || $conf['login_wx']==-1){?>

                        <button type="button" class="flex flex-col items-center text-neutral-600 hover:text-primary transition-custom" title="微信快捷登录" onclick="connect('wx')"><div class="w-10 md:w-12 h-10 md:h-12 rounded-full bg-[#00A0E9]/10 flex items-center justify-center hover:bg-[#00A0E9]/20 transition-custom"><i class="fa fa-weixin text-[#07C160] text-lg md:text-xl"></i></div><span class="text-xs mt-2">

                       微信</span></button>

                        <?php }?>

                    </div>

                    <?php }?>

                </div>

                

                <!-- 注册链接 -->

                <?php if($conf['reg_open']==1){?>

                <div class="mt-8 text-center">

                    <p class="text-neutral-600">

                        还没有账号? <a href="reg.php" class="text-primary font-medium hover:text-secondary transition-custom">立即注册</a>

                    </p>

                </div>

                <?php }?>

            </div>

        </div>

    </div>

    



<script src="<?php echo $cdnpublic?>jquery/3.4.1/jquery.min.js"></script>

<script src="<?php echo $cdnpublic?>twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="<?php echo $cdnpublic?>layer/3.1.1/layer.min.js"></script>

<script src="//static.geetest.com/static/tools/gt.js"></script>

<script>

window.appendChildOrg = Element.prototype.appendChild;

Element.prototype.appendChild = function() {

    if(arguments[0].tagName == 'SCRIPT'){

        arguments[0].setAttribute('referrerpolicy', 'no-referrer');

    }

    return window.appendChildOrg.apply(this, arguments);

};

</script>

<script src="//static.geetest.com/v4/gt4.js"></script>



<script>

function togglePasswordVisibility(inputId, button) {

    var input = document.getElementById(inputId);

    var icon = button.querySelector('i');

    if (input.type === 'password') {

        input.type = 'text';

        icon.classList.remove('fa-eye-slash');

        icon.classList.add('fa-eye');

    } else {

        input.type = 'password';

        icon.classList.remove('fa-eye');

        icon.classList.add('fa-eye-slash');

    }

}



var captcha_open = 0;

var handlerEmbed = function (captchaObj) {

    captchaObj.appendTo('#captcha');

    captchaObj.onReady(function () {

        $("#captcha_wait").hide();

    }).onSuccess(function () {

        var result = captchaObj.getValidate();

        if (!result) {

            return alert('请完成验证');

        }

        $.captchaResult = result;

        $.captchaObj = captchaObj;

    });

};

$(document).ready(function(){

    if($("#captcha").length>0) captcha_open=1;

    $("#submit").click(function(){

        var type=$("input[name='type']").val();

        var user=$("input[name='user']").val();

        var pass=$("input[name='pass']").val();

        if(user=='' || pass==''){layer.alert(type==1?'账号和密码不能为空！':'ID和密钥不能为空！');return false;}

        submitLogin(type,user,pass);

    });

    if(captcha_open==1){

    $.ajax({

        url: "ajax.php?act=captcha",

        type: "get",

        cache: false,

        dataType: "json",

        success: function (data) {

            $('#captcha_text').hide();

            $('#captcha_wait').show();

            if(data.version == 1){

                initGeetest4({

                    captchaId: data.gt,

                    product: 'popup',

                    protocol: 'https://',

                    riskType: 'slide',

                    hideSuccess: true,

                    nativeButton: {width: '100%'}

                }, handlerEmbed);

            }else{

                initGeetest({

                    gt: data.gt,

                    challenge: data.challenge,

                    new_captcha: data.new_captcha,

                    product: "popup",

                    width: "100%",

                    offline: !data.success,

                }, handlerEmbed);

            }

        }

    });

    }

});

function submitLogin(type,user,pass){

    var csrf_token=$("input[name='csrf_token']").val();

    if(captcha_open == 1 && !$.captchaResult){

        layer.alert('请先完成滑动验证！'); return false;

    }

    var ii = layer.load();

    $.ajax({

        type: "POST",

        dataType: "json",

        data: {type:type, user:user, pass:pass, csrf_token:csrf_token, ...$.captchaResult},

        url: "ajax.php?act=login",

        success: function (data, textStatus) {

            layer.close(ii);

            if (data.code == 0) {

                layer.msg(data.msg, {icon: 16,time: 10000,shade:[0.3, "#000"]});

                setTimeout(function(){ window.location.href=data.url }, 1000);

            }else{

                layer.alert(data.msg, {icon: 2});

                $.captchaObj.reset();

            }

        },

        error: function (data) {

            layer.msg('服务器错误', {icon: 2});

            return false;

        }

    });

}

function connect(type){

    var ii = layer.load();

    $.ajax({

        type : "POST",

        url : "ajax.php?act=connect",

        data : {type:type},

        dataType : 'json',

        success : function(data) {

            layer.close(ii);

            if(data.code == 0){

                window.location.href = data.url;

            }else{

                layer.alert(data.msg, {icon: 7});

            }

        } 

    });

}

</script>

</body>

</html>