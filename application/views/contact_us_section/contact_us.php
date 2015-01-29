<html>
	<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/contact_us_section/contact_us.css" type="text/css" />

	</head>

<body>
	
<!-- main container -->
		<div id="whole_container">
			<div id="header">
				<!-- insert header here -->
				<?php include_once('includes/header_section/header.php'); ?>
				<!-- end header here -->
			</div>
			<div id="content_container">
				<div id="contact_us_text">
					Contact Us
			</div>
			
			<div id="description_text">
				Contact us by email or by given telephone and mobile number.
			</div>
			<br></br>
			<form class="form-inline">
				<div class="form-group">
					<div id="contact_person_img">
							<img class="profile_pic" src="<?php echo base_url().'image/contact_us/profile_pic.jpg'; ?>" width="200" height="200px"/>
					</div>
				</div>	
				<div class="form-group">
					<div id="information_contact_person_-container">
						<div id="name_text">
							Edward Solomon E. Cruz
						</div>
						<div id="position_text">
							Position:Manager
						</div>
						<div id="email_text">
							Email:Solomon@gmail.com
						</div>
						<div id="tel_text">
							Telephone No. :845-254-254
						</div>
						<div id="mobile_text">
							Mobile No. :09245152642
						</div>
					</div>
				</div>
			</form>
			<br> </br>
			<div id="second_contact">
				<form class="form-inline">
					<div class="form-group">
						<div id="contact_person_img">
								<img class="profile_pic" src="<?php echo base_url().'image/contact_us/profile_pic2.jpg'; ?>" width="200" height="200px"/>
						</div>
					</div>	
					<div class="form-group">
						<div id="information_contact_person_-container">
							<div id="name_text">
								Francisco Baltagor
							</div>
							<div id="position_text">
								Position:Designer
							</div>
							<div id="email_text">
								Email:Baltagor@gmail.com
							</div>
							<div id="tel_text">
								Telephone No. :845-254-254
							</div>
							<div id="mobile_text">
								Mobile No. :09245152642
							</div>
						</div>
					</div>
			</form>
			</div>
			
				<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
		</div>
</body>
</html>
