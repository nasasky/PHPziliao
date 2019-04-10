<?php
	$str = '<a href="http://www.itcast.cn/">传智播客官方网站</a>';
	//用第二个子表达式匹配的结果替换整个字符串
	$string = preg_replace('/<a href="(.*?)">(.*?)<\\/a>/','$2', $str);
	echo $string;
?>
