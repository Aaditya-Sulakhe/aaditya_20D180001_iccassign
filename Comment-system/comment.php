<?php
//session_start();

if(isset($_POST['name']) && isset($_POST['comment']))
 {
 $conn = mysqli_connect("localhost","aaditya","test1234","comments_db");
  if(!$conn)
   {
     echo "Connection failed!";
   }
  else
   {
    function testInput($data)
     {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }

     $name = testInput($_POST['name']);
     $comment = testInput($_POST['comment']);

     $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
     $result = mysqli_query($conn, $sql);
     if ($result)
      {
        header("Location:index.php");
        exit();
      }
     else
      {
        header("Location:index.php");
        exit();
      }
   }
}
else {
  header("Location:index.php");
  exit();
}
