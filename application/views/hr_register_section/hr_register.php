
	<head>
	<title>HR Register </title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/hr_register_section/hr_register1.css" type="text/css" />

	</head>


	<!-- Main Content-->
	<div id="main_container">
		<div id="header">
			<!-- insert header here -->
				<?php include_once('includes/header_section/header.php'); ?>
				<!-- end header here -->
		</div>
			<br></br>

		<div class="container" style="max-width: 900px;">

			<div class="row">
				<div  id="hr-reg">
					<br/>
					<h2 style="color:#3f3f3f;font-size: 40px;font-family: lato;font-weight: bold;margin:20px;"><b>Human Resource Manager </b></h2>
					<center>

					<div id="reg-form">

						<div id="hr-pic">
							<center>
							<div id="pic">
							</div>
							<br>
							<div>

								<button class="insert_button btn-lg">INSERT LOGO</button>
							</div>
							</center>
						</div>
						<br></br>
						<br></br>

						<table style="float:left; height: 150px;">
							<tr>
								<td>
									<label for="name">Name:</label><br/>
									<input id="name" type="text" class="form-control input-lg" >
								</td>
							</tr>
							<tr>
								<td>
									<label for="email_address">Email Address:</label><br/>
									<input id="email_address" type="text" class="form-control input-lg" >
								</td>
							</tr>
						</table>

						<table width="100%">
							<tr>
								<td>
									<label for="telephone_no">Telephone No.:</label><br/>
									<input id="telephone_no" type="text" class="form-control input-lg" >
								</td>
								<td>
									<label style="margin-left:20px" for="mobile_no">Mobile No.:</label><br/>
									<input id="mobile_no" type="text" class="form-control input-lg" >
								</td>
								<td>
									<label style="margin-left:20px" for="fax_no">Fax No.:</label><br/>
									<input id="fax_no" type="text" class="form-control input-lg" >
								</td>
							</tr>
						</table><br/>
						<table style="float:left;" >
							<tr>
								<td>
									<label for="username">Username</label><br/>
									<input  id="username" type="text" class="form-control input-lg" >

								</td>
								<td>
									<label style="margin-left:20px" for="password">Password</label><br/>
									<input style="margin-left:20px" id="password" type="password" class="form-control input-lg" >
								</td>
								<td>
									<label style="margin-left:20px" for="confirm_password">Comfirm Password</label><br/>
									<input style="margin-left:20px" id="confirm_password" type="password" class="form-control input-lg" >
								</td>
							</tr>



						</table>

					</div>
					<!-- buttons(submit & reset) -->
					<br></br>
					<div class="form-actions" style="float: right;margin:40px;">
						<!--
							<button class="button btn-lg"><a href="<?php echo base_url().'site/contact_information_main'; ?>" class="submit_button">Submit</button>
							<button class="button btn-lg">Reset</button>
						</div>-->
						<input type="button" class="btn btn-info" value="Submit" id="btn_submit">
						<input type="reset" class="btn btn-info" value="Reset" id="btn_reset">
				</div>
									<script src="<?php echo base_url().'public/js/registration/company_hr_validation.js'; ?>" type="text/javascript"> </script>

			</div>

		</div>

	</div>
	<!-- End of Main Content -->
	<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
	</div>
	</body>

</html>