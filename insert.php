<?php 
$con = mysqli_connect('localhost','root','','portfolio');
if(isset($_POST['complete'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	// $query = "INSERT INTO admin(username,password,email) VALUES('$username','$password','$email')";
	$query = "INSERT INTO user(username,password,email) VALUES('$username','$password','$email')";
	$fire = mysqli_query($con,$query);

	echo "<script>location.assign('index.php');</script>";
}
?>