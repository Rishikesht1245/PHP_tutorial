<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// echo $_GET['name'];
// echo $_GET['age'];

// Accessing values from post 

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}else{
    echo "No post values";
};
?>

<!-- This will refreshes the page and appends the name parameter to the URL -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=bjohnrad&age=30">Click</a>


<!-- Form : GET -->
<!-- $_GET['name'] and age will take the value input in form -->
<!-- action : pointing to the same php file -->
<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<div>
    <label for="name">Name:</label>
    <input name="name" type="text"/>
</div>
<div>
    <label for="age">Age:</label>
    <input name="age" type="number"/>
</div>
<input type="submit" name="submit" value="Submit">
</form> -->

<!-- FORM : POST -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input name="name" type="text"/>
</div>
<div>
    <label for="age">Age:</label>
    <input name="age" type="number"/>
</div>
<input type="submit" name="submit" value="Submit">
</form>