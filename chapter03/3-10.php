<?php
	//定义并初始化一个数组
	$fruit_arr = array("apple","pear","banana","orange"); 
	//通过“&”符将数组中的元素拼接起来
	$fruit_str = implode("&",$fruit_arr);	
	//输出新生成的字符串		
	echo "fruit_str = ".$fruit_str ;                 
?>
