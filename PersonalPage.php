
<!DOCTYPE html>

<html>


<head>

       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title> الصفحة الشخصية </title>
       <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>
     
    
    <?php
    
         include 'header.php';

    ?>
    
    
   
   <form id = "form"   onsubmit = "return validate_form_personal()" >
     <label>  تعديل المعلومات الشخصية </label>
     
     
       <div>
    
        <input type="text" name="uname" id = "username" placeholder="  إسم المستخدم" >    
        <div id = "username_error"  class = "content_error"></div>

   </div>
  
  
  <div>
       <input type="email" name="email"  id = "email" placeholder="الإيميل"  >
       <div id = email_error class = "content_error" ></div>
  </div>
  
  
 <div>
       <input type="password" id="pass" name="password" placeholder="كلمة المرور">
       <div id = "password_error"    class = "content_error"></div>
 </div>
 
    <input type="submit" name="submit" value = "حفظ وإرسال" >
 
 </form>



<script  src="JS.js"></script>

</body>

</html>