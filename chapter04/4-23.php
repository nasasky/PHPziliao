<?php
 	$input = array("ibm", 122, array("dell", "apple"));
 	$result = array_reverse($input);
 	echo '<pre>';
 	echo '返回一个元素顺序相反的数组:'.'<br>';
 	print_r($result);
 	$result_keyed = array_reverse($input, TRUE);
 	echo '返回一个元素顺序相反的数组:'.'<br>';
 	print_r($result_keyed);
	echo '<pre>';
?>
