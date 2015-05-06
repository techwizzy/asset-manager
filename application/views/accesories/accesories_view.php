


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
				<a class="btn btn-success " href=" <?php echo base_url();?>index.php/accesory/new_accesory"><span><i class="icon-plus icon-white"></i> </span>New Supplier</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-briefcase"></i>LIST OF ACCESORIES</h2><span style=" float: right;right: 0px;">
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
                    
                      <th>ID</th>
                      <th>Accesory name</th>
                      <th>Brand</th>
                      <th>Category</th>
                       <th>Supplier</th>
                      <th>Order no</th>
                      <th>Date purchased</th>
                      <th>Cost</th>
                      <th>Warranty</th>
                      <th>Status</th>
                      <th>Location</th>
                      <th>Notes</th>
                        <td class="center">
									
									<a class="btn btn-info" href=" <?php echo base_url();?>index.php/accesory/new_accesory">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td> 
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_accesory->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->ID; ?></td>
                      <td><?php echo $row->Accesory_name; ?></td>
                      <td><?php echo $row->Brand; ?></td>
                      <td><?php echo $row->Category; ?></td>
                        <td><?php echo $row->Supplier; ?></td>
                        <td><?php echo $row->Order_no; ?></td>
                        <td><?php echo $row->Purchase_date; ?></td>
                        <td><?php echo $row->Cost; ?></td>
                       <td><?php echo $row->Warranty; ?></td>

                      <td><?php echo $row->Status; ?></td>
                      <td><?php echo $row->Location; ?></td>
                      <td><?php echo $row->Notes; ?></td>
                      
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


