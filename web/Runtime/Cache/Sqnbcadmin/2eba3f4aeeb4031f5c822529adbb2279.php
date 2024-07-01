<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?> - www.ohbbs.cn 欧皇源码论坛 </title>
    <link rel="shortcut icon" type="image/x-icon" href="/Application/Sqnbcadmin/Static/images/favicon.ico" media="screen" />
    <link rel="stylesheet" type="text/css" href="/Application/Sqnbcadmin/Static/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Application/Sqnbcadmin/Static/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Application/Sqnbcadmin/Static/css/module.css">
    <link rel="stylesheet" type="text/css" href="/Public/assets/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Application/Sqnbcadmin/Static/css/default_color.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/toastr/toastr.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/dropdownlist/dropdownlist.css" media="all">
    <!--[if lt IE 9]-->
    <script type="text/javascript" src="/Application/Sqnbcadmin/Static/js/jquery-1.10.2.min.js"></script>
    <!--[endif]-->
    <script type="text/javascript" src="/Application/Sqnbcadmin/Static/js/jquery-2.0.3.min.js"></script>
    
</head>
<body>
    <!-- 内容区 -->
    <div id="content">
        
    <div class="tw-layout">
    	<div class="tw-list-hd">
            <?php echo isset($info['id'])?'编辑':'新增';?>卡片
        </div>

	    <div class="tw-list-wrap tw-edit-wrap">
            <form action="/index.php/Sqnbcadmin/Card/edit" method="post" class="form-horizontal ajaxForm">
                <div class="form-item">
                    <label class="item-label">标题<span class="check-tips"><b>*</b>（输入卡片名称）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="name" value="<?php echo ($info["name"]); ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">卡片分类<span class="check-tips">（选择卡片分类名称）</span></label>
                    <div class="controls">
                        <select name="type_id" id="type_id">
                            <option value="0">--请选择--</option>
                            <?php if(is_array($CardType)): $i = 0; $__LIST__ = $CardType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <script>
                            $('#type_id').val("<?php echo ((isset($info["type_id"]) && ($info["type_id"] !== ""))?($info["type_id"]):0); ?>");
                        </script>
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">是否是线下回收：<span class="check-tips"></span></label>
                    <div class="controls">
                        <?php if($info["offline"] == 1): ?><label class="radio"><input type="radio" value="0" name="offline" >否</label>
                            <label class="radio"><input type="radio" value="1" name="offline" checked="checked" >是</label>
                            <?php else: ?>
                            <label class="radio"><input type="radio" value="0" name="offline" checked="checked" >否</label>
                            <label class="radio"><input type="radio" value="1" name="offline" >是</label><?php endif; ?>
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">是否是实体卡：<span class="check-tips"></span></label>
                    <div class="controls">
                        <?php if($info["is_entitycard"] == 1): ?><label class="radio"><input type="radio" value="0" name="is_entitycard" >否</label>
                            <label class="radio"><input type="radio" value="1" name="is_entitycard" checked="checked" >是</label>
                            <?php else: ?>
                            <label class="radio"><input type="radio" value="0" name="is_entitycard" checked="checked" >否</label>
                            <label class="radio"><input type="radio" value="1" name="is_entitycard" >是</label><?php endif; ?>
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">回收比例<span class="check-tips"><b>*</b>（输入回收比例）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="sale_proportion" value="<?php echo ($info["sale_proportion"]); ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">自定义回收比例<span class="check-tips"><b>*</b>（输入自定义回收比例）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="zdy_proportion" value="<?php echo ($info["zdy_proportion"]); ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">卡号长度<span class="check-tips"><b></b>（输入卡号长度）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="card_length" value="<?php echo ($info["card_length"]); ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">卡密长度<span class="check-tips"><b></b>（输入卡密长度）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="card_password_length" value="<?php echo ($info["card_password_length"]); ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">提交方式下提示语<span class="check-tips"><b></b>（输入提交方式下提示语）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="introduce" value="<?php echo ($info["introduce"]); ?>">
                    </div>
                </div>
                <!--  <div class="form-item">
                    <label class="item-label">多行输入框内提示语<span class="check-tips"><b>*</b>（输入多行输入框内提示语）</span></label>
                    <div class="controls">
                        <input type="text" class="text input-large" name="moreintroduce" value="<?php echo ($info["moreintroduce"]); ?>">
                    </div>
                </div> -->
                <div class="form-item">
                    <label class="item-label">卡号示例<span class="check-tips"><b></b>（输入卡号示例）</span></label>
                    <div class="controls">
                      <!--   <input type="text" class="text input-large" name="cardexample" value="<?php echo ($info["cardexample"]); ?>"> -->
                         <textarea name="cardexample" rows="5" cols="57"><?php echo ($info["cardexample"]); ?></textarea><br/>
                    </div>
                </div>

                 <div class="form-item">
                    <label class="item-label">卡密是否分开输入：<span class="check-tips"></span></label>
                    <div class="controls">
                        <?php if($info["openpassword"] == 1): ?><label class="radio"><input type="radio" value="0" name="openpassword" >否</label>
                            <label class="radio"><input type="radio" value="1" name="openpassword" checked="checked" >是</label>
                            <?php else: ?>
                            <label class="radio"><input type="radio" value="0" name="openpassword" checked="checked" >否</label>
                            <label class="radio"><input type="radio" value="1" name="openpassword" >是</label><?php endif; ?>
                    </div>
                </div>

                <div class="form-item">
                    <label class="item-label">上传图片<span class="check-tips">（用于上传图片 请上传大于400*400的正方形图片）</span></label>
                    <div class="controls">
                        <div>
                            <img src="<?php echo ($info["photo_path"]); ?>" style="height:129px; width:129px;" id="img_"/>
                        </div>
                        <input type="hidden" value="<?php echo ($info["photo_path"]); ?>" name="photo_path" id="img" />
                            <input class="btn btn-default btn-xs" type="button" value="上传" id="btnUpload"/>
                            <input class="btn btn-danger btn-xs" type="button" value="删除" onclick="delFile($('#img').val(), '')" id="btn_delete_" />
                            <?php if($info["photo_path"] == ''): ?><script>
                                    $("#img_, #btn_delete_").hide();
                                </script><?php endif; ?>
                    </div>
                </div>
                <div class="form-item">
                    <label class="item-label">上传图片<span class="check-tips">（用于上传图片 卡片logo,在我要卖卡页面的下拉中出现）</span></label>
                    <div class="controls">
                        <div>
                            <img src="<?php echo ($info["card_logo"]); ?>" style="height:129px; width:129px;" id="img_1"/>
                        </div>
                        <input type="hidden" value="<?php echo ($info["card_logo"]); ?>" name="card_logo" id="img1" />
                        <input class="btn btn-default btn-xs" type="button" value="上传" id="btnUpload1"/>
                        <input class="btn btn-danger btn-xs" type="button" value="删除" onclick="delFile($('#img1').val(), '')" id="btn_delete_1" />
                        <?php if($info["card_logo"] == ''): ?><script>
                                $("#img_1, #btn_delete_1").hide();
                            </script><?php endif; ?>
                    </div>
                </div>
                <div class="form-item">
                    <form action="/Sqnbcadmin/Card/edit" method="post" class="form-horizontal ajaxForm">
                        <div class="form-item">
                            <label class="item-label">面值信息<span class="check-tips"><b>*</b></span></label>
                            <div id="table1">
                                <table  id="options_table" >
                                    <tr>
                                        <th class='text input-mid hidden_pic' style="background:#ccc;">面值名称
                                        </th>
                                        <th class='text input-mid hidden_pic' style="background:#ccc;">卡片面值(元)
                                        </th>
                                        <th class='text ' style="background:#ccc;">比例</th>
                                        <th class='text ' style="background:#ccc;">回收价格(元)</th>
                                        <th>
                                            <a style="height:30px;" class="tw-tool-btn-add" onclick="addInfo()"><i class="tw-icon-plus-circle"></i> &nbsp;&nbsp;增加&nbsp;&nbsp;</a>
                                        </th>
                                    </tr>
                                    <div id="table1_add">
                                        <?php if($info['id'] == null ): ?><tr class="count_trs">
                                                <td><input type="text" id="name_0"  name="result[0][price_name]"></td>
                                                <td><input type="number" id="price_0" min="1"  name="result[0][price]" value="1" onchange="Calculation(0);"  ></td>
                                                <td><input type='text' id="card_proportion_0" class='text input' onchange="Calculation(0);"  name="result[0][card_proportion]"></td>
                                                <td><input type='text' id="sale_price_0" class='text input'  name="result[0][sale_price]" readonly="readonly"></td>
                                            </tr>
                                           
                                            <?php else: ?>
                                            <div id="table1_show">
                                                <!--修改操作 -->
                                                <?php if(is_array($result_list)): foreach($result_list as $k=>$vo): ?><tr class="count_trs">
                                                        <td><input type="text" id="name_<?php echo ($k); ?>"  name="result[<?php echo ($k); ?>][price_name]"  value='<?php echo ($vo["price_name"]); ?>'></td>
                                                        <td class="">
                                                           
                                                            <input type="number" id="price_<?php echo ($k); ?>"  min="1"   name="result[<?php echo ($k); ?>][price]" value="<?php echo ($vo["price"]); ?>" onchange="Calculation(<?php echo ($k); ?>);">
                                                        </td>
                                                        <td><input type='text' class='text'  id="card_proportion_<?php echo ($k); ?>" onchange="Calculation(<?php echo ($k); ?>);"  name="result[<?php echo ($k); ?>][card_proportion]" value='<?php echo ($vo["card_proportion"]); ?>'></td>
                                                        <td><input type='text' class='text'  id="sale_price_<?php echo ($k); ?>" name="result[<?php echo ($k); ?>][sale_price]" value='<?php echo ($vo["sale_price"]); ?>' readonly="readonly"></td>
                                                        <td align="center"><a class="tw-tool-btn-del" onclick="deleteLine(this)" data-id="<?php echo ($vo['id']); ?>"><i class="tw-icon-minus-circle"></i> &nbsp;&nbsp;删除&nbsp;&nbsp;</a></td></tr>
                                                    </tr><?php endforeach; endif; ?>
                                            </div><?php endif; ?>
                                    </div>
                                </table>
                            </div>
                         <div class="tw-tool-bar-bot">
                            <button type="submit" class="tw-act-btn-confirm">提交</button>
                            <button type="button" onclick="goback()" class="tw-act-btn-cancel">返回</button>
                        </div>
                    <input type="hidden" name="id" value="<?php echo ((isset($info["id"]) && ($info["id"] !== ""))?($info["id"]):''); ?>"/>
                </form>
	    </div>
    </div>

    </div>
    <!-- /内容区 -->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Application/Sqnbcadmin/Static/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="/Public/toastr/toastr.js" ></script>
    <script type="text/javascript" src="/Public/assets/js/wf-list.js" ></script>
    <script type="text/javascript" src="/Public/assets/plugins/layer-v2.0/layer/layer.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/laydate-v1.1/laydate/laydate.js"></script>
    <script type="text/javascript" src="/Public/assets/js/common.js"></script>
    <script type="text/javascript" src="/Public/dropdownlist/dropdownlist.js"></script>
    <script type="text/javascript" src="/Application/Sqnbcadmin/Static/js/common.js"></script>
    <script>
        // 定义全局变量
        RECYCLE_URL = "<?php echo U('recycle');?>"; // 默认逻辑删除操作执行的地址
        RESTORE_URL = "<?php echo U('restore');?>"; // 默认逻辑删除恢复执行的地址
        DELETE_URL = "<?php echo U('del');?>"; // 默认删除操作执行的地址
        UPLOAD_IMG_URL = "<?php echo U('uploadImg');?>"; // 默认上传图片地址
        DELETE_FILE_URL = "<?php echo U('delFile');?>"; // 默认删除图片执行的地址
        CHANGE_STAUTS_URL = "<?php echo U('changeDisabled');?>"; // 修改数据的启用状态
        UPLOAD_FIELD_URL = "<?php echo U('uploadField');?>"; // 默认上传图片地址
    </script>
    
    <script type="text/javascript" charset="utf-8" src="/Public/ajaxupload.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Application/Common/Static/js/imgupload.js"></script>
    <script>
        _TARGET_URL="<?php echo U('Sqnbcadmin/Card/index');?>";
        $(function(){
            ajaxUpload('#btnUpload', "#img", 'Card', '');
            ajaxUpload('#btnUpload1', "#img1", 'Card', 1);
        })

        // 添加行配置
        var k=<?php echo ($result_count); ?>;//后期修改为在控制器中获得对当前试卷对应的阶段数
        //var k = 1;
        function addInfo(){
            var newRow ='<tr class="count_trs">' +
                    '<td class=""><input type="text"  id="name_'+k+'"   name="result['+k+'][price_name]" ></td>'+
                    '<td class=""><input type="number" min="1" id="price_'+k+'"   name="result['+k+'][price]" onchange="Calculation('+k+');"  value="1" ></td>'+
                    '<td ><input type="text" id="card_proportion_'+k+'" onchange="Calculation('+k+');" class="text input"  name="result['+k+'][card_proportion]"></td>' +
                    '<td><input type="text" id="sale_price_'+k+'" class="text input"  name="result['+k+'][sale_price]" readonly="readonly"></td>'+
                    '<td align="center"><a class="tw-tool-btn-del" onclick="deleteLine(this)"><i class="tw-icon-minus-circle"></i> &nbsp;&nbsp;删除&nbsp;&nbsp;</a></td></tr>';
            $("#options_table tr:last").after(newRow);
            k++;
        }

        function deleteLine(obj){
            var count_trs = $('.count_trs').length;
            if(count_trs<3){
                toastr.error('无法删除，剩余阶段不足2条！');
            }else{
                var id = $(obj).attr('data-id');
                layer.confirm('确认要删除？', {btn: ['删除','取消'] //按钮
                        },
                        function(){
                            //这是点击删除的操作
                            if(id>0){
                                $.ajax({
                                    type:"POST",
                                    data:{
                                        options_id:id
                                    },
                                    url:"/Sqnbcadmin/Card/del_price",
                                    success:function(){
                                        layer.msg('已删除', {icon: 1});
                                        $(obj).parent().parent().remove();
                                    }
                                })
                            }else{
                                layer.msg('已删除', {icon: 1});
                                $(obj).parent().parent().remove();
                            }
                        },
                        function(){
                        });
            }
        }


        function Calculation(j) {
            var price = $('#price_'+j).val();

            if(price == ''){
                toastr.error('请输入卡片面值！');
                return false;
            }

            var card_proportion = $('#card_proportion_'+j).val();
            if(card_proportion == ''){
                toastr.error('请输入比例！');
                return false;
            }

            if(parseFloat(card_proportion) <= 0.00){
                toastr.error('请输入大于0的比例值！');
                return false;
            }

            var result = parseFloat(card_proportion) * parseFloat(price);
            $('#sale_price_'+j).val(result);
        }
    </script>

</body>
</html>