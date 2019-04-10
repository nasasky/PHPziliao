<?php	
 	$arr = array(2, 3, 5, 8, 9);
 	function search(&$arr, $findVal) {
		$flag = false;
		for ($i = 0; $i < count($arr); $i++) {
			if ($findVal == $arr[$i]) {
				echo "找到了，下标为$i";
				$flag = true;
			}
		}
		if (!$flag) {
			echo "查无此数";
		}
 	}
	echo search($arr,8);
?>
