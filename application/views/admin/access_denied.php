<?php
require_once(APPPATH . 'views/admin/include/header.php'); ?>
<div class="Welcome-msg">
    <div class="container">
        <div class="error-text">
            <div class="barrier">
                <img alt="Access Denied" src="<?php echo base_url(); ?>backend/app-assets/images/alert.png" />
            </div>
            <h2>Access Denied</h2>
            <p class="">It seems that you're lost. Let us help guide you out and get you back home.</p>
            <div class="buttons">
                <a class="btn btn-outline-primary" href="javascript:history.back()">Back</a>
            </div>
        </div>
        
    </div>

</div>
<style>
    .Welcome-msg {

        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100%;
    }
    
.barrier img {
  max-height: 180px;
  margin-bottom: 10px;
}
</style>