

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>index.php/asset/view_asset">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>index.php/users/view_all_users">all users</a>
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
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="example">
						  <thead>
							   <tr>
                      <th style="border-color:#C6E2FF;">Avatar</th>
                      <th style="border-color:#C6E2FF;">Full name</th>
                      <th style="border-color:#C6E2FF;">Email</th>
                      <th style="border-color:#C6E2FF;">Employee no</th>
                      <th style="border-color:#C6E2FF;">Job title</th>
                      <th style="border-color:#C6E2FF;">Department</th>
                      <th style="border-color:#C6E2FF;">office no</th>
                      
                      <th style="border-color:#C6E2FF;">Username</th>
                      <th style="border-color:#C6E2FF;">Registered date</th>
                      <th style="border-color:#C6E2FF;">Location</th>
                      <th style="border-color:#C6E2FF;"></th>
                        
 
                    </tr>
                  </thead>
                  <tbody>
                    <!--loop through the array to display the employee data --> 
                  <?php foreach ($load_employees->result() as $row) { ?>
           
                    <tr>
                    <?php if( $row->Image!=''){ ?>
                      <td><img src="<?php echo base_url();?>uploads/<?php echo $row->Employee_no ?>/<?php echo $row->Image ?>" width="40" height="40" ></td>
                      <?php }else{ ?>
                      	 <td><img src="<?php echo base_url();?>icons/avatar.png"  ></td>
                      <?php } ?>
                      
                      <td><?php echo $row->Firstname; ?>  <?php echo $row->Lastname; ?></td>
                      <td><?php echo $row->Email; ?></td>
                      <td><?php echo $row->Employee_no; ?></td>
                      <td><?php echo $row->Job_title; ?></td>
                      <td><?php echo $row->Department; ?></td>
                      <td><?php echo $row->Office_no; ?></td>
                     
                

                      <td><?php echo $row->Username; ?></td>
                      <td><?php echo date('d/m/Y', strtotime($row->Registered_date)); ?></td>
                      <td><?php echo $row->Location; ?></td>
                      <td><a  href="<?php echo base_url(); ?>index.php/users/edit_this_user/<?php echo $row->Employee_no; ?>">
                          <img src="<?php echo base_url();?>icons/edit.png" height="20" >                                          
                        </a>
                      </td> 
                    </tr>
                    <?php } ?>
                                    
                			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
