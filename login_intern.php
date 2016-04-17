

    <?php
         if(isset($_POST['werknemernr'])){
         	$name=$_POST['werknemernr'];
          include("db_adreslist.php");
          $sql=" SELECT werknemernr FROM int_gebr WHERE werknemernr='$name'; ";
          $result = $conn ->query($sql);

          if ($result->num_rows > 0) {
            echo "string";
              header('location: C:\wamp\www\TAAK\intern_home.php');
             }
        }
         //	$res = mysql_query($conn, "$sql");

   ?>
