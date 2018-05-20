function ready() {
    console.log(window.__wxjs_environment === 'miniprogram') // true
    $(".header").css({"position":"absolute!important","top":"0","opacity":"0.98"});
    alert(1)
}
if (!window.WeixinJSBridge || !WeixinJSBridge.invoke) {
    document.addEventListener('WeixinJSBridgeReady', ready, false)
    window.onscroll = function(){
        //顶部效果
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        if(t > 66){
            $(".header").css({"position":"fixed","top":"-75px","opacity":"0.98"});
            $(".header-logo").css({"left":"-84","top":"88px","width":"45px","box-shawed":"0 0 10px #ccc"});
            // $(".header-logo").hide();
            $(".page").css({"padding-top":'138px'})
        }else{
            $(".header").css({"position":"relative","top":"0","opacity":"1"});
            $(".header-logo").css({"left":"-84","top":"26px","width":"84px"});
            $(".page").css({"padding-top":'0'});
            // $(".header-logo").show();
        }
    };
} else {
    ready()
}
// left: -84px;
// top: 26px;