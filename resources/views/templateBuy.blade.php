@extends('base')

@section('myCss')
    {{--<link href="/css/negotiate.css" type="text/css" rel="stylesheet" />--}}
@endsection
@section('myJs')
    <script type="text/javascript" src="/js/pages/templateBuy.js"></script>
@endsection


@php
    $templateData = new \App\Data\Template();
    $templateWebData = $templateData -> web();
    @endphp

@section("pageMain")
    {{--展示首部--}}
    <div class="itemHeader">
        {{--<div>图片展示</div>--}}
        <div class="itemShowBg">
            <div class="itemShow">
                <img src="/templatesImg/{{$number}}.jpg" />
            </div>
            <div style="width: 20%;
min-width: 200px;
display: inline-block;
text-align: center;
margin-top: 2em;
font-size: 16px;
color: #515151;
letter-spacing: 2px;
text-indent: 2px;line-height: 2em">¥<span class="">700</span>/永久模板<br>含一年售后</div>
        </div>
        {{--右侧信息展示--}}
        <div class="itemAbout">
            <div style="position: absolute;top: -3em;color: #9e9e9e;">辰象科技 > 选择模板 > 模板详情 > 编号：{{$templateWebData[$number]['number']}}</div>
            {{--<div>--}}
                {{--<img src="/img/0627.jpg" />--}}
            {{--</div>--}}
            {{--标题--}}
            <div class="itemTitle">{{$templateWebData[$number]['title']}}模板</div>
            {{--编号--}}
            <div class="itemNumber">模板编号：346284</div>
            {{--模板关键字类型--}}
            <div class="applyClass">
                <div class="t">适用于：</div>
                <div class="l">
                    <div class="i">公司网站</div>
                    <div class="i">形象展示</div>
                    <div class="i">业务展示</div>
                    <div class="i">产品展示</div>
                </div>
            </div>
            {{--模板描述--}}
            <div style="" class="describe">
                <div style="color: #9d9d9d" class="t">注意事项：</div>
                <div style="
line-height: 2.5em;
text-indent: 2em;
color: #333;
padding: 2em;
background: #f3f3f3;
box-sizing: border-box;
margin-top: 3em;
                " class="value">
                        <p>售后服务：自付款之日起一年内，我们为您免费维护网站，修改网站色调，指导您对网站的操作、管理。</p>
                        <p>注：使用我公司域名及空间，我司为您提供相应域名、空间售后服务（自由选购）。</p>
                </div>
            </div>
            {{--购买--}}
            <div class="buyBox">
                {{--<div style="position: absolute;--}}
{{--right: 2em;--}}
{{--top: -2.5em;--}}
{{--color: #b4b4b4;">* 购买仅包含程序代码，购买后自行决定是否需要搭配域名、空间，使用我司域名及空间，我司为之提供相应售后服务</div>--}}
                <div onclick="buyOnline('show')" class="i">在线购买</div>
                <div class="i">合同购买</div>
                <div class="i">定制化本模板</div>
            </div>
            <div class="buyTypeAbout">
                <p>在线购买：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子声明，当您同意后，您可以直接付款购买，我们将在15日内为您准备好您的所需（购买页选择是否需要域名、服务器空间）。</p>
                <p>合同购买：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阅读合同，留下您的联系方式，我们采用合同形式为您提供服务，对您来说，不失为一种最好的选择。</p>
                <p>定制化本模板：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对该模板进行二次开发，费用按您的需求，我们对其进行预算。</p>
            </div>
            <div class="bImgTitle">大图展示</div>
            {{--大图展示--}}
            <div class="bImg">
                <img src="/templatesImg/{{$number}}.jpg" />
            </div>
        </div>
    </div>
    <style>
        .itemShowBg{
            width: 20%;
            min-width: 200px;
            display: inline-block;
        }
        .itemHeader{
            width: 90%;
            margin: 0 auto;
            padding: 2em 3em;
            box-sizing: border-box;
            margin-top: 3em;
        }
        .itemShow{
            width: 200px;
            height: 300px;
            box-shadow: 0 0 10px #8d8d8d;
            overflow: hidden;
            display: inline-block;
        }
        .itemShow img{
            width: 100%;
        }
        .itemAbout{
            width: 78.6%;
            display: inline-block;
            vertical-align: top;
            margin-left: 1%;
            border-top: 2px solid #f3f3f3;
            padding: 4em 0;
            box-sizing: border-box;
            position: relative;
            top: 3em;
        }
        .itemTitle{
            font-size: 22px;
            letter-spacing: 0.2em;
        }
        .itemNumber{
            margin-top: 2em;
            color: #9e9e9e;
            font-size: 16px;
            letter-spacing: 2px;
        }
        .applyClass{
            margin-top: 4em;
            line-height: 2em;
            cursor: default;
        }
        .applyClass .t{
            display: inline-block;
            margin-right: 2em;
            color: #9d9d9d;
            margin-bottom: 2em;
        }
        .applyClass .l{
            display: inline-block;
        }
        .applyClass .i{
            display: inline-block;
            /*background: #5c5c5c;*/
            background: #d76565;
            color: #fff;
            padding: 0 2em;
            margin-right: 2em;
            border-radius: 4px;
            margin-bottom: 2em;
        }
        .describe{
            /*width: 860px;*/
        }
        .bImgTitle{
            text-align: center;
            line-height: 5em;
            background: #ba3838;
            color: #fff;
            margin-top: 7em;
            font-size: 22px;
            letter-spacing: 1em;
            text-indent: 1em;
        }
        .bImg{
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            margin-top: 4em;
        }
        .bImg img{
            width: 100%;
        }
        .buyBox{
            margin-top: 7em;
            text-align: right;
            border: 1px solid #e5e5e5;
            border-right-width: 1px;
            border-left-width: 1px;
            border-right-style: solid;
            border-left-style: solid;
            border-right-color: rgb(229, 229, 229);
            border-left-color: rgb(229, 229, 229);
            padding: 3em 0;
            border-left: 0;
            border-right: 0;
            text-align: right;
            position: relative;
        }
        .buyBox .i{
            display: inline-block;
            padding: 0 2em;
            background: #626262;
            line-height: 2.5em;
            text-align: center;
            /*margin-left: 2em;*/
            color: #fff;
            margin-right: 2em;
            border-radius: 2px;
            cursor: pointer;
        }
        .buyBox .i:hover{
            background: brown;
        }
        .buyTypeAbout{
            margin-top: 2em;
            text-align: left;
        }
        .buyTypeAbout p{
            line-height: 2.5em;
            color: #a1a1a1;
        }
    </style>
    {{--操作背景--}}
    <div onclick="buyOnline('hide')" class="actBg" style="display: none"></div>
    {{--在线购买操作--}}
    <div class="buyOnline actionScreen">
        {{--选择域名及服务器--}}
        <div style="display: none" class="serverStep allStep">
            {{--标题--}}
            <div class="t">选择配套服务</div>
            {{--商品信息--}}
            <div class="itemSelect">
                {{--已选择模板--}}
                <div class="selected">
                    {{--左侧图片--}}
                    <div class="img"><img src="/templatesImg/{{$number}}.jpg" /></div>
                    {{--右侧描述--}}
                    <div class="miaoshu">
                        {{--名称--}}
                        <div class="m-t">已选择：{{$templateWebData[$number]['title']}}</div>
                        <div class="m-n">模板编号：{{$number}}</div>
                    </div>
                </div>

            </div>
            {{--域名选择--}}
            <div class="domainSelect">
                <div class="domain">
                    <div class="d-t">域名选择：</div>
                    <div class="d-c">
                        <div onclick="costObj.domainPrice=0;costObj.addPrice();matchingSelect.selectDomain(this,'has')" class="i domainDom">我有，不要域名</div>
                        <div onclick="costObj.domainPrice=100;costObj.addPrice();matchingSelect.selectDomain(this,'havnt')" class="i domainDom">没有域名，委托购买 ￥100/年</div>
                    </div>
                </div>
            </div>
            {{--空间选购--}}
            <div class="serverSelect">
                <div class="serverMain">
                    <div class="s-t">服务空间：</div>
                    <div class="s-c">
                        <ul>
                            <li onclick="costObj.serverPrice=0;costObj.addPrice();matchingSelect.selectServer(this,'none')" class="serverDom">自有服务空间</li>
                            <li onclick="costObj.serverPrice=288;costObj.addPrice();matchingSelect.selectServer(this,'jingji')" class="serverDom">辰象经济版 ￥288/年</li>
                            <li onclick="costObj.serverPrice=388;costObj.addPrice();matchingSelect.selectServer(this,'puhui')" class="serverDom">辰象普惠版 ￥388/年</li>
                            <li onclick="costObj.serverPrice=588;costObj.addPrice();matchingSelect.selectServer(this,'zhuanye')" class="serverDom">辰象专业版 ￥588/年</li>
                            <li onclick="costObj.serverPrice=888;costObj.addPrice();matchingSelect.selectServer(this,'qijian')" class="serverDom">辰象旗舰版 ￥888/年</li>
                        </ul>
                        {{--服务器描述--}}
                        <div class="description serverDes">
                            <p>真的不需要我们的空间吗？可是有专业的人员为您提供空间售后哦！</p>
                        </div>
                    </div>
                </div>

            </div>
            {{--售后服务--}}
            <div class="afterServer">
                <div class="a-t">售后服务：</div>
                <div class="a-v">
                    <div class="i">
                        <p class="i-t">基本服务：</p>
                        <p class="i-v">自付款之日起一年内，我们为您免费维护网站，修改网站色调，指导您对网站的操作、管理。</p>
                    </div>
                    <div class="i">
                        <p class="i-t">域名维护（针对在本司购买域名的用户）：</p>
                        <p class="i-v">域名维护主要指当域名出现故障时要及时提供备用解决方案，让网站能够临时正常访问，另外要尽快解决域名故障，恢复域名的正常使用和访问。</p></div>
                    <div class="i">
                        <p class="i-t">空间维护 （针对在本司购买网站空间或服务器的用户）:</p>
                        <p class="i-v">1.客户数据备份。</p>
                        <p class="i-v">2.服务器系统优化检查。</p>
                        <p class="i-v">3.对客户已经安装的特殊组件进行检查，保证客户已安装组件的正常运行。</p>
                        <p class="i-v">4.每天检查服务器的日志文件，防止黑客攻击。</p>
                        <p class="i-v">5.灾难性问题发生后，12小时内及时响应，24小时内恢复所有数据（数据为12小时前的数据）。</p>
                    </div>
                </div>
            </div>
            {{--费用--}}
            <div class="cost">
                <div class="cost-t">费用总计：</div>
                <div class="cost-p">￥<span class="addPriceDom">700</span>元</div>
            </div>
            {{--下一步--}}
            <div class="serverStepAction">
                <div onclick="matchingSelect.nextStep()" class="i">下一步</div>
                <div onclick="buyOnline('hide')" class="i">取消</div>
            </div>
            <style>
                .serverStep{}
                .serverStep .t{
                    margin-top: 2.5em;
                    text-align: center;
                    font-size: 22px;
                }
                .serverStep .itemSelect{
                    margin-top: 3em;
                }
                .serverStep .itemSelect .selected{
                    text-align: left;
                    margin-left: 4em;
                }
                .serverStep .itemSelect .selected .img{
                    width: 150px;
                    overflow: hidden;
                    height: 200px;
                    display: inline-block;
                    box-shadow: 0 0 10px #ccc;
                }
                .serverStep .itemSelect .selected .miaoshu{
                    display: inline-block;
                    vertical-align: top;
                    text-align: left;
                    margin-left: 2em;
                }
                .serverStep .itemSelect .selected .img img{
                    max-width: 100%;
                }
                .miaoshu .m-t{font-size: 16px;}
                .miaoshu .m-n{margin-top: 2em;}
                .serverStep .domainSelect{
                    padding: 0 4em;
                    margin-top: 3em;
                }
                .serverStep .serverSelect{
                    padding: 0 4em;
                    margin-top: 3em;
                }
                .d-t{
                    display: block;
                    vertical-align: top;
                    font-size: 18px;
                }
                .d-c{
                    display: inline-block;
                    margin-top: 2em;
                }
                .d-c .i{
                    display: inline-block;
                    background: #ccc;
                    color: #fff;
                    padding: 0 2em;
                    line-height: 2.5em;
                    border-radius: 2px;
                    margin-right: 2em;
                    cursor: pointer;
                }
                .d-c .i:hover{
                    background: #717171;
                }
                .s-t{
                    display: block;
                    vertical-align: top;
                    font-size: 18px;
                }
                .s-c{
                    margin-top: 2em;
                }
                .s-c ul{}
                .s-c ul li{
                    display: inline-block;
                    padding: 0 2em;
                    background: #ccc;
                    color: #fff;
                    line-height: 2.5em;
                    border-radius: 2px;
                    margin-right: 2em;
                    margin-bottom: 1.5em;
                    cursor: pointer;
                }
                .s-c ul li:hover{
                    background: #717171;
                }
                .domain{

                }
                .description{
                    margin-top: 2em;
                }
                .description p{
                    line-height: 2.5em;
                    color: #a1a1a1;
                }
                .cost{
                    padding: 0 4em;
                    margin-top: 2em;
                }
                .cost-t{
                    display: block;
                    vertical-align: top;
                    font-size: 18px;
                }
                .cost-p{
                    font-size: 22px;
                    color: brown;
                    text-align: right;
                    margin-top: 2em;
                }
                .serverStepAction{
                    margin-top: 2em;

                    margin-bottom: 6em;

                    text-align: center;
                }
                .serverStepAction .i{
                    display: inline-block;
                    cursor: pointer;
                    padding: 0 3em;

                    margin: 0 2em;

                    background: #636363;

                    color: #fff;

                    line-height: 2.5em;

                    border-radius: 2px;
                }
                .afterServer{
                    margin-left: 4em;
                    margin-top: 2em;
                }
                .a-t{
                    display: block;
                    vertical-align: top;
                    font-size: 18px;
                }
                .a-v{
                    margin-top: 2em;

                    color: #989898;
                }
                .a-v .i{
                    margin-bottom: 2em;
                    line-height: 2.5em;
                }
                .a-v .i .i-t{}
                .a-v .i .i-v{text-indent: 2em;}
                .a-v .i p{
                }
            </style>
        </div>
        {{--流程及声明--}}
        <div style="display: none" class="statement allStep">
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
            <div onclick="passClause()" class="passAct">我同意以上条款 去付款</div>
        </div>
        <style>
            .statement{}
            .statement .t{
                margin-top: 2.5em;
                text-align: center;
                font-size: 22px;
            }
            .statement .v{
                width: 90%;
                margin: 0 auto;
                margin-top: 0px;
                margin-top: 3em;
            }
            .statement .v p{
                line-height: 3em;
                text-indent: 2em;
            }
            .passAct{
                display: block;
                text-align: center;
                margin: 0 auto;
                cursor: pointer;
                margin-top: 0px;
                margin-bottom: 0px;

                margin-bottom: 10em;

                width: 200px;

                background: #c94848;

                color: #fff;

                line-height: 3em;

                padding: 0 2em;

                margin-top: 4em;
            }
        </style>
        {{--选择支付方式-输入购买类型、联系人，联系方式，短信验证码--}}
        <div class="payActionScreen allStep">
            <div class="p-t">请问您的联系方式是</div>
            {{--资料填写--}}
            <div class="ziliao">
                <div class="i">
                    <div class="t">联系人姓名：</div>
                    <div class="v"><input onchange="contact.name=$(this).val()" class="text" type="text"></div>
                </div>
                <div class="i">
                    <div class="t">联系人手机：</div>
                    <div class="v"><input onchange="contact.phone=$(this).val()" class="text" type="text"></div>
                </div>
                <div class="i">
                    <div class="t">您是个人使用还是单位采购：</div>
                    <div class="v">
                        <div class="item"><input onclick="contact.payTypeSelect('personal');contact.buyType='personal'"  name="buytype" class="select" type="radio" autocomplete="off" />个人使用</div>
                        <div class="item"><input onclick="contact.payTypeSelect('enterprise');contact.buyType='enterprise'"  name="buytype" class="select" type="radio" autocomplete="off" />公司采购</div>
                    </div>
                </div>
                <div style="display: none;" class="i untilNameDom">
                    <div class="t">单位名称：</div>
                    <div class="v"><input onchange="contact.enterpriseName=$(this).val()" class="text enterpriseNameDom" type="text"></div>
                </div>
                <div style="display: none;" class="i untilAddDom">
                    <div class="t">单位联系地址：</div>
                    <div class="v"><input onchange="contact.enterpriseAdd=$(this).val()" class="text enterpriseAddDom" type="text"></div>
                </div>
                <div class="i">
                    <div class="t">请输入验证码：</div>
                    <div class="v"><input onchange="contact.validate=$(this).val()" class="text" type="text"></div>
                </div>
                {{--发送验证码--}}
                <div onclick="contact.validateGet='posted';validateObj.post()" class="postMsg">获取验证码</div>
            </div>
            {{--选择支付方式--}}
            <div class="payType">
                <div class="pt-t">您想使用哪种支付方式</div>
                <div class="pt-list">
                    <div class="i">
                        <input onclick="contact.payType='wechat'" name="paytype" class="c" type="radio" autocomplete="off"  />
                        <div class="icon"><img style="position: relative; left: -100%" src="/img/paytype.jpg" /></div>
                        <span>微信支付</span>
                    </div>
                    <div class="i">
                        <input onclick="contact.payType='alipay'" name="paytype" class="c" type="radio" autocomplete="off"  />
                        <div class="icon"><img src="/img/paytype.jpg" /></div>
                        <span>支付宝支付</span>
                    </div>
                </div>
            </div>
            {{--提交订单--}}
            <div onclick="pay.toGo('{{$number}}')" class="postOrder">提交订单</div>
        </div>
        <style>
            .payActionScreen{
                display: none;
            }
            .payActionScreen .p-t{
                font-size: 22px;
                margin-top: 3em;
                text-align: center;
                margin-bottom: 3em;
            }
            .ziliao{text-align: center;

                background: #f5f5f5;

                padding: 4em 0;

                color: #727272;}
            .ziliao .i{
                position: relative;
                width: 260px;
                margin: 0 auto;
                margin-bottom: 2em;
            }
            .ziliao .i .t{
                display: inline-block;
                width: 200px;
                text-align: right;
                position: absolute;
                left: -200px;
                line-height: 32px;
            }
            .ziliao .i .v{
                display: inline-block;
            }
            .ziliao .i .v .item{
                display: inline-block;
                line-height: 32px;
                margin: 0 1em;
            }
            .ziliao .i .v .text{
                line-height: 32px;
                width: 216px;
                border: 1px solid #ccc;
            }
            .ziliao .i .v .select{
                margin-right: 1em;
                position: relative;
                top: 1px;
            }
            .postMsg{
                border: 1px solid #e5e5e5;
                line-height: 36px;
                width: 216px;
                margin: 0 auto;
                text-align: center;
                background: #a2a2a2;
                color: #fff;
                cursor: pointer;
            }
            .payType{}
            .pt-t{text-align: center;
                font-size: 22px;
                margin-top: 2em;
                margin-bottom: 2em;}
            .pt-list{text-align: center;}
            .pt-list .i{
                display: inline-block;
                margin: 0 1em;
                line-height: 32px;
            }
            .pt-list .i input{
                display: inline-block;

                margin: 0 0.5em;
            }
            .pt-list .icon{
                display: inline-block;
                overflow: hidden;
                width: 25px;
                vertical-align: middle;
                position: relative;
                top: 3px;
                margin-right: 0.5em;
            }
            .pt-list span{
                display: inline-block;
                border-left: 1px solid #e5e5e5;
                padding-left: 1em;
                color: gray;
            }
            .pt-list .icon img{
                width: 200%;
            }
            .postOrder{
                margin: 0 auto;
                margin-top: 4em;
                line-height: 2.5em;
                margin-bottom: 10em;
                background: #761c19;
                width: 216px;
                text-align: center;
                color: #fff;
            }
        </style>
    </div>
    <style>
        .buyOnline{
            width: 60%;
            height: 100%;
            /*top: 10%;*/
            /*padding: 2em 3em;*/
            box-sizing: border-box;
            display: none;
        }
        .buyOnline .shengming{
            overflow: auto;
        }
        .buyOnline > div{
            overflow: auto;
            height: 100%;;
        }
        .ovfHiden{overflow: hidden}
        @media screen and (max-width: 360px){
            .ovfHiden{overflow: hidden;height: 100%}
        }
    </style>
    @endsection