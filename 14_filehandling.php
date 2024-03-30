<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

// checking if file exists or not
if(file_exists($file)){
    // will read the values in the file
    // echo readfile($file);

    // open file for reading
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    fclose($handle);

    echo $contents;
}else{
    // Open file for reading
    // handle is like a pointer
    $handle = fopen($file, "w");
    // PHP_EOL :: PHP end of line
    $contents = "Brad" . PHP_EOL . "Sara";
    // create new file
    fwrite($handle, $contents);
    fclose($handle);
}