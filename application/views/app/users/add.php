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
        /*padding-top: 0px;*/
        margin-top: 0px;
        /*margin-left:-2.5px;*/
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
    <div class="content-wrapper" style="padding-top:0px;">
        <aside class="right-side" style="background:whitesmoke;">
            <section class="content-header">
                <ol class="breadcrumb" style="margin-left:-25px;">
                    <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">User</li>
                </ol>
            </section>
            <section id="basic-form-layouts" style="margin-left: -8px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content collpase show">
                                <div class="card-body" style="padding: 0.5rem;">
                                    <div class="card-text">
                                        <div class="shipping-top kgn-details-grids">
                                            <div class="kgn-top-info">
                                                <div class="m_10 kgn-top-heading kgn-left-heading" style="float:left;">
                                                    <h3 style="font-weight:bold;"><i class="ft-plus"></i>Create User</h3>
                                                </div>
                                                <div class="kgn-left-button" style="float:left;margin: 5px 0 0px 10px ;">
                                                    <a href="<?php echo base_url() ?>app/emp_master/add" class="label bg-warning text-white" style="padding:5px;font-size:10px;"> CREATE EMPLOYEE</a>
                                                </div>
                                            </div>
                                            <br><br><br>
                                        </div>
                                    </div>
                                    <?php if ($this->session->flashdata('message')) {
                                        echo $this->session->flashdata('message');
                                    } ?>
                                    <form class="form" action="<?php echo base_url(); ?>app/users/user_save" method="post" onSubmit="return confirm('Are you sure you want to save?');">
                                        <div class="row" style="padding-left:15px;">
                                            <div class="form-group col-md-4 mb-2">
                                                <label for="" class="m_10"><b>Date</b></label>
                                                <input type="date" id="date" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Date" required="required">
                                            </div>
                                            <div class="form-group col-md-4 mb-2">
                                                <label for=""><b>Employee Name</b></label>
                                                <select class="form-control" name="employee" id="issueinput4" required="required">
                                                    <option value="">Choose Employee</option>
                                                    <?php
                                                    $i = 0;
                                                    foreach ($emp_data as $emp) {
                                                        $i++;
                                                    ?>
                                                        <option value="<?php echo $emp->emp_id; ?>"><?php echo $emp->emp_name; ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 mb-2">
                                                <label for=""><b>User Role</b></label>
                                                <select name="userrole" id="" class="form-control" required="required">
                                                    <option value="">Select Role</option>
                                                    <?php
                                                    $i = 0;
                                                    foreach ($get_role as $roles) {
                                                        $i++;
                                                    ?>
                                                        <option value="<?php echo $roles->role_id; ?>"><?php echo $roles->role_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 mb-2">
                                                <label for=""><b>User Name</b></label>
                                                <input type="text" id="issueinput4" class="form-control" name="username" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="User Name" required="required">
                                            </div>

                                            <div class="form-group col-md-4 mb-2">
                                                <label for=""><b>Password</b></label>
                                                <input type="text" id="issueinput4" class="form-control" name="password" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Password" required="">
                                            </div>

                                        </div>

                                        <div class="form-actions text-center" style="padding-bottom:5px;">
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
                                            <th>SL.No</th>
                                            <th>Date</th>
                                            <th>Employee Name</th>
                                            <th>User Role</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th style="width: 60px;">Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($get_users as $users) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $users->insert_date; ?></td>
                                                <td><?php echo $users->emp_name; ?></td>
                                                <td><?php echo $users->role_name; ?></td>
                                                <td><?php echo $users->username; ?></td>
                                                <td><?php echo $users->password; ?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url(); ?>app/users/edit/<?php echo $users->user_id; ?>"><i style="font-size:20px;padding: 0 5px;" class="ft-edit info"></i></a>
                                                    <a href="<?php echo base_url(); ?>app/users/delete/<?php echo $users->user_id; ?>" onclick="return confirm('Are you sure you want to save?')"><i style="font-size:20px; padding: 0 5px;" class="ft-trash-2 danger"></i></a>
                                                </td>
                                                <td>
                                                    <?php if ($users->inActive == '0') { ?>
                                                        <a href="<?php echo base_url(); ?>app/users/active/<?php echo $users->user_id; ?>" onclick="return confirm('Are you sure you want to save?')" class="btn-info btn">Active</a>
                                                    <?php } else if ($users->inActive == '1') {
                                                    ?>
                                                        <a href="<?php echo base_url(); ?>app/users/deactive/<?php echo $users->user_id; ?>" onclick="return confirm('Are you sure you want to save?')" style="color:#ffffff;" class="btn-danger btn">DeActive</a>
                                                    <?php
                                                    } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </div>
</div>
<?php
require_once(APPPATH . 'views/admin/include/footer.php');
?>