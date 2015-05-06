


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Asset Register</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/asset/new_asset"<span><i class="icon-plus icon-white"></i> </span>Create new Asset</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> All Assets</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="example">
						  <thead>
							     <tr>
                    
                      <th>Serial</th>
                      <th>Asset name</th>
                      <th>Brand</th>
                      
                        
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_assets->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Serial_code; ?></td>
                      <td><?php echo $row->Item_name; ?></td>
                      <td><?php echo $row->Brand; ?></td>
                      
                    </tr>
                    <?php } ?>
                </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


