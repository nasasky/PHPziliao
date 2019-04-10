<?php 
	$sum = 0;               // 定义变量$sum，用于记住和
	for ($i = 1; $i <= 100; $i ++) {
		if ($i  % 2 == 0) { //$i 是一个偶数，不累加
			continue;       // 结束本次循环
		}
		$sum += $i ;        // 实现$sum和$i 的累加
	}
 	echo '$sum = '.$sum;
?>
