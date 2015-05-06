	<div>
				<ul class="breadcrumb">
					<li>
						<a href="">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="user/view_users">Users</a>
					</li>
				</ul>
			</div>
		    <div  style=" float: right;right: 0px;">
				<a class="btn btn-success" href="<?php echo base_url();?>index.php/user/load_user_registration_form"><span><i class="icon-plus icon-white"></i> </span>Create new user</a>
				
			</div>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> All users</h2><span style=" float: right;right: 0px;"><button class="btn btn-default">Print</button><button  class="btn btn-default" >Export</button></span>

						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>User no</th>
								  <th>Job title</th>
								  <th>Assets</th>
								  <th>licenses</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>David R</td>
								<td class="center">20002</td>
								<td class="center">Manager</td>
								<td class="center">computer</td>
								<td class="center">AVG antivirus</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->