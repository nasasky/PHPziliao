<?php
 	$arr1 = array(
		"os" => "Linux",
		"server" => "Apache",
		"language" => "PHP",
 		"database" => "MySQL"
 	);
	//foreach语句遍历数组
	foreach ($arr1 as $value) {          //无键名遍历
 		echo $value;
		echo "<br />";
 	}
 	echo "<br />";
 	foreach ($arr1 as $key => $value){ //键值对的遍历
		echo $key;
		echo " => ";
		echo $value;
		echo "<br />";
	}
?>
