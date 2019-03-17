<!DOCTYPE html>
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
       
       $titlename =  $_POST["titlestep"];
       $text = $_POST["editor1"];
       $idprojec = 46;
       if(isset($_FILES["imagestep"]["name"])){
       $image =uniqid().date("y-m-d-h-i-s").$_FILES["imagestep"]["name"];
       $imageSize = $_FILES["imagestep"]["size"];
       $imageError = $_FILES["imagestep"]["error"];
       $imageExp = explode('.',$image);
       $imagestr = strtolower(end($imageExp));
       $allowed=array("jpg","jpeg","png","gif");
       
       $statement = "insert into Step values('','$titlename','$text','$image','$idprojec')";
     if($statement){
         try{
         if(in_array($imagestr,$allowed)){
         if($imageSize < 1000000){
             
         if($imageError == 0 ){
         move_uploaded_file($_FILES["imagestep"]["tmp_name"],"imagesteps/$image");
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
    
    <form method="POST" class="centerAddStep" enctype="multipart/form-data">
        <div class="fileupload">
            <input type="file" name="imagestep" class="uploadimage">
            <h4>اضف عنوان للخطوة</h4>
            <input type="text" name="titlestep"class="titlecss">
        </div>
      <div class="edit">
          <textarea name="editor1"></textarea>
      </div>

     <input type="submit"  name="submit" onclick="window.location.href = 'PostPage.php';" value="ارسال"/>
  </form>
    
    
    
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    </body>

</html>
