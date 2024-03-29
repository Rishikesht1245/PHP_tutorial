<?php 
/* --------- OPERATORS ----------- */
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to  -- value + datatype matching
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if($age >= 18){
//     echo "You are old enough to vote";
// }else{
//     echo "sorry you are not old enough to vote"
// }

// "F - month, "j" - day, "H" - hour
$t = date("H");

// if($t < 12){
//     echo "Good morning";
// }else if($t > 12 && $t < 17){
//     echo "Good after noon";
// }else {
//     echo "Good evening";
// }



// checking for empty values :
$posts = ["First Post"];
// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo "There are no posts present";
// }


// Ternary Operators
// echo !empty($posts) ? $posts[0] : "There are no posts"


// checking empty using null collescasing operator
$firstPost = $posts[0] ?? null;
echo $firstPost;


// ---------- Switch ----------------
$fav_color = "red";
switch($fav_color){
    case 'red': 
        echo "Your favourite color is red";
        break;
    case "blue":
        echo "Your favourite color is blue";
        break;
    default : echo "Your favourite color is not listed";
}
?>