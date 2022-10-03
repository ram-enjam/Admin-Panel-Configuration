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
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <ol class="breadcrumb" style="margin-left:-25px;margin-top:0;">
          <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Employee Master</li>
        </ol>
      </section>
      <section id="basic-form-layouts">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-content collpase show">
                <div class="card-body">

                  <?php if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                  } ?>
                  <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>app/emp_master/save" onsubmit="return confirm('Are you sure you want to save?');">
                    <?php echo validation_errors(); ?>
                    <div class="form-body">
                      <h4 class="form-section" style="font-weight:bold;"><i class="ft-file-plus"></i>Create Employee</h4>
                      <div class="row">
                        <div class="col-lg-4 col-md-6 p-0">
                          <div class="form-group row mx-auto">
                            <label class="col-md-5 label-control" for="projectinput5">Employee Name</label>
                            <div class="col-md-7">
                              <input type="text" id="projectinput5" class="form-control" placeholder="Name" name="emp_name" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                          <div class="form-group row mx-auto">
                            <label class="col-md-4 label-control" for="projectinput5">Phone</label>
                            <div class="col-md-8">
                              <input type="text" id="projectinput5" class="form-control" placeholder="Phone" name="emp_phone" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                          <div class="form-group row mx-auto" style="position: relative;top: 7px;">
                            <label class="col-md-4 label-control">Department</label>
                            <div class="col-md-8">
                              <label id="projectinput8" class="file center-block">

                                <select class="form-control" id="projectinput5" required="required" name="department">
                                  <option value="">--Select Department--</option>
                                  <?php
                                  $i = 0;
                                  foreach ($department as $department) {
                                    $i++;
                                  ?>
                                    <option value="<?php echo $department->department_id ?>"><?php echo $department->department_name; ?></option>
                                  <?php } ?>

                                </select>

                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-actions text-center">

                      <button type="submit" class="btn btn-primary">
                        <i class="ft-save"></i> Submit
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
                      <th>Slno</th>
                      <th>Employee Name</th>
                      <th>Phone</th>
                      <th>Department</th>
                      <th>Created Date</th>
                      <th style="width: 60px;">Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 0;
                    foreach ($emp as $emp) {
                      $i++;
                    ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $emp->emp_name; ?></td>
                        <td><?php echo $emp->phone; ?></td>
                        <td><?php echo $emp->department_name; ?></td>
                        <td><?php echo $emp->createdDate; ?></td>
                        <td class="text-center">
                          <a href="<?php echo base_url(); ?>app/emp_master/edit/<?php echo $emp->emp_id; ?>"><i style="font-size:20px;padding: 0 5px;" class="ft-edit info"></i></a>
                          <a href="<?php echo base_url(); ?>app/emp_master/delete/<?php echo $emp->emp_id; ?>" onclick="return confirm('Are you sure want to delete? ')"><i style="font-size:20px; padding: 0 5px;" class="ft-trash-2 danger"></i></a>
                        </td>

                        <td> <?php if ($emp->inActive == '0') { ?>
                            <a href="<?php echo base_url(); ?>app/emp_master/active/<?php echo $emp->emp_id; ?>" class="btn-info btn">Active</a>
                          <?php } else if ($emp->inActive == '1') {
                          ?>
                            <a href="<?php echo base_url(); ?>app/emp_master/deactive/<?php echo $emp->emp_id; ?>" style="color:#ffffff;" class="btn-danger btn">DeActive</a>



                          <?php
                              } ?>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>



      </section>

    </aside>

  </div>
</div>

<?php require_once(APPPATH . 'views/admin/include/footer.php'); ?>