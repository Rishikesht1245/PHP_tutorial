<?php 
$string = "Hello world";

// length of the string
echo strlen($string); // 11

/* find the position of the first occurence of a 
substring in  a string */
echo strpos($string, "o"); // 4 
// last occurence
echo strrpos($string, "o"); // 7

// reverse a string
echo strrev($string);

// convert all chars to lower 
echo strtolower($string);
// upper characters
echo strtoupper($string);


// uppercase first character of each word
echo ucwords($string); // Hello World

// replace a word with another word
echo str_replace("world", "Everyone", $string);


// Return portion of the string specified by the offset and length
echo substr($string, 0,5); // Hello
echo substr($string, 5); // world


// starts with and ends with
if(str_starts_with($string, "Hello")){
    echo "Yes";
};

if(str_ends_with($string, "world")){
    echo "Yes";
};

// this will shows alert in browser.
$string2 = '<script>alert(1)</script>';
// if we don't want to parse it as html : use htmlspecialchars
echo htmlspecialchars($string2);
// echo $string2;

// string with placeholders
printf('%s likes to code %s', "rishi", "likes");
printf('1+2=%d', 1+2);
printf('1+2=%f', 1+2);
?>