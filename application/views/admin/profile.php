<?php
require_once(APPPATH . 'views/admin/include/header.php');
require_once(APPPATH . 'views/admin/include/body.php');
require_once(APPPATH . 'views/admin/include/navbar.php');
?>

<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
  <?php echo $this->session->flashdata('message'); ?>
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- users edit start -->
      <section class="users-edit">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <!-- users edit account form start -->
              <form action="<?php echo base_url() ?>admin/adminpage/update_profile" method="post">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>Name</label>
                        <input type="text" class="form-control" name="emp_name" placeholder="Name" value="<?php echo $user_profile->emp_name; ?>" required>
                        <div class="help-block"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Department</label>
                      <input type="text" class="form-control" placeholder="Name" value="<?php echo $user_profile->department_name; ?>" disabled required>
                    </div>
                    <div class="form-group">
                      <div class="controls">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user_profile->username; ?>" required>
                        <div class="help-block"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Name" value="<?php echo $user_profile->phone; ?>" required>
                        <div class="help-block"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="controls">
                        <label>User Role</label>
                        <input type="text" class="form-control" placeholder="Name" value="<?php echo $user_profile->role_name; ?>" disabled required>
                        <div class="help-block"></div>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 mb-1">
                    <h4>Change Password</h4>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>New Password</label>
                        <fieldset class="form-group position-relative">
                          <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                          <div class="form-control-position icon">
                            <i class="fa fa-eye info" id="password_eye"></i>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>Confirm Password</label>
                        <fieldset class="form-group position-relative">
                          <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                          <div class="form-control-position icon">
                            <i class="fa fa-eye info" id="c_password_eye"></i>
                          </div>
                        </fieldset>
                        <div class="help-block"></div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="emp_id" value="<?php echo $user_profile->emp_id; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $user_profile->user_id; ?>">
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                      changes</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
              </form>
              <!-- users edit account form ends -->
            </div>
          </div>
        </div>
      </section>
      <!-- users edit ends -->
    </div>
  </div>
</div>
<style>
  .form-control-position.icon {
    position: absolute;
    top: 0px;
    right: 0;
    z-index: 2;
    display: block;
    width: 2.5rem;
    height: 100%;
    line-height: 3.2rem;
    text-align: center;
  }
  .form-control-position.icon i{
    cursor: pointer;
  }
</style>
<?php
require_once(APPPATH . 'views/admin/include/footer.php');
?>
<script>
  // show password
  $(document).ready(function() {
    $('#password_eye').on('click', function() {
      if ($('#password').attr('type') == 'password') {
        $('#password').attr('type', 'text');
        $('#password_eye').removeClass('fa-eye').addClass('fa-eye-slash');
      } else {
        $('#password').attr('type', 'password');
        $('#password_eye').removeClass('fa-eye-slash').addClass('fa-eye');
      }
    });
    $('#c_password_eye').on('click', function() {
      if ($('#confirm_password').attr('type') == 'password') {
        $('#confirm_password').attr('type', 'text');
        $('#c_password_eye').removeClass('fa-eye').addClass('fa-eye-slash');
      } else {
        $('#confirm_password').attr('type', 'password');
        $('#c_password_eye').removeClass('fa-eye-slash').addClass('fa-eye');
      }
    });
  });


  $('#password, #confirm_password').on('keyup', function() {
    if (($('#password').val() != $('#confirm_password').val()) || ($('#password').val() == '')) {
      // add red color on border
      $('#confirm_password').css('border-color', 'red');

      // $('#confirm_password').addClass('is-invalid');
      $('#password').css('border-color', 'red');

      $('.help-block').text('Password does not match');
    } else {
      $('.help-block').text('');
      $('#password').css('border-color', '#28d094');
      $('#confirm_password').css('border-color', '#28d094');
    }
  });
</script>