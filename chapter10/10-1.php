<?php  
 	$subjects = array(            //创建数组$subjects
 	 	"Mechanical Engineering", 
 	 	"Medicine",  
	 	"Social Science", 
 	 	"Agriculture",  
	 	"Commercial Science", 
 	 	"Politics"  
 	);  
 	//匹配仅由一个单词组成的科目名  
 	$alonewords = preg_grep("/^[a-zA-Z]*$/", $subjects);  
 	echo "<pre>";
 	print_r ($alonewords);     //输出结果
 	echo "<pre>";
?>
