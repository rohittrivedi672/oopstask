<?php
class Test
{
    private $skills;
    public function __construct($skills)
    {
        $this->skills = $skills;
    }

    public function totalSkills()
    {
        return count($this->skills);
    }
}

// Creating object of class Test
$skills = array("Django", "Python", "PHP", "Symfony");
$obj = new Test($skills);
echo $obj->totalSkills();
?>


<!-- ------------------------------------------------ -->



<!-- Sample Code for Setter injection -->
<?php
class Test
{
    private $skills;

    // Setter function
    public function setSkill($skills)
    {
        $this->skills = $skills;
    }

}

// Creating object of class Test
$obj = new Test();
$skills = array("Java", "Python", "cakephp", "Android");
$obj->setSkill($skills);



/*Dependency injection-

Dependency injection is a procedure where one object supplies the dependencies of another object. Dependency Injection is a software design approach that allows avoiding hard-coding dependencies and makes it possible to change the dependencies both at runtime and compile time.

There are three big problems with the class above.

When we want to add some new skill we should edit the class, which is not good. Every class should be written as a black box.you should be able to fully operate with the class only by using its public properties and variables.
What if we want to set different skills for the different instances of class Programmer. It is currently not possible, because the private property $skills is created inside the constructor of the class.
What if we have something more then an array. For example another object and that object has its own needs. Then we should send the needed things to Programmer class so we can initialize our variable.
*/?>