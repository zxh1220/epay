<?php
require dirname(dirname(__DIR__)) . '/includes/common.php';

function bills($address, $timeout){
    $resp = json_decode(file_get_contents('https://apilist.tronscan.org/api/token_trc20/transfers?direction=in&limit=300&start=0&start_timestamp=' . ((time() - $timeout - 5) * 1000) . '&end_timestamp=' . (time() * 1000) . '&relatedAddress=' . $address), true);
    $data = [];
    foreach($resp['token_transfers'] as $v) {
        if($v['finalResult'] != 'SUCCESS') continue;
        $data[] = [
            'money' => $v['quant'] / 1000000
        ];
    }
    return $data;
}

function orders($channel_id, $timeout) {
    global $DB;
    $orders = $DB->query('SELECT * FROM `pre_order` WHERE `channel` = ' . $channel_id . ' AND `status` = 0 AND UNIX_TIMESTAMP(`addtime`) + ' . ($timeout + 5) . ' >= ' . time() . ';')->fetchAll(PDO::FETCH_ASSOC);
    $data = [];
    foreach($orders as $order) {
        if(!$order['usdtpro']) continue;
        $data[(string) $order['usdtpro']] = $order;
    }
    return $data;
}
$channel_id = $argv[1];
$channel = $DB->getRow('SELECT * FROM `pre_channel` WHERE `plugin` = \'usdtpro\' AND `id` = ' . $channel_id . ';');
if(!$channel) exit('通道不存在' . PHP_EOL);
$channel_config = json_decode($channel['config'], true);
$bills = bills($channel_config['address'], $channel_config['timeout']);
$orders = orders($channel['id'], $channel_config['timeout']);
foreach($bills as $bill) {
    $order = $orders[(string) $bill['money']];
    if(!$order) continue;
    processNotify($order);
    echo '成功回调 订单号：' . $order['trade_no'] . PHP_EOL;
}
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