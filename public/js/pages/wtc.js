//费用对象
var costObj = new function () {
    // 初始费用
    this.price = '面议';
    //域名费用
    this.domainPrice = 0;
    //空间费用
    this.serverPrice = 0;
    //总费用
    this.addup = 0;
    // 计算并输出
    this.addPrice = function () {
        var allPrice = this.domainPrice+this.serverPrice;
        this.addup = allPrice;
        if(allPrice === 0){
            allPrice = '';
            pageDom.addPriceDom.html('面议');
            return;
        }
        pageDom.addPriceDom.html('面议+￥'+this.addup);
    };
};