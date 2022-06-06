<?php

class Student
{
    private $name;
    private $rollno;
    private $age;

public function __construct(){
    $name = "Kunal";
    $rollno=8;
    $age=19;

    echo $name,"<br>";
    echo $rollno,"<br>";
    echo $age,"<br>";
}

public function __destruct(){
    echo "Destructor is called";
}

}

$objC = new Student();

/*public function display(){
        echo $this->firstname;
        echo $this->lastname;
        echo $this->age;
    }
}

$objC = display();*/

?>