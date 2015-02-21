<br>
	<!--required files : public/js/company_profile/job_post_script.js -->
	<!-- Main Content-->
	<div id="main_container">

			<div id="com-reg">
					<br/>
					<div id="title_section">
						<h1 style="margin-top:0px;" id="post_job_text"><b>Post Job Now </b></h1>
						<h2 id="reminder">Please fill up all the required data below to know the specific skills required. </h2>
					</div>
						<h3 id="skils_required">Skills Required</h3>
					<div id="reg-form">

						<form id="myForm" class="form-inline" action="<?php echo base_url().'api/save_survey_form'; ?>" method="POST">
							<div id="error_message" class="alert alert-danger sr-only" > </div>
							<div id="success_message" class="alert alert-success sr-only" > </div>

								<label for="service_offered" id="text1">Title/Position</label>
			  					<select id="job_title" class="position pull-right" id="skills" >

								</select>


							</div>

							<div class="form-group"><br>
								<input id= "new_job_post_title" type="text" name="new_job_post_title" value=""  class="position pull-right sr-only" style="margin-right:10px;" data-sendurl="<?php echo base_url().'api/insert_new_job_title'; ?>" />
								<input id="new_job_post_title_id" type="hidden" name="new_job_post_title_id" value="" />
							</div>


							<div class="form-group">
								<label for="people_needed" for="skills_need_count" id="no_people_text">No. of People Needed</label>
								<select  id="skills_need_count" class="no_people_needed">
									<?php
										for ($index = 5; $index < 200; $index = $index + 5) {
											echo "<option value=". $index.">".$index."</option>";
										}

									?>
								</select>
							</div> <br>

							<label for="educational_background" for="requirements_description" id="text2" >Requirements Description</label>
							<textarea id="requirements_description" class="form-control" rows="12" ></textarea>
							<div id="submit">
								<button  id="btn_submit"    type="button" class="btn  btn-info btn-lg">Save</button>
							</div>
						</form>



					</div>
				</div>


				<div id="requirement_modal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title strong">Select Title / Position</h4>
				      </div>
				      <div class="modal-body">
				        <p>One fine body&hellip;</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->


	</div>
	<!-- end of main container -->