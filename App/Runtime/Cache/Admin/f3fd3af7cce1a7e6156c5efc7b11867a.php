<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/7-4/index.php/Admin/User/insert/navTabId/liststu/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="user_name"/></dd>
			</dl>
			<dl>
				<dt>真实姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="user_realname"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="user_pass"/></dd>
			</dl>
			<dl>
				<dt>性别：</dt>
				<dd><input type="radio" name="user_sex" value="1"/>男
					<input type="radio" name="user_sex" value="0"/>女</dd>
			</dl>
			<dl>
				<dt>邮箱：</dt>
				<dd><input type="text" class="required digits" min="1" max="100" size="10" style="width:100%" name="user_email"/></dd>
			</dl>
			<dl>
				<dt>电话：</dt>
				<dd><input type="text" size="10" style="width:100%" name="user_tel"/></dd>
			</dl>
			<dl>
				<dt>QQ：</dt>
				<dd><input type="text" size="10" style="width:100%" name="user_qq"/></dd>
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