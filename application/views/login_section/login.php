<html>
	<head>
	<title>Login </title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/login_section/login3.css" type="text/css" />

	</head>

<body>
	
<!-- main container -->
		<div id="main_container">
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
			<br></br>
				
			<div id="content_container">
				<div id="job_vacany_post"><!--start of sign in form -->
						<form class="form-inline">
							<div class="form-group">
								<div id="sign_in">
									<h1 class="sign_text" >Sign In</h1>
									<input id="sign_text" type="text" class="form-control input-lg" placeholder="Username"  ></input> <br></br>
									<input id="pass_text" type="password" class="form-control input-lg" placeholder="Password"  ></input><br> </br>
									<div id="check_login">
										<label><input type="checkbox" > Remember me</input></label>
										<button class="login_button btn-lg">Log In</button>
									</div>
								</div>
							</div>	
							<div class="form-group">
								<div id="welcome_container">
									<div id="welcome_text">
										Welcome
									</div>
									<div id="content_welcome">
										<img class="company3" src="<?php echo base_url().'image/content.png';  ?>" width="600" height="150"   >
									</div>
									<!--Not yet registered -->
									<div id="not_registered_container">
										<div id="not_registered_text">
											Not yet Registered?
										</div>
										<button class="register_button btn-lg"><a  href="<?php echo base_url().'site/register_main'; ?>" class="register_text">Register Now</button>
									</div>
								</div>
							</div>	
						</form>
			</div>

				</div>	<!--end sign in form -->
				
				<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
				
						
				
		</div>			
		
</body>
</html>
