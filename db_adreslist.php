
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dbhost="localhost";
      $dbuser="root";
      $dbpass="pass";
      $db="taak";

      // Create connection
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully" . "<br>";
  

     ?>
  </body>
</html>
