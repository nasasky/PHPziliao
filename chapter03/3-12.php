<?php
	$str1 ="123";
	$str2 = "123";
	//字符串相等时返回是0，所以要想执行if下面的语句，就应该加一个逻辑运算符“!”
	if(strcmp($str1,$str2)){      
 		echo "比较结果非0，表示两个字符串不相等<br>";
	} else {
   		echo "比较结果为0，表示两个字符串相等<br>";
	}
	if($str1 == $str2){
  		echo "比较结果为true，表示两个字符串相等<br>";
	} else {
 	     echo "比较结果为false，表示两个字符串不相等<br>";
	}
?>
