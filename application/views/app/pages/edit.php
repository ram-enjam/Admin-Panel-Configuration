<?php 
require_once (APPPATH.'views/admin/include/header.php');
require_once (APPPATH.'views/admin/include/body.php');
require_once (APPPATH.'views/admin/include/navbar.php');
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
  <div class="content-wrapper" style="padding-top: 0;">
  	 <aside class="right-side"  style="background:whitesmoke;">
                     <section class="content-header" >
                     <ol class="breadcrumb" style="margin-top:0;margin-left: -25px;">
                        <li><a href="<?php echo base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="<?php echo base_url()?>app/pages">System Pages</a></li>
                        <li class="active">Edit Page</li>
                    </ol>
                </section>
                  <section class="content"  style="margin-left:10px;">
                 
                 
                 <div class="row">
                 	<div class="col-md-12" style="margin-left:0;padding-left:10px;margin-top:20px;">
                    
                    	 <div class="box">
                         		<form class="form-search" method="post" action="<?php echo base_url();?>app/pages">
                         		<div class="box-header">
                                    <h3 class="box-title"></h3>
                                    
                                </div><!-- /.box-header -->
								</form>
                        	<div class="box-body table-responsive">
                            	<form role="form" method="post" action="<?php echo base_url()?>app/pages/edit" onSubmit="return confirm('Are you sure you want to save?');">
                                <input type="hidden" name="id" id="id" value="<?php echo $pages->page_id;?>">
                                
                                		<?php echo validation_errors(); ?>   
                                
                                		<div class="form-group">
                                            <a href="<?php echo base_url();?>app/pages" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                		<div class="form-group">
                                        	<div class="col-md-2">
                                            	<label for="exampleInputEmail1">Page Module</label>
                                            </div>
                                            <div class="col-md-10">
                                            	<input class="form-control input-sm" name="page_module" id="page_module" type="text" placeholder="Page Module" style="width: 250px;" required value="<?php echo $pages->page_module;?>">
                                            </div>
                                            <div class="clearfix"> </div> 
                                        </div>
                                        
                                        <div class="form-group">
                                        	<div class="col-md-2">
                                            	<label for="exampleInputEmail1">Page Name</label>
                                            </div>
                                            <div class="col-md-10">
                                            	<input class="form-control input-sm" name="page_name" id="page_name" type="text" placeholder="Page Name" style="width: 250px;" required value="<?php echo $pages->page_name;?>">
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<div class="col-md-2">
                                            	<label for="exampleInputEmail1">Page Link</label>
                                            </div>
                                            <div class="col-md-10">
                                            	<input class="form-control input-sm" name="page_link" id="page_link" type="text" placeholder="Page Link" style="width: 250px;" required value="<?php echo $pages->page_link;?>">
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                 </div>
                 
                 
                </section><!-- /.content -->
            </aside>
 </div>
</div>




<?php  
require_once (APPPATH.'views/admin/include/footer.php');
?>