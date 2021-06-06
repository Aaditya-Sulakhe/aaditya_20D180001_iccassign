<?php
session_start();

 if(isset($_SESSION['id']) && isset($_SESSION['userName']) && isset($_SESSION['fullName']) && isset($_SESSION['email']))
  {
    $conn = mysqli_connect("localhost","aaditya","test1234","interns_db");

    if(!$conn)
     {
      echo "Connection failed!";
     }
    else
     {

       $fullName = $_SESSION['fullName'];
       $userName = $_SESSION['userName'];
       $email = $_SESSION['email'];

       $sqlQuery = "SELECT * FROM internship_3 WHERE userName = '$userName'";
       $result = mysqli_query($conn,$sqlQuery);

       if(mysqli_num_rows($result)>0)
        {
          header("Location:home.php?msg=You have already applied for internship_3.");
          exit();
        }
       else
        {

  ?>

  <!DOCTYPE html>
  <html>
  <head>
      <title>File Upload</title>
  </head>
  <body>

  <form method="post" enctype="multipart/form-data">
      <label>Resume Upload</label>
      <input type="File" name="file">
      <input type="submit" name="upload">
  </form>

  </body>
  </html>

  <?php

  if (isset($_POST["upload"]))
   {
       $filename = rand(1000,10000)."-".$_FILES["file"]["name"];

       $tname = $_FILES["file"]["tmp_name"];


  $uploads_dir = 'Resumes';
      move_uploaded_file($tname, $uploads_dir.'/'.$filename);



      $sqlQuery2 = "INSERT INTO internship_3(fullName, userName, email, resume) VALUES ('$fullName','$userName','$email', '$filename')";
      $result2= mysqli_query($conn,$sqlQuery2);

      if($result2)
      {
       //echo "<script>alert('File added successfully.')</script>";
       header("Location:home.php");
       exit();
      }
      else
       {
         echo "<script>alert('File not uploaded.')</script>";
         header("Location:home.php");
         exit();
       }
     }

   }

  }
}
 else
 {
  header("Location:home.php");
  exit();
 }
 ?>
