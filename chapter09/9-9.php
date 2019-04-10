<?php
 	header("Content-Type:text/html; charset=utf8");
 	session_start();
 	if (isset($_POST['login'])){
		//获取用户提交的数据
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if (($username == '') || ($password== '')){
 			header('refresh: 3; url=login.html');
 			echo "该用户名或者密码不能为空,3秒后跳转到登录页面";
 			exit;
		}else if  (($username != 'username') || ($password != 'password')){
 			//用户名或密码错误
 			header('refresh: 3; url=login.html');
 			echo "用户名或者密码错误,3秒后跳转到登录页面";
 		}else if (($username == 'username') && ($password== 'password')){
			//登录成功,将用户信息保存到session中
			$_SESSION['username'] = $username; 
			$_SESSION['islogin'] = 1; 
			//如果勾选7天内自动登录，则将其保存到Cookie
			if ($_POST['remember'] == "yes"){
				setcookie("username", $username, time() + 7*24*60*60);
				setcookie("code", md5($username . md5($password)), 
				time() + 7*24*60*60);
			} else{
				//没有勾选则删除Cookie
				setcookie("username", '', time() - 1);
				setcookie("code", '', time() - 1);
			}
			//跳转到用户首页
			header("location:index.php");
		} 
	}
?>
