<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PHPMail邮件发送实例</title>
        
    </head>
    <body>
        <h2>PHPMail邮件发送实例</h2>
        <form action="/storeshop3/index.php/Home/Mail/doSend" method="post" >
            地址：<input type="text" name="address"/><br/><br/>
            标题：<input type="text" name="title"/><br/><br/>
            内容：<textarea cols="40" rows="5" name="content"></textarea><br><br>
            <input type="submit" value="发送" >
        </form>
       
    </body>
</html>