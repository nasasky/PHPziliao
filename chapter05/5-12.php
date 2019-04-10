<?php
	//定义Animal类
	class Animal{  
		//动物叫的方法
		public function shout(){  
			echo "动物发出叫声";  
		}  
	}  
	//定义Dog类继承自Animal类
	class Dog extends Animal{  
		//定义狗叫的方法
		public function shout(){  
			echo '汪汪......';  
		}  
	}  
	$dog=new Dog();  
	$dog->shout();   
?>
