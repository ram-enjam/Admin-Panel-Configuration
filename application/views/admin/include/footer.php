<!--  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer> -->
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/vendors.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>backend/app-assets/js/core/libraries/jquery_ui/jquery-ui-min.js"></script> -->
<!-- BEGIN Vendor JS-->
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/charts/chart.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/charts/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/charts/morris.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/data/jvector/visitor-data.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url(); ?>backend/app-assets/js/core/app-menu.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/js/core/app.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/customizer.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/pages/dashboard-sales.min.js"></script> -->
<script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/pages/page-users.min.js"></script>
<!-- END: Page JS-->
<!--   <script src="<?php echo base_url(); ?>backend/app-assets/vendors/js/editors/ckeditor/ckeditor-super-build.js"></script> -->
<script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/tables/datatables/datatable-basic.min.js"></script>
<script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/extensions/ex-component-sweet-alerts.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>backend/app-assets/js/scripts/editors/editor-ckeditor.min.js"></script>
 -->
<!--  <script src="<?php echo base_url(); ?>backend/assets/js/img-uploader/filepond.min.js"></script>
<script src="<?php echo base_url(); ?>backend/assets/js/img-uploader/filepond-plugin-file-encode.min.js"></script>
<script src="<?php echo base_url(); ?>backend/assets/js/img-uploader/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?php echo base_url(); ?>backend/assets/js/img-uploader/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?php echo base_url(); ?>backend/assets/js/img-uploader/filepond-plugin-image-preview.min.js"></script> -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  $('#cancel').click(function() {
    if (confirm("Are you sure? Your work will be lost!")) {
      location.reload();
      // history.back()
    } else {
      // Do nothing!
    }
  });
</script>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 3500);
  });
</script>
</body>
<!-- END: Body-->

</html>