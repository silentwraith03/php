<?php
class Student
{
    private $firstname;
    private $lastname;
    private $age;
    public function __construct($f,$l,$a){
        $this->firstname=$f;
        $this->lastname=$l;
        $this->age=$a;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getAge(){
        return $this->age;
    }
    public function __destruct(){
        echo "<br> Object is destroying<br>";
    }
}

$s1=new Student("Aman", "Jha", 19);
echo "<br> ". $s1->getFirstName();
echo "<br> ". $s1->getLastName();
echo "<br> ". $s1->getAge();

$s2=new Student("Ravi", "Mandal", 18);
echo "<br> ". $s1->getFirstName();
echo "<br> ". $s1->getLastName();
echo "<br> ". $s1->getAge();

?>


