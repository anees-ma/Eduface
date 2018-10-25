<form class="counter_form_content d-flex flex-column align-items-center justify-content-center enroll_form" id="enroll_fp">
	<input type="text" class="counter_input ef_name" placeholder="Your Name:" name="name">
	<p id="name-error" class="ef_error"></p>
	<input type="tel" class="counter_input ef_phone" placeholder="Phone:" name="phone">
	<p id="phone-error" class="ef_error"></p>
	<input type="email" class="counter_input ef_email" placeholder="Email:" name="email">
	<p id="email-error" class="ef_error"></p>
	<select name="course" id="counter_select" class="counter_input counter_options ef_course">
		<option disabled selected style="margin-top:8px; margin-bottom:8px; font-size:18px; background-color:#14bdee;color:white">UG Courses</option>
		<option value="B.B.A">B.B.A</option>
		<option value="B.COM">B.COM</option>
		<option value="B.C.A">B.C.A</option>
		<option value="B.SC">B.SC</option>
		<option value="B.S.W">B.S.W</option>
		
		<option disabled style="margin-top:8px; margin-bottom:8px; font-size:18px; background-color:#14bdee;color:white">PG Courses</option>
		<option value="M.B.A">M.B.A</option>
		<option value="M.COM">M.COM</option>
		<option value="M.C.A">M.C.A</option>
		<option value="M.SC">M.SC</option>
		<option value="M.S.W">M.S.W</option>
		
		<option value="Diploma Course">Diploma Course</option>
	</select>
	<p id="course-error" class="ef_error"></p>
	<input type="text" class="counter_input ef_specialization" placeholder="Specialization:" name="specialization">
	<p id="specialization-error" class="ef_error"></p>
	<div class="alert alert-success">
	   Application sent <strong>successfully!</strong>
	</div>
	<div class="alert alert-danger">
	   Application sending<strong> failed!</strong> Try again.
	</div>
	<div class="lds-ripple" style="float:left"><div></div><div></div></div>
	<button type="submit" class="counter_form_button" style="background-color:#384158">Enroll now</button>
</form>