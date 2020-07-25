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
	<title>ADMIN CENTER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	 <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <!-- internal css link -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
#form{
  padding-top: 90px;
}
#form{
  /*height: 600px;*/
  background:url(image/blob.svg);
  background-size: 70% 130%;
  background-repeat: no-repeat;
}
#form .row .col-md-8{
  text-align: center;
}
#form .row .col-md-8 h4{
  margin-left: -150px;
  font-family: 'Faster One', cursive;
  padding-bottom: 30px;
}
#form .row .col-md-8 h5{
  width: 200px;
  margin-left: 240px;
  color:#66ff33;
}
#form .row .col-md-8 input{
  margin-top: 0px;
  margin-bottom: 20px;
  height: 30px;
  width: 250px;
}
#form .row .col-md-8 textarea{
  padding: 5px;
  padding-left: 20px;
  margin-left: 10px;
  margin-bottom: 20px;
  height: 35px;
  width: 35%;
}
#form .row .col-md-8 button{
  margin-bottom: 50px;
  margin-left: -180px;
}
#form .row .col-md-4 img{
  margin-bottom: 50px;
}
@media(max-width: 450px){
  #form{
    background: unset;
  }
  #panel1{
    overflow-y: scroll;
  }
  #form .row .col-md-8 h5{
  width: 200px;
  margin-left: 20px;
  color:red;
}
}
    </style>
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
        <a class="nav-link" href="login.php">LOG-OUT</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container text-white" id="form">
	<div class="row">
		<div class="col-md-8 mt-5">
			<h4 id="title">ADMIN</h4>
		    <form method="post" action="admin.php" enctype="multipart/form-data">
        <h5 style="padding-right: 70px;">INPUT HTML FILE</h5>
        <input type="file" name="file" required="required"><br>
        <h5>INPUT HTML DEMO IMAGE</h5>
        <input type="file" name="demo" required="required"><br>
        <textarea name="description" placeholder="Enter Description....." required="required"></textarea><br>
		    <button class="btn btn-success" name="submit">LOGIN</button>
		</form>
	</div>
	<div class="col-md-4">
		<img src="image/login_form.svg" class="img-fluid">
	</div>
</div>
</div>
</div>
<!-- DATABSE --HTML FILES -->
<div class="container" id="dbase">
  <h2 class="pt-5 pb-5 text-center">DATABASE</h2>
  <div class="row">
     <?php  
     $con = mysqli_connect('localhost','root','','portfolio');
     $query = "SELECT * FROM data";
     $fire = mysqli_query($con,$query);
     while($row = mysqli_fetch_assoc($fire)){
          ?>
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 100%;">
             <img src="image/<?php echo $row['demo']; ?>" class="card-img" height="250px">  
             <div class="card-body">
                  <p class="card-text"><?php echo $row['description']; ?></p>
                  <a href="docs/<?php echo $row['file']; ?>" class="btn btn-primary">VIEW</a>
                  <button class="btn btn-primary" onclick="delete_data(<?php echo $row['id']; ?>)">DELETE</button>
             </div>
          </div>   
     </div>
    <?php } ?>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://use.fontawesome.com/1e8a3f354d.js"></script>
<script type="text/javascript" src="script.js"></script>
</html>