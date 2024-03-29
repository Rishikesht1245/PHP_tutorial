<?php
// ----- echo outputs string numbers etc..
// echo "hello123"
// echo 123, "hello"


// ----- print - similar to echo but a bit slower and can only take a single argument
// print "123";

// ----- print_r() - function to print single values and arrays
// print_r([1,2,3])

// ----- var_dump() -- function to print more details like data type, length along with the value.
// var_dump([1,2,3])

// ---- var_export() -- Outputs a string representation of a variable
// var_export("hello") // output will be "hello"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outputs</title>
</head>
<body>
    <!-- accessing values from server -->
    <h1><?php echo "Post One" ?></h1>
</body>
</html>