<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title2</title>
</head>
<body>
<div>用户登录系统</div>
<div>
    <form name="form1" method="post" action="">
        账号：  <input type="text" name="id"  ><br>
        密码：  <input type="password" name="pwd" ><br>

        验证码 ： <input type="text" name="contents"><br>
        <img src="login" onclick="this.src='login/'+Math.random()" alt=""/>
        <input type="submit" value="提交">
    </form></div>
</body>
</html>