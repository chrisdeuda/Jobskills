
    <!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
    <script>
    $(document).ready(function(){
    	$('.1_week').click(function(){
    		$('#older_post_carousel1').toggle();

   	 	});
   	 		$('.2_week').click(function(){
    		$('#older_post_carousel1').toggle();

   	 	});
   	 		$('.3_week').click(function(){
    		$('#older_post_carousel1').toggle();

   	 	});


     });
    </script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/home_section/home1.css" type="text/css" />

<!-- main container -->
		<div id="main_container">
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->

			<br></br>
				<div id="banner_container"> <!--start banner  -->
						<img src="<?php echo base_url().'image/1.png';  ?>" width="100%"  >

				</div> <!--end banner  -->
				<div id="first_content"> <!--start first section  -->

					<div id="latest_job_vacancy"> <!--container of latest job vacancy and older post button -->
						<div id="latest_job_vacancy">
							Latest Job Vacancy

							<div id="olderpost">  <!--start of older post navigation -->
								<div class="btn-group">
							    	<div class="dropdown2">
									       <button style="width:150px;height:40px;line-height:10px"  class="search btn-lg" data-toggle="dropdown">Older Post<span class="caret"></span></button>
								        <ul id="older_dropdown" class="dropdown-menu" role="menu">
								            <li><a  class="1_week">1 week</a></li>
								            <li><a class="2_week">2 weeks</a></li>
								            <li><a  class="3_week">3 weeks</a></li>

								        </ul>
								  	</div>
						   		</div>
						   	</div>  <!--end of older post navigation -->
						</div>
					</div>  <!--end of container of latest job vacancy and older post button -->
					<br> </br>
					<br> </br>
					<!-- job vacancy post -->
					<div id="job_vacany_post"> <!--start job vacancy post -->
						<form class="form-inline">
							<div class="form-group">
								<div id="first_post">
									<img class="company1" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
									<div id="company_description1">
										Address:Gateway Business Park,General Trias Cavite<br>
										Contact Number:(046) 433-03235<br>
										Course Needed:ACT|BSCS|ACCOUNTANCY
									</div>
								</div>
							</div>
							<div class="form-group">
								<div id="second_post">
									<img class="company2" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
									<div id="company_description2">
										Address:Gateway Business Park,General Trias Cavite<br>
										Contact Number:(046) 433-03235<br>
										Course Needed: ACT|BSCS|ACCOUNTANCY
									</div>
								</div>
							</div>
							<div class="form-group">
								<div id="third_post">
									<img class="company3" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"   >
									<div id="company_description3">
										Address:Gateway Business Park,General Trias Cavite<br>
										Contact Number:(046) 433-03235<br>
										Course Needed: ACT|BSCS|ACCOUNTANCY
									</div>
								</div>
							</div>
							<div class="form-group">
								<div id="forth_post">
									<img class="company4" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
									<div id="company_description4">
										Address:Gateway Business Park,General Trias Cavite<br>
										Contact Number:(046) 433-03235<br>
										Course Needed: ACT|BSCS|ACCOUNTANCY
									</div>
								</div>
							</div>

						</form>
					</div> <!--end job vacancy post -->

					<div id="view_more_hyperlink"> <!--start view more hyperlink -->
						<button class="view_more_button btn-lg"><a  href="<?php echo base_url().'site/view_more_main'; ?>" class="view_more">View More</a></button>
					</div>
				</div><!--end ng first content -->
				<br></br>
				<br></br>


				<div  id="older_post_carousel1"> <!--start older post toggle in jquery -->
					<div id="older_post_carousel" class="carousel slide" data-interval="false" >
						<ol class="carousel-indicators">
								<li data-target="#older_post_carousel" data-slide-to = "0" class="active" ></li>
								<li data-target="#older_post_carousel" data-slide-to = "1" ></li>
								<li data-target="#older_post_carousel" data-slide-to = "2"></li>
							</ol>

						<div class="carousel-inner">  <!--start ng carousel -->
							<div class="item active">
								<form class="form-inline">
									<div class="form-group">
										<div id="first_post">
											<img class="company1" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"  >
											<div id="company_description1">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="second_post"> <!--end ng second post -->
											<img class="company2" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
											<div id="company_description2">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="third_post"> <!--end ng third post -->
											<img class="company3" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"   >
											<div id="company_description3">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="forth_post"> <!--end ng forth post-->
											<img class="company4" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
											<div id="company_description4">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="item">  <!--second slides -->
								<form class="form-inline">
									<div class="form-group">
										<div id="first_post">
											<img class="company1" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"  >
											<div id="company_description1">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed:ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="second_post">
											<img class="company2" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
											<div id="company_description2">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="third_post">
											<img class="company3" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"   >
											<div id="company_description3">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="forth_post">
											<img class="company4" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
											<div id="company_description4">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="item"> <!--third slides -->
								<form class="form-inline">
									<div class="form-group">
										<div id="first_post">
											<img class="company1" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"  >
											<div id="company_description1">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="second_post">
											<img class="company2" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
											<div id="company_description2">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="third_post">
											<img class="company3" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"   >
											<div id="company_description3">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
									<div class="form-group">
										<div id="forth_post">
											<img class="company4" src="<?php echo base_url().'image/company.png';  ?>" width="220" height="150"    >
											<div id="company_description4">
												Address:Gateway Business Park,General Trias Cavite<br>
												Contact Number:(046) 433-03235<br>
												Course Needed: ACT|BSCS|ACCOUNTANCY
											</div>
										</div>
									</div>
								</form>
							</div>
						</div> <!--end ng carousel -->
						<a  class="carousel-control left" href="#older_post_carousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>

								<a class="carousel-control right" href="#older_post_carousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
					</div>
				</div> <!--end older post toggle in jquery -->


				<!-- footer section -->
					<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
		</div>
	</table>
</body>
</html>

