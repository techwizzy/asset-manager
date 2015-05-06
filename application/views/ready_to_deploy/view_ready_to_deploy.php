

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Asset Ready To Deploy</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/ready_to_deploy/new_asset"><span><i class="icon-plus icon-white"></i> </span>Create new Asset</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i>Assets Ready To Deploy </h2><span style=" float: right;right: 0px;"><button class="btn btn-default">Print</button><button  class="btn btn-default" >Export</button></span>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <tr>
                    
                      <th>Serial</th>
                      <th>Asset name</th>
                      <th>Brand</th>
                      <th>Category</th>
                      <th>Nature of asset</th>
                       <th>Supplier</th>
                      <th>Order no</th>
                      <th>Date of purchase</th>
                       <th>Cost</th>
                       <th>Warranty</th>
                      <th>Status</th>
                      <th>Location</th>
                      <th>D_type</th>
                      <th>D_rate</th>
                      <th>Notes</th>
                      <th>User</th>
                        <td class="center">
									
									<a class="btn btn-info" href=" <?php echo base_url();?>index.php/asset/new_asset">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td> 
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_ready_asset->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Serial_code; ?></td>
                      <td><?php echo $row->Item_name; ?></td>
                      <td><?php echo $row->Brand; ?></td>
                      <td><?php echo $row->Category; ?></td>
                      <td class="center"><span class="label label-warning"><?php echo $row->Nature; ?></span>
                </td>
                       <td><?php echo $row->Supplier; ?></td>
                      <td><?php echo $row->Order_no; ?></td>
                      <td><?php echo $row->Date_purchased; ?></td>
                      <td><?php echo $row->Purchase_cost; ?></td> 
                      <td><?php echo $row->Warranty; ?></td>
                   
                      <td class="center"><span class="label label-success"><?php echo $row->Status; ?></span>
								</td>
                      <td><?php echo $row->location; ?></td>
                       <td><?php echo $row->Depreciation_type; ?></td>
                      <td><?php echo $row->Depreciation_rate; ?></td>
                      <td><?php echo $row->Description; ?></td>
                      <td><?php echo $row->User; ?></td>
                      
                      
                      
                     
                      
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->



