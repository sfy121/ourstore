<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/shphp046_C/37_object07/demo/index.php/Admin/Type/insert/navTabId/listtype/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
            <dl>
				<dt>父类别名：</dt>
				<dd>
                    <select name="pid">
                        <?php if(empty($_GET['pid'])): ?><option value="0">根类别</option><?php endif; ?>
                        <?php if(is_array($typelist)): $i = 0; $__LIST__ = $typelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($_GET['id']) == $vo["id"]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </dd>
			</dl>
            <dl>
				<dt>类别名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="name"/></dd>
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