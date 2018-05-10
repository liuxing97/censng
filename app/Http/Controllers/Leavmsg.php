<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leavmsg as MLeavmsg;
use App\Verification;
use Illuminate\Support\Facades\DB;

class Leavmsg extends Controller
{
    /**储存留言信息
        //phone:phoneState,
        //name:nameState,
        //post:postState,
        //codeNum:codeState,
        //sex:sex,
        //serverType:serverType
     */
    function save($phone,$name,$post,$codeNum,$sex,$serverType){
        try{
            DB::beginTransaction();
            //验证验证码
            $mVerification = new Verification();
            $mVer = $mVerification
                ->where('phone',$phone)
                ->where('type','leave_msg')
                ->where('code',$codeNum)
                ->where('deadline_at','>',time())
                ->where('used',0)
                ->first();
            if(!$mVer){
                //验证码不正确
                $ret = [
                    'code' => 400,
                    'msg' => '验证码错误',
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
                        'msg' => '验证码使用错误',
                        'time' => time()
                    ];
                    $ret = json_encode($ret);
                    echo $ret;
                    return false;
                }
            }
            //保存到数据库
            $mLeavmsg = new MLeavmsg();
            $mLeavmsg -> type = $serverType;
            $mLeavmsg -> phone = $phone;
            $mLeavmsg -> contact = $name;
            $mLeavmsg -> post = $post;
            $mLeavmsg -> sex = $sex;
            $ret = $mLeavmsg -> save();
            if($ret){
                DB::commit();
                //成功记录
                $ret = [
                    'code' => 200,
                    'msg' => '请求成功',
                    'time' => time()
                ];
            }else{
                //记录失败
                $ret = [
                    'code' => 401,
                    'msg' => '记录失败',
                    'time' => time()
                ];
                $ret = json_encode($ret);
                echo $ret;
                return false;
            }
        }catch (\Exception $e){
            DB::rollBack();
            print_r($e -> getMessage());
        }
        $ret = json_encode($ret);
        echo $ret;
        return true;
    }
}
