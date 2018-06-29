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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @section('myJs')
    @show
    <link href="/css/def.css" type="text/css" rel="stylesheet" />
    <link href="/css/base.css" type="text/css" rel="stylesheet" />
    @section('myCss')
    @show
    {{--<link href="/css/page.css" type="text/css" rel="stylesheet" />--}}
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
                <li class="menuItem"><a href="/priceList">价格总览</a></li>
                <li class="menuItem"><a href="/template">选购模板</a></li>
                <li class="menuItem"><a href="/support">技术支持</a></li>
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
    <p>简称【辰象科技】 备案号：<br class="br">陕ICP备18006045号-1</p>
</div>
</body>
</html>

<style>
    .header{
        min-width: 0;
        /*overflow: hidden;*/
    }
    .header-main{
        width: 100%;
    }
    .menu{
        z-index: 9999;
    }
    .menuItem{
        margin-bottom: 1em;
    }
    .header-main-icon{
        position: relative;
        top: -1em;
    }
    .pageMain{
        width: auto;
    }
    .footer{
        min-width: 0;
    }
    .footer .br{
        display: none;
    }
    @media screen and (max-width: 600px) {
        .header-main-icon{
            display: none;
        }
    }
    @media screen and (max-width: 360px){
        .header{
            min-height: 106px!important;
            height: 106px!important;
            /*overflow: hidden;*/
            padding-bottom: 0;
            overflow-y: hidden;
            display: -webkit-box;
            -webkit-overflow-scrolling:touch;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden;
            overflow-x: auto;
        }
        .header::-webkit-scrollbar {display: none;}
        .menu{
            /*display: none;*/

            width: 660px;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 20px;
        }
        .footer .br{
            display: block;
            margin-bottom: 12px;
        }
        .footer{
            padding: 36px 20px;
        }
    }
</style>

<style>
    @media screen and (max-width: 360px){
        .choicedTitle{
            width: 100%;
            line-height: 3em!important;
        }
        .choicedMsg p{
            line-height: 2em;
        }
        .choicedMsg p span{
            font-size: 16px;
        }
        /*.choicedAbout p:nth-of-type(2n){*/
            /*background: #f9f9f9;*/
        /*}*/
    }

</style>



{{-----------------------------------------------------}}
<style>
    .advantageList{
        display: none;
    }
    .advMobile{
        text-align: left;
    }
    .advMobile .advantageBox{
        margin: 0 18px;
        margin-bottom: 36px;
    }
    .advMobile .advantageBox{
        width: 280px;
    }
    .advantageBoxBox{
        width: 280px;
    }
    .advMobile .advantageTitle{
        width: auto;
    }
    @media screen and (max-width: 360px){
        .advMobile .advantageBox{
            /*width: 90%;*/
        }
        .advantageBox:hover .advantageMsg{
            position: relative;
            top: 10px;
        }
        .advantageBox .icon{
            top:48px;
        }
        /*.f-advantageBox .advantageBoxBox{*/
            /*background: #d55555!important;*/
            /*color: #fff;*/
        /*}*/
        /*.f-advantageBox .advantageMsg{*/
            /*position: relative;*/
            /*top: 10px;*/
            /*!*display: block;*!*/
        /*}*/
    }
</style>



{{-----------------------------------------------------}}
<style>

    @media screen and (max-width: 360px){
    }

</style>

