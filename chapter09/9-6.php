<?php
 	//取出session
 	session_start();
 	$_SESSION['bookname'] = '天龙八部';
 	$val = $_SESSION['bookname'];
 	echo 'val = '.$val; //输出$val的值
?>
