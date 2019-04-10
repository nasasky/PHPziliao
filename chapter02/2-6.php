<?php
 	$a = NULL;
 	//检测变量a是否属于空值类型
 	echo '检查是否为空：'.is_null($a);
 	$a = 'test';
 	echo '<br>';
 	//检测变量a是否属于字符串类型
 	echo '检查是否为字符串：'.is_string($a); 
 	$a = 5;
 	echo '<br>';
 	//检测变量a是否属于整型
 	echo '检查是否为整型：'.is_int($a); 
 	$a = 5.04;
 	echo '<br>';
 	//检测变量a是否属于浮点类型
 	echo '检查是否为浮点数：'.is_float($a); 
 	$a = '110';
 	echo '<br>';
 	//检测变量a是否属于数字或数字字符串
 	echo '检查是否为数字或数字字符串：'.is_numeric ($a); 
 	$a = true;
 	echo '<br>';
 	//检测变量a是否属于布尔类型
	echo '检查是否为布尔型：'.is_bool($a); 
 ?>



