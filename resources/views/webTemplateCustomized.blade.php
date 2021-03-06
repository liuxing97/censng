@extends('negotiate')
@php
    $data = new App\Data\Template();
    $data = $data -> web();
@endphp
@section('myJs')
    <script type="text/javascript" src="/js/pages/contract.js"></script>
    <script type="text/javascript" src="/js/pages/wtc.js"></script>
@endsection
@section('contract')
    <div class="contractHeader">请选择您需要的业务，然后再填写您的联系方式，我们将于24小时内与您联系处理业务！</div>

    {{--业务描述--}}
    <div class="serverInfor">
        <div class="contractTitle">主要业务</div>
        <div class="serverInformationCover">
            <div class="serverInformationShow">
            </div>
            <div class="serverInformation">
                <div class="item"><span class="t">业务类型：</span><span class="v">模板购买-定制开发</span></div>
                <div class="item"><span class="t">模板编号：</span><span class="v">{{$templateNum}}</span></div>
                <div class="item"><span class="t">模板名称：</span><span class="v">{{$data[$templateNum]['title']}}</span></div>
            </div>
        </div>
        {{--业务介绍--}}

    </div>
    {{--选择业务--}}
    <div class="selectServer">
        <div class="contractTitle">可选业务</div>
        <div class="selectItem">
            <div class="t">您是否需要域名</div>
            <div class="list">
                <div onclick="costObj.domainPrice=0;costObj.addPrice();domainObj.selectDomain(this,'has')" class="item jsDomainDom">我有，不要域名</div>
                <div onclick="costObj.domainPrice=100;costObj.addPrice();domainObj.selectDomain(this,'havnt')" class="item jsDomainDom">没有域名，委托购买 ￥100/年</div>
            </div>
        </div>
        <div class="selectItem">
            <div class="t">您是否需要空间</div>
            <div class="list">
                <div onclick="costObj.serverPrice=0;costObj.addPrice();spaceObj.selectSpace(this,'none')" class="item jsSpaceDom">自有服务空间</div>
                <div onclick="costObj.serverPrice=288;costObj.addPrice();spaceObj.selectSpace(this,'jingji')" class="item jsSpaceDom">辰象经济版 ￥288/年</div>
                <div onclick="costObj.serverPrice=388;costObj.addPrice();spaceObj.selectSpace(this,'puhui')" class="item jsSpaceDom">辰象普惠版 ￥388/年</div>
                <div onclick="costObj.serverPrice=588;costObj.addPrice();spaceObj.selectSpace(this,'zhuanye')" class="item jsSpaceDom">辰象专业版 ￥588/年</div>
                <div onclick="costObj.serverPrice=888;costObj.addPrice();spaceObj.selectSpace(this,'qijian')" class="item jsSpaceDom">辰象旗舰版 ￥888/年</div>
            </div>
        </div>
    </div>
    {{--价格预算--}}
    <div class="priceBudget">
        <span class="t">预算价格：</span>
        <span class="v"><span class="jsAddPrice">面议</span></span>
    </div>
    <div class="contractAbout">下方填写您的联系方式，我们将于24小时内与您联系处理业务！</div>
    {{--合同购买--}}
    <div class="contract">
        <div class="contractTitle">合同购买</div>
        {{--说明--}}
        <div class="contractMain">
            <div class="contactContractTitle">网站二次开发合同预览</div>
            <div class="contractPro">
                <div class="t">《辰象的象网络科技模板网站购买条款》</div>
                <div class="v">
                    <p>Contract NO.合同编号： XXXXXXXXXX)</p>
                    <p>甲方：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乙方：西安辰象的象网络科技有限公司</p>
                    <p>地址：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：陕西省西安市雁塔区长安南路449号丽融大厦A座7层A-07C</p>
                    <p>联系人：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：</p>
                    <p>电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：</p>

                    <p>甲、乙双方，经友好协商，就甲方委托乙方进行网站建设事宜达成以下协议。双方申明，双方都已理解并认可了本合同的所有内容，同意承担各自应承担的权利和义务，忠实地履行本合同。</p>
                    <p>第一条  甲方委托乙方进行网站建设，过程中甲方配合乙方相关工作，提供必要的文字、图片等资料。</p>
                    <p>第二条  乙方按合同规定要求在相应时间内完成网站的制作，款项支付完毕后将网站上传至甲方指定空间，提供网站的后台管理资料并在线指导甲方进行网站内容更新维护。</p>
                    <p>第三条  双方须遵守对方相关保密资料，未经对方授权不得擅自出售、公开或传阅他人；否则造成的后果和损失由违约方承担。</p>
                    <p>第四条  合同的执行。</p>
                    <p>1. 项目要求内容：</p>
                    <p>（1）空间：________________</p>
                    <p>（2）网站语言 中文/英文：_______</p>
                    <p>（3）网站栏目及制作要求：</p>
                    <p>网站模板编号:______________________；</p>
                    <p>乙方免费维护网站，修改网站色调，指导甲方操作、管理网站后台（如需处理更新网站所有图片、文字资料单独收费具体看甲方提供资料报价）。</p>
                    <p>2. 费用及付款方式：</p>
                    <p>本项目涉及总金额为人民币（大写）___________元整（即：￥_______元）；双方协议签订之时，甲方须当天支付乙方付款（大写）___________元整（即：￥_______元）；</p>
                    <p>3. 模板网站制作
                    <p>模板网站只能替换LOGO，图片，文字，和内容，不能更改模板网站板块，布局。乙方只负责网站维护，不负责整个网站内容填充（如需处理更新网站所有图片、文字资料单独收费具体看甲方提供资料报价）。</p>
                    <p>4. 开发进度：</p>
                    <p>(1)甲方支付款项，并提供网站所需要的资料后，乙方   15   个工作日完成网站设计，甲方确认后交付整个网站。</p>
                    <p>(2)甲方   7   个工作日完成网站测试并提出修改意见（不包括网站页面颜色、框架结构、模块功能、同一个地方不能重复修改两次以上），乙方配合修改。</p>
                    <p>(3)乙方完成网站上线发布，交付网站后台地址资料。</p>
                    <p>5. 验收期限：</p>
                    <p>甲方必须在接到乙方通知   3  个工作日内完成验收并书面确认，如甲方在   3  工作日内无作出验收回应或修改意见，默认视作验收合格。</p>
                    <p>6. 验收标准：</p>
                    <p>（1）甲方可以通过任何上网的计算机访问网站。</p>
                    <p>（2）主页无文字拼写及图片（以甲方提供的材料为准）错误。</p>
                    <p>（3）网站功能程序正常运行，可自行更换新闻、图片、内容文字。</p>
                    <p>7. 年度续费：</p>
                    <p>已含   1   年费用，有效期为合同签订之日起计算一年时间；到期后每年续费 700  元/年，包括   网站空间维护、域名维护，乙方收到后期续费后，合同期限自动延期。</p>
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
                    <p>网站完成上线之后，经过甲方人为技术修改，出现的所有问题，乙方均不负责。</p>
                    <p>五、签订合同之后，甲方未在约定24小时内打款，此合同则无效！</p>
                    <p>六、付款方式：</p>
                    <p>（甲方）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（乙方）</p>
                    <p>开户行：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;开户行：</p>
                    <p>账号：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;帐号：</p>
                    <p>账户名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;账户名：</p>


                    <p>附则：</p>
                    <p>（1）本合同如有未尽事宜，经双方协商可签署补充合同，合同附件和补充合同以及扫描传真件都与该合同同具法律效率。</p>
                    <p>（2）在合同有效期内双方产生争执，应先友好协商解决，无法解决的可通过法律程序解决。</p>
                    <p>（3）本合同一式两份，甲乙双方各执一份，经双方签字盖章后生效。</p>

                    <p>甲方（盖章）：____________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乙方（盖章）：____________________________</p>

                    <p>甲方代表签名：____________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乙方代表签名：____________________________</p>
                    <p>日期（手写）：____________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日期（手写）：____________________________</p>

                </div>
            </div>
            {{--<div class="contactContractTitle">联系信息</div>--}}
            {{--<div class="contactContractAbout">联系信息</div>--}}
            <div class="contactContractList">
                <div class="contactContractTitle">联系信息</div>
                <div class="item">
                    <div class="t">联系人：</div>
                    <div class="input"><input class="jsNameDom" type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">单位名称：</div>
                    <div class="input"><input class="jsCompanyDom" type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">您的职位：</div>
                    <div class="input"><input class="jsPostPrice" type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">怎么称呼：</div>
                    <div class="input"><input class="jsNicknameDom" type="text" /></div>
                </div>
                <div class="item">
                    <div class="t">备注信息：</div>
                    <div class="input"><input class="jsMorePrice" type="text" /></div>
                </div>
                <div class="item">
                    <div class="t"></div>
                    <div onclick="contact.postMsg()" class="button">提交</div>
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
        .serverInformationCover{
            max-width: 1000px;

            margin: 0 auto;


            /*margin-top: 3em;*/
        }
        .serverInformation{
            max-width: 1000px;

            margin: 0 auto;

            margin-top: 2em;

            display: inline-block;

            vertical-align: top;

        }
        .serverInformationShow{
            width: 200px;
            display: none;
            height: 280px;

            /*background: black;*/

            /*display: inline-block;*/

            vertical-align: top;

            margin-right: 2em;

            box-shadow: 0 0 10px #ccc;
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
        .selectItem .list .item:hover{
            /*background: rgb(114, 114, 114) none repeat scroll 0% 0%;*/
            background: rgb(249, 146, 44) none repeat scroll 0% 0%;
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
            background: #ccc;
            margin-top: 2em;
            margin-right: 2em;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
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
            background: #e3e3e31a;
            border: 1px solid #c5c5c5;
            padding: 3em 0 6em 0;
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