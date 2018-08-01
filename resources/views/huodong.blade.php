<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone = no"/>
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/base64js.min.js"></script>
    {{--<script type="text/javascript" src="/js/pages/common.js"></script>--}}
    <link type="text/css" href="/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/img/bitbug_favicon.ico" type="image/x-icon">
    {{--<link href="/css/page.css" type="text/css" rel="stylesheet" />--}}
    <title>辰象科技</title>
</head>
<body>
<img class="bg" src="/img/mobilebg.jpg" />
<div class="bg2"></div>
<div class="main">
    <div class="logo"><img src="/img/CENSNGLOGO.png" /></div>
    <div class="huodong">
        <div class="title">活动策划</div>
        <div class="value">我们是一家创业公司，为更迅速的找寻到合适的宣传渠道，为此我们在慎重思考后，决定组织一次互联网营销活动。同时，我们邀请来自各行各业您一起参与，以降低成本，而又可以实现共赢。</div>
    </div>
    <div class="huodong">
        <div class="title">活动简述</div>
        <div class="value">
            <p>用小程序结合微信朋友圈广告为核心，打造一套程序，其内含我公司介绍，并辅助以宣传单对程序进行推广。</p>
            <p>程序功能为扫描二维码，点击转发得红包，红包金额随机，凡转发后并阅读一次者，红包自动派送至微信账户中，阅读人数越多，奖励金越多。</p>
        </div>
    </div>
    <div class="huodong">
        <div class="title">活动预算</div>
        <div class="value">
            <p>一次转发红包金额：0.3元(待议)</p>
            <p>目标转发次数：5000次</p>
            <p>转发红包成本总计：0.3*5000=1500元</p>
        </div>
        <div class="value">
            <p>程序开发成本:本公司承担</p>
            <p>程序内广告设计成本:本公司承担</p>
            <p>宣传单设计成本:本公司承担</p>
            <p>易拉宝设计成本:本公司承担</p>
            <p>广告投放人员成本:本公司承担</p>
        </div>
        <div class="value">
            <p>宣传单:5000张</p>
            <p>易拉宝:3份</p>
            <p>成本约：1200元</p>
        </div>
        <div class="value">
            <p>总计:2700元</p>
        </div>
    </div>
    <div class="huodong">
        <div class="title">活动预期</div>
        <div class="value">
           <p>实现广告图片两个月内5000次的转发</p>
        </div>
        <div class="value">
            <p>实现广告浏览人数达每次转发10人可见，总计两月50000人次</p>
        </div>
        <div class="value">
            <p>实现二次转发人数2000人次</p>
        </div>
        <div class="value">
            <p>实现与赞助人共得广告效益，共同发展进步的理念。</p>
        </div>
    </div>
    <div class="huodong">
        <div class="title">期望筹集资金</div>
        <div class="value">￥3000，我们期待您与我们一起完成这次营销试验，。</div>
    </div>
    <div class="huodong">
        <div class="title">联系方式与联系人</div>
        <div class="value">固定电话：029-87976807</div>
        <div class="value">移动电话：13096979497(刘)</div>
        <div class="value">
            <div class="wechat"><img src="/img/wx-code.jpg" /></div>
        </div>
    </div>
    <div class="huodong">
        <div class="title">公司小程序</div>
        <div style="background: none" class="value">
            <div class="wechat"><img src="/img/we-s-500.jpg" /></div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
        <p>简称【辰象科技】 备案号：陕ICP备18006045号-1</p>
    </div>
</div>
</body>
</html>
<style>
    html,body,div,p,li,ul,table{
        margin: 0;
        padding: 0;
    }
    body{
        /*background: url("http://localhost:83/img/shoujiqipao.png");*/
        background-size: cover;
        width: 100%;
        /*height: 100%;*/
        position: relative;
        overflow: hidden;
        font-size: 14px;
    }
    .bg{
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }
    .bg2{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.86);
        z-index: 1;
        position: fixed;
    }
    .main{
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 3;
        text-align: center;
        overflow-y: auto;
    }
    .logo{
        width: 40%;
        margin: 0 auto;
        margin-top: 5rem;
    }
    .logo img{
        width: 100%;
    }
    .huodong{
        margin-top: 1rem;
        color: #fff;

    }
    .huodong .title{
        font-size: 1.4rem;
        letter-spacing: 0.3rem;
    }
    .huodong .value{
        margin-top: 1rem;

        line-height: 1.7rem;

        background: rgba(255,255,255,0.11);

        padding: 2rem 1.5em;
        text-align: left;
    }
    .wechat{
        width: 50%;
        margin: 0 auto;
    }
    .wechat img{
        width:100%;
    }
    .footer{
        text-align: center;
        color: #fff;
        width: 100%;
        height: 5rem;
        background: #75757599;
        display: inline-block;
        padding: 2rem 0;
    }
    .footer p{
        margin-bottom: 1rem;
    }
</style>