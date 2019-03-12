
<!DOCTYPE html>

<html>


<head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> إستعادة الرقم السري</title>
         <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>


<?php
    
          // Import PHPMailer classes into the global namespace
         // These must be at the top of your script, not inside a function
          
        //  use PHPMailer\PHPMailer\PHPMailer;
     //use PHPMailer\PHPMailer\Exception;
         
  $db = mysqli_connect('localhost','abdulazez','','Daily Experience Platform');
  
  if(isset($_POST["submit"])){
      
      $email = $_POST["email"];
      
      
      $sql = "select * from Creators where email = '$email'";
      
      $statement = mysqli_query($db , $sql);
      
     // $password = mysqli_fetch_array($statement);
      
      
      if (mysqli_num_rows($statement) == 1){
          
          header("Location:ResetPassword.php");
          
          
          /*
          require 'PHPMailer-5.2-stable\PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'DailyExperiencePlatform@gmail.com';                 // SMTP username
    $mail->Password = 'Dd123456789';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('DailyExperiencePlatform@gmail.com', 'Admin 13');
    $mail->addAddress($email, $email);     // Add a recipient
   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'إيجاد الرقم السري';
    $mail->Body    =   $password["password"] . "  رقمك السري هو "  ;
    $mail->AltBody = $password["password"] . "  رقمك السري هو "  ;



if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'تفضل بزيارة الإيميل الشخصي الخاص بك للحصول على رقمك السري وشكرا';
}
       
          
          
          
          
          
          
      
/*
             //   $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
    //Server settings
   // $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'DailyExperiencePlatform@gmail.com';                 // SMTP username
    $mail->Password = 'Dd123456789';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('DailyExperiencePlatform@gmail.com', 'Admin 13');
    $mail->addAddress($email, $email);     // Add a recipient
   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'إيجاد الرقم السري';
    $mail->Body    =   $password["password"] . "  رقمك السري هو "  ;
    $mail->AltBody = $password["password"] . "  رقمك السري هو "  ;

    $mail->send();
    echo 'تفضل بزيارة الإيميل الشخصي الخاص بك للحصول على رقمك السري وشكرا';
} catch (Exception $e) {
    echo  "Mailer Error:" . $mail->ErrorInfo;
}
          
          
      }
      
      */
      
      
      
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
    <li> <a href="PersonalPage.php">  الصفحة الشخصية</a></li>
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

 
    

    <form id = "form"   onsubmit = "return validate_form_forget()"  method = "POST" >
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