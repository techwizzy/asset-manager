  <?php foreach ($user_data->result() as $row) {}?>
      <div>
        <ul class="breadcrumb">
          <li>
            <a href="asset_movement.php">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Edit User</a>
          </li>
        </ul>
      </div>

            <div class="row-fluid sortable">
        <div class="box span12">
           
           <?php echo form_open_multipart('users/save_edited_user_data',array('class'=>'form-horizontal'));?>
          <div class="box-header well" data-original-title>


          </div>
          <?php if( $this->session->flashdata('msg')){ ?>
                      <div style="max-width:450px; margin-left:400px;text-align:center;color:#228B22; margin-top:10px" class="alert alert-success" data-noty-options='{"text":"This is an error notification","layout":"center","type":"success"}'><?php echo $this->session->flashdata('msg'); ?></div>
                  <?php } ?>
          <div class="box-content">
            
              <fieldset>
              <legend><h3>Create user</h3></legend>
                <div class="control-group">
                <label class="control-label" >Firstname</label>
                <div class="controls">
                <input type="text" class="span6 " title="Type in your lastname. Only letters" data-rel="tooltip" data-placement="right"  name="Firstname"  value="<?php echo $row->Firstname; ?>"><?php echo form_error('Firstname'); ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="typeahead">Lastname </label>
                <div class="controls">
                <input type="text" class="span6 " title="Type in your lastname. Only letters" data-rel="tooltip" data-placement="right" name="Lastname" value="<?php echo $row->Lastname; ?>" ><?php echo form_error('Lastname'); ?>
                  </div>
              </div>
               <div class="control-group">
                <label class="control-label" for="typeahead">email</label>
                <div class="controls">
                <input type="text" class="span6 " name="email" title="Type in a valid email" data-animation="true" data-rel="tooltip" data-placement="right"  value="<?php echo $row->Email; ?>" ><?php echo form_error('email'); ?>
                  </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="typeahead">Employee No </label>
                <div class="controls">
                <input type="text" class="span6 " name="employeeNo" title="Type in a valid employee number or national ID.It is Required" data-animation="true" data-rel="tooltip" data-placement="right" value="<?php echo $row->Employee_no; ?>"  ><?php echo form_error('employeeNo'); ?>
                  </div>
              </div>
            
               <div class="control-group">
                <label class="control-label" for="brand">Job Title</label>
                <div class="controls">
                  <select id="brand" class="span4" name="Job_title" data-rel="chosen" >
                 <option><?php $row->Job_title; ?></option>
                 <option value="Administrator">Administrator</option>
                          <option value="Manager">Manager</option>
                          <option value="Accountant">Accountant</option>
                          <option value="haed of department">Head of department</option>
                          <option value="Store Manager">Store Manager</option>
                          <option value="Supervisor">Supervisor</option>
                          <option value="Casual">Casual</option>
                          <option value="Consultant">Consultant</option>
                  
                  </select>
                </div>
                </div>
              
               <div class="control-group">
                <label class="control-label" for="typeahead">Department </label>
                <div class="controls">
                <input type="text" class="span6 " value="<?php echo $row->Department; ?>" name="Department" >
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="typeahead">Office no </label>
                <div class="controls">
                <input type="text" class="span6 " name="Office_no" value="<?php echo $row->Office_no; ?>" >
                  </div>
              </div>
              <div class="control-group">
              <div class="element-checkbox ">
              <label class="title">Allowed Employee Login<span class="required">*</span></label>  
              <?php if($row->Isallowed=='Yes'){ ?>
                <div class="controls"><label>
                  <input type="checkbox" id="allow" name="allow" value="Yes" checked/ ><span>Yes</span></label>
                </div><span class="clearfix"></span>
                <div class="controls ">
                    <label><input type="checkbox" id="no" name="allow" value="No"/ ><span>No</span></label>
                </div><span class="clearfix"></span>
                <?php }else{ ?>
                  <div class="controls"><label>
                  <input type="checkbox" id="allow" name="allow" value="Yes" / ><span>Yes</span></label>
                </div><span class="clearfix"></span>
                <div class="controls ">
                    <label><input type="checkbox" id="no" name="allow" value="No" checked/ ><span>No</span></label>
                </div><span class="clearfix"></span>
               <?php } ?>

                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="typeahead">Username</label>
                <div class="controls">
                <input type="text" class="span6 " name="Username" value="<?php echo $row->Username; ?>" title="Give the user a login name. It is required" data-animation="true" data-rel="tooltip" data-placement="right"  >
                  </div>
              </div>
                            <div class="control-group">
                <label class="control-label" for="typeahead">Password </label>
                <div class="controls">
                <input type="password" class="span6 " name="Passphrase" value="pass" title="Default password is pass" data-animation="true" data-rel="tooltip" data-placement="right"  >
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="date01">Registration date</label>
                <div class="controls">
                <input type="text" class="input-xlarge datepicker" value="<?php echo date('m/d/Y', strtotime($row->Registered_date)); ?>" id="datepicker" name="date" title="click to select the date registered into the system" data-animation="true" data-rel="tooltip" data-placement="right" >
                </div>
              </div>
              
                     
             
                    <div class="control-group">
                <label class="control-label" for="depreciation">Location</label>
                <div class="controls">
                  <select id="location" name='Location' class="span4"  data-rel="chosen">
                  <option><?php echo $row->Location; ?></option>
                  <option>Location 1</option>
                  <option>Location 2</option>
                  
                  </select>
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="fileInput">Upload Image</label>
                <div class="controls">
                <input class="input-file uniform_on" id="Picture_name"   name="Picture_name" type="file">
                <input type="hidden" value="<?php echo $row->Image; ?>" name="Image" />
                </div>
              </div>  
             
              <div class="control-group">
                <label class="control-label" for="textarea2">Notes</label>
                <div class="controls">
                <textarea class="cleditor" id="textarea2" name="Note" rows="3"><?php echo $row->Notes; ?></textarea>
                </div>
              </div>
              <div id="content"></div>       
              <div class="form-actions">
                <button type="submit" id="load" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
              </div>
              </fieldset>
              <?php echo form_close(); ?>
            </form>   

          </div>
        </div><!--/span-->

      </div><!--/row-->
<script type="text/javascript">

</script>
