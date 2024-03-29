<?php 
// - - - - Simple Array - - - - 
$numbers = [1,22,33,4,5];
// using array function
$fruits = array("apple", "orange");

// print_r($fruits);
// var_dump($numbers);
echo $fruits[0];


// - - - - Associative Array - - - -
// here we can mention the index value along with the value
// we can store values as key value pairs in arrays [PHP]
$colors = [
    1 => "red",
    4 => "blue",
    6 => "Green"
];
echo $colors[4];

$hex = [
    'red' => "#f00",
    'blue' => "#0f0",
    'green' => "#00f"
];
echo $hex['blue'];

// : === we use => in php
$person = [
    'first_name' => "Rishikesh",
    'last_name' => "T",
    'email' => "rishikeshsynosys@gmail.com"
];

echo $person["first_name"];



// Multidimensional Arrays
$people = [
    [
        'first_name' => "Rishikesh",
        'last_name' => "T",
        'email' => "rishikeshsynosys@gmail.com"
    ],
    [
        'first_name' => "Aftab",
        'last_name' => "T",
        'email' => "rishikeshsynosys@gmail.com"
    ],
    [
        'first_name' => "Rejath",
        'last_name' => "T",
        'email' => "rishikeshsynosys@gmail.com"
    ]
 ];

 echo $people[1]['first_name'];

 // json_encode function is used to encode multidimensional array into json object 
 // json_encode function is mainly useful in APIs
 var_dump(json_encode($people))

?>