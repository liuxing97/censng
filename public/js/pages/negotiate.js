function ContactWayFllow() {
    window.onscroll =function(){
        //顶部效果
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        //跟随效果
        if(t>128){
            $(".contactWay").css({"top":t-138});
        }
        else{
            $(".contactWay").css({"top":"0"});
        }
    };
}

if(pageStatus == 'hasPara'){
    ContactWayFllow();
    $(document).ready(function () {
        $(".contactWay").css({"padding-top":"0px","height":"480px","border-bottom":"2px solid #fff"});
    })
}else{

}
// alert(base64.encode('请选择'));
var phoneState = 0;
//电话号验证
function checkPhone(div) {
    var str = $(div).val();
    var reg=/^1([358][0-9]|4[579]|66|7[0135678]|9[89])[0-9]{8}$/;   /*定义验证表达式*/
    var bool = reg.test(str);     /*进行验证*/
    if(bool){
        $(".inputErrorMsgPhone").hide();
        phoneState = str;
        return 1;
    }else{
        if(str!=''){
            $(".inputErrorMsgPhone").show();
        }else{
            $(".inputErrorMsgPhone").hide();
        }
        phoneState = 0;
        return 0;
    }
}
var nameState = 0;
//姓名验证
function checkName(div) {
    var str = $(div).val();
    var reg=/^([\u4e00-\u9fa5]{1,20}|[a-zA-Z\.\s]{1,20})$/;   /*定义验证表达式*/
    var bool = reg.test(str);     /*进行验证*/
    if(bool){
        $(".inputErrorMsgName").hide();
        nameState = str;
        return 1;
    }else{
        if(str!=''){
            $(".inputErrorMsgName").show();
        }else{
            $(".inputErrorMsgName").hide();
        }
        nameState = 0
        return 0;
    }
}
var postState = 0;
//职务验证
function checkPost(div) {
    var str = $(div).val();
    var reg=/^([\u4e00-\u9fa5]{1,20}|[a-zA-Z\.\s]{1,20})$/;   /*定义验证表达式*/
    var bool = reg.test(str);     /*进行验证*/
    if(bool){
        $(".inputErrorMsgPost").hide();
        postState=str;
        return 1;
    }else{
        if(str!=''){
            $(".inputErrorMsgPost").show();
        }else{
            $(".inputErrorMsgPost").hide();
        }
        postState =0;
        return 0;
    }
}


/**
 * 获取验证码
 */
var countDown = 0;
function getNumber(){
    if(
    !checkPhone(".inputDomPhone") ||
    !checkName(".inputDomName") ||
    !checkPost(".inputDomPost")){
        return 0;
    }
    //如果倒计时已经到头
    if(countDown === 0){
        //从60开始计时
        countDown = 5;
        //更改获取验证码样式，进行倒计时
        name = setInterval(function() {
            $(".getNumber").html("重新获取"+"("+countDown+")");// 你倒计时显示的地方元素
            if(countDown==0){
                clearInterval(name);
                $(".getNumber").html("重新获取");
                return true;
            }
            countDown--;
        }, 1000);
        //触发服务器端，发送短信
        $.get(
            "/msg/leave_msg/"+phoneState,
            function (data, status) {
                console.log(data);
            }
        );
    }else{
        //显示提示：已发送，请等待60S后重新发送
    }
}
var codeState = 0;
/**
 * 判断验证码
 */
function checkCode(dom) {
    var str = $(dom).val();
    var reg=/^[0-9]*$/;   /*定义验证表达式*/
    var bool = reg.test(str);     /*进行验证*/
    if(bool){
        $(".inputErrorMsgCode").hide();
        codeState=str;
        return 1;
    }else{
        if(str!=''){
            $(".inputErrorMsgCode").show();
        }else{
            $(".inputErrorMsgCode").hide();
        }
        codeState =0;
        return 0;
    }
}
/**
 * 提交
 */
function submit(){
    //获取业务类型
    var serverType = $(".serverTypeChoiced").html();
    console.log(serverType);
    //判断手机，姓名，职务
    if(
        !checkPhone(".inputDomPhone") ||
        !checkName(".inputDomName") ||
        !checkPost(".inputDomPost")||
        !checkCode(".inputDomCode")){
        console.log(phoneState,nameState,postState,codeState);
        console.log("自己检查，看哪里出问题了");
        // $(".inputErrorSubmit").show();
        return 0;
    }
    //判断男女
    var sex = $('input[name="sex"]:checked ').val();
    // console.log(sex);
    //使用post提交信息
    $.post(
        '/act_negotiate',
        {
            phone:phoneState,
            name:nameState,
            post:postState,
            codeNum:codeState,
            sex:sex,
            serverType:serverType,
            _token:$("input[name='_token']").val()
        },
        function (data, status) {
            data = $.parseJSON(data);
            console.log(data.code);
            if(data.code == '200'){
                alert("留言成功")
                //跳转成功页面
                location.href = "/negotiate/success";
            }else if(data.code =='400'){
                console.log("验证码错误")
            }else{
                console.log("发生了未知的错误，如急需本功能，请联系管理")
            }
        }
    );
}