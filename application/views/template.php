<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Eduface">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta property="og:description" content="Bharathiar university spot admission cum learning center, UG/ PG courses, C.A foundation course, 1 year diploma courses | Eduface">
		<meta property="og:type"   content="website" /> 
		<meta property="og:title" content="Bharathiar university spot admission, UG/ PG courses | Eduface Academy for advanced studies">
		<meta property="og:url" content="http://eduface.in/">
		<meta property="og:image" content="http://eduface.in/images/og-image.jpg">
		
		<meta property="og:image" itemprop="image" content="http://eduface.in/images/og-image-wp.jpg">
		
		<meta name="description" content="Bharathiar university spot admission cum learning center, UG/ PG courses, C.A foundation course, 1 year diploma courses | Eduface">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/bootstrap4/bootstrap.min.css">
		<link href="<?php echo base_url()?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/courses.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/contact.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/contact_responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/courses_responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/about.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/about_responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/responsive.css">
  
		<link rel="shortcut icon" href="<?php echo base_url()?>images/favicon.png">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>
	<body>
	
		<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>0480 2980078</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>office@eduface.in</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#" class="enroll" data-toggle="modal" data-target="#myModal">Register/ Admission</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container" id="header_sec">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<img class="logo-img" src="<?php echo base_url()?>images/logo-eduface.png" width="300">
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
								
									<?php 
										$uri=$_SERVER['REQUEST_URI'];
										//echo $uri;
										$page=substr($uri, 6);
										$home1=substr($uri, 1);
										$home2=substr($uri, 6);
									?>
								
									<li <?php if($home1=='' || $home2==''){ echo 'class="active"';}?>>
										<a href="<?php echo base_url('/')?>">Home</a>
									</li>
									<li <?php if($page=='aboutus'){ echo 'class="active"';}?>>
										<a href="<?php echo base_url('home/aboutus')?>">About us</a>
									</li>
									<li <?php if($page=='courses'){ echo 'class="active"';}?>>
										<a href="<?php echo base_url('home/courses')?>">Courses</a>
									</li>
									<li <?php if($page=='departments'){ echo 'class="active"';}?>>
										<a href="<?php echo base_url('home/departments')?>">Departments</a>
									</li>
									<li <?php if($page=='contactus'){ echo 'class="active"';}?>>
										<a href="<?php echo base_url('home/contactus')?>">Contact us</a>
									</li>
								</ul>
								<!--<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>-->

								<!-- Hamburger -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<!--<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>-->
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?php echo base_url('/')?>">Home</a></li>
				<li class="menu_mm"><a href="<?php echo base_url('home/aboutus')?>">About us</a></li>
				<li class="menu_mm"><a href="<?php echo base_url('home/courses')?>">Courses</a></li>
				<li class="menu_mm"><a href="<?php echo base_url('home/departments')?>">Departments</a></li>
				<li class="menu_mm"><a href="<?php echo base_url('home/contactus')?>">Contact us</a></li>
			</ul>
		</nav>
	</div>
	</div>
	<?php
		echo $content;
	?>
	
		<!--Modal-->
		<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="background-image:url(<?php echo base_url()?>images/courses_background.jpg)">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">Enroll now</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="contact_form">
				<div class="fill_height">
					<div class="fill_height">
						<?php $this->view('enroll_form-pop'); ?>
					</div>
				</div>
				</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
	<!--Modal ends-->
	
	<!--Footer-->
	<footer class="footer">
		<div class="footer_background" style="background-image:url(<?php echo base_url()?>images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col" align="left">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<img class="img-circle" style="border-radius:50%" src="<?php echo base_url()?>images/emplome.png" width="200">
										</a>
									</div>
									<div class="footer_about_text">
										<p></p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col" align="left">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li class="ftr-adr"><i class="fa fa-envelope" aria-hidden="true"></i> office@eduface.in</li>
											<li class="ftr-adr"><i class="fa fa-phone" aria-hidden="true"></i>  0480 2980078</li>
											<li class="ftr-adr"><i class="fa fa-mobile" aria-hidden="true"></i>  +91 85940 222 95</li>
											<li class="ftr-adr"><i class="fa fa-mobile" aria-hidden="true"></i>  +91 85940 222 97</li>
											<li class="ftr-adr"><i class="fa fa-map-marker" aria-hidden="true"></i> Kothaparambu, Kodungallur<br>
											Thrissur - Kerala</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col" align="left">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Links</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="#">About us</a></li>
											<li><a href="#">Courses</a></li>
											<li><a href="#">Departments</a></li>
											<li><a href="#">Contact us</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix" align="left">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Courses</div>
									<div style="float:left">
										<ul class="ftr-c-ul">
											<li>B.A</li>
											<li>B.B.A</li>
											<li>B.Com</li>
											<li>B.C.A</li>
											<li>B.Sc</li>
											<li>B.S.W</li>
										</ul>
									</div>
									<div style="float:left">
										<ul class="ftr-c-ul1">
											<li>M.B.A</li>
											<li>M.A</li>
											<li>M.Com</li>
											<li>M.C.A</li>
											<li>M.Sc</li>
											<li>M.S.W</li>
											<li>M.L.I.S</li>
										</ul>
									</div>
									
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://eduface.in" target="_blank">EDUFACE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<p id="p-text" class="text-center">Powered By - <a href="http://www.aimerr.com" target="_blank"><span id="amr">Aimerr <span id="sls">Solutions</span></span></a></p> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>


<script src="<?php echo base_url()?>plugins/scrollmagic/ScrollMagic.min.js"></script>


<script src="<?php echo base_url()?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>

<script src="<?php echo base_url()?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url()?>js/custom.js"></script>
<script src="<?php echo base_url()?>js/enroll.js"></script>

<script>
	$("form.enroll_form").submit(function(e) {
		e.preventDefault(); 
		var fid=this.id;
		
		var name=$('#'+fid+' .ef_name').val();
		var phone=$('#'+fid+' .ef_phone').val();
		var email=$('#'+fid+' .ef_email').val();
		var course=$('#'+fid+' .ef_course').val();
		var specialization=$('#'+fid+' .ef_specialization').val();
		
		var i=0;
		
		if(!name){
			$('#'+fid+' #name-error').html('Name is required*');
			var i=0;
		}else{
			$('#'+fid+' #name-error').html('');
			var i=i+1;
		}
		
		if(!phone){
			$('#'+fid+' #phone-error').html('Contact is required*');
			var i=0;
		}else{
			$('#'+fid+' #phone-error').html('');
			var i=i+1;
		}
		
		if(!course){
			$('#'+fid+' #course-error').html('Choose the course*');
			var i=0;
		}else{
			$('#'+fid+' #course-error').html('');
			var i=i+1;
		}
		
		if(!email){
			$('#'+fid+' #email-error').html('Email is required*');
			var i=0;
		}else{
			$('#'+fid+' #email-error').html('');
			var i=i+1;
		}
		
		if(!specialization){
			$('#'+fid+' #specialization-error').html('Enter the specialization*');
			var i=0;
		}else{
			$('#'+fid+' #specialization-error').html('');
			var i=i+1;
		}
		
		if(i==5){
			$(".lds-ripple").css("display", "block");
			var formData = new FormData(this);
			$.ajax({
				url: '<?php echo base_url('home/enroll_mailer')?>',
				type: 'POST',
				data: formData,
				success: function (data) {
					$('.lds-ripple').fadeOut('fast');
					if(data=='true'){
						$(".alert-success").css("display", "block");
						 $(".alert-success").fadeOut(8000);
						$( 'form.enroll_form' ).each(function(){
							this.reset();
						});
					}else{
						$(".alert-danger").css("display", "block");
						$(".alert-danger").fadeOut(8000);
					}
				},
				cache: false,
				contentType: false,
				processData: false
			});
		}
	
	
	
});
</script>

</body>
</html>