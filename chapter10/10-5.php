<?php
	$pizza = "piece1 piece2,piece3 piece4 piece5 piece6";
	//分隔字符为空格或者逗号
	$pieces = preg_split('[\s|,]',$pizza);
	echo "<pre>"; 
	print_r($pieces);
	echo "<pre>";
?>
