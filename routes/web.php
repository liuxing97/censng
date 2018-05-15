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
    return view('advantage');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/negotiate/success', function () {
    return view('leavMsgSuccess');
});

Route::get('/negotiate/{objtype?}', function ($objtype = null) {

    if(is_mobile()){
        return view('negotiateMobile');
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

Route::get('/msg/leave_msg/{phoneNumber}', function ($phoneNumber) {
    $obj = new \App\Http\Controllers\Message;
    $ret = $obj->leaveMsg($phoneNumber);
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
