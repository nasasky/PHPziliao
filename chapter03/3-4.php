<?php
	$var = 100;                        //定义全局变量$var
	function test(){
		global $var;   				//在test()范围内，使用函数外面的变量
	   	echo "在函数内部var的值为：".$var;        
	}
	test();
?>
