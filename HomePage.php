<?php
 session_start();
?>
<!DOCTYPE html>


<html>

<head>
   <meta charset="utf-8" />
   <title> الصفحة الرئيسية</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
 
 <?php 
 if (isset($_SESSION["em"])){
     
     if (time() - $_SESSION["Last_active"] > 60) {
                   session_unset();
                   session_destroy();
         header("Location:Login.php");
     
       
     }else{
         $_SESSION["Last_active"] = time();
     }
 }
 
 
 	        include 'header.php';

 
 ?>
 

</body>



</html>