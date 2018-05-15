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
    <!--选择服务介绍-->
    <div class="choicedAbout wechatServerType">
        <!--选择标题-->
        <div id="choicedAbout2" class="choicedTitle">微信开发</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>公众号开发</span>将您的品牌展示给微信用户，减少宣传成本，建立您与客户之间更好的互动沟通通道，将您的客户接入企业客户关系管理系统（CRM系统）中进行促销、推广、宣传、售后等活动，形成一种主流的线上线下微信互动营销方式，打造属于您自身的商业生态链。</p>
            <p><span>小程序开发</span>微信生态的新形式，多种形式的搭配展示，为您的客户提供多种入网选择，体验通道。</p>
        </div>
    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout appServerType">
        <!--选择标题-->
        <div id="choicedAbout3" class="choicedTitle">App开发</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>定制开发</span>专注打造优质APP产品，从用户体验出发，细致需求分析、产品设计、技术研发，快速助您产品落地</p>
        </div>
    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout zongheServerType">
        <!--选择标题-->
        <div id="choicedAbout4" class="choicedTitle">综合开发</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>全方面切入</span>细致分析公司特点，为您打造最有价值的服务搭配，择其有用者相辅相成，为您及客户提供多种服务与使用方案！</p>
            <p><span>量身打造</span>不是所有的东西都需要，而是根据需求，为您定身打造，所适合您的搭配，不是所有产品都适合你，而是要选最适合你的！</p>

        </div>
    </div>
    <!--选择服务介绍-->
    <div class="choicedAbout cehuaServerType">
        <!--选择标题-->
        <div id="choicedAbout5" class="choicedTitle">企业策划</div>
        <!--选择介绍-->
        <div class="choicedMsg">
            <p><span>落地互联网+</span>因为更懂技术，所以想法更多……</p>
            <p><span>精确的数据调查</span>从多方面去收集企业相关信息，做出尽可能准确的分析，为企业的发展，提供能走的更长远的方向。</p>
        </div>
    </div>
    <!--合作流程-->
    <!--去洽谈-->
    <div class="goBuy">
        <div onclick="location.href = pageObj.jumpSrc;" class="goBuyButton">去洽谈</div>
    </div>
@endsection