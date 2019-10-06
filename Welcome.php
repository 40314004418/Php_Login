<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  

  
?>  
  
<html>  
<head>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>  
        Registration  
    </title>  
</head>  
  
<body> 
 
Welcome  
<?php  
echo $_SESSION['email'];  	
?>

  
<h1><a href="logout.php">Logout here</a> </h1>  
  
  
</body>  
  
</html> 