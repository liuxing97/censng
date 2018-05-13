<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>



    <link href="css/base.css" type="text/css" rel="stylesheet" />
    <link href="css/common.css" type="text/css" rel="stylesheet" />
    <link href="css/homepage.css" type="text/css" rel="stylesheet" />



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/self/base.css" type="text/css" rel="stylesheet" />
    <script>

    </script>

    <title>辰象建站-辰象科技</title>
</head>
<body>
<!--头部-->
<div class="header">
    <div class="header-main">
        <div class="min-menu">
            <div class="top">首页<span></span></div>
            <ul>
                <li class="min-menuItem"><a href="/">首页</a></li>
                <li class="min-menuItem"><a href="/serverscope">业务范围</a></li>
                <li class="min-menuItem"><a href="/advantage">我们优势</a></li>
                {{--<li class="menuItem"><a href="/negotiate/6K+36YCJ5oup">业务洽谈</a></li>--}}
                <li class="min-menuItem"><a href="/negotiate">业务洽谈</a></li>
                <li class="min-menuItem"><a href="/support">支持</a></li>
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
                <li class="menuItem"><a href="/support">支持</a></li>
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

<!--尾部-->
<div class="footer">
    <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
    <p>简称【辰象科技】 备案号：<br class="br">陕ICP备18006045号-1</p>
</div>
<style>
    .header-main,.show_site-main,.service_scope-main,.contact-notice,.contact-main{
        width: 100%!important;
    }
</style>

</body>
</html>