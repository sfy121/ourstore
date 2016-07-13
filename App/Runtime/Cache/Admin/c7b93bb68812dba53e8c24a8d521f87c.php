<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/storeshop3/index.php/Admin/User/saverole/navTabId/listrole/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="uid" value="<?php echo ($user["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<h3>当前用户:【<?php echo ($user["name"]); ?>】的角色信息</h3>
			<?php if(is_array($rolelist)): $i = 0; $__LIST__ = $rolelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="width:140px;float:left;margin:5px;">
					<input type="checkbox" name="rid[]" <?php if(in_array($vo['id'],$rids)): ?>checked<?php endif; ?> value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["name"]); ?>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>