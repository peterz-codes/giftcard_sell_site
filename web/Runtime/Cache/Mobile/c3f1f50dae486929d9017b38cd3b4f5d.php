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




    
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/sell_record.css" />


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
            <a class="mui-action-back mui-icon mui-icon-arrowleft mui-pull-left"></a>
            <h1 class="mui-title">卖卡记录</h1>
            <a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">

            <div class="mui-scrollb" >
                <?php if(is_array($ordersninfo)): $key = 0; $__LIST__ = $ordersninfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><div class="order-info">
                   <div class="inbox">
                       <p>单号：<?php echo ($vo['order_sn']); ?></p>
                       <p>时间：<?php echo (date('Y-m-d',$vo['add_time'])); ?></p>
                   </div>
                </div>
                <div class="card-list">
                    <?php if(is_array($vo["data"])): $k = 0; $__LIST__ = $vo["data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($k % 2 );++$k;?><div class="card-info">
                        <div class="nth1">
                            <p><?php echo ($f['name']); ?></p>
                            <p>卡号：<?php echo ($f["cardkey"]); ?></p>
                            <p>密码：<?php echo ($f["password"]); ?></p>
                        </div>
                        <div class="nth2">
                            ¥<?php echo ($f["saleprice"]); ?>
                        </div>
                        <div class="nth3">
                            <?php if($f["flag"] == 1): ?>未审核<?php elseif($f["static"] == 1): ?>交易成功 <?php else: ?>此卡无效<?php endif; ?>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <div class="info">

                    <?php if($vo['data'][0]['flag'] == 2): ?><p>此次交易共<?php echo ($vo["count"]); ?>张卡，交易成功： <span><?php echo ($vo["sucesscount"]); ?></span> 张，失败<?php echo ($vo["falsecount"]); ?> 张，</p>
                        <p>您共获得：<span>¥<?php echo ($vo["moneycount"]); ?></span>元</p>
                        <?php else: ?>
                        <p>此次交易共<?php echo ($vo["count"]); ?>张卡，交易等待审核，交易成功后款项会自动打入您的账户余额中，你可以在个人中心查看 。</p><?php endif; ?>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
        <!-- off-canvas backdrop -->
        <div class="mui-off-canvas-backdrop"></div>
    </div>
</div>
<script src="/Application/Mobile/Static/js/mui.min.js"></script>
<script>
    mui.init();
    //主界面和侧滑菜单界面均支持区域滚动；
    mui('#offCanvasSideScroll').scroll();
    mui('#offCanvasContentScroll').scroll();


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