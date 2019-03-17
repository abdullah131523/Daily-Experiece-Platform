<?php
 session_start(); 
?>

<!DOCTYPE html>
               
 
<html>


<head>

        <meta charset="utf-8" />
        <title> إستعادة الرقم السري</title>
         <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>



<?php
    require 'db_connection.php';

  if(isset($_POST["submit"])){
      
      $_SESSION["email"] = $_POST["email"];
      $email = $_SESSION["email"];
      
      $sql = "select * from Creators where email = '$email'";
      
      $statement = mysqli_query($db , $sql);
      
     
      if (mysqli_num_rows($statement) == 1){
          
               
         $randomNumber = rand(1000,999999);
           $_SESSION["randomNumber"] = $randomNumber;
          $random = $_SESSION["randomNumber"];
          $to = $email;
          $title = "Reset Password for Daily Experience Platform";
          $body = $randomNumber;
        echo $txt;
             $value = $txt;
          $From = "From: dailyExperiencePlatform@gmail.com" . "\r\n" ;
          mail($to,$title,$body,$From);
            
          
              header("Location:CodeValidationPassword.php");
     
          
           
              }
              }
              
     include 'header.php';
   
?>

 
 
    <form id = "form"     onsubmit = "return validate_form_forget()"  method = "POST" > 
        <label> استعادة كلمة المرور </label>
     
  <div>
       <input type="email" name="email"  id = "email" placeholder="الإيميل"  >
       <div id = email_error class = "content_error" ></div>
  </div>
  
         
      <input type="submit" name="submit" value = "بحث " >
    </form>
    
    
    <script  src="JS.js"></script>
</body>


        </html>