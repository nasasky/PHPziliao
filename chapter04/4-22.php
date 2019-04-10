<?php
 	$input = array("科比", "姚明", "詹姆斯", "艾佛森", "基德");
 	echo'<pre>';
 	echo '随机获取一个元素:'.'<br>';
 	print_r(array_rand($input));
 	echo '<br>';
 	echo '随机获取两个元素:'.'<br>';
 	print_r(array_rand($input, 2));
 	echo'<pre>';
 ?>
