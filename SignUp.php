

<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> صفحة التسجيل </title>
         <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>

<body>
  
    
    <?php
    
    try{
     require 'db_connection.php';
   
      $nameErr = "";
      $emailErr = "";
      $passwordErr = "";

    if (isset($_POST['submit'])){ 
    
               $username = $_POST['uname'];
               $email = $_POST['email'];
               $email_confirm = $_POST['email_confirm'];
               $password = $_POST['pass'];
               $password_confirm = $_POST['pass_confirm'];
                
                
                $password_encrypt = hash("sha512",$password);
       
             
               
                
    
    $sql_username = "select * from Creators where username = '$username'";
    $sql_email = "select * from Creators where email = '$email'";
    $sql_password = "select * from Creators where password = '$password_encrypt' ";
    $statement_username  = mysqli_query($db,$sql_username);
    $statement_email  = mysqli_query($db,$sql_email);
    $statement_password  = mysqli_query($db,$sql_password);
   
     
     if (mysqli_num_rows($statement_username) > 0){
      
     $nameErr = "إسم المستخدم قد تم اختياره من قبل شخص اخر .. الرجاء اختيار إسم مستخدم اخر";
     }else if (mysqli_num_rows($statement_email) > 0){
    $emailErr = "هذا الإيميل قد تم اختياره مسبقا من قبل شخص اخر .. الرجاء اختيار إيميل اخر";
     }else if (mysqli_num_rows($statement_password) > 0){
     $passwordErr = "كلمة المرور مستخدمة من قبل شخص اخر .. الرجاء اختيار كلمة مرور أخرى";
     }else{
 
          
         
   $statement = "insert into Creators(id,username,email,password) values('','$username','$email','$password_encrypt');";
   $sql = mysqli_query($db,$statement);
  
   
   if(!$sql){
       throw new Exception ("حصلت مشكلة أثناء تسجيلك , يرجى اعادة التسجيل مرة أخرى");
   }else{
  
       
   header("Location:HomePage.php"); 
   
    }
     }
     
    }
        
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
 
      include 'header.php';
    ?>

 <form  id = "form"   onsubmit = "return validate_form()"   action = ""  method = "POST" >
     
     
   <label>  حساب جديد </label>
   <div>
    
        <input type="text" name="uname" id = "username" placeholder="  إسم المستخدم" >    
        <div id = "username_error"  class = "content_error"></div>
        <span class="error">  <?php echo $nameErr;?>   </span> 
   
   </div>
  
  
  <div>
       <input type="email" name="email"  id = "email" placeholder="الإيميل"  >
       <div id = email_error class = "content_error" ></div>
       <span class="error"> <?php echo $emailErr;?></span>
  </div>
  
  <div>
        <input type="email" name = "email_confirm" id = "email_confirm" placeholder= "تأكيد الإيميل " >
        <div id = email_confirm_error    class = "content_error"></div>
        

  </div>
 
 <div>
       <input type="password" id="password" name="pass" placeholder="كلمة المرور">
       <div id = "password_error"    class = "content_error"></div>
       <span class="error"> <?php echo $passwordErr;?></span>
 </div>
 
 <div>
       <input type="password" id="password_confirm" name = "pass_confirm" placeholder="تاكيد كلمة المرور">
    <div id = "password_confirm_error"    class = "content_error"></div>
 </div>
 
 
     <input type="submit" name="submit" value = "تسجيل" >
     
 
 </form>

<script  src="JS.js"></script>


</body>


</html>
