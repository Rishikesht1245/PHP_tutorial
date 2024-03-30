<?php 

// Built in funcitons to work with arrays

$fruits = ["apple", "orange", "pineapple"];

// get length of the array
echo count($fruits);

// search array : in_array function is used
var_dump(in_array('apple', $fruits));

// add to array : no need to use index
$fruits[] = "grape";
// print_r($fruits);

// adding using push
array_push($fruits, "blueberry", "strawberry", "watermelon");
// print_r($fruits);

// adding element to the begginning of the array
array_unshift($fruits,"lemon");
// print_r($fruits);

// remove from an array
array_pop($fruits);
// remove from beginning
array_shift($fruits);
// removing element from the specified index
unset($fruits[2]);

// split into 2 chunks : 2 elements in each array 
$chunked_array = array_chunk($fruits, 3);
// print_r($chunked_array);


// array concatenation : Merging array
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
// print_r($arr3);

// using spread operator
$arr4 = [...$arr1,...$arr2,...$arr3];
// print_r($arr4)


// combining two array values
$a = ['green', 'red','yellow'];
$b = ['avacado', 'apple', 'orange'];
/* this will combine both arrays as key value pairs, 
array a will be the key and array b will be the values*/
$c = array_combine($a, $b);
// print_r($c);


// getting keys of an array as array elements
$keys = array_keys($c);
// print_r($keys);


// flipping array : keys become values and values become keys
$flipped = array_flip($fruits);
// apple => 0 like that
// print_r($flipped);

// range function : to create array with in the specified range
$numbers = range(1,20);
// print_r($numbers);

/* ---------- MAP , FILTER , REDUCE ---------- */
// map function
$newNumbers = array_map(function($number){
    return "Number : $number";
}, $numbers);
// print_r($newNumbers);

// filter function
$lessThan10 = array_filter($numbers, fn($number) => $number <=10);
// print_r($lessThan10);


// reduce function
$reduceSum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($reduceSum);
// print_r($fruits);
?>