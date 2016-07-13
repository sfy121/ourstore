<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TP</title>
</head>
<body>
	<h1>ThinkPHP框架实例--模板 只负责输出</h1>
	<ul>
		<li>输出变量$name:<?php echo ($name); ?></li>
		<li>输出数组stu:<?php echo ($stu["name"]); ?>,<?php echo ($stu['sex']); ?></li>
		<li>默认值输出 你好:<?php echo ((isset($_GET['name']) && ($_GET['name'] !== ""))?($_GET['name']):"游客"); ?></li>
		<li>输出post方式传值<?php echo ($_POST['num']); ?>:<?php echo ($_POST['num']+200); ?></li>
		<li>输出日期函数:<?php echo date("Y-m-d");?></li>
	</ul>
</body>
</html>