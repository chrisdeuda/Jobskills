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