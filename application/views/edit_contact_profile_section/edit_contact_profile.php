<html>
	<head>
		<title>Edit Profile</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/edit_contact_profile_section/edit_contact_profile_section.css" type="text/css" />

	</head>

<body>
	
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
								<li style="font-family:lato;font-size:15px;padding:10px;"><span class="glyphicon glyphicon-chevron-right"></span> <b> Complete Address:<input id="address_box" type="text" class="form-control input-sm" > </b> </li>
								<li style="font-family:lato;font-size:15px;padding:10px;"><span class="glyphicon glyphicon-chevron-right"></span> <b> Employee Type: </b> <input id="employee_type_box" type="text" class="form-control input-sm" > </li>
								<li style="font-family:lato;font-size:15px;padding:10px;"><span class="glyphicon glyphicon-chevron-right"></span> <b> Telephone No: </b><input id="telephone_box" type="text" class="form-control input-sm" > </li>
								<li style="font-family:lato;font-size:15px;padding:10px;"><span class="glyphicon glyphicon-chevron-right"></span> <b> Mobile No:</b> <input id="mobile_no_box" type="text" class="form-control input-sm" > </li>
								<li style="font-family:lato;font-size:15px;padding:10px;"><span class="glyphicon glyphicon-chevron-right"></span> <b> Email Address: </b> <input id="email_add_box" type="text" class="form-control input-sm" ></li>
							</ul>
						</ol>

					
					</div>
					<!-- end of right side -->

					<!-- bottom div -->
					
						
							<a href="<?php echo base_url().'site/choices_main'; ?>" class="text_post_job">Edit Profile</a>
						
					
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