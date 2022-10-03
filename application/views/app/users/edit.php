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
					<li><a href="<?php echo base_url() . 'CreateUsers'; ?>"><i class="fa fa-dashboard"></i> Users</a></li>
					<li class="active">Edit</li>
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
									<form class="form" action="<?php echo base_url(); ?>app/users/update/<?php echo $get_user->user_id; ?>" method="post" onSubmit="return confirm('Are you sure you want to save?');">


										<div class="row" style="padding-left:15px;">
											<div class="form-group col-md-4 mb-2">
												<label for="" class="m_10"><b>Date</b></label>
												<input type="date" id="date" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Date" value="<?php echo $get_user->insert_date; ?>" required="required">
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
														<option value="<?php echo $emp->emp_id; ?> " <?php
																										if ($emp->emp_id == $get_user->user_empid) {
																											echo "Selected";
																										}
																										?>><?php echo $emp->emp_name; ?></option>
													<?php } ?>

												</select>
											</div>
											<div class="form-group col-md-4 mb-2">
												<label for=""><b>User Role</b></label>
												<select name="userrole" id="" class="form-control" required="required">
													<option value="">Select Role</option>
													<?php
													$i = "0";
													foreach ($get_role as $roles) {
														$i++;

													?>

														<option value="<?php echo $roles->role_id; ?>" <?php
																										if ($roles->role_id == $get_user->user_role) {
																											echo "Selected";
																										}
																										?>><?php echo $roles->role_name; ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group col-md-4 mb-2">
												<label for=""><b>User Name</b></label>
												<input type="text" id="issueinput4" class="form-control" name="username" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="User Name" value="<?php echo $get_user->username; ?> " required="required">
											</div>

											<div class="form-group col-md-4 mb-2">
												<label for=""><b>Password</b></label>
												<input type="text" id="issueinput4" class="form-control" name="password" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Password" value="<?php echo $get_user->password; ?>" required="">
											</div>
											<input type="hidden" name="user_id" value="<?php echo $get_user->user_id; ?>">

										</div>


										<div class="form-actions text-center" style="padding-bottom:5px;">
											<button type="submit" class="btn btn-primary">
												<i class="ft-save"></i> Update
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