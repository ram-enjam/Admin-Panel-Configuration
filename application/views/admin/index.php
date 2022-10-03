<?php
require_once(APPPATH . 'views/admin/include/header.php');
require_once(APPPATH . 'views/admin/include/body.php');
require_once(APPPATH . 'views/admin/include/navbar.php');
?>
<?php 
$contact_count = $this->general_model->get_contact_form_count();
$enquiry_count = $this->general_model->get_enquiry_form_count();
$career_count = $this->general_model->get_career_form_count();
?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">

                <div class="col-xl-12 col-12">
                    <div class="media-body text-left mb-1">
                        <h3 class="text-muted">Form Data</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h5 class="text-muted">Contact </h5>
                                                <h3><?php echo $contact_count->total_count; ?></h3>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-call-in success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h5 class="text-muted">Enquiry</h5>
                                                <h3><?php echo $enquiry_count->total_count; ?></h3>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-envelope-open danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h5 class="text-muted">Career</h5>
                                                <h3><?php echo $career_count->total_count; ?></h3>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-cursor success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Data</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="border-top-0">Contact Form</th>
                                                <td class="border-top-0 text-right">2245</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Admission Form</th>
                                                <td class="text-right">1850</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Enquiry Form</th>
                                                <td class="text-right">1550</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Career Form</th>
                                                <td class="text-right">1550</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alumni Form</th>
                                                <td class="text-right">1550</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">Average Deal Size</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                        <h6 class="danger text-bold-600">-30%</h6>
                                        <h4 class="font-large-2 text-bold-400">$12,536</h4>
                                        <p class="blue-grey lighten-2 mb-0">Per rep</p>
                                    </div>
                                    <div class="col-md-6 col-12 text-center">
                                        <h6 class="success text-bold-600">12%</h6>
                                        <h4 class="font-large-2 text-bold-400">$18,548</h4>
                                        <p class="blue-grey lighten-2 mb-0">Per team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
          
        </div>
    </div>
</div>
<?php require_once(APPPATH . 'views/admin/include/footer.php'); ?>