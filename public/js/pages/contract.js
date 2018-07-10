var pageDom = new function (){
    this.allDomain = undefined;
    this.addPriceDom = undefined;
    $(document).ready(function () {
        pageDom.allDomain = $(".jsDomainDom");
        pageDom.allSpace = $(".jsSpaceDom");
        pageDom.addPriceDom = $(".jsAddPrice");
    })
};

// 域名相关
var domainObj = new function () {
    this.domained = undefined;
    //选择域名
    this.selectDomain = function (dom,type) {
        this.domained = type;
        pageDom.allDomain.css({'background':'#ccc'});
        $(dom).css({"background":"rgb(249, 146, 44) none repeat scroll 0% 0%"})
    };
};
// 服务器相关
var spaceObj = new function () {
    this.spaced = undefined;
    // 选择空间
    this.selectSpace = function (dom, type) {
        this.domained = type;
        pageDom.allSpace.css({'background':'#ccc'});
        $(dom).css({"background":"rgb(249, 146, 44) none repeat scroll 0% 0%"})
    }
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
//联系
var contact = new function () {
    this.nameDom = undefined;
    this.companyDom = undefined;
    this.postDom = undefined;
    this.nicknameDom = undefined;
    this.moreDom = undefined;
    this.name = undefined;
    this.company = undefined;
    this.post = undefined;
    this.nickname = undefined;
    this.more = undefined;
    var that = this;
    $(document).ready(function () {
        contact.nameDom = $(".jsNameDom");
        contact.companyDom = $(".jsCompanyDom");
        contact.postDom = $(".jsPostPrice");
        contact.nicknameDom = $(".jsNicknameDom");
        contact.moreDom = $(".jsMorePrice");
    });
    //获取数据
    var getValue = function () {
        that.name = that.nameDom.val();
        that.company = that.companyDom.val();
        that.post = that.postDom.val();
        that.nickname = that.nicknameDom.val();
        that.more = that.moreDom.val();
        console.log(that);
    };
    //发送
    this.postMsg = function () {
        getValue();
        $.post(
            '/order/webtemplate/contract/step=post',
            {'name':that.name,'company':that.company,'post':that.post,'nickname':that.nickname,'more':that.more},
            function (data,state) {
                // data = JSON.parse(data);
                console.log(data.msg)
                // console.log(data)
                if(data.state === 'success'){
                    alert('您的订单已提交，我们将于24小时内与您联系！');
                    location.href='/';
                }
            }
        );
    }
};