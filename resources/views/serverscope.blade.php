@extends('base')

@section('myCss')
    <link href="/css/serverscope.css" type="text/css" rel="stylesheet" />
@endsection
@section('myJs')
    <script type="text/javascript" src="/js/pages/serverscope.js"></script>
@endsection
@section('pageMain')
    <!--服务类型-->

    <div class="serverType">
        <div class="serverTypeMain">
            <div onclick="pageObj.scopeSwitch('web');location.href='#choicedAbout1'" class="serverTypeClass serverTypeClassWeb">
                <div class="serverTypeClassLogo">
                    <img src="img/3.jpg" />
                </div>
                <div class="serverTypeTitle">网站开发</div>
            </div>
            <div onclick="pageObj.scopeSwitch('wechat');location.href='#choicedAbout2'" class="serverTypeClass serverTypeClassWechat">
                <div class="serverTypeClassLogo">
                    <img src="/img/4.jpg" />
                </div>
                <div class="serverTypeTitle">微信开发</div>
            </div>
            <div onclick="pageObj.scopeSwitch('app');location.href='#choicedAbout3'" class="serverTypeClass serverTypeClassApp">
                <div class="serverTypeClassLogo">
                    <img src="/img/6.jpg" />
                </div>
                <div class="serverTypeTitle">APP开发</div>
            </div>
            <div onclick="pageObj.scopeSwitch('zonghe');location.href='#choicedAbout4'" class="serverTypeClass serverTypeClassZonghe">
                <div class="serverTypeClassLogo">
                    <img src="/img/7.bmp" />
                </div>
                <div class="serverTypeTitle">综合开发</div>
            </div>
            <div onclick="pageObj.scopeSwitch('cehua');location.href='#choicedAbout5'" class="serverTypeClass serverTypeClassCehua">
                <div class="serverTypeClassLogo">
                    <img src="/img/8.jpg" />
                </div>
                <div class="serverTypeTitle">企业策划</div>
            </div>

        </div>
        <!--服务类型-->
            </div>

    <!--选择服务介绍-->
    <div class="choicedAbout webServerType">
        <div class="choicedAboutHeader">
                <!--选择标题-->
                <div id="choicedAbout1" class="choicedTitle">网站开发</div>
                <!--选择介绍-->
                <div class="choicedMsg">
                    <p><span>企业营销型网站建设</span>注重网站优化SEO结构，适合于以网络营销为目的的客户，从网站定位与与策划到界面设计，充分体现产品与服务的优势，并且能在搜索引擎中获得比较好的排名。</p>
                    <p><span>创意品牌型网站建设</span>适合注重美工形象的客户，以创意元素设计企业品牌宣传型的网站，有灵魂的设计师为您打造创意精品网站，让访客产生眼前一亮的感觉。</p>
                    <p><span>购物商城型网站建设</span>商城型网站重点围绕产品设计，突出产品才是访客的真实需求；细节上注重用户体验，有效增加客户的信任度，从而提高网站的转化率；打造真正能为您带来订单的在线商城。</p>
                    <p><span>手机微信网站建设</span>随着移动终端的普及，手机上网，越来受到关注， 手机网站具有让消费者随时、随地、随身访问的优势和方便快捷的不可取代的特点，像京东，淘宝等大型网站已经建立了手机网站。</p>
                </div>
        </div>

        {{--这里是网站开发选项的具体情况--}}
        {{--提供模板--}}
        <div style="width: 90%;margin: 0 auto;

">
            <p class="muban_title">我们为您提供这些模板···</p>
            <ul class="muban_list">
                <li>
                    <div class="img">
                        <img src="/img/工业风模板.png"/>
                    </div>
                    <p class="t">工业风</p>
                </li>
                <li>
                    <div class="img">
                        <img src="/img/极光紫.png"/>
                    </div>
                    <p class="t">极光紫</p>
                </li>
                <li>
                    <div class="img">
                        <img src="/img/简约设计.png"/>
                    </div>
                    <p class="t">简约设计</p>
                </li>
                <li>
                    <div class="img">
                        <img src="/img/科技橘.png"/>
                    </div>
                    <p class="t">科技橘</p>
                </li>
                <li>
                    <div class="img">
                        <img src="/img/酷炫黑绿.png"/>
                    </div>
                    <p class="t">酷炫黑绿</p>
                </li>
                {{--<li>--}}
                    {{--<div class="img">更多模板</div>--}}
                    {{--<p class="t">更多模板</p>--}}
                {{--</li>--}}
            </ul>
            <style>
                .muban_title{
                    font-size: 32px;
                    text-align: center;
                    text-indent: 6px;
                    letter-spacing: 6px;
                    margin-top: 86px;
                    margin-bottom: 60px;
                }
                .muban_list{
                    margin: 0;
                    margin-top: 36px;
                    text-align: center;
                }
                .muban_list li{
                    display: inline-block;
                    margin: 0 20px;
                    position: relative;
                    /*width: 450px;*/
                    margin-bottom: 20px;
                    vertical-align: middle;
                    /*height:380px;*/
                }
                .muban_list li .img{
                    width: 290px;
                    height: 168px;
                    overflow: hidden;
                    text-align: center;
                    box-shadow: 0 0 10px #ccc;
                }
                .muban_list li .img img{
                    width: 100%;
                    overflow: hidden;
                }
                .muban_list li .t{
                    font-size: 18px;
                }
            </style>
        </div>
        {{--网站可以带来什么--}}
        <div style="
/*background: url('img/宣传2.png');*/
/*height: 500px;*/
/*color: #fff;*/
/*padding-top: 20px;*/
/*background-size: contain;*/
            ">

        </div>
        <div style="
            font-size: 32px;
            text-align: center;
            text-indent: 6px;
            letter-spacing: 6px;
            margin-top: 86px;
            margin-bottom: 86px;

            ">我们能给你带来什么</div>
        <div style="text-align: center">
            <div style="margin: 0 auto;box-shadow: 0 0 10px #ccc;display: inline-block;">
                <img style="width: auto;max-width: 100%" src="img/06121.png" />
            </div>
            <div style="margin-top: 36px;font-size: 18px;letter-spacing: 2px;color: #787878">
                <span style="font-size: 30px;
letter-spacing: 36px;
text-indent: 36px;
margin-bottom: 36px;
display: inline-block;
margin-top: 30px;">设计</span>
                <p>把握核心，让客户更加懂你！</p>
                <p style="line-height: 1.5em;font-size: 14px">任何企业都拥有自己的生存法宝，从设计上将其放大，瞬间抓住用户的目光</p>
            </div>
            <div style="margin-top: 36px;font-size: 18px;letter-spacing: 2px;color: #787878">
                <span style="font-size: 30px;
letter-spacing: 36px;
text-indent: 36px;
margin-bottom: 36px;
display: inline-block;
margin-top: 30px;">&多端&</span>
                <p>自适应开发，PC/移动，都解决！</p>
                <p style="line-height: 1.5em;font-size: 14px">多一点用心，客户所一份方便，随心随地，随时了解您的业务情况</p>
            </div>
            <div style="margin-top: 36px;font-size: 18px;letter-spacing: 2px;color: #787878">
                <span style="font-size: 30px;
letter-spacing: 36px;
text-indent: 36px;
margin-bottom: 36px;
display: inline-block;
margin-top: 30px;">业务</span>
                <p>互联网加 业务（产品）</p>
                <p style="line-height: 1.5em;font-size: 14px">未知的总是让人好奇的，联系我们，一起研究业务与互联网的结合方案，或许会发生很有趣的事</p>
            </div>
        </div>
        {{--<div style="--}}
{{--font-size: 32px;--}}
{{--text-align: center;--}}
{{--text-indent: 6px;--}}
{{--letter-spacing: 6px;--}}
{{--margin-top: 86px;--}}
{{--margin-bottom: 86px;--}}
{{--height: 300px;--}}
{{--overflow: hidden;--}}
{{--position: relative;--}}
{{--line-height: 300px;--}}
{{--width: 90%;--}}
{{--margin: 0 auto;--}}
    {{--margin-top: 0px;--}}
    {{--margin-bottom: 0px;--}}
{{--margin-top: 180px;--}}
{{--margin-bottom: 180px;--}}
            {{--">--}}
            {{--<img style="width: 100%;position: absolute;top:-36%;left: 0" src="img/banner123.jpg" />--}}
            {{--<div style="--}}
{{--background: #d5d5d5cc;--}}
{{--position: absolute;--}}
{{--top: 0;--}}
{{--left: 0;--}}
{{--width: 100%;--}}
{{--height: 100%;--}}
{{--">--}}
            {{--</div>--}}
            {{--<div style="position: relative;--}}
{{--width: 80%;--}}
{{--left: 0;--}}
{{--right: 0;--}}
{{--margin: 0 auto;--}}
{{--font-size: 30px;--}}
{{--font-size: 80%;--}}
{{--">--}}
                {{--<p style="text-align: left;--}}
{{--margin-top: 108px;--}}
{{--color: #fff;--}}
{{--text-shadow: 0 0 10px #5f5f5f;--}}
{{--">打造营销品牌，产品与互联网相结合</p>--}}
                {{--<p style="text-align: right;--}}
{{--color: #595959;">为您提供更好的营销工具，这是目前我们所能···</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div style="text-align: center;margin-top: 180px;margin-bottom: 180px">
            <img style="max-width: 100%" src="img/banner001.png" />
        </div>
    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout wechatServerType">
        <div class="choicedAboutHeader">
        <!--选择标题-->
        <div id="choicedAbout2" class="choicedTitle">微信开发</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>公众平台开发</span>将您的品牌展示给微信用户，减少宣传成本，建立您与客户之间更好的互动沟通通道，将您的客户接入企业客户关系管理系统（CRM系统）中进行促销、推广、宣传、售后等活动，形成一种主流的线上线下微信互动营销方式，打造属于您自身的商业生态链。</p>
            <p><span>小程序开发</span>微信生态的新形式，多种形式的搭配展示，为您的客户提供多种入网选择，体验通道。</p>
        </div>
        </div>
        {{--切换后的内容--}}
        <div>
            <div>
                <div class="we_title">欢迎踏入微世界</div>
                <div class="we_censng_show">
                    <div class="we_item">
                        <div class="we_item_icon">
                            <img src="img/we500.png" />
                        </div>
                        <p>辰象科技·公众号</p>
                    </div>
                    <div class="we_item">
                        <div class="we_item_icon">
                            <img src="img/we-s-500.jpg" />
                        </div>
                        <p>辰象科技·小程序</p>
                    </div>
                </div>
                <style>
                    .we_title{
                        font-size: 32px;
                        text-align: center;
                        text-indent: 6px;
                        letter-spacing: 6px;
                        margin-top: 80px;
                    }
                    .we_censng_show{
                        text-align: center;
                        padding-top: 86px;
                    }
                    .we_item{
                        display: inline-block;
                        margin: 0 80px;
                    }
                    .we_item_icon{
                        box-shadow: 0 0 10px #ccc;
                    }
                    .we_item img{
                        width: 180px;
                    }
                    .we_item p{
                        margin-top: 36px;
                        color: #696969;
                        letter-spacing: 2px;
                        text-indent: 2px;
                    }
                </style>
            </div>
            <div class="itemPublic">
                <div class="public_title">公众平台开发</div>
                <div class="public_about">微信公众平台开发是指为微信公众号进行业务开发，为移动应用、PC端网站、公众号第三方平台（为各行各业公众号运营者提供服务）的开发。</div>
                {{--<div class="public_power">--}}
                    {{--<div class="public_power_list">--}}
                        {{--<div class="pbpl-item"></div>--}}
                    {{--</div>--}}
                    {{--装饰--}}
                    {{--<div class="public_show"><img src="/img/0614.jpg" /></div>--}}
                    {{--重点--}}
                    {{--<div class="public_power_list">--}}
                        {{--<div class="pbpl-item"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="public_pw">
                    <div class="pb_pw_item">
                        <div class="pb_pw_item_show">
                            <div class="pb_pw_item_show_show">
                                <img style="left: 0%;" src="/img/061401.png" />
                            </div>
                            <div class="pb_pw_item_show_title">多端融合</div>
                            <div class="pb_pw_item_show_conent">网站加微信/移动端加微信/多端微信结合/为您的客户提供多种入网选择，更便捷的登录操作。</div>
                        </div>
                    </div>
                    <div class="pb_pw_item">
                        <div class="pb_pw_item_show">
                            <div class="pb_pw_item_show_show">
                                <img style="left: -104%" src="/img/061401.png" />
                            </div>
                            <div class="pb_pw_item_show_title">用户链接</div>
                            <div class="pb_pw_item_show_conent">平台与微信之间进行链接，获取微信客户资料，让您可以更好的对您业务进行分析。</div>
                        </div>
                    </div>
                    <div class="pb_pw_item">
                        <div class="pb_pw_item_show">
                            <div class="pb_pw_item_show_show">
                                <img style="right: -1%;bottom: -2%;" src="/img/061401.png" />
                            </div>
                            <div class="pb_pw_item_show_title">特色功能</div>
                            <div class="pb_pw_item_show_conent">传统网站受技术限制，接入微信开发可实现跨技术层面的一些功能。如：位置服务，门店，卡券等···</div>
                        </div>
                    </div>
                    <div class="pb_pw_item">
                        <div class="pb_pw_item_show">
                            <div class="pb_pw_item_show_show">
                                <img style="top: -104%;left: -2%;" src="/img/061401.png" />
                            </div>
                            <div class="pb_pw_item_show_title">方案沟通</div>
                            <div class="pb_pw_item_show_conent">想要入门而不得其法？没事的，无论做不做生意，您都可以来咨询我们！029-87976807</div>
                        </div>
                    </div>
                </div>
                {{--<div class="banner-wechat"><img src="/img/180614.png" /></div>--}}
                <style>
                    .itemPublic{
                        /*background: #fff;*/
                        padding-top: 1px;
                        margin-top: 55px;
                        padding-bottom: 55px;
                    }
                    .public_title{
                        font-size: 32px;
                        text-align: center;
                        text-indent: 6px;
                        letter-spacing: 6px;
                        margin-top: 80px;
                    }
                    .public_about{
                        font-size: 14px;
                        text-align: center;
                        letter-spacing: 2px;
                        text-indent: 2px;
                        margin-top: 62px;
                        color: #888;
                    }
                    .public_pw{
                        margin-top: 68px;
                        text-align: center;
                    }
                    .pb_pw_item{
                        display: inline-block;
                        margin: 0 36px;
                        vertical-align: top;
                    }
                    .pb_pw_item_show{
                        width: 216px;
                    }
                    .pb_pw_item_show_show{
                        width: 160px;
                        overflow: hidden;
                        height: 160px;
                        box-shadow: 0 0 10px #818181;
                        margin: 0 auto;
                        border-radius: 8%;
                        position: relative;
                    }
                    .pb_pw_item_show_show img{
                        width: 205%;
                        position: absolute;
                    }
                    .pb_pw_item_show_conent{
                        margin-top: 16px;
                        text-align: center;
                        font-size: 14px;
                        /*letter-spacing: 14px;*/
                        color: #5c5c5c;
                        line-height: 2em;
                        /*text-align: left;*/
                    }
                    .pb_pw_item_show_title{
                        margin-top: 36px;
                        text-align: center;
                        font-size: 18px;
                        /*letter-spacing: 14px;*/
                        color: #5c5c5c;
                        line-height: 1.5em;
                    }
                    /*.banner-wechat{*/
                        /*background: #272727b3;*/
                        /*text-align: center;*/
                        /*margin-top: 70px;*/
                    /*}*/
                    /*.banner-wechat img{*/
                        /*width: 85%;*/
                    /*}*/
                    /*.public_power{*/
                        /*text-align: center;*/
                        /*margin-top: 36px;*/
                    /*}*/
                    /*.public_show{*/
                        /*display: inline-block;*/
                        /*width: 400px;*/
                    /*}*/
                    /*.public_show img{*/
                        /*width: 100%;*/
                    /*}*/
                    /*.public_power_list{}*/
                    /*.pbpl-item{}*/
                </style>
            </div>
            <div class="itemSmallApp">
                <div class="smallApp_title">小程序开发</div>
                <div class="smallApp_about">微信扫一扫，既得小程序，比公众号功能更强大。*一扫即得*</div>
                <div class="sapp_bg">
                    <img src="img/180614.png" />
                    <div class="join">错过了微信公众号，现在还要错过小程序?</div>
                    <div class="sapp_show">
                        <div class="s"><img src="img/w0615.jpg" /></div>
                        <div class="show_list">
                            <div class="item">
                                <div class="t">即用即得</div>
                                <div class="about">只需微信扫一扫，马上打开功能强大的小程序应用！</div>
                            </div>
                            <div class="item">
                                <div class="t">时间线显示</div>
                                <div class="about">使用完小程序后，将按照使用顺序排列在小程序的程序坞中，方便客户的下次使用！</div>
                            </div>
                            <div class="item">
                                <div class="t">功能强大</div>
                                <div class="about">与微信所能取得的手机权限，用户信息相结合，再结合微信的特色功能，让您不用开发APP，就可以体验一些强大的功能！</div>
                            </div>
                            {{--<div class="item">--}}
                                {{--<div class="t"></div>--}}
                                {{--<div class="about"></div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <style>
                    .itemSmallApp{}
                    .smallApp_title{
                        font-size: 32px;
                        text-align: center;
                        text-indent: 6px;
                        letter-spacing: 6px;
                        margin-top: 80px;
                    }
                    .smallApp_about{
                        font-size: 14px;
                        text-align: center;
                        letter-spacing: 2px;
                        text-indent: 2px;
                        margin-top: 46px;
                        color: #888;
                    }
                    .sapp_bg{
                        /*overflow: hidden;*/
                        width: 100%;
                        position: relative;
                        background: #ccc;
                        margin-top: 100px;
                        margin-bottom: 116px;
                    }
                    .sapp_bg > img{
                        width: 100%;
                    }
                    .sapp_bg .join{
                        position: absolute;
                        z-index: 9999;
                        line-height: 2em;
                        /*left: 50%;*/
/**/
                        /*right: 50%;*/
/**/
                        /*margin: 0 auto;*/

                        top: 20%;

                        font-size: 30px;

                        width: 100%;

                        text-align: center;

                        text-shadow: 0 0 10px #000;

                        color: #fff;
                    }
                    .sapp_bg .sapp_show{
                        position: absolute;

                        top: 36%;

                        text-align: center;

                        left: 0;

                        right: 0;

                        /*width: 216px;*/

                        margin: 0 auto;

                        /*box-shadow: 0 0 29px #6b6b6b;*/

                        padding: 0;
                    }
                    .sapp_bg .s{
                        width: 216px;
                        box-shadow: 0 0 29px #6b6b6b;
                        display: inline-block;
                    }
                    .sapp_bg .s img{
                        width: 100%;
                    }
                    .sapp_bg .show_list {
                        display: inline-block;
                        vertical-align: top;
                        background: #00000080;
                        padding: 39px;
                        margin-left: 45px;
                        width: 50%;
                    }
                    .sapp_bg .show_list .item{
                        text-align: left;
                        color: #fff;
                        /*background: #00000080;*/
                        line-height: 2em;
                        margin-bottom: 31px;
                    }
                    .sapp_bg .show_list .item .t{
                        font-size: 22px;
                        margin-bottom: 20px;
                    }
                    .sapp_bg .show_list .item .about{
                        line-height: 2em;
                    }
                </style>
            </div>
        </div>

    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout appServerType">
        <div class="choicedAboutHeader">
        <!--选择标题-->
        <div id="choicedAbout3" class="choicedTitle">App开发</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>定制开发</span>专注打造优质APP产品，从用户体验出发，细致需求分析、产品设计、技术研发，快速助您产品落地</p>
        </div>
        </div>
        {{--选择后的展示--}}
        <div>
            <div class="app_one">
                <div class="app_title">定制开发</div>
                <div class="app_one_img"><img src="img/app_banner2.png" /></div>
                <div class="app_dingzhi_about">
                    <div class="t">为什么我们只提到了定制开发?</div>
                    <div class="msg">
                        <p>APP技术难度大，开发周期长，预算成本高，不是所有企业都有实力、有必要做APP的！</p>
                        <p>APP常见于开发成服务客户类型，即做到真正的应用服务！</p>
                        <p>如品牌展示等需求，我们建议您进行网站、微信等开发服务！</p>
                        <p>APP，为应用而生！</p>
                    </div>
                </div>
            </div>
            {{--APP特性--}}
            <div class="app_feature">
                <div class="app_featuresList_title">APP特性</div>
                <div class="app_featuresList">
                    <div class="item">
                        <div class="icon"></div>
                        <div class="t">获取定位</div>
                        <div class="about">获取GPS，得到用户的位置，从而为用户提供一些服务。</div>
                    </div>
                    <div class="item">
                        <div class="icon bluetooth"></div>
                        <div class="t">蓝牙服务</div>
                        <div class="about">通过操纵蓝牙设备，可以将更多的设备连结在一起。</div>
                    </div>
                    <div class="item">
                        <div class="icon speak"></div>
                        <div class="t">语音技术</div>
                        <div class="about">获取您的语音，使用识别技术识别您的说话，从而更多的可能。</div>
                    </div>
                    <div class="item">
                        <div class="icon phone_icon"></div>
                        <div class="t">设备信息</div>
                        <div class="about">获取用户的基本设备信息，从而对客户提供更适合的应用服务。</div>
                    </div>
                    <div class="item">
                        <div class="icon yingjian"></div>
                        <div class="t">硬件交互</div>
                        <div class="about">除GPS、蓝牙、麦克风外，APP程序还能对其他硬件进行交互操作。</div>
                    </div>
                    <div class="item">
                        <div class="icon duliyunxing"></div>
                        <div class="t">独立运行</div>
                        <div class="about">APP不需要借助其他的软件运行，我就是我，不一样的APP。</div>
                    </div>
                    <div class="item">
                        <div class="icon azpg"></div>
                        <div class="t">安卓/苹果</div>
                        <div class="about">开发时应考虑开发安卓APP还是苹果APP，或者说是都要开发。</div>
                    </div>
                    <div class="item">
                        <div class="icon gengduo"></div>
                        <div class="t">还有更多</div>
                        <div class="about">更多的特性不再列举，总而言之，APP是如此的强大。</div>
                    </div>
                </div>
                {{--情况说明--}}
                <div class="app_featuresList_about">
                    <p>APP开发，即从设备出发，硬件与技术的相结合，为用户提供专业的服务。以上为APP开发常用特性，希望可以为您提供设计思路。如果您有疑问，我们一再强调，互联网，我们是专业的，请联系我们，我们为您提供解决方案！</p>
                </div>
            </div>
            <style>
                .app_one{
                    max-width: 1000px;
                    margin: 0 auto;
                }
                .app_title{
                    font-size: 32px;
                    text-align: center;
                    text-indent: 6px;
                    letter-spacing: 6px;
                    margin-top: 80px;
                }
                .app_one_img{
                    text-align: center;
                    margin-top: 80px;
                }
                .app_one_img img{
                    width: 100%;
                }
                .app_dingzhi_about{
                    margin-top: 60px;
                    background: #e1e1e166;
                    padding: 4em 2.5em;
                }
                .app_dingzhi_about .t{
                    font-size: 22px;
                }
                .app_dingzhi_about .msg{
                    margin-top: 40px;
                }
                .app_dingzhi_about .msg p{
                    line-height: 2.5em;
                    margin: 0;
                    margin-top: 2em;
                    font-size: 14px;
                }
                .app_featuresList{
                    max-width: 1000px;
                    margin: 0 auto;
                }
                .app_featuresList_title{
                    font-size: 32px;
                    text-align: center;
                    text-indent: 6px;
                    letter-spacing: 6px;
                    margin-top: 80px;
                    margin-bottom: 96px;
                }
                .app_featuresList .item{
                    display: inline-block;
                    width: 246px;
                    text-align: center;
                    color: #666;
                    margin-bottom: 96px;
                }
                .app_featuresList .item .icon{
                    font-family: FontAwesome;
                    font-size: 66px;
                    color: #ccc;
                }
                .app_featuresList .item .icon:after{
                    content: "\f124";
                }
                .app_featuresList .item .t{
                    margin-top: 20px;
                    color: #000;
                    font-size: 22px;
                }
                .app_featuresList .item .about{
                    font-size: 15px;
                    margin: 0 auto;
                    margin-top: 24px;
                    line-height: 2em;
                    width: 95%;
                }
                .app_featuresList_about{
                    max-width: 1000px;
                    margin: 0 auto;
                    /*margin-bottom: 0px;*/
                    background: #7878781a;
                    padding: 2em;
                    box-sizing: border-box;
                    color: #777;
                    margin-bottom: 102px;
                }
                .app_featuresList_about p{
                    line-height: 2.5em;
                }
            </style>
        </div>
    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout zongheServerType">
        <div class="choicedAboutHeader">
            <!--选择标题-->
            <div id="choicedAbout4" class="choicedTitle">综合开发</div>
            <!--选择介绍-->
            <div class="choicedMsg">
                <p><span>全方面切入</span>细致分析公司特点，为您打造最有价值的服务搭配，择其有用者相辅相成，为您及客户提供多种服务与使用方案！</p>
                <p><span>量身打造</span>不是所有的东西都需要，而是根据需求，为您定身打造，所适合您的搭配，不是所有产品都适合你，而是要选最适合你的！</p>
            </div>
        </div>
        <div>
            <div class="app_title">综合开发</div>
            {{--小标题--}}
            <div class="zh_smallTitle">网站/微信/APP 多选搭配</div>
            <div class="zh_dapei">
                <p>不是贵的就是好的，不是选择越多就是好的！</p>
                <p>合适的才是最好的！多选搭配，我们给您提供建议！</p>
            </div>
            <div style="
max-width: 1000px;

margin: 0 auto;

    /*margin-top: 0px;*/

margin-top: 80px;
">
                <img style="width: 100%" src="/img/0616.png" />
            </div>
            <div class="zh_smallTitle">综合开发 全面打造用户体验</div>
            <div style="margin-bottom: 88px" class="zh_dapei">
                <p>技术壁垒！技术是有壁垒的，多种技术搭配，才能给用户带来全方位的体验！</p>
                <p>我们从您的角度出发，为您提供服务。</p>
                <p>您从您的客户角度出发，为您的客户提供更好的在线（及线下）服务。</p>
                <p>我们从您的角度出发，愿为您分忧！</p>
                <p>愿，共赢！</p>
            </div>
            {{--<div class="zh_answer">--}}
                {{--<span class="zh_one_icon"></span>--}}
                {{--<span>······</span>--}}
            {{--</div>--}}

            <style>
                .zh_smallTitle{
                    text-align: center;

                    margin-top: 74px;

                    font-size: 23px;

                    letter-spacing: 12px;

                    text-indent: 12px;
                    line-height: 2em;
                }
                /*.zh_one_icon:after{*/
                    /*font-family: FontAwesome;*/
                    /*content: "\f086";*/
                /*}*/
                .zh_dapei{
                    max-width: 1000px;
                    margin: 0 auto;
                    border-left: 2px solid #d4d4d4;
                    padding: 20px 18px;
                    margin-top: 58px;
                    box-sizing: border-box;
                    color: #888;
                    letter-spacing: 0.3em;
                }
                .zh_dapei p{

                }
            </style>
        </div>
    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout cehuaServerType">
        <div class="choicedAboutHeader">
        <!--选择标题-->
        <div id="choicedAbout5" class="choicedTitle">企业策划</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>落地互联网+</span>因为更懂技术，所以想法更多……</p>
            <p><span>精确的数据调查</span>从多方面去收集企业相关信息，做出尽可能准确的分析，为企业的发展，提供能走的更长远的方向。</p>
        </div>
        </div>
        <div>
            <div style="
max-width: 1000px;
margin: 0 auto;
    /*margin-top: 0px;*/

margin-top: 80px;
margin-bottom: 88px;
">
                <img style="width: 100%" src="/img/06161.png" />
            </div>
        </div>
    </div>
    <!--合作流程-->
    <!--去洽谈-->
    <div class="goBuy">
        <div onclick="location.href = pageObj.jumpSrc;" class="goBuyButton">去洽谈</div>
    </div>
    <div>
        <img style="width: 100%;" src="img/宣传2.png"/>
        <div>
        </div>
    </div>
@endsection