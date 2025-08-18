<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USDT支付</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        h1 {
            color: #2c3e50;
            margin: 0;
        }
        .amount {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #e74c3c;
        }
        .timer {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        #timer {
            color: #e74c3c;
        }
        .qr-address-box {
            background-color: #ecf0f1;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .qr-code img {
            max-width: 200px;
            height: auto;
        }
        .address {
            text-align: center;
            word-break: break-all;
            font-size: 1.1em;
            color: #34495e;
            margin-bottom: 15px;
        }
        .address label {
            display: block;
            margin-bottom: 5px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000" width="2000" height="2000" class="logo"><path d="M1000,0c552.26,0,1000,447.74,1000,1000S1552.24,2000,1000,2000,0,1552.38,0,1000,447.68,0,1000,0" fill="#53ae94"/><path d="M1123.42,866.76V718H1463.6V491.34H537.28V718H877.5V866.64C601,879.34,393.1,934.1,393.1,999.7s208,120.36,484.4,133.14v476.5h246V1132.8c276-12.74,483.48-67.46,483.48-133s-207.48-120.26-483.48-133m0,225.64v-0.12c-6.94.44-42.6,2.58-122,2.58-63.48,0-108.14-1.8-123.88-2.62v0.2C633.34,1081.66,451,1039.12,451,988.22S633.36,894.84,877.62,884V1050.1c16,1.1,61.76,3.8,124.92,3.8,75.86,0,114-3.16,121-3.8V884c243.8,10.86,425.72,53.44,425.72,104.16s-182,93.32-425.72,104.18" fill="#fff"/></svg>
            <h1>USDT支付</h1>
        </div>
        <div class="amount">$<?php echo $usdt;?></div>
        <div class="timer">
            请在<span id="timer"><?php echo $rest_time;?></span>秒内支付
        </div>
        <div class="qr-address-box">
            <div class="address">
                <label>TRC20地址</label>
                <div><?php echo $address;?></div>
            </div>
            <div class="qr-code">
                <img src="https://api.pwmqr.com/qrcode/create/?url=<?php echo $address;?>">
            </div>
        </div>
    </div>
    <script src="<?php echo $cdnpublic?>jquery/1.12.4/jquery.min.js"></script>
    <script>
        function check() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/getshop.php',
                data: {trade_no: '<?php echo $trade_no; ?>' },
                success: function (data) {
                    if (data.code == 1) {
                        setTimeout(window.location.href = data.backurl, 1);
                    }else{
                        setTimeout(function () {
                            check();
                        }, 1000);
                    }
                }
            });
        }
        $(function () {
            check();
            setInterval(function () {
                let next = $('#timer').text() - 1;
                if(next == 0) {
                    location.reload();
                }
                $('#timer').text(next);
            }, 1000);
        });
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
    </script>
</body>
</html>