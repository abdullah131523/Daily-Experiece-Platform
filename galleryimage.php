<?php 
     require 'db_connection.php';
     $statement = "SELECT * FROM Project";
     $result = $db->query($statement);
  
   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div'>";
      echo "<a href='displaysteps.php?id=".$row['idproject']."'>";
      echo "<img src=pictures/".$row["image"]." width='300' height='200'>";
      echo "</a>";
      echo "  <div>".$row["Describe"]."</div>";
      echo "</div>";
     }
   }
   $db->close();
?>
