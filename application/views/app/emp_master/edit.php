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
			<section class="content-header">
				<ol class="breadcrumb" style="margin-top:0; margin-left:-25px;">
					<li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="<?php echo base_url() . 'AddEmp'; ?>">Employee Master</li>
					<li class="active">Edit</li>
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
									<form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>app/emp_master/update/<?php echo $res->emp_id; ?>" onsubmit="return confirm('Are you sure you want to save?');">
										<div class="form-body">
											<h4 class="form-section" style="font-weight:bold;"><i class="ft-file-plus"></i>Edit Employee</h4>
											<div class="row">
												<div class="col-lg-4 col-md-6 p-0">
													<div class="form-group row mx-auto">
														<label class="col-md-5 label-control" for="projectinput5">Employee Name</label>
														<div class="col-md-7">
															<input type="text" id="projectinput5" class="form-control" placeholder="Name" name="emp_name" value="<?php echo $res->emp_name; ?>" required="required">
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 p-0">
													<div class="form-group row mx-auto">
														<label class="col-md-4 label-control" for="projectinput5">Phone</label>
														<div class="col-md-8">
															<input type="text" id="projectinput5" class="form-control" placeholder="Phone" name="phone" value="<?php echo $res->phone; ?>" required="required">
															<input type="hidden" name="emp_id" value="<?php echo $res->emp_id; ?>">
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
			</section>
		</aside>
	</div>
</div>

<?php
require_once(APPPATH . 'views/admin/include/footer.php');
?>