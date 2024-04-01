<?php include 'includes/header.php' ?>  


<?php 
// Fetching data from database
$sql = 'SELECT * FROM feedback';
// $conn is included from header
$result = mysqli_query($conn, $sql);
// converting result into associated array
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

    <h2>Past Feedback</h2>
    <!-- Checking if feedback is already available or not -->
    <?php if(empty($feedback)): ?>
    <!-- Instead of curly braces we use like this endif  above don't use semicolon use colon-->
      <p class="lead mt-5">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
         <div class="card-body text-7">
           <?php echo $item['body'] ?>
         </div>
         <div class="text-secondary m-2 text-end">
          By <?php echo $item['name'] ?>
         </div>
      </div>
    <?php endforeach; ?>
  



   <?php include "includes/footer.php"?>

