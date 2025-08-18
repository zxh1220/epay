<?php
/*
ALTER TABLE `pay_order` ADD `usdtpro` DECIMAL(10,5) NULL; 
*/
class usdtpro_plugin
{
    public static $info = [
        'name'        => 'usdtpro',
        'showname'    => 'USDTPRO V2',
        'author'      => '浪子',
        'link'        => 'https://pay-yzf.top/',
        'types'       => ['usdt','qqpay'],
        'inputs' => [
            'address' => [
                'name' => 'USDT TRC20地址',
                'type' => 'input',
                'note' => '',
            ],
            'rate' => [
                'name' => '汇率 $1 = ￥?',
                'type' => 'input',
                'note' => '',
            ],
            'timeout' => [
                'name' => '超时时间（秒）',
                'type' => 'input',
                'note' => '',
            ],
        ],
        'select' => null,
        'note' => '宝塔定时任务监控<br>任务类型：Shell脚本<br>执行周期：N秒 3秒（这里根据实际情况调节）<br>执行用户：www<br>脚本内容：<br>php /www/wwwroot/网站目录/plugins/usdtpro/monitor.php 通道ID<br>',
        'bindwxmp' => false,
        'bindwxa' => false,
    ];
    public static function submit(){
        global $order, $channel, $DB;
        $unique_usdt = round($order['realmoney'] / $channel['rate'], 5);
        while ($same = $DB->getRow('SELECT * FROM `pre_order` WHERE `channel` = ' . $order['channel'] . ' AND `usdtpro` = ' . $unique_usdt . ' AND UNIX_TIMESTAMP(`addtime`) + ' . ($channel['timeout'] * 3) . ' >= ' . time() . ';')){
            $unique_usdt += 0.00001;
        }
        $DB->query('UPDATE `pre_order` SET `usdtpro` = ' . $unique_usdt . ' WHERE `trade_no` = \'' . $order['trade_no'] . '\'; ');
        return ['type'=>'jump','url'=>'/pay/leader/' . TRADE_NO . '/'];
    }
    public static function leader(){
        global $order, $channel, $cdnpublic;
        $trade_no = $order['trade_no'];
        $address = $channel['address'];
        $usdt = $order['usdtpro'];
        $add_time = strtotime($order['addtime']);
        $timeout_time = $add_time + $channel['timeout'];
        $rest_time = $timeout_time - time();
        if($rest_time <= 0) sysmsg('订单超时');
        require __DIR__ . '/leader.php';
    }
}
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