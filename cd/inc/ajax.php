<?php
include("../../includes/common.php");
$act = isset($_GET['act']) ? daddslashes($_GET['act']) : null;
ini_set('display_errors'  , 1);
/** @var \lib\PdoHelper $DB */
/** @var array $userrow */
/** @var array $conf */
if (!checkRefererHost()) exit('{"code":403}');


@header('Content-Type: application/json; charset=UTF-8');
switch ($act) {
    case 'notify':
        $trade_no = daddslashes(trim($_POST['trade_no']));
        $row = $DB->getRow("select * from pre_order where trade_no='$trade_no' limit 1"); //AND uid=$uid
        if (!$row)
            exit('{"code":-1,"msg":"当前订单不存在！"}');
        if ($row['status'] == 0) exit('{"code":-1,"msg":"订单尚未支付，无法重新通知！"}');
        $url = creat_callback_user($row, $userrow['key']);
        if ($row['notify'] > 0)
            $DB->exec("update pre_order set notify=0 where trade_no='$trade_no'");
        exit('{"code":0,"url":"' . ($_POST['isreturn'] == 1 ? $url['return'] : $url['notify']) . '"}');
    case 'resultQuery':
        $orderid = daddslashes($_GET['queryID']);
        $block = $DB->getRow("select * from pre_workorder where orderid='$orderid' AND block=2 limit 1");
        if ($block) {
            exit('{"code":-2,"msg":"当前订单存在拉黑，无法查询！"}');
        }
        $sql = "SELECT * FROM pre_workorder WHERE orderid='{$orderid}'";
        $rs = $DB->query($sql);
        $data = array();
        while ($res = $rs->fetch()) {
            $data[] = array(
                'id' => $res['id'],
                'orderid' => $res['orderid'],
                'qq' => $res['qq'],
                'phone' => $res['phone'],
                'content' => $res['content'],
                'reply' => $res['reply'],
                'addtime' => $res['addtime'],
                'status' => $res['status']
            );
        }
        if ($data) {
            exit(json_encode(['code' => 0, 'msg' => '查询成功！', 'data' => $data]));
        } else {
            exit(json_encode(['code' => -1, 'msg' => '查询失败！' . $DB->error()]));
        }
        break;
    case 'workOrder':
        $qq = daddslashes($_POST['qq']);
        $phone = daddslashes($_POST['phone']);
        $appeal = daddslashes(strip_tags($_POST['appeal']));
        $orderid = daddslashes($_POST['orderID']);

        if (!preg_match('/\d{5,11}/', $qq)) {
            exit(json_encode(['code' => -5, 'msg' => 'QQ号码格式不正确！']));
        } else if (!preg_match('/^1[3456789]\d{9}$/', $phone)) {
            exit(json_encode(['code' => -6, 'msg' => '手机号码格式不正确！']));
        } else if (empty($appeal)) {
            exit(json_encode(['code' => -7, 'msg' => '申诉内容不能为空！']));
        } else if (empty($orderid) || strlen($orderid) <= 18) {
            exit(json_encode(['code' => -8, 'msg' => '订单号不能为空！']));
        }


        $orderRow = $DB->find('order', '*' ,['trade_no' => $orderid]);
        if (!$orderRow) {
            exit(json_encode(['code' => -1, 'msg' => '交易单号不存在']));
        }
        if (($workerOrder = $DB->find('workorder', '*', ['orderid' => $orderid])) && $workerOrder['block'] == 2) {
            exit(json_encode(['code' => -2, 'msg' => '当前订单存在拉黑，无法申请！']));
        }
        if (!empty($workerOrder)) {
            if ($workerOrder['status'] == 2) {
                exit(json_encode(['code' => -3, 'msg' => '当前订单存在投诉，且客服并未回复！请耐心等待']));
            } else {
                $DB->update('workorder', [
                    'qq' => $qq,
                    'phone' => $phone,
                    'status' => 2,
                    'reply'  => '',
                    'content' => $appeal,
                ], [
                    'id' => $workerOrder['id']
                    ]
                );
                exit(json_encode(['code' => 0, 'msg' => '投诉再次申请成功！']));
            }
        } else {
            $DB->insert('workorder' , [
                'orderid' => $orderid,
                'qq' => $qq,
                'phone' => $phone,
                'content' => $appeal,
                'status' => 2,
                'reply' => '',
                'addtime' => date('Y-m-d H:i:s'),
                'uid'   => $orderRow['uid']
            ]);
            exit(json_encode(['code' => 0, 'msg' => '投诉申请成功！']));
        }
        break;
    case 'captcha':
        $GtSdk = new \lib\GeetestLib('61db9c9a686fcf1f2a2788540c7909d7', 'ad5ba31bdb65afaf304555ae4decf312');
        $data = array(
            'user_id' => isset($uid) ? $uid : 'public', # 网站用户id
            'client_type' => "web", # web:电脑上的浏览器；h5:手机上的浏览器，包括移动应用内完全内置的web_view；native：通过原生SDK植入APP应用的方式
            'ip_address' => $clientip # 请在此处传输用户请求验证时所携带的IP
        );
        $status = $GtSdk->pre_process($data, 1);
        $_SESSION['gtserver'] = $status;
        echo $GtSdk->get_response_str();
        break;
    default:
        exit('{"code":-4,"msg":"No Act"}');
}
