


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">New Licenses</a>
					</li>
				</ul>
			</div>

						<div class="row-fluid sortable">
				<div class="box span12">
					
					 <?php if( $this->session->flashdata('msg')){ ?>
                      <div  class="btn btn-primary noty">
                            <button type="button">data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;topCenter&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                         </button><?php echo $this->session->flashdata('msg'); ?></div>
                  <?php } ?>


					<?php echo form_open_multipart('licenses/add_license',array('class' =>'form-horizontal'));  ?>
					<div class="box-header well" data-original-title>
					
						
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Add new license</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Software Name </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Software_name" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Serial</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Serial" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Licensed to Name</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Name" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Licensed to Email</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Email" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Users</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Users" >
						      </div>
							</div>
                             <div class="control-group">
								<label class="control-label" for="supplier">Supplier</label>
								<div class="controls">
								  <select id="supplier" class="span4" data-rel="chosen" name="Supplier">
									<option>supplier 1</option>
									<option>supplier 2</option>
									
								  </select>
								</div>
							  </div>
							 <div class="control-group">
							  <label class="control-label" for="typeahead">Order No </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Order_no" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date purchased</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" placeholder="select date" id="date01" name="Date_purchased">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Purchase cost </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Purchase_cost" >
						      </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Expiration Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" placeholder="select date" id="datepicker" name="Date_expired">
							  </div>
							</div>
							  	
							  <div class="control-group">
								<label class="control-label" for="depreciation">Depreciation Type</label>
								<div class="controls">
								  <select id="depreciation" name='D_type' class="span4" data-rel="chosen">
									<option>Straight Line</option>
									<option>supplier 2</option>
									
								  </select>
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="depreciation">Depreciation Rate</label>
								<div class="controls">
								 <div class="input-append">
									<input id="appendedInput" class="span6 " name="D_rate" type="text"><span class="add-on">%</span>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Maintained</label>
								<div class="controls"> 
									<div>
								 <input type="checkbox" id="yes" name="Maintained" value="yes">Yes<br>
								  <input type="checkbox" id="no" name="Maintained" value="no">No<br>
							  </div></div></div>
								<div class="control-group">
							  <label class="control-label" for="textarea2">Notes</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="Note" rows="3"></textarea>
							  </div>
							</div>
                            
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						  <?php echo form_close(); ?>
						</form>   

					</div>
					
				</div><!--/span-->

			</div><!--/row-->

<script type="text/javascript">
$(function() {
 $( "#datepicker3" ).datepicker();
 $( "#datepicker" ).datepicker();
 $( "#datepicker" ).datepicker('setDate', new Date());

 });
         
</script>
 

  <!-- noty -->
  <script type="text/javascript" src="/js/noty/jquery.noty.js"></script>
  
  <!-- layouts -->
  <script type="text/javascript" src="/js/noty/layouts/top.js"></script>