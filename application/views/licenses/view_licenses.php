			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Add licenses</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/licenses/new_license"><span><i class="icon-plus icon-white"></i> </span>New licenses</a>
				
			</div>

			<div class="row-fluid sortable" class="box span16" >		
				<div class="box span16">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i>SOFTWARE LICENSES</h2><span style=" float: right;right: 0px;"><button class="btn btn-default">Print</button><button  class="btn btn-default" >Export</button></span>

						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable table-responsive" >
						  <thead>
							    <tr>
                    
                      <th>Software name</th>
                      <th>Serial</th>
                      <th>Licensed to</th>
                      <th>Email</th>
                       <th>Users</th>
                      <th>Supplier</th>
                      <th>Order no</th>
                      <th>Date purchased</th>
                      <th>Purchase cost</th>
                      <th>Expiration ddate</th>
                      <th>Depreciation type</th>
                      <th>Depreciation rate</th>
                       <th>Maintained</th>
                        <th>Notes</th>
                        <td class="center">
									
									<a class="btn btn-info" href=" <?php echo base_url();?>index.php/licenses/new_license">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td> 
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_license->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Software_name; ?></td>
                      <td><?php echo $row->Serial; ?></td>
                      <td><?php echo $row->Licensed_to; ?></td>
                      <td><?php echo $row->Email; ?></td>
                      <td><?php echo $row->Users; ?></td>
                     <td><?php echo $row->Supplier; ?></td>
                      <td><?php echo $row->Order_no; ?></td>
                      <td><?php echo $row->Date_purchased; ?></td>
                      <td><?php echo $row->Cost; ?></td>
                      <td><?php echo $row->Expiration_date; ?></td>
                      <td><?php echo $row->Depreciation_type; ?></td>
                      <td><?php echo $row->Depreciation_rate; ?></td>

                       <?php if($row->Maintained=='yes'){ ?>
                      <td class="center">
									<span class="label label-success"><?php echo $row->Maintained; ?></span>
								</td>
								<?php }
								else{ ?>
                          <td class="center">
									<span class="label label-warning"><?php echo $row->Maintained; ?></span>
								</td

							<?php	} ?>
						</td>

                      <td><?php echo $row->Notes; ?></td>
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


