<?php
	$arr[0] = 123;
	$arr[1] = 456;
	$arr[2] = 'hello';
	echo '**删除前**<br/>';
 	print_r($arr);
	unset($arr[1]); //删除整个数组
	echo '<br/>**删除后**<br/>';
	print_r($arr);
?>
