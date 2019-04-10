 <?php
 	//定义一个Person类 
 	class Person {
 		public $name; 
 		public $age;
 		public  function  speak(){
 	 		echo "大家好！我叫".$this->name."，今年".$this->age."岁。<br>";
 	 	}
 	}
 	$p1=new Person();
 	$p1->name = "张华";
	$p1->age = 10;
 	$p1->speak();
 	$p2=new Person();
 	$p2->name = "紫晴";
 	$p2->age = 13;
	$p2->speak();
?>
