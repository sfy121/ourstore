<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/7-4/index.php/Admin/User/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="orderField" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [姓名]
						&nbsp;&nbsp;班级：<input size="10" type="text" name="classid" value="<?php echo ($_POST['classid']); ?>"/>
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/7-4/index.php/Admin/User/add" target="dialog" width="550" height="380" rel="user_msg" title="添加会员信息"><span>添加</span></a></li>
			<li><a class="delete" href="/7-4/index.php/Admin/User/del/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/liststu" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/7-4/index.php/Admin/User/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  width="550" height="380" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="40">ID</th>
				<th width="150" orderField="name" <?php if($_REQUEST['_order']== 'name'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>用户名</th>
				<th width="150">真实姓名</th>
				<th width="150" >密码</th>
				<th width="150">性别</th>
				<th width="150">邮箱</th>
				<th width="150">用户积分</th>
				<th width="150">电话</th>
				<th width="150">QQ</th>
				<th width="150">注册时间</th>
				<th width="150">头像</th>
				<th width="150">状态</th>
				<th width="150">权限</th>
				<th width="150">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["user_name"]); ?></td>
					<td><?php echo ($vo["user_realname"]); ?></td>
					<td><?php echo (MD5($vo["userpass"])); ?></td>
					<td><?php echo ($vo['user_sex']==1?'男':'女'); ?></td>
					<td><?php echo ($vo["user_email"]); ?></td>
					<td><?php echo ($vo["user_oxben"]); ?></td>
					<td><?php echo ($vo["user_tel"]); ?></td>
					<td><?php echo ($vo["user_qq"]); ?></td>
					<td><?php echo (date("Y-m-d",$vo["user_time"])); ?></td>
					<!-- <td><?php echo date("Y-m-d",$vo['user_time']);?></td> -->
					<td><?php echo ($vo["user_avatar"]); ?></td>
					<td><?php echo ($vo['user_state']==1?'启用':'禁用'); ?></td>
					<td><?php echo ($vo['user_type']==2?'会员':''); ?></td>
					<td><a class="edit" href="/7-4/index.php/Admin/User/rpass/id/<?php echo ($vo["id"]); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"   target="dialog">重置密码</a><a href="/7-4/index.php/Admin/User/address/id/<?php echo ($vo["id"]); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak(<?php echo (C("TMPL_L_DELIM")); ?>numPerPage:this.value<?php echo (C("TMPL_R_DELIM")); ?>)">
				<option value="10" <?php if($numPerPage == 10): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="5" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>