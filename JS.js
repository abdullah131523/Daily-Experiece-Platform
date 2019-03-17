
  
  var username;
  var email;
  var email_confirm;
  var password;
  var password_confirm;
  var username_error;
  var email_error;
  var email_confirm_error;
  var password_error;
  var password_confirm_error;
  var pass_recovery;
  var pass_recovery_error;
  var code_recovery;
  var code_recovery_error;
 
  
   
   //*****************************Login Page***************************************************//
   
   
   
   
  
  
  
  
  function validate_form_Login() {
  
   email = document.getElementById("email");
   email_error = document.getElementById("email_error");
  
  
   password = document.getElementById("password");
   password_error = document.getElementById("password_error");
   
      
      
     if (email.value == ""){
     email.style.border = "2px solid red";
      email_error.textContent = " يجب إدخال عنوان البريد الإلكتروني";
      return false; // to display errors in this field only
    }
    
     if (password.value == ""){
      password.style.border = "2px solid red";
      password_error.textContent = " يجب إدخال كلمة المرور";
       return false; // to display errors in this field only
  

  }
  }
  

  
  //****************************Personal Page ******************************************//
  
  
  
  
  
  // This function for check if fields are fill or not
  function validate_form_personal () {
    
    
   username = document.getElementById("username");
   username_error = document.getElementById("username_error");
  
   email = document.getElementById("email");
   email_error = document.getElementById("email_error");
  
  
   password = document.getElementById("pass");
   password_error = document.getElementById("password_error");
    
    
    
    
    if (username.value == ""){
      username.style.border = "2px solid red";
      username_error.textContent = " إسم المستخدم مطلوب";
    return false; // to display errors in this field only
    }
    
    
     if (email.value == ""){
     email.style.border = "2px solid red";
      email_error.textContent = " يجب إدخال عنوان البريد الإلكتروني";
    return false; // to display errors in this field only
    }
    
     if (password.value == ""){
      password.style.border = "2px solid red";
      password_error.textContent = " يجب إدخال كلمة المرور";
      return false; // to display errors in this field only
  

  }
  }
  
  //********************************************ForgetPassword*****************************************//
  
  
  
    function validate_form_forget () {
    
  
   email = document.getElementById("email");
   email_error = document.getElementById("email_error");
 
  
    
     if (email.value == ""){
     email.style.border = "2px solid red";
     email_error.textContent = " يجب إدخال عنوان البريد الإلكتروني";
       return false; // to display errors in this field only
    }
    }
  
  
  
  // ************************************* Sign Up ************************************************************
  function validate_form() {
      
   username = document.getElementById("username");
   username_error = document.getElementById("username_error");
  
   email = document.getElementById("email");
   email_error = document.getElementById("email_error");
  
   email_confirm = document.getElementById("email_confirm");
   email_confirm_error = document.getElementById("email_confirm_error");
  
   password = document.getElementById("password");
   password_error = document.getElementById("password_error");
  
   password_confirm = document.getElementById("password_confirm");
   password_confirm_error = document.getElementById("password_confirm_error");
    
    if (username.value == ""){
      username.style.border = "2px solid red";
      username_error.textContent = " إسم المستخدم مطلوب";
        return false; // to display errors in this field only
    }
    
     if (email.value == ""){
      email.style.border = "2px solid red";
      email_error.textContent = " يجب إدخال عنوان البريد الإلكتروني";
        return false; // to display errors in this field only
    }
     if (email_confirm.value == ""){
      email_confirm.style.border = "2px solid red";
      email_confirm_error.textContent = " يجب تأكيد عنوان البريد الإلكتروني";
       return false; // to display errors in this field only
    }
     if (password.value == ""){
      password.style.border = "2px solid red";
      password_error.textContent = " يجب إدخال كلمة المرور";
     return false; // to display errors in this field only
    }
      if (password_confirm.value == ""){
      password_confirm.style.border = "2px solid red";
      password_confirm_error.textContent = " يجب تأكيد كلمة المرور";
      return false; // to display errors in this field only
    }
    
    
    //chech about matching between two passwords
    if (password_confirm.value != password.value){
      password.style.border = "2px solid red";
      password_confirm.style.border = "2px solid red";
      password_confirm_error.textContent = "  لا يوجد تطابق بين كلمات المرور"
      return false; // to display errors in this field only

      
    }
    
    //chech about matching between two emails
      if (email_confirm.value != email.value){
      email.style.border = "2px solid red";
      email_confirm.style.border = "2px solid red";
      email_confirm_error.textContent =  "لا يوجد تطابق بين البريد الألكتروني مع السابق";
      return false; // to display errors in this field only

      
    }
  }
  
  
  
  // These events when occure the functions run
   username = document.getElementById("username");
   username_error = document.getElementById("username_error");
    
   email = document.getElementById("email");
   email_error = document.getElementById("email_error");
  
   email_confirm = document.getElementById("email_confirm");
   email_confirm_error = document.getElementById("email_confirm_error");
  
   password = document.getElementById("password");
   password_error = document.getElementById("password_error");
  
   password_confirm = document.getElementById("password_confirm");
   password_confirm_error = document.getElementById("password_confirm_error");

      username.addEventListener("blur" , usernameValidate );
      email.addEventListener("blur" , emailValidate);
      email_confirm.addEventListener("blur" , email_confirmValidate);
      password.addEventListener("blur" , passwordValidate);
      password_confirm.addEventListener("blur" , password_confirmValidate);
 
 
  
  // These functions for remove the validating message and for formating
  function usernameValidate () {
    
    
    var Format = /^[0-9a-zA-z ]+$/ ;
    
     
     if (username.value != ""  && username.value.length < 3){
       username_error.textContent = "  يجب أن يحتوي الإسم على أكثر من ثلاثة أحرف"
     }
     else if(username.value != "" && !username.value.match(Format)){
         username_error.textContent = "  /^[0-9a-zA-z ]+$/  يجب أن يكون إسم المستخدم على هيئة "
     }
    else{
      username.style.border = "3px solid #c2c2a3";
      username_error.innerHTML = "";
  
     }
     
      
    
  }
  
  
  function emailValidate () {
    
    var email_RegularExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (email.value != ""){
      
      if (email_RegularExp.test(email.value) == false){
        email_error.textContent = "example@gmail.com    الإيميل غير صحيح يجب كتابته بهذه الصياغة";
      }else{
          email.style.border = "3px solid #c2c2a3";
          email_error.innerHTML = "";
       
      }
    
    
      
    }
  }
       
      
  function email_confirmValidate () {
    
   var email_RegularExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (email_confirm.value != ""){
      
      if (email_RegularExp.test(email_confirm.value) == false){
        email_confirm_error.textContent = "example@gmail.com    الإيميل غير صحيح يجب كتابته بهذه الصياغة";
      }else{
          email_confirm.style.border = "3px solid #c2c2a3";
          email_confirm_error.innerHTML = "";
       
      }
    
    
      
    }
  }
  
  
  function passwordValidate () {
    
   var password_RegularExp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");

    
    if (password.value != ""){
      
      if (password_RegularExp.test(password.value) == false){
   password_error.textContent   =    ' A-Z  يجب أن تحتوي كلمة المرور على 8 خانات أو أكثر وعلى الأقل حرف من   a-z وحرف من            \n'+
  '  0 – 9ورقم من';
}


      else{
          password.style.border = "3px solid #c2c2a3";
      password_error.innerHTML = "";
      return true;
      }
    
      
    }
  }
  
  
  function password_confirmValidate () {
    
    var password_RegularExp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");

    
    if (pass_recovery.value != ""){
      
      if (password_RegularExp.test(pass_recovery.value) == false){
   pass_recovery_error.textContent   =    ' A-Z  يجب أن تحتوي كلمة المرور على 8 خانات أو أكثر وعلى الأقل حرف من   a-z وحرف من            \n'+
  '  0 – 9ورقم من';
}


      else{
          pass_recovery.style.border = "3px solid #c2c2a3";
      pass_recovery_error.innerHTML = "";
      return true;
      }
    
      
    }
  }



////////////////////////////////////////////////////

//**********************Reset Password*****************************************

 // This function for check if fields are fill or not
  function validate_form_Reset() {
  
   password = document.getElementById("password");
   password_error = document.getElementById("password_error");
    
  
     if (password.value == ""){
      password.style.border = "2px solid red";
      password_error.textContent = "    يجب إدخال كلمة المرور الجديدة";
       return false; // to display errors in this field only
  

  }
  }


////////////////////////////////////////////////////////////////////////////////////



//***********************Code Validation Password **********************************************


 function validate_form_CodeValidation() {
  
   code_recovery = document.getElementById("code_recovery");
   code_recovery_error = document.getElementById("code_recovery_error");
    
  
     if (code_recovery.value == ""){
      code_recovery.style.border = "2px solid red";
      code_recovery_error.textContent = " يجب إدخال رمز التحقق";
     
       return false; // to keep change in page and not refresh the page to allow user to change
  

  }
  }

