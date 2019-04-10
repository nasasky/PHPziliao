<?php
	$arr1 = array(
		"os" => "Linux",
 		"server" => "Apache",
		"language" => "PHP",
		"database" => "MySQL"
 	);
	//使用数组指针结合while实现数组遍历
	while (current($arr1)) {
		echo key($arr1);        //获取当前元素的下标
		echo " => ";
		echo current($arr1);   //获取arr1数组指针多指向元素的值
		echo "<br />";
		next($arr1);             //将arr1的数组指针想前移动一位 
	}
?>
