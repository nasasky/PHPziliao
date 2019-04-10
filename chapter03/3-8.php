<?php
	// 下面的函数使用递归实现 求1~n的和
	function getSum($n) {
		if ($n == 1) {          // 满足条件，递归结束
 			return 1;            
		}
		$temp = getSum($n - 1);
		return $temp + $n;
 	}
	echo "sum = ".getSum(4); // 调用递归函数，打印出1~4的和
?>
