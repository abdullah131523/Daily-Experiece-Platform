<?php
 session_start(); 
?>


<!DOCTYPE html>

<html>


<head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>   تغيير الرقم السري</title>
         <link rel="stylesheet" type="text/css" href="HomePageStyle.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>
	
	
	
	<?php
    try{
        require 'db_connection.php';

    if (isset($_SESSION["email"]) && !empty($_SESSION["email"])){
      $email =   $_SESSION["email"];
    
	 if(isset($_POST["send"])){
	 
	    $password = $_POST["pass"];
	    $password_encrypt = hash("sha512",$password);

         if (!empty($password)){
           
		$sql = "UPDATE Creators SET password ='$password_encrypt' WHERE email =  '$email'" ;
		
		$statement = mysqli_query($db , $sql);
      
		if($statement){
	    
		header("Location:Login.php");
		}else{
			throw new Exception ("عذرا حصل خطأ اثناء تغيير كلمة المرور الرجاء المحاولة مرة أخرى"); 
		}
		
	}
	}
    }
        
    }catch(Exception $e){
    echo $e->getMessage();

    }
	        include 'header.php';

	?>
	

    

    <form id = "form"    onsubmit = "return validate_form_Reset()"   method = "POST" >
       
        <label> تغيير كلمة المرور </label>
     
  <div>
       <input type="password" id="password" name="pass" placeholder="كلمة المرور الجديدة">
       <div id = "password_error"    class = "content_error"></div>
 </div>
 
  
      <input type="submit" name="send" value = "تغيير " >
    </form>
    
      <script  src="JS.js"></script>
  
</body>


        </html>