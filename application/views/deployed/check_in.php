


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Checkin</a>
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


					<?php echo form_open_multipart('deployed/user_checkin',array('class' =>'form-horizontal'));  ?>
					<div class="box-header well" data-original-title>
					
						
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Checkin Asset</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Serial code </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Serial" >
						      </div>
							</div>
							
						
							 <div class="control-group">
								<label class="control-label" for="brand">Asset name</label>
								<div class="controls">
								  <input type="text" class="span6 " name="Asset_name" >
								</div>
							  </div>
				
                             
							<div class="control-group">
							  <label class="control-label" for="date01">Checkin date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" placeholder="select date" id="date01" name="Date_purchased">
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



    

