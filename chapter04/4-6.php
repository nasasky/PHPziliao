<?php
 	$a = array("a" => "George Milkan", "b" => "Bill Walton");
 	$b = array("a" => "Bill Russell", "b" => "Wilt Chamberlain", "c" => "Dave Cowens");
 	$c = $a + $b;    //$b数组的键和值加到$a
 	echo "\$a + \$b result<br/>";
	echo '<pre>';
	var_dump($c);
	echo '</pre>';
 	$c = $b + $a;
	echo "\$b + \$a result<br/>";
	echo '<pre>';
 	var_dump($c);
	echo '</pre>';
?>
