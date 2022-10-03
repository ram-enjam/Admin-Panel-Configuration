<?php
$userdata = $this->session->userdata('login');
// print_r($userdata);die;
$user_id = $userdata['user_id'];
$user_data = $this->general_model->get_user_details($user_id);
// print_r($user_data);die;
?>
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
	<div class="navbar-wrapper">
		<div class="navbar-header expanded">
			<ul class="nav navbar-nav flex-row">
				<li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
				<li class="nav-item mr-auto"><a class="navbar-brand" href="javascript:void(0)">
						<img class="brand-logo expand-img" src="<?php echo base_url() ?>assets/img/logo.png" style="width:150px;" alt="">
						<img class="brand-logo non-expand-img" src="<?php echo base_url() ?>assets/img/favicon.png" alt="">
						<!-- <h3 class="brand-text">Modern</h3></a></li> -->
				<li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
				<li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
			</ul>
		</div>
		<div class="navbar-container content">
			<div class="collapse navbar-collapse" id="navbar-mobile">
				<ul class="nav navbar-nav mr-auto float-left">
				</ul>
				</li>
				</ul>
				</li>
				<!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Explore Modern..." tabindex="0" data-search="template-list">
                  <div class="search-input-close"><i class="ft-x"></i></div>
                  <ul class="search-list"></ul>
                </div>
              </li> -->
				</ul>
				<ul class="nav navbar-nav float-right">
					<li class="dropdown dropdown-user nav-item">
						<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
							<span class="mr-1 user-name text-bold-700">
								<?php echo $user_data->emp_name; ?>
								<?php if ($userdata['user_role'] == 3) { ?>
									- <?php echo $userdata['department']; ?>
								<?php } ?>
							</span>
							<span class="avatar avatar-online">
								<img src="<?php echo base_url(); ?>backend/app-assets/images/portrait/small/profile.png" alt="avatar">
								<i></i>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url() . 'admin/profile'; ?>"><i class="ft-user"></i> Profile</a>
							<div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url() . 'login/logout'; ?>"><i class="ft-power"></i> Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

			<li><a href="<?php echo base_url() . 'dashboard'; ?>"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
			</li>

			<?php if ($userdata['user_role'] != 6 && $userdata['user_role'] != 7) { ?>
				<li class="nav-item"><a href="#"><i class="la la-connectdevelop"></i><span class="menu-title">Masters </span></a>
					<ul class="menu-content">
						<?php if ($userdata['user_role'] == 1) { ?>
							<!-- <li><a href="<?php //echo base_url() . 'UserRole'; 
																?>"><i class="la-la-image"></i><span data-i18n="Add Roles"> Roles</span></a></li> -->
							<!-- <li><a href="<?php //echo base_url() . 'admin/department'; 
																?>"><i class="la-la-image"></i><span data-i18n="Add Departments"> Department</span></a></li> -->
							<li><a href="<?php echo base_url() . 'AddEmp'; ?>"><i class="la-la-image"></i><span data-i18n="Add Employee"> Employee</span></a></li>
						<?php } ?>
					</ul>
				</li>
			<?php } ?>
			<?php if ($userdata['user_role'] == 1) { ?>
				<li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title">Forms</span></a>
					<ul class="menu-content">
						<li><a href="<?php echo base_url() . 'admin/adminpage/contact_details'; ?>"><i class="la la-phone"></i><span class="menu-title"> Contact</span></a></li>
						<li><a href="<?php echo base_url() . 'admin/adminpage/enquiry_details'; ?>"><i class="la la-bolt"></i><span class="menu-title"> Enquiry</span></a></li>
						<li><a href="<?php echo base_url() . 'admin/adminpage/career_details'; ?>"><i class="la la-cube"></i><span class="menu-title"> Career</span></a></li>
					</ul>
				</li>
			<?php } ?>

			<?php 
				if($userdata['user_role'] == 1) { ?>
				<li><a href="<?php echo base_url() . 'admin/adminpage/add_products';?>"><i class="fas fa-flask"></i><span class="menu-title"> Add Products</span></a></li>
			<?php } ?>
		
			<?php if ($userdata['user_role'] == 1) { ?>
				<li><a href="<?php echo base_url() . 'CreateUsers'; ?>"><i class="la la-user"></i><span class="menu-title">Users</span></a>
				</li>
			<?php } ?>
			
	</div>
</div>

<style>
	li.nav-item a span {
		text-transform: capitalize;
	}

	.navbar-header .non-expand-img {
		display: block;
	}

	.navbar-header.expanded .non-expand-img {
		display: none;
	}

	.navbar-header .expand-img {
		display: none;
	}

	.navbar-header.expanded .expand-img {
		display: block !important;
	}

	.header-navbar .navbar-header .navbar-brand .brand-logo.non-expand-img {
		width: 28px;
	}
</style>
