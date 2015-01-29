<html>
	<head>
	<title>Company Profile </title>

		<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/company_employer_side_section/company_employer_side4.css" type="text/css" />
		

	</head>

	<body>
		
			

			
	<div id="main-container">
		<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
			
			<br></br>
		<br></br>
			
				<div id="prof_pic">
					<img src="<?php echo base_url().'image/company_profile/logo.jpg'; ?>" id="prof_picture"/>
				</div>
			

			<br/>
			<div class="description_about_company">
				<form class="form-inline">
						<div class="form-group">
							<div id="com_details">
								<h2 style="margin-left:20px"><b> Accenture Inc. </b></h2>
								<br>
								<p style="margin-left:30px"><b>Location: </b>143 Rain Bldg., Bacoor City, Cavite</p>
								<p style="margin-left:30px"><b>Email Address: </b>accenture143@gmail.com</p>
								<p style="margin-left:30px"><b>Contact No.: </b>046-471-1434</p>
								<p style="margin-left:30px"><b>Fax No.: </b>046-471-1434454</p>
								<p style="margin-left:30px"><b>Industry Type: </b>Technology | IT</p>
								<p style="margin-left:30px"><b>Services Offered: </b>Call Center, Software Development</p>
							</div>
							<br>
							<div style="width:500px;height:200px" id="hr_list">
								<h2 style="margin-left:160px"><b> HR Manager </b> </h2>
								<br>
								<div id="warning_sign"> 
									Click "Add HR" to add Human Resource Manager 
								</div> 
								<br>

									 <a style="margin-left:190px;" class="add_hr_button btn-lg" href="<?php echo base_url().'site/hr_register_main'; ?>" id="text_post_job">Add HR</a>
								<br> </br>
								
							</div>
						</div>
						
						<div class="form-group">
							<div id="job_list">
								<h2 style="margin-left:150px"><b> Job Offerings </b> </h2>
								<br> 
								<div id="warning_sign_post">
									Click "Add Post Job" to post the available job in your company.
								</div>
								<br>
								
									 <a style="margin-left:190px;" class="add_hr_button btn-lg" href="<?php echo base_url().'site/choices_main'; ?>" id="text_post_job">Post Job</a>
								
								<br></br>
							</div>
						</div>
				</form>
			</div>

			

			
	</div> <!-- main-container -->
			<!-- insert footer here-->
			<br/>
			<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
	</body>
</html>
