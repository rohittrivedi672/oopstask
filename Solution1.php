<?php

///Demonstrate the concept of method chaing in PHP.
/*
When many methods are called in a single instruction, in PHP’s term it is called Method Chaining. 
//in above example we execute three methods with a single instruction.

 In order to chain methods ,a method should return the $this keyword,they can chained together to create much more shorter and self explaining code.
 
 for example-
  Lets say we have a class Car and we
 have few methods like,start(),accelerate(),stop(); 
 It is obvious that these methods are going to apply in sequence like this ,
 1->start()
 2->accelerate()
 3->stop()
 so instead of calling these methods seperately when we know the sequence ,we can call them using method chaining
*/

class abc{
  public function first(){
  echo "This is first function"."<br>";
  return $this;
  }
  public function second(){
  echo "This is second function"."<br>";
  return $this;
}
public function third(){
  echo "This is third function\n"."<br>";
}
}
$test = new abc();

$test->first()->second()->third();
?>
