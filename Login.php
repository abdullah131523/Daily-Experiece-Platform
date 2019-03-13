
<!DOCTYPE html>

<html>

   <head>

       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title> صفحة تسجيل الدخول </title> 
      <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>

<body>
    
     <?php 
      session_start();
      $db = mysqli_connect('localhost','abdulazez','','Daily Experience Platform');
   
  if (isset($_POST["submit"])){ 
  
    $_SESSION["em"] =  $_POST["em"];
                $_SESSION["pass"] = $_POST["pass"];
                 $_SESSION["Last_active"] = time();
                
             
            if (!empty($_POST["em"]) && !empty($_POST["pass"])){
               
               $email = $_POST['em'];
               $password = $_POST['pass'];
           
    
   
   

    $sql = "select email and password from Creators where email = '$email'  and   password = '$password'";
  
    $statement  = mysqli_query($db,$sql);
   
    if (mysqli_num_rows($statement) == 1){
 
  
    
    header("Location:HomePage.php");
     
    }
    
             
    }
    }
    ?>
    
    
    
    <ul>
      <li class = "headerStyle"> <a href = "#"> <i class="glyphicon glyphicon-log-in"> </i>تسجيل الدخول  </a> </li>
      <li class = "headerStyle"> <a href = "#"> <i class="glyphicon glyphicon-user"></i> تسجيل </a> </li>
   </ul>

    
<div id="menu">
  <ul id = "position">

  <li> <a href="#"> الصفحة الرئيسية</a></li>
  <li> <a href="#"> مشاركة </a></li>
   <li> <a href="#">  الصفحة الشخصية</a></li>
  <li> <a href="#"> الدعم الفني </a></li>

<li>  <a href="#"> الأقسام </a>

<ul>

   <li> <a href="#"> التصميم </a></li> 
  <li> <a href="#"> الفن والديكور </a></li> 
   <li>  <a href="#"> الأعمال المنزلية </a></li> 
   <li> <a href="#"> الطبخ </a></li>
   <li> <a href="#"> الألعاب </a></li> 
    <li> <a href="#"> السيارات </a></li>

</ul>

</li>
  </ul>
    
</div>
   


     <form  id = "form"   onsubmit = "return validate_form_Login()"   action = ""  method = "POST" >
       
         <label> هل لديك حساب؟</label>  
         
         
  <div>
       <input type="email" name="em"  id = "email" placeholder="الإيميل"   > <!--to display in field--> 
       <div id = email_error class = "content_error" ></div>
     
  </div>
  
  
 <div>
       <input type="password" id="password" name="pass" placeholder="كلمة المرور"   >;  
       <div id = "password_error"    class = "content_error"></div>
      
 </div>
 
     
          <a id = "forget"  href="ForgetPassword.php" > نسيت كلمة المرور؟</a>

 <input type="submit" name="submit"  value = "تسجيل الدخول">
 --<script  src="JS.js"></script>
</body>

</html>