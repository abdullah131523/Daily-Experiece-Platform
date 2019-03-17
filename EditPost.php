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
    <div class="centerEditPost">
        <h3>عنوان التجربة</h3>
        <div class="gallery">
            <img src="" id="image-display">
            <ul>
                <li class="fa fa-thumbs-up"></li>
                <li class="fa fa-thumbs-down"></li>
                <li><a herf="#" class="comment">التعليقات</a></li>
                <li class="fa fa-file-pdf-o"> تحميل</li>
                <li id="atag"></li>
            </ul>
        </div>

       <div class="share">
        <h3>شارك تجربتك مع اصدقائك</h3>
        <input type="submit" class="link" value="مشاركة">
        <h3>انت صاحب التحربة</h3>
        <button class="link">نعم</button>
        <button class="link" onclick="openlink()" >لا,رابط المصدر</button>
        <p id="linkadd" style="margin-top: 20px; color: red; text-align: center;"></p>
        </div>
    </div>
<script src="JS.js"></script>

</body>

</html>
