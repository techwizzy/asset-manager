


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Asset Brands</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/brand/new_brand"><span><i class="icon-plus icon-white"></i> </span>Create new Asset brand</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i>Asset Brands</h2><span style=" float: right;right: 0px;"><button class="btn btn-default">Print</button><button  class="btn btn-default" >Export</button></span>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								   <th>Brand</th>
								  <th>Category</th>
								  <th>Manufacturer</th>
								  <th>Notes</th>
								    <td class="center">
									
									<a class="btn btn-info" href=" <?php echo base_url();?>index.php/brand/new_brand">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									
								</td>
							  </tr>
						  </thead>   
						  <tbody>
							  <?php foreach ($load_brand->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->ID; ?></td>
                      <td><?php echo $row->Brand; ?></td>
                      <td><?php echo $row->Category; ?></td>
                      <td><?php echo $row->Manufacturer; ?></td>
                      <td><?php echo $row->Note; ?></td>
                      <td></td>
                                            
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


