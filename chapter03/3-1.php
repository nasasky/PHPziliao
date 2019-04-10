<?php
	define("PI", 3.14);       	  //定义一个值为3.14的常量PI，注意PI需要加引号
	$r = 9;
	$s = getCircleArea($r);		 //调用函数getCircleArea()
	echo "圆形的面积为".$s;
	function getCircleArea($raduis){    
	  	$area = PI * $raduis * $raduis;
	   	return $area;
	}
?>
