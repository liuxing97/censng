<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;


function is_mobile()
{
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $is_pc = (strpos($agent, 'windows nt')) ? true : false;
    $is_mac = (strpos($agent, 'mac os')) ? true : false;
    $is_iphone = (strpos($agent, 'iphone')) ? true : false;
    $is_android = (strpos($agent, 'android')) ? true : false;
    $is_ipad = (strpos($agent, 'ipad')) ? true : false;

    if($is_iphone){
        return  true;
    }
    if($is_android){
        return  true;
    }
    if($is_ipad){
        return  true;
    }
    if($is_pc){
        return  false;
    }
    if($is_mac){
        return  false;
    }
}
Route::get('/', function () {
//    return 1;
    return view('homepage');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/serverscope', function () {
    return view('serverscope');
});
Route::get('/advantage', function () {
    if(is_mobile()){

    }
    return view('advantage',[
        'isMobile' => is_mobile()
    ]);
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/priceList', function () {
    return view('priceList');
});
Route::get('/negotiate/success', function () {
    return view('leavMsgSuccess');
});
Route::get('/negotiate/{objtype?}', function ($objtype = null) {
    if(is_mobile()){
        return view('negotiate',[
            'objtype'=>$objtype
        ]);
    }
    else{
        return view('negotiate',[
            'objtype'=>$objtype
        ]);
    }
});
Route::get('/negotiateMobile', function () {
    return view('negotiateMobile');
});
Route::get('/template', function () {
    return view('templates');
});
Route::get('/template/buy/{number}', function ($number = null) {
    return view('templateBuy',['number'=>$number]);
});
Route::get('/msg/leave_msg/{phoneNumber}', function ($phoneNumber) {
    $obj = new \App\Http\Controllers\Message;
    $ret = $obj->leaveMsg($phoneNumber);
});
Route::get('/msg/buy/web_template/{phoneNumber}', function ($phoneNumber) {
    $obj = new \App\Http\Controllers\Message;
    $ret = $obj->webTemplateBuy($phoneNumber);
});
Route::post('/act_negotiate', function () {
    $obj = new \App\Http\Controllers\Leavmsg();
    $phone = \Illuminate\Support\Facades\Input::get('phone');
    $name = \Illuminate\Support\Facades\Input::get('name');
    $post = \Illuminate\Support\Facades\Input::get('post');
    $codeNum = \Illuminate\Support\Facades\Input::get('codeNum');
    $sex = \Illuminate\Support\Facades\Input::get('sex');
    $serverType = \Illuminate\Support\Facades\Input::get('serverType');
    $ret = $obj->save($phone,$name,$post,$codeNum,$sex,$serverType);
});
Route::post('/buy/order/webtemplate',function (){
    $temNum = \Illuminate\Support\Facades\Input::get('temNum');
    $name = \Illuminate\Support\Facades\Input::get('name');
    $phone = \Illuminate\Support\Facades\Input::get('phone');
    $buyType = \Illuminate\Support\Facades\Input::get('buyType');
    $enterpriseName = \Illuminate\Support\Facades\Input::get('enterpriseName');
    $enterpriseAdd = \Illuminate\Support\Facades\Input::get('enterpriseAdd');
    $validate = \Illuminate\Support\Facades\Input::get('validate');
    $payType = \Illuminate\Support\Facades\Input::get('payType');
    $domain = \Illuminate\Support\Facades\Input::get('domain');
    $server = \Illuminate\Support\Facades\Input::get('server');
    $addPrice = \Illuminate\Support\Facades\Input::get('addPrice');
    //进行验证码验证并提交订单
    $orderObj = new \App\Http\Controllers\WebTemplateOrder();
    $ret = $orderObj -> saveOrderInfor($temNum,$name,$phone,$buyType,$enterpriseName,$enterpriseAdd,$validate,$payType,$domain,$server,$addPrice);
//    return json_encode($ret);
});
Route::get('/return',function (){
    $ret = 123;
    $obj = new \App\Returns();
    $obj -> value = $ret;
    $obj -> save();
    $ret = var_export($_POST,true);
    $obj = new \App\Returns();
    $obj -> value = $ret;
    $obj -> save();
    $ret = var_export($_GET,true);
    $obj = new \App\Returns();
    $obj -> value = $ret;
    $obj -> save();
});
Route::group(['prefix'=>'order'],function(){
    Route::get('success',function (){
        return view('order/success');
    });
    Route::post('webtemplate/return/post',function (){
        $obj = new \App\Http\Controllers\WebTemplateOrder();
        $ret = $obj -> checkNotify();
        if($ret){
            //支付成功，不返回任何页面
            return;
        }else{
            //存在错误，调用逻辑处理并记录日志
            return;
        }
    });
    Route::get('webtemplate/return',function (){
        $obj = new \App\Http\Controllers\WebTemplateOrder();
        $ret = $obj -> checkReturn();
        if($ret){
            echo "支付成功";
            //支付成功页面
//        return view();
        }else{
            echo "遇到错误";
            //错误页面，存在错误
//        return view();
        }
    });
    Route::post('/webtemplate/contract/step=post',function (){
        $name = \Illuminate\Support\Facades\Input::get('name');
        $company = \Illuminate\Support\Facades\Input::get('company');
        $post = \Illuminate\Support\Facades\Input::get('post');
        $nickname = \Illuminate\Support\Facades\Input::get('nickname');
        $more = \Illuminate\Support\Facades\Input::get('more');
        $data = [
            'name' => $name,
            'company' => $company,
            'post' => $post,
            'nickname' => $nickname,
            'more' => $more,
        ];
        $noticeObj = new \App\Notice();
        $noticeObj -> type = 'template/web/order/contract';
        $noticeObj -> describe = json_encode($data,true);
        $ret = $noticeObj -> save();
        if($ret){
            $ret = [
                'msg' => '数据库保存成功',
                'state' => 'success',
                'time' => time()
            ];
        }else{
            $ret = [
                'msg' => '数据库保存失败',
                'state' => 'fail',
                'time' => time()
            ];
        }
//        echo json_encode($ret);
        return $ret;
    });
    Route::post('/webtemplate/customized/step=post',function (){
        $name = \Illuminate\Support\Facades\Input::get('name');
        $company = \Illuminate\Support\Facades\Input::get('company');
        $post = \Illuminate\Support\Facades\Input::get('post');
        $nickname = \Illuminate\Support\Facades\Input::get('nickname');
        $more = \Illuminate\Support\Facades\Input::get('more');
        $data = [
            'name' => $name,
            'company' => $company,
            'post' => $post,
            'nickname' => $nickname,
            'more' => $more,
        ];
        $noticeObj = new \App\Notice();
        $noticeObj -> type = 'template/web/order/customized';
        $noticeObj -> describe = json_encode($data,true);
        $ret = $noticeObj -> save();
        if($ret){
            $ret = [
                'msg' => '数据库保存成功',
                'state' => 'success',
                'time' => time()
            ];
        }else{
            $ret = [
                'msg' => '数据库保存失败',
                'state' => 'fail',
                'time' => time()
            ];
        }
//        echo json_encode($ret);
        return $ret;
    });
    Route::post('/consult',function (){
        $name = \Illuminate\Support\Facades\Input::get('name');
        $company = \Illuminate\Support\Facades\Input::get('company');
        $post = \Illuminate\Support\Facades\Input::get('post');
        $nickname = \Illuminate\Support\Facades\Input::get('nickname');
        $describe = \Illuminate\Support\Facades\Input::get('describe');
        $data = [
            'name' => $name,
            'company' => $company,
            'post' => $post,
            'nickname' => $nickname,
            'describe' => $describe,
        ];
        $noticeObj = new \App\Notice();
        $noticeObj -> type = 'consult';
        $noticeObj -> describe = json_encode($data,true);
        $ret = $noticeObj -> save();
        if($ret){
            $ret = [
                'msg' => '数据库保存成功',
                'state' => 'success',
                'time' => time()
            ];
        }else{
            $ret = [
                'msg' => '数据库保存失败',
                'state' => 'fail',
                'time' => time()
            ];
        }
//        echo json_encode($ret);
        return $ret;
    });
});
Route::group(['prefix'=>'webtemplate'],function(){
    Route::get('contract',function (){
        return view('contract');
    });
    Route::get('contract/{templateNum}',function ($templateNum){
        return view('contract',[
            'templateNum'=>$templateNum
        ]);
    });
    Route::get('return',function (){
        //查询是否支付成功
        if(1){
//        跳转到支付成功页面
        }
        else{
            //跳转到支付异常页面
        }
    });
    Route::get('customized/{templateNum}',function ($templateNum){
        return view('webTemplateCustomized',[
            'templateNum'=>$templateNum
        ]);
    });
});
Route::get('/huodong',function (){
    return view('huodong');
});