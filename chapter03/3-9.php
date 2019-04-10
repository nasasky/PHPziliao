<?php
 	$str = "apple,pear,banana,orange";   //定义字符串$str
 	$arr = explode(",",$str);              //用逗号对$str字符串进行分割
 	echo "第一次分割的结果为：";
 	print_r($arr);                           //输出数组中的元素
 	echo "<br>";                             //换行
 	//用逗号对$str字符串进行分割，限制返回字符串个数为2
 	$arr = explode(",",$str,2);           
 	echo "第二次分割的结果为：";
 	print_r($arr);
?>
