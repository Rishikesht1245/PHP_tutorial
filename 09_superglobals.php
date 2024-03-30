<?php
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

// gives information about the server in which the php is running
// var_dump($_SERVER); // associative array

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <!-- Some of the details provided by the $_SERVER variable -->
    <li><?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li><?php echo $_SERVER['DOCUMENT_ROOT']; ?></li> 
    <li><?php echo $_SERVER['SERVER_NAME']; ?></li> 
    <li><?php echo $_SERVER['SERVER_PORT']; ?></li> 
  </ul>
</body>
</html>