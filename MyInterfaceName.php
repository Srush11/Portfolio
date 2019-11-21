<?php 

interface MyInterfaceName{ 

	public function method1(); 
	public function method2(); 

} 

class MyClassName implements MyInterfaceName{ 

	public function method1(){ 
		echo "Method1 Called" . "\n"; 
	} 

	public function method2(){ 
		echo "Method2 Called". "\n"; 
	} 
} 

class MyClassName1 implements MyInterfaceName{ 

	public function method1(){ 
		echo "Method1 Called" . "\n"; 
	} 

	public function method2(){ 
		echo "Method2 Called". "\n"; 
	} 
} 

$obj = new MyClassName; 
$obj->method1(); 
$obj->method2(); 

$obj1 = new MyClassName1; 
$obj1->method1(); 
$obj1->method2(); 

?> 
