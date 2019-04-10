<?php 
 	$x = 'a';
 	echo --$x.'<br/>';  //输出结果为：a
 	echo ++$x.'<br/>';	//输出结果为：b
	$x = 'z';
	echo ++$x.'<br/>'; 	//输出结果为：aa
	$x = 'Z';
	echo ++$x.'<br/>'; 	//输出结果为：AA
	$x = 'abcd';
	echo ++$x.'<br/>'; 	//输出结果为：abce
?>