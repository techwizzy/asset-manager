

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">expendables</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/expendables/new_expendables"><span><i class="icon-plus icon-white"></i> </span>Add expendable item</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-briefcase"></i>LIST OF EXPENDABLE ITEMS</h2><span style=" float: right;right: 0px;"><button class="btn btn-default">Print</button><button  class="btn btn-default" >Export</button></span>

						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							    <tr>
                    
                      <th>Item name</th>
                      <th>Order no</th>
                      <th>Brand</th>
                      <th>Category</th>
                       <th>Supplier</th>
                      <th>Date</th>
                      <th>Location</th>
                        <th>Description</th>
                         <th>Checked out to</th>
                        <td class="center">
									
									<a class="btn btn-info" href=" <?php echo base_url();?>index.php/expendables/new_expendables">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td> 
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_expendables->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Item_name; ?></td>
                      <td><?php echo $row->Order_no; ?></td>
                      <td><?php echo $row->Brand; ?></td>
                      <td><?php echo $row->Category; ?></td>
                      <td><?php echo $row->Supplier; ?></td>
                      <td><?php echo $row->date; ?></td>
                      <td><?php echo $row->Location; ?></td>
                       <td><?php echo $row->description; ?></td>
                        <td><?php echo $row->Checked_out_to; ?></td>
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


