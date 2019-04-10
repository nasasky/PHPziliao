<?php 
 	//以上列出变量为false的情况，对应以下6个变量
 	$a = 0;
 	$b = 0.0;
 	$c = "";
 	$d = "0";
 	$e = array();// 变量$e是一个数组类型
 	$f = NULL;    // 变量$f是一个NULL值
 	//在选择条件语句if中,判断变量是否等于布尔值false，是则输出对应的语句，否则无输出
 	if($a == false) echo '<br />变量$a转成布尔型为false';
 	if($b == false) echo '<br />变量$b转成布尔型为false';
 	if($c == false) echo '<br />变量$c转成布尔型为false';
 	if($d == false) echo '<br />变量$d转成布尔型为false';
 	if($e == false) echo '<br />变量$e转成布尔型为false';
 	if($f == false) echo '<br />变量$f转成布尔型为false';
 	//变量为true的情况举例
 	$var1 = 3;		//定义一个整型变量
	$var2 = 'name';	//定义一个字符型变量
	if($var1 == true) echo '<br />变量$var1转成布尔型为true';
 	if($var1 == true) echo '<br />变量$var2转成布尔型为true';
?>
