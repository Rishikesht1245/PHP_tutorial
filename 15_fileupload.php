<?php
// here submit and upload are names provided by us
 if(isset($_POST['submit'])){

      $allowed_ext = array("png", "jpeg", "jpg", "gif");
      if(!empty($_FILES['upload'])){
            print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];

            // uploading to directory
            $target_dir = "uploads/${file_name}";

            // get file extension : explode create an array from a string
            $file_ext = explode(".", $file_name);
            // returns end value of an array : end
            $file_ext = strtolower(end($file_ext));
            echo $file_ext;

            // Validate file extension
            if(in_array($file_ext, $allowed_ext)){
                  // file size : 1 mb
                  if($file_size <= 1000000){
                        // in-build method : $file_tmp : temporary location
                         move_uploaded_file($file_tmp, $target_dir);
                         $message = '<p style="color:green;">File uploaded.</p>';

                  }else{
                        $message = '<p style="color:red;">The file is too large.</p>';

                  }
            }else{
                  $message = '<p style="color:red;">Invalid file type.</p>';

            }
      }else{
            $message = '<p style="color:red;">Please choose a file.</p>';
      }
 }
?>


<!-- Form -->
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <!-- message to display when no file -->
      <?php echo $message ?? null; ?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            Select form to upload
            <input type="file" name="upload">
            <input type="submit" value="submit" name="submit">
      </form>
</body>
</html>