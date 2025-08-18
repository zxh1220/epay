<?php

/**
 * https://docs.shengpay.com/
 */
class ShengPayClient
{
    //接口地址
    private $gatewayUrl = 'https://mchapi.shengpay.com';

    //商户号
    private $mchId;
    
    //商户私钥
    private $mchPrivateKey;

    //盛付通公钥
    private $sdpPublicKey;

    private $signType = 'RSA';

    public function __construct($mchId, $mchPrivateKey, $sdpPublicKey)
    {
        $this->mchId = $mchId;
        $this->mchPrivateKey = $mchPrivateKey;
        $this->sdpPublicKey = $sdpPublicKey;
    }

    //请求API接口并解析返回数据
    public function execute($path, $params)
    {
        $requrl = $this->gatewayUrl . $path;
		$params['mchId'] = $this->mchId;
		$params['nonceStr'] = md5(uniqid(mt_rand(), true) . microtime());
		$params['signType'] = $this->signType;
        $params['sign'] = $this->generateSign($params);
        $response = get_curl($requrl, json_encode($params), 0, 0, 0, 0, 0, ['Content-Type: application/json; charset=utf-8']);
        $result = json_decode($response, true);
		if(isset($result['returnCode']) && $result['returnCode']=='SUCCESS'){
			if($result['resultCode'] == 'SUCCESS'){
				if(isset($result['sign'])){
					if(!$this->verifySign($result)){
						throw new Exception('返回数据验签失败');
					}
				}
				return $result;
			}else{
				throw new Exception('['.$result['errorCode'].']'.$result['errorCodeDes']);
			}
		}elseif(isset($result['returnMsg'])){
			throw new Exception($result['returnMsg']);
		}else{
			throw new Exception('返回数据解析失败');
		}
    }

    //获取待签名字符串
	private function getSignContent($param){
		ksort($param);
		$signstr = '';
	
		foreach($param as $k => $v){
			if($k != "sign" && $v!=='' && $v!==null){
				$signstr .= $k.'='.$v.'&';
			}
		}
		$signstr = substr($signstr,0,-1);
		return $signstr;
	}

    //请求参数签名
	private function generateSign($param){
		return $this->rsaPrivateSign($this->getSignContent($param));
	}

    //验签方法
	public function verifySign($param){
		if(empty($param['sign'])) return false;
		return $this->rsaPubilcSign($this->getSignContent($param), $param['sign']);
	}

	//应用私钥签名
	private function rsaPrivateSign($data){
		$priKey = $this->mchPrivateKey;
        $res = "-----BEGIN RSA PRIVATE KEY-----\n" .
            wordwrap($priKey, 64, "\n", true) .
            "\n-----END RSA PRIVATE KEY-----";
		$pkeyid = openssl_pkey_get_private($res);
		if(!$pkeyid){
			throw new Exception('签名失败，应用私钥不正确');
		}
		openssl_sign($data, $signature, $pkeyid);
		$signature = base64_encode($signature);
		return $signature;
	}

	//平台公钥验签
	private function rsaPubilcSign($data, $signature){
		$pubKey = $this->sdpPublicKey;
        $res = "-----BEGIN PUBLIC KEY-----\n" .
            wordwrap($pubKey, 64, "\n", true) .
            "\n-----END PUBLIC KEY-----";
		$pubkeyid = openssl_pkey_get_public($res);
		if(!$pubkeyid){
			throw new Exception('验签失败，平台公钥不正确');
		}
		$result = openssl_verify($data, base64_decode($signature), $pubkeyid);
		return $result === 1;
	}
}
