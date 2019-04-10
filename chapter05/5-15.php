 <?php
 	class Animal{
 		final public function shout(){
 			//方法体为空
 		}   
 	}
 	class Bird extends Animal{
 		public function shout(){
 			//方法体为空
 	    }
 	}
 	$bird=new Animal();
 	$bird->shout();
?>
