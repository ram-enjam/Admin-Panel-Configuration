<?php 
require_once(APPPATH.'views/admin/include/header.php');
require_once(APPPATH.'views/admin/include/body.php');
require_once(APPPATH.'views/admin/include/navbar.php');
 ?>
 <style>
 	.breadcrumb {
 	width: 60% !important;
    margin-bottom: 0.5em !important;
    background: linear-gradient(to right, #ffffff 0%, #ffffff00 80%);
    border-radius: 0;
    padding: 10px 0;
    list-style: none;
 	}
 	ol, ul {
    margin-top: 0;
   }
   ol {
    display: block;
   /* list-style-type: decimal;*/
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.breadcrumb>li+li:before {
    color: #1c1c1c;
}
.breadcrumb>li+li:before {
    content: "/\00a0";
    padding: 0 5px;
    color: #333;
}
.breadcrumb li a {
	/*margin-left:10px;*/
    color: #000;
    font-weight: 600;
}
 @media (max-width: 991px){
    .form-group select,.form-group input {
    max-width: 400px;
    width: 100% !important;
}
}
 </style>

 <div class="app-content content">
 <div class="content-overlay"></div>
  <div class="content-wrapper" style="padding-top:0;">
  	  <aside class="right-side" style="background:whitesmoke;">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb"style="margin-top:0px;margin-left:-25px;">
                        <li><a href="<?php echo base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="<?php echo base_url()?>app/user">User Management</a></li>
                        <li><a href="<?php echo base_url()?>app/roles">User Roles</a></li>
                        <li class="active">Edit Role</li>
                    </ol>
                </section>

                 <section class="content" style="margin-left:10px;">
                 
                 
                 <div class="row">
                 	<div class="col-md-12" style="margin-left:0;padding-left:10px;margin-top:20px;">
                    
                    	 <div class="box">
                         		
                         		<div class="box-header">
                                    <h3 class="box-title"></h3>
                                    
                                </div>
                        	<div class="box-body table-responsive">
                            	<form role="form" method="post" action="<?php echo base_url()?>app/roles/edit" onSubmit="return confirm('Are you sure you want to save?');">
                                <input type="hidden" name="id" id="id" value="<?php echo $roles->role_id?>">
                                		<?php echo validation_errors(); ?>   
                                        
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">Access Module</label>
                                            <select name="module" id="module" class="form-control" style="width: 350px;" required>
                                            	<option value=""> - Access Module - </option>
                                            	<option value="administrator" <?php if($roles->module == "administrator"){ echo "selected";}?>>Administrator Module</option>
                                               
                                            </select>
                                        </div>
                                
                                		<div class="form-group">
                                            <label for="exampleInputEmail1">Role Name</label>
                                            <input class="form-control" name="role_name" id="role_name" type="text" onkeyup="role_valid()"  onblur="role_validation()" placeholder="Role Name" style="width: 350px;" required value="<?php echo $roles->role_name?>" autocomplete="off">
                                            <input type="hidden" id="user_list">
                                            <div id="showlistdiv" style="color: #f0fd25;position: absolute;background-color: #325d51f2;z-index: 9;width: 100%;max-height: 145px;overflow-y: auto; font-weight: 400;" padding:0 10px;></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Role Description</label>
                                            <input class="form-control" name="role_description" id="role_description" type="text" placeholder="Role Description" style="width: 350px;" required value="<?php echo $roles->role_description?>">
                                        </div>
                                        
                                       <div class="form-group" style="margin-left: 85px;margin-top: 11px;">
                                            <a href="<?php echo base_url();?>app/roles" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i>Update</button>
                                        </div>
                                        
                                </form>
                                
                            </div>
                        </div>
                    </div>
                 </div>
                 
                 
                </section>
  </div>

 </div>

 <?php 
require_once(APPPATH.'views/admin/include/footer.php');
  ?>