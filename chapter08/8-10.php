<?php
	function test(){
		$foo1 = "local variable";
		echo "foo in current scope:". $foo1."<br/>";
		echo "foo in global scope:".$GLOBALS['foo1']."<br/>";
		echo "foo in global scope:".$GLOBALS['foo2']."<br/>";
		echo "foo in global scope:".$GLOBALS['foo3']."<br/>";
	}
	$foo1 = "global variable1";
	$foo2 = "global variable2";
	$foo3 = "global variable3";
	test();
?> 
