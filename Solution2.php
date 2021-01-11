<?php
/*Create an interface A that has 2 methods,abstract class B implements the method and gives definition for 1 method.Create a concrete class and create its object .*/
interface A {

  public function A1();
  public function A2();
  
}

abstract class B implements A{
   public function A1(){
     echo" function A1 is called inside abstract class<br>";
   }
}


class xyz  extends B {
     private $id;
     private $name;
     
     public function __construct($name){
       $this->name=$name;
    
     }
     public function A2(){
        
        echo"function A2 called inside xyz class<br>";
     }
     public function setId($id){
        $this->id=$id;
     }
      public function getId(){
       return $this->id;
     }
     
      public function setName($name){
        $this->name=$name;
     }
     public function getName(){
        return $this->name;
     }
}
//object creation  of class abc
$obj =new abc("xyz");
$obj->A1();
$obj->A2();
$obj->setId(2);
echo $obj->getId();
echo "<br>";
$obj->setName("newname");
echo $obj->getName();

?>
