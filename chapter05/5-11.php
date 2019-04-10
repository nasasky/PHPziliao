<?php
	//定义Animal类
	class Animal{
		public $name;   
		public function shout(){
 	 		echo "动物发出叫声<br>";
	 	}
	}
 	//定义Dog类继承自Animal类
 	class Dog extends Animal{
  		public function printName(){
 	 		echo "name=".$this->name;
 	 	}
 	}  
 	$dog=new Dog();
 	$dog->name="沙皮狗";
 	$dog->shout();
 	$dog->printName();
?>
