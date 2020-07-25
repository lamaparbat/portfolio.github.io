<?php 
 $con = mysqli_connect('localhost','root','','portfolio');
 if(isset($_POST['submit'])){
     //html file
     $file = $_FILES['file']['name'];
     $tmp_name =$_FILES['file']['tmp_name']; 

     //img demo
     $demo = $_FILES['demo']['name'];
     $demo_tmp_name = $_FILES['demo']['tmp_name'];
     //description
     $description = $_POST['description'];
     //upload html file and demo img
     move_uploaded_file($tmp_name,"docs/".$file);
     move_uploaded_file($demo_tmp_name, "image/".$demo);
 	$query = "INSERT INTO data(file,demo,description) VALUES('$file','$demo','$description')";
 	$fire = mysqli_query($con,$query);
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<form method="post" enctype="multipart/form-data">
	HTML FILE <input type="file" name="file"><br><br>
     DEMO screenshot <input type="file" name="demo"><br><br>
     Description <input type="text" name="description" placeholder="Enter description.."> <br><br>
	<input type="submit" name="submit">
</form><br>
<div class="container">
 <div class="row">
     <?php  
     $con = mysqli_connect('localhost','root','','newsfeed');
     $query = "SELECT * FROM file";
     $fire = mysqli_query($con,$query);
     while($row = mysqli_fetch_assoc($fire)){
          ?>
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 90%;">
             <img src="image/<?php echo $row['demo']; ?>" class="card-img" height="200px">  
             <div class="card-body">
                  <p class="card-text"><?php echo $row['description']; ?></p>
                  <a href="docs/<?php echo $row['file']; ?>" class="btn btn-primary">VIEW</a>
             </div>
          </div>   
     </div>
    <?php } ?>
</div>
</div>
</body>
<script src="jquery-3.5.1.min.js"></script>
</html>