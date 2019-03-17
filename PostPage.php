<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="CSS.css">

</head>

<body>
 <?php 
    include 'header.php';

    
    ?>
    <div class="centerPostPage">
        <h3>عنوان التجربة</h3>
        <div class="gallery">
            <img id="image-display">
        </div>
        <div class="info">
            <a href="#">معلومات التجربة</a>
            <select>
                <option>المساعدة</option>
                <option>حذف التجربة</option>
                <option>اضافة تجربة جديدة</option>
            </select>
        </div>

        <div id="step">
            <h3>خطوات التجربة</h3>
            <a href="#" id="numstep">الخطوة</a>
            <button class="stepbtn" onclick="addElement()">قم باضافة خطوة</button>
        </div>
    </div>
<script src="JS.js"></script>

</body>

</html>
