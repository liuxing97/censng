<?php
/**
 * Created by PhpStorm.
 * User: liuxing
 * Date: 2018-06-28
 * Time: 12:12
 */

namespace App\Http\Controllers;
use App\Returns;
use App\Verification;
use App\TemplateOrder;
use AopClient;
use AlipayTradePagePayRequest;
//require_once("\..\..\libs\alipaySDK\AopSdk.php");
//http://openapi.alipay.com/gateway.do?charset=utf-8&charset=utf-8&alipay_sdk=alipay-sdk-php-20161101&biz_content={ "product_code":"FAST_INSTANT_TRADE_PAY", "out_trade_no":"477005909", "subject":"辰象科技模板网站开发购买", "total_amount":"0.01", "body":"模板网站编号：083343;域名注册服务;jingji。", "goods_type":"0", "timeout_express":"1h" }&method=alipay.trade.page.pay&format=json&sign=p7bfhMmzHnLRiM9zs2UQXzsbBanTmNpGJ/dcnhsE8fr06Uj2IWrEi3Hr0ZTcYoIFkz/YHpz+RRODy3xum70CNboZyxN7jWkDWQvECfEtca1YGpkQhaelwSrtk18eHuT76Xrr2oJQZjV8RqFELoj7RQrP52rbuS+w2VKUmkEneuECWnq2ZsTwlGtWC0xhg2GDvlVaPu8FZPAAmDy/LWuKLgSQGw+wgZnuuMIyr1PV5uefBinPZZORP4gFyfCukpmVKqNO8GG3ij8ThqLt7P3g3asAYddJru2OeonAaklebJM47K9coaUNmnDj/k1Ec8vdiO1u/T4qa36emX17pKnVGw==&app_id=2018041502561560&version=1.0&sign_type=RSA2&timestamp=2018-07-01 12:18:52
//TeH47LWm+uvZTzq2HXn91VBgZpsgYXU4w1pnqvdlGp9JuNTRnllZWEqOoCEqjhrnocvQ4jFaTZmIr7Xqckou0NJkV3GTTXLzhuOJSmLPlJ+UIsujDMG+8v7q0sRpOJKuGOPrBkvZQ8E6ZF9f6PlLRdsVIIY86d/19mYXiwxuClGPJviEbd50hxEI6ORF/WZ5qt7p5RuEVJiMH5v6m/iqbJWX1IbZ2ibv6J1cHnJO7wMM/be0cjspuG+XJ0nvh4307bDs/8GH3spZWG6nkssyd2Jc2Sw/v9qv7unA02FKJ5OGXcBquu/R7N4OpkBzCIIxOpeV4EyhZuuA6vL6xlpHSA==


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
        $request->setReturnUrl('https://www.censng.com/order/webtemplate/return');
        $request->setNotifyUrl('https://www.censng.com/order/webtemplate/return/post');
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
        //并写log
        $result = $aop->pageExecute ($request);
        $text = "response: ".var_export($result,true);
        $text=iconv("GBK", "UTF-8//IGNORE", $text);
        file_put_contents ( dirname ( __FILE__ ).DIRECTORY_SEPARATOR."./../../log.txt", date ( "Y-m-d H:i:s" ) . "  " . $text . "\r\n", FILE_APPEND );
        //输出
        echo $result;
        return $request;
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
    //校验异步通知
    function checkNotify(){
        $arr=$_POST;
        $alipayObj = new \App\Http\Controllers\Alipay();
        $result = $alipayObj->check($arr);
        if($result) {//验证成功
            //商户订单号
            $out_trade_no = $_POST['out_trade_no'];
            //支付宝交易号
            $trade_no = $_POST['trade_no'];
            //交易金额
            $trade_amount = $_POST['total_amount'];
            //交易状态
            $trade_status = $_POST['trade_status'];
            //判断订单状态
            if($_POST['trade_status'] == 'TRADE_FINISHED') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
                //业务逻辑
                //因不知道会不会遇到FINISHED通知，则先处理为，遇到则记录数值
                $obj = new Returns();
                $obj -> value = var_export($_POST,true);
                $ret = $obj -> save();
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知
                $ret = $this -> paySuccess($out_trade_no,$trade_amount,$trade_no);
                //业务处理成功
                if($ret == 'success'){
                    echo 'success';
                    return true;
                }
                //业务处理失败
                else{
                    //既然已经收到，先给回复吧
                    echo "success";
                    return false;
                }
            }

        }else {
            //验证失败
            echo "fail";
            return false;
        }
    }
    //检验同步通知
    function checkReturn(){
        $arr=$_GET;
        $alipayObj = new \App\Http\Controllers\Alipay();
        $result = $alipayObj->check($arr);
        if($result) {
            //商户订单号
            $out_trade_no = htmlspecialchars($_GET['out_trade_no']);
            //支付宝交易号
            $trade_no = htmlspecialchars($_GET['trade_no']);
            //交易金额
            $trade_amount = htmlspecialchars($_GET['total_amount']);
            //交易状态
            $trade_status = htmlspecialchars($_POST['trade_status']);
            //验证成功
            $ret = $this -> paySuccess($out_trade_no,$trade_amount,$trade_no);
            if($ret == 'success'){
                return true;
            }else{
                return false;
            }
        }
        else {
            //验证失败
            echo "fail";
            return false;
        }
    }

    /**
     * 支付成功业务逻辑
     * @param $order 业务订单号
     * @param $total_amount 支付成功的返回价格
     * @param $aliOrder 支付宝订单号
     * @return string 已经更新false,更新成功,true
     */
    function paySuccess($order,$total_amount,$aliOrder){
        $tOrderObj = new TemplateOrder();
        $tOrderObj = $tOrderObj ->where('order',$order)->first();
        //如果已处理
        if($tOrderObj -> outOrder == $aliOrder && $total_amount == $tOrderObj -> addup && $tOrderObj -> paystate = 'success'){
            //返回已处理
            return 'success';
        }else{
            //更新支付宝订单号
            $tOrderObj -> outOrder = $aliOrder;
            //更新支付状态
            $tOrderObj -> paystate = 'success';
            //如果价格不一致
            if(!$total_amount == $tOrderObj -> addup){
                //通知消息
                //如果通知成功返回true
                return 'price has wrong';
            }
            //更新
            $ret = $tOrderObj -> save();
            //更新成功
            if($ret){
                return 'success';
            }
            //通知消息
            //如果通知成功返回true
            return 'update SQL not Success';
        }
    }
}