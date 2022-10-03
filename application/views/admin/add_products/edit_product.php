<?php
require_once(APPPATH . 'views/admin/include/header.php');
require_once(APPPATH . 'views/admin/include/body.php');
require_once(APPPATH . 'views/admin/include/navbar.php');
?>
<style>
    form.form-bordered .form-group {
        border: 0;
    }

    form .form-actions {
        border: 0;
        padding: 0;
        margin: 0;
    }
</style>
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

                                        <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/adminpage/save_edit_product/<?php echo $get_product->id; ?>" onsubmit="return confirm('Are you sure you want to save?');">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-file-plus"></i>Edit Product</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-4 col-12 mb-2">
                                                        <select name="product_type" id="product_type" class="custom-select" style="margin-top: 27px; font-weight:bold;">
                                                            <option value="">Please Select Product Type</option>
                                                            <option value="core" <?php if($get_product->product_type == "core"){ echo "selected";} ?>>Core Products</option>
                                                            <option value="api" <?php if($get_product->product_type == "api"){ echo "selected";} ?>>API</option>
                                                            <option value="cust_synthesis" <?php if($get_product->product_type == "cust_synthesis"){ echo "selected";} ?>>Custom Synthesis</option>
                                                            <option value="enzymes" <?php if($get_product->product_type == "enzymes"){ echo "selected";} ?>>Enzymes</option>
                                                            <option value="excipients" <?php if($get_product->product_type == "excipients"){ echo "selected";} ?>>Excipients</option>
                                                            <option value="intermediates" <?php if($get_product->product_type == "intermediates"){ echo "selected";} ?>>Intermediates</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="" style="font-weight:bold;">Chemical Name:</label>
                                                        <input type="text" name="chemi_name" class="form-control" value="<?php echo $get_product->chemical_name; ?>" required>
                                                    </div>
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="" style="font-weight:bold;">Chemical Number:</label>
                                                        <input type="text" name="chemi_num" class="form-control" value="<?php echo $get_product->chemical_number; ?>" required>
                                                    </div>
                                                    <input type="hidden" name="id" value="<?php echo $get_product->id; ?>">
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
            </div>
        </div>
    </div>
</div>
<?php require_once(APPPATH . 'views/admin/include/footer.php'); ?>
