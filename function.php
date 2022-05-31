<?php
//function definition
function sayHello(){
    echo "Ossu!<br>";
}
//function call
sayHello();

// function with arguments
function add($arg1, $arg2){
    echo $arg1+$arg2."<br>";
}
add(10,20);

// function with return type
function add_arg($arg1, $arg2){
    return $arg1+$arg2;
}
$val = add_arg(10,20);
echo "addition:".$val."<br>";

//function with default argument type
function welcome($user="Guest"){
    echo "Hello $user<br>";
}
//overrides default
welcome("admin");
//uses default
welcome();
?>