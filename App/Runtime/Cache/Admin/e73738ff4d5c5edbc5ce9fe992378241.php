<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/storeshop3/index.php/Admin/User/insert/navTabId/listuser/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>账号：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="username"/></dd>
			</dl>
			<dl>
				<dt>真实姓名：</dt>
				<dd><input type="text"  style="width:100%" name="name"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password"  style="width:100%" name="userpass"/></dd>
			</dl>
			<dl>
				<dt>重复密码：</dt>
				<dd><input type="password"  style="width:100%" name="repass"/></dd>
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