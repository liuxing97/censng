@extends('base')

@section('myCss')
<!--<link href="/plugins/SlidingLock/css/unlock.css" type="text/css" rel="stylesheet" />-->
<!--<link href="/css/negotiate.css" type="text/css" rel="stylesheet" />-->
@endsection
@section('myJs')
<script type="text/javascript" src="/js/pages/negotiate.js"></script>
<script type="text/javascript" src="/plugins/SlidingLock/js/unlock.js"></script>
@endsection

@section('pageMain')
<!--背景-->

<!--联系方式-->
<div class="contactWay">
    <div class="writeTemp"></div>
    <div class="contactCard">
        <img class="contactCardImg" src="/img/negotiateCard.png" />
    </div>
    <div class="qrCode">
        <img src="/img/sina-qr-code.png" />
        <div class="title">新浪微博</div>
    </div>
    <div class="about">
        <p>西安辰象的象网络科技有限公司</p>
        {{--<p>地址：西安市雁塔区长安南路449号</p>--}}
        <p>联系方式：029-87976807</p>
        <p>企业邮箱：contact@censng.com</p>
    </div>
</div>
<style>
    .contactWay{
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.66);
        /*position: absolute;*/
        padding-top: 20px;
        /*top: 0;*/
        /*right: 0;*/
        padding-bottom: 100px;
        text-align: center;
    }



    .contactWay{
    }
    .contactWay .about{
        margin-top: 44px;
        text-align: center;
        font-size: 14px;
        color: #fff;
        text-shadow: 0 0 2px #353535;
    }
    .contactWay .about p{

    }
    .contactCard{
        display: none;
        position: relative;
    }
    .contactCardImg{
        width: 100%;
        position: absolute;
        top:40px;
    }
    .qrCode{
        width: 130px;
        margin: 0 auto;
        margin-top: 80px;
        padding: 15px;
        background: rgba(237, 237, 237, 0.7);
        border-radius: 5px;
    }
    .qrCode img{
        width: 100%;

    }
    .qrCode .title{
        margin-top: 16px;

        letter-spacing: 2px;

        text-indent: 2px;
    }
    .menuItem:nth-child(4){
        border-bottom: 2px solid #cc1212;
    }

</style>
<script type="text/javascript">
</script>
@endsection