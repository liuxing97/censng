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
require_once("/web/site.censng.com/app/libs/alipaySDK/AopSdk.php");
class WebTemplateOrder extends Controller
{
    function payByAliPay($order,$muban,$price,$domain = null,$server = null){
        $alipay = new Alipay();
        $aop = $alipay -> aop;
        $request = new AlipayTradePagePayRequest();
        $request->setReturnUrl('https://www.censng.com/order/webtemplate/return');
//        $request->setReturnUrl('http://localhost:83/order/webtemplate/return');
        $request->setNotifyUrl('https://www.censng.com/order/webtemplate/return/post');
        $body = "模板网站编号：{$muban}";
        if($domain){
            $body = $body.";域名注册服务";
        }
        if($server){
            $body = $body.";$server";
        }
        $body = $body."。";
        //$price = 0.01;
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
        $ret = $this->checkValidate($phone,$validate);
        if(!$ret){
            exit();
        }
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
        $returnObj = new Returns();
        $returnObj -> value = $_POST['out_trade_no']." value：".var_export($_POST,true);
        $returnObj -> save();
        $alipayObj = new \App\Http\Controllers\Alipay();
        $result = $alipayObj->check($_POST);
        if($result) {
            //验证成功
            $returnObj = new Returns();
            $returnObj -> value = $_POST['out_trade_no']." rsa2 is true";
            $returnObj -> save();
            //商户订单号
            $out_trade_no = $_POST['out_trade_no'];
            //支付宝交易号
            $trade_no = $_POST['trade_no'];
            //交易金额
            $trade_amount = $_POST['total_amount'];
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
                $returnObj = new Returns();
                $returnObj -> value = $_POST['out_trade_no'].' state is tradeFinished';
                $returnObj -> save();
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                $returnObj = new Returns();
                $returnObj -> value = $_POST['out_trade_no'].' state is success';
                $returnObj -> save();
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知
                $ret = $this -> paySuccess($out_trade_no,$trade_amount,$trade_no);
                //业务处理成功
                if($ret == 'success'){
                    $returnObj = new Returns();
                    $returnObj -> value = $_POST['out_trade_no'].'state change success by notify';
                    $returnObj -> save();
                    echo 'success';
                    return true;
                }
                else if($ret == 'successed'){
                    $returnObj = new Returns();
                    $returnObj -> value = $_POST['out_trade_no'].'state change success by return';
                    $returnObj -> save();
                    echo 'success';
                    return true;
                }
                //业务处理失败
                else{
                    $returnObj = new Returns();
                    $returnObj -> value = $_POST['out_trade_no'].' state change fail'." return = ".$ret;
                    $returnObj -> save();
                    //既然已经收到，先给回复吧
                    echo "success";
                    return false;
                }
            }
        }
        else {
            $returnObj = new Returns();
            $returnObj -> value = $_POST['out_trade_no'].' rsa2 is false';
            $returnObj -> save();
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
        if(!$tOrderObj){
            return $order.'not find';
        }
        //如果已处理
        if($tOrderObj -> outOrder == $aliOrder && $total_amount == $tOrderObj -> addup && $tOrderObj -> paystate = 'success'){
            //返回已处理
            return 'successed';
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