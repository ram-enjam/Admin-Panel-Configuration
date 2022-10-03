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
	 	<!-- <div class="content-body"> -->

             <aside class="right-side"> 
             	<section class="content-header">
                    <ol class="breadcrumb"style="margin-left:-25px;margin-top:0px;">
                        <li><a href="<?php echo base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">User Roles</li>
                    </ol>
                </section>
                   
                      <section class="content" style="margin-left:0;margin-top:20px;">

                 <div class="row">
                 	<div class="col-md-12">

                    	 <div class="box">
                         		<form class="form-search" method="post" action="<?php echo base_url();?>app/roles">
                         		<div class="box-header">
                                    <h3 class="box-title"><a href="<?php echo base_url();?>app/roles/add" class="btn btn-primary" style="color: #fff;background-color: #4caf50;border: solid 1px #fff;"><i class=" ft-plus"></i> Add New</a></h3>

                                   <!-- <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" name="btnSearch" id="btnSearch" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>-->

                                </div><!-- /.box-header -->
								</form>
                        	<div class="box-body table-responsive no-padding" style="margin-top:20px;">
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

                </section><!-- /.content -->

             </aside>  

	 	<!-- </div> -->
	 </div>
</div>




  <?php 
require_once(APPPATH.'views/admin/include/footer.php');
  ?>