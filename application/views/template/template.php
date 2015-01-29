<html>
	<head>	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/header_section/header2.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/footer_section/footer3.css" type="text/css" />
	</head>

<body>
	<div  id="main_container">
		<!-- header -->
			<div id="header_container">
						<form class="form-inline">
							<div class="form-group">
								<div id="left_header">
									<img src="<?php echo base_url().'image/logo.png'; ?>" width="150" height="150px"/>
								</div>
							</div>
							<div class="form-group">
								<div id="logo_header">
									<img src="<?php echo base_url().'image/jobskills.png'; ?>" width="250" height="100px"/>
								</div>			
							</div> 
						</form>
						<!-- navigation bar -->
						<div id="navigation">
							<div class="form-group">	
								<ul class="dropdown">
									<div id="navigation1">
										<li ><a href="<?php echo base_url().'site/home_main'; ?>">Home</a></li>
										<li><a href="<?php echo base_url().'site/contact_us_main'; ?>">Contact Us</a></li>
										<li ><a href="Contact.html"><a href="<?php echo base_url().'site/team_description_main'; ?>">About Us</a></li>	
										<li class="btn-group">	
											<button class="btn_login" data-toggle="dropdown">Employers <span class="caret"></span></button> 
											<ul class="sub_menu_login dropdown-menu" role="menu">
								                <li ><a  href="<?php echo base_url().'site/login_main'; ?>">Login</a></li>									                
								                <li ><a  href="<?php echo base_url().'site/register_main'; ?>">Sign Up</a></li>
									  		</ul>
										</li>
									</div>
								</ul>						
							</div>
						</div>
						<!-- Searchbar navigation -->
						<div id="search_container">
							<form class="form-inline">
								<div class="form-group">
								    <div class="btn-group">
								    	<div class="dropdown_search">
									       		 <button class="search btn-lg" data-toggle="dropdown">Search by Category<span class="caret"></span></button>
									        <ul class="dropdown-menu" role="menu">
									            <li><a href="#">Skills</a></li>
									            <li><a href="#">Company</a></li>
									            <li><a href="#">Location</a></li>
									        </ul> 
									    </div>
									</div>
							        <!-- textbox --> 
								    <div class="form-group">
								    	<div id="textbox"> 
											<input type="text" class="form-control input-lg" placeholder="Type here"  ></input> 
										</div>
									</div>
									<!-- search button -->
									<div class="form-group"> 
										<div id="search_button">
											<button class="search  btn-lg">Search</button>
										</div>
									</div>		
								</div>
							</form>
						</div>

			</div> <!-- end of header -->
			<div id="main_body">
				This is Main Contents
			</div>
			<!-- footer -->
			<div style="clear:both;" id="footer">
			<table style="margin:auto">
					 <tr>
					    <th style="font-family:lato;font-size:20px;color:black;padding:30px">Jobskills</th>
					    <th style="font-family:lato;font-size:20px;color:black;padding:30px">About Us</th>
					    <th style="font-family:lato;font-size:20px;color:black;padding:30px">FAQS</th>
					    <th style="font-family:lato;font-size:20px;color:black;padding:30px"><a  href="<?php echo base_url().'site/help_main'; ?>" class="help_text">Help</a></th>
					 </tr>
					 <tr>
					    <td style="text-align:center"><a href="#" class="description_text">Description</a></td>
					    <td style="padding:10px;text-align:center"><a  href="<?php echo base_url().'site/team_description_main'; ?>" class="our_team_text">Our Team</a></td>
					   
					 </tr>
					 <tr>
					    <td></td>
					    <td  style="padding:10px;text-align:center"><a  href="<?php echo base_url().'site/terms_condition_main'; ?>" class="our_team_text">Terms & Condition</a></td>
					    <td></td>
					 </tr>
					 <tr>
					    <td></td>
					    <td style="padding:10px;text-align:center"><a  href="<?php echo base_url().'site/statistic_main'; ?>" class="statistical_text">Statistical Report</a></td>
					    <td></td>
					 </tr>
					 <tr>
					    <td></td>
					    <td c style="padding:10px;text-align:center"><a  href="<?php echo base_url().'site/contact_us_main'; ?>" class="contact_us_text">Contact Us</a></td>
					    <td></td>
					</tr>
			</table>
		</div>
	</div> <!-- end main container -->
</html>
</body>