@extends('base')

@section('myCss')
    <link href="css/advantage.css" type="text/css" rel="stylesheet" />
@endsection

@section('pageMain')
    {{--订单支付成功--}}
    <div class="orderSuccess">
        {{--订单编号等--}}
        <div class="orderInfor">
            {{--支付状态--}}
            <div class="payState">
                <div class="icon"><img src="/img/pay_success_70x70.png" /></div>
                <div class="value">支付成功</div>
            </div>
            {{--订单编号--}}
            <div class="orderNum infor-item"><span class="t">订单编号：</span><span class="v">3543523453</span></div>
            {{--支付状态--}}
            <div class="infor-item"><span class="t">订单状态：</span><span class="v">付款成功</span></div>
            {{--下单时间--}}
            <div class="infor-item"><span class="t">下单时间：</span><span class="v">{{time()}}</span></div>
            {{--支付时间--}}
            <div class="infor-item"><span class="t">支付时间：</span><span class="v">{{time()}}</span></div>
        </div>
        {{--订单详细信息--}}
        <div class="orderDetails">
            {{--提示--}}
            <div class="theNext">订单已经支付，我们将于24小时内与您联系</div>
            {{--订单详情--}}
            <div class="orderList">
                <div class="itemTitle">订单详情</div>
                <div class="orderInformation">
                    <div class="i"><span class="t">购买类型：</span><span class="v">模板购买(基础费用¥700)</span></div>
                    <div class="i"><span class="t">域名选购：</span><span class="v">无</span></div>
                    <div class="i"><span class="t">空间选购：</span><span class="v">无</span></div>
                    {{--<div><span>售后服务：</span><span>模板购买</span></div>--}}
                </div>
                <div class="addup"><span class="t">总计：</span><span class="addupValue"><span class="icon">￥</span><span class="v">1688</span></span></div>
            </div>
        </div>
    </div>
    <style>
        .orderSuccess{
            margin: 0 auto;
            text-align: center;
            padding-top: 3em;
        }
        .orderInfor{
            width: 20%;
            min-height: 200px;
            /*background: #fff;*/
            display: inline-block;
            vertical-align: top;
        }
        .payState{
            margin-bottom: 2em;
        }
        .payState .icon{
            margin-top: 5em;
        }
        .payState .value{
            margin-top: 1em;
            font-size: 22px;
            letter-spacing: 2px;
        }
        .orderDetails{
            width: 50%;
            /*height: 200px;*/
            /*background: #ccc;*/
            display: inline-block;
            margin-left: 3em;
        }
        .orderNum{
            line-height: 4em;
            font-size: 16px;
            color: #5c5c5c;
        }
        .orderNum span{

        }
        .infor-item{
            line-height: 2em;
            font-size: 16px;
            color: #7d7d7d;
        }
        .infor-item .t{
            width: 100px;
            display: inline-block;
            text-align: left;
        }
        .infor-item .v{
            width: 100px;
            display: inline-block;
            text-align: left;
        }
        .theNext{
            font-size: 22px;
            letter-spacing: 4px;
            line-height: 150px;
            background: #fff9;
            box-shadow: 0 0 10px #f8f8f8;
            color: #797979;
            margin-top: 2em;
        }
        .orderList{
            margin-top: 3em;
            text-align: left;
        }
        .itemTitle{
            font-size: 22px;
            text-align: center;
        }
        .orderInformation{
            margin-top: 2em;
            border: 1px solid #e5e5e5;
            border-right-color: rgb(229, 229, 229);
            border-right-style: solid;
            border-right-width: 1px;
            border-left-color: rgb(229, 229, 229);
            border-left-style: solid;
            border-left-width: 1px;
            border-left: 0;
            border-right: 0;
            padding: 2em 0;
        }
        .orderInformation .i{
            line-height: 3em;

            font-size: 16px;
        }
        .orderInformation .i .t{

        }
        .orderInformation .i .t .v{

        }
        .addup{
            line-height: 5em;

            font-size: 22px;

            text-align: right;

            margin-bottom: 2em;
        }
        .addupValue{
            color: brown;
        }
        .addup .icon{

        }
        .addup .v{

        }
    </style>
@endsection