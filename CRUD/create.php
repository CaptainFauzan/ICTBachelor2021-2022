<?php include "dblink.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<title>FORM | create user</title>
</head>
<body>

<h1 align="center" >USER MANAGEMENT SYSTEM</h1>
<h3 align="center">Add user to Database.</h3>

<div class="container text-center mt-5">
		<a href="home.php" class="btn btn-warning mt-2"> Back </a>
	</div>
	
<div class="container">
	<form action="" method="POST" >
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
		<input type="submit" name="create" class="btn btn-primary mt-3" value="submit">
		</div>
	</form>
	
</div>
</body>
</html>

<?php
	$con = mysqli_connect('localhost','root','','repeat');
	
	if($con)
	{
		if(isset($_POST['create']))
		{
			$Name="";
			if(isset($_POST['Name']))
			{
				$Name=$_POST['Name'];
			}
			
			$Email="";
			if(isset($_POST['Email']))
			{
				$Email=$_POST['Email'];
			}
			
			$Salary="";
			if(isset($_POST['Salary']))
			{
				$Salary=$_POST['Salary'];
			}
			
			$sql = "SELECT * FROM form where Email='$Email'";
			$result = mysqli_query($con,$sql);
			
			if(mysqli_num_rows($result)>0)
			{
				echo "User already exist.";
			}
			else{
				$sql2="INSERT INTO form (Name,Email,Salary) VALUES ('$Name','$Email','$Salary')";
				$result2 = mysqli_query($con,$sql2);
				if($result2)
				{
					echo "Registered.";
				}
				else{
					echo "Failed to register.";
				}
			}
		}
	}
	
	else{
		echo "Database not found.";
	}
	
	
?>

