<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/choices_section/choices1.css" type="text/css" />	
<!-- main container -->
		<div id="main_container">
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
			
				<div id="graduates_container"> <!-- container inside the graduate word-->
					<form class="form-inline">
							<div class="form-group">
								<div id="graduates_section">
									<h1 class="graduates_text" ><center>Fresh Graduates</center></h1>
										<button class="started_button btn-lg"><a href="<?php echo base_url().'site/post_job_main'; ?>" class="post_button">Get Started</a></button>
									
								</div>
							</div>	
							<div class="form-group">
								<div id="picture_center">
									<img src="<?php echo base_url().'image/experience/picture_center.png'; ?>" width="200" height="250px"/>
								</div>
							</div>	
							<div class="form-group">
								<div id="experience_section">
									<h1 class="experience_text" >Experienced</h1>
										<button class="started_button btn-lg"><a href="<?php echo base_url().'site/experience_main'; ?>" class="post_button">Get Started</button>
									
								</div>
							</div>	
						</form>
				</div> <!-- end of container inside the graduate word-->
				<!-- footer section -->
				<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
		</div>
</body>
</html>
