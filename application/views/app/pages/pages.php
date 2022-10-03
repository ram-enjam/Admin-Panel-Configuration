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
 <div class="content-wrapper" style="padding-top:0;">
 	   <aside class="right-side"  style="background:whitesmoke;">
                     <section class="content-header" >
                    <ol class="breadcrumb" style="margin-top:0;margin-left:-25px;">
                        <li><a href="<?php echo base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">System Pages</li>
                    </ol>
                </section>

                  <section class="content" style="margin-left:10px;">
                 
                 
                 <div class="row">
                 	<div class="col-md-12" style="margin-left:0;padding-left:10px;margin-top:20px;">
                    
                    	 <div class="box">
                         		<form class="form-search" method="post" action="<?php echo base_url();?>app/pages">
                         		<div class="box-header">
                                    <h3 class="box-title"><a href="<?php echo base_url();?>app/pages/add" class="btn btn-primary"><i class="ft-plus"></i> Add New</a></h3>
                                    
                                    <div class="box-tools">
                                        <div class="input-group" style=" max-width: 194px;margin-right: 0; margin-left: auto;margin-bottom:20px;">
                                            <input type="text" name="search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" name="btnSearch" id="btnSearch" type="submit"><i class="ft-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div><!-- /.box-header -->
								</form>
                        	<div class="box-body table-responsive no-padding">
                            	<?php echo $message;?>
                                
                            	<?php echo $table; ?>
                                
                            </div>
                            	<div class="box-footer clearfix">
                                  <nav aria-label="Page navigation">
                                	<?php echo $pagination; ?>
                                </nav>
                                </div>
                        </div>
                    </div>
                 </div>
                 
                 
                </section>

 	   </aside>  
 </div>
</div>

<?php require_once(APPPATH.'views/admin/include/footer.php'); ?>