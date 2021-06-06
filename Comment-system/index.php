
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Comment System </title>
</head>
<body>
	<div class="wrapper">
		<form action="comment.php" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<input type="text" name="name"  placeholder="Enter your Name" required>
				</div>
			</div>
			<div class="input-group textarea">
				<textarea  name="comment" placeholder="Enter your Comment. . . . ." required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
<?php
   $conn = mysqli_connect("localhost","aaditya","test1234","comments_db");
   if(!$conn)
    {
      echo "Connection failed!";
    }
   else
    {
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

	?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
    }
			?>
		</div>
	</div>
</body>
</html>
