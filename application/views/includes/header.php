<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Asset Manager </title>
	<meta name="viewport" content="width= device-width, initial-scale=1.0">

<!-- The styles -->
	<link id="bs-css" href="<?php echo base_url();?>assets/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 5px 0;
	  }
	  .panel-default{
	  	border-bottom: solid #ccc 1px;
	  	padding-top: 10px;
	  	padding-bottom: 5px;
	  }
	  legend{
	  	color:#00B258;
	  	text-align:center;
	  }
	  th,td{
	  	border-color:#C6E2FF;
	  }
	</style>
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>assets/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>assets/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>assets/css/uploadify.css' rel='stylesheet'>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/TableTools/css/dataTables.tableTools.css">
	<script src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
	<style type="text/css" class="init">

	</style>	
	
</head>

<body>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="" href="index.html"> <img alt="" src="" /> <span>Asset Manager</span></a>
				
			
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone">John doe</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
		
			</div>
		</div>
	</div>
	<!-- topbar ends -->

	<div class="container-fluid">
		<div class="row-fluid">		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
		                 <div class="col-sm-3 col-md-3">
					            <div class="panel-group" id="accordion">
					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                        	<a class="ajax-link" data-parent="#accordion" href="#collapseOne" href="index.html" data-toggle="collapse"><i class="icon-barcode"></i><span class="hidden-tablet"> Assets</span></a>
					                      
					                        </h4>
					                    </div>
					                    <div id="collapseOne" class="panel-collapse collapse in">
					                        <div class="panel-body">
					                            <table class="table">
					                            	<tr>
					                                    <td>
					                                        <span class=" icon-list text-primary"></span><a href="<?php echo base_url();?>index.php/asset/view_asset">All Assets</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class=" icon-refresh text-primary"></span><a href="<?php echo base_url();?>index.php/deployed/view_deployed">Deployed assets</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="icon-share text-success"></span><a href="<?php echo base_url();?>index.php/ready_to_deploy/view_ready_to_deploy">Ready to Deploy assets</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="icon-file text-info"></span><a href="<?php echo base_url();?>index.php/requestable/view_requestable">Requestable assets</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="icon-hdd text-success"></span><a href="<?php echo base_url();?>index.php/archived/view_archived">Archived assets</a>
					                                       
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="icon-tasks text-success"></span><a href="<?php echo base_url();?>index.php/category/view_category">Asset Categories</a>
					                                       
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="icon-tags text-success"></span><a href="<?php echo base_url();?>index.php/brand/view_brand">Asset Brands</a>
					                                       
					                                    </td>
					                                </tr>
					                            </table>
					                        </div>
					                    </div>
					                </div>
					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                        	 	<a class="ajax-link"  href="<?php echo base_url();?>index.php/accesory/view_accesory"><i class="icon-headphones"></i><span class="hidden-tablet"> Accesories</span></a>
					                      
					                            
					                        </h4>
					                    </div>

					                </div>
					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                        	 	<a class="ajax-link"   href="<?php echo base_url();?>index.php/expendables/view_expendables" ><i class="icon-file"></i><span class="hidden-tablet"> Expendables</span></a>
					                           
					                        </h4>
					                    </div>
					 
					                </div>
					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                            <a  href="<?php echo base_url();?>index.php/licenses/view_license"><span  class="icon-certificate">
					                            </span>licenses</a>
					                        </h4>
					                    </div>
					                 </div>
					                 <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                            <a   class="ajax-link" data-parent="#accordion"   href="#collapseFive" data-toggle="collapse"><span class="icon-user">
					                            </span>Users</a>
					                        </h4>
					                    </div>
					                    <div id="collapseFive" class="panel-collapse collapse">
					                        <div class="panel-body">
					                            <table class="table">
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-usd"></span><a href="<?php echo base_url();?>index.php/users/view_all_users">All personnel</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-user"></span><a href="<?php echo base_url();?>index.php/users/view_system_users">System users</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-tasks"></span><a href="userlog.php">User logs</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="jobtitle.php">Job titles</a>
					                                    </td>
					                                </tr>
					                            </table>
					                        </div>
					                    </div>
					                    
					                </div>
					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                            <a  href=" <?php echo base_url();?>index.php/supplier/view_supplier"><span class="icon-briefcase">
					                            </span>Supplier</a>
					                        </h4>
					                    </div>
					     
					                    
					                </div>

					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                            <a  class="ajax-link" data-parent="#accordion"   href="#collapseFour" data-toggle="collapse"><span class="icon-book">
					                            </span>Reports</a>
					                        </h4>
					                    </div>
					                    <div id="collapseFour" class="panel-collapse collapse">
					                        <div class="panel-body">
					                            <table class="table">
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
					                                    </td>
					                                </tr>
					                                <tr>
					                                    <td>
					                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
					                                    </td>
					                                </tr>
					                            </table>
					                        </div>
					                    </div>
					                    
					                </div>
					            </div>
					        </div>
		
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			
			
			<div id="content" class="span10">