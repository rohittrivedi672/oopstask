<?php

//How multiple inheritance is handled in PHP? Give example.
/*

A class in php can only inherit one class.
which means PHP doesn’t support multiple inheritance but 
we can still acheive this by two ways
  [1]by using Traits


  [2]by using Interfaces 
 
 
  


Multiple Inheritance is the property of the Object Oriented Programming languages in which child class or sub class can inherit the properties of the multiple parent classes or super classes.


*/
/////////////////////  {1}by using traits//////////////////
class Hello { 
     public function sayHello() { 
	echo "<br>"."Hello "."<br>"; 
     } 
} 

// Trait 
trait Tra { 
   public function sayWorld() { 
	echo "<br>"."world"."<br>"; 
   } 
} 


class child2 extends Hello {  
  use Tra; // we have to use 'use ' keyword for using traits inside class.
  
  public function childFunc() { 
	echo "child class"; 
  }   
} 

$test = new child2(); 
$test->sayHello(); 
$test->sayWorld(); 
$test->childFunc(); 




////////////////////// {2}>by using interface//////////////////

class A { 
    public function insideA() { 
	echo "I am in class A <br>"; 
	} 
} 

interface B { 
    public function insideB(); 
} 

class child extends A implements B { 

	public function insideB() { 
		echo "interface defined in child class<br>"; 
	} 

	public function insidemultiple() { 
	       echo "child class<br>"; 
	} 
} 

$obj = new child(); 
$obj->insideA(); 
$obj->insideB(); 
$obj->insidemultiple(); 

?> 

