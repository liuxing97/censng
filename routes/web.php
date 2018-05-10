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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======

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

    return view('negotiate',[
        'objtype'=>$objtype
    ]);
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
>>>>>>> a996f82fb276e04365df7b37ba916d31d011df47
