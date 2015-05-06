


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="">New Supplier</a>
					</li>
				</ul>
			</div>

						<div class="row-fluid sortable">
				<div class="box span12">

					 <?php if( $this->session->flashdata('msg')){ ?>
                      <div class="alert alert-warning"><?php echo $this->session->flashdata('msg'); ?></div>
                  <?php } ?>

					<?php echo form_open_multipart('supplier/new_supplier',array('class' =>'form-horizontal'));  ?>
					<div class="box-header well" data-original-title>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>add Supplier</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Supplier no</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Supplier_no" ><?php echo form_error('Supplier_no'); ?>
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Supplier name</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Supplier_name" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">KRA PIN</label>
							  <div class="controls">
								<input type="text" class="span6 " name="KRA_PIN" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Phone no</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Phone_no" >
						      </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Address</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Address" rows="3" >
						      </div>
							</div>
							<div class="control-group">
								<label class="control-label">Active</label>
								<div class="controls"> 
									<div>
								 <input type="checkbox" id="yes" name="Status" value="yes">Yes<br>
								  <input type="checkbox" id="no" name="Status" value="no">No<br>
							  </div></div></div>
								<div class="control-group">
							  <label class="control-label" for="date01">Supplier since</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" placeholder="select date" id="datepicker" name="date">
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