<?php	
	function binarySearch(&$arr, $findVal, $start, $end) {
		//当$end < $start 说明没有数
		if ($end < $start) {
			echo "找不到该数";
 			return;
		}
		//到中间这个数
		$mid = round(($end + $start) / 2);
		//如果大于中间数，则向后面找
		if ($findVal > $arr[$mid]) {
 			 binarySearch($arr, $findVal, $mid + 1, $end);
		}
		//如果是小于中间数，则向前面找
		else if ($findVal < $arr[$mid]) {
			binarySearch($arr, $findVal, $start, $mid - 1);
		} else {
			echo "找到这个数，下标是 $mid";
		}
 	}
	$arr = array(2, 3, 5, 8, 9);
	echo binarySearch($arr,8,0,count($arr) - 1);
?>
