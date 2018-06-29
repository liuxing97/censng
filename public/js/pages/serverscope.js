function Page() {

    /**
     * DOM绑定
     * @type {*|jQuery|HTMLElement}
     */
    this.web=$(".webServerType");
    this.typeWeb = $(".serverTypeClassWeb");
    this.wechat=$(".wechatServerType");
    this.typeWechat = $(".serverTypeClassWechat");
    this.app=$(".appServerType");
    this.typeApp = $(".serverTypeClassApp");
    this.zonghe=$(".zongheServerType");
    this.typeZonghe = $(".serverTypeClassZonghe");
    this.cehua=$(".cehuaServerType");
    this.typeCehua = $(".serverTypeClassCehua");
    //that绑定
    var that = this;
    //洽谈地址
    this.jumpSrc = "/negotiate/" + base64.encode("网站开发");
    /**
     * 切换业务类型方法
     * @type {ScopeSwitch}
     */
    this.scopeSwitch = ScopeSwitch;
    function ScopeSwitch(show) {


        //隐藏所有介绍
        $(".choicedAbout").hide();
        //关闭所有卡片样式
        $(".serverTypeClass").css({"box-shadow":"none"});
        if(show == 'web'){
            //显示web开发介绍
            that.web.show(300);
            //更改web开发卡片样式
            that.typeWeb.css({"box-shadow":"0 0 20px #ccc"});
            //设置洽谈跳转链接
            that.jumpSrc = "/negotiate/" + base64.encode("网站开发");
        }
        else if(show == 'wechat'){
            that.wechat.show(300);
            that.typeWechat.css({"box-shadow":"0 0 20px #ccc"});
            that.jumpSrc = "/negotiate/" + base64.encode("微信开发");
        }
        else if(show == 'app'){
            that.app.show(300);
            that.typeApp.css({"box-shadow":"0 0 20px #ccc"});
            that.jumpSrc = "/negotiate/" + base64.encode("APP开发");
        }
        else if(show == 'zonghe'){
            that.zonghe.show(300);
            that.typeZonghe.css({"box-shadow":"0 0 20px #ccc"});
            that.jumpSrc = "/negotiate/" + base64.encode("综合开发");
        }
        else if(show == 'cehua'){
            that.cehua.show(300);
            that.typeCehua.css({"box-shadow":"0 0 20px #ccc"});
            that.jumpSrc = "/negotiate/" + base64.encode("企业策划");
        }
        else{
        }
    }
    /**
     * 网站开发业务类型切换
     */
    this.switchWebDev = SwitchWebDev;
    function SwitchWebDev(show) {
        $(".serverTypeOfMenuItem").css({"background":"none","color":"#8d8d8d"});
        $(".serverTypeOfItemChird").hide();
        if(show == 'qiye'){
            $(".serverTypeOfMenuItem").eq(0).css({"background":"#cc1212","color":"#fff"});
            $(".ItemEnterpriseWeb").show();
        }else if(show == 'dianzi'){
            $(".serverTypeOfMenuItem").eq(1).css({"background":"#cc1212","color":"#fff"});
            $(".ItemDianziShangwu").show();
        }else if(show == 'dingzhi'){
            $(".serverTypeOfMenuItem").eq(2).css({"background":"#cc1212","color":"#fff"});
            $(".ItemDingzhi").show();
        }
    }
}



$(document).ready(function () {
    pageObj = new Page();
});
