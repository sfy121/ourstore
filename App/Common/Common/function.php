<?php
//�Զ��庯����


//�Զ���һ�������Ʒ���ǰ���κ���
function outTypeInfo($path){
    //��ȡ�����У��ŵĴ���
    $m = substr_count($path,",")-1;
    return str_repeat("&nbsp;",$m*6)."|--";
}


//����һ��mail���ͺ���
function sendMail($address,$title,$message){
	//����mail���ļ�
	//require("./PHPMailer/class.phpmailer.php");
	
	vendor('PHPMailer.class#phpmailer'); //Thinkphp�ĵ��뷽ʽ������/ThinkPHP/Extend/Vendor/

	//����mail����
	$mail = new PHPMailer();

	$mail->IsSMTP(); //����ʹ��SMTP����������
	$mail->Host = "smtp.126.com";  //����126������� 
	$mail->SMTPAuth = true;     // ������Ҫ��֤
	//$mail->Username = C("MAIL_USERNAME");  // ������ʹ������
	$mail->Username = "xxx123456@126.com";  // ������ʹ������
	$mail->Password = "123456"; // ���÷���������

	$mail->From = "xxx123456@126.com";// ����������
	$mail->FromName = "admin"; //����������
	$mail->AddAddress($address); // ��ӷ��͵�ַ
	
	$mail->IsHTML(true); //ָ��֧��html��ʽ
	$mail->CharSet="UTF-8";
	
	$mail->Subject = $title;
	$mail->Body = $message;
	
	if($mail->Send()){
	   return true;
	}else{
	   return false;
	}
}
