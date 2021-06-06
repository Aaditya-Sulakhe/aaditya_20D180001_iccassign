<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="design.css">
  </head>
  <body>
     <form class="" action="login.php" method="post">
       <h2> Login </h2>
       <?php if(isset($_GET['error'])) { ?>
              <p class = "error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
       <input type="text" name="uname" value="" placeholder = "Username" required> <br>
       <input type="password" name="password" value="" placeholder = "Password" required> <br>
       <button type="submit" name="button">Login</button>
       <a href="signup.php" class = "ca">Create an account</a>
     </form>
  </body>
</html>
