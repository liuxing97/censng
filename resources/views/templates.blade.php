@extends('base')

@section('myCss')
    {{--<link href="/css/negotiate.css" type="text/css" rel="stylesheet" />--}}
@endsection
@section('myJs')
    <script type="text/javascript" src="/plugins/imgZoom/javascripts/jquery.drag.js"></script>
    <script type="text/javascript" src="/plugins/imgZoom/javascripts/jquery.imgZoom.js"></script>
    <script type="text/javascript" src="/plugins/imgZoom/javascripts/jquery.mousewheel.js"></script>
@endsection
@section("pageMain")
    {{--Banner--}}
    <div class="banner">
        <img style="max-width: 100%" src="img/banner0624.png" />
        <div style="display: none" class="bannerItem">
            <div class="img-computer">
                <img src="img/0623.png" />
            </div>
            {{--<div class="showBox">--}}
                {{--<div class="showBoxMain">--}}
                    {{--<p class="t">用心打造品质网站</p>--}}
                    {{--<p class="v">一套<span>炫酷、实用</span>的网站我们为您提供</p>--}}
                    {{--<div class="p">¥700起/永久</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <style>
        .banner{
            background: #1a1a1a;;
            text-align: center;
            /*height: 580px;*/
        }
        .bannerItem{

        }
        .bannerItem .img-computer{
            display: inline-block;
            vertical-align: bottom;
            margin-top: 220px;
            position: relative;
            z-index: 9999;
            left: 200px;
        }
        .bannerItem .img-computer img{
            max-height: 290px;
        }
        .bannerItem .showBox{
            width: 700px;
            height: 320px;
            border: 2px solid rgb(220,55,51);
            display: inline-block;
            position: absolute;
            vertical-align: bottom;
            left: 269px;
            top: 265px;
        }
        .showBoxMain{
            width: 415px;

            /*background: #fff;*/

            /*padding: 40px;*/

            box-sizing: border-box;
        }
        .showBoxMain .t{
            font-size: 26px;

            color: #ff3233;

            margin-bottom: 1.5em;

            letter-spacing: 0.3em;

            margin-top: 58px;
        }
        .showBoxMain .v{
            color: #fff;

            font-size: 14px;

            margin-bottom: 49px;

            letter-spacing: 2px;

            line-height: 2em;
        }
        .showBoxMain .v span{
            font-size: 22px;

            margin: 0 6px;

            color: rgb(255,50,51);
        }
        .showBoxMain .p{
            color: #fff;

            background: #ff3233;

            display: inline-block;

            line-height: 36px;

            font-size: 22px;

            width: 174px;

            border-radius: 8px;
        }
    </style>
    <style>
        .menuItem:nth-child(1){
            border-bottom: none;

        }
        .menuItem:nth-child(6){
            border-bottom: 2px solid #cc1212;
        }
    </style>
    {{--选择列表--}}
    <div class="templateItems">
        <div class="templatesTitle">这么多的模板等你认领</div>
        <div class="templateItemList">
            @for($i=0;$i<10;$i++)
            {{--一个模板--}}
            <div class="item">
                {{--展示--}}
                <div class="show">
                    <img class="showImg{{$i}} showImg" src="/templatesImg/06230{{$i}}.jpg" />
                </div>
                {{--动态查看--}}
                <div class="hovering">
                    {{--标题--}}
                    <div class="temItemTitle">大图电脑IT科技设计公司网站</div>
                    {{--放大镜--}}
                    <div onclick="$('body').append(zoomFileNumber({{$i}}));$('html,body').addClass('ovfHiden')" class="chakan"><span class="magnifierIcon"></span></div>
                    {{--购买--}}
                    <div style="display: none;" class="xuanze">
                        <span class="xuanzeIcon"></span>选购
                    </div>
                </div>
            </div>
                @endfor
            <div style="text-align: center;font-size: 22px;">更多正在路上，敬请期待 · · ·</div>
        </div>
    </div>
    <style>
        .templatesTitle{
            font-size: 32px;
            /*overflow: scroll;*/
            margin-bottom: 3em;
            text-align: center;
            letter-spacing: 0.2em;
            text-indent: 0.2em;
        }
        .templateItems{
            padding: 9em 60px;
            text-align: left;
        }
        .templateItemList{
        }
        .templateItemList .item{
            display: inline-block;
            margin-right: 120px;
            position: relative;
            left: 60px;
            margin-bottom: 7em;
        }
        .templateItemList .item .show{
            width: 280px;
            height: 380px;
            overflow: hidden;
            box-shadow: 0 0 10px #686868;
        }
        .show img{
            width: 100%;
        }
        .item:hover .hovering{
            display: inline-block;
        }
        .item .hovering{
            display: none;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
        }
        .magnifierIcon:after{
            font-family: FontAwesome;
            content: "\f002";;
            color: #fff;
            padding: 20px;
            display: inline-block;
        }
        .item .hovering .chakan{
            color: #fff;
            font-size: 22px;
            display: inline-block;
            /*margin-top: 130px;*/
            /*letter-spacing: 0.5em;*/
            background: #363636b3;
            /*line-height: 41px;*/
            /*width: 200px;*/
            border-radius: 6em;
            cursor: pointer;
        }
        .item .hovering .chakan:hover{
            background: brown;
        }
        .temItemTitle{
            color: #fff;
            font-size: 22px;
            padding: 0 16px;
            margin-top: 2em;
            line-height: 1.5em;
            letter-spacing: 6px;
            margin-bottom: 2em;
            text-indent: 6px;
        }
        .xuanze{
            position: absolute;
            bottom: 1.3em;
            color: #fff;
            text-align: center;
            font-size: 22px;
            background: #363636b3;
            right: 0;
            line-height: 2em;
            padding: 0 25px 0 5px;
            cursor: pointer;
        }
        .xuanze:hover{
            background: #b12121;
        }
        .xuanzeIcon:after{
            font-family: FontAwesome;
            content: "\f00c";
            padding: 10px;

        }
    </style>
    {{--预览--}}
    <script>
        function zoomFileNumber(number) {
            var str = "<div class=\"imgZoom\">" +
                "<p style=\"width: 90%;margin: 0 auto;font-size: 28px;line-height: 2em;margin-bottom: 2em;margin-top: 1em;\">大图展示</p>\n" +
                "<img src=\"/templatesImg/06230"+number+".jpg\" />\n" +
                "</div>"+
                "<div onclick=\"$('.imgZoom').remove();$('.closeBg').remove();$('html,body').removeClass('ovfHiden')\" class='closeBg'></div>";
            return str;
        }

    </script>
    <style>
        .closeBg{
            position: fixed;
            background: rgba(0,0,0,0.86);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99998;
        }
        .imgZoom{
            top: 0;
            width: 60%;
            height: 100%;
            background: #fff;
            position: fixed;
            z-index: 99999;
            left: 0;
            right: 0;
            margin: 0 auto;
            /*box-shadow: 0 0 10px #fefefe;*/
            overflow-y: auto;
            padding-top: 2em;
            text-align: center;
        }
        .imgZoom img{
            width: 90%;
            margin-bottom: 13em;
        }
    </style>
    <style>
        .ovfHiden{overflow: hidden}
        .banner{
            width: 100%;
            overflow: hidden;
        }
        @media screen and (max-width: 360px){
            .banner img{
                width: 150%;
                position: relative;
                left: -25%;
                max-width: none!important;
            }
            .templateItems{
                padding: 4em 0;
                text-align: center;
            }
            .templateItems .item{
                left: 0;
                margin-right: 0;
            }
            .item .show{
                width: 254px!important;
                height: 345px!important;
            }
            .imgZoom{
                width: 90%;
                height: 80%;
                top:10%;
            }
            .imgZoom img{
                margin: 2em 0 4em 0;
            }
            .imgZoom p{
                margin-bottom: 1em!important;
            }
            .ovfHiden{overflow: hidden;height: 100%}
        }
        .header{
            z-index: 5554!important;
        }
    </style>
@endsection