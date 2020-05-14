><?php

session_start();

if(!isset($_SESSION["un"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}





?>


<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/vlab.css">
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"> </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js"> </script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>







</head>
<body>
<div class="main">

 

<?php

require_once("header.php");

?>
<br><br>
<div class="row cspace2 slideanim">
<div class="col-sm-7">

<div id="services" class="container-fluid text-center">
  <h2>Features</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <a href="compiler.php"><span class="fa fa-code logo-small"></span>
      <h4>Compiler</h4>
      </a>
    </div>
    <div class="col-sm-6">
       <a href="archive.php"><span class="fa fa-archive logo-small"></span>
      <h4>Practice Problems</h4>
      
      </a>
    </div>
    </div>
    <br><br><br><br>
  




</div>
</div><br><br><br>

<div class="col-sm-5">
    
  
</div>
</div>
<br><br><br><br><br><br><br>
<?php

require_once("footer.php");

?>
</div>
</body>
</html>


