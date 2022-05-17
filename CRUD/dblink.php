<?php
	define('DB_SERVE','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','repeat');
	
	$con = mysqli_connect(DB_SERVE,DB_USERNAME,DB_PASSWORD,DB_NAME);
	if($con === false)
	{
		die("Failed to connect to database". mysqli_connect_error());
	}
?>