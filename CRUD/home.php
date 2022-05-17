<?php include"dblink.php" ?>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<div class="container">
	<h1 class="text-center">EMPLOYEE MANAGEMENT SYSTEM</h1>
	<a href="create.php" class='btn btn-success mb-2'><i class="bi bi-person-plus"></i>ADD</a>
	
	<table class="table table-striped table-bordered table-hover">
		<thead class="table-primary">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">FULL NAME</th>
				<th scope="col">EMAIL</th>
				<th scope="col">SALARY</th>
				<th  scope="col" colspan="3" class="text-center">ACTION</th>
				
				<?php
				//SQL query for feating data from database table
					$query="SELECT * FROM form";               
					$view_users= mysqli_query($con,$query);    

					while($row= mysqli_fetch_assoc($view_users)){
					  $id = $row['id'];                
					  $user = $row['Name'];        
					  $email = $row['Email'];         
					  $pass = $row['Salary'];        

					  echo "<tr >";
					  echo " <th scope='row' >{$id}</th>";
					  echo " <td > {$user}</td>";
					  echo " <td > {$email}</td>";
					  echo " <td >{$pass} </td>";

					  echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

					  echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

					  echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
					  echo " </tr> ";
                  }  
                ?>
				
			</tr>
		</thead>
	</table>
</div>