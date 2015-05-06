
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">New Accesories</a>
					</li>
				</ul>
			</div>

						<div class="row-fluid sortable">
				<div class="box span12">

					 <?php if( $this->session->flashdata('msg')){ ?>
					 <div class="box-content">
                      
                   <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;record successfully added&quot;,&quot;layout&quot;:&quot;topCenter&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Top Center (fade)
                    </button><?php echo $this->session->flashdata('msg'); ?></div>
                  <?php } ?>

					<?php echo form_open_multipart('supplier/new_supplier',array('class' =>'form-horizontal'));  ?>
					<div class="box-header well" data-original-title>
					
						
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Add accesories</legend>
							
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Accesory name </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Accesory_name" >
						      </div>
							</div>
							
							 <div class="control-group">
								<label class="control-label" for="brand">Brand</label>
								<div class="controls">
								  <select id="brand" class="span4" name="Brand" data-rel="chosen">
									<option>Brand 1</option>
									<option>Brand 2</option>
									
								  </select>
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="selectError">Category</label>
								<div class="controls">
								  <select id="selectError" class="span4" data-rel="chosen" name="Category">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								  </select>
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
								<input type="text" class="input-xlarge datepicker" placeholder="select date" id="datepicker" name="date">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Purchase cost </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Purchase_cost" >
						      </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="appendedInput">Warranty</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInput" class="span6 " name="Warranty" type="text"><span class="add-on">Months</span>
								  </div>
								 
								</div>
							  </div>
						  <div class="control-group">
								<label class="control-label" for="status">Status</label>
								<div class="controls">
								  <select id="status" class="span4" data-rel="chosen" name="Status">
									<option>Archived</option>
									<option>Broken</option>
							    	<option>Defect</option>
							        <option>Disposed</option>
							        <option>For Request</option>
							        <option>Disposed</option>
							        <option>Lost/Stolen</option>
								  </select>
								</div>
							  </div>
							  	  <div class="control-group">
								<label class="control-label" for="depreciation">Location</label>
								<div class="controls">
								  <select id="location" name='Location' class="span4" data-rel="chosen">
									<option>Location 1</option>
									<option>Location 2</option>
								  </select>
								</div>
							  </div>
							  
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

    