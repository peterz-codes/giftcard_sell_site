<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
	<title>百分百收卡网_礼品卡兑换_一家专注二手礼品卡回收的网站 - www.ohbbs.cn 欧皇源码论坛 </title>

    <meta name="keywords" content="<?php echo C('KEYWORDS');?>">
    <meta name="description" content="<?php echo C('DESCRIPTION');?>">
    <!--<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base.css"/>-->
    
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/SellCard.css"/>
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="/Application/Home/Static/css/base1.css"/>
<style>
	#ul_pics li{
	float:left;
	}
	#ul_pics li img{
		width:130px;
		height:130px;
	}
	.delete_imgBox {
		width: 130px;
		height: 30px;
		position: absolute;
		background: rgba(0,0,0,0.5);
		font-size: 14px;
		color: #fff !important;
		z-index: 100;
		text-align: center;
		line-height: 30px;
		margin-top: 100px;
	}
</style>

</head>
<body>
    
		<div class="sellCard">
			<div class="sellCard-title">
				<span class="sellCard-title-font">我要卖卡</span>
				<span class="sellCard-title-text">（您好，<?php echo ($user_info['username']); ?>您是百分百收卡网的客户）</span>
			</div>
			<div class="sellCard-select cf">
				<span class="sellCard-select-title fl">选择卡类：</span>
				<?php if(is_array($cardtype_info)): $i = 0; $__LIST__ = $cardtype_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/User/sellCard?typeid='.$vo['id']);?>" style="color: #fff">
					<div class="sellCard-select-bg fl">
						<img class="sellCard-select-bg-pic" src="<?php echo ($vo['photo_path']); ?>">
						<div class="sellCard-select-bg-font"><?php echo ($vo["name"]); ?></div>
						<!--<img class="sellCard-select-bg-select showImg" src="/Application/Home/Static/images/xuanz.png" >-->
						<!--<?php if(($key) == "0"): ?>-->
							<!--<img class="sellCard-select-bg-select showImg" src="/Application/Home/Static/images/xuanz.png" style="display: block">-->
						<!--<?php endif; ?>-->
						<!--<?php if(($vo['id']) == $typeid): ?>-->
							<!--<img class="sellCard-select-bg-select showImg" src="/Application/Home/Static/images/xuanz.png" style="display: block">-->
						<!--<?php endif; ?>-->

						<?php if(($vo['id'] == $typeid) || ($typeid == '')): ?><img class="sellCard-select-bg-select showImg type_active" data-id="<?php echo ($vo['id']); ?>" src="/Application/Home/Static/images/xuanz.png" style="display: block" ><?php endif; ?>

					</div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>

			<div class="sellCard-kind cf">
				<span class="sellCard-kind-title fl">选择卡种：</span>
				<div class="sellCard-right cf" style="padding-left: 102px;">
					<?php if(is_array($cardinfo)): $i = 0; $__LIST__ = $cardinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($key) == "0"): ?><div class="sellCard-kind-bg fl kind-item sellCard-kind-bg-color" data-id="<?php echo ($vo['id']); ?>">
								<img class="sellCard-kind-bg-pic" src="<?php echo ($vo["photo_path"]); ?>">
								<span class="sellCard-kind-bg-font"><?php echo ($vo["name"]); ?></span>
								<img class="sellCard-kind-bg-img showImg" src="/Application/Home/Static/images/car_xz.png">
								<span class="sellCard-kind-bg-discount showImg sellCard-kind-bg-font"><?php echo ($vo['sale_proportion']); ?>折</span>
							</div>
							<?php else: ?>
							<div class="sellCard-kind-bg fl kind-item" data-id="<?php echo ($vo['id']); ?>">
								<img class="sellCard-kind-bg-pic" src="<?php echo ($vo["photo_path"]); ?>">
								<span class="sellCard-kind-bg-font"><?php echo ($vo["name"]); ?></span>
								<!-- <img class="sellCard-kind-bg-img showImg" src="../../img/car_xz.png"> -->
								<span class="sellCard-kind-bg-discount showImg"><?php echo ($vo['sale_proportion']); ?>折</span>
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		<div class="ajax_more">
			<?php if(($cardinfo[0]['offline'] == 0) && ($cardinfo[0]['is_entitycard'] == 0)): ?><div class="sellCard-faceValue cf">
					<div class="sellCard-faceValue-left fl" style="margin-right: 0">
						<div class="sellCard-faceValue-left-font">单张面值：</div>
						<div class="sellCard-faceValue-left-text">不得选错</div>
					</div>
					<div class="sellCard-faceValue-right  cf" style="padding-left: 167px">
						<?php if(is_array($result_list)): $i = 0; $__LIST__ = $result_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($cardpriceid == $vo['id']): ?><div class="sellCard-faceValue-right-money fl money-item on" val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);">
									<?php else: ?>
									<div class="sellCard-faceValue-right-money fl money-item " val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);"><?php endif; ?>
							<!----判断是否是视频-->
							<?php if($typeid == 118): ?><div class="money-num " ><?php echo ($vo["price_name"]); ?></div>
								<div class="money-discount">
									<span>回收价</span><span>.</span><span class="money-discount-color">￥<?php echo ($vo["sale_price"]); ?></span>
								</div>
								<?php else: ?>
								<div class="money-num " ><?php echo ($vo["price"]); ?></div>
								<div class="money-discount">
									<span>￥<?php echo ($vo["sale_price"]); ?></span><span>.</span><span class="money-discount-color"><?php echo ($vo['card_proportion']); ?>折</span>
								</div><?php endif; ?>
							<!---判断是否是视频结束--->
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php if($typeid != 118): ?><div class="sellCard-faceValue-right-money money-item fl zdy">
						<div class="money-num">自定义</div>
						<div class="money-discount">
							<span id="zdy">回收折扣</span><span>.</span><span class="money-discount-color"><?php echo ($zdy_proportion); ?>折</span>
						</div>
					</div><?php endif; ?>

				</div>
		</div>
			<div class="column cf sellCard-submit">
				<div class="name sellCard-submit-left fl">提交方式</div>
				<div class="card-way box-width cf fl">
					<div class="way-item item fl on" id="choose-batch">批量提交<img class="sel" src="/Application/Home/Static/images/sel.png" alt=""></div>
					<div class="way-item item fl" id="choose-single">单张提交</div>
				</div>

			</div>
			<div class="column cf sellCard-submit">
				<div style="padding-left: 100px;color: #D35400" id="introduce"><?php echo ($introduce); ?></div>
			</div>
			<div id="recycle-sumbit"   class="column cf ">
				<div class="column cf sellCard-submit sellCard-submit-left">
					<div class="fl name">卡号/密码</div>
					<div class="card-num cf fl" id="choose_batch" style="position: relative;">
						<textarea class="form-controls" id="cardlist" placeholder="卡号和卡密之间用“空格键”隔开，每张卡占用一行用“回车（Enter键）”隔开" onkeydown="cardnum(this,event)" onblur="cardnum(this,'blur')"></textarea>
						<div class="textarea-tips">
							<div class="mask-black"></div>
							<ul class="textarea-tips-list" id="card-tips">
								<li id="c_0" class="error_war"></li>
								<li id="c_1" class="error_war"></li>
								<li id="c_2" class="error_war"></li>
								<li id="c_3" class="error_war"></li>
								<li id="c_4" class="error_war"></li>
								<li id="c_5" class="error_war"></li>
								<li id="c_6" class="error_war"></li>
								<li id="c_7" class="error_war"></li>
								<li class="textarea-attention">
									<i class="iconfont iconfont-tips"></i>
									<?php if($onlypass == 1): ?><p class="text-red nocode" style="display: block;">

											<?php else: ?>
										<p class="text-red nocode" style="display: none;"><?php endif; ?>
									卡号与卡密之间请用<strong class="text-orange">“空格”</strong>隔开，<br>每张卡占用一行用 <strong class="text-orange">“回车(Enter键)”</strong> 隔开，例：</p>
									<?php if($onlypass == 0): ?><p class="text-red hide onlypass" style="display: block;">
											<?php else: ?>
										<p class="text-red hide onlypass" style="display: none;"><?php endif; ?>
									卡券面值不能有误，请核对后提交，<br>每张一行用<strong class="text-orange">“回车(Enter键)”</strong>隔开！</p>
									<p class="h5 text-gray" id="cardlizi"><?php echo ($sale_proportion['cardexample']); ?></p>
								</li>
							</ul>
						</div>
					</div>
					<div class="card-num cf fl" id="choose_single" style="display: none;background: none">

						<?php if($onlypass == 1): ?><div style="width: 40%;margin-right: 30px" class="fl">
								<input class="form-control" id="single_card" name="cardpsw[]" type="text" placeholder="请输入卡号" reg="^[A-Za-z0-9_-]{4,30}$">
							</div>
							<div style="width: 40%" class="fl single_password">
								<?php else: ?>
								<div style="width: 40%;margin-right: 30px" class="fl">
									<input class="form-control" id="single_card" name="cardpsw[]" type="text" placeholder="请输入卡密" reg="^[A-Za-z0-9_-]{4,30}$">
								</div>
								<div style="width: 40%;display: none; " class="fl single_password" ><?php endif; ?>
						<input class="form-control" id="single_password" name="cardpsw[]" type="text" placeholder="请输入卡密" reg="^[A-Za-z0-9_-]{4,30}$" >
					</div>
				</div>
			</div>
			<div class="column cf fl" id="zhengli">
				<div class="help-block" style="margin-left: 160px">
					<a class="btn btn-sm btn-primary cardlist-neaten" id="cardlist-neaten" href="javascript:;" style="display: inline-block;    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;user-select: none;
    color: #018ebb;
    border: 2px solid transparent;
    background-color: #e8f0f3;
    border-radius: 3px;
    -webkit-transition: .3s;
    transition: .3s;height: 30px;
    line-height: 30px;
    padding: 0 20px;
    font-size: 13px;    color: #fff;
    border-color: #ff6466;
    background-color: #ff6466;margin-right: 15px">整理卡号/密码</a><span class="inline-block pl20">已经输入 <strong id="cardnum" class="text-red">0</strong> 张面值 <strong class="text-red"><strong id="cardmz">0</strong>元</strong> 的卡，每次最多可提交100张 </span></div>
			</div>
			<div class="column cf fl" style=" margin-left: 63px;margin-top:36px">
				<div class="fl name">加急处理</div>
				<div class="card-urgent box-width cf fl">
					<div class="urgent-item item  fl">加急处理（9：00-18:00） <img class="sel" src="/Application/Home/Static/images/sel.png" alt="" style="display: none"></div>
					<div class=" item  fl jsfee" style="text-align: left;color: red;border: none;display: none">(手续费3%) </div>
					<input type="hidden" name="express" id="express" value="0">
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="common">
				<div class="sellCard-footer">
					<div class="sell-footer-radio">
						<img id="radio1" class="sell-footer-radio-img on" src="/Application/Home/Static/images/radio_s.png">
						<span>已阅读并接受</span>
						<a href="<?php echo U('Help/index',array('id'=>10));?>" target="_parent"><span class="footer-radio-color">《百分百收卡网卡券转让协议》</span></a>
						<span>和</span>
						<a href="<?php echo U('Help/index',array('id'=>12));?>" target="_parent"><span class="footer-radio-color">《礼品卡回收说明》</span></a>
					</div>
					<div class="sell-footer-radio">
						<img id="radio2" class="sell-footer-radio-img on" src="/Application/Home/Static/images/radio_s.png">
						<span>我已确认该卡号卡密</span>
						<span class="footer-radio-font">来源合法</span>
						<span>，如有问题，本人愿意承担一切法律责任。</span>
					</div>
					<div class="sellCard-footer-btn show_alert_model recoverycard" data-type="card2">确认提交卖卡</div>
				</div>
			</div><?php endif; ?>
			<!--暂未开通的-->
			<?php if($cardinfo[0]['offline'] == 1): ?><div class="uphold" style="display:block">
					<div class="sellCard-footer-maintain cf">
						<div class="maintain-img fl">
							<img src="/Application/Home/Static/images/weix@2x.png">
						</div>
						<div class="maintain-font fl">
							<div class="maintain-font-font">非常抱歉，<span>此卡回收通道维护中，暂时无法提交</span></div>
							<div class="maintain-font-text">此卡回收通道维护中，暂时无法提交</div>
						</div>
					</div>
				</div><?php endif; ?>
			<!--实体卡-->
			<?php if(($cardinfo[0]['is_entitycard'] == 1)&&($cardinfo[0]['offline'] == 0) ): ?><div class="sellCard-faceValue cf">
					<div class="sellCard-faceValue-left fl" style="margin-right: 0">
						<div class="sellCard-faceValue-left-font">单张面值：</div>
						<div class="sellCard-faceValue-left-text">不得选错</div>
					</div>
					<div class="sellCard-faceValue-right  cf" style="padding-left: 167px">
						<?php if(is_array($result_list)): $i = 0; $__LIST__ = $result_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($cardpriceid == $vo['id']): ?><div class="sellCard-faceValue-right-money fl money-item on" val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);">
									<?php else: ?>
									<div class="sellCard-faceValue-right-money fl money-item " val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);"><?php endif; ?>
							<div class="money-num " ><?php echo ($vo["price"]); ?></div>
							<div class="money-discount">
								<span>￥<?php echo ($vo["sale_price"]); ?></span><span>.</span><span class="money-discount-color"><?php echo ($vo['card_proportion']); ?>折</span>
							</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="sellCard-faceValue-right-money money-item fl zdy">
						<div class="money-num">自定义</div>
						<div class="money-discount">
							<span id="zdy">回收折扣</span><span>.</span><span class="money-discount-color"><?php echo ($sale_proportion['zdy_proportion']); ?>折</span>
						</div>
					</div>
				</div>
		</div>
	<div style="clear: both"></div>
	<div class="common">

		<div class="sellCard-submit cf" style="display:block">
			<div class="sellCard-submit-left fl">提交方式：</div>
			<div class="apply-zfb apply-bg fl">
            <span class="apply-box">
            <i class="icon-shitk_h icon-svg"></i>
            </span>
				<span class="apply-zfb-font">实体卡图片提交</span>
			</div>
			<div class="sellCard-submit-right fl">只收实体卡，请刮开卡密后拍照上传，卡号卡密需清晰可见</div>
		</div>
		<div class="sellCard-password cf">
			<div class="sellCard-password-left fl">卡号/密码：</div>
			<ul id="ul_pics" class="ul_pics clearfix"></ul>
			<div class="sellCard-password-right fl">

				<div class="sellCard-password-inner">
					<img src="/Application/Home/Static/images/shagnc.png">
					<div >上传实体卡</div>
				</div>

				<input class="sellCard-password-right-input btn" type="text" accept="image/*"  id="btn"/>

				<div class="sellCard-password-right-font">
					可多选，最多可同时提交
					<span class="password-font-color">10</span>
					张实体卡图片
				</div>
			</div>
		</div>

		<div class="sellCard-footer">
			<div class="sell-footer-radio">
				<img id="radio1" class="sell-footer-radio-img on" src="/Application/Home/Static/images/radio_s.png">
				<span>已阅读并接受</span>
				<a href="<?php echo U('Help/index',array('id'=>10));?>" target="_parent"><span class="footer-radio-color">《百分百收卡网卡券转让协议》</span></a>
				<span>和</span>
				<a href="<?php echo U('Help/index',array('id'=>12));?>" target="_parent"><span class="footer-radio-color">《礼品卡回收说明》</span></a>
			</div>
			<div class="sell-footer-radio">
				<img id="radio2" class="sell-footer-radio-img on" src="/Application/Home/Static/images/radio_s.png">
				<span>我已确认该卡号卡密</span>
				<span class="footer-radio-font">来源合法</span>
				<span>，如有问题，本人愿意承担一切法律责任。</span>
			</div>
			<div class="sellCard-footer-btn show_alert_model recoverycard" data-type="card2">确认提交卖卡</div>
		</div>
	</div><?php endif; ?>
		</div>

		</div>
	<div class="bgdrop">
		<div class="zdy-box">
			<div class="title">
				请输入面值
				<span class="close">X</span>
			</div>
			<input type="text" placeholder="100" id="custom">
			<button class="con-btn">确定</button>
		</div>
	</div>
	<input type="hidden" name="cardid" id="cardid" value="<?php echo ($cardid); ?>" autocomplete="off">
	<input type="hidden" name="type" id="type" value="1" autocomplete="off">
	<input type="hidden" name="cardpriceid" id="cardpriceid" value="<?php echo ($cardpriceid); ?>" autocomplete="off">

    <script src="/Application/Home/Static/js/jquery.js"></script>
    <script src="/Public//layer/layer.js"></script>

	<script src="/Application/Home/Static/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/Application/Home/Static/js/sellCard.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8" src="/Application/Home/Static/js/imgupload.js"></script>
	<script type="text/javascript" src="/Application/Home/Static/js/plupload.full.min.js"></script>
	<script type="text/javascript" src="/Public//toastr/toastr.js" ></script>
	<!--<script src="/Application/Home/Static/js/dataInfo.js" type="text/javascript" charset="utf-8"></script>-->
	<script>
        $(".form-controls").scroll(function (e) {
            $(".textarea-tips").scrollTop(e.target.scrollTop)
        })
	</script>
	<script type="text/javascript">
        parent.GetIframeStatus();
        //加急处理
        $("body").on('click', ".urgent-item", function(){
            $(".urgent-item .sel").toggle();
            if($(this).hasClass('on')){
                $(this).removeClass("on");
                $('.jsfee').hide();
                $('#express').val('0');
            }else {
                $('.jsfee').show();
                $(this).addClass("on");
                $('#express').val('1');
            }
        })

		//卖卡提交
       $("body").on('click', ".recoverycard", function(){
           sellCard(0);
        });
        //强制提交
        var parent_obj= parent;
        parent_obj.$("body .recoverycards").on('click', function(){
           // parent_obj.$("body .recoverycards").unbind();
            sellCard(1);
        });

        function sellCard(is_force){
            console.log(is_force);
            $priceid = $('#cardpriceid').val();
            // $cardid = $('#cardid').val();
            $cardid=$(".sellCard-kind-bg-color").attr("data-id")
            $submissionid = $("#type").val();
            $custom = $('#custom').val();
            $express = $('#express').val();
            typeid=$(".type_active").attr("data-id");
            // imgs=$(".imgs").val();
            imgs='';
            $(".imgs").each(
                function() { //遍历文件
                    imgs=$(this).val()+","+imgs;
                });
            if(!$priceid){alert("请选择卡片金额");return false;}

            if($("#radio1").hasClass("on")){

            }else{
                alert('请先阅读并接受协议');return false;
            }

            if($("#radio2").hasClass("on")){

            }else{
                alert('请先勾选确认卡号卡密来源合法');return false;
            }

            if($submissionid == 2){
                $cardkey = $("#single_card").val();
                $cardkey = $cardkey+" "+$("#single_password").val();
                console.log( $cardkey);
            }else if($submissionid == 1){
                $cardkey = $(".form-controls").val();
            }
            $.ajax({
                type: 'post',
                data: {'submission': $submissionid,'imgs':imgs,'cardkey':$cardkey,'cardid':$cardid,'priceid':$priceid,'custom':$custom,'express':$express,'typeid':typeid,'is_force':is_force},
                url: "<?php echo U('Home/Card/recoverycard');?>",
                success: function (data) {  console.log(data);
                    if(data.status==1){
                        alert('提交成功，请勿重复提交');
                        parent_obj.$(".aletr-model").hide();
                        parent_obj.$("#fullbg").hide();
                        console.log(data);
                        window.location.href = "<?php echo U('/Home/User/sellCardRecord');?>";
                    }else if(data.status==3){
                        layer.open({
                            type: 2,
                            title: false,
                            area: ['680px', '450px'],
                            shade: 0.8,
                            shadeClose: true, //close
                            content: ['<?php echo U("Home/Public/loginbox?type=2");?>', 'no'],

                        });
                        console.log(data);
                    }else{
                        if(data.data.count){
                            //$(".error_war").show();
                            $(".textarea-attention").hide();
                            errordata=data.data.error_list;
                            console.log(errordata);
                            var str_li='';
                            $(".error_war").remove();
                            for(var i=0;i<data.data.count;i++){
                                str_li+="<li id='c_"+i+"' class='error_war'></li>";
                            }
                            $('.textarea-attention').before(str_li);
                            $(".error_war").show();
                            $.each(errordata,function(i,item){
                                $("#c_"+item.id).html(item.error);
                            });

                            st="共"+data.data.count+"张,发现"+data.data.error_count+"张问题卡券";
                            $(window.parent.document).find("body #card2-font").html(st);

                            window.parent.showModel($(".show_alert_model").data('type'));
                        }else{
                            //alert(data.info);
							if(is_force==1){
                                parent_obj.$(".aletr-model").hide();
                                //parent_obj.$("#fullbg").hide();
                                window.parent.showModel("card1");
							}else{
                                alert(data.info);
							}

                        }
                    }
                }
            });
		}
 		//切换价格
       $("body").on('click', ".money-item", function(){
        // $(".money-item").click(function () {
           $(".zdy").removeClass('on');
            $(".money-item").removeClass('on');
            $(this).addClass('on');
            $peiceid = $(this).attr("val");
            $('#cardpriceid').val($peiceid);
            $(".money-item .sel").remove();
        });

		//自定义价格
       $("body").on('click', ".zdy", function(){
           $(".sellCard-faceValue-right-money").removeClass('on');
           $(this).addClass('on');
        // $(".zdy").click(function () {
            $(".bgdrop").show();
           $('#cardpriceid').val('zdy');
           parent.getHeightWidth();
          // alert(height);
           $(".zdy-box").css("margin-left",width/2);
           $(".zdy-box").css("margin-top",height/2);
        });

       $("body").on('click', ".kind-item", function(){
            id = $(this).attr("data-id");
            $.ajax({
                type:"post",
                data:{'id':id},
                url:"<?php echo U('Home/User/cardprices');?>",
                success:function(data){
                     $('.ajax_more').html("");
                    $('.ajax_more').html(data);
                    $('#cardpriceid').val('');
					console.log(data);
                }
            })
		});

		//整理卡片
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

       // $("#cardlist-neaten").click(function (){
       $("body").on('click', "#cardlist-neaten", function(){
            var neaten = $("#cardlist").val().split('\n');
            $("#cardlist").val(uptijiao(neaten));
        });


        //方式选择
        $("body").on('click', ".way-item", function(){
       // $(".way-item").click(function () {
            $(".way-item").removeClass('on');
            $(this).addClass('on');
            $(".way-item .sel").remove();
           // $(this).append(str);
            var _this = $(this);
            if (_this.attr('id') == "choose-batch" ) {
                $('#offline').hide();
                $('#choose_single').hide();
                $('#recycle-sumbit').show();
                $('#zhengli').show();
                $('#choose_batch').show();
                $('#type').val(1);
                //    $('#single_card').attr('placeholder','请输入卡号');
                $('#cardlist').focus();
            } else if (_this.attr('id') == "choose-single" ) {
                $('#offline').hide();
                $('#choose_batch').hide();
                $('#recycle-sumbit').show();
                $('#choose_single').show();
                $('#zhengli').hide();
                $('#type').val(2);
            } else if (_this.attr('id') == "choose-offline" ) {
                $('#recycle-sumbit').hide();
                $('#zhengli').hide();
                $('#offline').show();
            }
        })

        //关闭弹窗
        $(".close").click(function () {
            $(".bgdrop").hide()
        })
        //自定义价格确定
        $("body").on('click', ".con-btn", function(){
        // $(".con-btn").click(function () {
            $(".bgdrop").hide();
            $custom = $('#custom').val();
            $('#zdy').html($custom);
            $('#cardmz').text($custom);
        })

        //验证卡券
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
</html>