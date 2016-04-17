<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include("db_adreslist.php");
    
    $sql = "select gebruikerID from gebruiker";
    $result = $conn ->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["gebruikerID"]. "<br>";
      }
  } else {
      echo "0 results";
  }

     ?>

  </body>
</html>
