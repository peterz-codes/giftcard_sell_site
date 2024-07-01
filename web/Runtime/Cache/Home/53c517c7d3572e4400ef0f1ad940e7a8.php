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
    
    <link rel="stylesheet" href="/Application/Home/Static/css/help_center.css">


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

    

    <div class="outbox">
        <div class="inbox cf">
         <div class="l-box fl">
             <!--   <ul class="sub-list">
                 <?php if(is_array($menu_list)): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Help/Index');?>/id/<?php echo ($vo["id"]); ?>"  <?php if($vo["id"] == $id): ?>class="on sub-item"<?php endif; ?> class="sub-item" ><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
             </ul>-->
             <div id="firstpane" class="menu_list">
                 <p  <?php if($typeid == 0): ?>class="menu_head current"<?php else: ?>class="menu_head"<?php endif; ?>>帮助中心</p>
                 <div <?php if($typeid == 0): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?> class=menu_body >

                     <?php if(is_array($menu_list)): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Help/Index');?>/id/<?php echo ($vo["id"]); ?>" class="sub-item" ><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                 </div>
                 <?php if(is_array($cardtypelist)): $i = 0; $__LIST__ = $cardtypelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p <?php if($vo["id"] == $typeid): ?>class="menu_head current"<?php else: ?>class="menu_head"<?php endif; ?>><?php echo ($vo["name"]); ?></p>

                 <div <?php if($vo["id"] == $typeid): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>  class=menu_body >
                     <?php if(is_array($vo["data"])): $i = 0; $__LIST__ = $vo["data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Help/Index');?>/aid/<?php echo ($v["id"]); ?>"   class="sub-item" ><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                 </div><?php endforeach; endif; else: echo "" ;endif; ?>


             </div>

         </div>

            <script src="/Application/Home/Static/js/jquery.js"></script>
            <script type=text/javascript>
                $(document).ready(function(){
                  //  $("#firstpane .menu_body:eq(0)").show();
                    $("#firstpane p.menu_head").click(function(){
                        $(this).addClass("current").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                        $(this).siblings().removeClass("current");
                    });
                    $("#secondpane .menu_body:eq(0)").show();
                    $("#secondpane p.menu_head").mouseover(function(){
                        $(this).addClass("current").next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
                        $(this).siblings().removeClass("current");
                    });

                });
            </script>
            <div class="r-box fr">
                <div class="title">
                    <?php echo ($detail["title"]); ?>
                </div>
                <div class="content">
                    <?php if($id != 11): echo (htmlspecialchars_decode($detail["content"])); ?>
                        <?php elseif($id == 11): ?>
                        <div class="timeline notice-timeline ">
                            <s class="timeline-line"></s>
                            <ul class="timeline-listing">
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="timeline-item">
                                    <div class="timeline-date">
                                        <i class="dot"></i><?php echo (time_format($vo['add_time'],'m-d')); ?><span><?php echo (time_format($vo['add_time'],'Y')); ?></span>
                                    </div>
                                    <div class="timeline-main">
                                        <h5><?php echo ($vo['name']); ?></h5>
                                        <?php echo (htmlspecialchars_decode($vo['content'])); ?>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div><?php endif; ?>
                </div>
            </div>
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
        $(function () {
            $('.nav .nav-item').siblings().removeClass('on');
            $('.nav .nav-item').eq(6).addClass('on');
        });
    </script>

</body>
</html>