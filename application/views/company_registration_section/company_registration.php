   <div id="main_container">
			<div id="container_form">
				<div id="divider">
					<h1 id="welcome_text"><b>Welcome to Company Registration </b></h1>
					<h2 id="description_text">Please fill up the following form below so that you can register your company and you can access the services of this site. Please make sure that all the details you fill up is valid.</h2>
				</div>
				<h3 id="company_text">Company Personal Information</h3>
				<div id="details">
					<form class="form-inline">
					    <label for="company_name" id="text1">Company Name</label>
					    <input style="margin-left:100px;width:460px;" type="text" class="form-control" id="company_name" >
						 
					</form>
					<form class="form-inline">
					    <label for="company_address" id="text1">Company Address</label>
					    <input style="margin-left:85px;width:460px" type="text" class="form-control" id="company_address" >
					 
					</form>
					<form class="form-inline">
						<div class="form-group">
						    <label for="telephone_no" id="text">Telephone No:</label>
						    <input style="margin-left:95px;width:200px" type="text" class="form-control" id="telephone_no" >
					 	</div>
					 	 <div class="form-group">
						    <label for="fax_no" id="text1">Fax No:</label>
						    <input type="email" class="form-control" id="fax_no" >
					 	</div>
					</form>
					<form class="form-inline">
		  					<label for="service_offered" id="text1">Number of Employees</label>
		  				<select style="width:200px;height:35px;margin-left:60px;" id="service_offered" >

								<option value="lorem1">100 below</option>
								<option value="lorem2">101-500</option>
								<option value="lorem3">500 above</option>
							
						</select>
		 
					</form>
					<form class="form-inline">
		  					<label for="nationality_company" id="text1">Nationality of the Company</label>
		  				<select style="width:200px;height:35px;margin-left:25px;" id="nationality_company" >

								<option value="lorem1">Korean</option>
								<option value="lorem2">Japanese</option>
								<option value="lorem3">Canadian</option>
								<option value="lorem3">Filipino</option>
								<option value="lorem3">Egyptian</option>
						</select>
		 
					</form>
					<form class="form-inline">
					    <label for="username" id="text1">Username</label>
					    <input style="margin-left:140px;width:200px" type="text" class="form-control" id="username" >
					 
					</form>
					<form class="form-inline">
					    <label for="password" id="text1">Password</label>
					    <input style="margin-left:145px;width:200px" type="password" class="form-control" id="password" >
					 
					</form>
				</div>
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
				</div>
				
			</div>
	</div> 
	<!-- end of main body -->