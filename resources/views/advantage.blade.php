@extends('base')

@section('myCss')
    <link href="css/advantage.css" type="text/css" rel="stylesheet" />
@endsection

@section('pageMain')
    {{--我们不仅仅是一家技术公司--}}
    <div class="banner06" style="margin: 0 auto;"><img style="width: 100%" src="/img/06162.jpg" /></div>
    {{--6个优势--}}
    <div style="background: #9e9e9e33;
color: #545454;
position: relative;
top: -4px">
        @if($isMobile)
            <div class="advMobile">
                <!--新公司ontouchstart-->
                <div onclick="
                if($(this).css('display') != 'inline-block'){
                $('.advantageMsg').hide();$(this).chird('.advantageMsg').css({'position':'relative','top':'10pz','text-align':'left','text-align-last':'left'});$(this).chird('.advantageMsg').show();
                }" class="advantageBox f-advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">灵活搭配</div>
                    </div>
                    <div class="advantageMsg">
                        <p>网站开发/微信公众开发/小程序/APP开发</p>
                        <p>模板购买/模板开发/定制开发</p>
                        <p>提供多种选择，让您在选择上能选择适合您的方案。</p>
                        <p>灵活搭配，让服务发挥最大价值！</p>
                    </div>
                </div>
                <!--小公司-->
                <div onclick="
            if($(this).css('display') != 'inline-block'){
            $('.advantageMsg').hide();$(this).chird('.advantageMsg').css({'position':'relative','top':'10pz','text-align':'left','text-align-last':'left'});$(this).chird('.advantageMsg').show();
            }" class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">品质保证</div>
                    </div>
                    <div class="advantageMsg">
                        <p>专业决定品质！</p>
                        <p>让您的每一分钱，都价有所值。</p>
                        <p>我们学不会用低廉的技术，去压低行业的行价。</p>
                        <p>因为我们要做，就做好的。</p>
                        <p>质量是长久合作的唯一标准！</p>
                    </div>
                </div>
                <!--诚信创造价值-->
                <div onclick="
            if($(this).css('display') != 'inline-block'){$('.advantageMsg').hide();$(this).chird('.advantageMsg').css({'position':'relative','top':'10pz','text-align':'left','text-align-last':'left'});$(this).chird('.advantageMsg').show()}" class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">诚信价值</div>
                    </div>
                    <div class="advantageMsg">
                        <p>诚信创造价值！</p>
                        <p>当我们看到这句话时，我们决定将这句话加入页面设计之中！</p>
                    </div>
                </div>
                <!--专业的设计-->
                <div onclick="
            if($(this).css('display') != 'inline-block'){$('.advantageMsg').hide();$(this).chird('.advantageMsg').css({'position':'relative','top':'10pz','text-align':'left','text-align-last':'left'});$(this).chird('.advantageMsg').show()}" class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">专业专注</div>
                    </div>
                    <div class="advantageMsg">
                        {{--<p>专业设计！</p>--}}
                        <p>互联网，我们是专业的！</p>
                        <p>技术，我们是专业的！</p>
                        <p>时代之下，‘互联网+’来势汹汹！</p>
                        <p>我们可以为您提供方案，让您的‘互联网+’落地。</p>
                    </div>
                </div>
                <div onclick="
            if($(this).css('display') != 'inline-block'){
            $('.advantageMsg').hide();$(this).chird('.advantageMsg').css({'position':'relative','top':'10pz','text-align':'left','text-align-last':'left'});$(this).chird('.advantageMsg').show();
            }" class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">售后无忧</div>
                    </div>
                    <div class="advantageMsg">
                        <p>域名维护、空间维护、系统维护！</p>
                        <p>业务逻辑/页面修改，小功能修改。</p>
                        <p>在售后范围内，我们为您提供最好的服务。</p>
                        <p>售后保障全年无休（上午8：30-12:00，下午14:00-18:30）。</p>
                        <p>为您的业务保驾护航！</p>
                    </div>
                </div>
                <!---->
                <div onclick="if($(this).css('display') != 'inline-block'){$('.advantageMsg').hide();$(this).chird('.advantageMsg').css({'position':'relative','top':'10pz','text-align':'left','text-align-last':'left'});$(this).chird('.advantageMsg').show()}" class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">沟通无忧</div>
                    </div>
                    <div class="advantageMsg">
                        {{--<p>专业设计！</p>--}}
                        <p>在我们所遇的各种合作中，我们深切体会到：</p>
                        <p>在合作中，沟通最为困难，沟通的程度，影响着最后的成果质量。</p>
                        <p>因为有着切肤之痛，所以我们更放在心上。</p>
                    </div>
                </div>
            </div>
        @else
            {{--电脑端--}}
            <div class="advMobile">
                <!--新公司ontouchstart-->
                <div class="advantageBox f-advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">灵活搭配</div>
                    </div>
                    <div class="advantageMsg">
                        <p>网站开发/微信公众开发/小程序/APP开发</p>
                        <p>模板购买/模板开发/定制开发</p>
                        <p>提供多种选择，让您在选择上能选择适合您的方案。</p>
                        <p>灵活搭配，让服务发挥最大价值！</p>
                    </div>
                </div>
                <!--小公司-->
                <div class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">品质保证</div>
                    </div>
                    <div class="advantageMsg">
                        <p>专业决定品质！</p>
                        <p>让您的每一分钱，都价有所值。</p>
                        <p>我们学不会用低廉的技术，去压低行业的行价。</p>
                        <p>因为我们要做，就做好的。</p>
                        <p>质量是长久合作的唯一标准！</p>
                    </div>
                </div>
                <!--诚信创造价值-->
                <div class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">诚信价值</div>
                    </div>
                    <div class="advantageMsg">
                        <p>诚信创造价值！</p>
                        <p>当我们看到这句话时，我们决定将这句话加入页面设计之中！</p>
                    </div>
                </div>
                <!--专业的设计-->
                <div class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">专业专注</div>
                    </div>
                    <div class="advantageMsg">
                        <p>互联网，我们是专业的！</p>
                        <p>技术，我们是专业的！</p>
                        <p>时代之下，‘互联网+’来势汹汹！</p>
                        <p>我们可以为您提供方案，让您的‘互联网+’落地。</p>
                    </div>
                </div>
                <div class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">售后无忧</div>
                    </div>
                    <div class="advantageMsg">
                        <p>域名维护、空间维护、系统维护！</p>
                        <p>业务逻辑/页面修改，小功能修改。</p>
                        <p>在合理的范围内，我们为您提供最好的服务。</p>
                        <p>售后保障全年无休（上午8：30-12:00，下午14:00-18:30）。</p>
                        <p>为您的业务保驾护航！</p>
                    </div>
                </div>
                <!---->
                <div class="advantageBox">
                    <div class="advantageBoxBox">
                        <div class="icon"></div>
                        <div class="advantageTitle">沟通无忧</div>
                    </div>
                    <div class="advantageMsg">
                        {{--<p>专业设计！</p>--}}
                        <p>在我们所遇的各种合作中，我们深切体会到：</p>
                        <p>在合作中，沟通最为困难，沟通的程度，影响着最后的成果质量。</p>
                        <p>因为有着切肤之痛，所以我们更放在心上。</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{--什么是您所需要的，我们在思考--}}
    <div class="howThink" style="
max-width: 1000px;
margin: 0 auto;
    margin-top: 0px;
    margin-bottom: 0px;
box-sizing: border-box;
text-align: center;
margin-bottom: 82px;
padding-top: 3em;
padding-bottom: 10em;
color: #666;
margin-top: -5em;
padding-top: 7em;
/*border-top: 2px solid #e6e6e6;*/
">
        <div style="font-size: 36px">什么是您所需要的，我们在思考</div>
        <div class="thinkText" style="line-height: 2.5em;
max-width: 695px;
margin: 0 auto;
margin-top: 4em">
            企业形象网站包装、搜索引擎优化、百度竞价、App开发、客户管理系统等等，所有的所有，都是为了在互联网时代的背景下不得以，不想在时代的背景下被淘汰而作出的选择！试试思维结合吧，我们从技术出发，站在您的角度。
        </div>
        <div class="b_text" style="margin-top: 55px;
font-size: 25px;
letter-spacing: 9px;">业务在左，技术在右！</div>
    </div>
    {{--网站开发/微信开发/APP开发/企业策划分类说明优势--}}
    {{--<div style="" class="advantageOther">--}}
        {{--辰象科技，愿望是引领更多人工作与生活--}}
    {{--</div>--}}
@endsection