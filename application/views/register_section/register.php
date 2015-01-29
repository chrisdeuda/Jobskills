
	<head>
	<title>Register </title>

		<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/register_section/register4.css" type="text/css" />
		

	</head>
	

	<!-- Main Content-->
	<div id="main_container">
		<div id="header">	
			<!-- insert header here -->
				<?php include_once('includes/header_section/header.php'); ?>
				<!-- end header here -->
		</div>
				<br></br>
		<div style="clear:both;width:900px;" class="container">
			<br/>

			<div class="row">
				<div class="col-lg-12" id="com-reg">
					<br/>
					<h2 id="header2"><b>Company Registration </b></h2>
					<center>

					<div id="reg-form">

						<div id="com-logo">
							<center>
							<div id="pic">
							</div>
							<br>
							<div >
								<button class="insert_button btn-lg">INSERT LOGO</button>
							</div>
							</center>
						</div>
						<br></br>
						<br></br>
						<table style="float:left; height: 150px;">
							<tr>
								<td>
									<label for="company_name">Company Name:</label><br/>
									<input id="company_name" type="text" class="form-control input-lg" >
								</td>
							</tr>
							<tr>
								<td>
									<label for="company_address">Company Address:</label><br/>
									<input id="company_address" type="text" class="form-control input-lg" >
								</td>
							</tr>
						</table>
						
						<table width="100%">
							<tr>
								<td>
									<label for="telephone_no">Telephone No:</label><br/>
									<input id="telephone_no" type="text" class="form-control input-lg" >
								</td>
								<td>
									<label for="mobile_no">Mobile No:</label><br/>
									<input id="mobile_no" type="text" class="form-control input-lg" >
								</td>
								<td>
									<label for="fax_no">Fax No:</label><br/>
									<input id="fax_no" type="text" class="form-control input-lg" >
								</td>
							</tr>
						</table>
						<br/>
						<table width="100%">
							<tr>
								<td>
									<label for="email_address">Email Address:</label><br/>
									<input id="email_address" type="text" class="form-control input-lg" >
								</td>

								<td>
									<label for="service_offered">Service Offered:</label><br/>
									<select id="service_offered" >
										<option value="lorem1">Lorem Impsium 1</option>
										<option value="lorem2">Lorem Impsium 2</option>
										<option value="lorem3">Lorem Impsium 3</option>
										<option value="lorem4">Lorem Impsium 4</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<br/>
									<label for="industry_type">Industry Type:</label><br/>
									<select id="industry_type" >
										<option value="lorem1">Lorem Impsium 1</option>
										<option value="lorem2">Lorem Impsium 2</option>
										<option value="lorem3">Lorem Impsium 3</option>
										<option value="lorem4">Lorem Impsium 4</option>
									</select>
								</td>
							</tr>
						</table>
						<div class="form-actions" style="float: right;">
							


							<a class = "button btn-lg" href="<?php echo base_url().'site/company_employers_side_main'; ?>" id="button_text">Submit</a>
							<button class="button btn-lg">Reset</button>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>
	<!-- End of Main Content -->
	<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
	
