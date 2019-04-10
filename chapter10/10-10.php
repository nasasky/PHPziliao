<?php
 	//编写函数checkID()来校验身份证号码格式的合法性
 	function checkID ($id){
		$id_pattern = "/^(\d{6})(18|19|20)?(\d{2})([01]\d)([0123]\d)(\d{3})(\d|X)?$/";
    	if (preg_match($id_pattern,$id) == 1) {
 			$result = $id."是合法的身份证号码.<br>";
		} else if (preg_match($id_pattern,$id) == 0) {
			$result = $id."不是合法的身份证号码.<br>";
     	}
		echo $result;
 	}
 	checkID("11010220130101021X");             //合法身份证号码
 	checkID("110102130101021");                //合法身份证号码
 	checkID("11010217130101021");              //非法身份证号码
?>
