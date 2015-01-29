<!-- HEADER -->
<html>
<head>	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/header_section/header.css" type="text/css" />
	</head>
<body>
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
									<li><a href="About.html">Contact Us</a></li>
									<li ><a href="Contact.html">Find Jobs</a></li>
									<li ><a href="Contact.html">About Us</a></li>	
									<li class="btn-group">	
										<button class="btn_login" data-toggle="dropdown">Employers Log in<span class="caret"></span></button> 
										<ul class="dropdown-menu" role="menu">
							                <li ><a  href="<?php echo base_url().'site/login_main'; ?>">Login</a></li>									                
							                <li ><a  href="home.html">Sign Up</a></li>
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
				</div>
</body>
</html>