<?php
 	//我们把冒泡排序封装成函数
 	function bubbleSort($arr) {
		$temp = 0; //这是一个中间变量
		$len = count($arr); //计算数组长度
		//我们要把数组从小到大进行排序
 		for ($i = 0; $i < $len - 1; $i++) {
 		 	for ($j = 0; $j < $len - 1 - $i; $j++) {
 			 	//如果前面的数比后面的数大，就进行交换
 			 	if ($arr[$j] > $arr[$j+1]) {
 				 	$temp = $arr[$j];
 				 	$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $temp;
	 	 	 	}
 	 	 	}
	 	}
 	 	return $arr;
 	}
 	$arr = array(9,8,3,5,2);
 	echo "<pre>";
 	print_r(bubbleSort($arr));
 	echo "</pre>";
?>
