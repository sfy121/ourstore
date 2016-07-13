<?php
//自定义函数库


//自定义一个输出商品类别前修饰函数
function outTypeInfo($path){
    //获取参数中，号的次数
    $m = substr_count($path,",")-1;
    return str_repeat("&nbsp;",$m*6)."|--";
}


//定义一个mail发送函数
function sendMail($address,$title,$message){
	//导入mail类文件
	//require("./PHPMailer/class.phpmailer.php");
	
	vendor('PHPMailer.class#phpmailer'); //Thinkphp的导入方式，放在/ThinkPHP/Extend/Vendor/

	//创建mail对象
	$mail = new PHPMailer();

	$mail->IsSMTP(); //设置使用SMTP服务器发送
	$mail->Host = "smtp.126.com";  //设置126邮箱服务 
	$mail->SMTPAuth = true;     // 设置需要验证
	//$mail->Username = C("MAIL_USERNAME");  // 发件人使用邮箱
	$mail->Username = "xxx123456@126.com";  // 发件人使用邮箱
	$mail->Password = "123456"; // 设置发件人密码

	$mail->From = "xxx123456@126.com";// 发件人邮箱
	$mail->FromName = "admin"; //发送者名称
	$mail->AddAddress($address); // 添加发送地址
	
	$mail->IsHTML(true); //指定支持html格式
	$mail->CharSet="UTF-8";
	
	$mail->Subject = $title;
	$mail->Body = $message;
	
	if($mail->Send()){
	   return true;
	}else{
	   return false;
	}
}
