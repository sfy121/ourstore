<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/7-4/index.php/Admin/User/update/navTabId/liststu/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="user_name" value="<?php echo ($vo["user_name"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>真实姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="user_realname" value="<?php echo ($vo["user_realname"]); ?>" /></dd>
			</dl>
			
			<dl>
				<dt>性别：</dt>
				<dd><input type="radio" name="user_sex" value="1" <?php if($vo["user_sex"] == 1): ?>checked<?php endif; ?>/>男
					<input type="radio" name="user_sex" value="0" <?php if($vo["user_sex"] == 0): ?>checked<?php endif; ?>/>女</dd>
			</dl>
			<dl>
				<dt>邮箱：</dt>
				<dd><input type="text" class="required" size="10"style="width:100%" name="user_email" value="<?php echo ($vo["user_email"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>电话：</dt>
				<dd><input type="text" class="required" size="10" style="width:100%" name="user_tel" value="<?php echo ($vo["user_tel"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>QQ：</dt>
				<dd><input type="text" class="required" size="10" style="width:100%" name="user_qq" value="<?php echo ($vo["user_qq"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>状态：</dt>
				<dd><input type="radio" name="user_state" value="1" <?php if($vo["user_state"] == 1): ?>checked<?php endif; ?>/>启用
					<input type="radio" name="user_state" value="0" <?php if($vo["user_state"] == 0): ?>checked<?php endif; ?>/>禁用</dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>