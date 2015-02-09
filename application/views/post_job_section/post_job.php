<br>
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
			  					<select id="job_title" style="width:100%;height:35px;margin-left:40px;font-size:15px;" id="skills" >

								</select>
							</div>

							<div class="form-group">
								<label for="people_needed" for="skills_need_count">No. of People Needed</label>
								<select  id="skills_need_count"  style="width:250px;height:35px;margin-left:40px;font-size:15px;">
									<?php
										for ($index = 5; $index < 200; $index = $index + 5) {
											echo "<option value=". $index.">".$index."</option>";
										}
									?>
								</select>
							</div> <br>

							<label for="educational_background" for="requirements_description">Requirements Description</label>
							<textarea id="requirements_description" class="form-control" rows="12" width="100%"></textarea>

						<!-- @remove
						<label for="educational_background" id="text1">Educational Background</label>
						<input style="margin-left:10px;width:410px" type="text" class="form-control" id="educational_background" ><br>
						<label for="work_experience" id="text1">Work Experience</label>
						<input style="margin-left:10px;width:410px" type="text" class="form-control" id="work_experience" ><br>
						<label for="certification_req" id="text1">Certification Required</label>
						<input style="margin-left:10px;width:410px" type="text" class="form-control" id="certification_req" ><br>
						-->

							<button  id="btn_submit" style="margin-right:-350px;background-color:#19b5fe;color:white;font-size:20px;width:100px;"  type="button" class="btn btn-lg">Save</button>

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