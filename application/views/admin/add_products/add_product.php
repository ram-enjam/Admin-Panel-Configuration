<?php
require_once(APPPATH . 'views/admin/include/header.php');
require_once(APPPATH . 'views/admin/include/body.php');
require_once(APPPATH . 'views/admin/include/navbar.php');
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

  ol,
  ul {
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

  @media (max-width: 991px) {

    .form-group select,
    .form-group input {
      max-width: 400px;
      width: 100% !important;
    }
  }

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
  <div class="content-wrapper" style="padding-top:0;">
    <aside class="right-side" style="background:whitesmoke;">
      <section class="content-header">
        <ol class="breadcrumb" style="margin-left:-25px;margin-top:0;">
          <li><a href="<?php echo base_url() . 'dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Products</li>
        </ol>
      </section>
      <section>
        <div class="content-header row">
          <div class="content-body col-12">

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <?php echo $this->session->flashdata('message'); ?>
                  <div class="card-content collpase show">
                    <div class="card-body">

                      <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/adminpage/save_products" onsubmit="return confirm('Are you sure you want to save?');">
                        <?php echo validation_errors(); ?>

                        <div class="form-body">
                          <h4 class="form-section"><i class="ft-file-plus"></i>Add Product</h4>
                          <div class="row">
                            <div class="form-group col-md-4 col-12 mb-2">
                              <select name="product_type" id="product_type" class="custom-select" style="margin-top: 27px; font-weight:bold;">
                                <option selected>Please Select Product Type</option>
                                <option value="core">Core Products</option>
                                <option value="api">API</option>
                                <option value="cust_synthesis">Custom Synthesis</option>
                                <option value="enzymes">Enzymes</option>
                                <option value="excipients">Excipients</option>
                                <option value="intermediates">Intermediates</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4 col-12 mb-2">
                              <label for="chemi_name" style="font-weight:bold;">Chemical Name :</label>
                              <input type="text" id="chemi_name" name="chemi_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-12 mb-2">
                              <label for="chemi_number" style="font-weight:bold;">Chemical Number :</label>
                              <input type="text" id="chemi_number" name="chemi_num" class="form-control" required>
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
            <div class="card">
              <div class="card-content">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Product Type</th>
                          <th>Chemical Name</th>
                          <th>Chemical Number</th>
                          <th>Created On</th>
                          <!-- <th>Created BY</th> -->
                          <th style="width: 60px;">Action</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;
                        foreach ($add_ptoduct as $products) { ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $products->product_type; ?></td>
                            <td><?php echo $products->chemical_name; ?></td>
                            <td><?php echo $products->chemical_number; ?></td>
                            <td><?php echo $products->created_on; ?> </td>
                            <!-- <td><?php echo $products->created_by; ?> </td> -->
                            <td class="text-center">
                              <a href="<?php echo base_url(); ?>admin/adminpage/edit_product/<?php echo $products->id; ?>"><i style="font-size:20px;padding: 0 5px;" class="ft-edit info"></i></a>
                              <a href="<?php echo base_url(); ?>admin/adminpage/delete_product/<?php echo $products->id; ?>" onclick="return confirm('Are you sure want to delete? ')"><i style="font-size:20px; padding: 0 5px;" class="ft-trash-2 danger"></i></a>
                            </td>
                            <td>
                              <?php if ($products->inactive == '0') { ?>
                                <a href="<?php echo base_url(); ?>admin/adminpage/product_active/<?php echo $products->id; ?>" onclick="return confirm('Are you sure want to save? ')" class="btn-info btn">Active</a>
                              <?php } else if ($products->inactive == '1') {
                              ?>
                                <a href="<?php echo base_url(); ?>admin/adminpage/product_deactive/<?php echo $products->id; ?>" onclick="return confirm('Are you sure want to save? ')" style="color:#ffffff;" class="btn-danger btn">DeActive</a>
                              <?php
                              } ?>
                            </td>
                          </tr>
                        <?php $i++;
                        } ?>
                      </tbody>
                    </table>
                  </div>

                </div>
      </section>
    </aside>
  </div>
</div>
<?php require_once(APPPATH . 'views/admin/include/footer.php'); ?>
<!-- <script>
  CKEDITOR.replace('event_description');
</script> -->