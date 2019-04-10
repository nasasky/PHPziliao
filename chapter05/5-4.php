<?php 
 	class Person {
		private $name; //将$name属性封装
 		private $age;  //将$age属性封装
		//定义__get()方法用于获取Person的属性
		public function __get($property_name){
			echo "自动调用__get()方法获取属性值<br>";
			if(isset($this->$property_name)){
				return($this->$property_name);
			}else{
				return(NULL);
			}
		}
		//定义__set()方法用于设置Person的属性
		public function __set($property_name,$value){
			echo "自动调用__set()方法为属性赋值<br>";
			$this->$property_name=$value;
		}
	}
	$p1=new Person();
	$p1->name = "张华";
	$p1->age = 10; 
	echo "姓名：".$p1->name."<br>";
	echo "年龄：".$p1->age; 
?>
