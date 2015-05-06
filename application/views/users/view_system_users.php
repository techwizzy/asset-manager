

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">all users</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success " href="<?php echo base_url();?>index.php/users/create_new_user"><span><i class="icon-plus icon-white"></i> </span>Add new user</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>users</h2>

						
					</div>
					<div class="box-content">
						<h3><img src="<?php echo base_url();?>icons/user.png"  >System Users</h3>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							   <tr>
                    
			                      <th>Firstname</th>
			                      <th>Lastname</th>
			                      <th>Username</th>
			                       <th>Job title</th>
			                      <th>Access Allowed</th>
			                      
			                      
			                    </tr>
			                  </thead>
			                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_system_users->result() as $row) { ?>
           
                    <tr>
                      <td><?php echo $row->Firstname; ?></td>
                      <td><?php echo $row->Lastname; ?></td>
                      <td><?php echo $row->Username; ?></td>
                      <td><?php echo $row->Job_title; ?></td>
                     
                      <?php if($row->Isallowed=='1'){ ?>
                      <td class="center">
									<span class="label label-success">Yes</span>
								</td>
								<?php }
								else{ ?>
                          <td class="center">
									<span class="label label-warning">No</span>
								</td

							<?php	} ?>
						</td>

             
                     
                    
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
