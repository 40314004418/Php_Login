<?php  

include("database/db_conection.php");  
$update=$_GET['update'];  
$update_query="update table users WHERE user_id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$update_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  