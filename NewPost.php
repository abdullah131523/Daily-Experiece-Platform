<html>
 
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  
</head>

<body>
<?php 
     
     require 'db_connection.php';
    
     

   if(isset($_POST["submit"])){
       $titlename =  $_POST["tiltepost"];
       $describ =  $_POST["Describtion"];
       $idcreator = 1;
       if(isset($_FILES["imagepost"]["name"])){
       $image = uniqid().date("y-m-d-h-i-s").$_FILES["imagepost"]["name"];
       $imageSize = $_FILES["imagepost"]["size"];
       $imageError = $_FILES["imagepost"]["error"];
       $imageExp = explode('.',$image);
       $imagestr = strtolower(end($imageExp));
       $allowed=array("jpg","jpeg","png","gif");
       
     $statement = "insert into Project values('','$titlename','$describ','$image','$idcreator')";
     if($statement){
         try{
         if(in_array($imagestr,$allowed)){
         if($imageSize < 1000000){
             
         if($imageError == 0 ){
         move_uploaded_file($_FILES["imagepost"]["tmp_name"],"pictures/$image");
         $sql = mysqli_query($db,$statement);
         }else{
          throw new Exception("<script>alert('الرجاء قم باعادة ادخال الملف يوجد خطاء !!')</script>");
         }
         
         }else { 
         throw new Exception("<script>alert('الرجاء قم بادخال حجم اقل من MB 1')</script>");
         }
         
         }else{
                 throw new Exception("<script>alert(' jpg , jpeg , png , gif  الرجاء اعادة المحاولة برفع الصورة يوجد خطاء')</script>");
         }
      
         } catch(Exception $e){
           echo 'Message: ' .$e->getMessage();
       
         }
     }
     
       }
   }

       
    
   
   
   include 'header.php';
?>
    
   <form method="POST" class="centerNewPost" enctype="multipart/form-data">
            <div class="gallery">
            <img src=""  id="image-display">
            </div>
      <div class="center">
          
            <h4> العنوان الخاص بتجربة </h4>
            <input type="text" class="titlecss"  name="tiltepost">
            <h4>وصف مختصر لتجربة</h4>
            <textarea class="textareacss" style="width: 300px; height: 120px;" name="Describtion"></textarea>
            <div class="fileupload">
                <input type="file" class="uploadimage" name="imagepost" accept="image/gif,image/jpeg,image/jpg,image/png"  onchange="photoload.call(this)">
            </div>
            
       </div>

        <a href="HomePage.php" class="sendmassage">الغاء</a>
        <input type="submit" onclick="window.location.href ='PostPage.php';" class="sendmassage" name="submit"  value="حفظ" />
    </form>
   <script src="JS.js"></script>
</body>

</html>
