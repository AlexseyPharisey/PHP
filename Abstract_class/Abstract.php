<?php
	abstract class Myclass{
		abstract function save(): void;
		abstract function new(): void;
		public function getName($variabile){
			return "{$variabile}";
		}
	}

	class MyChild extends Myclass{
		public function save(): void{
			print "save"."\n";
		}
		public function new(): void{
			print "new"."\n";			
		}
	}
	$class1 = new MyChild;
	$class1->save();
	$class1->new();
	echo $class1->getName('qwefqwfqwfq')."\n";
?>