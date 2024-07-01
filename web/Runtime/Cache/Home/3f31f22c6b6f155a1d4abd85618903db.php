<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
	<title>百分百收卡网_礼品卡兑换_一家专注二手礼品卡回收的网站 - www.ohbbs.cn 欧皇源码论坛 </title>

    <meta name="keywords" content="<?php echo C('KEYWORDS');?>">
    <meta name="description" content="<?php echo C('DESCRIPTION');?>">
     
    <link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base.css"/>
    <link rel="stylesheet" href="/Application/Home/Static/css/style2.css">
    <!--<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/index.css"/>-->
    
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/recycle.css"/>

    <style type="text/css">
        body{
            min-width: 1200px;
        }
    </style>
    <script>
        // var _hmt = _hmt || [];
        // (function() {
        //     var hm = document.createElement("script");
        //     hm.src = "https://hm.baidu.com/hm.js?1d59f51ca1e06504857c1dbf0b8ba09c";
        //     var s = document.getElementsByTagName("script")[0];
        //     s.parentNode.insertBefore(hm, s);
        // })();
    </script>
</head>
<body>

    <header>
        <div class="head_z"></div>
        <div class="head_f">
            <div class="layout clear">
                <div class="logo fl">
                    <a href="/">
                    <img src="/Application/Home/Static/images/logo2.png" alt="">
                    </a>
                </div>
                <ul class="head_list fl">
                    <li class="active">
                    <a href="/">
                        首页
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('card/sellcard');?>">
                            寄售中心
                        </a>
                    </li>
                    <li><a href="<?php echo U('Card/recycle');?>">企业回收</a></li>
                </ul>
                <?php if(is_login()): ?><div class="user-right fr cf">
                    <div class="user-right-name fl cf" >
                        <a href="<?php echo U('User/index');?>"><img class="user-avatar fl" src="/Application/Home/Static/images/default.png">
                        <span class="user-font fl"><?php echo ($userInfo['username']); ?></span>
                        <img class="user-jiantou fl" src="/Application/Home/Static/images/xiangx@2x.png">
                        </a>
                        <div class="login-drop">
                            <img class="dropDown-top" src="/Application/Home/Static/images/top.png" >
                            <div class="dropDown-content">
                                <a href="<?php echo U('User/index');?>">
                                    <div class="dropDown-floor cf">
                                        <!--<img class=" fl" src="/Application/Home/Static/images/subicon1.png" >-->
                                        <span class="fl" style="margin-left: 47px; ">账户中心</span>
                                    </div>
                                </a>
                                <!--<div class="line"></div>-->
                                <!--<a href="<?php echo U('User/sellCardRecord');?>" target="_top">-->
                                    <!--<div class="dropDown-floor cf">-->
                                        <!--<img class=" fl" src="/Application/Home/Static/images/subicon3.png" >-->
                                        <!--<span class="fl">卖卡记录</span>-->
                                    <!--</div>-->
                                <!--</a>-->
                                <div class="line"></div>
                                <!--<a href="<?php echo U('Home/Public/logout');?>">-->
                                    <div class="dropDown-floor">
                                        <!--<img class=" fl" src="/Application/Home/Static/images/subicon2.png" >-->
                                        <span class="fl loginout" style="margin-left: 47px; ">退出登录</span>
                                    </div>
                                <!--</a>-->
                            </div>
                            <img class="dropDown-bto" src="/Application/Home/Static/images/bot.png" >
                        </div>
                    </div>

                    <!--<div class=" content-right-box fr cf">-->
                        <!--<img class="help-pic fl" src="/Application/Home/Static/images/bangz@2x.png">-->
                        <!--<span class="user-help-font fr">帮助中心</span>-->
                    <!--</div>-->
                    <div class="user-right-help fr cf">
                        <img class="help-pic fl" src="/Application/Home/Static/images/bangz@2x.png">
                        <span class="user-help-font fr" style="cursor: pointer">帮助中心</span>

                        <div class="dropDown-help help-login">
                            <img class="dropDown-top" src="/Application/Home/Static/images/top.png" >
                            <div class="help-content">
                                <div class="help-title cf">
                                    <a href="<?php echo U('Help/Index');?>"> <span class="fl ">帮助中心</span></a>
                                    <div class="help-line fl"></div>
                                    <a href="<?php echo U('Help/Index',array('id'=>13));?>">  <span class="fr">卖卡流程</span></a>
                                </div>
                                <div class="line"></div>
                                <div class="help-box">
                                    <div class="help-box-serve">或直接拨打客服热线</div>
                                    <div class="help-box-num">8373185</div>
                                    <div class="help-box-date">周一至周日 8:00-24:00</div>
                                </div>
                                <div class="line"></div>
                                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo C('QQ');?>&amp;site=qq&amp;menu=yes"><div class="help-box-bot">联系在线客服</div></a>
                            </div>
                            <img class="dropDown-bto" src="/Application/Home/Static/images/bot.png" >
                        </div>
                    </div>

                </div>
                <?php else: ?>
                <div class="fr login_box">
                    <button class="btn_login loginbox">登录
                        <div class="login_way shadow" style="display:none" >
                            <ul>
                                <li>
                                   <a >
                                          <img  src="/Application/Home/Static/images/shoujihao.png" >
                                        <span>账号密码</span>
                                   </a>
                                </li>
                                <li>  <a  href="https://graph.qq.com/oauth2.0/authorize?client_id=101578620&amp;response_type=token&amp;scope=all&amp;redirect_uri=http://www.shoukb.com/Home/Login/qq">
                                         <img src="/Application/Home/Static/images/qq.png" >
                                        <span>qq登录</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx6353058509cb4eda&redirect_uri=http://www.shoukb.com/Home/Index/webchatLogin&response_type=code&scope=snsapi_login&state=#wechat_redirect">
                                        <img  src="/Application/Home/Static/images/weixin.png" >
                                        <span>微信登录</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </button>
                    <a  class="singup">
                        <button class="btn_login" id="register">注册</button>
                    </a>
                </div><?php endif; ?>
            </div>
        </div>
    </header>

    

	<div class="index-bg">
		<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo C('QQ');?>&amp;site=qq&amp;menu=yes" target="_blank"><img src="/Application/Home/Static/images/index_bg.png" ></a>
	</div>
	<div class="outbox advantage fff">
		<h3>我们的优势</h3>
		<div class="inbox">
			<div class="cf adv-box">
				<div class="adv-item fl cf">
					<div class="img-box fl">
						 <img src="/Application/Home/Static/images/advimg1.png" alt="">
					</div>
					<div class="text-box fl">
						<h5>一对一服务</h5>
						<h6>我们出色的专业服务团队确保交易安全放心满意</h6>
					</div>
				</div>
				<div class="adv-item fl cf">
					<div class="img-box fl">
						<img src="/Application/Home/Static/images/advimg2.png" alt="">
					</div>
					<div class="text-box fl">
						<h5>交易方式多样</h5>
						<h6>我们提供线上、线下、API接口为您定制多种交易方式</h6>
					</div>
				</div>
			</div>
			<div class="cf adv-box">
				<div class="adv-item fl cf">
					<div class="img-box fl">
						<img src="/Application/Home/Static/images/advimg3.png" alt="">
					</div>
					<div class="text-box fl">
						<h5>种类丰富，卡券齐全</h5>
						<h6>提供回收类型覆盖线上线下等几十种礼品卡卡券</h6>
					</div>
				</div>
				<div class="adv-item fl cf">
					<div class="img-box fl">
						<img src="/Application/Home/Static/images/advimg4.png" alt="">
					</div>
					<div class="text-box fl">
						<h5>极速资金回流</h5>
						<h6>我们在验卡成功后立即打款资金回流速度超乎想象</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="outbox f5f5 bgf5f5 api">
		<h3>对外API接口</h3>
		<div class="inbox  ml30">
			<div class="p-box">
				<p>全面稳定的API接口资源</p>
				<p>我是企业，我要咨询合作</p>
			</div>
			<a class="btn" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo C('QQ');?>&amp;site=qq&amp;menu=yes" target="_blank">立即咨询</a>
		</div>
	</div>


    
 <footer>
        <p style="color:#ffffff">COPYRIGHT © 2019 www.shoukb.com . All Rights Reserved</p>
    </footer>
<script src="/Application/Home/Static/js/jquery.js"></script>
<script type="text/javascript" src="/Public/layer/layer.js"></script>
<script type="text/javascript">
    $(function() {

        // var url = $("#hiddenUrl").attr('data-url');
        var string = window.location.hash;
        var string1 = string.split('=');
        var string3 = string1[1];
        var string2 = string3.split('&');
        var access_token = string2[0];
        window.location.href = "/index.php/Home/Login/qq" + "?access_token=" + access_token;

    });


    $(".loginout").click(function(){
    layer.confirm("您确定要退出登录吗?", {btn: ['确定', '取消'], title: "提示"}, function (){
        window.location.href="<?php echo U('Home/Public/logout');?>";
    });
});
    var is_login="<?php echo ($is_login); ?>";
    $(".login_tan").click(function(){
        if(is_login==3){
            layer.open({
                type: 2,
                title: false,
                area: ['680px', '470px'],

                shade: 0.8,
                shadeClose: true, //close
                content: ['<?php echo U("Home/Public/loginbox?type=2");?>', 'no'],

            });
        }
    });

    $('#register').on('click', function () {
        layer.open({
            type: 2,
            title: false,
            area: ['680px', '440px'],
            shade: 0.8,
            shadeClose: true, //close
            content: ['<?php echo U("Home/Public/register?type=2");?>', 'no']
        });
    });
    $('.loginbox').on('click', function () {
        layer.open({
            type: 2,
            title: false,
            area: ['680px', '470px'],

            shade: 0.8,
            shadeClose: true, //close
            content: ['<?php echo U("Home/Public/loginbox?type=2");?>', 'no'],

        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.loginbox').on('mouseover',function(){
            $('.login_way').show()
        });
        $('.loginbox').on('mouseout',function(){
            $('.login_way').hide()
        });



        $('.content-right-box,.user-right-help').on('mouseover',function(){

            $('.dropDown-help').show();
        });
        $('.content-right-box,.user-right-help').on('mouseout',function(){
            $('.dropDown-help').hide()
        });
    })
    $(document).ready(function(){
        $('.user-right-name').hover(function(){
            $('.login-drop').show();
        },function(){
            $('.login-drop').hide();
        })
    })
</script>


	<script>
        $(".head_list li").removeClass("active");
        $(".head_list li").eq(2).addClass("active");

	</script>

</body>
</html>