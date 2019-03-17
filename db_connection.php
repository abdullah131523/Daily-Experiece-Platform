<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "DEP";


   $db = new mysqli($servername, $username, $password , $database);
  

// check the connection
if ($db->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ".mysql_error());
}
  
?>
