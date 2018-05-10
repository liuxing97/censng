<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <link href="css/base.css" type="text/css" rel="stylesheet" />
    <link href="css/common.css" type="text/css" rel="stylesheet" />
    <link href="css/homepage.css" type="text/css" rel="stylesheet" />
    <title>辰象科技</title>
</head>
<body>
<!--头部-->
<div class="header">
    <div class="header-main">
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
        <div class="censngShow-words">友情链接：暂无</div>
        <div class="censngShow-words">若有意向，请与联系本公司</div>
    </div>
</div>
<!--尾部-->
<div class="footer">
    <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
    <p>简称【辰象科技】 备案号：陕ICP备18006045号-1</p>
</div>
<style>
    .menuItem:nth-child(1){
        border-bottom: none;
    }
    .menuItem:nth-child(5){
        border-bottom: 2px solid #fff;
    }
    .friendlyLink{
        color: #fff;
        margin-top: 30px;
        text-align: left;
        width: 800px;
        margin: 0 auto;
    }
</style>
</body>
</html>