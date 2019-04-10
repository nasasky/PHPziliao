 <?php
 	//定义Animal接口
 	interface  Animal{
 		public function run();
 		public function shout();
 	}
 	//定义LandAnimal接口
 	interface  LandAnimal{
 		public function LiveOnLand();	 
 	}
	//定义Dog类，实现了Animal和LandAnimal接口
	class Dog implements Animal,LandAnimal{
	 	public function LiveOnLand(){
			echo"狗在陆地上生活<br>";
	    }
 		public function run(){
 	 		echo "狗在奔跑<br>";
 		}
 		public function shout(){
			echo "汪汪……<br>";
		}
	}
	$dog=new  Dog();
	$dog->LiveOnLand();
    $dog->run();
	$dog->shout();
?>
