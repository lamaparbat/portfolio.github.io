<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.min.css" integrity="sha256-Qj+zEEvubER4lO5l200c3UfufBOsKTgpsgJU0/t3CoU=" crossorigin="anonymous">
	 <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <!-- internal css link -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#panel2">ABOUT</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#panel3">PROJECT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#panel4">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">ADMIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
<!-- banner -->
<div class="container-fluid" id="banner">
	<div class="row">
		<div class="col-md-8 pb-5">
			<h3 class="mt-5 mb-3">Parbhat Thangwal Lama</h3>
			<p class="mr-4">I am self-taught Web Developer.I've prior experience in Web Designing , adding animation<br>to website, working with database etc.I've knowledge of HTML, CSS, JAVASCRIPT, BOOTSTRAP<br> & PHP . However i prefer uniqness and challenges of Designation rather than imitating.
			 </p>
			<a href="login.php #create" class="btn">SUBSCRIBE</a>
		</div>
		<div class="col-md-4">
			<img src="image/svg2.svg" class="img-fluid" height="300px" width="300px">
		</div>
	</div>
</div>
</div>
<!-- banner footer -->
<div class="container text-white" id="banner_footer">
	<div class="row pb-5">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">HTML</h4>
					<p class="card-text">HTML stands for HyperText Markup Languages.It is primarily used for Web Development</p>
					<a href="https://www.w3schools.com/html/" class="btn btn-info">Learn</a>
				</div>
			</div>
		</div><div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">CSS</h4>
					<p class="card-text">CSS stands for Cascading Styling Sheet.It helps to Design the Website Looks such as color,text,size etc.</p>
					<a href="https://www.w3schools.com/css/" class="btn btn-info">Learn</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">JAVASCRIPT</h4>
					<p class="card-text">JAVASCRIPT is such an important language for Web Development. It helps to make Dynamic website.</p>
					<a href="https://www.w3schools.com/js/" class="btn btn-info">Learn</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- panel2 -- About section-->
<div class="container" id="panel2">
	<h2 class="text-center mb-4">ABOUT ME</h2>
	<div class="row">
		<div class="col-md-4 col1">
			<img src="image/qualif.svg" class="img-fluid">
			<h4 class="text-primary">Qualification</h4>
			<p>I'm a 12th grade student with Major subject as Computer Science.I've learned HTML,CSS, JAVASCRIPT,BOOTSTRAP AND PHP through Youtube and Various Web Programming course related website.</p><br>
			<h4>+2 Management <a href="https://uniglobecollege.edu.np/" class="btn btn-primary">LINK</a></h4>
		</div>
		<div class="col-md-4 col2">
			<img src="image/experience.svg" class="img-fluid">
			<h4 class="text-primary">Experience</h4>
			<p>Although i've not worked in Big Company like Google,Facebook,Apple.But i've prior experience of Web development & Designing.It's been three years that i've been designing various ecommerce website as well as college, Blog and personal portfolio.</p>
			<h4>Certificate- <a href="#" class="btn btn-primary">LINK</a></h4>
		</div>
		<div class="col-md-4 col3">
			<img src="image/expert.svg" class="img-fluid">
			<h4 class="text-primary">Expert</h4>
			<p>As per my Work & Experience, i've perfect skills in designing website.I spend two years learning core HTML, CSS, Javascript and </p><br><br>
			<h4>Project- <a href="#" class="btn btn-primary">LINK</a></h4>
		</div>
	</div>
</div>
<!-- panel3 ---Project -->
<div class="container" id="panel3">
	<h2 class="text-center">My Project</h2>
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
             </div>
          </div>   
     </div>
    <?php } ?>

	</div>		
</div>
<!-- panel4 -- services -->
<div class="container" id="panel4">
	<h2 class="text-center">SERVICES</h2>
	<div class="row">
		<div class="col-md-4">
			<img src="image/teacher.svg" class="card-img mb-4">
			<h4>ONLINE-GUIDE</h4>
			<p>If you're in trouble of learning Web programming language or you're self learner, then you can take help from me.</p>
			<p><b>CONTACT</b></p>
			<a href="fb.com" class="btn btn-primary">Facebook</a>
			<a href="gmail.com" class="btn btn-primary">Gmail</a>
		</div>
		<div class="col-md-4">
			<img src="image/reference.svg" class="card-img mb-4">
			<h4>REFERENCE</h4>
			<p>If you're really want to know the source that i've learned,it's W3 SCHOOL which is the best Online learning Website.</p>
			<p><b>GET THERE</b></p>
			<a href="w3schools.com" class="btn btn-primary">LINK</a>
		</div>
		<div class="col-md-4">
			<img src="image/teacher.svg" class="card-img mb-4">
			<h4>MEMBERSHIP</h4>
			<p>If you're interested with my project, then you can join me. Let's gather our idea to make better work</p>
			<p><b>INTERESTED</b></p>
			<a href="#" class="btn btn-primary">JOIN</a>
		</div>
	</div>
</div><br>
<!-- subscriber -->
<div class="container mb-5" id="subscriber">
	<div class="row text-center">
		<div class="col-md-12">
			<a href="#" class="btn btn-danger">NO. OF SUBSCRIBER -
            <?php  
             $con = mysqli_connect('localhost','root','','portfolio');
             $query = "SELECT * FROM user";
             $fire = mysqli_query($con,$query);
             while($row = mysqli_fetch_assoc($fire)){
                echo  $row['id'];
             }
           ?>
	     </a>
		</div>
	</div>
	<h4 class="text-center mt-5 text-primary">THANK YOU FOR VISITING</h4>
</div>
<!-- panel5 -- footer -->
<div class="container-fluid bg-dark text-white" id="footer">
	<div class="row">
		<div class="col-md-4">
			<h4 class="pb-2">PARBAT</h4>
			<p>I am very thankful for your support and love.Thank you <br>all my subscriber and i have much more love for you.<br>#Keep loving<br>#Do support me</p>
		</div>
		<div class="col-md-2 mb-3">
			<h5 class="pb-1">PROJECT STORE</h5>
			<a href="#" class="text-white">GITHUB ACCOUNT</a><br>
			<a href="#" class="text-white">STORE URL</a>
		</div>
		<div class="col-md-3 mb-3">
			<h5 class="pb-1">RECOMMEND WEBSITE</h5>
			<a href="#" class="text-white">GITHUB ACCOUNT</a><br>
			<a href="#" class="text-white">STORE URL</a>
		</div>
		<div class="col-md-3">
			<h5 class="pb-1">CONTACT</h5>
			<a href="#" class="text-white">FACEBOOK: Parbhat Thangwal Lama</a><br>
			<a href="#" class="text-white">GMAIL: parbatlama70@gmail.com</a><br>
			<a href="#" class="text-white">PHONE N0. : +977-9812332242</a><br>
			<a href="#" class="text-white">TELE N0. : +046-540-400</a>
		</div>
	</div><hr style="background-color: white;">
	<div class="row" id="social_icon">
		<div class="col-md-12 text-center">
			<h5 class="mb-3">FOLLOW ME ON</h5>
			<i class="fa fa-envelope"></i>
			<i class="fa fa-facebook-official"></i>
			<i class="fa fa-whatsapp"></i>
			<i class="fa fa-youtube-play"></i>
			<i class="fa fa-instagram"></i>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-12 text-center">
			<h6>@&nbsp About &nbsp&nbsp Privacy &nbsp&nbsp Terms &nbsp&nbsp Service</h6>
			<p><span style="font-size: 20px;">&copy </span>2020ParbhatThangwalLama.All Right Reserved</p>
		</div>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://use.fontawesome.com/1e8a3f354d.js"></script>
<!-- Smooth scroll js----CDN from smooth scroll.js GIT-HUB -->
<script src="smooth-scroll.js"></script>
<script src="script.js"></script>
</html>