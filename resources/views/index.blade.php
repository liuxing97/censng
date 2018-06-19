<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″/>--}}
    {{--<meta name="viewport" content="width=device-width, minimum-scale=1, user-scalable=no">--}}
    <link href="css/index.css" type="text/css" rel="stylesheet" />
    <title>辰象科技</title>
</head>
<body>
<!-- Hander -->
<div class="header">
    <div class="header-bg"></div>
    <div class="header-main">
        <div class="header-main-main">
            <!-- Menu detail of page navigation -->
            <div class="h-m-m-item h-m-m-page_nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="#show_site_anchor">案例展示</a></li>
                    <li><a href="#service_scope_anchor">服务范围</a></li>
                    <li><a href="#why_us_anchor">我们优势</a></li>
                    <li><a href="/negotiate">业务洽谈</a></li>
                    <li><a href="/priceList">价格总览</a></li>
                    <li><a href="/support">技术支持</a></li>
                </ul>
            </div>
        </div>
        <div class="header-main-icon">
            <!-- Menu list for header -->
            <ul>
                <li><span>页面导航</span><img src="img/icon-menu-1.png" /></li>
            </ul>
        </div>
    </div>
</div>
<!-- Banner -->
<div class="banner">
    <div class="banner-container">
        <img src="img/banner-1.png" />
    </div>
    <!--Logo及宣传语-->
    <div class="censngShow">
        <!--logo-->
        <div class="censngShow-logo">
            <img src="img/site.censng.com-logo.png" />
        </div>
        <!--标语-->
        <div class="censngShow-words">辰象建站，您较好的选择</div>
    </div>
</div>
<!-- ShowSite -->
<div class="show_site">
    <div id="show_site_anchor"></div>
    <div class="show_site-title">
        <img src="img/index-title-let's_show_the_site.png" />
    </div>
    <div class="show_site-title_line">
        <img src="img/line-F231F24F-EE04-4EE6-B7EC-F2FC656E03D8.png" />
    </div>
    <p class="show_site-title_more">我们挑选了几个很棒的站点，给您展示我们的实力！这些站点，展示了我们的设计观！</p>
    <div class="show_site-main">
        {{--<div class="show_site-main-show">--}}
            {{--<div class="s-m-s-show">--}}
                {{--<img src="img/s-m-s-show-1.png" />--}}
            {{--</div>--}}
            {{--<div class="s-m-s-list">--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<div class="s-m-s-l-item-header">--}}
                            {{--<div class="s-m-s-l-i-h-icon">--}}
                                {{--<img src="img/site-show-header-icon.png" />--}}
                            {{--</div>--}}
                            {{--<div class="s-m-s-l-i-h-title">普通企业官网</div>--}}
                        {{--</div>--}}
                        {{--<div class="s-m-s-l-item-body">该案例企业官网，采用了全屏海报设计风格，这是我们所崇尚的一种风格，且具备了手机端，平板端，电脑端，三合一的适应力。</div>--}}
                        {{--<div style="clear:both;" />--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="s-m-s-l-item-header">--}}
                            {{--<div class="s-m-s-l-i-h-icon">--}}
                                {{--<img src="img/site-show-header-icon.png" />--}}
                            {{--</div>--}}
                            {{--<div class="s-m-s-l-i-h-title">响应式企业官网</div>--}}
                        {{--</div>--}}
                        {{--<div class="s-m-s-l-item-body">该案例企业官网，采用了全屏海报设计风格，这是我们所崇尚的一种风格，且具备了手机端，平板端，电脑端，三合一的适应力。</div>--}}
                        {{--<div style="clear:both;" />--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div style="clear:both;"></div>--}}
        {{--</div>--}}
        {{--<div class="show_site-main-kind">--}}
            {{--<!-- 种类样式中线 -->--}}
            {{--<div class="s-m-k-middle_line"></div>--}}
            {{--<!-- 种类列表 -->--}}
            {{--<div class="s-m-k-list">--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<div class="s-m-l-l-item-container">--}}
                            {{--<img src="img/icon-phone.png" />--}}
                        {{--</div>--}}
                        {{--<div class="s-m-l-l-item-title">企业官网</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="s-m-l-l-item-container">--}}
                            {{--<img src="img/icon-phone.png" />--}}
                        {{--</div>--}}
                        {{--<div class="s-m-l-l-item-title">电子商务</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="s-m-l-l-item-container">--}}
                            {{--<img src="img/icon-phone.png" />--}}
                        {{--</div>--}}
                        {{--<div class="s-m-l-l-item-title">Web应用</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="s-m-l-l-item-container">--}}
                            {{--<img src="img/icon-phone.png" />--}}
                        {{--</div>--}}
                        {{--<div class="s-m-l-l-item-title">微信公众</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
<!-- ServiceScope -->
<div class="service_scope">
    <div id="service_scope_anchor"></div>
    <div class="service_scope-title">
        <img src="img/index-title-service_scope.png" />
    </div>
    <div class="service_scope-title_more">
        <img src="img/index-title-service_scope_second.png" />
    </div>
    <div class="service_scope-title_line">
        <img src="img/line-55FB4DF2-2052-4007-8FE7-D11F5C1C150B.png" />
    </div>
    <div class="service_scope-main"></div>
</div>
<!-- WhyUs -->
<div class="why_us">
    <div id="why_us_anchor"></div>
    <div class="why_us-title-entirely">
        <img src="img/index-title-why_us_entirely.png" />
    </div>
    <div class="why_us-main">
        <ul>
            <li>
                <div class="w-m-u-l-icon">
                    <img src="img/why_us-one.png" />
                </div>
                <div class="w-m-u-l-content">ces</div>
            </li>
            <li>
                <div class="w-m-u-l-icon">
                    <img src="img/why_us-two.png" />
                </div>
                <div class="w-m-u-l-content">ces</div>
            </li>
            <li>
                <div class="w-m-u-l-icon">
                    <img src="img/why_us-three.png" />
                </div>
                <div class="w-m-u-l-content">ces</div>
            </li>
            <li>
                <div class="w-m-u-l-icon">
                    <img src="img/why_us-fore.png" />
                </div>
                <div class="w-m-u-l-content">ces</div>
            </li>
        </ul>
    </div>
</div>
<!-- ThinksFor -->
<div class="thanks_for">
    <div id="thanks_for_anchor"></div>
    <div class="thanks_for-title">
        <img src="img/index-title-thinks_for.png" />
    </div>
    <div class="thanks_for-title_line">
        <img src="img/line-E461C079-26C0-4CA4-BC45-9192A7FE462C.png" />
    </div>
    <div class="thanks_for-title_more">
        <img src="img/index-title-thinks_for_second.png" />
    </div>
    <div class="thanks_for-main">
        <ul>
            <li></li>
        </ul>
    </div>
</div>
<!-- Contact -->
<div class="contact">
    <div id="contact_anchor"></div>
    <div class="contact-title">
        <img src="img/index-title-contact.png" />
    </div>
    <div class="contact-title_line">
        <img src="img/line-FC85E22D-589A-4CBD-9E0E-3C65030FCAEF.png" />
    </div>
    <div class="contact-title_more">
        <img src="img/index-title-contact-second.png" />
    </div>
    <div class="contact-notice">
    </div>
    <div class="contact-main">

    </div>
</div>
<!-- Footer -->
<div class="footer"></div>

</body>
</html>
