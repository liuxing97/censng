@extends('base')

@section('myCss')
    {{--<link href="/css/negotiate.css" type="text/css" rel="stylesheet" />--}}
@endsection
@section('myJs')
@endsection

@section("pageMain")
    {{--价格清单--}}
    <div class="priceList">
        {{--<div class="priceListTitle">价目一览表</div>--}}
        <div class="priceList-web">
            <div class="priceList-webTitle">网站类</div>
            <div class="priceList-web-main">
                <div class="p-w-m-item">
                    {{--<div class="p-w-m-i-icon"></div>--}}
                    <div class="p-w-m-i-title">购买模板</div>
                    <div class="p-w-m-i-price">￥700/永久</div>
                    <div class="p-w-m-i-about">
                        <p>专业的人员设计</p>
                        <p>完善的沟通体制</p>
                        <p>全年无休售后服务</p>
                        <p>详细指导站点使用</p>
                        <p>保修范围内免费修改</p>
                    </div>
                    <a href="/template"><div class="p-w-m-i-button">立即购买</div></a>
                </div>
                <div class="p-w-m-item">
                    {{--<div class="p-w-m-i-icon"></div>--}}
                    <div class="p-w-m-i-title">模板开发</div>
                    <div class="p-w-m-i-price">￥1800起/永久</div>
                    <div class="p-w-m-i-about">
                        <p>实惠的行业级开发方式</p>
                        <p>站在您的角度思考功能</p>
                        <p>在基本模板上进行功能设计</p>
                        <p>故而比顶级的定制开发更显实惠</p>
                        <p>期待您的联系！</p>
                    </div>
                    <a href="/negotiate"><div class="p-w-m-i-button">定制模板</div></a>
                </div>
                <div class="p-w-m-item">
                    {{--<div class="p-w-m-i-icon"></div>--}}
                    <div class="p-w-m-i-title">定制开发</div>
                    <div class="p-w-m-i-price">￥面议/永久</div>
                    <div class="p-w-m-i-about">
                        <p>顶级行业级开发</p>
                        <p>为您打造适合您的产品</p>
                        <p>互联网领域</p>
                        <p>我们是专业的</p>
                        <p>……</p>
                    </div>
                    <a href="/negotiate"><div class="p-w-m-i-button">立即咨询</div></a>
                </div>
            </div>
        </div>
        <div class="priceList-wechat">
            <div class="priceList-wechatTitle">微信类</div>
            <div class="priceList-wechat-main">
                <div class="p-we-m-item">
                    <div class="p-we-m-i-title">小程序模板</div>
                    <div class="p-we-m-i-about">
                        我们提供一些开发过的模板，您可以直接购买模板，我们对其进行小幅度的修改，从而提升模板与您业务的契合度。
                    </div>
                    <div class="p-we-m-i-price">￥2300/套</div>
                </div>
                <div class="p-we-m-item">
                    <div class="p-we-m-i-title">小程序定制</div>
                    <div class="p-we-m-i-about">
                        我们根据您的需求，专业为您打造符合您业务逻辑的小程序，将小程序的功能实现于您最大作用化。
                    </div>
                    <div class="p-we-m-i-price">￥面议/永久</div>
                </div>
                <div class="p-we-m-item">
                    <div class="p-we-m-i-title">公众平台开发</div>
                    <div class="p-we-m-i-about">
                        微信公众平台开发是指为微信公众号进行业务开发，为移动应用、PC端网站、公众号第三方平台（为各行各业公众号运营者提供服务）的开发。
                    </div>
                    <div class="p-we-m-i-price">￥面议/永久</div>
                </div>
            </div>
            <style>
                .priceList-wechat{}
                .priceList-wechatTitle{
                    max-width: 1000px;
                    margin: 0 auto;
                    margin-top: 106px;
                    font-size: 22px;
                    text-align: center;
                    letter-spacing: 8px;
                    text-indent: 8px;
                    margin-bottom: 68px;
                }
                .priceList-wechat-main{
                    max-width: 1000px;
                    margin: 0 auto;
                }
                .p-we-m-item{
                    display: inline-block;
                    margin: 0 10px;
                    margin-bottom: 2em;
                    padding: 40px 38px;
                    box-sizing: border-box;
                    /*background: #fff;*/
                    vertical-align: top;
                    width: 470px;
                    cursor: default;
                }
                .p-we-m-item:hover{
                    box-shadow: 0 0 10px #ccc;
                }
                .p-we-m-i-title{
                    font-size: 18px;
                    margin-bottom: 18px;
                    color: #932f2f;
                }
                .p-we-m-i-about{
                    line-height: 2em;
                    font-size: 14px;
                    color: #a4a4a4;
                }
                .p-we-m-i-price{
                    margin-top: 18px;
                    text-align: right;
                }
            </style>
        </div>
        <div class="priceList-app">
            <div class="priceList-wechatTitle">APP类</div>
            <div style="text-align: center;color: #818181;line-height: 2.5em">因APP类开发为专业为企业定制而做，故而基本为定制开发，需具体根据程序难易程度进行价格预算！</div>
            <div class="app-end" style="text-align: center;margin-top: 3em;font-size: 22px;color: #cc1212;margin-bottom: 10em;">￥面议/永久</div>
        </div>
        <style>
            .menuItem:nth-child(1){
                border-bottom: none;

            }
            .menuItem:nth-child(5){
                border-bottom: 2px solid #cc1212;
            }
            .priceList{

            }
            .priceListTitle{
                font-size: 30px;
                max-width: 1000px;
                margin: 0 auto;
                margin-top: 0px;
                margin-top: 74px;
            }
            .priceList-web{}
            .priceList-webTitle{
                max-width: 1000px;
                margin: 0 auto;
                margin-top: 66px;
                font-size: 22px;
                text-align: center;
                letter-spacing: 8px;
                text-indent: 8px;
            }
            .priceList-web-main{
                max-width: 1000px;
                margin: 0 auto;
                /*margin-top: 0px;*/
                margin-top: 68px;
            }
            .p-w-m-item{
                display: inline-block;
                width: 29%;
                text-align: center;
                margin: 0 2%;
                background: #f6f6f6;
                padding: 38px 0;
                box-shadow: 0 0 10px #c8c8c8;
            }
            .p-w-m-i-title{
                font-size: 18px;
                margin-bottom: 26px;
                line-height: 36px;
                background: #c05656;
                color: #fff;
            }
            .p-w-m-i-price{
                color: brown;
                letter-spacing: 2px;
                text-indent: 2px;
            }
            .p-w-m-i-about{
                margin: 48px 0;
                font-size: 15px;
                color: #969696;
            }
            .p-w-m-i-about p{
                line-height: 2.5em;
            }
            .p-w-m-i-button{
                background: #818181;
                display: inline-block;
                line-height: 36px;
                padding: 0 20px;
                color: #fff;
            }
            .p-w-m-i-button:hover{
                background: #c05656;
            }
        </style>
    </div>

    <style>
        @media screen and (max-width: 360px){
            .p-w-m-item{
                width: 90%;
                margin: 0 auto;
                /*margin-bottom: 0px;*/
                margin-bottom: 4em;
                display: block;
            }
            .priceList-webTitle{
                background: #5c5c5c;
                color: #fff;
                line-height: 2.5em;
            }
            .priceList-wechatTitle{
                background: #5c5c5c;
                color: #fff;
                line-height: 2.5em;
            }
            .p-we-m-item{
                padding: 0 1em;
                box-sizing: border-box;
                width: 100%;
                margin: 2em 0;
                margin-bottom: 4em;
            }
            .p-we-m-item:hover{
                box-shadow: none;
            }
            .app-end{
                margin-bottom: 4em!important;
            }
        }
    </style>
@endsection