<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/base64js.min.js"></script>
    <script type="text/javascript" src="/js/pages/common.js"></script>
    <link type="text/css" href="/css/font-awesome.min.css" rel="stylesheet" />
    @section('myJs')
    @show
    <link href="/css/base.css" type="text/css" rel="stylesheet" />
    <link href="/css/common.css" type="text/css" rel="stylesheet" />
    @section('myCss')
    @show
    <link href="/css/page.css" type="text/css" rel="stylesheet" />
    <title>辰象科技</title>
</head>
<body>
<!--头部-->
<div class="header">
    <div class="header-main">
        <div class="header-logo">
            <a href="/homepage">
                <img src="/img/censng_build_84x84.png" />
            </a>
        </div>
        <div class="menu">
            <ul class="menuUl">
                <li class="menuItem"><a href="/homepage">首页</a></li>
                <li class="menuItem"><a href="/serverscope">业务范围</a></li>
                <li class="menuItem"><a href="/advantage">我们优势</a></li>
                <li class="menuItem"><a href="/negotiate">业务洽谈</a></li>
                <li class="menuItem"><a href="/support">支持</a></li>
                <li style="display: none;" class="menuItem"><a href="baidu.com">案例</a></li>
            </ul>
        </div>
        <div class="header-main-icon">
            <!-- Menu list for header -->
            <ul>
                <li><span>页面导航</span><img onclick="document.body.scrollTop = document.documentElement.scrollTop = 0" src="/img/icon-menu-2.png" /></li>
            </ul>
        </div>
    </div>
</div>
<!--页面·业务范围-->
<div class="page">
    <div class="pageMain">
        @section('pageMain')
        @show
    </div>
</div>
<!--尾部-->
<div class="footer">
    <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
    <p>简称【辰象科技】 备案号：陕ICP备18006045号-1</p>
</div>
</body>
</html>