<?php 

session_start();

// destroying the session
session_destroy();

// redirect back to home page
header('Location: /php_course/13_sessions.php');