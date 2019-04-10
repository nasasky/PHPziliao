<?php
 	class Person{
 		private $name = "张三";
 		private $age = 21;
 		public function __toString(){
 			return "$this->name ($this->age)";
 		}
 	}
 	$p1 = new Person();
	echo $p1;
?>
