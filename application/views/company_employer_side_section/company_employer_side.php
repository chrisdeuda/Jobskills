<div id="main-container">

		<div id="success_message" class="alert alert-success sr-only" > </div>
		<div id="container" style="padding: 10px; font-family: Lato;">

			<br/>

			<div class="row">
				<div class="col-md-4" style="padding: 15px;">
					<div style="margin-left:90px;" id="com-details">
						<h2><b> <?php echo $profile[0]->COMPANY_NAME; ?> </b></h2>
						<br>
						<p><b>Address: </b><?php echo $profile[0]->COMPLETE_ADDRESS; ?> </p>
						<p><b>Mobile No.: </b><?php echo $profile[0]->MOBILE_NO; ?></p>
						<p><b>Telephone No: </b><?php echo $profile[0]->TEL_NO; ?></p>
						<p><b>Fax No: </b><?php echo $profile[0]->FAX_NO; ?></p>
						<p><b>No. of Employees: </b><?php echo $profile[0]->EMPLOYEES_NO; ?></p>
						<p><b>Company Nationality: </b><?php echo $profile[0]->NATIONALITY; ?></p>
						<p><b>Nature Of Business: </b> <?php echo $profile[0]->INDUSTRY_TYPE; ?></p>

						<ul id="nature">
							<li>Lorem 1</li>
							<li>Lorem 2</li>
						</ul>
					</div>
					<br>
					<div style="margin-left:90px;" id="hr-list">
						<h2><b> HR Managers </b> </h2></br>

						<div id="add-hr-btn">
							<button style="color:white;font-size:20px;background-color:#19b5fe;" type="button" class="btn btn-lg" data-toggle="modal" data-target="#exampleModal" >Add HR Manger</button>
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">

							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 style="font-size:30px;" class="modal-title" id="exampleModalLabel">Contact Person</h4>
							        <div id="error_message" class="alert alert-warning sr-only" > </div>
							      </div>
							      <div style="float:left" class="modal-body">
							      	<center>
								        <div  id="register">
								        	<form id="hr_add_form"class="" action="<?php echo base_url(). 'api/add_hr';?>" method="POST">
									        	<li style="list-style-type:none;text-align:left;"><label for="name_hr" >Name:</label></li>
									        	<li style="list-style-type:none;"><input style="margin-left:100px;width:300px;margin-top:-30px;" type="text" class="form-control" id="name_hr" ></li></br>
									        	<li style="list-style-type:none;text-align:left;"><label for="email_address" >Email:</label></li>
									        	<li style="list-style-type:none;"><input style="margin-left:100px;width:300px;margin-top:-30px;" type="text" class="form-control" id="email_address" ></li></br>
									        	<li style="list-style-type:none;text-align:left;"><label for="contact_no"  >Contact No:</label></li>
									        	<li style="list-style-type:none;"><input style="margin-left:100px;width:300px;margin-top:-30px;" type="text" class="form-control" id="contact_no" ></li> </br>
								        	</form>
								      	</div>
							      </center>
							     </div>
							     <div class="modal-footer">
									        <button id="btn_modal_close"type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button id="btn_add_hr"style="background-color:#19b5fe;color:white;font-size:15px;width:55px;height:32px;" type="button" class="btn btn-primary">OK</button>
								</div>

							    </div>
							  </div>
							</div>
						</div>

						<br/>
						<div class="alert alert-warning"> Click "Add HR" to add Human Resource Manager </div>

						<?php
							if ( $hr_list == -1) {
								echo "no hr found";
							} else { ?>
								<?php  $index = 0; foreach($hr_list as $list): ?>
									<div id="hr1">
										<h4><b> <?php echo $list->NAME; ?> </b></h4>
										<p id="hr-details"><?php echo $list->EMAIL; ?></p>
										<p id="hr-details"><?php echo $list->CONTACT_NO; ?></p>
									</div><br/>

								<?php $index++; endforeach;?>
						<?php } ?>

					</div>

				</div>
				<div class="col-lg-8" style="padding: 15px;">

					<div id="job-list">
						<h2><b> Job Offerings </b> </h2>

						<a style="color:white;font-size:20px;background-color:#19b5fe;"  class="btn btn-lg"  href="<?php echo base_url().'site/default_post_job';?>" >Post Job</a>
						<!--

						<div id="add-hr-btn">
							<<button  id="add-hr" value="POST JOB" href="#openModal"/>sdfsdf <
						</div> -->
						<br/>
						<div class="alert alert-warning"> Click "POST JOB" to add jobs in your profile. </div>

						<?php
							if ( $job_post == -1) {
								echo "no job post found";
							} else { ?>
								<?php  $index = 0; foreach($job_post as $post): ?>
								<div id="po-jb">
									<div id ="<?php echo $post->JOB_POST_ID; ?><">
										<h3><b><?php echo $post->SKILL_NAME; ?><b><h3>
											<p id="jb-details"><b>No. of Needed Person:</b><?php echo $post->MANPOWER_NO; ?>  </p>
											<p id="jb-details"><b>Requirement / Skill:</b><?php echo $post->DESCRIPTION; ?><p>
									</div>

								</div>
								<?php $index++; endforeach;?>
						<?php } ?>







					</div>
				</div>
			</div> <!-- row -->

		</div> <!-- container -->

	</div> <!-- main-container -->