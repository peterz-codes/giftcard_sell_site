<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?> - www.ohbbs.cn 欧皇源码论坛 </title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/mui.min.css" />
<script src="/Application/Mobile/Static/js/mui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/Application/Mobile/Static/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/Application/Mobile/Static/js/initial.js" type="text/javascript" charset="utf-8"></script>




    
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/login.css" />

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?263bc29aa533e5290710fe5d1e9c83e2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>

    <header class="mui-bar mui-bar-nav">
        <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"  href="javascript:history.back(-1)"></a>
        <a class="fr r-text" href="<?php echo U('Mobile/User/register');?>">注册</a>
    </header>
    <div class="mui-content">
        <h3>账号登录</h3>
        <div class="inp-group mui-input-group " >
            <div class="inp-row mui-input-row">
                <input type="text" name="phone" placeholder="请输入手机号" class="mui-input-clear">
            </div>
            <div class="inp-row mui-input-row password">
                <input type="password" class="mui-input-password form-password" name="password" placeholder="请输入密码">
            </div>
    <i   class="lg-linki chbox fl" id="chbox" ></i><span class="fl lg-link chbox">下次自动登录</span>  
    <!--      <input type="checkbox" id="chbox">
<label  for="chbox">下次自动登录</label> -->
            <a href="<?php echo U('Mobile/User/forget_password');?>" class="forget fr">忘记密码</a>

            <button class="btn" id="login" >登录</button>
        </div>
        <div class="other-way">
            <div class="inbox cf">
                <a href="<?php echo U('Home/User/oauth_login',array('type'=>'qq'));?>" class="way-item fl">
                    <img src="/Application/Mobile/Static/images/qq.png" alt="">
                    <span>QQ登录</span>
                </a>
                <a href="https://open.weixin.qq.com/connect/qrconnect?appid=wxa4bded57179bd4dd&redirect_uri=http://www.shoukb.com/Home/Index/webchatLogin&response_type=code&scope=snsapi_login&state=#wechat_redirect" class="way-item fl">
                    <img src="/Application/Mobile/Static/images/wx.png" alt="">
                    <span>微信登录</span>
                </a>
            </div>
        </div>
    </div>



    <script type="text/javascript">

        $(function () {
            $('#nav-user').addClass('mui-active');
            $('#login').click(function () {
                var phone = $('input[name="phone"]').val().trim();
                var password = $('input[name="password"]').val();
                var is_auto_login = $("#chbox").attr('type');
                if(phone == ''){
                    mui.toast("请输入登录手机号！");
                    return false;
                }else if( !checkMobile(phone)){
                    mui.toast("手机号不正确！");
                    $('input[name="phone"]').val('');
                    return false;
                }
                if(password == ''){
                    mui.toast("请输入密码！");
                    return false;
                }
                var url = "<?php echo U('Mobile/User/login');?>";
                $.ajax({
                    type:'post',
                    url: url,
                    data:{ phone: phone, password: password,'is_auto_login':is_auto_login},
                    success:function(data){
                        if(data.status != 1){
                            mui.toast(data.info);
                            return false ;
                        }else{
                            mui.toast(data.info);
                            window.location.href="<?php echo U('Mobile/Index/index');?>";
                        }
                    }
                });
            });
        });
          // 点击下次自动登录执行的事件
    $(".chbox").click(function(){
        if($('#chbox').hasClass('on')){
            $('#chbox').attr('type',0);//取消自动登录，用type=0代替
            $('#chbox').removeClass('on');
        }else {
            $('#chbox').attr('type',1);//加上自动登录，用type=1代替
            $('#chbox').addClass('on');
        }
    })
    </script>

</body>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e872adf68a156ce6ab4768ea9ae6bb55";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</html>