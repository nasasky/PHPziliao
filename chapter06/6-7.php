<?php
 	//创建可抛出一个异常的函数
 	function checkNum ($number){
 		if($number > 1){
 	         //抛出异常
 			throw new Exception("Value must be 1 or below");
 		}
 		return true;
 	}
 	//可能触发异常的代码
 	try{
 		checkNum(2);
	}
 	//捕获异常
 	catch(Exception $e){
		echo 'Message: ' .$e->getMessage();
	}
?>
