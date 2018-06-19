@extends('base')

@section('myCss')
    <link href="/plugins/SlidingLock/css/unlock.css" type="text/css" rel="stylesheet" />
    {{--<link href="/css/negotiate.css" type="text/css" rel="stylesheet" />--}}
@endsection
@section('myJs')
    @if($objtype)
        <script>var pageStatus = 'hasPara'</script>
    @else
        <script>var pageStatus = 'noPara'</script>
    @endif
    <script type="text/javascript" src="/js/pages/negotiate.js"></script>
    <script type="text/javascript" src="/plugins/SlidingLock/js/unlock.js"></script>
@endsection

@section("pageMain")
    <div class="bg6">
        {{--<img src="/img/bg6.jpg" />--}}
        {{--<span class="bg6-words">合作之间，只差一步</span>--}}
        <span class="bg6-bg"></span>
    </div>
    <div class="bg6Key">
        合作之间，只差 One Step
    </div>
    <div class="negotiateMain">
        {{--客服--}}
        <div style="width:100%">
            <div style="max-width: 1000px;margin: 0 auto;font-size: 28px;line-height: 4em;border-bottom: 1px solid #e5e5e5;color: #878787;">
                <span>联系电话：029-8797 6807</span>
            </div>
        </div>
        {{--我们地址/联系邮箱/咨询电话--}}
        <div class="contactUs">
            <ul class="contactUsList">
                <li>
                    <span class="icon"></span>
                    <span class="value">
                        <span class="t">经营地址</span>
                        <span class="v">西安市长安南路丽融大厦A座7层</span>
                    </span>
                </li>
                <li>
                    <span class="icon lxyx"></span>
                    <span class="value">
                        <span class="t">联系邮箱</span>
                        <span class="v">gex1217@censng.com</span>
                    </span>
                </li>
                <li>
                    <span class="icon zxdh"></span>
                    <span class="value">
                        <span class="t">咨询电话</span>
                        <span class="v">029-8797 6807 / 130 9697 9497</span>
                    </span>
                </li>
            </ul>
            <style>
                .contactUs{
                    padding: 28px 0;
                }
                .contactUsList{
                    text-align: center;
                    color: #adadad;
                    /*margin-top: 20px;*/
                }
                .contactUsList li{
                    display: inline-block;
                    /*width: 300px;*/
                    text-align: center;
                    height: 100px;
                    /*background: #fff;*/
                    margin: 0px 12px;
                }
                .contactUsList .icon{
                    line-height: 100px;
                    vertical-align: middle;
                    display: inline-block;
                }
                .contactUsList .icon:after{
                    font-family: FontAwesome;
                    content: "\f279";
                    font-size: 30px;
                }
                .contactUsList .value{
                    /*width: 260px;*/
                    display: inline-block;
                    margin-left: 20px;
                    vertical-align: middle;
                    padding-left: 8px;
                    text-align: left;
                    width: 260px;
                }
                .contactUsList .value .t{
                    display: block;
                    text-align: left;
                    font-size: 18px;
                    color: #666;
                }
                .contactUsList .value .v{
                    margin-top: 20px;
                    display: block;
                    vertical-align: middle;
                    color: #888;
                    font-size: 15px;
                }
                .lxyx:after{
                    content: "\f2b7"!important;
                }
                .zxdh:after{
                    content: "\f2a0"!important;
                }
            </style>
        </div>
        {{--微信二维码/小程序--}}
        <div class="QRcode">
            <div class="QRcodeTitle">几个重要的二维码</div>
            <div class="item">
                <div class="code"><img src="/img/we500.png" /></div>
                <div class="t">微信公众号</div>
            </div>
            <div class="item">
                <div class="code"><img src="/img/we-s-500.jpg" /></div>
                <div class="t">微信小程序</div>
            </div>
            <div class="item">
                <div class="code"><img src="/img/wx-code.jpg" /></div>
                <div class="t">业务负责人</div>
            </div>
            <style>
                .QRcode{
                    text-align: center;
                    margin: 82px 0;
                    margin-bottom: 120px;
                }
                .QRcodeTitle{
                    font-size: 30px;
                    margin-bottom: 86px;
                    letter-spacing: 6px;
                }
                .QRcode .item{
                    width: 180px;
                    display: inline-block;
                    margin: 0 36px;
                }
                .QRcode .item .code{
                    box-shadow: 0 0 10px #ccc;
                    width: 180px;
                    height: 180px;
                    text-align: center;
                    vertical-align: middle;
                }
                .QRcode .item .code img{
                    width: 100%;
                }
                .QRcode .item .t{
                    margin-top: 36px;
                    color: #696969;
                    letter-spacing: 2px;
                    text-indent: 2px;
                }
            </style>
        </div>
        {{--在线留言--}}
        <div class="contactOnline">
            <div class="bg"></div>
            <div class="contactOnlineLeft">
                <div class="show">
                    <p>专业的人员设计</p>
                    <p>完善的沟通体制</p>
                    <p>全年无休售后服务</p>
                    <p>详细指导站点使用</p>
                    <p>保修范围内免费修改</p>
                    <p>以及一颗赤诚之心！</p>
                </div>
            </div>
            <div class="contactOnlineMain">
                <div>
                    <div style="text-align: center;font-size: 30px;margin-top: 42px;color: #fff;">
                        <div>Contact Us</div>
                        <div style="margin-top: 20px;font-size: 23px;letter-spacing: 6px;text-shadow: 0 0 10px #fff;">联系我们</div>
                    </div>
                    <div style="text-align: center;margin-top: 42px;color: #fff;">
                        <div class="online-item">
                            <span class="t">联系人</span>
                            <span class="v"><input type="text"></span>
                        </div>
                        <div class="online-item">
                            <span class="t">单位名称</span>
                            <span class="v"><input type="text"></span>
                        </div>
                        <div class="online-item">
                            <span class="t">您的职位</span>
                            <span class="v"><input type="text"></span>
                        </div>
                        <div class="online-item">
                            <span class="t">怎么称呼</span>
                            <span class="v"><input type="text"></span>
                        </div>
                        <div class="online-item">
                            <span class="t">问题描述</span>
                            <span class="v"><textarea></textarea></span>
                        </div>
                    </div>
                    <style>
                        .online-item{
                            position: relative;
                            /*width: 523px;*/
                            margin: 0 auto;
                            margin-bottom: 25px;
                            display: inline-block;
                        }
                        .online-item .t{
                            width: 133px;
                            display: inline-block;
                            text-align: left;
                            line-height: 36px;
                            border-left: 2px solid #929292;
                            padding-left: 28px;
                        }
                        .online-item .v{
                            display: inline-block;
                            text-align: left;
                            vertical-align: middle;
                        }
                        .online-item .v input{
                            width: 238px;
                            line-height: 36px;
                            border: none;
                            background: #d5d5d5;
                            box-sizing: border-box;
                            padding-left: 10px;
                        }
                        .online-item .v textarea{
                            background: #d5d5d5;
                            width: 238px;
                            border: none;
                            min-height: 88px;
                            box-sizing: border-box;
                            padding: 10px;
                        }
                    </style>
                </div>
            </div>
            <div class="onlinePost" style="
                position: absolute;
                top: 45%;
                background: #3f3f3f66;
                left: 0;
                right: 0;
                width: 100px;
                margin: 0 auto;
                text-align: center;
                line-height: 100px;
                border-radius: 100%;
                color: #fff;
                box-shadow: 0px 0px 55px #fff;
                letter-spacing: 8px;
                text-indent: 8px;
                ">提交</div>
            <style>
                .contactOnline{
                    background: url("/img/invit.jpg") no-repeat;
                    width: 100%;
                    min-height: 600px;
                    background-size: cover;
                    position: relative;
                }
                .contactOnline .bg{
                    width: 100%;
                    min-height: 600px;
                    background: rgba(0,0,0,0.86);
                    position: absolute;
                    top:0;
                    left: 0;
                }
                .contactOnlineLeft{
                    float: left;
                    width: 50%;
                    /*background: rgba(255,255,255,0.66);*/
                    min-height: 600px;
                    position: relative;
                    color: #fff;
                }
                .contactOnlineLeft .show{
                    margin-top: 106px;
                }
                .contactOnlineLeft p{
                    font-size: 22px;
                    margin: 53px 0;
                    text-align: center;
                }
                .contactOnlineMain{
                    float: right;
                    width: 50%;
                    background: rgba(255,255,255,0.66);
                    min-height: 600px;
                    position: relative;
                }
                .onlinePost{
                    cursor: pointer;
                }
                .onlinePost:hover{
                    background: #cc1212 !important;
                    color: #fff !important;
                    box-shadow: none !important;
                }
            </style>
        </div>
    </div>
    <style>
        .menuItem:nth-child(4){
            border-bottom: 2px solid #cc1212;
        }
        .pageMain{
            min-height: 0;
        }
        .header{
            position: fixed;
            top: 0;
            left: 0;
        }
        .bg6{
            /*background: url("/img/bg6.jpg");*/
            background: url("/img/bg6.jpg");
            /*background-size: auto auto;*/
            line-height: 180px;
            text-align: center;
            font-size: 30px;
            color: #fff;
            background-size: cover;
            position: fixed;
            /*margin-top: 2em;*/
            left: 0;
            top:138px;
            width: 100%;
            height: 180px;
        }
        .bg6-bg{
            position: absolute;
            width: 100%;
            height: 100%;
            background: #0006;
            display: inline-block;
            top: 0;
            left: 0;
        }
        .bg6Key{
            position: absolute;
            top:138px;
            font-size: 30px;
            color: #fff;
            line-height: 6em;
            z-index: 9999;
            text-align: center;
            width: 100%;
            letter-spacing: 0.2em;
            text-indent: 0.2em;
        }
        .negotiateMain{
            width: 100%;
            /*position: absolute;*/
            margin-top:318px;
            /*min-height: 1000px;*/
            /*z-index: 9999;*/
            background: #fbfbfb;
            position: relative;
        }
    </style>
    @endsection
{{--@section('pageMain')--}}
    {{--<!--背景-->--}}
    {{--<div class="negotiate_bg" style="--}}
        {{--font-family: 书体坊兰亭体;--}}
        {{--color: #e79c4b;--}}
        {{--background: #fff;--}}
        {{--width: 100px;--}}
        {{--line-height: 100px;--}}
        {{--text-align: center;--}}
        {{--font-size: 45px;--}}
{{--">2018</div>--}}

    {{--//如果页面有传入选择了哪个产品这个参数--}}
    {{--@if($objtype)--}}
    {{--@if($objtype)--}}
        {{--<!--洽谈盒子-->--}}
        {{--<div class="negotiateBox negotiateMain">--}}
            {{--<!--标题：业务洽谈-->--}}
            {{--<div class="title">业务洽谈</div>--}}
            {{--<!--留言板-->--}}
            {{--<div class="negotiateBoard">--}}
                {{--<!--Help-->--}}
                {{--<div class="help">请留下您的联系信息，一个工作日内回复，紧急可右侧直接联系</div>--}}
                {{--<!--填写内容区-->--}}
                {{--<div class="writeBlock">--}}
                    {{--<!--当前选择-->--}}
                    {{--<div class="item itemType">--}}
                        {{--<div class="t">业务类型</div>--}}
                        {{--<div class="i">--}}
                            {{--<a href="/serverscope">--}}
                                {{--<div class="choiced"><span class="serverTypeChoiced">{{base64_decode($objtype)}}</span><span class="serverTypeOther">请选择</span><span class="icon">√</span></div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--联系号码-->--}}
                    {{--<div class="item">--}}
                        {{--<div class="t">联系号码</div>--}}
                        {{--<div class="i"><input class="inputDomPhone" onblur="checkPhone(this)" type="text" /><div class="inputErrorMsg inputErrorMsgPhone"><span class="icon">*</span><span class="val">请输入正确手机号码</span></div></div>--}}
                    {{--</div>--}}
                    {{--<!--怎么称呼-->--}}
                    {{--<div class="item">--}}
                        {{--<div class="t">联系人</div>--}}
                        {{--<div class="i"><input class="inputDomName" onblur="checkName(this)" type="text" /><div class="inputErrorMsg inputErrorMsgName"><span class="icon">*</span><span class="val">请输入正确的联系人</span></div></div>--}}
                    {{--</div>--}}
                    {{--<!--怎么称呼-->--}}
                    {{--<div class="item">--}}
                        {{--<div class="t">您的职务</div>--}}
                        {{--<div class="i"><input class="inputDomPost" onblur="checkPost(this)" type="text" /><div class="inputErrorMsg inputErrorMsgPost"><span class="icon">*</span><span class="val">请输入正确的职务</span></div></div>--}}
                    {{--</div>--}}
                    {{--<!--性别-->--}}
                    {{--<div class="item">--}}
                        {{--<div class="t">性别</div>--}}
                        {{--<div class="i itemSex"><div class="sex"><input type="radio" name="sex" value="boy" checked="true" />男</div><div class="sex"><input value="girl" type="radio" name="sex" /></div>女</div>--}}
                    {{--</div>--}}
                    {{--<div class="item robotCheck">--}}
                        {{--<div class="t">机器人验证</div>--}}
                        {{--<div class="i">--}}
                            {{--<div class="wrapper">--}}
                                {{--<div class="bar1 bar"></div>--}}
                                {{--<div class="bar2 bar"></div>--}}
                                {{--<div class="bar3 bar"></div>--}}
                                {{--<div class="bar1 bar"></div>--}}
                                {{--<div class="bar5 bar"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--验证码-->--}}
                    {{--<div class="item itemCheck">--}}
                        {{--<div class="t">手机验证码</div>--}}
                        {{--<div class="i"><input class="inputDomCode" onblur="checkCode(this)" type="text" /><div onclick="getNumber()" class="getNumber">获取验证码</div>--}}
                            {{--<div class="inputErrorMsg inputErrorMsgCode"><span class="icon">*</span><span class="val">请输入正确验证码</span></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div style="display: none">{{ csrf_field() }}</div>--}}
                {{--</div>--}}
                {{--<!--提交区域-->--}}
                {{--<div onclick="submit()" class="btn-submit">提交</div>--}}
                {{--<div style="color: #fff;" class="inputErrorMsg inputErrorSubmit"><span class="icon">*</span><span class="val">请再次检查</span></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@else--}}
        {{--<!--洽谈步骤-->--}}
        {{--<div class="negotiateStep negotiateMain">--}}
            {{--<!--标题：业务洽谈-->--}}
            {{--<div class="title">业务洽谈</div>--}}
            {{--<!--业务洽谈流程-->--}}
            {{--<div class="negotiateWay">--}}
                {{--<p>第一步：点击业务范围，选择业务！</p>--}}
                {{--<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——上方导航，点击业务范围，将会有对我们业务的具体介绍。</p>--}}
                {{--<p>第二步：下拉点击业务洽谈，进行合作！</p>--}}
                {{--<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——您主动，才会有更多的可能。</p>--}}
                {{--<p>辰象科技：辰是星辰的辰，象是万象的象！</p>--}}
                {{--<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——辰象科技</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endif--}}


    {{--<!--联系方式-->--}}
    {{--<div class="contactWay">--}}
        {{--<div class="writeTemp"></div>--}}
        {{--<div class="contactCard">--}}
            {{--<img class="contactCardImg" src="/img/negotiateCard.png" />--}}
        {{--</div>--}}
        {{--<div class="qrCode">--}}
            {{--<img src="/img/sina-qr-code.png" />--}}
            {{--<div class="title">新浪微博</div>--}}
        {{--</div>--}}
        {{--<div class="about">--}}
            {{--<p>西安辰象的象网络科技有限公司</p>--}}
            {{--<p>地址：西安市雁塔区长安南路449号</p>--}}
            {{--<p>联系方式：029-87976807</p>--}}
            {{--<p>企业邮箱：contact@censng.com</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<script type="text/javascript">--}}
        {{--$('.bar1').slideToUnlock();--}}
    {{--</script>--}}
{{--@endsection--}}