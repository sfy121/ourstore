<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/storeshop3/index.php/Admin/Demo/doUp/navTabId/listnode/callbackType/closeCurrent"  class="pageForm required-validate" enctype="multipart/form-data"
		onsubmit="return iframeCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>文件：</dt>
				<dd><input type="file"  style="width:100%" name="pic"/></dd>
			</dl>
			<dl>
				<textarea class="editor" upImgUrl="/storeshop3/index.php/Admin/Demo/doUpload" upImgExt="jpg,jpeg,gif,png"  tools="mini" cols="50" rows="8" name="content"></textarea> 
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