<?php include"dblink.php" ?>
<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM form WHERE id = $userid ";
      $view_users= mysqli_query($con,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $user = $row['Name'];
          $email = $row['Email'];
          $pass = $row['Salary'];
        }
 
    //Processing form data when form is submitte
    if(isset($_POST['update'])) 
    {
      $user = $_POST['Name'];
      $email = $_POST['Email'];
      $pass = $_POST['Salary'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE form SET Name = '{$user}' , Email = '{$email}' , Salary = '{$pass}' WHERE id = $userid";
      $update_user = mysqli_query($con, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<title>FORM</title>
</head>
<body>

<h1 align="center">UPDATE</h1>
<div class="container">
	<form action="" method="POST">
		<div class="form-group">
			<label for ="user" class="form-label">USERNAME</label>
			<input type="text" name="Name" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label for ="email" class="form-label">EMAIL</label>
			<input type="email" name="Email" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label for ="salary" class="form-label">SALARY</label>
			<input type="int" name="Salary" class="form-control" required>
		</div>
		
		<div align="center">
		<br><input type="submit" name="update" class="btn btn-primary" value="update" required>
		</div>
	</form>
	
		
	<div class="container text-center mt-5">
		<a href="home.php" class="btn btn-warning mt-5"> Back </a>
	</div>
</div>
</body>
</html>