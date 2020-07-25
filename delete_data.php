<?php 
     $con = mysqli_connect('localhost','root','','portfolio');
     $id = $_POST['id'];
     $query = "DELETE FROM data WHERE id = $id";
     $fire = mysqli_query($con,$query) or die(mysqli_error($con));
?>