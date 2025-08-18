<?php

/**
 * 订单列表
 * $tmp['id'] = $res['id'];
$tmp['trade_no'] = $res['trade_no'].'<br/>'.$res['out_trade_no'];
$tmp['name'] = $res['name'];
$tmp['money'] = '￥<b>'.$res['money'].'</b>';
$tmp['channel'] = '<b><img src="/assets/icon/'.$paytypes[$res['type']].'.ico" width="16" onerror="this.style.display=\'none\'">'.$paytype[$res['type']].'</b>';
$tmp['addtime'] = $res['addtime'];
$tmp['status']
 **/

include("../../includes/common.php");
function display_status($status, $notify)
{
    if ($status == 1)
        $msg = '<font color=green>已支付</font>';
    elseif ($status == 2)
        $msg = '<font color=red>已退款</font>';
    elseif ($status == 3)
        $msg = '<font color=red>已冻结</font>';
    else
        $msg = '<font color=blue>未支付</font>';
    if ($notify == 0 && $status > 0)
        $msg .= '<br/><font color=green>通知成功</font>';
    elseif ($status > 0)
        $msg .= '<br/><font color=red>通知失败</font>';
    return $msg;
}

$sql = " 1=1 ";

$links = '';

$con = '';
if (isset($_GET['kw']) && !empty($_GET['kw'])) {
    $kw = daddslashes($_GET['kw']);

    if ($_GET['type'] == 1) {
        $sql .= " AND A.`trade_no`='{$kw}'";
    } elseif ($_GET['type'] == 2) {
        $sql .= " AND A.`out_trade_no`='{$kw}'";
    } elseif ($_GET['type'] == 3) {
        $sql .= " AND A.`name` like '%{$kw}%'";
    } elseif ($_GET['type'] == 4) {
        $sql .= " AND A.`money`='{$kw}'";
    } elseif ($_GET['type'] == 5) {
        $sql .= " AND A.`realmoney`='{$kw}'";
    } elseif ($_GET['type'] == 6) {
        $kws = explode('>', $kw);
        $sql .= " AND A.`addtime`>='{$kws[0]}' AND A.`addtime`<='{$kws[1]}'";
    }

    if (empty($sql) || !$sql || $sql == " 1=1 ") {
        $sql = " 1 = 0 ";
    }
    $numrows = $DB->getColumn("SELECT count(*) from pre_order A WHERE{$sql}");
    $con = '包含 ' . $_GET['value'] . ' 的共有 <b>' . $numrows . '</b> 条订单';
} else {
    if (empty($sql) || !$sql || $sql == " 1=1 ") {
        $sql = " 1 = 0 ";
    }
    $numrows = $DB->getColumn("SELECT count(*) from pre_order A WHERE{$sql}");
    $con = '共有 <b>' . $numrows . '</b> 条订单';
}

if (empty($sql) || !$sql || $sql == " 1=1 ") {
    $sql = " 1 = 0 ";
}
$paytype = [];
$paytypes = [];
$rs = $DB->getAll("SELECT * FROM pre_type WHERE status=1");
foreach ($rs as $row) {
    $paytype[$row['id']] = $row['showname'];
    $paytypes[$row['id']] = $row['name'];
}
unset($rs);

$datalist = [];
$rs = $DB->query("SELECT A.*,B.plugin FROM pre_order A LEFT JOIN pre_channel B ON A.channel=B.id WHERE{$sql} order by trade_no desc ");
$kidx = 1;
while ($res = $rs->fetch()) {
    $tmp = [];
    $tmp['id'] = $kidx;
    $tmp['trade_no'] = $res['trade_no'] . '<br/>' . $res['out_trade_no'];
    $tmp['trade_no2'] = $res['trade_no'];
    $tmp['name'] = $res['name'];
    $notify_url = explode('/', $res['notify_url']);
    $notify_url2 = '-';
    if (count($notify_url) == 1) {
        $notify_url2 = $notify_url[0];
    } else if (count($notify_url) <= 2) {
        $notify_url2 = $notify_url[0] . '/' . $notify_url[1] . '/';
    } else if (count($notify_url) >= 3) {
        $notify_url2 = $notify_url[0] . '/' . $notify_url[1] . '/' . $notify_url[2];
    }
    $tmp['notify_url'] = '<a href="' . $notify_url2 . '" target="_blank">' . $notify_url2 . '</a>';
    $tmp['money'] = '￥<b>' . $res['money'] . '</b>';
    $tmp['channel'] = '<b><img src="/assets/icon/' . $paytypes[$res['type']] . '.ico" width="16" onerror="this.style.display=\'none\'">' . $paytype[$res['type']] . '</b>';
    $tmp['addtime'] = $res['addtime'] . '<br/>' . $res['endtime'];
    $tmp['status'] = display_status($res['status'], $res['notify']);
    $qq = '-';

    $rs22 = $DB->query("SELECT * from pre_user WHERE uid={$res['uid']} ")->fetch();
    if ($rs22 && $rs22['qq']) {
        $qq = $rs22['qq'];
    }
    $tmp['qq'] = $qq;
    $datalist[] = $tmp;
    $kidx = $kidx + 1;
}

$resstr = '';
if ($datalist) {
    foreach ($datalist as $item) {
        $tmpstr = '<div class="ccrow">
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >19位系统订单号：<br>17位商户订单号：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['trade_no'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >购买地址：<br>(如有后缀,自行添加,如/ds或/buy)</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['notify_url'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >客服QQ/VX：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['qq'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >商品名称：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['name'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >商品金额：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['money'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >支付方式：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['channel'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >创建时间/完成时间：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['addtime'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >状态：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">' . $tmp['status'] . '</div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-row controw">
                        <div class="layui-col-xs6 layui-col-md4 conttitle" >操作：</div>
                        <div class="layui-col-xs6 layui-col-md8 cont1">
                            <a  class="layui-btn layui-btn-xs layui-btn-danger  btn-notify" data-trade_no="' . $tmp['trade_no2'] . '">补单</a>

                        </div>
                    </div>
                </div>
            </div>';
        $resstr .= $tmpstr;
    }
}

$data = [];
$data['code'] = 1;
$data['msg'] = 'success';
$data['count'] = count($datalist);
$data['data'] = $resstr;
if (!$datalist || !$resstr) {
    $data['code'] = 0;
}
echo json_encode($data, 320);
die;
