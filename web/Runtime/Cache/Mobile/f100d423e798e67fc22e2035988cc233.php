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




    
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/account_data.css" />

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

    <div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable" style="overflow-x: hidden;">
        <!--侧滑菜单部分-->
        <aside id="offCanvasSide" class="mui-off-canvas-left">
    <div id="offCanvasSideScroll" class="mui-scroll-wrapper">
        <div class="user">
            <div class="img-box">
                <?php if($_SESSION['user_auth']== ''): ?><a href="<?php echo U('Mobile/User/login');?>">  <?php else: ?> <a href="<?php echo U('Mobile/User/index');?>"><?php endif; ?> <img src="/Application/Mobile/Static/images/userimg.png" alt=""></a>
            </div>
            <div class="info">
             <?php if($_SESSION['user_auth']== ''): ?><a href="<?php echo U('Mobile/User/login');?>" style="color:#fff">请登录</a> <?php else: ?>用户<?php echo ($_SESSION['user_auth']['username']); ?>，欢迎回来<?php endif; ?>
            </div>
        </div>
        <div class="mui-scroll">
            <ul class="nav-list">
                <a id="usericon1" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/User/index');?>" >
                    <li class="nav-item" >
                        <img src="/Application/Mobile/Static/images/usericon1.png" alt="">
                        <span style="font-size: 14px; color:#fff;">账户资料</span>
                    </li>
                </a>
                <a id="usericon2" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Card/cardCenter');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon2.png" alt="">
                        <span style="font-size: 14px; color:#fff;">我要卖卡</span>
                    </li>
                </a>
                <a id="usericon3" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Card/sellrecord');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon3.png" alt="">
                        <span style="font-size: 14px; color:#fff;">卖卡记录</span>
                    </li>
                </a>
                <a id="usericon11" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/User/withdrawals');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon11.png" alt="">
                        <span style="font-size: 14px; color:#fff;">我要提现</span>
                    </li>
                </a>

            </ul>
            <ul class="nav-list">
           <!--      <a id="usericon4" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Exchange/index');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon4.png" alt="">
                        <span style="font-size: 14px; color:#fff;">积分兑换</span>
                    </li>
                </a> -->
                <a id="usericon5" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Exchange/recycle');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon5.png" alt="">
                        <span style="font-size: 14px; color:#fff;">企业回收</span>
                    </li>
                </a>
           <!--      <a id="usericon6" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Exchange/unline');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon6.png" alt="" >
                        <span style="font-size: 14px; color:#fff;">线下交易</span>
                    </li>
                </a> -->
            </ul>
            <ul class="nav-list">
                <a id="usericon7" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Index/index');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon7.png" alt="">
                        <span style="font-size: 14px; color:#fff;">首页</span>
                    </li>
                </a>
                <a id="usericon12" style="display: block; cursor: pointer;">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon12.png" alt="">
                        <span style="font-size: 14px; color:#fff;">联系我们</span>
                    </li>
                </a>
                <a id="usericon8" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/About/index');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon8.png" alt="">
                        <span style="font-size: 14px; color:#fff;">关于我们</span>
                    </li>
                </a>
                <a id="usericon9" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/Help/index');?>">
                    <li class="nav-item">
                        <img src="/Application/Mobile/Static/images/usericon9.png" alt="">
                        <span style="font-size: 14px; color:#fff;">帮助中心</span>
                    </li>
                </a>

            </ul>
            <?php if($_SESSION['user_auth']!= ''): ?><ul class="nav-list">
                <a id="usericon10" style="display: block; cursor: pointer;" href="<?php echo U('Mobile/User/login_out');?>">
                    <li class="nav-item">
                        <img style="height: 23px;width: 23px" src="/Application/Mobile/Static/images/loginout.png" alt="">
                        <span style="font-size: 14px; color:#fff;">退出登录</span>
                    </li>
                </a>

                </ul><?php endif; ?>
        </div>
    </div>
</aside>
<script src="/Application/Mobile/Static/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $('#usericon1').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/User/index');?>";
    });
    $('#usericon2').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Card/cardCenter');?>";
    });
    $('#usericon3').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Card/sellrecord');?>";
    });
    $('#usericon4').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Exchange/index');?>";
    });
    $('#usericon5').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Exchange/recycle');?>";
    });
    $('#usericon6').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Exchange/unline');?>";
    });
    $('#usericon7').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Index/index');?>";
    });
    $('#usericon8').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/About/index');?>";
    });
    $('#usericon9').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/Help/index');?>";
    });
    $('#usericon10').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/User/login_out');?>";
    });
    $('#usericon11').on('tap',function () {
        window.location.href = "<?php echo U('Mobile/User/withdrawals');?>";
    });
         $('#usericon12').on( 'tap',function () {
            window.location.href="http://wpa.qq.com/msgrd?v=3&uin=76891828&site=qq&menu=yes";
        });
</script>
        <!--主界面部分-->
        <div class="mui-inner-wrap">
            <header class="mui-bar mui-bar-nav">
                <a class="mui-action-back mui-icon mui-icon-arrowleft mui-pull-left"  href="javascript:history.back(-1)"></a>
                <h1 class="mui-title">账户资料</h1>
                <a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
            </header>
            <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
                <div class="mui-scroll" id="move-togger">
                    <div class="tabview cf">
                        <div class="l-box fl">
                            <p>账户余额</p>
                            <p class="num"><?php echo ($user_info["balance"]); ?></p>
                            <p class="tx">提现处理中，金额(元)：<?php echo ((isset($money) && ($money !== ""))?($money):"0"); ?></p>
                        </div>
                        <div class="r-box fr">
                            <a id="withdrawals">提现</a>
                            <a id="withdrawalshistory" href="#">提现记录</a>
                        </div>
                    </div>
                    <div class="menu-list">
                        <a  id = "repassword"  class="menu-item">
                            <div class="r-box cf">
                                <span>登录密码</span>
                                <p>修改密码</p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                        <a id="change_pay_password"   class="menu-item">
                            <div class="r-box cf">
                                <span>支付密码</span>
                                <p>修改支付密码</p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                        <a id="real_name"  class="menu-item">
                            <div class="r-box cf">
                                <span>实名认证</span>
                                <?php if($user_info["is_permission"] == 1): ?><p>已认证</p><?php endif; ?>
                                <?php if($user_info["is_permission"] != 1): ?><p>暂未认证</p><?php endif; ?>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                         <?php if($user_info["qq_openid"] == ''): ?><a  id="qq" href="https://graph.qq.com/oauth2.0/authorize?client_id=101483760&amp;response_type=token&amp;scope=all&amp;redirect_uri=http://www.shoukb.com/" class="menu-item">
                            <?php else: ?>
                         <a href="#" id="qq" class="menu-item"><?php endif; ?>
                        
                            <div class="r-box cf">
                                <span>qq绑定</span>
                                <p><?php echo ((isset($user_info["qq_usernick"]) && ($user_info["qq_usernick"] !== ""))?($user_info["qq_usernick"]):"未绑定"); ?></p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                         <?php if($user_info["wx_unionid"] == ''): ?><a id="weixin" href="" class="menu-item">
                            <?php else: ?>
                         <a id="weixin" class="menu-item"><?php endif; ?>
                       
                            <div class="r-box cf">
                                <span>微信绑定</span>
                                <p><?php echo ((isset($user_info["wx_usernick"]) && ($user_info["wx_usernick"] !== ""))?($user_info["wx_usernick"]):"未绑定"); ?></p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>

                        <?php if($user_info["phone"] == ''): ?><a id="phone" class="menu-item">
                        <?php else: ?>
                            <a id="phone" class="menu-item"><?php endif; ?>
                            <div class="r-box cf">
                                <span>手机绑定</span>
                                <p><?php echo ((isset($user_info["phone"]) && ($user_info["phone"] !== ""))?($user_info["phone"]):"未绑定"); ?></p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                        <a id="email" class="menu-item">
                            <div class="r-box cf">
                                <span>邮箱绑定</span>
                                <p><?php echo ((isset($user_info["email"]) && ($user_info["email"] !== ""))?($user_info["email"]):"未绑定"); ?></p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                        <a  id="address" class="menu-item">
                            <div class="r-box cf">
                                <span>地址</span>
                                <p><?php echo ($region_list[$default_address['province']]['region_name']); ?> <?php echo ($region_list[$default_address['city']]['region_name']); ?> <?php echo ($region_list[$default_address['district']]['region_name']); ?> <?php echo ($default_address["address"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;  <span style="color: #3f51b5;display: inline">收货人： <?php echo ($default_address["consignee"]); ?>  电话：<?php echo ($default_address["mobile"]); ?></span> </p>
                            </div>
                            <span class="mui-icon mui-icon-arrowright fr"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- off-canvas backdrop -->
            <div class="mui-off-canvas-backdrop"></div>
        </div>
    </div>



	<script type="text/javascript">
        mui('#offCanvasSideScroll').scroll();
        mui('#offCanvasContentScroll').scroll();
        
        $('#address').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/address_list');?>";
        });

        $('#email').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/email');?>";
        });
        $('#phone').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/phone');?>";
        });
        $('#qq').on('tap',function () {
            window.location.href = "https://graph.qq.com/oauth2.0/authorize?client_id=101483760&amp;response_type=token&amp;scope=all&amp;redirect_uri=http://www.shoukb.com/";
        });

      $('#weixin').on('tap',function () {
            window.location.href = "https://open.weixin.qq.com/connect/qrconnect?appid=http://www.shoukb.com/Home/Index/webchatLogin&redirect_uri=http://www.shoukb.com/Home/Index/webchatLogin&response_type=code&scope=snsapi_login&state=#wechat_redirect";
        });

        $('#real_name').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/real_name');?>";
        });

        $('#change_pay_password').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/change_pay_password');?>";
        });

        $('#withdrawals').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/withdrawals');?>";
        });
        $('#withdrawalshistory').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/withdrawalshistory');?>";
        });
        $('#repassword').on('tap',function () {
            window.location.href = "<?php echo U('Mobile/User/repassword');?>";
        });

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