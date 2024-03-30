<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to 
  be used across multiple pages.
  Unlike cookies, sessions are stored on the "server".
*/

// for accessing session values

session_start();
// Accessing values from post 
if(isset($_POST['submit'])){
    // ---- sanitizing using filter_input function
    // ---- INPUT_POST or INPUT_GET for POST and GET methods
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
   
    if($username == 'john' && $password === 'password'){
        $_SESSION['username'] = $username;
        // redirecting -- no space is allowed bw location and : (colon)
        header('Location: /php_course/extras/dashboard.php');
    }
}else{
    echo "Incorrect Login credentials";
};
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
method="POST">
<div>
    <label for="username">Username:</label>
    <input name="username" type="text"/>
</div>
<div>
    <label for="password">Password:</label>
    <input name="password" type="password"/>
</div>
<input type="submit" name="submit" value="Submit"/>
</form>