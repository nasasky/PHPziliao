<?php
 	header("Content-Type:text/html;charset=utf-8");
 	//开启session
 	session_start();
 	//获取用户输入的验证码字符串
 	$code = trim($_POST["captcha"]);
 	//将字符串都转成小写然后再进行比较
  	if (strtolower($code) == strtolower($_SESSION['captcha_code'])){
		echo "验证码正确";
 		//获取到用户名和密码
 		$username = $_POST["username"];
 		$password = $_POST["password"];
		if(($username == 'itcast') && ($password == '123456')){
 			echo '你好'.$username.',登录成功';
 		}else{
 			echo '用户名或者密码错误！';
 		}
 	} else{
		echo "验证码输入错误";
	}
?>
