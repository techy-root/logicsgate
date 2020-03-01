<?php
session_start();
if(isset($_GET['logout']) || $_SESSION['sUsername'] == ''){
    $_SESSION['sUsername'] = '';
    session_destroy();
}
?>

<link href="/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="/jquery/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo ucfirst($_SESSION['sUsername']); ?> profile page!</title>
</head>
<body>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="card" style="margin-left:40%;">
    <img src="img.jpg" alt="John" style="width:200; height:200">
    <h1><?php echo ucfirst($_SESSION['sUsername']); ?></h1>
    <p class="title">Technical Consultant</p>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><a href="userProfileController.php?logout=y"><button>Logout</button></a></p>
  </div> 
</body>
</html>
