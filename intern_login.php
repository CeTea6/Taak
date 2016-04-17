<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css\extern_login_style.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title></title>
  </head>
  <body>
    <form method="POST" action="">
    	     <input type="text" name="werknemernr" id="werknemernr">
    	    <input type="submit" name="submit_form" value="Submit">
    </form>
        <?php
             if(isset($_POST['werknemernr'])){
             	$name=$_POST['werknemernr'];
              include("scripts/db_adreslist.php");
              $sql="SELECT werknemernr FROM int_gebr WHERE werknemernr='$name'";
              $result = mysqli_query($conn,$sql);
              if ($result->num_rows > 0) {
                header('location: intern_home.php');
            } else {
                echo "0 results";
            }
            }
             //	$res = mysql_query($conn, "$sql");
       ?>
<script>
    // $(document).ready(function(){
    //     $('#intern_login').click(function(){
    //       console.log("testtttttt");
    //         $.ajax({
    //             url:'scripts/login_intern.php',
    //             success: function(response){
    //                 //window.location.href = 'intern_home.php';
    //                 alert(Response);
    //             }
    //         });
    //     });
    // });
    </script>

  </body>
</html>
