
	<head>
	<title>Post JObs </title>

    <script>
    $(document).ready(function(){
    	$('.1_week').click(function(){
    		$('#older_post_carousel1').toggle();
    		
   	 	});
 
    	
     });
    </script>
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/post_job_section/post_job1.css" type="text/css" />

	</head>


	
<!-- main container -->
		<div id="main_container">
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
			<br></br>
				
				<div id="form1_job_post_container"><!--start of First form job post -->
					<form class="form-inline">
						<div class="form-group">
							<div id="form1_job_post">
								<h1 class="form1_job_post">Post Job</h1>
								<div id="employers_name_text">
									Employer's Name <br>
									<input id="employers_textbox" type="text" class="form-control input-lg"   ></input>
								</div><br>
								<div id="job_title_text">
									Job Title <br>
									<select>
										<option value="web_designer">Web designer</option>
										<option value="secretary">Secretary</option>
										<option value="cashier">Cashier</option>
										<option value="programmer">Programmer</option>
										<option value="manager">Manager</option>
									</select>
								</div><br>
								<div id="gender_text">
									Gender <br>
									<label class="male"><input class="male" type="checkbox" > Male</input></label>
									<label class="female"><input class="female" type="checkbox" > Female</input></label>
								</div>
								<div id="contact_no">
									<div id="contact_text">
											Contact No.<br>
										<input id="employers_textbox" type="text" class="form-control input-lg"   ></input>
									</div>
								</div><br>
								<div id="Employee Type Needed">
									<div id="employee_type_needed_text">
											Employee Type Needed<br>
										<select class="employee_type_needed">
											<option value="designer">Full Time</option>
											<option value="programmer">Contractual</option>
											<option value="cook">6 months</option>
										</select>
										
									</div>
								</div><br>
								<div id="skills_needed">
									<div id="skills_needed_text">
										Skills Needed <br>
										<select class="skills_needed">
											<option value="designer">Designer</option>
											<option value="programmer">programmer</option>
											<option value="cook">cook</option>
										</select>
									</div>
								</div>
							</div>
						</div>
							<div class="form-group"> <!--start of second form job post -->
								<div id="form2_job_post">
									<div id="course_needed_text">
										Course Needed<br></br>
										<label class="science_computer"><input class="computer_science" type="checkbox" >BS Computer Science</input></label>
										<label class="information_computer"><input class="information_science" type="checkbox" >BS Information Technology</input></label>
										<label class="accountacy_computer"><input class="accountancy_science" type="checkbox" >BS Accountancy</input></label><br></br>
										<label class="engineering_computer"><input class="engineering_science" type="checkbox" >BS Computer Engineering</input></label>
										<label class="architecture_computer"><input class="architecture_science" type="checkbox" >BS Architecture</input></label>
										<label class="communication_computer"><input class="communication_science" type="checkbox" >BS Communication</input></label><br> </br>
										<label class="criminology_computer"><input class="criminology_science" type="checkbox" >BS Criminology</input></label>
										<label class="phsychology_computer"><input class="physchology_science" type="checkbox" >BS Psychology</input></label>
										<label class="customs_computer"><input class="customs_science" type="checkbox" >BS Customs</input></label><br></br>
										<label class="electronics_computer"><input class="electronics_science" type="checkbox" >BS Electronics</input></label>
									</div>
									<div id="physical_requirement">
										<div id="physical_requirement_text">
											Physical Requirement
										</div>
										<div id="height_text">
											Height <br>
											<input id="height_textbox" type="text" class="form-control input-sm" placeholder="Male"  ></input>
											<br>
											<input id="height_textbox" type="text" class="form-control input-sm" placeholder="Female"  ></input>
											<br>
										</div>
										<div id="gender_preference">
											<div id="gender_preference_text">
												Gender Preference <br><br>
												<label class="male"><input class="male" type="checkbox" > Male</input></label>
												<label class="female"><input class="female" type="checkbox" > Female</input></label>
												<label class="both"><input class="both" type="checkbox" > Both</input></label>
											</div>
										</div>	
									</div>
									<br>
									<!-- button for submit and reset -->
									<div id="buttons">
										<button class="button btn-lg"><a href="<?php echo base_url().'site/company_employers_side_main'; ?>" class="button_text">Submit</a></button>
									<button class="button btn-lg">Reset</button>
									</div>
									
								</div>
							</div><!--end of First form job post -->	
				</div><!--end of First form job post -->
				<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
        		<!-- end footer -->
				<!-- end footer -->

		</div>



</body>
</html>		