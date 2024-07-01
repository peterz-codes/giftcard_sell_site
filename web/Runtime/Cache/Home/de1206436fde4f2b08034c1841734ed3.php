<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="keywords" content="<?php echo C('KEYWORDS');?>">
    <meta name="description" content="<?php echo C('DESCRIPTION');?>">
    <!--<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base.css"/>-->
    
	<meta name="keywords" content="京东E卡 京东钢蹦 中国石化加油充值卡 中国石油加油充值卡 移动电信联通话费充值卡亚马逊礼品卡回收
">
	<meta name="description" content="爱卡网是一家提供电商超市、加油、旅游等礼品充值购物卡回收，收购，买卖的交易平台，我们努力做好礼品购物卡买卖的交易服务。">
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base1.css"/>
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/data.css"/>

</head>
<body>
    
		<div class="data">
			<div class="data-nav cf">
				<div class="data-nav-font <?php if($type == 1): ?>data-nav-border<?php endif; ?> fl" data-src = "<?php echo U('DataInfo/index');?>" >基本资料</div>
				<div class="data-nav-font <?php if($type == 2): ?>data-nav-border<?php endif; ?> fl" data-src = "<?php echo U('DataInfo/nameAttest');?>">实名认证</div>
				<div class="data-nav-font <?php if($type == 3): ?>data-nav-border<?php endif; ?> fl" data-src = "<?php echo U('DataInfo/password');?>">密码管理</div>
				<div class="data-nav-font <?php if($type == 4): ?>data-nav-border<?php endif; ?> fl" data-src = "<?php echo U('DataInfo/phone');?>">手机设置</div>
				<div class="data-nav-font <?php if($type == 5): ?>data-nav-border<?php endif; ?> fl" data-src = "<?php echo U('DataInfo/email');?>">邮箱设置</div>
				<div class="data-nav-font <?php if($type == 6): ?>data-nav-border<?php endif; ?> fl" data-src = "<?php echo U('DataInfo/withdraw',array('from_action'=>$from_action));?>">提现账号</div>
			</div>

			<div class="data-content data-content-iframe">
				<?php if($type == 1): ?><iframe src="<?php echo U('DataInfo/index');?>" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
					<?php elseif($type == 2): ?>
					<iframe src="<?php echo U('DataInfo/nameAttest');?>" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
					<?php elseif($type == 3): ?>
					<iframe src="<?php echo U('DataInfo/password');?>" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
					<?php elseif($type == 4): ?>
					<iframe src="<?php echo U('DataInfo/phone');?>" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
					<?php elseif($type == 5): ?>
					<iframe src="<?php echo U('DataInfo/email');?>" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
					<?php elseif($type == 6): ?>
					<iframe src="<?php echo U('DataInfo/withdraw',array('bank_type'=>$bank_type,'from_action'=>$from_action));?>" width="100%" height="100%" frameborder="0" scrolling="no"></iframe><?php endif; ?>
			</div>
		</div>


    <script src="/Application/Home/Static/js/jquery.js"></script>
    <script src="/Public//layer/layer.js"></script>

	<script src="/Application/Home/Static/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/Application/Home/Static/js/data.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		window.showModel=function(type){
			return window.parent.showModel(type);
		}

		$(document).ready(function(){
			parent.GetIframeStatus();
		})
	</script>
	<script type="text/javascript">
		var timeIframe;

		$(document).ready(function() {
			timeIframe = setTimeout(GetIframeStatus, 10);
		});

		function GetIframeStatus() {
			var iframe = $(".data-content-iframe iframe")[0];
			var iframeWindow = iframe.contentWindow;
			//内容是否加载完
			if (iframeWindow.document.readyState == "complete") {
				var iframeWidth, iframeHeight;
				//获取Iframe的内容实际宽度
				iframeWidth = iframeWindow.document.body.scrollWidth;
				//获取Iframe的内容实际高度
				iframeHeight = iframeWindow.document.body.scrollHeight


				//设置Iframe的宽度
				// iframe.width = iframeWidth;
				//设置Iframe的高度
				iframe.height = iframeHeight;

				parent.GetIframeStatus&&parent.GetIframeStatus();
			} else {
				timeIframe = setTimeout(GetIframeStatus, 10);
			}
		}
	</script>

</body>
</html>