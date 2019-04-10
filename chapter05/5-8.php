<?php
	class MathTool{
		const PI = 3.1415926; //定义一个类常量
		public function show(){
			echo MathTool::PI."<br>";  //通过类名访问
		}
		public function display(){
			echo self::PI."<br>"; 	    //通过self关键字访问
		}
	}
	echo MathTool::PI."<br>"; //在类外部直接访问
	$obj = new MathTool();     //实例化一个对象
	$obj->show();
	$obj->display();
?>
