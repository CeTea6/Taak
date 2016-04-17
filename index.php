<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css\index_style.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title></title>
  </head>

  <body>
<div class="index_btn">
    <button id="btn_intern" type="button" class="btn btn-default btn-lg">INTERN</button>
    <button id="btn_extern" type="button" class="btn btn-default btn-lg">EXTERN</button>
    <button id="btn_onderhoud" type="button" class="btn btn-default btn-lg" >ONDERHOUDSTEAM</button>
  </div>

    <script type="text/javascript">
    // redirecting pages
    var btn_intern = document.getElementById('btn_intern');

    btn_intern.addEventListener('click', function() {
      document.location.href = 'intern_login.php';
    });
    btn_extern.addEventListener('click', function() {
      document.location.href = 'extern_login.php';
    });
    btn_onderhoud.addEventListener('click', function() {
      document.location.href = 'onderhoud_home.php';
    });
    </script>

  </body>
</html>
