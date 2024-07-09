<?php if (!defined('THINK_PATH')) exit(); if(is_array($cardinfo)): $i = 0; $__LIST__ = $cardinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="side-box name-box" data-typeid="<?php echo ($vo['id']); ?>" data-password="<?php echo ($vo["openpassword"]); ?>" data-cardexample="<?php echo ($vo["cardexample"]); ?>" data-introduce="<?php echo ($vo["introduce"]); ?>">
                <div class="name-img">
                    <img src="<?php echo ($vo["photo_path"]); ?>" alt="">
                </div>
                <a href="#"><p><?php echo ($vo["name"]); ?></p></a>
			    <?php if(($i) == "1"): ?><div class="right-img right-img1">
			    <?php else: ?>
                	<div class="right-img right-img1  right-none"><?php endif; ?>
				<img src="/Application/Mobile/Static/images/download.png" alt="">
                    
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>