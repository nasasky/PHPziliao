 <?php
 	//使用abstract关键字声明一个抽象类 
 	abstract class Animal{	
		//在抽象类中声明抽象方法
		abstract public function shout(); 
 	}
 	//定义Dog类继承自Animal类
	 class Dog extends Animal{
		//实现抽象方法shout()
 		public function shout()
		{
 			echo "汪汪......<br>";
 		}
 	}
	//定义Cat类继承自Animal类
	class Cat extends Animal{
 		//实现抽象方法shout()
 	 	public function shout()
 		{
 			echo "喵喵......<br>";
 		}
 	}
 	$dog=new Dog();
 	$dog->shout();
 	$cat=new Cat();
	$cat->shout();
 ?>
