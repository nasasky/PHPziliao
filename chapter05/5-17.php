<?php
	function loader($classname){
 		require $classname . ".class.php";
 	}
 	spl_autoload_ register('loader');
 	$obj1 = new MyClass1();
 	$obj2 = new MyClass2();
 	var_dump($obj1);
 	var_dump($obj2);
?>
