<?php
	session_start();
	//指定删除session某一个数据
	unset($_SESSION['bookname']);
	//清空session的值
	$_SESSION = array();
	//销毁session
	session_destroy(); 
	echo " sessionid = ".session_id();
?>
