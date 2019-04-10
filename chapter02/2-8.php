<?php 
 	$a = true ;
 	$b = $a + 1;  // 布尔类型的数与整型相加
 	var_dump($b); 	
 	//字符型转换成整型，1.5e2 表示 1.5*（10*10）
 	$char1 = 1 + "-1.5e2"; //字符型数与整型数相加
 	var_dump($char1);
 	$char2 = 1 + "char"; // 字符型数与整型数相加
 	var_dump($char2);
 	$char3 = 1 + "10char"; // 字符型数与整型数相加
 	var_dump($char3);
 ?>
