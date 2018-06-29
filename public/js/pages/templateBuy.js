/**
 * 设计思想：
 * 1、将DOM使用对象，常用的提取出来
 * 2、将同类功能以对象的形式集成起来
 * 3、单独的功能以方法单独放出
 */

// 页面常用Dom
var pageDom = new function (){

    this.actBg = undefined;
    this.buyOnline = undefined;
    this.allStep = undefined;
    this.serverStep = undefined;
    this.domainDom = undefined;
    this.serverDom = undefined;
    this.serverDes = undefined;
    this.addPriceDom = undefined;
    this.statement = undefined;
    this.payActionScreen = undefined;
    this.nameDom = undefined;
    this.phoneDom = undefined;
    this.validateDom = undefined;
    this.untilNameDom = undefined;
    this.untilAddDom = undefined;
    this.enterpriseNameDom = undefined;
    this.enterpriseAddDom = undefined;
    $(document).ready(function () {
        pageDom.actBg = $('.actBg');
        pageDom.buyOnline = $('.buyOnline');
        pageDom.allStep = $('.allStep');
        pageDom.serverStep = $('.serverStep');
        pageDom.domainDom = $('.domainDom');
        pageDom.serverDom = $('.serverDom');
        pageDom.serverDes = $('.serverDes');
        pageDom.addPriceDom = $('.addPriceDom');
        pageDom.statement = $('.statement');
        pageDom.payActionScreen = $('.payActionScreen');
        pageDom.nameDom = $('.nameDom');
        pageDom.phoneDom = $('.phoneDom');
        pageDom.validateDom = $('.validateDom');
        pageDom.untilNameDom = $('.untilNameDom');
        pageDom.untilAddDom = $('.untilAddDom');
        pageDom.enterpriseNameDom = $('.enterpriseNameDom');
        pageDom.enterpriseAddDom = $('.enterpriseAddDom');
        $("input,textarea,select").val("");
        $("input:radio,input:checkbox").attr("checked",false);
    });
};

// 域名及服务器对象(配套设备选择)
var matchingSelect = new function () {
    this.domained = undefined;
    this.servered = undefined;
    // 检测哪个没选择,域名,服务器的顺序检测，并警示
    this.checkSelect = function () {
        if(this.domained === undefined){
            alert("请选择是否需要域名");
            return '域名未选择';
        }
        if(this.servered === undefined){
            alert("请选择是否需要服务空间");
            return '空间未选择';
        }
    };
    // 选择域名isHas:has/havnt
    this.selectDomain = function (dom,isHas) {
        pageDom.domainDom.css({'background':'#ccc'});
        $(dom).css({'background':'#727272'});
        this.domained = isHas;
    };
    // 选择服务器，并修改对应的服务器介绍
    this.selectServer = function (dom,value) {
        var str = undefined;
        pageDom.serverDom.css({'background':'#ccc'});
        $(dom).css({'background':'#727272'});
        this.servered = value;
        if(value === 'none'){
            str = "<p>真的不需要我们的空间吗？可是有专业的人员为您提供空间售后哦！</p>";
        }else if(value === 'jingji'){
            str = "<p>网页空间：3G</p>"+"<p>Mysql数据库：200M</p>"+"<p>月流量：不限</p>"+"<p>带宽：1M</p>";
        }else if(value === 'puhui'){
            str = "<p>网页空间：6G</p>"+"<p>Mysql数据库：1024M</p>"+"<p>月流量：不限</p>"+"<p>带宽：1M</p>";
        }else if(value === 'zhuanye'){
            str = "<p>网页空间：12G</p>"+"<p>Mysql数据库：2048M</p>"+"<p>月流量：不限</p>"+"<p>带宽：2M</p>";
        }else if(value === 'qijian'){
            str = "<p>网页空间：20G</p>"+"<p>Mysql数据库：4096M</p>"+"<p>月流量：不限</p>"+"<p>带宽：2M</p>";
        }
        pageDom.serverDes.html(str);
    };
    // 下一步，如果检测到没选择，则弹窗提醒，如果正常，下一步
    this.nextStep = function () {
        if(this.checkSelect()){
            return;
        }
        //隐藏所有步骤，显示第二步骤
        pageDom.allStep.hide();
        pageDom.statement.show();
    }
};
//同意条款
function passClause() {
    //隐藏所有步骤，显示第三步骤
    pageDom.allStep.hide();
    pageDom.payActionScreen.show();
}
//费用对象
var costObj = new function () {
    // 初始费用
    this.price = 700;
    //域名费用
    this.domainPrice = 0;
    //空间费用
    this.serverPrice = 0;
    //总费用
    this.addup = 700;
    // 计算并输出
    this.addPrice = function () {
        var allPrice = this.price+this.domainPrice+this.serverPrice;
        this.addup = allPrice;
        pageDom.addPriceDom.html(allPrice);

    };
};
//联系板块对象
var contact = new function (){
    this.name = undefined;
    this.phone = undefined;
    this.buyType = undefined;
    this.validate = undefined;
    this.enterpriseName = undefined;
    this.enterpriseAdd = undefined;
    this.payType = undefined;
    this.validateGet = undefined;
    this.writeContact = function () {
        if(!this.name){
            alert("请输入名称");
            return;
        }
        if (!this.phone){
            alert("请输入联系方式");
            return;
        }
        // 判断是否是个人用户
            if(this.buyType === undefined){
                alert("您是个人购买还是单位购买请选择");
                return;
            }else if(this.buyType !== 'personal'){
                //判断公司名称是否填写
                if(!this.enterpriseName){
                    alert("请输入您的单位名称");
                    return;
                }
                if(!this.enterpriseAdd){
                    alert("请输入单位地址");
                    return;
                }
            } else{
        }
        //判断验证码是否输入
        if(!this.validateGet){
            alert("请获取验证码并填写");
            return;
        }
        if(!this.validate){
            alert("请填写验证码");
            return;
        }
        //判断支付方式是否已选择
        if(this.payType === undefined){
            alert("请选择支付方式");
            return;
        }
        return true;
    };
    this.payTypeSelect = function (type) {
        if(type === 'personal'){
            contact.buyType = 'personal';
            pageDom.untilNameDom.hide();
            pageDom.untilAddDom.hide();
        }else{
            contact.buyType = 'enterprise';
            pageDom.untilNameDom.show();
            pageDom.untilAddDom.show();
        }
    }
};

// 控制在线购买
function buyOnline(type) {
    if(type === 'show'){
        $('html,body').addClass('ovfHiden');
        pageDom.actBg.show();
        pageDom.buyOnline.show();
        pageDom.allStep.hide();
        pageDom.serverStep.show();
    }else{
        $('html,body').removeClass('ovfHiden');
        pageDom.actBg.hide();
        pageDom.buyOnline.hide();
        pageDom.allStep.hide();
    }
}

// 验证码
var validateObj = new function () {
    //发送验证码
    var countDown = 0;
    this.post = function () {
        if (!contact.phone){
            alert("请输入联系方式");
            return;
        }


        //如果倒计时已经到头
        if(countDown === 0){
            //从60开始计时
            countDown = 60;
            //更改获取验证码样式，进行倒计时
            var name = setInterval(function() {
                if(countDown===0){
                    clearInterval(name);
                    $(".postMsg").html("已发送，重新获取");
                    return true;
                }else{
                    $(".postMsg").html("已发送，重新获取"+"("+countDown+")");// 你倒计时显示的地方元素
                }
                countDown--;
            }, 1000);
            // 发送
            $.get(
                "/msg/buy/web_template/"+contact.phone,
                function (data, status) {
                    console.log(data);
                }
            );
        }else{
            //显示提示：已发送，请等待60S后重新发送
        }
    }
};

// 去付款
var pay = new function () {
    this.toGo=function (temNum) {
        //判断资料是否已填写完毕
        if(!contact.writeContact()){
            return false;
        }
        //得到参数
        var name = contact.name;
        var phone = contact.phone;
        var buyType = contact.buyType;
        var enterpriseName = contact.enterpriseName;
        var enterpriseAdd = contact.enterpriseAdd;
        var validate = contact.validate;
        var payType = contact.payType;
        var domain = matchingSelect.domained;
        var server = matchingSelect.servered;
        var addPrice = costObj.addup;
        console.log(temNum,name,phone,buyType,enterpriseName,enterpriseAdd,validate,payType,domain,server,addPrice)
        //传送后台，生成订单
        $.post(
            "/buy/order/webtemplate",{
                temNum:temNum,
                name:name,
                phone:phone,
                buyType:buyType,
                enterpriseName:enterpriseName,
                enterpriseAdd:enterpriseAdd,
                validate:validate,
                payType:payType,
                domain:domain,
                server:server,
                addPrice:addPrice
            },
            function (data, status) {
                console.log(data);
            }
        );
    }
}