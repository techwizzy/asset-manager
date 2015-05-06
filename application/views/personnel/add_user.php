
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">New User</a>
					</li>
				</ul>
			</div>

						<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
					
						
					</div>
					<div class="box-content">
						<?php echo form_open_multipart('user/create_user',array('class' =>'form-horizontal'));  ?>
						  <fieldset>
							<legend >Create New User</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Employee number</label>
							  <div class="controls">
								<input type="text" class="span6 " name="pin" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">First name</label>
							  <div class="controls">
								<input type="text" class="span6 "  name="firstname" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Last name</label>
							  <div class="controls">
								<input type="text" class="span6 " name="lastname" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
								<input type="email" class="span6 " name="email" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Office  number/Name</label>
							  <div class="controls">
								<input type="text" class="span6 " name="office" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Department</label>
							  <div class="controls">
							
								<select id="department" name='department' class="span4" data-rel="chosen">
									<option>Department 1</option>
									<option>Department 2</option>
									
								  </select>
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">job title</label>
							  <div class="controls">
								<select id="job_title" name='title' class="span4" data-rel="chosen">
									<option>Job title 1</option>
									<option>Job titlet 2</option>
								 </select>
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Username</label>
							  <div class="controls">
								<input type="text" name="username" class="span6 " name="serial" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Password</label>
							  <div class="controls">
								<input type="password" value="pass" class="span6 " name="serial" >
						      </div>
							</div><div class="control-group">
							  <label class="control-label" for="checkbox">Is allowed</label>
								  <div class="controls">
									  <label><input type="checkbox" id="checkbox" name="yes" >Yes</label>
									</div>
										</div>

							 
							
							<div class="control-group">
							  <label class="control-label" for="date01">Registration Date </label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" placeholder="select date" id="date01" name="regdate">
							  </div>
							</div>
                           
                            
							  	  <div class="control-group">
								<label class="control-label" for="depreciation">Location</label>
								<div class="controls">
								  <select id="location" name='location' class="span4" data-rel="chosen">
									<option>Location 1</option>
									<option>Location 2</option>
									
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="image_file" type="file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Notes</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="note" rows="3"></textarea>
							  </div>
							</div>
                          
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						<?php echo form_close(); ?>

					</div>
				</div><!--/span-->

			</div><!--/row-->

