<?php
	//定义一个处理错误的函数
	function customError($errno, $errstr){ 
 	 	echo "<b>Error:</b> [$errno] $errstr";
 	}
 	//调用自定义错误处理程序
 	set_error_handler("customError");
 	echo($student); //输出一个未定义的变量
?>
