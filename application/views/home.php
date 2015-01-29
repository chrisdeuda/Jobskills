<html>
	<head>
	<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
    <script>
    $(document).ready(function(){
    	$('.1_week').click(function(){
    		$('#older_post_carousel1').toggle();
    		
   	 	});
 
    	
     });
    </script>
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/home_section/home.css" type="text/css" />

	</head>

<body>
	
<!-- main container -->
		<div id="main_container">
			<!-- header -->
				<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
				<!--banner  -->
				<div id="banner_container">
						<img src="<?php echo base_url().'image/1.png';  ?>" width="100%"  >
											
				</div>
				<div id="first_content">
					<!-- latest job vacancy name -->
					<div id="latest_job_vacancy">
						<div id="latest_job_vacancy">
							Latest Job Vacancy
						
					<!-- older post navigation -->
							<div id="olderpost">
								<div class="btn-group">
							    	<div class="dropdown2">
									       <button  class="search btn-lg" data-toggle="dropdown">Older Post<span class="caret"></span></button>
								        <ul id="older_dropdown" class="dropdown-menu" role="menu">
								            <li><a  class="1_week">1 week</a></li>
								            <li><a class="2_week">2 weeks</a></li>
								            <li><a  class="3_week">3 weeks</a></li>
								            
								        </ul> 
								  	</div>            
						   		</div>
						   	</div>
						</div>								
					</div>
					<br> </br>
					<!-- job vacancy post -->
					<div id="job_vacany_post">
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
					</div> 
					<!-- view more hyperlink -->
					<div id="view_more_hyperlink">
						<a  href="#" class="view_more">View More</a>		
					</div>
				</div><!--end ng first content -->
				<br></br>
				<!-- older post toggle in jquery -->
				<div  id="older_post_carousel1">
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
						</div>
						<a  class="carousel-control left" href="#older_post_carousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
							
								<a class="carousel-control right" href="#older_post_carousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
					</div>
				</div>
				<!-- forecast skills section -->
				<div id="forecast_skills">
						<div id="forecast_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
							<ol class="carousel-indicators">
								<li data-target="#forecast_carousel" data-slide-to = "0" class="active" ></li>
								<li data-target="#forecast_carouselr" data-slide-to = "1" ></li>
						
							</ol>
							<div class="carousel-inner">
								<div class="item active">
										<img src="<?php echo base_url().'image/web_design1.png';  ?>" width="100%"  >
								</div>
								<div class="item">
									<img src="<?php echo base_url().'image/accountancy.png'; ?>" width="100%"  class="img-responsive">
								</div>
								
							</div>
								<a class="carousel-control left" href="#forecast_carousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="carousel-control right" href="#forecast_carousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
					</div>							
										
				</div>

				<!-- footer section -->
					<div id="footer">
						<table style="margin:auto">
								 <tr>
								    <th style="font-family:lato;font-size:20px;color:black;padding:20px">Jobskills</th>
								    <th style="font-family:lato;font-size:20px;color:black;padding:20px">About Us</th>
								    <th style="font-family:lato;font-size:20px;color:black;padding:20px">FAQS</th>
								    <th style="font-family:lato;font-size:20px;color:black;padding:20px"><a  href="<?php echo base_url().'site/help_main'; ?>" class="help_text">Help</a></th>
								 </tr>
								 <tr>
								    <td style="text-align:center"><a href="#" class="description_text">Description</a></td>
								    <td style="padding:10px;text-align:center"><a href="#" class="description_text">Our Team</a></td>
								   
								 </tr>
								 <tr>
								    <td></td>
								    <td  style="padding:10px;text-align:center"><a href="#" class="description_text">Terms & Condition</a></td>
								    <td></td>
								 </tr>
								 <tr>
								    <td></td>
								    <td style="padding:10px;text-align:center"><a href="#" class="description_text">Privacy Statement</a></td>
								    <td></td>
								 </tr>
								 <tr>
								    <td></td>
								    <td c style="padding:10px;text-align:center"><a href="#" class="description_text">Contact Us</a></td>
								    <td></td>
								</tr>
						</table>
					</div>
		</div>
	</table>
</body>
</html>
