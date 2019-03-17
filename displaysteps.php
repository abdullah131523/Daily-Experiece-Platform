
 <?php 
 
    require_once('./db_connection.php');
      if(isset($_GET['id'])){
      $statement = "SELECT * FROM Step WHERE idproject=".$_GET['id'].""; 
      $result = $db->query($statement);

   if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
      echo "<div width='600px' height='700px'>";
      echo "<h3>".$row['Stepname']."</h3>";
      echo "<img src=imagesteps/.".$row["Stepimage"]." width='300px' height='200px'>";
      echo "<div  width='400px' height='200px'>".$row['Stepdescribe']."</div>";
      echo "</div>";
     }
    }
  }
 ?>
