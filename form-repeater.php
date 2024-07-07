<?php include ('functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	
	<title>EventsCrafted - Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">EventsCrafted</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.php"><i class='bx bx-radio-circle'></i>eCommerce</a>
						</li>
						<li> <a href="index2.php"><i class='bx bx-radio-circle'></i>Analytics</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.php"><i class='bx bx-radio-circle'></i>Email</a>
						</li>
						<li> <a href="app-chat-box.php"><i class='bx bx-radio-circle'></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.php"><i class='bx bx-radio-circle'></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.php"><i class='bx bx-radio-circle'></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.php"><i class='bx bx-radio-circle'></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.php"><i class='bx bx-radio-circle'></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.php"><i class='bx bx-radio-circle'></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.php">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.php"><i class='bx bx-radio-circle'></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.php"><i class='bx bx-radio-circle'></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.php"><i class='bx bx-radio-circle'></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.php"><i class='bx bx-radio-circle'></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.php"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.php"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						<li> <a href="component-badges.php"><i class='bx bx-radio-circle'></i>Badges</a>
						</li>
						<li> <a href="component-buttons.php"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.php"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.php"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.php"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.php"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.php"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.php"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.php"><i class='bx bx-radio-circle'></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.php"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.php"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.php"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.php"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.php"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.php"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.php"><i class='bx bx-radio-circle'></i>Grid System</a>
						</li>
						<li> <a href="content-typography.php"><i class='bx bx-radio-circle'></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.php"><i class='bx bx-radio-circle'></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.php"><i class='bx bx-radio-circle'></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.php"><i class='bx bx-radio-circle'></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.php"><i class='bx bx-radio-circle'></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="form-froala-editor.php">
						<div class="parent-icon"><i class='bx bx-code-alt'></i>
						</div>
						<div class="menu-title">Froala Editor</div>
					</a>
				</li>
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.php"><i class='bx bx-radio-circle'></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.php"><i class='bx bx-radio-circle'></i>Input Groups</a>
						</li>
						
						<li> <a href="form-layouts.php"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.php"><i class='bx bx-radio-circle'></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.php"><i class='bx bx-radio-circle'></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.php"><i class='bx bx-radio-circle'></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.php"><i class='bx bx-radio-circle'></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.php"><i class='bx bx-radio-circle'></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.php"><i class='bx bx-radio-circle'></i>Select2</a>
						</li>
						<li> <a href="form-repeater.php"><i class='bx bx-radio-circle'></i>Form Repeater</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.php"><i class='bx bx-radio-circle'></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.php"><i class='bx bx-radio-circle'></i>Data Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
							<ul>
								<li><a href="auth-basic-signin.php" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-basic-signup.php" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.php" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.php" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
							<ul>
								<li><a href="auth-cover-signin.php" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-cover-signup.php" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.php" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.php" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
							<ul>
								<li><a href="auth-header-footer-signin.php" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.php" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.php" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.php" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.php">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.php">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.php" target="_blank"><i class='bx bx-radio-circle'></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.php" target="_blank"><i class='bx bx-radio-circle'></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.php" target="_blank"><i class='bx bx-radio-circle'></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.php" target="_blank"><i class='bx bx-radio-circle'></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.php">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.php">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.php"><i class='bx bx-radio-circle'></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.php"><i class='bx bx-radio-circle'></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.php"><i class='bx bx-radio-circle'></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.php"><i class='bx bx-radio-circle'></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.php"><i class='bx bx-radio-circle'></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
<?php include ('templates/header.php') ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Repeater</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light split-bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
								<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	
								<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<!-- Repeater Html Start -->
                <div id="repeater">
                    <!-- Repeater Heading -->

                      <div class="card">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Repeater</h5>
								<button class="btn btn-light repeater-add-btn px-4">Add</button>
							</div>
						</div>
					  </div>
					
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
						<div class="card">
							<div class="card-body">
								<!-- Repeater Content -->
								<div class="item-content">
									<div class="mb-3">
										<label for="inputName1" class="form-label">Name</label>
										<input type="text" class="form-control" id="inputName1" placeholder="Name" data-name="name">
									</div>
									<div class="mb-3">
										<label for="inputEmail1" class="form-label">Email</label>
										<input type="text" class="form-control" id="inputEmail1" placeholder="Email" data-skip-name="true" data-name="email">
									</div>
								</div>
								<!-- Repeater Remove Btn -->
								<div class="repeater-remove-btn">
									<button class="btn btn-light remove-btn px-4">
										Remove
									</button>
								</div>
							</div>
						</div>
                    </div>


                    <div class="items" data-group="test">

						<div class="card">
							<div class="card-body">
							<!-- Repeater Content -->
							<div class="item-content">
								<div class="mb-3">
									<label for="inputName2" class="form-label">Name</label>
									<input type="text" class="form-control" id="inputName2" placeholder="Name" data-name="name">
								</div>
								<div class="mb-3">
									<label for="inputEmail2" class="form-label">Email</label>
									<input type="text" class="form-control" id="inputEmail2" placeholder="Email" data-skip-name="true" data-name="email">
								</div>
							</div>
							<!-- Repeater Remove Btn -->
							<div class="repeater-remove-btn">
								<button class="btn btn-light remove-btn px-4">
									Remove
								</button>
							</div>
							</div>
						</div>

                    </div>


                    <div class="items" data-group="test">
						<div class="card">
							<div class="card-body">
							<!-- Repeater Content -->
							<div class="item-content">
								<div class="mb-3">
									<label for="inputName3" class="form-label">Name</label>
									<input type="text" class="form-control" id="inputName3" placeholder="Name" data-name="name">
								</div>
								<div class="mb-3">
									<label for="inputEmail3" class="form-label">Email</label>
									<input type="text" class="form-control" id="inputEmail3" placeholder="Email" data-skip-name="true" data-name="email">
								</div>
							</div>
							<!-- Repeater Remove Btn -->
							<div class="repeater-remove-btn">
								<button class="btn btn-light remove-btn px-4">
									Remove
								</button>
							</div>
							</div>
						</div>
                    </div>

                </div>
                <!-- Repeater End -->

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

	</div>
	<!--end wrapper-->
	<!--start switcher-->
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/form-repeater/repeater.js"></script>
	<script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>