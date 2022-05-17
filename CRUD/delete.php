<?php include"dblink.php" ?>
<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM form WHERE id = {$userid}"; 
         $delete_query= mysqli_query($con, $query);
        header("Location: home.php");
        //header("location:index.php")
     }
  ?>