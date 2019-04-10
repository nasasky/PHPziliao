 <?php
 	class Person{
 		public $name;//成员属性$name，存储姓名
 		public $age; //成员属性$age，存储年龄
 		//声明一个构造方法，将来创建对象时，为对象的成员属性赋予初始值
 		function __construct($name,$age){
 			//使用传入的参数$name为成员属性$this->name赋初值
 			$this->name = $name; 
 			//使用传入的参数$age为成员属性$this->age赋初值
 			$this->age = $age;    
 	    }
 	    function show(){
			echo $this->name.' = '.$this->age;
 	    }
 	}
	$p1 = new Person("kimi",9);
	$p1->show();
?>
