


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="supplier/supplier_view">Add Supplier</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href=" <?php echo base_url();?>index.php/supplier/add_supplier"><span><i class="icon-plus icon-white"></i> </span>New Supplier</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-briefcase"></i>LIST OF SUPPLIERS</h2><span style=" float: right;right: 0px;">
						<div class="noprint" style="float:right;">
							 <a href="javascript:window.print()";>
          <button class="btn btn-default">Print</button></a><button  class="btn btn-default" >Export</button></span></div>
    <div  id="DontPrint" align="right" style="margin-top:8px; width:500px; margin-right:10px;">
      <div style="align:right;">
         

						
					</div>
				</div>
			</div>
	<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						   <thead>
                  
                    <tr>
                    
                      <th>Supplier no</th>
                      <th>Supplier name</th>
                      <th>KRA PIN</th>
                      <th>phone no</th>
                       <th>Active</th>
                      <th>Address</th>
                      <th>Supplier since</th>
                        <th>Notes</th>
                        <td class="center">
									
									<a class="btn btn-info" href=" <?php echo base_url();?>index.php/supplier/add_supplier">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td> 
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_suppliers->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Supplier_no; ?></td>
                      <td><?php echo $row->Supplier_name; ?></td>
                      <td><?php echo $row->KRA_PIN; ?></td>
                      <td><?php echo $row->Phone_no; ?></td>
                      
                      <?php if($row->Active=='yes'){ ?>
                      <td class="center">
									<span class="label label-success"><?php echo $row->Active; ?></span>
								</td>
								<?php }
								else{ ?>
                          <td class="center">
									<span class="label label-warning"><?php echo $row->Active; ?></span>
								</td

							<?php	} ?>
						</td>

                      <td><?php echo $row->Address; ?></td>
                      <td><?php echo $row->Supplier_since; ?></td>
                      <td><?php echo $row->Notes; ?></td>
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


