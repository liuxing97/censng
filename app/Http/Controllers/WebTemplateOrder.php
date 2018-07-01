<?php
/**
 * Created by PhpStorm.
 * User: liuxing
 * Date: 2018-06-28
 * Time: 12:12
 */

namespace App\Http\Controllers;
use App\Verification;
use App\TemplateOrder;
use AopClient;
use AlipayTradePagePayRequest;
//require_once("\..\..\libs\alipaySDK\AopSdk.php");
require_once("/web/site.censng.com/app/libs/alipaySDK/AopSdk.php");
class WebTemplateOrder extends Controller
{
    function payByAliPay($order,$muban,$price,$domain = null,$server = null){
        $aop = new AopClient ();
        $aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
        $aop->appId = '2018041502561560';
        $aop->rsaPrivateKey = 'MIIEpAIBAAKCAQEAxzByOGz0HQuVfVxEAB/riAg8We2WZJkEAfC03vofSK7qG6XT37LdR6oAJFbV9qnN3YjBZNx6iwQaOBL6fbpq7kH6hQHZchax3v2Yb2xmW406J+MYrx/yRil7X4oSjY215RxR9kCrJcQMiYGT6V0J4N0FOM5We0Dzxu18R8LakyL4Hww2Z5B9hzk5Or74cxPPJl0rN1qTyfGtek4/J0RLkPSE0YZ97DOtqtQ8GvSxzw7442CzdD4aSEYBYGsOhvMpXk2s92IW+NtNPjWu8wiDavH17MAFon08DDidE+Lsvi42+KfCTzBCga2yu0v5bcoSQ0jBHQ8SnZ25wYXk6zJtBQIDAQABAoIBAQCOisHCVV3gBzEkM8nJ2Q3hHBusMxSjysiOZuXYh1+p0NphjKrxc3tc1HAjkSyuxtc2iK308r6TCw2EQTiWjrgE5pxTYH5uYYVKUWormoQpUghjEOXSNOdYhEjwlssuF1IqsbiJo7+WWBSstljV8CmojCI3g5lpvJJ3Me31IKDwFxnnM+xZqiauZDizVc0bDyJjEaZW0yP6/Iu8WzygIxsrB7Zwv1FGYvBqkj8a/OtIhRkgZ0lambpjNecctB0shDeS0bBOdmYMqmiPzIA0Y9KYn5GXIXn+7+tvC0LSw3bAAhp3NcgSlu1EMrAKi8fqEGoqYzNZb8UQguAA1E9oDgClAoGBAP1e+u5Di/HDT2L+s7CCrzaa/RzzbGChDq7dq2nY/4RUBOtkvzbcQoTJfFPWHOtzX26uoWN9P9+hHQxRJzWN8gHtSC++PwYRq/avmFX4xbQEHcONEfJ0U16a3wdkfVpY13vnBFyZXspIFvTfN6rHh9YzFVAARN2VwHVTF9zHxljLAoGBAMlBi4RtUrzVp3oV/szmHPudpQ4MxPH9Ubj47Hl2upPLx/TzgH8g5++S348oMNy2w8maruqOhCYieOVTJtHYiPTg/E0/TSBxc+E2uI2LPVc9jO8z3o/7anyTZBwH0tJbPytKDm6nnXjtrVxK4LG5B2KGdUuLFwRYL+KLhakXoSdvAoGBANER1MFSn2GJJjKrtR5LV8UZMw72llFN1M3aQB2BX6aTpdOPOHFOYt0rXRnYrdhjRTYRhz6PFWu0iEGnnVEFpdKNN2md9GdPobRWxL78HjcixmScPVjxP/HqnWp+Mymf8X9d6y11qNAFmFvK7SZQqvfHAykWb7zgWwT04dXeSv7tAoGAMqEpnxP9l4HMUxtLcXKGYgpDpqgxt4r5zyXYH6ptv5apZAcKEXFOx+dUFGiQ+kWENaiTTnCx8AIGFfL4NhxaP/iFoE1Hctz3wPWKMhmQQe07EkYjPGeMX3CY47BYKhFIb/R+cvn51J0+WpR/uFYK9I9M3MdN8ArbaQuegW5vXUMCgYAewAe0IeSPouXve92r18DFGgDsVZVP1C6R9DiDtCgSfmP9zGRFe15TUExMvyR2EzQaxpSqLPadSMsGGqGyFdOJgtBTx4z3c1JTqHLuINqWkdS8vl4JNLRophKE2xen9s3UnkJ+4HBP0HwFEJv2KFOGBZRO4usEL9pBJ7Frt69lAA==';
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset= 'utf-8';
        $aop->format='json';
        $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxzByOGz0HQuVfVxEAB/riAg8We2WZJkEAfC03vofSK7qG6XT37LdR6oAJFbV9qnN3YjBZNx6iwQaOBL6fbpq7kH6hQHZchax3v2Yb2xmW406J+MYrx/yRil7X4oSjY215RxR9kCrJcQMiYGT6V0J4N0FOM5We0Dzxu18R8LakyL4Hww2Z5B9hzk5Or74cxPPJl0rN1qTyfGtek4/J0RLkPSE0YZ97DOtqtQ8GvSxzw7442CzdD4aSEYBYGsOhvMpXk2s92IW+NtNPjWu8wiDavH17MAFon08DDidE+Lsvi42+KfCTzBCga2yu0v5bcoSQ0jBHQ8SnZ25wYXk6zJtBQIDAQAB';
        $request = new AlipayTradePagePayRequest();
        $request->setReturnUrl('');
        $request->setNotifyUrl('');
        $body = "模板网站编号：{$muban}";
        if($domain){
            $body = $body.";域名注册服务";
        }
        if($server){
            $body = $body.";$server";
        }
        $body = $body."。";
        $price = 0.01;
        $request->setBizContent('{
            "product_code":"FAST_INSTANT_TRADE_PAY",
            "out_trade_no":"'.$order.'",
            "subject":"辰象科技模板网站开发购买",
            "total_amount":"'.$price.'",
            "body":"'.$body.'",
            "goods_type":"0",
            "timeout_express":"1h"
        }');
        //请求
        $result = $aop->pageExecute ($request);
        //输出
        echo $result;
//        var_dump($result);
    }
//检验验证码
function checkValidate($phone,$code){
    $mVerification = new Verification();
    $mVer = $mVerification
        ->where('phone',$phone)
        ->where('type','web_template_msg')
        ->where('code',$code)
        ->where('deadline_at','>',time())
        ->where('used',0)
        ->first();
    if(!$mVer){
        //验证码不正确
        $ret = [
            'code' => 400,
            'msg' => '验证码错误400',
            'time' => time()
        ];
        $ret = json_encode($ret);
        echo $ret;
        return false;
    }else{
        $mVer -> used = 1;
        $ret = $mVer -> save();
        if(!$ret){
            $ret = [
                'code' => 403,
                'msg' => '验证码使用错误403',
                'time' => time()
            ];
            $ret = json_encode($ret);
            echo $ret;
            return false;
        }
        $ret = [
            'code' => 200,
            'msg' => '验证码正确',
            'time' => time()
        ];
        $ret = json_encode($ret);
//        var_dump($ret);
        return true;
    }
}
//保存订单信息
function saveOrderInfor($temNum,$name,$phone,$buyType,$enterpriseName,$enterpriseAdd,$validate,$payType,$domain,$server,$addPrice){
    ob_start();
    //验证验证码
//    $ret = $this->checkValidate($phone,$validate);
//    if(!$ret){
//        exit();
//    }
    ob_clean();
    ob_end_flush();
    //写入订单
    $order = rand(99999999,999999999);
    $mtempOrder = new TemplateOrder();
    $mtempOrder -> type = 'web';
    $mtempOrder -> order = $order;
    $mtempOrder -> tempNum = $temNum;
    $mtempOrder -> contact = $name;
    $mtempOrder -> phone = $phone;
    $mtempOrder -> buyType = $buyType;
    $mtempOrder -> enterprise = $enterpriseName;
    $mtempOrder -> address = $enterpriseAdd;
    $mtempOrder -> payType = $payType;
    $mtempOrder -> domain = $domain;
    $mtempOrder -> server = $server;
    $mtempOrder -> addup = $addPrice;
    $ret = $mtempOrder -> save();
    if($ret){
        //根据付款方式，调用订单页面接口
        $ret = $this->payByAliPay($order,$temNum,$addPrice,$domain,$server);
//        var_dump($ret);
//        return json_encode([
//            'code' => 200,
//            'msg' => '订单生成Success',
//            'time' => time()
//        ]);
    }else{
        return json_encode([
            'code' => 201,
            'msg' => '订单写入Fail',
            'time' => time()
        ]);
    }
}
}