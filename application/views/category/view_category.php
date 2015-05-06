

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Asset Categories</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/category/new_category"><span><i class="icon-plus icon-white"></i> </span>Create new Asset Category</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i>Asset Categories</h2><span style=" float: right;right: 0px;"><button class="btn btn-default">Print</button><button  class="btn btn-default" >Export</button></span>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								 <tr>
                    
                      <th>ID</th>
                      <th>Category name</th>
                      <th>Note</th>
                      <th><a class="btn btn-info" href=" <?php echo base_url();?>index.php/category/new_category">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_category->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Id; ?></td>
                      <td><?php echo $row->Category_name; ?></td>
                      <td><?php echo $row->Note; ?></td>
                      <td></td>
                      
                      
                      
                      
                     
                      
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


