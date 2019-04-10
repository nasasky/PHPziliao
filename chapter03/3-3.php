<?php
 	$var = 100;                                  //此处$var是全局变量
 	function test(){
	   	echo "在函数内部var的值为：".$var;    //在函数内部调用全局变量$var
	}
	test();
?>
