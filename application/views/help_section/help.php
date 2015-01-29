
	<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/help_section/help1.css" type="text/css" />

	</head>


	
<!-- main container -->
		<div id="main_container">
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->

			<!-- output container -->
				<div id="output_container">	
					<div id="output_help_banner">
						<iframe class="output" src="<?php echo base_url().'site/search_banner_output'; ?>" scrolling="no" name="banner_help"></iframe>
					</div>
				</div>	
				<br> </br>
				<!-- search section -->
				<div id="first_search_section"> 
					<form class="form-inline">
						<div class="form-group">
							<div class="first_button">
							<a href="<?php echo base_url().'site/search_banner_in_help'; ?>" target="banner_help">	<img class="button_first" src="<?php echo base_url().'image/search_buttons/search.png'; ?>" width="150" height="150px"/></a>
								<div id="first_search_text">
									Search
								</div>
								<div id="first_search_description">
									You can now search all companies and skills you want.
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="second_button">
								<a href="<?php echo base_url().'site/forecast_banner_in_help'; ?>" target="banner_help"><img class="button_second" src="<?php echo base_url().'image/search_buttons/forecast.png'; ?>" width="150" height="150px"/></a>
								<div id="second_forecast_text">
									Forecast Skills
								</div>
								<div id="second_forecast_description">
									In demand skills in the future can be seen here.
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="third_button">
								<a href="<?php echo base_url().'site/statistical_banner_in_help'; ?>" target="banner_help"><img class="third" src="<?php echo base_url().'image/search_buttons/statistical.png'; ?>" width="120" height="100px"/></a>
								<div id="third_statistical_text">
									Statistical Tool
								</div>
								<div  id="third_statistical_description">
									You can view the percentage of employed unemployed and graduates.
								</div>
							</div>
						</div>
					</form>
							
				</div> <!--end of first search section -->
				<br> </br>			
				<div id="second_search_section"> <!--second search section -->
					<form class="form-inline">
						<div class="form-group">
							<div class="forth_button">
								<a href="<?php echo base_url().'site/post_banner_in_help'; ?>" target="banner_help"><img class="button_forth" src="<?php echo base_url().'image/search_buttons/post_job.png'; ?>" width="150" height="150px"/></a>
								<div id="forth_post_job_text">
									Post Job
								</div>
								<div id="forth_post_job_description">
									You can post the available jobs in your company.
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="fifth_button">
								<a href="<?php echo base_url().'site/job_banner_in_help'; ?>" target="banner_help"><img class="button_fifth" src="<?php echo base_url().'image/search_buttons/job_vacancy.png'; ?>" width="150" height="150px"/></a>
								<div id="fifth_job_vacancy_text">
									Job Vacancies
								</div>
								<div id="fifth_job_vacancy_description">
									You can view the latest job vacancy here in Cavite.
								</div>
							</div>
						</div>
					</form>
							
				</div> <!--end of second search section -->
				<br> </br>
				<br>
			</br>
				<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
        		<!-- end footer -->
				<!-- end footer -->
				
		</div>
</body>
</html>