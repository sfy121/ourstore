<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/7-4/index.php/Admin/User/update/navTabId/liststu/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>新密码：</dt>
				<dd><input id="a" type="password" class="required alphanumeric"  style="width:100%" name="user_pass" value=""/></dd>
			</dl>
			
			<dl>
				<dt>确认密码：</dt>
				<dd><input type="password" class="required" equalto="#a"  size="10" style="width:100%" name="user_pass2"/></dd>
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