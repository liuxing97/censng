<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Qcloud\Sms\SmsSingleSender;
use App\Verification;

class Message extends Controller
{
    public $appid = "1400082818";
    public $appkey = "d86441379bbdc12c5461cdc163aff6bb";
    /**
     * 单发验证码
     */
    public function leaveMsg($phoneNumber){
        try {
            DB::beginTransaction();
            //查询是否已存在
            $verification = new Verification();
            $verRet = $verification -> where('phone',$phoneNumber)->where('deadline_at','>',time())->where('used','0')->first();
            if($verRet){
                //已经发送过二维码了,继续发送就行了
                $number = $verRet -> code;
            }else{
                //生成随机验证码，并保存至数据库
                $number = rand(100000,999999);
                $verification = new Verification();
                $verification -> phone = $phoneNumber;
                $verification ->type = 'leave_msg';
                $verification ->code = $number;
                $verification ->deadline_at = time()+60*15;
                $ret = $verification -> save();
                if(!$ret){
                    throw new \Exception("sql is error");
                }
            }
            //发送短信
//            $sender = new SmsSingleSender($this->appid, $this->appkey);
//            $result = $sender->send(0, "86", $phoneNumber,
//                "验证码：".$number."，辰象客户，您正在使用短信验证服务，进行业务登记操作[如未操作，请忽略该条短信，非常抱歉给您带来不便]",
//                "",
//                "");
//            $rsp = json_decode($result);
            DB::commit();
            //返回结果
//            echo $result;
        }catch(\Exception $e) {
            DB::rollBack();
            echo ($e->getMessage());
        }
    }
}
