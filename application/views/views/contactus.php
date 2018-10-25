	<div class="home" style="height:182px">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Contact us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
					<div class="contact_info_title">Contact Form</div>
						<div class="contact_form">
							<form class="comment_form contact_form">
								<div>
									<div class="form_title">Name</div>
									<input type="text" class="comment_input cname" name="name">
									<p id="name-error" class="ef_error"></p>
								</div>
								<div>
									<div class="form_title">Contact No</div>
									<input type="text" class="comment_input cphone" name="phone">
									<p id="phone-error" class="ef_error"></p>
								</div>
								<div>
									<div class="form_title">Email</div>
									<input type="email" class="comment_input cemail" name="email">
									<p id="email-error" class="ef_error"></p>
								</div>
								<div>
									<div class="form_title">Message</div>
									<textarea class="comment_input comment_textarea cmessage" name="message"></textarea>
									<p id="message-error" class="ef_error"></p>
								</div>
								<div class="alert alert-success">
								   Message sent <strong>successfully!</strong>
								</div>
								<div class="alert alert-danger">
								   Message sending<strong> failed!</strong> Try again.
								</div>
								<div>
									<button type="submit" class="comment_button trans_200" style="float:left;">submit now</button>
									<div class="lds-ripple" style="float:left; margin-left:12px; margin-top:10px;"><div></div><div></div></div>
								</div>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
							<div class="contact_info_text">
							</div>
							<div class="contact_info_location">
								<div class="footer_contact_info">
										<ul>
											<li class="ftr-adr"><i class="fa fa-envelope" aria-hidden="true"></i> office@eduface.in</li>
											<li class="ftr-adr"><i class="fa fa-phone" aria-hidden="true"></i>  +91 8089 843 778</li>
											<li class="ftr-adr"><i class="fa fa-mobile" aria-hidden="true"></i>  +91 9567 896 639</li>
											<li class="ftr-adr"><i class="fa fa-map-marker" aria-hidden="true"></i> Kothaparambu, Kodungallur<br>
											Thrissur - Kerala</li>
										</ul>
									</div>
							</div>
							<div class="contact_info_location">
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
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?php echo base_url()?>plugins/marker_with_label/marker_with_label.js"></script>
<script src="<?php echo base_url()?>js/contact.js"></script>

<script>
	$("form.contact_form").submit(function(e) {
	e.preventDefault(); 
	var fid=this.id;
	
	var name=$('.cname').val();
	var phone=$('.cphone').val();
	var message=$('.cmessage').val();
	
	var i=0;
	
	if(!name){
		$('#name-error').html('Name is required*');
		var i=0;
	}else{
		$('#name-error').html('');
		var i=i+1;
	}
	
	if(!phone){
		$('#phone-error').html('Contact is required*');
		var i=0;
	}else{
		$('#phone-error').html('');
		var i=i+1;
	}
	
	if(!message){
		$('#message-error').html('Message is required*');
		var i=0;
	}else{
		$('#message-error').html('');
		var i=i+1;
	}
	
	if(i==3){
		$(".lds-ripple").css("display", "block");
		var formData = new FormData(this);
		$.ajax({
			url: '<?php echo base_url('home/contact_mailer')?>',
			type: 'POST',
			data: formData,
			success: function (data) {
				alert(data);
				$('.lds-ripple').fadeOut('fast');
				if(data=='true'){
					$(".alert-success").css("display", "block");
					 $(".alert-success").fadeOut(8000);
					$( 'form.contact_form' ).each(function(){
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