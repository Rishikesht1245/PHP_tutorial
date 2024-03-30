<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// echo $_GET['name'];
// echo $_GET['age'];

// Accessing values from post 
if(isset($_POST['submit'])){
    // if we pass any js scripts in the input it will be triggered so we need to wrap it with htmlspecialchars
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    // ---- sanitizing using filter_input function
    // ---- INPUT_POST or INPUT_GET for POST and GET methods
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // ---- sanitizing using filter_var option
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}else{
    echo "No post values";
};
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
method="POST">
<div>
    <label for="name">Name:</label>
    <input name="name" type="text"/>
</div>
<div>
    <label for="age">Age:</label>
    <input name="age" type="text"/>
</div>
<input type="submit" name="submit" value="Submit"/>
</form>