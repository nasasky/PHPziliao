<?php
 	$str = "firstnumber123 secondnumber456";
 	preg_match_all('/(\d)(\d)(\d)/i',$str,$arr); 
 	echo "<pre>";
 	print_r ($arr);
 	echo "<pre>";
?>
