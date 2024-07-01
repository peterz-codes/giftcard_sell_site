<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
	<title>百分百收卡网_礼品卡兑换_一家专注二手礼品卡回收的网站 - www.ohbbs.cn 欧皇源码论坛 </title>

    <meta name="keywords" content="<?php echo C('KEYWORDS');?>">
    <meta name="description" content="<?php echo C('DESCRIPTION');?>">
    <!--<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base.css"/>-->
    
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/user.css"/>
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base1.css"/>
	<style>
		.floor-font{margin-left:0px;}
		.rank {
			width: 155px;
			height: 14px;
			border-radius: 7px;
			background: #dcdcdc;

			margin-top: 4px;
		}
		.rank .rank-in {
			background: #27BAFF;
			width: 70%;
			z-index: 999;
			height: 14px;
			border-radius: 7px;
		}
	</style>


</head>
<body>
    
		<div class="index">
			<div class="">
				<div class="announcement cf">
					<img class="announcement-img fl" src="/Application/Home/Static/images/gongg@2x.png" >
					<div class="announcement-content fl">
						<span class="announcement-date"><?php echo ($annoince['add_time']); ?>  |  </span>
						<span class="announcement-font"><?php echo (getsubstr($annoince['name'],0,20)); ?></span>
						<span class="announcement-text">：<?php echo (getsubstr($annoince['content'],0,50)); ?></span>
					</div>
					<a class="announcement-right announcement-content fr" href="<?php echo U('Home/Help/index',array('id'=>11));?>" target="_parent">查看更多&gt;&gt;</a>
				</div>
				<div class="user-info">
					<div class="user-info-top">
						<div class="user-info-top-left">
							<img class="user-info-avatar fl" src="/Application/Home/Static/images/default@2x.png" >
							<div class="user-info-text fl">
								<div class="user-info-font">亲爱的</div>
								<div class="user-info-name"><?php echo ($user_info['username']); ?></div>
								<div class="user-info-welcome">欢迎回到百分百收卡网账号中心　|　
									<span class="loginout">
										<!--<a href="<?php echo U('Home/Public/logout');?>" class="target_parent" target="_parent">-->
											退出
										<!--</a>-->
									</span>
								</div>
								<div class="user-info-welcome">
									<span class="fl">安全等级：</span>
									<div class="fl rank">
										<div class="rank-in"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="user-info-top-center">
							<img class="user-info-avatar fl" src="/Application/Home/Static/images/tixian@2x.png" >
							<div class="user-info-money fl">
								<div class="user-info-money-text">账户余额(元)：</div>
								<div class="user-info-money-num "><?php echo ((isset($user_info['balance']) && ($user_info['balance'] !== ""))?($user_info['balance']):"0"); ?></div>
							</div>
						</div>
						<div class="user-info-top-right">
							<div class="user-info-apply cf">
								<a class="user-apply-btn fl" href="<?php echo U('User/meApply');?>">提现</a>
								<div class="user-apply-font fl cf">
									<img class="fl" src="/Application/Home/Static/images/tix@2x.png" >
									<a href="<?php echo U('User/record');?>"><div class="user-apply-text fl">提现记录</div></a>
								</div>
							</div>
							<div class="user-apply-money">提现处理中的金额：￥<span><?php echo ((isset($user_info['withdrawal']) && ($user_info['withdrawal'] !== ""))?($user_info['withdrawal']):"0"); ?></span></div>
						</div>
					</div>
					<div class="user-info-under cf">
						<div class="floor fl">
							<?php if($user_info['is_permission'] == 1): ?><div class="floor-bg">
								<img class="floor-bg-img" src="/Application/Home/Static/images/shimrz_bg@2x.png" >
								<span class="floor-bg-font">实名认证后才可提现</span>
							</div>
							<div class="floor-font">已实名认证</div>
								<?php else: ?>
								<div class="floor-bg-no">
									<img class="floor-bg-img-no" src="/Application/Home/Static/images/wsmrz.png" >
									<span class="floor-bg-font-no">实名认证后才可提现</span>
								</div>
								<a href="<?php echo U('User/data',array('type'=>2));?>" target="_self"><div class="floor-font">实名认证</div></a><?php endif; ?>
						</div>
						<div class="floor fl">
							<?php if($user_info['phone'] == ''): ?><div class="floor-bg-no">
								<img class="floor-bg-img-no" src="/Application/Home/Static/images/wsjrz.png" >

								<span class="floor-bg-font-no" >请立即绑定手机</span>
							</div>
								<a href="<?php echo U('User/data',array('type'=>4));?>" target="_self"><div class="floor-font">绑定手机</div></a>
								<?php else: ?>
								<div class="floor-bg-no">
									<img class="floor-bg-img" src="/Application/Home/Static/images/genghsj_bg@2x.png" >
									<span class="floor-bg-font"><?php echo ($user_info['phone']); ?></span>
								</div>
								<a href="<?php echo U('User/data',array('type'=>4));?>" target="_self"><div class="floor-font setphone">更换手机</div></a><?php endif; ?>
						</div>
						<div class="floor fl">
							<?php if($user_info['email'] == ''): ?><div class="floor-bg-no">
								<img class="floor-bg-img-no" src="/Application/Home/Static/images/wyxrz.png" >

								<span class="floor-bg-font-no">请立即绑定邮箱</span>
							</div>
								<a href="<?php echo U('User/data',array('type'=>5));?>" target="_self"><div class="floor-font" >绑定邮箱</div></a>
								<?php else: ?>
								<div class="floor-bg">
									<img class="floor-bg-img" src="/Application/Home/Static/images/genghyx_bg@2x.png" >
									<span class="floor-bg-font"><?php echo ($user_info['email']); ?></span>
								</div>
								<a href="<?php echo U('User/data',array('type'=>5));?>" target="_self"><div class="floor-font">更换邮箱</div></a><?php endif; ?>
						</div>
						<div class="floor fl">
							<?php if($user_info['password'] == ''): ?><div class="floor-bg-no">
								<img class="floor-bg-img-no" src="/Application/Home/Static/images/wqmm.png" >

								<span class="floor-bg-font-no">使用强密码增加安全性</span>
							</div>
								<?php else: ?>
								<div class="floor-bg">
									<img class="floor-bg-img" src="/Application/Home/Static/images/genghyx@2x.png" >
								<span class="floor-bg-font">使用强密码增加安全性</span>
							</div><?php endif; ?>
							<a href="<?php echo U('User/data',array('type'=>3));?>" target="_self"><div class="floor-font">更换密码</div></a>
						</div>
					</div>
				</div>
				<div class="user-footer">
					<div class="user-footer-title">您最近提交回收的卡</div>
					<div class="user-footer-card cf">
						<?php if(is_array($cardList)): $i = 0; $__LIST__ = $cardList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="card-floor fl">
							<img src="<?php echo ($vo['card_logo']); ?>" >
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>

    <script src="/Application/Home/Static/js/jquery.js"></script>
    <script src="/Public//layer/layer.js"></script>

	<script class="resources library" src="/Application/Home/Static/js/jquery.js" type="text/javascript"></script>
	<script>
        $(".loginout").click(function(){
            layer.confirm("您确定要退出登录吗?", {btn: ['确定', '取消'], title: "提示"}, function (){
                window.parent.location.href="<?php echo U('Home/Public/logout');?>";
            });
        });
        $('.rank-in').css("width","<?php echo ($perfectDegree); ?>%");

		$(".setphone").click(function(){
		    console.log(parent);
    		parent.goPhone();
    		//iframe.
		});
		console.log(parent)
		parent.GetIframeStatus();

	</script>

</body>
</html>