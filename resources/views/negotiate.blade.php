@extends('base')

@section('myCss')
    <link href="/plugins/SlidingLock/css/unlock.css" type="text/css" rel="stylesheet" />
    <link href="/css/negotiate.css" type="text/css" rel="stylesheet" />
@endsection
@section('myJs')
    @if($objtype)
        <script>var pageStatus = 'hasPara'</script>
    @else
        <script>var pageStatus = 'noPara'</script>
    @endif
    <script type="text/javascript" src="/js/pages/negotiate.js"></script>
    <script type="text/javascript" src="/plugins/SlidingLock/js/unlock.js"></script>
@endsection

@section('pageMain')
    <!--背景-->
    <div class="negotiate_bg" style="
        font-family: 书体坊兰亭体;
        color: #e79c4b;
        background: #fff;
        width: 100px;
        line-height: 100px;
        text-align: center;
        font-size: 45px;
">2018</div>

    {{--//如果页面有传入选择了哪个产品这个参数--}}
    {{--@if($objtype)--}}
    @if($objtype)
        <!--洽谈盒子-->
        <div class="negotiateBox negotiateMain">
            <!--标题：业务洽谈-->
            <div class="title">业务洽谈</div>
            <!--留言板-->
            <div class="negotiateBoard">
                <!--Help-->
                <div class="help">请留下您的联系信息，一个工作日内回复，紧急可右侧直接联系</div>
                <!--填写内容区-->
                <div class="writeBlock">
                    <!--当前选择-->
                    <div class="item itemType">
                        <div class="t">业务类型</div>
                        <div class="i">
                            <a href="/serverscope">
                                <div class="choiced"><span class="serverTypeChoiced">{{base64_decode($objtype)}}</span><span class="serverTypeOther">请选择</span><span class="icon">√</span></div>
                            </a>
                        </div>
                    </div>
                    <!--联系号码-->
                    <div class="item">
                        <div class="t">联系号码</div>
                        <div class="i"><input class="inputDomPhone" onblur="checkPhone(this)" type="text" /><div class="inputErrorMsg inputErrorMsgPhone"><span class="icon">*</span><span class="val">请输入正确手机号码</span></div></div>
                    </div>
                    <!--怎么称呼-->
                    <div class="item">
                        <div class="t">联系人</div>
                        <div class="i"><input class="inputDomName" onblur="checkName(this)" type="text" /><div class="inputErrorMsg inputErrorMsgName"><span class="icon">*</span><span class="val">请输入正确的联系人</span></div></div>
                    </div>
                    <!--怎么称呼-->
                    <div class="item">
                        <div class="t">您的职务</div>
                        <div class="i"><input class="inputDomPost" onblur="checkPost(this)" type="text" /><div class="inputErrorMsg inputErrorMsgPost"><span class="icon">*</span><span class="val">请输入正确的职务</span></div></div>
                    </div>
                    <!--性别-->
                    <div class="item">
                        <div class="t">性别</div>
                        <div class="i itemSex"><div class="sex"><input type="radio" name="sex" value="boy" checked="true" />男</div><div class="sex"><input value="girl" type="radio" name="sex" /></div>女</div>
                    </div>
                    <div class="item robotCheck">
                        <div class="t">机器人验证</div>
                        <div class="i">
                            <div class="wrapper">
                                {{--<div class="bar1 bar"></div>--}}
                                {{--<div class="bar2 bar"></div>--}}
                                {{--<div class="bar3 bar"></div>--}}
                                <div class="bar1 bar"></div>
                                {{--<div class="bar5 bar"></div>--}}
                            </div>
                        </div>
                    </div>
                    <!--验证码-->
                    <div class="item itemCheck">
                        <div class="t">手机验证码</div>
                        <div class="i"><input class="inputDomCode" onblur="checkCode(this)" type="text" /><div onclick="getNumber()" class="getNumber">获取验证码</div>
                            <div class="inputErrorMsg inputErrorMsgCode"><span class="icon">*</span><span class="val">请输入正确验证码</span></div>
                        </div>
                    </div>
                    <div style="display: none">{{ csrf_field() }}</div>
                </div>
                <!--提交区域-->
                <div onclick="submit()" class="btn-submit">提交</div>
                <div style="color: #fff;" class="inputErrorMsg inputErrorSubmit"><span class="icon">*</span><span class="val">请再次检查</span></div>
            </div>
        </div>
    @else
        <!--洽谈步骤-->
        <div class="negotiateStep negotiateMain">
            <!--标题：业务洽谈-->
            <div class="title">业务洽谈</div>
            <!--业务洽谈流程-->
            <div class="negotiateWay">
                <p>第一步：点击业务范围，选择业务！</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——上方导航，点击业务范围，将会有对我们业务的具体介绍。</p>
                <p>第二步：下拉点击业务洽谈，进行合作！</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——您主动，才会有更多的可能。</p>
                <p>辰象科技：辰是星辰的辰，象是万象的象！</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——辰象科技</p>
            </div>
        </div>
    @endif


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

    <script type="text/javascript">
        $('.bar1').slideToUnlock();
    </script>
@endsection