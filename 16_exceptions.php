<?php 
//* ------------------- EXCEPTIONS ----------------- */

/* 
 PHP has exception model similar to that of other programming languages. 
 An exception can be thrown, and caught within PHP. Code may be surrounded in 
 a try block, to facilitate the catching of potential exceptions. Each
 try must have at least one corresponding catch or finally block.
*/

function inverse ($x){
      // 0 
      if(!$x){
            // throwing uncaught exception
            throw new Exception("Division by Zero");
      }

      return 1/$x;
}

// if try catch is not there it will show fatal error when there is a exception
try {
      //code...
      echo inverse(0);
} catch (Exception $e) {
      // Division by Zero will be the message
      echo "Caught exception", $e->getMessage(), " ";
}finally{
      echo "First Finally";
}
?>