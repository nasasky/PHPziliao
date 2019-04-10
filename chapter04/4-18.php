<?php
 	$array = array(0 => "ttg", "name" => "dandy");
 	print_r(array_keys($array));//获取元素中所有的键名
 	echo '<br>';
	print_r(array_keys($array, "dandy"));//获取元素中dandy对应的键名
	echo '<br>';
	$array = array(11, 12, 32, "11"); 
	print_r(array_keys($array, "11", false));//获取元素11（不依赖类型）
	echo '<br>';
 	print_r(array_keys($array, "11", true));//获取字符串类型的元素"11"
?>
