<?php
session_start();

?>
<!DOCTYPE html>

<html>

   <head>

       <meta charset="utf-8" />
       <title> صفحة تسجيل الدخول </title> 
      <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>

<body>
    
     <?php 

      require 'db_connection.php';

     
      $emailErr = "";
      $passwordErr = "";
  if (isset($_POST["submit"])){ 
  
               
                
             
            if (!empty($_POST["em"]) && !empty($_POST["pass"])){
               
               $email = $_POST['em'];
               $password = $_POST['pass'];
           
    
               $password_encrypt = hash("sha512",$password);
          
                
                 $sql_email = "select * from Creators where email = '$email'";
                 $sql_password = "select * from Creators where password = '$password_encrypt' ";
                 $statement_email  = mysqli_query($db,$sql_email);
                 $statement_password  = mysqli_query($db,$sql_password);
   
                
             if (mysqli_num_rows ($statement_email)  < 1){
    $emailErr = "  لا يوجد حساب مسجل من قبل بهذا الايميل ... الرجاء إدخال حساب صحيح";
     }else if (mysqli_num_rows($statement_password) < 1){
     $passwordErr = " < كلمة المرور غير صحيحة ... إذا نسيت كلمة المرور تفضل بالنقر على رابط < نسيت كلمة المرور؟";
     }else{
 

    $sql = "select email and password from Creators where email = '$email'  and   password = '$password_encrypt'";
  
    $statement  = mysqli_query($db,$sql);
   
    if (mysqli_num_rows($statement) == 1){
    
        $_SESSION["em"] =  $email;
                 $_SESSION["pass"] = $password;
                 $_SESSION["Last_active"] = time();
  
    
    header("Location:HomePage.php");
     
    }
    
             
    }
    }
  }
    }
          include 'header.php';

    ?>
    
    
   


     <form  id = "form"   onsubmit = "return validate_form_Login()"   action = ""  method = "POST" >
       
         <label> هل لديك حساب؟</label>  
         
         
  <div>
       <input type="email" name="em"  id = "email" placeholder="الإيميل"   >  
       <div id = email_error class = "content_error" ></div>
        <span class="error"> <?php echo $emailErr;?></span>
     
  </div>
  
  
 <div>
       <input type="password" id="password" name="pass" placeholder="كلمة المرور"   >;  
       <div id = "password_error"    class = "content_error"></div>
        <span class="error"> <?php echo $passwordErr;?></span>
 </div>
 
     
          <a id = "forget"  href="ForgetPassword.php" > نسيت كلمة المرور؟</a>

 <input type="submit" name="submit"  value = "تسجيل الدخول">
         
    </form>
 <script  src="JS.js"></script>
         
</body>

</html>