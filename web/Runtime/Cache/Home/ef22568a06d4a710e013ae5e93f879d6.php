<?php if (!defined('THINK_PATH')) exit(); if(($sale_proportion['offline'] == 0) && ($sale_proportion['is_entitycard'] == 0)): ?><div class="sellCard-faceValue cf">
        <div class="sellCard-faceValue-left fl" style="margin-right: 0">
            <div class="sellCard-faceValue-left-font">单张面值：</div>
            <div class="sellCard-faceValue-left-text">不得选错</div>
        </div>
        <div class="sellCard-faceValue-right  cf" style="padding-left: 167px">
            <?php if(is_array($result_list)): $i = 0; $__LIST__ = $result_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($cardpriceid == $vo['id']): ?><div class="sellCard-faceValue-right-money fl money-item on" val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);">
                        <?php else: ?>
                        <div class="sellCard-faceValue-right-money fl money-item " val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);"><?php endif; ?>
                <!----判断是否是视频-->
                <?php if($sale_proportion['type_id'] == 118): ?><div class="money-num " ><?php echo ($vo["price_name"]); ?></div>
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
                    <span id="zdy">回收折扣</span><span>.</span><span class="money-discount-color"><?php echo ($sale_proportion['zdy_proportion']); ?>折</span>
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
    <div style="padding-left: 100px;color: #D35400" id="introduce"><?php echo ($sale_proportion['introduce']); ?></div>
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
<?php if($sale_proportion['offline'] == 1): ?><div class="uphold" style="display:block">
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
<?php if(($sale_proportion['is_entitycard'] == 1)&&($sale_proportion['offline'] == 0) ): ?><div class="sellCard-faceValue cf">
        <div class="sellCard-faceValue-left fl" style="margin-right: 0">
            <div class="sellCard-faceValue-left-font">单张面值：</div>
            <div class="sellCard-faceValue-left-text">不得选错</div>
        </div>
        <div class="sellCard-faceValue-right  cf" style="padding-left: 167px">
            <?php if(is_array($result_list)): $i = 0; $__LIST__ = $result_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($cardpriceid == $vo['id']): ?><div class="sellCard-faceValue-right-money fl money-item on" val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);">
                        <?php else: ?>
                        <div class="sellCard-faceValue-right-money fl money-item " val="<?php echo ($vo["id"]); ?>" onclick="pselect(<?php echo ($vo['price']); ?>);"><?php endif; ?>
                <!----判断是否是视频-->
                <?php if($sale_proportion['type_id'] == 118): ?><div class="money-num " ><?php echo ($vo["price_name"]); ?></div>
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
                    <span id="zdy">回收折扣</span><span>.</span><span class="money-discount-color"><?php echo ($sale_proportion['zdy_proportion']); ?>折</span>
                </div>
            </div><?php endif; ?>
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

<script type="text/javascript">
    //===【浏览文件上传地址写入文本框】开始
    jQuery(function($) {
        console.log('sdfadfsadfadf');
        var bianhao2 = $('#bianhao2').val();

        var uploader = new plupload.Uploader({ //创建实例的构造方法
            runtimes: 'html5,flash,silverlight,html4',
            //上传插件初始化选用那种方式的优先级顺序
            browse_button: 'btn',
            // 上传按钮
            //出租
            url: "/Home/User/uploadImgs",
            //远程上传地址
            flash_swf_url: 'plupload/Moxie.swf',
            //flash文件地址
            silverlight_xap_url: 'plupload/Moxie.xap',
            //silverlight文件地址
            filters: {
                max_file_size: '500kb',
                //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
                mime_types: [ //允许文件上传类型
                    {
                        title: "files",
                        extensions: "jpg,png,gif"
                    }]
            },
            multi_selection: true,
            //true:ctrl多文件上传, false 单文件上传
            init: {
                FilesAdded: function(up, files) { //文件上传前
                    if ($("#ul_pics").children("li").length > 10) {
                        alert("您上传的图片太多了！");
                        uploader.destroy();
                    } else {
                        var li = '';
                        plupload.each(files,
                            function(file) { //遍历文件
                                li += "<li id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>";
                            });
                        $("#ul_pics").append(li);
                        uploader.start();
                    }
                },
                UploadProgress: function(up, file) { //上传中，显示进度条
                    $("#" + file.id).find('.bar').css({
                        "width": file.percent + "%"
                    }).find(".percent").text(file.percent + "%");
                },
                FileUploaded: function(up, file, info) { //文件上传成功的时候触发

                    var data = JSON.parse(info.response);


                    // $("#" + file.id).html("<div class='img'><img src='/" + data.pic + "' class='wantHouse-bigPage-shopImg'/ ><input type='hidden' name='pics_url[]' value='/\" + data.pic + \"'><a  onclick='delHost(this)' style='color:red'>删除</a></div>");
                    $("#" + file.id).html("<div class='img'> <div class='delete_imgBox'> <input type='hidden' name='imgs[]' value='/" + data.pic + "' class='imgs'> <a onclick='delHost(this)' style='color:red'>删除</a> </div> <img src='/" + data.pic + "' class='wantHouse-bigPage-shopImg'/ > </div>");

              console.log( $(".imgs").val()); return false; },
                Error: function(up, err) { //上传出错的时候触发
                    alert(err.message);
                }
            }
        });
        uploader.init();
    });


    function delHost(obj){
        var hurl = $(obj).prev("input[name='imgs[]']").val();
        //$(obj).parent().parent().remove();
        $.ajax({
            type:'post',
            url:'/Home/User/del_pic',
            data:{'purl':hurl},
            success:function(data){
                if(data){
                    $(obj).parent().parent().remove();
                    toastr.success("删除成功");
                }else{
                    toastr.error("删除失败")
                }
            }
        })
    }

</script>