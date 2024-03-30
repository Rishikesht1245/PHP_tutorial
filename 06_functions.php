<?php 
// global scope
$y= 12;

function registerUser(){
    // function scope
    $x = 10;

    // variables with global scope are accessible using global variable
    global $y;
    echo $y;

    echo "User registered!";
}

// variables with function scope are not accessible outside
echo $x;
registerUser();


// function with parameter
function getUserEmail($email){
    echo $email . " registered";
}
getUserEmail("rishikesh@gmail.com");


// function with return value and optional arguments
function sum($n1 = 5, $n2 =7){
    return $n1 + $n2;
}
// echo sum(5,5);
echo sum();


// assigning function to a variable 
$subtract = function($n1, $n2){
    return $n1-$n2;
};

echo $subtract(10,7);


// arrow functions 
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(4,5)

?>