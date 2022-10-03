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
</style>
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper" style="padding-top:0;">
    <aside class="right-side" style="background:whitesmoke;">
      <section class="content-header">
        <ol class="breadcrumb" style="margin-left:-25px;margin-top:0;">
          <li><a href="<?php echo base_url() . 'dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Department</li>
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

                      <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/adminpage/savedepartment" onsubmit="return confirm('Are you sure you want to save?');">
                        <?php echo validation_errors(); ?>

                        <div class="form-body">
                          <h4 class="form-section"><i class="ft-file-plus"></i>Add Department</h4>
                          <div class="row">

                            <div class="col-lg-10 col-md-6 p-0">
                              <div class="form-group row mx-auto">
                                <label class="col-md-2 label-control" for="projectinput5">Department</label>
                                <div class="col-md-10">
                                  <input type="text" id="projectinput5" class="form-control" placeholder="" name="department" required="required">
                                </div>
                              </div>
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
                          <th>Department</th>
                          <th>Created On</th>
                          <th style="width: 60px;">Action</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;
                        foreach ($department as $department) { ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $department->department_name; ?></td>
                            <td><?php echo $department->createdon; ?> </td> 
                            <td class="text-center">
                              <a href="<?php echo base_url(); ?>admin/adminpage/edit_department/<?php echo $department->department_id; ?>"><i style="font-size:20px;padding: 0 5px;" class="ft-edit info"></i></a>
                              <!-- <a href="<?php //echo base_url(); ?>admin/adminpage/delete_department/<?php //echo $department->department_id; ?>" onclick="return confirm('Are you sure want to delete? ')"><i style="font-size:20px; padding: 0 5px;" class="ft-trash-2 danger"></i></a> -->
                            </td>
                            <td>
                              <?php if ($department->inactive == '0') { ?>
                                <a href="<?php echo base_url(); ?>admin/adminpage/department_active/<?php echo $department->department_id; ?>" class="btn-info btn">Active</a>
                              <?php } else if ($department->inactive == '1') {
                              ?>
                                <a href="<?php echo base_url(); ?>admin/adminpage/department_deactive/<?php echo $department->department_id; ?>" style="color:#ffffff;" class="btn-danger btn">DeActive</a>
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


<?php
require_once(APPPATH . 'views/admin/include/footer.php');
?>