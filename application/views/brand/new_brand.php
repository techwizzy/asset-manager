


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Brand</a>
					</li>
				</ul>
			</div>

						<div class="row-fluid sortable">
				<div class="box span12">
					  <?php if( $this->session->flashdata('msg')){ ?>
                      <div  class="btn btn-primary noty">record successfully added<?php echo $this->session->flashdata('msg'); ?></div>
                  <?php } ?>

           <?php echo form_open_multipart('brand/add_brand',array('class'=>'form-horizontal'));?>
				<div class="box-header well" data-original-title>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Create Asset Brand</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Model </label>
							  <div class="controls">
								<input type="text" class="span6 " name="Model" >
						      </div>
							</div>
							
						
							   <div class="control-group">
								<label class="control-label" for="supplier">Category</label>
								<div class="controls">
								  <select id="category" name="Category" class="span4" data-rel="chosen">
									<option>cat 1</option>
									<option>cat 2</option>
									
								  </select>
								</div>
							  </div>
				
                             
							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacturer</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Manufacturer" >
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
						  <?php form_close(); ?>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->



    

