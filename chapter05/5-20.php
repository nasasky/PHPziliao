<?php
 	//定义Animal接口
 	interface  Animal{
 		public function run();
 		public function shout();
 	}
 	//定义Dog类，实现了Animal接口
 	class Dog implements Animal{
 	 	public function run(){
 	 		echo "狗在奔跑<br>";
 		}
 		public function shout(){
 			echo "汪汪……<br>";
 		}
 	}
 	//定义Cat类，实现了Animal接口
	class Cat implements Animal{
	 	public function run(){
	 		echo "猫在奔跑<br>";
		}
		public function shout(){
			echo "喵喵……<br>";
		}
 	}
	$cat=new Cat();
	$cat->run();
	$cat->shout();
	$dog=new Dog();
	$dog->run();
	$dog->shout();
?>
