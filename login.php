<?php 
$con = mysqli_connect('localhost','root','','portfolio');
if(isset($_POST['login'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $query = "SELECT * FROM admin";
 $fire = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($fire)){
 	if($username = $row['username'] && $password = $row['password']){
 		echo "<script>location.assign('admin.php');</script>";
 		break;
 	}
 }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	 <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <!-- internal css link -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<!-- panel1-->
<div class="container-fluid" id="panel1">
  <nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="#">PARBAT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav pr-5">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#create">CREATE-NEW-ACCOUNT</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container text-white" id="form">
	<div class="row">
		<div class="col-md-8 mt-5">
			<h4>SIGN IN</h4>
			<form method="post">
		    <input type="text" name="username" placeholder="Enter username....." required="required"><br>
		    <input type="password" name="password" placeholder="Enter password....." required="required"><br>
		    <input type="submit" name="login" class="btn btn-primary" id="login_btn" required="required"><br>
		    <a href="#create" class="btn btn-primary">CREATE</a>
		</form>
	</div>
	<div class="col-md-4">
		<img src="image/login_form.svg" class="img-fluid">
	</div>
</div>
</div>
</div><br><br>
<!-- link tab -->
<div class="container text-center">
	<a href="#create" class="btn btn-primary">WILL YOU ME DRAG DOWN?</a>
</div>
<!-- create new account -->
<div class="container" id="create">
	<h2 class="text-center mb-5">CREATE NEW ACCOUNT</h2>
	<div class="row pb-5">
	  <div class="col-md-8 text-center">
	  	<form method="post" action="insert.php">
	  		<input type="text" name="username" placeholder="Enter username....." required="required"><br>
	  		<input type="password" name="password" placeholder="Enter password....." required="required"><br>
	  		<input type="text" name="email" placeholder="Enter email....." required="required"><br>
	  		<input type="submit" name="complete" class="btn btn-primary" value="COMPLETE">
	  	</form>
	  </div>
	  <div class="col-md-4">
	  	<img src="image/login_form.svg" class="img-fluid">
	  </div>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script src="https://use.fontawesome.com/1e8a3f354d.js"></script>
<!-- Smooth scroll js----CDN from smooth scroll.js GIT-HUB -->
<script src="smooth-scroll.js"></script>
</html>