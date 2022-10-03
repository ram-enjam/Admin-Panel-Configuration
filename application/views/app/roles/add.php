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

    img.swal2-image {
        width: 100px;
        max-width: 100%;
    }
</style>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper" style="padding-top: 0;">
        <!-- <div class="content-body"> -->
        <aside class="right-side" style="background:whitesmoke;">
            <section class="content-header">
                <ol class="breadcrumb" style="margin-top:0px;margin-left:-25px">
                    <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url() ?>app/roles">User Roles</a></li>
                    <li class="active">Add Role</li>
                </ol>
            </section>
            <section class="content" style="margin-left:10px;">


                <div class="row">
                    <div class="col-md-12" style="margin-left:0;padding-left:10px;margin-top:20px;">

                        <div class="box">

                            <div class="box-header">
                                <h3 class="box-title"></h3>

                            </div>
                            <div class="box-body table-responsive">
                                <form role="form" method="post" autocomplete="off" action="<?php echo base_url() ?>app/roles/save" onSubmit="return form_submit();">
                                    <?php echo validation_errors(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Access Module</label>
                                        <select name="module" id="module" class="form-control" style="width: 350px;" required>
                                            <option value=""> - Access Module - </option>
                                            <option value="Administration">Administrator Module</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role Name</label>
                                        <input class="form-control" name="role_name" id="role_name" type="text" onblur="role_validation()" placeholder="Role Name" style="width: 350px;" required>
                                        <input type="hidden" id="user_list">
                                        <div id="showlistdiv" style="color: #f0fd25;position: absolute;background-color: #325d51f2;z-index: 9;width: 33%;max-height: 26px;overflow-y: auto; font-weight: 400;" padding:0 10px;></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role Description</label>
                                        <input class="form-control" name="role_description" id="role_description" type="text" placeholder="Role Description" style="width: 350px;" required>
                                    </div>
                                    
                                    <div class="form-group" style="margin-top: 15px;margin-left: 104px;">
                                        <a href="<?php echo base_url(); ?>app/roles" class="btn btn-default">Cancel</a>&nbsp;&nbsp;
                                        <button class="btn btn-primary" name="btnSubmit" onsubmit="checkrole_name()" id="btnSubmit" type="submit" style="background:#4caf50;"><i class="ft-save"></i> Save</button>
                                    </div>

                                </form>

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
require_once(APPPATH . 'views/admin/include/footer.php');
?>
<script>
    $(document).ready(function() {
        var tk = '<?php echo $user_role; ?>';
        $('#user_list').val(tk);
    });

    function role_valid() {
        var input_string = $('#role_name').val();

        var list = $('#user_list').val();

        if (input_string != '' && input_string != null && input_string != undefined) {
            //alert(list);
            list = JSON.parse(list);
            //alert(list);
            list = list.user_role;
            var matched_list = [];
            input_string = input_string.toLowerCase();
            $.each(list, function(key, value) {
                var data_item = value.toLowerCase();
                if (data_item.indexOf(input_string) != -1) {
                    matched_list.push('<p class="plist"> ' + value + '</p>');
                }
            });
            $('#showlistdiv').html(matched_list);
            //console.log(matched_list);
        }
    }

    function role_validation() {

        var input_string = $("#role_name").val();
        var k = $("#role_name").val();
        var inlen = k.length;
        if (input_string != '' && input_string != null && input_string != undefined) {
            var list = $('#user_list').val();
            //$('#btnSubmit').show();

            list = JSON.parse(list);

            list = list.user_role;
            var matched_list = [];
            input_string = input_string.toLowerCase();
            $.each(list, function(key, value) {
                var data_item = value.toLowerCase();
                var data_len = value.length;
                if (data_item.indexOf(input_string) != -1) {
                    if (data_len == inlen) {
                        swal({
                            title: "CHECK YOURSELF",
                            html: true,
                            text: "Customer <b>" + value + "</b> already exists",
                            imageUrl: '<?php echo base_url(); ?>backend/app-assets/images/sad.png',
                            imageAlt: 'Custom image'
                        });
                        //$('#btnSubmit').hide();
                        $("#role_name").val('');
                    }
                }
            });
        }

    }
</script>