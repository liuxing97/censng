<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/bitbug_favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>


    <link type="text/css" href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/def.css" type="text/css" rel="stylesheet" />
    <link href="css/base.css" type="text/css" rel="stylesheet" />
    <link href="css/blackBase.css" type="text/css" rel="stylesheet" />
    <link href="css/homepage.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>辰象建站-辰象科技</title>
</head>
<body>
<!--头部-->
<div class="header">
    <div class="header-main">
        <div style="background: rgba(108, 108, 108, 0.36) !important" class="header-logo">
            <a href="/homepage">
                <img src="/img/site.censng.com-logo.png" />
            </a>
        </div>
        <div class="min-menu">
            <div class="top">首页<span></span></div>
            <ul>
                <li class="min-menuItem"><a href="/">首页</a></li>
                <li class="min-menuItem"><a href="/serverscope">业务范围</a></li>
                <li class="min-menuItem"><a href="/advantage">我们优势</a></li>
                {{--<li class="menuItem"><a href="/negotiate/6K+36YCJ5oup">业务洽谈</a></li>--}}
                <li class="min-menuItem"><a href="/negotiate">业务洽谈</a></li>
                <li class="min-menuItem"><a href="/support">价格总览</a></li>
                <li class="min-menuItem"><a href="/support">技术支持</a></li>
                <li style="display: none;" class="min-menuItem"><a href="baidu.com">案例</a></li>
            </ul>
        </div>
        <div class="menu">
            <ul class="menuUl">
                <li class="menuItem"><a href="/">首页</a></li>
                <li class="menuItem"><a href="/serverscope">业务范围</a></li>
                <li class="menuItem"><a href="/advantage">我们优势</a></li>
                {{--<li class="menuItem"><a href="/negotiate/6K+36YCJ5oup">业务洽谈</a></li>--}}
                <li class="menuItem"><a href="/negotiate">业务洽谈</a></li>
                <li class="menuItem"><a href="/priceList">价格总览</a></li>
                <li class="menuItem"><a href="/template">选购模板</a></li>
                <li class="menuItem"><a href="/support">技术支持</a></li>
                <li style="display: none;" class="menuItem"><a href="baidu.com">案例</a></li>
            </ul>
        </div>
        <div class="header-main-icon">
            <!-- Menu list for header -->
            <ul>
                <li><span>页面导航</span><img onclick="document.body.scrollTop = document.documentElement.scrollTop = 0" src="img/icon-menu-1.png" /></li>
            </ul>
        </div>
    </div>
</div>
<div class="banner">
    <div class="banner-bg-box"></div>
    <div class="banner-container">
        <div class="cover"></div>
        <img src="img/banner-1.png" />
    </div>
    <!--Logo及宣传语-->
    <div class="censngShow">
        <!--logo-->
        <div class="censngShow-logo">
            <a href="/serverscope">
                <img src="img/site.censng.com-logo.png" />
            </a>
        </div>
        <!--标语-->
        <div style="line-height: 2em" class="censngShow-words">服务支持：技术，不止于技术<br>我们为您竭心提供价值</div>
    </div>
</div>
{{--购买之前：业务咨询/解决方案--}}
<div class="beforemarket">
    <div class="beformarketTitle">售前服务</div>
    <div class="beforemarket-m">
        <a style="color: rgb(51, 51, 51);" href="/negotiate"><div class="b-m-item">
            <div class="b-m-i-icon"></div>
            <div class="b-m-i-msg">
                <div class="b-m-i-m-t">业务咨询</div>
                <div class="b-m-i-m-v">购买前，如果您还存在什么疑问，请联系我们！我们将安排业务人员竭心为您解答。</div>
            </div>
            </div></a>
        <div class="b-m-item">
            <div class="b-m-i-icon jjfa"></div>
            <div class="b-m-i-msg">
                <div class="b-m-i-m-t">解决方案</div>
                <div class="b-m-i-m-v">如果您想要为您的企业接入互联网，我们可以为您提供行业级的解决方案！无论最终是否进行合作，我们都欢迎您的来电咨询，因为我们也可以了解到更多东西，从而为我们的企业咨询业务提供更多的各行各业宝贵资料。</div>
            </div>
        </div>
    </div>
    <style>
        .beforemarket{

        }
        .beformarketTitle{
            font-size: 30px;
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 74px;
        }
        .beforemarket-m{
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 63px;
        }
        .b-m-item{
            margin-bottom: 57px;
            /*line-height: 130px;*/
            cursor: pointer;
            padding: 36px 0;
        }
        .b-m-item:hover{
            background: #f6f6f6;
        }
        .b-m-i-icon{
            display: inline-block;
            width: 20%;
            text-align: center;
            line-height: 30px;
        }
        .b-m-i-icon:after{
            font-family: FontAwesome;
            content: "\f2b7";
            font-size: 30px;
            color: #b6b6b6;
        }
        .b-m-i-msg{
            display: inline-block;

            width: 79%;

            vertical-align: middle;
        }
        .b-m-i-m-t{
            font-size: 22px;
        }
        .b-m-i-m-v{
            margin-top: 29px;

            line-height: 2em;

            color: #888;
        }
    </style>
</div>

{{--售后支持：全年无休/域名保障/服务器保障/代码异常/功能修改/使用培训/数据备份/专业售后--}}
<div class="aftermarket">
    <div class="beformarketTitle">售后服务</div>
    <div class="aftermarket-m">
        <div class="aftermarket-item">
            <div class="after-item-icon qnwx"></div>
            <div class="after-item-title">全年无休</div>
            <div class="after-item-about">售后保障全年无休（上午8时30分至12时，下午2时至6时30分），为您的业务保驾护航。</div>
        </div>
        <div class="aftermarket-item">
            <div class="after-item-icon ymbz"></div>
            <div class="after-item-title">域名保证</div>
            <div class="after-item-about">域名解析处理，帮助您设置好您的域名，保障您的域名可以正常访问。</div>
        </div>
        <div class="aftermarket-item">
            <div class="after-item-icon fwqbz"></div>
            <div class="after-item-title">服务器保障</div>
            <div class="after-item-about">当您的服务器出现异常或压力过大时，我们会对您的服务器进行应急处理，竭力保障访问正常。</div>
        </div>
        <div class="aftermarket-item">
            <div class="after-item-icon gnxg"></div>
            <div class="after-item-title">功能修改</div>
            <div class="after-item-about">一些功能上的问题，我们会根据您的要求，对其努力进行修正，保障您的业务状态正常。</div>
        </div>
        <div class="aftermarket-item">
            <div class="after-item-icon sypx"></div>
            <div class="after-item-title">使用培训</div>
            <div class="after-item-about">对于您的工作人员，如有需求，我们会安排人员专业为您培训，确保您熟练使用程序。</div>
        </div>
        <div class="aftermarket-item">
            <div class="after-item-icon sjbf"></div>
            <div class="after-item-title">数据备份</div>
            <div class="after-item-about">定期我们会对您的数据进行备份，保障您的数据安全，同时这些数据将是保密的，请您放心。</div>
        </div>
        <div class="aftermarket-item">
            <div class="after-item-icon zykf"></div>
            <div class="after-item-title">专业客服</div>
            <div class="after-item-about">我们有专业的客服，站在您的角度为您提供售前、售后服务，尽可能使沟通顺畅。</div>
        </div>
    </div>
    {{--售后热线--}}
    <style>
        .aftermarketTitle{
            font-size: 30px;
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 74px;
        }
        .aftermarket-m{
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 82px;
            /*text-align: center;*/
        }
        .aftermarket-item{
            display: inline-block;
            width: 225px;
            box-sizing: border-box;
            background: #f8f8f8;
            color: #fff;
            padding: 32px 0;
            margin: 0 1%;
            /*margin-bottom: 0px;*/
            margin-bottom: 75px;
            cursor: pointer;
        }
        .after-item-icon{
            text-align: center;
        }
        .after-item-icon:after{
            font-family: FontAwesome;
            content: "\f2b7";
            font-size: 36px;
            color: #a1a1a1;
            line-height: 100px;
        }
        .after-item-title{
            font-size: 22px;
            /*font-weight: 300;*/
            text-align: center;
            margin-top: 6px;
            color: #c94b4b;
        }
        .after-item-about{
            font-size: 14px;
            margin-top: 23px;
            line-height: 1.8em;
            color: #868686;
            padding: 0 12px;
        }
        .aftermarket-item:hover{
            background: #ff6262;
        }
        .aftermarket-item:hover .after-item-icon:after{
            color: #fff;
        }
        .aftermarket-item:hover .after-item-title{
            color: #fff;
        }
        .aftermarket-item:hover .after-item-about{
            color: #fff;
        }
        .qnwx:after{
            content: "\f272";
        }
        .ymbz:after{
            content: "\f132";
        }
        .fwqbz:after{
            content: "\f233";
        }
        .gnxg:after{
            content: "\f093";
        }
        .sjbf:after{
            content: "\f24d";
        }
        .sypx:after{
            content: "\f02d";
        }
        .zykf:after{
            content: "\f095";
        }
        .jjfa:after{
            content: "\f05b";
        }
    </style>
</div>
{{--<div style="max-width: 1000px;font-size: 28px;margin: 0 auto;margin-top: 106px;margin-bottom: 160px;text-align: right;">--}}
    {{--<p>售后热线：029-87976807</p>--}}
    {{--<p>西安辰象的象网络科技有限公司</p>--}}
{{--</div>--}}

<!--尾部-->
<div class="footer">
    <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
    <p>简称【辰象科技】 备案号：<br class="br">陕ICP备18006045号-1</p>
</div>
<style>
    .header-main,.show_site-main,.service_scope-main,.contact-notice,.contact-main{
        width: 100%!important;
    }
    .menuItem:nth-child(1){
        border-bottom: none;
    }
    .menuItem:nth-child(7){
        border-bottom: 2px solid #fff;
    }
    @media screen and (max-width: 360px){
        .beformarketTitle{
            text-align: center;
        }
        .b-m-item{
            text-align: center;
        }
        .b-m-i-msg{
            width: 88%;
        }
        .aftermarket-m{
            text-align: center;
        }
    }
</style>

</body>
</html>