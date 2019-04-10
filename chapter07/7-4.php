<?php
 	$url="http://www.sina.com.cn";	
 	$html=file_get_contents($url);
 	foreach($http_response_header as $name=>$value){
 		echo "$value"."<br/>";
 	}
?>

