@extends('negotiate')

@section('contract')
    <div class="contractHeader">请选择您需要的业务，然后再填写您的联系方式，我们将于24小时内与您联系处理业务！</div>

    {{--业务描述--}}
    <div class="serverInfor">
        <div class="contractTitle">主要业务</div>
        {{--业务介绍--}}
        <div class="serverInformation">
            <div class="item"><span class="t">业务类型：</span><span class="v">模板购买</span></div>
            <div class="item"><span class="t">模板编号：</span><span class="v">618394723</span></div>
            <div class="item"><span class="t">模板名称：</span><span class="v">黑色</span></div>
        </div>
    </div>
    {{--选择业务--}}
    <div class="selectServer">
        <div class="contractTitle">可选业务</div>
        <div class="selectItem">
            <div class="t">您是否需要域名</div>
            <div class="list">
                <div class="item">我有，不要域名</div>
                <div class="item">没有域名，委托购买 ￥100/年</div>
            </div>
        </div>
        <div class="selectItem">
            <div class="t">您是否需要空间</div>
            <div class="list">
                <div class="item">自有服务空间</div>
                <div class="item">辰象经济版 ￥288/年</div>
                <div class="item">辰象普惠版 ￥388/年</div>
                <div class="item">辰象专业版 ￥588/年</div>
                <div class="item">辰象旗舰版 ￥888/年</div>
            </div>
        </div>
    </div>
    {{--价格预算--}}
    <div class="priceBudget">
        <span class="t">预算价格：</span>
        <span class="v">￥700</span>
    </div>
    <div class="contractAbout">下方填写您的联系方式，我们将于24小时内与您联系处理业务！</div>
    {{--合同购买--}}
    <div class="contract">
        <div class="contractTitle">合同购买</div>
        {{--说明--}}
        <div class="contractMain">
            <div class="contactContractTitle">合同预览</div>
            <div class="contractPro">
                <div class="t">《辰象的象网络科技模板网站购买条款》</div>
                <div class="v">
                        <p>以下为辰象的象网络科技（下称「本公司」）模板网站购买服务的有关条款(下称「本条款」)。</p>
                        <p>在您购买服务前请先阅读，若不接受本条款，请不要使用本网站提供的服务。</p>
                        <p>第一条  购买人委托本公司进行网站建设，过程中购买人配合本公司相关工作，提供必要的文字、图片等资料。</p>
                        <p>第二条  本公司按规定要求在相应时间内完成网站的制作，款项支付完毕后将网站上传至购买者指定空间，提供网站的后台管理资料并在线指导购买者进行网站内容更新维护。</p>
                        <p>第三条  双方须遵守对方相关保密资料，未经对方授权不得擅自出售、公开或传阅他人；否则造成的后果和损失由违约方承担。</p>
                        <p>第四条  服务的执行声明</p>
                        <p>1. 本公司免费维护网站，修改网站色调，指导购买者操作、管理网站后台（如需处理更新网站所有图片、文字资料单独收费具体看购买者提供资料报价）。</p>
                        <p>2. 模板网站只能替换LOGO，图片，文字，和内容，不能更改模板网站板块，布局。本公司只负责网站维护，不负责整个网站内容填充（如需处理更新网站所有图片、文字资料单独收费具体看购买者提供资料报价）。</p>
                        <p>3. 开发进度：</p>
                        <p>(1)购买者支付款项，并提供网站所需要的资料后，本公司15个工作日完成网站设计，购买者确认后交付整个网站。</p>
                        <p>(2)购买者7个工作日完成网站测试并提出修改意见（不包括网站页面颜色、框架结构、模块功能、同一个地方不能重复修改两次以上），本公司配合修改。</p>
                        <p>(3)本公司完成网站上线发布，交付网站后台地址资料。</p>
                        <p>4. 验收期限</p>
                        <p>购买者必须在接到本公司通知3个工作日内完成验收并书面确认，如购买者在3工作日内无作出验收回应或修改意见，默认视作验收合格。</p>
                        <p>5. 验收标准</p>
                        <p>（1）购买者可以通过任何上网的计算机访问网站。</p>
                        <p>（2）主页无文字拼写及图片（以购买者提供的材料为准）错误。</p>
                        <p>（3）网站功能程序正常运行，可自行更换新闻、图片、内容文字。</p>
                        <p>6. 售后时间：</p>
                        <p>自验收完毕起一年时间内，为购买者提供售后服务！</p>
                        <p>第五条  售后服务</p>
                        <p>一、域名维护（针对在本司购买域名的用户）</p>
                        <p>域名维护主要指当域名出现故障时要及时提供备用解决方案，让网站能够临时正常访问，另外要尽快解决域名故障，恢复域名的正常使用和访问。</p>
                        <p>二、空间维护 （针对在本司购买网站空间或服务器的用户）</p>
                        <p>1）客户数据备份。</p>
                        <p>2）服务器系统优化检查。</p>
                        <p>3）对客户已经安装的特殊组件进行检查，保证客户已安装组件的正常运行。</p>
                        <p>4）每天检查服务器的日志文件，防止黑客攻击。</p>
                        <p>5）灾难性问题发生后，12小时内及时响应，24小时内恢复所有数据（数据为12小时前的数据）。</p>
                        <p>三、网站系统维护</p>
                        <p>包括网站访问故障解决：网站参数错误、病毒挂马处理、漏洞修复以及当网站误操作时，恢复到正常状态；涉及到网站的页面颜色、框架结构、模块功能改动时，双方将先协商解决。</p>
                        <p>四、人为损坏</p>
                        <p>网站完成上线之后，经过购买者人为技术修改，出现的所有问题，本公司均不负责。</p>
                        <p>第六条  违规违纪</p>
                        <p>购买者严禁将本公司提供的技术服务用来进行违法违纪的活动，如出现此类情况，与本公司没有任何责任，本公司可随时单方面解除与购买者的服务关系，并对服务器、域名进行停用。</p>
                    </div>
            </div>
            <div class="contactContractTitle">联系信息</div>
            {{--<div class="contactContractAbout">联系信息</div>--}}
            <div class="contactContractList">
                <div class="item">
                    <div class="t">联系人：</div>
                    <div class="input"><input type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">单位名称：</div>
                    <div class="input"><input type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">您的职位：</div>
                    <div class="input"><input type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">怎么称呼：</div>
                    <div class="input"><input type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">备注信息：</div>
                    <div class="input"><input type="text" /></div>
                </div>
                <div class="item">
                    <div class="t"></div>
                    <div class="button">提交</div>
                </div>
            </div>

        </div>
    </div>
    <style>
        .contractTitle{
            max-width: 1000px;
            margin: 0 auto;
            font-size: 28px;
            color: #878787;
            padding-top: 2em;
        }
        .contactOnline{
            display: none;
        }
        .contractMain{
            max-width: 1000px;
            margin: 0 auto;
            min-height: 200px;
            width: 1000px;
            /*background: #fff;*/
            margin-top: 4em;
            margin-bottom: 6em;
        }
        .contactPhoneBlock{
            display: none;
        }
        .contactUs{
            display: none;
        }
        .QRcode{
            display: none;
        }
        .serverInfortitle{
        }
        .serverInformation{
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 2em;
        }
        .serverInformation .item{
            line-height: 3em;
            font-size: 16px;
            color: #848484;
            letter-spacing: 0.1em;
        }
        .serverInformation .item .t{}
        .serverInformation .item .v{
            margin-left: 0.3em;
        }
        .selectServer{

        }
        .selectServer .selectItem{
            max-width: 1000px;

            margin: 0 auto;

            font-size: 16px;
        }
        .selectItem .t{
            font-size: 22px;

            margin-top: 1.5em;
        }
        .selectItem .list{

        }
        .selectItem .list .item{
            display: inline-block;
            padding: 0 2em;
            line-height: 32px;
            font-size: 14px;
            background: #6f6f6f;
            margin-top: 2em;
            margin-right: 2em;
            color: #fff;
        }
        .priceBudget{
            width: 1000px;
            margin: 0 auto;
            margin-top: 2em;
            font-size: 22px;
            text-align: right;
            letter-spacing: 3px;
            border-top: 1px solid #e5e5e5;
            padding-top: 2em;
        }
        .priceBudget .t{

        }
        .priceBudget .v{
            color: brown;
        }
        .contractHeader{
            max-width: 1000px;
            margin: 0 auto;
            line-height: 5em;
            background: #f6f6f6;
            text-indent: 2em;
            letter-spacing: 2px;
            border: 1px solid #e5e5e5;
            /*margin-top: 28em;*/
        }
        .contractAbout{
            max-width: 1000px;
            margin: 0 auto;
            line-height: 5em;
            background: #f6f6f6;
            text-indent: 2em;
            letter-spacing: 2px;
            border: 1px solid #e5e5e5;
            margin-top: 3em;
        }
        .negotiateMain{
            padding-top: 5em;
        }
    </style>
    <style>
        .contactContractAbout{
            max-width: 1000px;
            margin: 0 auto;
            line-height: 5em;
            background: #f6f6f6;
            text-indent: 2em;
            letter-spacing: 2px;
            border: 1px solid #e5e5e5;
            display: none;
        }
        .contactContractTitle{
            font-size: 22px;
            text-align: center;
            margin-bottom: 2em;
            color: #d33434;
        }
        .contactContractList{
            text-align: center;
        }
        .contactContractList .item{
            width: 216px;
            position: relative;
            margin: 0 auto;
            margin-top: 2em;
        }
        .contactContractList .item .t{
            display: inline-block;
            width: 100px;
            font-size: 14px;
            position: absolute;
            left: -100px;
            line-height: 32px;
            color: #767676;
        }
        .contactContractList .item .input{
            display: inline-block;
        }
        .contactContractList .item .input input{
            line-height: 32px;
            width: 216px;
            border: 1px solid #e5e5e5;
            background: #fffc;
        }
        .contactContractList .item .button{
            background: brown;
            width: 216px;
            line-height: 36px;
            color: #fff;
            /*position: relative;*/
            /*left: 57px;*/
            text-align: center;
            margin: 0 auto;
        }
        .contractPro{
            width: 100%;
            background: #fff;
            height: 280px;
            overflow: hidden;
            /*overflow-y: hidden;*/
            overflow-y: auto;
            border: 1px solid #e5e5e5;
            margin-bottom: 4em;
            padding: 0 2em;
            box-sizing: border-box;
        }
        .contractPro .t{
            margin-top: 2.5em;
            text-align: center;
            font-size: 22px;
        }
        .contractPro .v{
            margin-top: 2em;
            margin-bottom: 6em;
            color: #626262;
        }
        .contractPro .v p{
            line-height: 3em;
            text-indent: 2em;
        }
        .header{
            position: relative!important;
        }
        .bg6{
            position: relative!important;
            top: 0 !important;
        }
        .negotiateMain{
            margin-top: 0!important;
        }
    </style>
@endsection