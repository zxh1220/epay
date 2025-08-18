<?php
include("../includes/common.php");
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
<html>

<head>
    <meta charset="UTF-8">
    <title><?= $conf['sitename'] ?>-查单助手</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="./lib/layui-v2.6.3/css/layui.css" media="all">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background: #1E9FFF;
            min-width: 475px;
        }

        body:after {
            content: '';
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-filter: blur(3px);
            -moz-filter: blur(3px);
            -o-filter: blur(3px);
            -ms-filter: blur(3px);
            filter: blur(3px);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .layui-container {
            margin-top: 4%;
        }

        .admin-login-background {
            width: 96%;
            height: auto;
        }

        .logo-title {
            text-align: center;
            letter-spacing: 2px;
            padding: 14px 0;
        }

        .logo-title h1 {
            color: #1E9FFF;
            font-size: 25px;
            font-weight: bold;
        }

        .login-form {
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            padding: 14px 20px;
            box-shadow: 0 0 8px #eeeeee;
        }

        .login-form .layui-form-item {
            position: relative;
        }

        .login-form .layui-form-item label {
            position: absolute;
            left: 1px;
            top: 1px;
            width: 38px;
            line-height: 36px;
            text-align: center;
            color: #d2d2d2;
        }

        .login-form .layui-form-item input {
            padding-left: 36px;
        }

        .captcha {
            width: 60%;
            display: inline-block;
        }

        .captcha-img {
            display: inline-block;
            width: 34%;
            float: right;
        }

        .captcha-img img {
            height: 34px;
            border: 1px solid #e6e6e6;
            height: 36px;
            width: 100%;
        }

        .ccrow {
            border: 1px solid #9F9F9F;
            padding-top: 10px;
            margin-bottom: 10px;
        }

        .conttitle {
            color: #000;
            font-size: 15px;
            font-weight: bold;
            text-align: right;
            padding-right: 8px;
        }

        .cont1 {
            font-size: 14px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="layui-container">
        <div class="admin-login-background">
            <div class="layui-form login-form">
                <form class="layui-form" action="">
                    <div class="layui-form-item logo-title">
                        <h1><?= $conf['sitename'] ?>-订单查询</h1>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label" for="username"><i class="fa fa-reorder"></i></label>
                        <input type="text" name="kw" lay-verify="required" placeholder="输入您的19位订单号" autocomplete="off" class="layui-input" value="">
                        <div style="margin-top:8px;">
                            <font color="#FF0000">(1).</font>
                            </font>
                            <font color="#0000FF">手机用户可以左右滑动。</font><br />
                            <font color="#FF0000">(2).</font>
                            <font color="#0000FF">复制查询后显示的17位商户订单号到对应网站查询,一定要选择订单号查询。</font><br />
                            <font color="#FF0000">(3).</font>
                            <font color="#0000FF">如果查显示已支付并通知失败，点击补单即可查询！</font><br />
                            <font color="#FF0000">(4).</font>
                            <font color="#0000FF">如果网站有后缀ds或buy，请自行复制打开在查询</font><br />
                            <font color="#FF0000">(5).</font>
                            <font color="#0000FF">如果查不到订单号，请联系下面的客服帮您查询！</font><br />
                            <font color="#FF0000">(6).</font>
                            <font color="#FF0000">补单提示success是补单成功</font><br />
                            <font color="#FF0000">(7).</font>
                            <font color="#FF0000">补单提示ERROR或者Fail是补单失败，请联系客服！</font>
                        </div>
                       <div style="margin-top:8px;">
                            </a>
                            <a class="layui-btn layui-btn-danger" href="http://wpa.qq.com/msgrd?v=3&uin=<?= $conf['kfqq'] ?>&site=qq&menu=yes" target="_blank">
                                <font color="#FFFFFF"></font>
                                <font color="#FFFFFF">点我联系客服</font>
                            </a></center>
                        </div>
                    </div>
                </form>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn layui-btn-normal layui-btn-fluid" id="queryorder">查询</button>
                </div>

                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;text-align: center;padding-right: 35px;">
                    <legend>查询结果</legend>
                </fieldset>
                <div id="contentlist">

                </div>
            </div>
        </div>
    </div>
    <script src="./lib/jquery-3.4.1/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="./lib/layui-v2.6.3/layui.js" charset="utf-8"></script>
    <script src="./lib/jq-module/jquery.particleground.min.js" charset="utf-8"></script>
    <script>
        layui.use(['form', 'table', 'layer'], function() {
            var $ = layui.jquery,
                form = layui.form,
                layer = layui.layer,
                table = layui.table;

            $('#queryorder').on('click', function() {
                var type = 1; //$("select[name='type']").val();
                var kw = $("input[name='kw']").val();
                if (!kw) {
                    layer.msg('订单号不能为空');
                    return false;
                }
                var query = 'type=1&kw=' + kw;
                layer.closeAll();
                var ii = layer.load(2, {
                    shade: [0.1, '#fff']
                });
                $.ajax({
                    type: 'GET',
                    url: './inc/order-table.php?' + query,
                    dataType: 'json',
                    cache: false,
                    success: function(data) {
                        layer.close(ii);
                        if (data.code) {
                            $('#contentlist').html(data.data);
                            $('#contentlist').find('.btn-notify').click(function() {
                                var trade_no = $(this).attr('data-trade_no');
                                var ii = layer.load(2, {
                                    shade: [0.1, '#fff']
                                });
                                $.ajax({
                                    type: 'POST',
                                    url: './inc/ajax.php?act=notify',
                                    data: {
                                        trade_no: trade_no
                                    },
                                    dataType: 'json',
                                    success: function(data) {
                                        layer.close(ii);
                                        if (data.code == 0) {
                                            // layer.msg('补单成功');
                                            $('#queryorder').click();
                                            window.open(data.url);
                                        } else {
                                            layer.alert(data.msg);
                                        }
                                    },
                                    error: function(data) {
                                        layer.close(ii);
                                        layer.msg('服务器错误');
                                    }
                                });
                                return false;
                            });
                            layer.msg('查询成功');
                        } else {
                            $('#contentlist').html('');
                            layer.msg('无效订单');
                        }
                        return false;
                    },
                    error: function(data) {
                        layer.close(ii);
                        layer.msg('服务器错误');
                        return false;
                    }
                });
                return false;
            });

            $('.btn-notify').click(function() {
                var trade_no = $(this).attr('data-trade_no');
                var ii = layer.load(2, {
                    shade: [0.1, '#fff']
                });
                $.ajax({
                    type: 'POST',
                    url: './inc/ajax.php?act=notify',
                    data: {
                        trade_no: trade_no
                    },
                    dataType: 'json',
                    success: function(data) {
                        layer.close(ii);
                        $('#queryorder').click();
                        if (data.code == 0) {
                            // layer.msg('补单成功');
                            $('#queryorder').click();
                            window.open(data.url);
                        } else {
                            layer.alert(data.msg);
                        }
                    },
                    error: function(data) {
                        layer.close(ii);
                        layer.msg('服务器错误');
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>