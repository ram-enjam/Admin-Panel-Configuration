<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 
  <title>Honey Drugs | Login</title>
  <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/components.min.css">
  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/pages/login-register.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/css/style.css">
  <!-- END: Custom CSS-->
  <style>
    .alert {
      position: absolute;
      top: 15px;
      right: 15px;
    }
  </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<?php echo validation_errors(); ?>
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="row flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img width="200" src="<?php echo base_url() ?>assets/img/logo.png" alt="branding logo">
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>To Login Please Fill your details</span></p>
                  <br>
                 
                  <?php
                  if (isset($usernamelogin)) {
                    $usernamelogin = $usernamelogin;
                  } else {
                    $usernamelogin = "";
                  }
                  if (isset($passwordlogin)) {
                    $passwordlogin = $passwordlogin;
                  } else {
                    $passwordlogin = "";
                  }
                  ?>

                  <div class="card-body">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>login/validate_login" method="post">
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control" id="user-name" placeholder="Your Username" name="username" value="<?php echo $usernamelogin; ?>" required>
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control" id="user-password" placeholder="Enter Password" name="password" value="<?php echo $passwordlogin; ?>" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      
                      <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
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
  <!-- END: Content-->


  <!-- BEGIN: Vendor JS-->
  <script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="<?php echo base_url(); ?>backend/app-assets/js/core/app-menu.min.js"></script>
  <script src="<?php echo base_url(); ?>backend/app-assets/js/core/app.min.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/forms/form-login-register.min.js"></script>
  <!-- END: Page JS-->

</body>
<!-- END: Body-->


</html>