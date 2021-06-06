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

     $uname = testInput($_POST['uname']);
     $pass = testInput($_POST['password']);

     $pass = md5($pass);
     $sqlQuery = "SELECT * FROM users WHERE userName = '$uname' AND password = '$pass'";
     $result = mysqli_query($conn,$sqlQuery);

     if(mysqli_num_rows($result) === 1)
      {
        $row = mysqli_fetch_assoc($result);
        if($row['userName'] === $uname && $row['password'] === $pass)
         {
           $_SESSION['userName'] = $row['userName'];
           $_SESSION['fullName'] = $row['fullName'];
           $_SESSION['id'] = $row['id'];
           $_SESSION['email'] = $row['email'];
           header("Location:home.php");
           exit();
         }
        else
         {
           header("Location:index.php?error=Incorrect username or password");
           exit();
         }
      }
     else
      {
				header("Location: index.php?error=Incorect user name or password");
		        exit();
      }
   }





 ?>
