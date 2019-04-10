<?php
	$var = 100;                      
	function test(){
   		//使用$GLOBALS访问全局变量
        echo "在函数内部var的值为：".$GLOBALS["var"];        
	}
	test();
?>

