
	<head>
		<title>Statistical Report </title>
			
			<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/statistic_section/statistic.css" type="text/css" />
</head>
	

<div id="main_container">
			<!-- insert header here -->
			<?php include_once('includes/header_section/header.php'); ?>
			<!-- end header here -->
	<!--main content ng statistical report -->
	<div class="container">
		<h1 id="stats"><strong> Statistical Report </strong></h1>
		<p id="stats">Those reports are pdf files and can be download for free. </p>
		<br/>
		<div class="row" style="font-family: Lato;">
			<div class="col-md-4" style="border-right: 1px solid #868686;">
				<center><img src="<?php echo base_url().'image/stats_img/2.jpg';?>" id="image-title"/></center>
				<h3 id="stats"><center>Unemployed Rate</center></h3>
				<p style="text-align: justify; color: #3f3f3f;">Cavite registered a record of 9.5 unemployed rate as the economy continue to rise in the province. Based on the resources of Department of Labor and Employment (DOLE).</p>
				<center><button id="dl-button" class="btn-lg">Download Report</button></center>
			</div>
	
			<div class="col-md-4" style="border-right: 1px solid #868686; padding-left: 10px;">
				<center><img src="<?php echo base_url().'image/stats_img/1.jpg';?>" id="image-title"/></center>
				<h3 id="stats"><center>Fresh Graduates</center></h3>
				<p style="text-align: justify; color: #3f3f3f;">Cavite produced 60,000 job vacancies for fresh graduates of the province based on the resources of Department of Labor and Employment (DOLE).</p>
				<br/><center><button id="dl-button" class="btn-lg">Download Report</button></center>
			</div>
			
			<div class="col-md-4">
				<center><img src="<?php echo base_url().'image/stats_img/3.jpg';?>" id="image-title"/></center>
				<h3 id="stats"><center>Employed Rate</center></h3>
				<p style="text-align: justify; color: #3f3f3f;">Cavite beat the record of employed rate in the past few year 89.6 rate in the province based on the resources of Department of Labor and Employment (DOLE).</p>
				<br/><center><button id="dl-button" class="btn-lg">Download Report</button></center>
			</div> 
		</div> <!-- end of div class row -->
	</div> <!-- end of div class container -->
	<!-- end ng content ng stats report -->
	<br>
	</br>
	<br></br>
	<!-- insert footer here -->
				 <?php include_once('includes/footer_section/footer.php'); ?>
       			 <!-- end footer -->
				<!-- end footer -->
</div> <!-- end of div id main container -->
	</body>
</html>