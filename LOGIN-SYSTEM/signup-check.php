<?php

session_start();

$conn = mysqli_connect("localhost","aaditya","test1234","interns_db");
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

    $fullName = testInput($_POST['fullName']);
    $email = testInput($_POST['email']);
    $uname = testInput($_POST['uname']);
    $pass = testInput($_POST['password']);
    $rePass = testInput($_POST['rePassword']);

      if($pass !== $rePass)
       {
         header("Location:signup.php?error=The confirmation password  does not match.");
         exit();
       }
      else
       {
         $pass = md5($pass);

         $sqlQuery = "SELECT * FROM users WHERE userName = '$uname'";
         $result = mysqli_query($conn,$sqlQuery);

         if(mysqli_num_rows($result)>0)
          {
            header("Location:signup.php?error=The username is already taken try another.");
            exit();
          }
         else
          {
            $sqlQuery2 = "INSERT INTO users(fullName, userName, email, password) VALUES('$fullName','$uname','$email','$pass') ";
            $result2 = mysqli_query($conn,$sqlQuery2);
            if ($result2)
             {
            	 header("Location: signup.php?success=Your account has been created successfully");
 	             exit();
             }
            else
             {
 	           	header("Location: signup.php?error=unknown error occurred");
 		          exit();
             }
          }
       }
    }





 ?>
