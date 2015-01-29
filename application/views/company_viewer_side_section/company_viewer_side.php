<html>
	<head>
	<title>Company Profile </title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/company_viewer_side_section/company_viewer_side.css" type="text/css" />
		

	</head>

	<body>
		
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
			<br> </br>
			<br>
		<div id="container" style="padding: 10px; font-family: Lato;">
				
				<div class="row" style="padding-left: 50px;">
					

					<div class="col-sm-3">
						<center>
						<div id="prof-pic">
							<img src="<?php echo base_url().'image/profile/logo.jpg'; ?>" id="prof-picture"/>
						</div>
						</center>
					</div>


					<div class="col-md-8">
						<div id="comp-details">
							<h2 style="font-family: Lato; font-weight: bold;">Accenture Inc.</h2>
							<p id="comp-detail-text"><strong>Location:</strong> 143 Rain Building, Bacoor City, Cavite </p>
							<p id="comp-detail-text"><strong>Email:</strong> 143 Rain Building, Bacoor City, Cavite </p>
							<p id="comp-detail-text"><strong>Contact No.:</strong> 046-471-1234 </p>
							<p id="comp-detail-text"><strong>Fax No.:</strong> 046 471 1234567 </p>
							<p id="comp-detail-text"><strong>Industry Type:</strong> Technology/IT </p>
						</div>
						<br/>
						
						<div>
							<button id="button-post"><span class="glyphicon glyphicon-pencil"></span>Post Job</button>
						</div>
						
					</div>

				</div>

				<br/>

				<!-- Job Offerings Section -->

		<div class="container" style="font-family: Lato;">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h2 style="font-family: Lato; font-weight: bold;">Job Offerings <small> Updated last January 13, 2015, 11:11pm </h2>
							</div>
							
							<div class="job-offered">
								<h2 style="font-family: Lato; font-weight: bold;"> Technical Support </h2><br/>
								<p id="job-offered-text"><strong>Courses Needed:</strong> BS Information Technology | BS Computer Science | ACT </p>
								<p id="job-offered-text"><strong>Department:</strong> ICT Department </p>
								<p id="job-offered-text"><strong>Employee Type Needed:</strong> Full Time | Intern </p>
								<p id="job-offered-text"><strong>Gender Needed:</strong> M | F </p>
								<p id="job-offered-text"><strong>Employer Name:</strong> Hazel Maneja </p>
								<p id="job-offered-text"><strong>Contact No.:</strong> 0917-1234-567 </p>
								<p id="job-offered-text"><strong>Email:</strong> hazel_maneja@yahoo.com </p>
								<p id="job-offered-text"><strong>Skills Needed:</strong> Computer Troubleshooting </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
			<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
	</body>
</html>
