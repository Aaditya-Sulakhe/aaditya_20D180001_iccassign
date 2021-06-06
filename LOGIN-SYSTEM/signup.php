<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="design.css">
  </head>
  <body>
    <form class="" action="signup-check.php" method="post">
       <h2>SIGN UP</h2>

       <?php if(isset($_GET['error'])) { ?>
         <p class = "error"> <?php echo $_GET['error']; ?> </p>
       <?php } ?>
       <?php if(isset($_GET['success'])) { ?>
         <p class = "success"> <?php echo $_GET['success']; ?></p>
       <?php } ?>

       <input type="text" name="fullName" value="" placeholder="Full Nmae" required>
       <input type="email" name="email" value="" placeholder="Email" required>
       <input type="text" name="uname" value="" placeholder="User Name" required>
       <input type="password" name="password" placeholder="Password" required>
       <input type="password" name="rePassword" placeholder="Re-password" required>
       <button type="submit">Sign Up</button>
       <a href="index.php" class="ca">Already have an account ?</a>

    </form>
  </body>
</html>
