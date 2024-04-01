<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x =0; $x<=10; $x++){
//     echo "Number = $x <br>";
// }

/* ------------ While Loop ------------ */
$x = 1;
while($x <= 15){
    echo "Number = $x <br>";
    // $x++; 
    $x = $x + 1;
}


/* ------------ Do While Loop ------------ */
// do{
//     // code to be executed
// }while(/*condition*/)


$x =1;
do{
    echo "Number " .$x . '<br/>';
    $x++;
}while($x <= 5);


/* ------------- FOR Each Loop ----------- */


$posts = ['First Post', "Second Post", "Third Post"];

// count === array.length
for($x=0; $x < count($posts); $x++){
    echo $posts[$x];
}

// for getting the element
foreach($posts as $post){
    echo $post;
}

// for getting the index and element
foreach($posts as $idx => $val){
    echo $idx . " - " . $val . '<br>';
}

$person = [
    'first_name' => "Rishikesh",
    "last_name" => "T",
    "email" => "rishikesht@gmail.com"
];

foreach($person as $key => $val){
    echo "$key - $val";
}
?>