  <br>
  <div id="main_container">
			<div id="container_form">
				<div id="divider">
					<h1 id="welcome_text"><b>Welcome to Company Registration </b></h1>
					<h2 id="description_text">Please fill up the following form below so that you can register your company and you can access the services of this site. Please make sure that all the details you fill up is valid.</h2>
				</div>
				<h3 id="company_text">Company Personal Information</h3>
				<div id="details">



					<form role="form-inline" class="form" method="POST" action="<?php echo base_url(). 'welcome/signUpValidation'; ?>">
						<div class="form-group">
							<label for="company_name" id="text1" class="text1 col-sm-3">Company Name</label>
							<div class="col-sm-9">
					    		<input id="text_box1" type="text" class="form-control input-sm" id="company_name" name = "company_name" value = "<?php echo $_POST["company_name"]; ?>" >
					    	</div>
						</div>

						<div class="form-group">
							<label for="company_name" id="text1" class="col-sm-3">Company Address</label>
							<div class="col-sm-9">
					    		<input id="text_box1" type="text" class="form-control input-sm" id="company_address" name = "address" value = "<?php echo $_POST["address"]; ?>" >
					    	</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="telephone_no" id="text2" >Telephone No:</label>
							    	<input   type="text" id="text_box3" class=" form-control input-sm" id="telephone_no" name = "telephone_no" value = "<?php echo $_POST["telephone_no"]; ?>" >
							    </div>
							</div>

								<div class="form-group">
									<label for="fax_no" id="text1" >Fax No:</label>
							    		<input  type="text" id="text_box3" class="form-control input-sm"  id="fax_no" name = "fax_no" value = "<?php echo $_POST["fax_no"]; ?>" >

								</div>
						</div>

						<div class="form-group">
							<label for="service_offered" id="number_employees">Number of Employees</label>
			  				<select  id="service_offered"  class="employee_no" type="text" class="" name = "employee_no" value = "<?php echo $_POST["employee_no"]; ?>" >
									<option value="lorem1">100</option>
									<option value="lorem2">101</option>
									<option value="lorem3">500</option>
							</select>
						</div>

						<div class="form-group">
							<label  for="nationality_company" id="nationality_text">Nationality of the Company</label>

							 <?php
								echo "<select id='nationality' name = 'nationality' >";
								foreach($nationality_list as $row){

									echo "<option ";
									if($row->NATIONALITY_ID_PK == $_POST["nationality"]){ echo "selected "; }
									echo " value = ";
									echo $row->NATIONALITY_NAME;
									echo "</option>";
							}
								echo "</select>";
								?> <br>
						</div>

						<div class="form-group">
							<label for="username" id="text1"  class="col-sm-3" >Username</label>
							<div class="col-sm-9">
					    		<input id="text_box1" type="text" class="form-control input-sm" id="username" name="username" value = "<?php echo $_POST["username"]; ?>" >
					    	</div>
						</div>

						<div class="form-group">
							<label for="company_name" id="text1"  class="col-sm-3" >Password</label>
							<div class="col-sm-9">
					    		<input id="text_box1" type="text" class="form-control input-sm"  id="password" name="password" value = "<?php echo $_POST["password"]; ?>" >
					    	</div>
						</div>
						<div class="form-group">
							<label for="company_name" id="text1"  class="col-sm-3" >Confirm Password</label>
							<div class="col-sm-9">
					    		<input id="text_box1" type="text" class="form-control input-sm"  id="confirm_password" name="confirm_password" value = "<?php echo $_POST["confirm_password"]; ?>" >
					    	</div>
						</div>
<br>
<br>
<br>
<br>
<br>
</br>					<div id="nature_container">
							<h4 id="nature_text">Nature of Business</h4>
						</div>
						<center><label id="text1" >Main Economic Business </label></center>
				<div class="input-group">
          			<input style="width:500px;margin-bottom:10px;"  id="business_nature"  type="text" class="text_box2 form-control input-sm" >

          			<span class="input-group-btn">
          			 	<input type = "button" class=" btn btn-info btn-sm button_search" id="btn_business_nature" value = " Search " data-toggle="modal" data-target="#first_modal" />  </br>
          			</span>
          		</div>
          		<input style="width:500px;"  id="business_nature_result" type="text" class="text_box2 form-control input-sm" name = "business_nature_result" value = "<?php echo $_POST["business_nature_result"]; ?>" > <br>

			          <center>  <label id="text1">Major Products/Goods: </label></center>
			         <div class="input-group">
			           <input style="width:500px;margin-bottom:10px;" id="major_product" type="text" class="text_box2 form-control input-sm" >
			           <span class="input-group-btn">
			          		<input type = "button" id="btn_major_product" class=" btn btn-info btn-sm button_search" value = " Search "data-toggle="modal" data-target="#second_modal" />  </br>
			         	</span>
			         </div>
			            <input style="width:500px;" id="major_product_result" type="text" class="text_box2 form-control input-sm" name = "major_product_result" value = "<?php echo $_POST["major_product_result"]; ?>" ><br>
			       <div id="submit">
                    	<input  id="btn_register" type="submit" class="btn btn-info btn-lg button_submit" value="Submit" >
                    </div>

					</form>

				</div>


				<div style="clear:both"> </div>




				<div>
				<!-- First Modal-->
				<div class="modal fade" id="first_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 style="font-size:30px;" class="modal-title" id="exampleModalLabel">Contact Person</h4>
					        <div id="error_message" class="alert alert-warning sr-only" > </div>
					      </div>
					      <div style="float:left" class="modal-body">
					      	<div id = "main_economic_activity" >
					      		<h1>Main Economic Activity</h1>
								<ul class="list-styled">
									<?php
										foreach($industry_type as $row){
											echo "<li id = ";
											echo $row->INDUSTRY_TYPE_ID_PK;
											echo " >";
											echo $row->INDUSTRY_NAME;
											echo "</li>";
										}
									?>
								</ul>
							</div>

					     </div>
					     <div class="modal-footer">
						        <button id="main_economic_activity_cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button id="main_economic_activity_ok" style="background-color:#19b5fe;color:white;font-size:15px;width:55px;height:32px;" type="button" class="btn btn-primary">OK</button>
						</div>

					    </div>
					  </div>
				</div>

				<!-- Second Modal-->
				<div class="modal fade" id="second_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 style="font-size:30px;" class="modal-title" id="exampleModalLabel">Contact Person</h4>
					        <div id="error_message" class="alert alert-warning sr-only" > </div>
					      </div>
					      <div style="float:left" class="modal-body">
					      	<div id = "major_products" >
								<h1>Main Economic Activity</h1>
								<ul>
								<?php
									foreach($industry_list as $row){
										echo "<li id = ";
										echo $row->INDUSTRY_LIST_ID;
										echo " >";
										echo $row->INDUSTRY_LIST_NAME;
										echo "</li>";
									}
								?>
								</ul>

							</div>
					     </div>
					     <div class="modal-footer">
						        <button id="major_products_cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button id="major_products_ok" style="background-color:#19b5fe;color:white;font-size:15px;width:55px;height:32px;" type="button" class="btn btn-primary">OK</button>
						</div>

					    </div>
					  </div>
				</div>

</div>


<script>
	$(document).ready(function(){

		$business_nature_search = "";	// initialize this variable

		$("#main_economic_activity").hide();	// hide the industry type generated by php

		$("#btn_business_nature").click(function(){

			if($("#business_nature").val() != ""){	// checks if search textfield is not empty

				$("#major_products").hide();
				$("#main_economic_activity").show();	// show the div of industry type
				$("#main_economic_activity li").hide();	// hide the list items for the mean time
				$business_nature_search = $("#business_nature").val();	// get the value of the search textfield
				$("#business_nature").val("");	// reset the search textfield

				for($a = 1; $a <= $("#main_economic_activity li").length; $a++){	// traverse each list items

					$business_nature_search = $business_nature_search.toLowerCase();	// convert the search word to lower case
					$content = $("#main_economic_activity #"+$a).html().toLowerCase();	// get the content of each list item and convert to lower case

					if($content.search($business_nature_search) != -1){	// checks each list item content if contains the searched word

						$("#main_economic_activity #"+$a).show();
					}
				}
			}
		});
		$selected_result = "";
		$("#main_economic_activity li").click(function(){

			$("#main_economic_activity li").css("background-color","initial");
			$(this).css("background-color","#4FC1E9");
			$selected_result = $(this).html();
			$selected_result = $selected_result.replace(/&amp;/g, "&");
		});
		$("#main_economic_activity_ok").click(function(){

			if($selected_result != ""){

				$("#business_nature_result").val($selected_result);
				$selected_result = "";
			}
			$("#main_economic_activity li").css("background-color","initial");
			$("#main_economic_activity").hide();
			// @added
			$('#main_economic_activity_cancel').trigger('click'); //to close the modal using the cancel button

			//@here
		});
		$("#main_economic_activity_cancel").click(function(){

			$("#main_economic_activity").hide();
			$selected_result = "";
		});

		$major_product_search = "";	// initialize this variable

		$("#major_products").hide();	// hide the industry type generated by php

		$("#btn_major_product").click(function(){

			if($("#major_product").val() != ""){	// checks if search textfield is not empty

				$("#main_economic_activity").hide();
				$("#major_products").show();	// show the div of industry list
				$("#major_products li").hide();	// hide the list items for the mean time
				$major_product_search = $("#major_product").val();	// get the value of the search textfield
				$("#major_product").val("");	// reset the search textfield

				for($a = 1; $a <= $("#major_products li").length; $a++){	// traverse each list items

					$major_product_search = $major_product_search.toLowerCase();	// convert the search word to lower case
					$content = $("#major_products #"+$a).html().toLowerCase();	// get the content of each list item and convert to lower case

					if($content.search($major_product_search) != -1){	// checks each list item content if contains the searched word

						$("#major_products #"+$a).show();
					}
				}
			}
		});
		$selected_result = "";
		$("#major_products li").click(function(){

			$("#major_products li").css("background-color","initial");
			$(this).css("background-color","#4FC1E9");
			$selected_result = $(this).html();
			$selected_result = $selected_result.replace(/&amp;/g, "&");
		});
		$("#major_products_ok").click(function(){

			if($selected_result != ""){

				$("#major_product_result").val($selected_result);
				$selected_result = "";
			}
			$("#major_products li").css("background-color","initial");
			$("#major_products").hide();
			//@added to close the modal

			$('#major_products_cancel').trigger('click'); //to close the modal using the cancel button




		});
		$("#major_products_cancel").click(function(){

			$("#major_products").hide();
			$selected_result = "";
		});

	});
</script>

			</div>
	</div>
	<!-- end of main body -->