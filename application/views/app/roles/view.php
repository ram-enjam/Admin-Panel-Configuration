<?php
require_once(APPPATH . 'views/admin/include/header.php');
require_once(APPPATH . 'views/admin/include/body.php');
require_once(APPPATH . 'views/admin/include/navbar.php');
?>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
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

    .nav.nav-tabs .nav-item .nav-link.active {
        background-color: #fff;
        border-radius: 3px;
        border-color: #babfc7 #babfc7 #fff;
        color: red;
    }

    div#headingOne {
        padding: 5px;
        border-bottom: 1px solid #cfcfcf;

    }

    a.btn.btn-link {
        font-size: 19px;
        font-weight: 400;
        line-height: 29px;
        font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
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
                <ol class="breadcrumb" style="margin-top:0;margin-left: -25px;">
                    <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>app/roles">User Roles</a></li>
                    <li class="active">View</li>
                </ol>
            </section>
            <section class="content" style="margin-left:0;">
                <form role="form" method="post" action="<?php echo base_url(); ?>app/roles/updateRolePages" onSubmit="return confirm('Are you sure you want to save?');">
                    <input type="hidden" name="id" id="id" value="<?php echo $roles->role_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs nav-justified" style="margin-left:0;">
                                <li class="nav-item col-md-3" style="max-width:200px;">
                                    <a class="nav-link " id="active-tab" data-toggle="tab" href="#active" aria-controls="active" aria-expanded="true">General Information</a>
                                </li>
                                <li class="nav-item col-md-3" style="max-width:200px;">
                                    <a class="nav-link active" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">Role Permission</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane " id="active" aria-labelledby="active-tab" aria-expanded="true">
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role Name</label>
                                        <input class="form-control input-sm" name="role_name" id="role_name" type="text" placeholder="Role Name" style="width: 350px;" required value="<?php echo $roles->role_name ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role Description</label>
                                        <input class="form-control input-sm" name="role_description" id="role_description" type="text" placeholder="Role Description" style="width: 350px;" required value="<?php echo $roles->role_description ?>" readonly>
                                    </div>
                                    <br><br><br>
                                </div>
                                <div class="tab-pane active" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                    <?php echo $message; ?>

                                    <p><button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit">Update User Role Pages</button>
                                        <span>
                                            <input type="checkbox" name="check_all" id="check_lable" onclick="check_uncheck_checkbox(this.checked)" style="width: 23px;height: 20px;position: relative;top: 6px;left: 30px;cursor: pointer;">
                                            <label for="check_lable" style="position: relative;left: 37px;cursor: pointer;">Check and Uncheck</label>

                                        </span>
                                    </p>
                                    <div id="accordion">
                                        <?php
                                        $num = 0;
                                        foreach ($links as $links) {
                                            $num = $num + 1;
                                        ?>
                                            <div class="card" style="border-color: #838181; margin-bottom: 4px;border: none;">

                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1<?php echo $num; ?>" aria-expanded="true" aria-controls="collapseOne1<?php echo $num; ?>">
                                                            <?php echo $links->page_module; ?>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <?php
                                                $ci_obj = &get_instance();
                                                $ci_obj->load->model('app/roles_model');
                                                $pages = $ci_obj->roles_model->getPageByPageModule($links->page_module);
                                                ?>

                                                <div id="collapseOne1<?php echo $num; ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <table width="100%" cellpadding="2" cellspacing="2">
                                                            <?php
                                                            foreach ($pages as $pages) {

                                                                //get the access level of user
                                                                $ci_obj2 = &get_instance();
                                                                $ci_obj2->load->model('app/roles_model');
                                                                $access_level = $ci_obj2->roles_model->getRole_AccessLevel($pages->page_id, $roles->role_id);
                                                                if (!empty($access_level)) {
                                                                    if ($pages->page_id == $access_level->page_id) {
                                                                        $checked = "checked";
                                                                    } else {
                                                                        $checked = "";
                                                                    }
                                                                } else {
                                                                    $checked = "";
                                                                }
                                                            ?>
                                                                <tr>
                                                                    <td width="7%"><input type="checkbox" name="page_id[]" id="page_id[]" value="<?php echo $pages->page_id; ?>" <?php echo $checked; ?>></td>
                                                                    <td width="93%"><?php echo $pages->page_name; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>

            </section>

        </aside>
    </div>
</div>




<?php
require_once(APPPATH . 'views/admin/include/footer.php');
?>

<script type="text/javascript">
    function check_uncheck_checkbox(isChecked) {
        if (isChecked) {
            $('input[name="page_id[]"]').each(function() {
                this.checked = true;
            });
        } else {
            $('input[name="page_id[]"]').each(function() {
                this.checked = false;
            });
        }
    }
</script>