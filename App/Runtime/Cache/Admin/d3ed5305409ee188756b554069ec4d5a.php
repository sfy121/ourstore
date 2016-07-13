<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录(Login)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/7-4/Public/assets/css/reset.css">
        <link rel="stylesheet" href="/7-4/Public/assets/css/supersized.css">
        <link rel="stylesheet" href="/7-4/Public/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5.js"></script>
        <![endif]-->
        
    </head>

    
    <body>
       
        <div class="page-container">
            <h1>登录(Login)</h1>
            <form action="/7-4/index.php/Admin/Public/doLogin" method="post">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <div ><span style=color:red ><?php echo ($info); ?></span></div>
                <button type="submit" class="submit_button">登录</button>
                
            </form>
            
        </div>
         
         
        
        <!-- Javascript -->
        
    </body>

</div>
</html>