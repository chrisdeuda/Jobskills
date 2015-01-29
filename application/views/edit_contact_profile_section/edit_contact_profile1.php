
	<head>
		<title>Edit Profile  of HR</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/edit_contact_profile_section/edit_contact_profile_section.css" type="text/css" />

	</head>


	
<!-- main container -->
		<div id="main_container">
			
			<div id="header">
				<!-- insert header here -->
				<?php include_once('includes/header_section/header.php'); ?>
				<!-- end header here -->
				<br></br>
			</div>
				
				<div id="page">
					
					<!-- div for the left side -->
					<div id="left-style">

						<!-- inner div -->
						<div id="inner-left-style">
							<table cellspacing="7px" align="center">
								<tr>
									<th> <img class="profile" src="<?php echo base_url().'image/contact_info/profile_pic.png';  ?> "  </th>
								</tr>
									<th style="font-family:lato;font-size:20px;color:black;text-align:center;padding:5px">Ana Marie Escola</th>
								</tr>
									<td style="font-family:lato;font-size:20px;color:white;padding:5px">Position:<input id="position_box" type="text" class="form-control input-sm" ></input></td>
								</tr>
									<td style="font-family:lato;font-size:20px;color:white;padding:5px">Degree:<input id="degree_box" type="text" class="form-control input-sm" ></td>
								</tr>
									<td style="font-family:lato;font-size:20px;color:white;padding:5px">School:<input id="school_box" type="text" class="form-control input-sm" ></td>
								</tr>
									<td style="font-family:lato;font-size:20px;color:white;padding:5px">Mobile No.:<input id="mobile_box" type="text" class="form-control input-sm" ></td>
								</tr>
									<td style="font-family:lato;font-size:20px;color:white;padding:5px">Email Address:<input id="email_box" type="text" class="form-control input-sm" ></td>
							</table>
						</div>
						<!-- inner left div end -->
					</div>
					<!-- left div end -->

					<!-- for the right side -->
					<div id="right-side">
						<p style="font-family:lato;font-size:30px;color:#3f3f3f;font-weight:bold;"><b>BALABAT INTERNATIONAL CORPORATION</b></p>
						<ol>
							<ul id="list-unstyled">
								<li style="font-family:lato;font-size:15px;padding:10px;color:black"> <b> Complete Address:<input id="address_box" type="text" class="form-control input-sm" > </b> </li>
								<li style="font-family:lato;font-size:15px;padding:10px;color:black"> <b> Employee Type: </b> <input id="employee_type_box" type="text" class="form-control input-sm" > </li>
								<li style="font-family:lato;font-size:15px;padding:10px;color:black"> <b> Telephone No: </b><input id="telephone_box" type="text" class="form-control input-sm" > </li>
								<li style="font-family:lato;font-size:15px;padding:10px;color:black"> <b> Mobile No:</b> <input id="mobile_no_box" type="text" class="form-control input-sm" > </li>
								<li style="font-family:lato;font-size:15px;padding:10px;color:black"> <b> Email Address: </b> <input id="email_add_box" type="text" class="form-control input-sm" ></li>
							</ul>
						</ol>

					
					</div>
					<!-- end of right side -->

					<!-- bottom div -->
					<div id="ul-rightside">
						<ul>
							<button class="edit btn-lg"><a href="<?php echo base_url().'site/contact_information_main'; ?>" class="edit_profile_text">Finish<a></li></button>
						</ul>
					</div>
					<!-- end bottom div -->
				</div>
				<br></br>
				<br></br>
						<!-- end of page -->
				<!-- footer section -->
				<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
		</div>
</body>
</html>