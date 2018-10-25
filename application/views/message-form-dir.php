<style>
	.ef_error{
		color:red;
	}
</style>
<form class="counter_form_content d-flex flex-column align-items-center justify-content-center contact_form" id="msg-form-dir">
	<input type="text" class="counter_input cname" placeholder="Your Name:" name="name" id="cname">
	<p id="name-error" class="ef_error"></p>
	<input type="tel" class="counter_input cphone" placeholder="Phone:" name="phone" id="cphone">
	<p id="phone-error" class="ef_error"></p>
	<input type="email" class="counter_input cemail" placeholder="Email:" name="email" id="cemail">
	<p id="email-error" class="ef_error"></p>
	<textarea class="comment_input comment_textarea cmessage" placeholder="Message:" name="message" id="cmessage"></textarea>
	<p id="message-error" class="ef_error"></p>
	<div class="alert alert-success" style="margin-top:20px !important;">
	   Message sent <strong>successfully!</strong>
	</div>
	<div class="alert alert-danger" style="margin-top:20px !important;">
	   Message sending<strong> failed!</strong> Try again.
	</div>
	
		<div class="lds-ripple"><div></div><div></div></div>
		<div>
		<button type="submit" class="comment_button trans_200" style="margin-top:20px">submit now</button>
	</div>
</form>
<script>
	$("form#msg-form-dir").submit(function(e) {
	e.preventDefault(); 
	var fid=this.id;
	
	var name=$('#cname').val();
	var phone=$('#cphone').val();
	var message=$('#cmessage').val();
	
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
				$('.lds-ripple').fadeOut('fast');
				if(data=='true'){
					$(".alert-success").css("display", "block");
					 $(".alert-success").fadeOut(8000);
					$( 'form#msg-form-dir' ).each(function(){
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