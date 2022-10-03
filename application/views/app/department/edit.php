<?php 
require_once(APPPATH.'views/admin/include/header.php');
require_once(APPPATH.'views/admin/include/body.php');
require_once(APPPATH.'views/admin/include/navbar.php');
 ?>
 <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
         

 <div class="content-body col-12">
<section id="basic-form-layouts">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	           
	            <div class="card-content collpase show">
	                <div class="card-body">
						
	                    <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/adminpage/save_edit_department/<?php echo $get_department->department_id; ?>"  onsubmit="return confirm('Are you sure you want to save?');">
	                    	<div class="form-body">
	                    	<h4 class="form-section"><i class="ft-file-plus"></i>Edit department</h4>
	                    	<div class="row">
	                    		
	                    		<div class="col-lg-10 col-md-6 p-0">
	                    			<div class="form-group row mx-auto">
									<label class="col-md-2 label-control" for="projectinput5">department</label>
									<div class="col-md-10">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="" name="department" required="required" value="<?php echo $get_department->department_name; ?>">
		                            </div>
		                        </div>
		                        <input type="hidden" name="department_id" value="<?php echo $get_department->department_id; ?>">
	                    		</div>
	                    		
	                    	</div>
                               </div>

	                        <div class="form-actions text-center">
	                            
	                            <button type="submit" class="btn btn-primary">
	                                <i class="ft-save"></i> Save
	                            </button>
	                        </div>

	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>


   
</section>
 <?php 
require_once(APPPATH.'views/admin/include/footer.php');
  ?>