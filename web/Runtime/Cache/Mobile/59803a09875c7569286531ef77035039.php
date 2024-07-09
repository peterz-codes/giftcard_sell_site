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




    
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/index.css" />

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
                <img src="/Application/Mobile/Static/images/logo.png" />
                <a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
            </header>
            <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
                <div class="mui-scroll" id="move-togger">
                    <a href="<?php echo U('Mobile/Card/cardCenter');?>"><div class="banner">
                    <button class="con-btn">立即交易</button>
                    </div></a>
                    <div class=" notice">
                        <div class="left-img">
                            <img src="/Application/Mobile/Static/images/notice.jpg" alt="">
                        </div>
                        <div class="right-notice">
                            <span><?php echo (time_format($list['add_time'],'Y-m-d')); ?></span> &nbsp;<span>|</span>&nbsp;
                            <a href="<?php echo U('Mobile/Help/announcement');?>"><span class="title"><?php echo ($list['name']); ?>：</span></a>
                            <span class="content"><?php echo (msubstr(strip_tags(htmlspecialchars_decode($list['content'])),0,30,'utf-8',true)); ?></span>
                            <a class="more" href="<?php echo U('Mobile/Help/announcement');?>">查看更多>></a>
                        </div>
                    </div>
                    <div class="card-list list">
                     <?php if(is_array($cardtype_info)): $i = 0; $__LIST__ = array_slice($cardtype_info,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
                            <a href="<?php echo U('Mobile/Card/cardCenter?typeid='.$vo['id']);?>">
                            <div class="img-box">

                                <img src="<?php echo ($vo["wapphoto_path"]); ?>" alt="">

                            </div>
                            <span><?php echo ($vo["name"]); ?></span>
                            </a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                    <div class="card-list list">
                     <?php if(is_array($cardtype_info)): $i = 0; $__LIST__ = array_slice($cardtype_info,3,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
                            <a href="<?php echo U('Mobile/Card/cardCenter?typeid='.$vo['id']);?>">
                            <div class="img-box">

                                <img src="<?php echo ($vo["wapphoto_path"]); ?>" alt="">

                            </div>
                            <span><?php echo ($vo["name"]); ?></span>
                            </a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                    <div class="step-box">
                        <div class="title-box">
                            <div class="line"></div>
                            <div class="title">极速兑换只需4步数&nbsp;&nbsp;&nbsp;1分钟完成结算</div>
                            <div class="line"></div>
                        </div>
                        <div class="step-list list">
                            <div class="item">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/stepimg1.png" alt="">
                                </div>
                                <span>注册会员</span>
                            </div>
                            <div class="item">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/stepimg2.png" alt="">
                                </div>
                                <span>提交卡密</span>
                            </div>
                            <div class="item">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/stepimg3.png" alt="">
                                </div>
                                <span>审核通过</span>
                            </div>
                            <div class="item">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/stepimg4.png" alt="">
                                </div>
                                <span>结算打款</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-box recycle">
                        <h3>线下礼品卡回收列表</h3>
                        <ul class="logo-list cf">
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg1.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg2.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg3.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg4.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg5.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg6.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg7.jpg" alt="">
                                </div>
                            </li>
                            <li class="logo-item fl">
                                <div class="img-box">
                                    <img src="/Application/Mobile/Static/images/logoimg8.jpg" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-box partner">
                       <!--  <h3>合作伙伴</h3> -->
                        <ul class="logo-list cf">
                       <!--      <?php if(is_array($partner_list)): $i = 0; $__LIST__ = $partner_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="logo-item fl">
                                    <div class="img-box">
                                        <img src="<?php echo ($list["photo_path"]); ?>" alt="">
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?> -->
                        </ul>
                    </div>
                    <div class="foot-nav">
                     <?php if($_SESSION['user_auth']== ''): ?><div class="foot-nav-bpx">
                            <a href="<?php echo U('Mobile/User/register');?>">注册</a>
                            <a href="<?php echo U('Mobile/User/login');?>">登录</a>
                        </div><?php endif; ?>
                    </div>
                    <div class="copyright">
                        Copyright © 2004-2017 www.shoukb.com 爱卡网 版权所有
                    </div>
                </div>
            </div>
            <!-- off-canvas backdrop -->
            <div class="mui-off-canvas-backdrop"></div>
        </div>
    </div>



	<script type="text/javascript">
        mui('body').on('tap', 'a', function () { document.location.href = this.href; });
        mui('#offCanvasSideScroll').scroll();
        mui('#offCanvasContentScroll').scroll();
        $(function(){
            var string = window.location.hash;//获得当前页面的url
            console.log(string);
            console.log('11231');
             var string1 = string.split('=');
            console.log(string1);
            var string3 = string1[1];
            var string2 = string3.split('&');
            var access_token = string2[0];
            window.location.href="<?php echo U('Mobile/User/qq_login');?>"+"?access_token="+access_token;
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