 <?php
 	$arr = array('cctv-a', 'cctv-b', 'cctv-c');
 	echo'<pre>';
 	echo '分割后的数组为:'.'<br>';
 	print_r(array_chunk($arr, 2));
 	echo '<br>';
 	echo '分割后的数组为:'.'<br>';
 	print_r(array_chunk($arr, 2, true));   //第三个参数为可选参数,这里是指true的情况下
 	echo'<pre>';
?>
