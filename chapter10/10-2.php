<?php
 	$str = "firstnumber123 secondnumber567";      //定义字符串变量$str
 	preg_match('/(\d)(\d)(\d)/i',$str,$arr);   //匹配字符串中有3个连续数字的
 	echo "<pre>";
 	print_r ($arr);
 	echo "<pre>";
?>
