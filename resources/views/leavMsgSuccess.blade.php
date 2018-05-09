@extends('base')

@section('myCss')
@endsection
@section('myJs')
@endsection
@section('pageMain')
    <div style="
    line-height: 150px;
    background: rgba(255, 255, 255, 0.15);
    text-align: center;
    padding: 100px;
    color: #BDBDBD;
">
        <div style="
    border-radius: 100px;
    overflow: hidden;
    display: inline-block;">
            <img src="/img/pay_success_70x70.png" />
        </div>
        <div style="
            position: relative;
            top: -27px;
            font-size: 18px;
            color: #000;
            letter-spacing: 6px;
            text-indent: 6px;
">操作成功</div>
        <div>
            感谢您的操作，我们将在1个工作日内与您取得联系！
        </div>
    </div>
    <style>
        .pageMain{
            min-height: 100px;
        }
    </style>
@endsection