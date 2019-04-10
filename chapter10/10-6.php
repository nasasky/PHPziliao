<?php
 	//编写checkEmail()函数，输出电子邮箱格式校验的结果
 	function checkEmail($email){
    	$email_pattern = "/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
   		//preg_match()函数用来校验邮箱格式的正确性
 		if (preg_match($email_pattern,$email) == 1){
 	 		$result = $email." 是合法的邮箱格式.<br>";
 		} else if (preg_match($email_pattern,$email) == 0) {
 			$result = $email." 不是合法的邮箱格式.<br>";
    	}
 		echo $result;
 	}
 	//以下通过checkEmail()函数来验证四个邮箱格式
 	checkEmail("test@itcast.cn");
 	checkEmail("test123@126.com");
 	checkEmail("test@com.");
 	checkEmail("123@com.126@com");
?>
