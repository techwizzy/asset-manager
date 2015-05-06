

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Asset category</a>
					</li>
				</ul>
			</div>

						<div class="row-fluid sortable">
				<div class="box span12">
					  <?php if( $this->session->flashdata('msg')){ ?>
                      <div  class="btn btn-primary noty">record successfully added<?php echo $this->session->flashdata('msg'); ?></div>
                  <?php } ?>

           <?php echo form_open_multipart('category/add_category',array('class'=>'form-horizontal'));?>
					<div class="box-header well" data-original-title>	
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Create Asset category</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category name</label>
							  <div class="controls">
								<input type="text" class="span6 " name="Category" >
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




