<?php
 	//定义Animal接口
	abstract class  Animal{
	   	public abstract function shout();
 	}
	//定义Dog类，实现了Animal接口
	class Dog extends Animal{
 		public function shout(){
			echo "汪汪……<br>";
 		}
	}
 	//定义Cat类，实现了Animal接口
 	class Cat extends Animal{
 		public function shout(){
 			echo "喵喵……<br>";
		}
 	}
 	function   AnimalShout($obj){ 
 		if($obj instanceof Animal){
 			$obj->shout();
 		}else{
 			echo "Error: 对象错误！";
 		}
 	}
 	$cat=new  Cat();
 	$dog=new  Dog();
 	AnimalShout($cat);
 	AnimalShout($dog);
 ?>
