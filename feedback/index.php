
<!-- Bringing header and footer into this using include function -->
<?php include "includes/header.php"?>


<!-- Form submit functionality -->
<?php 
 $name = $email = $body = "";
//  error variables
$nameErr = $emailErr = $bodyErr = "";

// form submit
if(isset($_POST['submit'])){
  // validate name
  if(empty($_POST['name'])){
    $nameErr = "Name is required.";
  }else{
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  };
  // validate email
  if(empty($_POST['email'])){
    $emailErr = "Email is required.";
  }else{
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  // validate Body
  if(empty($_POST['body'])){
    $bodyErr = "Feedback is required.";
  }else{
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


  if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
    // Adding feedback to the database
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
    if(mysqli_query($conn, $sql)){
      // adding successfull
      header('Location: feedback.php');
    }else{
      // error in adding to database
      echo "Error: " . mysqli_error($conn);
    }
  }
};


?>

    <img src="/php_course/feedback/img/image.png" class="w-25 mb-3" alt="logo">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for PHP Course</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="mt-4 w-75" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <!-- is-ivalid is required to show the content inside the invalid-feeback div -->
        <input type="text" class="form-control <?php echo !$nameErr ? "" : "is-invalid" ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control  <?php echo !$emailErr ? "" : "is-invalid" ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control  <?php echo !$bodyErr ? "" : "is-invalid" ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
    <?php include "includes/footer.php"?>