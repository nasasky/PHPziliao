 <?php
 	//声明一个一维数组$arr1
 	$arr1 = array('百度', '新浪', '搜狐', '网易', '传智');
 	echo '一维数组$arr1中元素的个数为：';
 	echo count($arr1);
 	echo '<br>';
 	//声明一个二维数组$arr2
 	$arr2 = array(
 		'arr3' => array('a', 'b', 'c', 'd', 'e'),
 		'arr4' => array('1', '2', '3', '4', '5')
 	);
 	echo '二维数组$arr2中所有元素的个数为：';
 	echo count($arr2, 1);	//第2个参数为1,计算二维数组中所有元素的个数
 	echo '<br>';
 	echo '二维数组$arr2中一维数组的个数为：';
	echo count($arr2);		//默认模式为0,只输出二维数组中一维数组的个数 
  ?>
