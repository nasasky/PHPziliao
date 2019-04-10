<?php 
 	$grade = 75;    // 定义学生成绩
	if($grade > 80) {
		// 满足条件$grade > 80
		echo "该成绩的等级为优" ;
	} elseif($grade > 70) {
		// 不满足条件$grade > 80 ，但满足条件$grade > 70 
		echo "该成绩的等级为良" ;
 	} elseif($grade > 60) {
		// 不满足条件$grade > 70 ，但满足条件$grade > 60 
		echo "该成绩的等级为中" ;
	} else {
		// 不满足条件$grade > 60 
		echo "该成绩的等级为差" ;
	}
?>
