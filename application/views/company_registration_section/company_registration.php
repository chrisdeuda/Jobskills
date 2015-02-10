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
							<label for="company_name"  class="col-sm-3">Company Name</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm" id="company_name" name="company_name">
					    	</div>
						</div>

						<div class="form-group">
							<label for="company_name"  class="col-sm-3">Company Address</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm" id="company_address" name="address" >
					    	</div>
						</div>
						<div class="form-group">
							<label for="telephone_no"  class="col-sm-3">Telephone No:</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm" id="telephone_no" name="telephone_no">
					    	</div>
						</div>
						<div class="form-group">
							<label for="fax_no"  class="col-sm-3">Fax No:</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm"  id="fax_no" name="fax_no">
					    	</div>
						</div>
						<div class="form-group">
							<label for="service_offered" id="text1">Number of Employees</label>
			  				<select style="width:200px;height:35px;margin-left:60px;" id="service_offered"  id="employee_no" type="text" class="" name = "employee_no">
									<option value="lorem1">100</option>
									<option value="lorem2">101</option>
									<option value="lorem3">500</option>
							</select>
						</div>

						<div class="form-group">
							<label for="nationality_company">Nationality of the Company</label>

							 <?php
								echo "<select style='width:200px;height:35px;margin-left:60px;'' id='nationality' name = 'nationality' >";
								foreach($nationality_list as $row){

									echo "<option value = ";
									echo $row->NATIONALITY_ID_PK;
									echo ">";
									echo $row->NATIONALITY_NAME;
									echo "</option>";
							}
								echo "</select>";
								?> <br>
						</div>

						<div class="form-group">
							<label for="username"  class="col-sm-3" >Username</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm" id="username" name="username">
					    	</div>
						</div>

						<div class="form-group">
							<label for="company_name"  class="col-sm-3" >Password</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm"  id="password" name="password" >
					    	</div>
						</div>
						<div class="form-group">
							<label for="company_name"  class="col-sm-3" >Confirm Password</label>
							<div class="col-sm-9">
					    		<input style="margin-left:100px;width:460px;" type="text" class="form-control input-sm"  id="confirm_password" name="confirm_password">
					    	</div>
						</div>


						<h4 id="nature_text">Nature of Business</h4>
						<lable>Main Economic Business </lable>
            <input id="business_nature" type="text" class="" > <input type = "button" id="btn_business_nature" value = " Search " />  </br>
                    <input id="business_nature_result" type="text" class="" name = "business_nature_result" > <br>
            <lable>Major Products/Goods: </lable>
            <input id="major_product" type="text" class="" > <input type = "button" id="btn_major_product" value = " Search " />  </br>
                    <input id="major_product_result" type="text" class="" name = "major_product_result" > <br>

                    <input id="btn_register" type="submit" class="btn btn-info" value="Submit" >

					</form>

				</div>


				<div style="clear:both"> </div>


				<!-- @REMOVE
				<div id="second_details">
					<h4 id="nature_text">Nature of Business</h4>
					 <h5 style="font-size:15px;font-family:lato;" id="description_main_economic">Choose the Main Economic and Sub major products of your company.</h5>
					<center><button style="color:white;font-size:20px;background-color:#19b5fe;" type="button" class="btn btn-lg" data-toggle="modal" data-target="#exampleModal" >Main Economic Activity</button><center>


					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 style="font-size:30px;" class="modal-title" id="exampleModalLabel">Main Economic Activity</h4>
					      </div>
					      <div style="float:left" class="modal-body">
					        <div  id="list_economic_activity">
					        	<li>ADMINISTRATIVE AND MANAGERIAL WORKERS</li>
					        	<li>AGRICULTURAL ANIMAL HUSBANDRY AND FORESTRY WORKERS FISHERMEN AND HUNTERS</li>
					        	<li>CLERICAL AND  RELATED WORKERS</li>
					        	<li>PRODUCTION AND RELATED WORKERS TRANSPORT EQUIPMENT OPERATORS AND LABORERS</li>
					        	<li>PROFESSIONAL TECHNICAL AND RELATED WORKERS </li>
					        	<li>PROFESSIONAL TECHNICAL AND RELATED WORKERS  </li>
					        	                                                                                                                                                                                                          </li>
					        </div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button style="background-color:#19b5fe;color:white;font-size:15px;width:55px;height:32px;" type="button" class="btn btn-primary">OK</button>
					      </div>
					    </div>
					  </div>
					</div><br/>
					 <input style="width:200px" type="text" class="form-control" id="type_of_business" ></center><br/>
						 	<div id="sub category">
								<h5 id="major_product_text">Major Products</h5><br><br/>
					<form class="form-inline">
						<div class="form-group">
								<div id="select_listbox">
									<select id="list_box" size="5">
									  <option>ADMINISTRATIVE AND MANAGERIAL WORKERS</option>
										 <option>GOVERNMENT EXECUTIVES OTHER THAN GOVERNMENT ADMINISTRATORS</option>
									 	<option>MANAGER BUDGETING AND ACCOUNTING</option>
										 <option>MANAGER EDUCATIONAL</option>
										 <option>MANAGER GENERAL</option>
										 <option>MANAGER INDUSTRIAL RELATIONS AND PERSONNEL</option>
										 <option>MANAGER OPERATIONS</option>
										 <option>MANAGER PRODUCTION  (EXCEPT FARM)</option>
										 <option>MANAGER PROJECT (CONSTRUCTION)</option>
										 <option>MANAGERS</option>
										 <option>MANAGERS ( N E C )</option>
										 <option>MANAGERS ASSISTANT</option>
										 <option>MANAGERS ASSISTANT ( N E C )</option>


									</select>
								</div>
						</div>
								<div class="form-group">
									<input style="width:300px;height:200px;margin-left:50px;" type="text" class="form-control" id="list_box_output" >
								</div>


					 </form>
					 <button style="background-color:#19b5fe;color:white;font-size:20px;width:150px;" type="button" class="btn btn-lg">Add Products</button><br>
					 <div style="margin-left:650px;padding:10px;" id="next_button">
					 	<button style="background-color:#19b5fe;color:white;font-size:20px;width:100px;" type="button" class="btn btn-lg">Next</button>
					</div>
				</div>-->

				<div>
	<div id = "main_economic_activity" >
		<h1>Main Economic Activity</h1>
		<ul>
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
		<input type = "button" value = "OK" id = "main_economic_activity_ok"/>
		<input type = "button" value = "Cancel" id = "main_economic_activity_cancel" />
	</div>
</div>
<div>
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
		<input type = "button" value = "OK" id = "major_products_ok"/>
		<input type = "button" value = "Cancel" id = "major_products_cancel" />
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
			$(this).css("background-color","red");
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
			$(this).css("background-color","red");
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