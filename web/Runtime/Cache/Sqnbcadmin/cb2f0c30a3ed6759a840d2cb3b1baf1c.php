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
        
    <style>
        .textarea_hide textarea {
            padding: 5px;
            min-width: 480px;
            min-height: 245px;
            max-height: 245px;
            margin: 5px 0 5px 5px;
        }
        .textarea_hide button {
            width: 150px;
            margin-left: 175px;
            background: #CA2E2F;
            color: #ffffff;
            border: solid 1px #CA2E2F;
            height: 30px;
        }
        .textarea_hide {
            width: 500px;
        }
    </style>
    <!-- S=头部设置 -->
    <div class="tw-layout">        
        <!-- S=信息管理 -->
        <div class="tw-list-hd"> 申请列表</div>
        <!-- E=信息管理 -->        
        <!-- S=导航设置 -->
        <div class="tw-list-top">
            <!-- S=添加删除 -->
            <div class="tw-tool-bar">
                <!--<a class="tw-tool-btn-add" href="<?php echo U('edit');?>">-->
                    <!--<i class="tw-icon-plus-circle"></i> 添加-->
                <!--</a>-->

                    <a class="tw-tool-btn-add" href="javascript:void(0)" onclick="exportExcel(<?php echo ($tag); ?>)" >
                        <i class="tw-icon-paper-plane"></i> 导出
                    </a>


            </div>
            <!-- E=添加删除 -->
            <!-- S=高级搜索 -->                        
            <form action="/Sqnbcadmin/PaymentRecord/bankapply" method="get" id='frmSearch'>
                <div class="tw-search-bar">
                    <div class="search-form fr cf">
                        <div class="sleft">
                            <input type="text" name="name" class="search-input" value="<?php echo I('name');?>" placeholder="请输入用户名">
                            <a type="submit" class="sch-btn" onclick="$('#frmSearch').submit();"><i class="btn-search"></i></a>
                        </div>
                    </div>            
                </div>
	    </form>          
            <!-- E=高级搜索 -->
        </div>
        <!-- E=导航设置 -->
    </div>
    <!-- E=头部设置 -->
    <!-- S=详情显示 -->	
    <div class="tw-list-wrap">
        <!-- S=表单 -->
        <form class="ids">
            <table class="tw-table tw-table-list tw-table-fixed">
                <thead>
                    <tr>
                       
                        <th width="30">ID</th>
                        <th width="8%">提现用户名</th>
                        <th width="4%">用户ID</th>
                        <th width="8%">提现金额</th>
                        <th width="10%">银行名称</th>
                        <th width="15%">银行卡号</th>
                        <th width="6%">提现状态</th>
                        <th class="show-time">提现时间</th>
                        <th width="100">操作</th>
                    </tr>
                </thead>
                <!-- S=详细信息 -->	
                <tbody>
                    <?php if(!empty($data)): if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                
                                <td><?php echo ($vo["id"]); ?></td>
                                <td ><?php echo ($vo["member_name"]); ?></td>
                                <td ><?php echo ($vo["user"]); ?></td>
                                <td ><?php echo ($vo["pay_cash"]); ?></td>
                                <td><?php echo ($vo["bankname"]); ?></td>
                                <td><?php echo ($vo["alipaycount"]); ?></td>
                                <td ><?php if($vo["flag"] == 1): ?>未审核<?php elseif($vo["static"] == 1): ?> 申请无效<?php else: ?>已到账<?php endif; ?></td>

                                <td><?php echo (time_format($vo["add_time"])); ?></td>
                                <td>
                                <?php if($vo["flag"] == 1): ?><a class="tw-tool-btn-view" href="<?php echo U('bankpayRecommend?id='.$vo['id']);?>"><i class="tw-icon-pencil"></i> 通过 </a>
                                    <a onclick="Remarks(<?php echo ($vo["id"]); ?>)" class="tw-tool-btn-del"><i class="tw-icon-minus-circle" ></i> 不通过</a>
                                    <!--<a class="tw-tool-btn-del" href="<?php echo U('payNoRecommend?id='.$vo['id']);?>"><i class="tw-icon-minus-circle"></i> 不通过</a>-->
                                    <?php else: ?>已审核<?php endif; ?>
                                </td>                                
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php else: ?>
                            <td colspan="5" class="text-center"> aOh! 暂时还没有内容! </td><?php endif; ?>
                </tbody>
                <!-- E=详细信息 -->
            </table>
        </form>
        <!-- E=表单 -->
        <div class="page"><?php echo ($page); ?></div>
         </div>
    </div>
    <!-- E=详情显示 -->	

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
    
    <script type="text/javascript">
        function exportExcel(tag){
            window.location.href='<?php echo U('bankexportExcel','','');?>/tag/'+tag;
        }
    </script>
    <script type="text/javascript">
        function Remarks(e) {

            layer.open({
                title:'修改备注',
                type: 1,
                skin: 'layui-layer-demo', //样式类名
                closeBtn: 1, //不显示关闭按钮
                anim: 2,
                area: ['500', '350px'], //宽高
                shadeClose: true, //开启遮罩关闭
                content: "<div class=\"textarea_hide\">\n" +
                    "\t\t<form id='form_s'>\n" +
                    "\t\t<textarea maxlength='500' name='remarks' placeholder=\"未填写备注\"></textarea>" +
                    "<input type='hidden' name='id' value='"+e+"'>\n" +
                    "\t\t\t<button type='button' onclick='submit_mod()'>保存</button>\n" +
                    "\t\t</form>\n" +
                    "\t</div>"
            });

        }
        function submit_mod(e) {
            //alert('sdfsdfsaf');
            $.post("/index.php/SqnbcAdmin/PaymentRecord/payNoRecommend",$("#form_s").serialize(),function (date) {
                alert(date['info']);
                if(date['status']==1){
                    window.location.reload();
                }
            });
            return false;
        }
    </script>

</body>
</html>