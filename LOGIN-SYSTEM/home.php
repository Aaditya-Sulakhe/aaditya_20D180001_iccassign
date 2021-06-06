<?php
 session_start();

  if(isset($_SESSION['id']) && isset($_SESSION['userName'])) {

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <div class="wrapper">
      <h1>Hello, <?php echo $_SESSION['fullName'] ; ?></h1> <br>
      <?php if(isset($_GET['msg'])) { ?>
      <p class = "msg"> <?php echo $_GET['msg']; ?></p>
      <?php } ?>
      <a href="logout.php">Logout</a> <br>
      <a href="internship_1.php" class = "single-item">Apply (internship 1)</a>
      <a href="internship_2.php" class = "single-item">Apply (internship 2)</a>
      <a href="internship_3.php" class = "single-item">Apply (internship 3)</a>
    </div>


  </body>
</html>

<?php

}else {
  header("Location:index.php");
  exit();
}

 ?>
