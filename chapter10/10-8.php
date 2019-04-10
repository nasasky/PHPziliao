<?php
	//编写函数checkQQ()来校验QQ号码格式的合法性
	function checkQQ($qq){
 		$qq_pattern =  "/^[1-9][0-9]{4,}$/";
   		if (preg_match($qq_pattern,$qq) == 1) {
 			$result = $qq."是合法的QQ号码.<br>";
		} else if (preg_match($qq_pattern,$qq) == 0) {
			$result = $qq."不是合法的QQ号码.<br>";
   		}
 		echo $result;
 	}
	checkQQ("helloworld");         //错误号码，QQ号码不能以0开头
	checkQQ("1254571");            //正确号码
	checkQQ("1200");                //错误号码，QQ号码最短是5位
	checkQQ("58349058304");       //正确号码
?>
