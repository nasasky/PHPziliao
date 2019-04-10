 <?php
	class Person{
		public function show(){
			echo "大家好，我是Person类的对象<br>";
		}
		//声明析构方法，在对象销毁前自动调用
		function __destruct(){
			echo "对象被销毁";
		}
	}
 	$p1 = new Person();
	$p1->show();
?>
