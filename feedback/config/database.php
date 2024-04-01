<!-- Connecting using PDO : PHP Database Object -->
<?php 

// Defining constant variables
define('DB_HOST', 'localhost');
define('DB_USER', 'rishikesh');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// Creating Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if($conn->connect_error){
    // die function to cut everything off
    die("Connection failed" . $conn->connection_error);
}
?>