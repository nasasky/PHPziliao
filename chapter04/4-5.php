<?php
	$arr[0] = 123;
	$arr[1] = 456;
	$arr[2] = 'hello';
	echo '删除前:'.'<br/>';
	print_r($arr);
 	unset($arr); //删除$arr[1]元素
 	echo '<br/>'.'删除后:'.'<br/>';
	print_r($arr);
?>
