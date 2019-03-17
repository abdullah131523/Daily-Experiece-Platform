<?php
 session_start(); 
?>

<!DOCTYPE html>
               
 
<html>


<head>

        <meta charset="utf-8" />
        <title>  التحقق بالرمز   </title>
         <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

    
    <body>
    
        <?php
        require 'db_connection.php';

         if (isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            $email =   $_SESSION["email"];
             $rr = $_SESSION["randomNumber"];
       
        if(isset($_POST['send'])){
            $recovery = $_POST["code_recovery"];
           
             if($rr == $recovery){
            
             header("Location:ResetPassword.php");
        }
         
         }
          
         }
            include 'header.php';

        ?>
 

    <form id = "form"   onsubmit = "return validate_form_CodeValidation()"   method = "POST" > 
        <label> التحقق لإستعادة الحساب </label>
     
  <div>
       <input type="text" name="code_recovery"  id = "code_recovery" placeholder="الرجاء إدخال رمز التحقق"  >
       <div id = code_recovery_error class = "content_error" ></div>
  </div>
  
  
      <input type="submit" name="send" value = "إرسال " >
    </form>
    
    
    <script  src="JS.js"></script>
    
</body>


        </html>