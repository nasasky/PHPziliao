<?php
 	//编写checkMobile()函数，输出手机号码格式校验的结果
 	function checkMobile($mobile){
  	 	$mobile_pattern = "/^[1][358]\d{9}$/";
 	 	//preg_match()函数用来校验手机号码格式的正确性
    	if (preg_match($mobile_pattern,$mobile) == 1) { 
 	 		$result = $mobile."是合法的手机号码.<br>";
		} else if (preg_match($mobile_pattern,$mobile) == 0) {
			$result = $mobile."不是合法的手机号码.<br>";
   	 	}
 		echo $result;
 	}
 	//以下通过checkMobile()函数来验证4个电话号码格式
 	checkMobile("1381024571221");    //错误号码，不是11位
 	checkMobile("18922224544");      //正确号码
 	checkMobile("17547893141");      //错误号码，没有17这个号码段
 	checkMobile("15045000000");      //错误号码，没有150这个号码段
?>
