//smooth scroll
var scroll = new SmoothScroll('a[href*="#"]');
$(document).scroll(function(id){
 	var pos = scrollY;
 	if(pos>580){
 		$('#panel2 h2').css('opacity','1');
 		$('#panel2 .col-md-4').css('opacity','1');
 		 $('#panel2 h2').addClass('animated fadeInLeft');
 		 $('#panel2 .col1').addClass('animated zoomIn');
 		 $('#panel2 .col2').addClass('animated zoomIn');
 		 $('#panel2 .col3').addClass('animated zoomIn');
 	}
 	if(pos>1030){
 		 $('#panel3 h2').css('opacity','1');
 		 $('#panel3 .col-md-4').css('opacity','1');
 		 $('#panel3 h2').addClass('animated flip');
 		 $('#panel3 .col-md-4').addClass('animated zoomIn');
 	}
 	if(pos>2240){	 
 		 $('#panel4 h2').css('opacity','1');
 		 $('#panel4 .col-md-4').css('opacity','1');
 		 $('#panel4 h2').addClass('animated rotateIn');
 		 $('#panel4 .col-md-4').addClass('animated zoomIn');
 	}
 })
 //index.php scroll animation
 $('.navbar-brand').addClass('animated fadeInLeft');
 $('.nav-link').addClass('animated fadeInRight');
 $('#banner h3').addClass('animated fadeInUp');
 $('#banner p').addClass('animated lightSpeedInLeft');
 $('#banner .btn').addClass('animated fadeInUp');
 $('#banner .img-fluid').addClass('animated zoomIn');
 $('#banner_footer .card .card-title').addClass('animated lightSpeedInLeft');
 $('#banner_footer .card .card-text').addClass('animated lightSpeedInRight');
 $('#banner_footer .card').addClass('animated rotateIn');

 //login.php .create
 function delete_data(id){
    $.ajax({
      url: 'delete_data.php',
      type:'post',
      data:{data:true,id},
      success:function(data){
        location.assign('admin.php');
      }
    })
  }

