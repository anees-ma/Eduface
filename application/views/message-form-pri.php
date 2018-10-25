<style>
	.ef_error{
		color:red;
	}
</style>
<form class="counter_form_content d-flex flex-column align-items-center justify-content-center contact_form" id="msg-form-pri">
	<input type="text" class="counter_input cname" placeholder="Your Name:" name="name" id="cpname">
	<p id="pname-error" class="ef_error"></p>
	<input type="tel" class="counter_input cphone" placeholder="Phone:" name="phone" id="cpphone">
	<p id="pphone-error" class="ef_error"></p>
	<input type="email" class="counter_input cemail" placeholder="Email:" name="email" id="cpemail">
	<p id="pemail-error" class="ef_error"></p>
	<textarea class="comment_input comment_textarea cmessage" placeholder="Message:" name="message" id="cpmessage"></textarea>
	<p id="pmessage-error" class="ef_error"></p>
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
	$("form#msg-form-pri").submit(function(e) {
	e.preventDefault();
	
	var name=$('#cpname').val();
	var phone=$('#cpphone').val();
	var message=$('#cpmessage').val();
	
	var i=0;
	$('#name-error').html('Name is required*');
	
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
					$( 'form#msg-form-pri' ).each(function(){
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