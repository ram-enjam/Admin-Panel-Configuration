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
</style>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper" style="padding-top:0;">
        <aside class="right-side" style="background:whitesmoke;">
            <section class="content-header">
                <ol class="breadcrumb" style="margin-top:0;margin-left:-25px;">
                    <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url() ?>admin/adminpage/career_details">Career</a></li>

                </ol>
            </section>
            <div class="users-list-table">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <?php $from_date = (!empty($from_date)) ? date("Y-m-d", strtotime($from_date)) : date("Y-m-d"); ?>
                            <?php $to_date = (!empty($to_date)) ? date("Y-m-d", strtotime($to_date)) : date("Y-m-d"); ?>

                            <form method="POST" action="<?php echo base_url() ?>admin/adminpage/career_details">
                                <div class="row search-box">
                                    <div class="col-lg-3">
                                        <input class="form-control" type="date" name="from_date" value="<?php echo $from_date; ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="date" name="to_date" value="<?php echo $to_date; ?>">
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="form-control text-white btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Status</th>
                                            <th>Applicant Details</th>
                                            <th>Career Info</th>
                                            <th>Qualification Info</th>
                                            <th>Resume</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //print_r($result);die;   
                                        $i = 0;
                                        foreach ($result as $result) {
                                            $i++;
                                        ?>
                                            <tr class="mark<?php echo $result->id ?> <?php if ($result->read_status == 0) {
                                                                                            echo "mark-unread";
                                                                                        } ?>">
                                                <td class="text-center">
                                                    <div> <button class="badge badge-primary border-0" data-toggle="modal" data-target="#changeStatus<?php echo $result->id ?>">Change Status</button></div>
                                                    <div> <button class="badge badge-primary border-0" onclick="myHistory(<?php echo $result->id ?>)" data-toggle="modal" data-target="#viewStatus<?php echo $result->id ?>">Status Details</button></div>
                                                    <div class="modal fade" id="changeStatus<?php echo $result->id ?>" tabindex="-1" role="dialog" aria-labelledby="changeStatusLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title text-white" id="changeStatusLabel">Change Status</h5>
                                                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/adminpage/enrollform_status" onsubmit="return confirm('Are you sure you want to save?');"> -->
                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="form-group col-12 mb-2">
                                                                                <label style="font-weight:bold;float: left;">Status :</label>
                                                                                <textarea id="new_status<?php echo $i; ?>" class="form-control" rows="3"></textarea>
                                                                            </div>
                                                                            <input type="hidden" id="id<?php echo $i; ?>" value="<?php echo $result->id; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions text-center">
                                                                        <button type="submit" data-dismiss="modal" onclick="statusSubmit(<?php echo $i; ?>, <?php echo $result->id; ?>)" class="btn btn-primary">
                                                                            <i class="ft-save"></i> Save
                                                                        </button>
                                                                    </div>
                                                                    <!-- </form> -->
                                                                </div>
                                                                <script>
                                                                    function statusSubmit(row, id) {
                                                                        if ($("#new_status" + row).val() == "") {
                                                                            alert("Status Should not be empty");
                                                                            $("#changeStatus" + id).modal("show");
                                                                        } else {
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: "<?php echo base_url() . 'admin/adminpage/careerform_status'; ?>",
                                                                                data: {
                                                                                    id: $("#id" + row).val(),
                                                                                    status: $("#new_status" + row).val()
                                                                                },
                                                                                success: function(data) {
                                                                                    alert("Data Updated Successfully");
                                                                                    $("#status" + row).html(data);
                                                                                    $(".mark" + id).removeClass("mark-unread");
                                                                                }
                                                                            });
                                                                        }

                                                                    }
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="viewStatus<?php echo $result->id ?>" tabindex="-1" role="dialog" aria-labelledby="viewStatusLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title text-white" id="historyLabel">History</h5>
                                                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="history<?php echo $result->id ?>">No Previous History</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        function myHistory(id) {
                                                            $.ajax({
                                                                type: "POST",
                                                                url: "<?php echo base_url() . 'admin/adminpage/careerform_history'; ?>",
                                                                data: {
                                                                    id: id,
                                                                },
                                                                success: function(data) {
                                                                    $("#history" + id).html(data);
                                                                }
                                                            });
                                                        }
                                                    </script>
                                                </td>
                                                <td>
                                                    <div>
                                                        <b>Name : </b><?php echo $result->firstname; ?> <?php echo $result->lastname; ?>
                                                    </div>
                                                    <div>
                                                        <b>Email : </b><?php echo $result->email; ?>
                                                    </div>
                                                    <div>
                                                        <b>Mobile : </b><?php echo $result->mobile; ?>
                                                    </div>
                                                    <div>
                                                        <b>Gender : </b><?php echo $result->gender; ?>
                                                    </div>
                                                    <div>
                                                        <b>Age : </b><?php echo $result->age; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <b>Experience : </b><?php echo $result->work_exp; ?> Years
                                                    </div>
                                                    <div>
                                                        <b>Current Job : </b><?php echo $result->current_job; ?>
                                                    </div>
                                                    <div>
                                                        <b>Current Organization : </b><?php echo $result->current_org; ?>
                                                    </div>
                                                    <div>
                                                        <b>Current Location : </b><?php echo $result->current_loc; ?>
                                                    </div>
                                                    <div>
                                                        <b>Position Applied for : </b><?php echo $result->job_title; ?>
                                                    </div>
                                                    <div>
                                                        <b>Department : </b><?php echo $result->department; ?>
                                                    </div>
                                                    <div>
                                                        <b>Language : </b><?php echo $result->language; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <b>Highest Qualification : </b><?php echo $result->highest_qualification; ?>
                                                    </div>
                                                    <div>
                                                        <b>UG College : </b><?php echo $result->ug_college; ?>
                                                    </div>
                                                    <div>
                                                        <b>PG College : </b><?php echo $result->pg_college; ?>
                                                    </div>
                                                    <div>
                                                        <b>P.hd College : </b><?php echo $result->phd_college; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn" href="<?php echo base_url(); ?>uploads/resume/<?php echo $result->resume; ?>" target="_blank">Resume <i class="fas fa-paperclip"></i></a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo date("d M ", strtotime($result->created_date)); ?>
                                                </td>

                                            </tr>
                                        <?php } ?>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>


<?php
require_once(APPPATH . 'views/admin/include/footer.php');
?>