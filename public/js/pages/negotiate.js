var contact = new function () {
    this.nameDom = undefined;
    this.companyDom = undefined;
    this.postDom = undefined;
    this.nicknameDom = undefined;
    this.describeDom = undefined;
    this.name = undefined;
    this.company = undefined;
    this.post = undefined;
    this.nickname = undefined;
    this.describe = undefined;
    var that = this;
    $(document).ready(function () {
        that.nameDom = $('.jsNameDom');
        that.companyDom = $('.jsCompanyDom');
        that.postDom = $('.jsPostDom');
        that.nicknameDom = $('.jsNicknameDom');
        that.describeDom = $('.jsDescribeDom');
    });
    var getValue = function () {
        that.name = that.nameDom.val();
        that.company = that.companyDom.val();
        that.post = that.postDom.val();
        that.nickname = that.nicknameDom.val();
        that.describe = that.describeDom.val();
        console.log(that);
    };
    this.postMsg = function () {
        getValue();
        $.post(
            '/order/consult',
            {'name':that.name,'company':that.company,'post':that.post,'nickname':that.nickname,'describe':that.describe},
            function (data,state) {
                // data = JSON.parse(data);
                console.log(data.msg)
                // console.log(data)
                if(data.state === 'success'){
                    alert('您的情况已提交，我们将于24小时内与您联系！');
                    location.href='/';
                }
            }
        );
    }
};