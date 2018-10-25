<form class="counter_form_content d-flex flex-column align-items-center justify-content-center enroll_form" id="enroll_fh">
	<div class="counter_form_title">Enroll now</div>
	<input type="text" class="counter_input ef_name" placeholder="Your Name:" name="name">
	<p id="name-error" class="ef_error"></p>
	<input type="tel" class="counter_input ef_phone" placeholder="Phone:" name="phone">
	<p id="phone-error" class="ef_error"></p>
	<input type="email" class="counter_input ef_email" placeholder="Email:" name="email">
	<p id="email-error" class="ef_error"></p>
	<select name="course" id="counter_select" class="counter_input counter_options ef_course">
		<option disabled>UG Courses</option>
		<option>B.B.A</option>
		<option>B.COM</option>
		<option>B.C.A</option>
		<option>B.SC</option>
		<option>B.S.W</option>
		
		<option disabled>PG Courses</option>
		<option>M.B.A</option>
		<option>M.COM</option>
		<option>M.C.A</option>
		<option>M.SC</option>
		<option>M.S.W</option>
		
		<p id="course-error" class="ef_error"></p>
	</select>
	<input type="text" class="counter_input ef_specialization" placeholder="Specialization:" name="specialization">
	<p id="specialization-error" class="ef_error"></p>
	<div class="alert alert-success">
	   Application sent <strong>successfully!</strong>
	</div>
	<div class="alert alert-danger">
	   Application sending<strong> failed!</strong> Try again.
	</div>
	<div class="lds-ripple" style="float:left"><div></div><div></div></div>
	<button type="submit" class="counter_form_button">Enroll now</button>
	
</form>