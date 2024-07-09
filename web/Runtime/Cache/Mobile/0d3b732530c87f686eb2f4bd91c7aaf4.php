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




    
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/want_sell.css" />
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/cardcenter.css" />
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/Static/css/initialize.css" />
    <link href="/Application/Mobile/Static/css/mui.picker.css" rel="stylesheet" />
    <link href="/Application/Mobile/Static/css/mui.poppicker.css" rel="stylesheet" />
    <script src="/Application/Mobile/Static/js/mui.picker.js"></script>
    <script src="/Application/Mobile/Static/js/mui.poppicker.js"></script>

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
    <div class="mui-inner-wrap" >
        <header class="mui-bar mui-bar-nav">
            <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"  href="javascript:history.back(-1)"></a>
            <h1 class="mui-title">我要卖卡</h1>
            <a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
  <div class="mui-scroll" id="move-togger">
	<div class="session">
    <div class="sess sess1 openNav1" >
        <p class="sess-name">卡类：</p>
        <div class="sess-box cf">
            <div class="sess-text fl"><p id="cardtypename">电商卡回收</p></div>
            <div class="icon-img fr " id="cardtype_img"><img src="/Application/Mobile/Static/images/icon-img1.png" alt=""></div>
        </div>
        <div class="right">
            <img src="/Application/Mobile/Static/images/forright.png">
        </div>
    </div>
    <div class="sess sess2 openNav2"  id="getcardprice">
        <p class="sess-name">卡种：</p>
        <div class="sess-box cf">
            <div class="sess-text fl"><p id="cardname1">请选择卡种</p></div>
            <div class="icon-nameimg fr" id="cardtype_img2"><img id="cardnameimg" src="/Application/Mobile/Static/images/icon-name1.gif" alt=""></div>
           <input type="hidden" name="" id="cardtype">
        </div>
        <div class="right">
            <img  src="/Application/Mobile/Static/images/forright.png">
        </div>
    </div>

    <div class="sess sess3 openNav3" id="showPricePicker">
        <p class="sess-name">面值：</p>
        <div class="sess-box cf">
            <div class="sess-text fl"><p id="dateResult">请选择面值</p></div>
            <div class="icon-img fr"></div>
               <input type="hidden" name="" id="pricetype"> 
        </div>
        <div class="right">
            <img src="/Application/Mobile/Static/images/forright.png">
        </div>
    </div>

    <div class="refer">
        <div class="refer-title" id="tab">
            <ul class="refer-list">
                <li class="refer-item item-on type-item"  id="choose-batch">批量提交</li>
                <li class="refer-item type-item"  id="choose-single">单张提交</li>
            </ul>
              <div class="list-waring" id="item-display" ><p>卡密示例</p></div>
        </div>
     </div>
     </div>




          

              
                <div class="inp-group">
              
             
                    <div class="inp-row" id="choose_batch">
                        <textarea placeholder='每张卡密为一行，卡号与密码之间请用"空格"隔开!' id="cardlist"  onkeydown="cardnum(this,event)" onblur="cardnum(this,'blur')"></textarea>
                    </div>
                    <div id="choose_single" style="display: none">
                    <div class="inp-row" id="single_passwordcss" >
                        <label>请输入卡号</label>
                        <input type="text" name="" id="single_card">
                   
                    </div>
                    <div class="inp-row" >
                      
                        <label>请输入卡密</label>
                        <input type="text" name="" id="single_password">
                    </div>
                    </div>

                       <div class="inp-row" id="zhengli">
                         <div class="sel-box cf">
                            <span class="fl  protocol-sel">
                               
                            </span>
                           <p class="fl  protocol">
                                 <a class=" btn-sm btn-primary cardlist-neaten" id="cardlist-neaten" href="javascript:;" >整理卡密</a><span class="inline-block pl20">已经输入 <strong id="cardnum" class="text-red">0</strong> 张面值 <strong class="text-red"><strong id="cardmz">0</strong>元</strong> 的卡，每次最多可提交100张 </span>
                            </p>
                        </div>
                    </div>

					
                     <div class="inp-row">
                         <div class="sel-box cf">
                            <span class="fl  protocol-sel">
                               <!--  <img src="/Application/Mobile/Static/images/selicon.png" alt=""> -->
                            </span>
                           <p id="cardwarningmessage" class="fl  protocol" style="line-height: 20px;font-size: 12px;color: #3723da">
                                <!-- 已阅读并接受 <a href="<?php echo U('Mobile/Help/card?id=10');?>">「爱卡网卡券转让协议」</a> -->
                                只需填写卡密并确保卡密及面值正确（处理时间：09:00-19:30。5分钟左右处理完成）
                            </p>
                        </div>
                    </div>



                    <div class="inp-row urgent-item on">
                        <div class="sel-box cf ">
                            <span class="fl urgent-sel sel" style="display: none">
                                <img src="/Application/Mobile/Static/images/selicon.png" alt="">
                                <!--<input type="checkbox" name="urgent" id="urgent" value="1">-->
                            </span>

                            <p class="fl urgent" >
                                加急处理（9：00-18:00） <span class="sel" style="display: none">手续费3%</span>
                            </p>

                            <input type="hidden" name="express" id="express" value="0">
                        </div>
                    </div>
              


                       
                </div>
               <!--  <button class="btn" id="recoverycard">立即兑换</button> -->
                <div class="other">
                    <div class="panel onecard stepflow"><div class="caption"><h4>线上回收交易步骤</h4></div><div class="stepflow-item stepflow-netrade" style="font-size: 14px"><ul><li>1、注册帐号，登录帐户；</li><li>2、提交卡密，等待验卡；</li><li>3、验卡成功，资金到帐；</li><li></li><li>4、帐户提现，交易成功。</li></ul><div class="hint hint-danger" ><p>工作时间内提交（周一至周六早上9：00-19：30），</p><p>一般5分钟内处理完成，</p> <p>非工作时间内，处理时间将延期到下一个工作时间。</p><p>客服电话：<strong class="text-red">0591-86396886</strong></p></div></div></div>
                </div>
<!-- 
<div class="other">

    <div class="panel onecard">
        <div class="caption">
        <h4>二手卡回收常见问题</h4>
        </div>
        <div class="faq-group">
            <div class="faq-item">
            <h5 class="faq-tite"><strong>1、</strong>支持回收的二手卡有哪些？</h5>
            <div class="faq-cont">
            <p class="text-danger"><strong>爱卡网暂时只针对网站公布回收的二手卡进行回收处理，目前支持回收的卡有20种；</strong></p>
            <p>目前包括电商卡、游戏卡、话费卡3种。</p>
            <p>您可在二手卡回收提交页面查看，如果没有您想要提交的卡，您可以联系客服。</p><p>后期我们会会逐步的发布更多的卡类回收，详情请参考网站公示。</p></div></div>
            <div class="faq-item">
            <h5 class="faq-tite text-danger"><strong>2、</strong>游戏卡与话费卡必看问题！</h5><div class="faq-cont"><p>游戏卡为自动结算形式回收，用户提交订单后最快几分钟内即可收到回收款。</p><p class="text-danger"><strong>请提交前认真核对选择的面额，如实际面额与选择面额不符，则需要人工干预，不仅费时费力，而且会影响您的款额到帐时间！</strong></p></div></div>
            <div class="faq-item">
            <h5 class="faq-tite"><strong>3、</strong>哪些二手卡券不支持回收？</h5><div class="faq-cont"><p>凡是已使用的卡、偷盗卡、非正常渠道获得的卡以及网站上没有的卡种我们都不回收。</p></div></div>
            <div class="faq-item">
            <h5 class="faq-tite"><strong>4、</strong>回收后打款需要多少时间？</h5><div class="faq-cont"><p>工作时间内（周一至周日早上9：30-20：30）打款为提现之后即时到账；非工作时间内，处理时间将延期到下一个工作时间。</p></div></div>
            <div class="faq-item">
            <h5 class="faq-tite"><strong>5、</strong>二手卡的回收需要手续费么？</h5><div class="faq-cont"><p>您好，回收价格已经包含手续费，不会再收取任何形式的手续费（除了加急处理功能）。</p></div></div>
            <div class="faq-item">
            <h5 class="faq-tite"><strong>6、</strong>电子卡与实体卡有什么区别？</h5><div class="faq-cont"><p>实体卡是实物的，是一张卡片的形式，卡的背面有卡号和密码；</p><p>电子卡是虚拟的，是通过网上在线购买获取卡号和密码的；</p><p>实体卡和电子卡在我们这回收的时候都是一样的。</p></div></div>
            <div class="faq-item">
            <h5 class="faq-tite"><strong>7、</strong>关于爱卡网的其他问题?</h5><div class="faq-cont"><p>如若您有其他任何关于二手卡回收问题，您可以咨询在线客服QQ或者拨打爱卡网客服电话：0771-6730212。</p></div></div>
        </div>
    </div> </div> -->


                <div class="other" style="margin-bottom: 20px">
                <?php if($invoice == '1'): ?><img src="/Application/Mobile/Static/images/piaoicon.png" alt="">
                    如您的企业有票务需求，请点击<br>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=76891828&site=qq&menu=yes"><button  class="tel-me">联系我们</button></a><?php endif; ?>
                </div>
            </div>
        </div>
        <!-- off-canvas backdrop -->
        <div class="mui-off-canvas-backdrop"></div>
        <input type="hidden" name="type" id="type" value="1">
        <input type="hidden" name="custom" id="custom" value="0">
         <div class="footer cf" >
    <div class="agree fl">
        <p style="font-size: 12px">提交即表示您同意「<a href="<?php echo U('Mobile/Help/card?id=12');?>">回收说明</a>」</p>
        <p style="font-size: 12px">「<a href="<?php echo U('Mobile/Help/card?id=10');?>">爱卡网卡券转让协议</a>」</p>

    </div>
    <div class="subm-btn fr">
        <button id="recoverycard">确认提交卖卡</button>
    </div>
</div>
    </div>
   
</div>





<!-- 底部弹窗 -->

<div id="mySidenav1" class="sidenav">
    <div class="sidenav-box">
        <div class="side-head">
            <p class="side-title fl">请选择卡类：</p>
            <a href="javascript:void(0);" class="closebtn closebtn1 fr">×</a>
        </div>
        <div class="side">
        <?php if(is_array($typeinfo)): $i = 0; $__LIST__ = $typeinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="side-box sed_box" data-typeid="<?php echo ($vo['id']); ?>">
                <div class="side-img">
                    <img src="<?php echo ($vo["wapdropphoto_path"]); ?>" alt="">
                </div>
                <a href="#"><p><?php echo ($vo["name"]); ?></p></a>
               
                <div class="right-img right-img1 ">
              
              <?php if(($i) == "1"): ?><img src="/Application/Mobile/Static/images/download.png" alt=""><?php endif; ?>
                    
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div id="mySidenav2" class="sidenav">
    <div class="side-head">
        <p class="side-title fl">请选择卡种：</p>
        <a href="javascript:void(0);"  class="closebtn closebtn2 fr" >&times;</a>
    </div>
    <div class="side" id="ajaxcardinfo">
    	
    <?php if(is_array($cardinfo)): $i = 0; $__LIST__ = $cardinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="side-box name-box" data-typeid="<?php echo ($vo["id"]); ?>" data-password="<?php echo ($vo["openpassword"]); ?>" data-cardexample="<?php echo ($vo["cardexample"]); ?>" data-introduce="<?php echo ($vo["introduce"]); ?>">
            <div class="name-img">
                <img src="<?php echo ($vo["photo_path"]); ?>" alt="">
            </div>
            <p><?php echo ($vo["name"]); ?></p>
            <div class="right-img right-none">
             <img src="/Application/Mobile/Static/images/download.png" alt="">
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
    </div>
</div>
<div id="mySidenav3" class="sidenav">
    <div class="side-head">
        <p class="side-title fl">请选择类型：</p>
        <a href="javascript:void(0);"  class="closebtn closebtn3 fr" >&times;</a>
    </div>
    <div class="side">
    <div>
        <div class="side-box side-num">
            <p>电商回收卡<span>/ ¥4700.0(回收价)</span></p>
            <div class="right-img">
                <img src="/Application/Mobile/Static/images/download.png" alt="">
            </div>
        </div>
        <div class="side-box side-num">
            <p>电商回收卡<span>/ ¥4700.0(回收价)</span></p>
            <div class="right-img">
            </div>
        </div>
        <div class="side-box side-num">
            <p>电商回收卡<span>/ ¥4700.0(回收价)</span></p>
            <div class="right-img">
            </div>
        </div>
        <div class="side-box side-num">
            <p>电商回收卡<span>/ ¥4700.0(回收价)</span></p>
            <div class="right-img">
            </div>
        </div>
        <div class="side-box side-num">
            <p>电商回收卡<span>/ ¥4700.0(回收价)</span></p>
            <div class="right-img">
            </div>
        </div>
        </div>
        <div class="side-box side-num" onclick="document.getElementById('id01').style.display='block'">
            <p>自定义价格<span></span></p>
        </div>
    </div>
</div>
<div class="drop"></div>
<div id="id01" class="modal">
    <div class="modal-content animate">
        <div class="passw-box cf">
            <div class="passw-num"><p>请输入金额</p></div>
            <input type="text" class="fl" maxlength="6">
            <button>确定</button>
        </div>
    </div>
</div>
<div id="id02" class="modal">
    <form class="waring-box animate">
        <div class="light-box"><img src="/Application/Mobile/Static/images/light.png" alt=""></div>
        <div class="list-text">
            <h1 id="tishi">此卡种无需卡号，只需填写卡密，</h1><h1>每张一行用<span>“回车(Enter键)”</span>隔开</h1>
            <p id="cardexample">JDE160616J1K087109 4DE9-7A69-FCDF-3D70</p>
         
        </div>
        <a href="#" class="close-button" onclick="closeNav4()">×</a>
    </form>
</div>
<script type="text/javascript" src="/Application/Mobile/Static/js/jquery.js"></script>
<script type="text/javascript">

$(".openNav1").on('tap',function () {
	document.getElementById("mySidenav1").style.height = "250px";
	$(".drop").show();
});
$(".closebtn1").on('tap',function () {
	document.getElementById("mySidenav1").style.height = "0";
	$(".drop").hide()
});
$(".openNav2").on('tap',function () {
	document.getElementById("mySidenav2").style.height = "250px";
	$(".drop").show();
});
$(".closebtn2").on('tap',function () {
	document.getElementById("mySidenav2").style.height = "0";
	$(".drop").hide()
});
/*$(".openNav3").on('tap',function () {
	document.getElementById("mySidenav3").style.height = "250px";
	$(".drop").show();
});*/

$("#item-display").on('tap',function () {
	$("#id02").show()
});


$("#id02").on('tap',function () {
	$("#id02").hide()
});

$(".closebtn3").on('tap',function () {
	document.getElementById("mySidenav3").style.height = "0";
	$(".drop").hide()
});
$(".drop").on('tap',function () {
	document.getElementById("mySidenav1").style.height = "0";
	document.getElementById("mySidenav2").style.height = "0";
	document.getElementById("mySidenav3").style.height = "0";
	$(".drop").hide()
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var $tab_li = $('#tab ul li');
        $tab_li.click(function(){
            $(this).addClass('item-on').siblings().removeClass('item-on');
            var index = $tab_li.index(this);
            $('div.tab_box > div').eq(index).show().siblings().hide();
        });
    });

    // 获取模型
    var modal = document.getElementById('id01');
    // 鼠标点击模型外区域关闭登录框
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



<script type="text/javascript">
	  $('.sed_box').on('tap',function(){
            var url = "<?php echo U('Mobile/Card/ajaxCardInfo');?>";
            var typeid = $(this).attr('data-typeid');
            var imghtml =  '<img src="/Application/Mobile/Static/images/download.png" alt="">';
            $(".right-img").empty();
            $("#cardtypename").text($(this).find('p').text());
            $("#cardwarningmessage").text('只需填写卡密并确保卡密及面值正确（处理时间：09:00-21:00。30分钟左右处理完成）');
            var typeimg = $(this).find('img')[0].src;
   			$("#cardtype_img").find('img')[0].src = typeimg; 
            $(this).children().eq(2).append(imghtml);
            document.getElementById("mySidenav1").style.height = "0";
            $(".drop").hide();       
            ajaxMore(url,typeid);    
           $('#dateResult').text('');
            $('#pricetype').val("");  
            $("#cardtype").val("");             
        })
        function ajaxMore(url,typeid){
            $.ajax({
                type:'post',
                url:url,
                data:{"typeid":typeid},
                success:function(data){
                	console.log(data);
                	$("#ajaxcardinfo").empty();
                    $('#ajaxcardinfo').append(data);
                   // $("#cardname1").text($('#ajaxcardinfo').children().eq(0).find('p').text());

                   
                     $("#cardname1").text('请选择卡种');
                     var typeimg = $('#ajaxcardinfo').children().eq(0).find('img')[0].src;
   					$("#cardtype_img2").find('img')[0].src = typeimg; 
                }

            })
        }
</script>







    <script>

mui('body').on('tap', 'a', function () { document.location.href = this.href; });
 

      /*  var $idArray=eval(<?php echo ($cardinfo); ?>);


        var len = $idArray.length;

        var $ddd=new Array();
        for (var i = 0; i < len; i++){
            $aa = $idArray[i]['id'] + '-' +$idArray[i]['openpassword'];
            $ddd[i] = {
                value: $aa,
                text: $idArray[i]['name']
            };
        }*/

        (function($, doc) {
            $.init({
                swipeBack: true //启用右滑关闭功能
            });
            $.ready(function() {              
                var datePicker = new  $.PopPicker();              
                var showUserPickerButton = doc.getElementById('getcardprice');
                var dateResult = doc.getElementById('dateResult');
                var loanamount = doc.getElementById('loanamount');
                var custom = doc.getElementById('custom');
                var cardtype = doc.getElementById('cardtype');
                var single_password = doc.getElementById('single_passwordcss');
                var name_div = document.getElementsByClassName("name-box");
                mui("#ajaxcardinfo").on('tap','.name-box', function(event) {
   					var add_div = this; 	  					
                	mui(".right-img").each(function () {
                		this.classList.add("right-none");
                		});
                	 add_div.querySelector('.right-img').classList.remove("right-none");
                	document.getElementById("mySidenav2").style.height = "0";
					document.getElementsByClassName("drop")[0].style.display='none';			
					document.getElementById("cardname1").innerHTML = add_div.querySelector('p').innerHTML;	 
					var pnei = add_div.getAttribute('data-typeid');
					document.getElementById("cardnameimg").src = add_div.querySelector('img').src;	
					document.getElementById("cardtype").value =	pnei;							
				    var single_password = doc.getElementById('single_passwordcss');
					$ssarr = add_div.getAttribute('data-password');
					document.getElementById("cardwarningmessage").innerHTML = add_div.getAttribute('data-introduce');
					document.getElementById("cardexample").innerHTML = add_div.getAttribute('data-cardexample');
						if($ssarr == 0){
                            single_password.setAttribute('style', 'display: none'); 
                            document.getElementById("tishi").innerHTML = "此卡种无需卡号，只需填写卡密";

                        }else{
                             single_password.setAttribute('style', 'display: flex');  
                             document.getElementById("tishi").innerHTML = "卡号与卡密之间用空格隔开";
                        }


	
                      	$id = pnei;
                        if($id == ''){
                      		mui.alert('请先选择卡种');
                      		return false;
                        }
                        cardtype.value = $id;
                        dateResult.innerHTML = '';
                        pricetype.value = '';
                        $.ajax({
                            type: 'post',
                            data: {'id': $id},
                            url: "<?php echo U('Mobile/Card/cardprices');?>",
                            success: function (data) {
                                if (data.status == 1) {
                                    $loanterm = eval(data.data);
                                    var lens = $loanterm.length;
                                    var $loanarray=new Array();
                                    for (var i = 0; i < lens; i++){
                                        $loanarray[i] = {
                                            value: $loanterm[i]['id'],
                                            text: '¥'+$loanterm[i]['price']+'/¥'+$loanterm[i]['sale_price']+'(回收价)'
                                        };
                                    }
                                    $loanarray[lens] = {
                                        value: "custom",
                                        text: '自定义面额'+' '+data['info']+'折'
                                    };
                                    datePicker.setData($loanarray);
                                    var showDatePickerButton = doc.getElementById('showPricePicker');
                                    var pricetype = doc.getElementById('pricetype');
                                    var cardmz = doc.getElementById('cardmz');
                                    showDatePickerButton.addEventListener('tap', function(event) {
                                        datePicker.show(function(items) {
                                            console.log(JSON.stringify(items[0]));
                                            console.log(items[0]['text']);
                                            if(items[0]['value'] == "custom"){
                                                 var btnArray = ['取消', '确定'];
                                             mui.prompt('请输入卡片面额：', '', 'AIKAVIP', btnArray, function(e) {
                                                    if (e.index == 1) {
                                                         dateResult.innerHTML = e.value;
                                                        custom.value = e.value;
                                                          pricetype.value = 'zdy';
                                                           cardmz.innerHTML = e.value;
                                                       // info.innerText = '谢谢你的评语：' + e.value;
                                                    } else {
                                                        //info.innerText = '你点了取消按钮';
                                                        console.log(e.index);
                                                    }
                                                })
                                            }else{

                                                 str  = items[0]['text'];
                                                 arr=str.split("¥"); 
                                                         dateResult.value = "¥"+arr[1]+"¥"+arr[2];
                                                dateResult.innerHTML = items[0]['text'];
                                                $pid= items[0]['value'];
                                                cardmz.innerHTML =arr[1].split("/")[0];
                                                pricetype.value = $pid;
                                            }
                                        });
                                    }, false);
     
                                } else {
                                 //   console.log(data);

                                }


                            }
                        });

                        // showUserPickerButton.val = JSON.stringify(items[0]);
                        /* $url ="<?php echo U('Index/loanSon');?>";
                         $url+="/tid/";
                         $url+=$id;*/
                        //backmoney();
                        //  window.location.href=$url;
                        //返回 false 可以阻止选择框的关闭
                        //return false;
                  
                });

//-------------------------------------------------------------
            /*    var datePicker = new  $.PopPicker();
                datePicker.setData($loanarray);
                var showDatePickerButton = doc.getElementById('showDatePicker');
                var dateResult = doc.getElementById('dateResult');
                showDatePickerButton.addEventListener('tap', function(event) {
                    datePicker.show(function(items) {
                        dateResult.innerText = items[0]['value'];


                    });
                }, false);*/



            });
        })(mui, document);
        mui('#offCanvasSideScroll').scroll();
        mui('#offCanvasContentScroll').scroll();

        $(".type-item").on('tap',function () {
            $(".type-item").removeClass('item-on');
            $(this).addClass('item-on');
           // $(".way-item .sel").remove();
            //$(this).append(str);
            var _this = $(this);
            if (_this.attr('id') == "choose-batch" ) {

                $('#choose_single').hide();
                $('#zhengli').show();
                $('#choose_batch').show();
                $('#type').val(1);
                $('#item-display').show();
              //  item-display
              $("#single_card").val(""); 
              $("#single_password").val(""); 
              
            } else if (_this.attr('id') == "choose-single" ) {
            	
            	 $("#cardlist").val("");  
                $('#choose_batch').hide();
                $('#zhengli').hide();
                $('#choose_single').show();
                $('#type').val(2);
                 $('#item-display').hide();
            }
        });



        $("#recoverycard").on('tap',function () {
            $priceid = $('#pricetype').val();
            $cardid = $('#cardtype').val();
            $submissionid = $("#type").val();
            $express = $('#express').val();
            $custom = $('#custom').val();
            if($cardid == ''){
                mui.alert('请选择卡片');
                return false;
            }    
            if( $priceid == ''){
                mui.alert('请选择面值');
                return false;
            }  
            if($submissionid == 2){
                $cardkeynum = $("#single_card").val();
                $cardkeypwd = $("#single_password").val();
                if($cardkeynum && $cardkeypwd){
                     $cardkey = $cardkeynum+" "+$cardkeypwd;
                }else if($cardkeypwd){
                    $cardkey = $cardkeypwd;
                }              

            }else if($submissionid == 1){
                $cardkey = $("#cardlist").val();

            }

            console.log($submissionid);
            $.ajax({
                type: 'post',
                data: {'submission': $submissionid,'cardkey':$cardkey,'cardid':$cardid,'priceid':$priceid,'custom':$custom,'express':$express},
                url: "<?php echo U('Mobile/Card/recoverycard');?>",
                success: function (data) {
                    if(data.status==1){
                       // alert('提交成功，请勿重复提交');
                        console.log(data);
                        mui.toast('提交成功，请勿重复提交');
                       window.location.href = "<?php echo U('Mobile/User/index');?>";

                    }else if(data.status==3){
                        mui.toast(data.info);
                        window.location.href = "<?php echo U('Mobile/User/login');?>";
                        console.log(data.info);
                    }else{
                        mui.toast(data.info);
                    }


                }
            });


        });

        $(".urgent-item").on('tap',function () {
            $(".urgent-item .sel").toggle();
            if($(this).hasClass('on')){
                $(this).removeClass("on");

                $('#express').val('0');
            }else {

                $(this).addClass("on");
                $('#express').val('1');
            }
        })


$('#qqwap').on('tap',function () {
        window.location.href = "http://wpa.qq.com/msgrd?v=3&uin=76891828&site=qq&menu=yes";
    });





//整理卡片功能
    function uptijiao(cardList) {
    var strList_Tmp = '';
    var array = new Array(cardList.length);
    for (var i = 0; i < cardList.length; i++) {
        if (cardList[i]) {
            var cardInfo = (cardList[i]
                .replace(/卡号[：|:]/g, '')
                .replace(/密码[：|:]/g, '')
                .replace(/卡密[：|:]/g, '')
                .replace(/[\u4e00-\u9fa5]+/g, '')
                .replace(/\s+/g, ' ')
                .replace(/(^\s*)|(\s*$)|;|；/g, "")
                .replace(/,/g, '*')
                .replace(/[ ]/g, '*')
                .replace(/，/g, '*')
                .replace(/\t/g, '*')
                .replace(/[|]/g, '*'))
                .split('*');
            if (cardInfo[0] != "") {
                array[i] = cardInfo[0];
            }
            if (cardInfo[1] == undefined) {
                strList_Tmp += cardInfo[0] + "\n";
            } else {
                strList_Tmp += cardInfo[0] + " " + cardInfo[1] + "\n";
            }
        }
    }
    return strList_Tmp.replace(/(^\s*)|(\s*$)/g, "");
};


$("#cardlist-neaten").on('tap',function () {
    var neaten = $("#cardlist").val().split('\n');
    $("#cardlist").val(uptijiao(neaten));
});

function cardnum(obj, e) {
    var strs = $(obj).val();
    if (e == 'blur') {
        strs = strs.replace("\r\n", "\n");
        strs = strs.split("\n");
        $("#cardnum").text(strs.length);
    } else {
        var keycode = e.keyCode;
        strs = strs.replace("\r\n", "\n");
        if (keycode == 13 || keycode == 86) {
            strs = strs.split("\n");
            $("#cardnum").text(strs.length);
        }
    }
};

function pselect(price) {
        $('#cardmz').text(price);
}
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