 <?php
 	$arr1 = array(
 		"os" => "Linux",
 		"server" => "Apache",
 		"language" => "PHP",
 		"database" => "MySQL"
 	);
 	//结合each()、list()和while实现数组遍历
	while (list($key,$value) = each($arr1)) {
		echo "$key => $value";
 		echo "<br />";
 	}
 ?>
