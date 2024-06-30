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
						<li> <a href="index.html"><i class='bx bx-radio-circle'></i>eCommerce</a>
						</li>
						<li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Analytics</a>
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
						<li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
						</li>
						<li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
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
						<li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
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
						<li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						<li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
						</li>
						<li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
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
						<li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text Utilities</a>
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
						<li> <a href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
						</li>
						
						<li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
						</li>
						<li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
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
						<li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
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
								<li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-basic-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
							<ul>
								<li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-cover-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
							<ul>
								<li><a href="auth-header-footer-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
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
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
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
						<li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
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
						<li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
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
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/slack.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/behance.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="assets/images/app/google-drive.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/outlook.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/github.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/stack-overflow.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/figma.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/twitter.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-calendar.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/spotify.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-photos.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/pinterest.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/linkedin.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/dribble.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/youtube.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/envato.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/safari.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="assets/images/app/outlook.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="assets/images/app/github.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-light w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/11.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/02.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/03.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/04.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/05.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/06.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/07.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/08.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/09.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-light w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Icons</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Line Icons</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 g-3">
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-500px"></i>
							</div>
							<div class="ms-2">	<span>500px</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-adobe"></i>
							</div>
							<div class="ms-2">	<span>adobe</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-agenda"></i>
							</div>
							<div class="ms-2">	<span>agenda</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-airbnb"></i>
							</div>
							<div class="ms-2">	<span>airbnb</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-alarm"></i>
							</div>
							<div class="ms-2">	<span>alarm</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-alarm-clock"></i>
							</div>
							<div class="ms-2">	<span>alarm-clock</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-amazon"></i>
							</div>
							<div class="ms-2">	<span>amazon</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-amazon-original"></i>
							</div>
							<div class="ms-2">	<span>amazon-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-amazon-pay"></i>
							</div>
							<div class="ms-2">	<span>amazon-pay</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ambulance"></i>
							</div>
							<div class="ms-2">	<span>ambulance</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-amex"></i>
							</div>
							<div class="ms-2">	<span>amex</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-anchor"></i>
							</div>
							<div class="ms-2">	<span>anchor</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-android"></i>
							</div>
							<div class="ms-2">	<span>android</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-android-original"></i>
							</div>
							<div class="ms-2">	<span>android-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-angellist"></i>
							</div>
							<div class="ms-2">	<span>angellist</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-angle-double-down"></i>
							</div>
							<div class="ms-2">	<span>angle-double-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-angle-double-left"></i>
							</div>
							<div class="ms-2">	<span>angle-double-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-angle-double-right"></i>
							</div>
							<div class="ms-2">	<span>angle-double-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-angle-double-up"></i>
							</div>
							<div class="ms-2">	<span>angle-double-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-angular"></i>
							</div>
							<div class="ms-2">	<span>angular</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-apartment"></i>
							</div>
							<div class="ms-2">	<span>apartment</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-app-store"></i>
							</div>
							<div class="ms-2">	<span>app-store</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-apple"></i>
							</div>
							<div class="ms-2">	<span>apple</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-apple-pay"></i>
							</div>
							<div class="ms-2">	<span>apple-pay</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-archive"></i>
							</div>
							<div class="ms-2">	<span>archive</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-down"></i>
							</div>
							<div class="ms-2">	<span>arrow-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-down-circle"></i>
							</div>
							<div class="ms-2">	<span>arrow-down-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-left"></i>
							</div>
							<div class="ms-2">	<span>arrow-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-left-circle"></i>
							</div>
							<div class="ms-2">	<span>arrow-left-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-right"></i>
							</div>
							<div class="ms-2">	<span>arrow-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-right-circle"></i>
							</div>
							<div class="ms-2">	<span>arrow-right-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-top-left"></i>
							</div>
							<div class="ms-2">	<span>arrow-top-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-top-right"></i>
							</div>
							<div class="ms-2">	<span>arrow-top-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-up"></i>
							</div>
							<div class="ms-2">	<span>arrow-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrow-up-circle"></i>
							</div>
							<div class="ms-2">	<span>arrow-up-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrows-horizontal"></i>
							</div>
							<div class="ms-2">	<span>arrows-horizontal</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-arrows-vertical"></i>
							</div>
							<div class="ms-2">	<span>arrows-vertical</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-atlassian"></i>
							</div>
							<div class="ms-2">	<span>atlassian</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-aws"></i>
							</div>
							<div class="ms-2">	<span>aws</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-backward"></i>
							</div>
							<div class="ms-2">	<span>backward</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-baloon"></i>
							</div>
							<div class="ms-2">	<span>baloon</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ban"></i>
							</div>
							<div class="ms-2">	<span>ban</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bar-chart"></i>
							</div>
							<div class="ms-2">	<span>bar-chart</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-basketball"></i>
							</div>
							<div class="ms-2">	<span>basketball</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-behance"></i>
							</div>
							<div class="ms-2">	<span>behance</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-behance-original"></i>
							</div>
							<div class="ms-2">	<span>behance-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bi-cycle"></i>
							</div>
							<div class="ms-2">	<span>bi-cycle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bitbucket"></i>
							</div>
							<div class="ms-2">	<span>bitbucket</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bitcoin"></i>
							</div>
							<div class="ms-2">	<span>bitcoin</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-blackboard"></i>
							</div>
							<div class="ms-2">	<span>blackboard</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-blogger"></i>
							</div>
							<div class="ms-2">	<span>blogger</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bluetooth"></i>
							</div>
							<div class="ms-2">	<span>bluetooth</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bold"></i>
							</div>
							<div class="ms-2">	<span>bold</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bolt"></i>
							</div>
							<div class="ms-2">	<span>bolt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bolt-alt"></i>
							</div>
							<div class="ms-2">	<span>bolt-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-book"></i>
							</div>
							<div class="ms-2">	<span>book</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bookmark"></i>
							</div>
							<div class="ms-2">	<span>bookmark</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bookmark-alt"></i>
							</div>
							<div class="ms-2">	<span>bookmark-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bootstrap"></i>
							</div>
							<div class="ms-2">	<span>bootstrap</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bricks"></i>
							</div>
							<div class="ms-2">	<span>bricks</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bridge"></i>
							</div>
							<div class="ms-2">	<span>bridge</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-briefcase"></i>
							</div>
							<div class="ms-2">	<span>briefcase</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-brush"></i>
							</div>
							<div class="ms-2">	<span>brush</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-brush-alt"></i>
							</div>
							<div class="ms-2">	<span>brush-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bubble"></i>
							</div>
							<div class="ms-2">	<span>bubble</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bug"></i>
							</div>
							<div class="ms-2">	<span>bug</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bulb"></i>
							</div>
							<div class="ms-2">	<span>bulb</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bullhorn"></i>
							</div>
							<div class="ms-2">	<span>bullhorn</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-burger"></i>
							</div>
							<div class="ms-2">	<span>burger</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-bus"></i>
							</div>
							<div class="ms-2">	<span>bus</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cake"></i>
							</div>
							<div class="ms-2">	<span>cake</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-calculator"></i>
							</div>
							<div class="ms-2">	<span>calculator</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-calendar"></i>
							</div>
							<div class="ms-2">	<span>calendar</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-camera"></i>
							</div>
							<div class="ms-2">	<span>camera</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-candy"></i>
							</div>
							<div class="ms-2">	<span>candy</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-candy-cane"></i>
							</div>
							<div class="ms-2">	<span>candy-cane</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-capsule"></i>
							</div>
							<div class="ms-2">	<span>capsule</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-car"></i>
							</div>
							<div class="ms-2">	<span>car</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-car-alt"></i>
							</div>
							<div class="ms-2">	<span>car-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-caravan"></i>
							</div>
							<div class="ms-2">	<span>caravan</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cart"></i>
							</div>
							<div class="ms-2">	<span>cart</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cart-full"></i>
							</div>
							<div class="ms-2">	<span>cart-full</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-certificate"></i>
							</div>
							<div class="ms-2">	<span>certificate</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-checkbox"></i>
							</div>
							<div class="ms-2">	<span>checkbox</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-checkmark"></i>
							</div>
							<div class="ms-2">	<span>checkmark</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-checkmark-circle"></i>
							</div>
							<div class="ms-2">	<span>checkmark-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chef-hat"></i>
							</div>
							<div class="ms-2">	<span>chef-hat</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-down"></i>
							</div>
							<div class="ms-2">	<span>chevron-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-down-circle"></i>
							</div>
							<div class="ms-2">	<span>chevron-down-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-left"></i>
							</div>
							<div class="ms-2">	<span>chevron-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-left-circle"></i>
							</div>
							<div class="ms-2">	<span>chevron-left-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-right"></i>
							</div>
							<div class="ms-2">	<span>chevron-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-right-circle"></i>
							</div>
							<div class="ms-2">	<span>chevron-right-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-up"></i>
							</div>
							<div class="ms-2">	<span>chevron-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chevron-up-circle"></i>
							</div>
							<div class="ms-2">	<span>chevron-up-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-chrome"></i>
							</div>
							<div class="ms-2">	<span>chrome</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-circle-minus"></i>
							</div>
							<div class="ms-2">	<span>circle-minus</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-circle-plus"></i>
							</div>
							<div class="ms-2">	<span>circle-plus</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-clipboard"></i>
							</div>
							<div class="ms-2">	<span>clipboard</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-close"></i>
							</div>
							<div class="ms-2">	<span>close</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloud"></i>
							</div>
							<div class="ms-2">	<span>cloud</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloud-check"></i>
							</div>
							<div class="ms-2">	<span>cloud-check</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloud-download"></i>
							</div>
							<div class="ms-2">	<span>cloud-download</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloud-network"></i>
							</div>
							<div class="ms-2">	<span>cloud-network</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloud-sync"></i>
							</div>
							<div class="ms-2">	<span>cloud-sync</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloud-upload"></i>
							</div>
							<div class="ms-2">	<span>cloud-upload</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cloudy-sun"></i>
							</div>
							<div class="ms-2">	<span>cloudy-sun</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-code"></i>
							</div>
							<div class="ms-2">	<span>code</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-code-alt"></i>
							</div>
							<div class="ms-2">	<span>code-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-codepen"></i>
							</div>
							<div class="ms-2">	<span>codepen</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-coffee-cup"></i>
							</div>
							<div class="ms-2">	<span>coffee-cup</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cog"></i>
							</div>
							<div class="ms-2">	<span>cog</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cogs"></i>
							</div>
							<div class="ms-2">	<span>cogs</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-coin"></i>
							</div>
							<div class="ms-2">	<span>coin</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-comments"></i>
							</div>
							<div class="ms-2">	<span>comments</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-comments-alt"></i>
							</div>
							<div class="ms-2">	<span>comments-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-comments-reply"></i>
							</div>
							<div class="ms-2">	<span>comments-reply</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-compass"></i>
							</div>
							<div class="ms-2">	<span>compass</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-construction"></i>
							</div>
							<div class="ms-2">	<span>construction</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-construction-hammer"></i>
							</div>
							<div class="ms-2">	<span>construction-hammer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-consulting"></i>
							</div>
							<div class="ms-2">	<span>consulting</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-control-panel"></i>
							</div>
							<div class="ms-2">	<span>control-panel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cpanel"></i>
							</div>
							<div class="ms-2">	<span>cpanel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-creative-commons"></i>
							</div>
							<div class="ms-2">	<span>creative-commons</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-credit-cards"></i>
							</div>
							<div class="ms-2">	<span>credit-cards</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-crop"></i>
							</div>
							<div class="ms-2">	<span>crop</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cross-circle"></i>
							</div>
							<div class="ms-2">	<span>cross-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-crown"></i>
							</div>
							<div class="ms-2">	<span>crown</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-css3"></i>
							</div>
							<div class="ms-2">	<span>css3</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cup"></i>
							</div>
							<div class="ms-2">	<span>cup</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-customer"></i>
							</div>
							<div class="ms-2">	<span>customer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-cut"></i>
							</div>
							<div class="ms-2">	<span>cut</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dashboard"></i>
							</div>
							<div class="ms-2">	<span>dashboard</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-database"></i>
							</div>
							<div class="ms-2">	<span>database</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-delivery"></i>
							</div>
							<div class="ms-2">	<span>delivery</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dev"></i>
							</div>
							<div class="ms-2">	<span>dev</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-diamond"></i>
							</div>
							<div class="ms-2">	<span>diamond</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-diamond-alt"></i>
							</div>
							<div class="ms-2">	<span>diamond-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-diners-club"></i>
							</div>
							<div class="ms-2">	<span>diners-club</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dinner"></i>
							</div>
							<div class="ms-2">	<span>dinner</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-direction"></i>
							</div>
							<div class="ms-2">	<span>direction</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-direction-alt"></i>
							</div>
							<div class="ms-2">	<span>direction-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-direction-ltr"></i>
							</div>
							<div class="ms-2">	<span>direction-ltr</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-direction-rtl"></i>
							</div>
							<div class="ms-2">	<span>direction-rtl</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-discord"></i>
							</div>
							<div class="ms-2">	<span>discord</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-discover"></i>
							</div>
							<div class="ms-2">	<span>discover</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-display"></i>
							</div>
							<div class="ms-2">	<span>display</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-display-alt"></i>
							</div>
							<div class="ms-2">	<span>display-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-docker"></i>
							</div>
							<div class="ms-2">	<span>docker</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dollar"></i>
							</div>
							<div class="ms-2">	<span>dollar</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-domain"></i>
							</div>
							<div class="ms-2">	<span>domain</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-download"></i>
							</div>
							<div class="ms-2">	<span>download</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dribbble"></i>
							</div>
							<div class="ms-2">	<span>dribbble</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-drop"></i>
							</div>
							<div class="ms-2">	<span>drop</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dropbox"></i>
							</div>
							<div class="ms-2">	<span>dropbox</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dropbox-original"></i>
							</div>
							<div class="ms-2">	<span>dropbox-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-drupal"></i>
							</div>
							<div class="ms-2">	<span>drupal</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-drupal-original"></i>
							</div>
							<div class="ms-2">	<span>drupal-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-dumbbell"></i>
							</div>
							<div class="ms-2">	<span>dumbbell</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-edge"></i>
							</div>
							<div class="ms-2">	<span>edge</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-cool"></i>
							</div>
							<div class="ms-2">	<span>emoji-cool</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-friendly"></i>
							</div>
							<div class="ms-2">	<span>emoji-friendly</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-happy"></i>
							</div>
							<div class="ms-2">	<span>emoji-happy</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-sad"></i>
							</div>
							<div class="ms-2">	<span>emoji-sad</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-smile"></i>
							</div>
							<div class="ms-2">	<span>emoji-smile</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-speechless"></i>
							</div>
							<div class="ms-2">	<span>emoji-speechless</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-suspect"></i>
							</div>
							<div class="ms-2">	<span>emoji-suspect</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-emoji-tounge"></i>
							</div>
							<div class="ms-2">	<span>emoji-tounge</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-empty-file"></i>
							</div>
							<div class="ms-2">	<span>empty-file</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-enter"></i>
							</div>
							<div class="ms-2">	<span>enter</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-envato"></i>
							</div>
							<div class="ms-2">	<span>envato</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-envelope"></i>
							</div>
							<div class="ms-2">	<span>envelope</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-eraser"></i>
							</div>
							<div class="ms-2">	<span>eraser</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-euro"></i>
							</div>
							<div class="ms-2">	<span>euro</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-exit"></i>
							</div>
							<div class="ms-2">	<span>exit</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-exit-down"></i>
							</div>
							<div class="ms-2">	<span>exit-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-exit-up"></i>
							</div>
							<div class="ms-2">	<span>exit-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-eye"></i>
							</div>
							<div class="ms-2">	<span>eye</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-facebook"></i>
							</div>
							<div class="ms-2">	<span>facebook</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-facebook-filled"></i>
							</div>
							<div class="ms-2">	<span>facebook-filled</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-facebook-messenger"></i>
							</div>
							<div class="ms-2">	<span>facebook-messenger</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-facebook-original"></i>
							</div>
							<div class="ms-2">	<span>facebook-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-facebook-oval"></i>
							</div>
							<div class="ms-2">	<span>facebook-oval</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-figma"></i>
							</div>
							<div class="ms-2">	<span>figma</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-files"></i>
							</div>
							<div class="ms-2">	<span>files</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-firefox"></i>
							</div>
							<div class="ms-2">	<span>firefox</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-firefox-original"></i>
							</div>
							<div class="ms-2">	<span>firefox-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-fireworks"></i>
							</div>
							<div class="ms-2">	<span>fireworks</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-first-aid"></i>
							</div>
							<div class="ms-2">	<span>first-aid</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-flag"></i>
							</div>
							<div class="ms-2">	<span>flag</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-flag-alt"></i>
							</div>
							<div class="ms-2">	<span>flag-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-flags"></i>
							</div>
							<div class="ms-2">	<span>flags</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-flickr"></i>
							</div>
							<div class="ms-2">	<span>flickr</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-flower"></i>
							</div>
							<div class="ms-2">	<span>flower</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-folder"></i>
							</div>
							<div class="ms-2">	<span>folder</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-forward"></i>
							</div>
							<div class="ms-2">	<span>forward</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-frame-expand"></i>
							</div>
							<div class="ms-2">	<span>frame-expand</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-fresh-juice"></i>
							</div>
							<div class="ms-2">	<span>fresh-juice</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-full-screen"></i>
							</div>
							<div class="ms-2">	<span>full-screen</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-funnel"></i>
							</div>
							<div class="ms-2">	<span>funnel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-gallery"></i>
							</div>
							<div class="ms-2">	<span>gallery</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-game"></i>
							</div>
							<div class="ms-2">	<span>game</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-gift"></i>
							</div>
							<div class="ms-2">	<span>gift</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-git"></i>
							</div>
							<div class="ms-2">	<span>git</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-github"></i>
							</div>
							<div class="ms-2">	<span>github</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-github-original"></i>
							</div>
							<div class="ms-2">	<span>github-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-goodreads"></i>
							</div>
							<div class="ms-2">	<span>goodreads</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-google"></i>
							</div>
							<div class="ms-2">	<span>google</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-google-drive"></i>
							</div>
							<div class="ms-2">	<span>google-drive</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-google-pay"></i>
							</div>
							<div class="ms-2">	<span>google-pay</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-google-wallet"></i>
							</div>
							<div class="ms-2">	<span>google-wallet</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-graduation"></i>
							</div>
							<div class="ms-2">	<span>graduation</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-graph"></i>
							</div>
							<div class="ms-2">	<span>graph</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-grid"></i>
							</div>
							<div class="ms-2">	<span>grid</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-grid-alt"></i>
							</div>
							<div class="ms-2">	<span>grid-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-grow"></i>
							</div>
							<div class="ms-2">	<span>grow</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-hacker-news"></i>
							</div>
							<div class="ms-2">	<span>hacker-news</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-hammer"></i>
							</div>
							<div class="ms-2">	<span>hammer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-hand"></i>
							</div>
							<div class="ms-2">	<span>hand</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-handshake"></i>
							</div>
							<div class="ms-2">	<span>handshake</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-harddrive"></i>
							</div>
							<div class="ms-2">	<span>harddrive</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-headphone"></i>
							</div>
							<div class="ms-2">	<span>headphone</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-headphone-alt"></i>
							</div>
							<div class="ms-2">	<span>headphone-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-heart"></i>
							</div>
							<div class="ms-2">	<span>heart</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-heart-filled"></i>
							</div>
							<div class="ms-2">	<span>heart-filled</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-heart-monitor"></i>
							</div>
							<div class="ms-2">	<span>heart-monitor</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-helicopter"></i>
							</div>
							<div class="ms-2">	<span>helicopter</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-helmet"></i>
							</div>
							<div class="ms-2">	<span>helmet</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-help"></i>
							</div>
							<div class="ms-2">	<span>help</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-highlight"></i>
							</div>
							<div class="ms-2">	<span>highlight</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-highlight-alt"></i>
							</div>
							<div class="ms-2">	<span>highlight-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-home"></i>
							</div>
							<div class="ms-2">	<span>home</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-hospital"></i>
							</div>
							<div class="ms-2">	<span>hospital</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-hourglass"></i>
							</div>
							<div class="ms-2">	<span>hourglass</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-html5"></i>
							</div>
							<div class="ms-2">	<span>html5</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-image"></i>
							</div>
							<div class="ms-2">	<span>image</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-inbox"></i>
							</div>
							<div class="ms-2">	<span>inbox</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-indent-decrease"></i>
							</div>
							<div class="ms-2">	<span>indent-decrease</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-indent-increase"></i>
							</div>
							<div class="ms-2">	<span>indent-increase</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-infinite"></i>
							</div>
							<div class="ms-2">	<span>infinite</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-information"></i>
							</div>
							<div class="ms-2">	<span>information</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-instagram"></i>
							</div>
							<div class="ms-2">	<span>instagram</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-instagram-filled"></i>
							</div>
							<div class="ms-2">	<span>instagram-filled</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-instagram-original"></i>
							</div>
							<div class="ms-2">	<span>instagram-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-invention"></i>
							</div>
							<div class="ms-2">	<span>invention</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-invest-monitor"></i>
							</div>
							<div class="ms-2">	<span>invest-monitor</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-investment"></i>
							</div>
							<div class="ms-2">	<span>investment</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-island"></i>
							</div>
							<div class="ms-2">	<span>island</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-italic"></i>
							</div>
							<div class="ms-2">	<span>italic</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-java"></i>
							</div>
							<div class="ms-2">	<span>java</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-javascript"></i>
							</div>
							<div class="ms-2">	<span>javascript</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-jcb"></i>
							</div>
							<div class="ms-2">	<span>jcb</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-joomla"></i>
							</div>
							<div class="ms-2">	<span>joomla</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-joomla-original"></i>
							</div>
							<div class="ms-2">	<span>joomla-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-jsfiddle"></i>
							</div>
							<div class="ms-2">	<span>jsfiddle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-juice"></i>
							</div>
							<div class="ms-2">	<span>juice</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-key"></i>
							</div>
							<div class="ms-2">	<span>key</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-keyboard"></i>
							</div>
							<div class="ms-2">	<span>keyboard</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-keyword-research"></i>
							</div>
							<div class="ms-2">	<span>keyword-research</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-laptop"></i>
							</div>
							<div class="ms-2">	<span>laptop</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-laptop-phone"></i>
							</div>
							<div class="ms-2">	<span>laptop-phone</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-laravel"></i>
							</div>
							<div class="ms-2">	<span>laravel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-layers"></i>
							</div>
							<div class="ms-2">	<span>layers</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-layout"></i>
							</div>
							<div class="ms-2">	<span>layout</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-leaf"></i>
							</div>
							<div class="ms-2">	<span>leaf</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-library"></i>
							</div>
							<div class="ms-2">	<span>library</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-life-ring"></i>
							</div>
							<div class="ms-2">	<span>life-ring</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-line"></i>
							</div>
							<div class="ms-2">	<span>line</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-line-dashed"></i>
							</div>
							<div class="ms-2">	<span>line-dashed</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-line-dotted"></i>
							</div>
							<div class="ms-2">	<span>line-dotted</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-line-double"></i>
							</div>
							<div class="ms-2">	<span>line-double</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-line-spacing"></i>
							</div>
							<div class="ms-2">	<span>line-spacing</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-lineicons"></i>
							</div>
							<div class="ms-2">	<span>lineicons</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-lineicons-alt"></i>
							</div>
							<div class="ms-2">	<span>lineicons-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-link"></i>
							</div>
							<div class="ms-2">	<span>link</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-linkedin"></i>
							</div>
							<div class="ms-2">	<span>linkedin</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-linkedin-original"></i>
							</div>
							<div class="ms-2">	<span>linkedin-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-list"></i>
							</div>
							<div class="ms-2">	<span>list</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-lock"></i>
							</div>
							<div class="ms-2">	<span>lock</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-lock-alt"></i>
							</div>
							<div class="ms-2">	<span>lock-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-magnet"></i>
							</div>
							<div class="ms-2">	<span>magnet</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-magnifier"></i>
							</div>
							<div class="ms-2">	<span>magnifier</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-mailchimp"></i>
							</div>
							<div class="ms-2">	<span>mailchimp</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-map"></i>
							</div>
							<div class="ms-2">	<span>map</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-map-marker"></i>
							</div>
							<div class="ms-2">	<span>map-marker</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-mashroom"></i>
							</div>
							<div class="ms-2">	<span>mashroom</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-mastercard"></i>
							</div>
							<div class="ms-2">	<span>mastercard</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-medium"></i>
							</div>
							<div class="ms-2">	<span>medium</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-megento"></i>
							</div>
							<div class="ms-2">	<span>megento</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-menu"></i>
							</div>
							<div class="ms-2">	<span>menu</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-mic"></i>
							</div>
							<div class="ms-2">	<span>mic</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-microphone"></i>
							</div>
							<div class="ms-2">	<span>microphone</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-microscope"></i>
							</div>
							<div class="ms-2">	<span>microscope</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-microsoft"></i>
							</div>
							<div class="ms-2">	<span>microsoft</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-minus"></i>
							</div>
							<div class="ms-2">	<span>minus</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-mobile"></i>
							</div>
							<div class="ms-2">	<span>mobile</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-money-location"></i>
							</div>
							<div class="ms-2">	<span>money-location</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-money-protection"></i>
							</div>
							<div class="ms-2">	<span>money-protection</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-more"></i>
							</div>
							<div class="ms-2">	<span>more</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-more-alt"></i>
							</div>
							<div class="ms-2">	<span>more-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-mouse"></i>
							</div>
							<div class="ms-2">	<span>mouse</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-move"></i>
							</div>
							<div class="ms-2">	<span>move</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-music"></i>
							</div>
							<div class="ms-2">	<span>music</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-network"></i>
							</div>
							<div class="ms-2">	<span>network</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-night"></i>
							</div>
							<div class="ms-2">	<span>night</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-nodejs"></i>
							</div>
							<div class="ms-2">	<span>nodejs</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-nodejs-alt"></i>
							</div>
							<div class="ms-2">	<span>nodejs-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-notepad"></i>
							</div>
							<div class="ms-2">	<span>notepad</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-npm"></i>
							</div>
							<div class="ms-2">	<span>npm</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-offer"></i>
							</div>
							<div class="ms-2">	<span>offer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-opera"></i>
							</div>
							<div class="ms-2">	<span>opera</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-package"></i>
							</div>
							<div class="ms-2">	<span>package</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-page-break"></i>
							</div>
							<div class="ms-2">	<span>page-break</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pagination"></i>
							</div>
							<div class="ms-2">	<span>pagination</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-paint-bucket"></i>
							</div>
							<div class="ms-2">	<span>paint-bucket</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-paint-roller"></i>
							</div>
							<div class="ms-2">	<span>paint-roller</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pallet"></i>
							</div>
							<div class="ms-2">	<span>pallet</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-paperclip"></i>
							</div>
							<div class="ms-2">	<span>paperclip</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-patreon"></i>
							</div>
							<div class="ms-2">	<span>patreon</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pause"></i>
							</div>
							<div class="ms-2">	<span>pause</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-paypal"></i>
							</div>
							<div class="ms-2">	<span>paypal</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-paypal-original"></i>
							</div>
							<div class="ms-2">	<span>paypal-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pencil"></i>
							</div>
							<div class="ms-2">	<span>pencil</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pencil-alt"></i>
							</div>
							<div class="ms-2">	<span>pencil-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-phone"></i>
							</div>
							<div class="ms-2">	<span>phone</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-phone-set"></i>
							</div>
							<div class="ms-2">	<span>phone-set</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-php"></i>
							</div>
							<div class="ms-2">	<span>php</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pie-chart"></i>
							</div>
							<div class="ms-2">	<span>pie-chart</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pilcrow"></i>
							</div>
							<div class="ms-2">	<span>pilcrow</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pin"></i>
							</div>
							<div class="ms-2">	<span>pin</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pinterest"></i>
							</div>
							<div class="ms-2">	<span>pinterest</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pizza"></i>
							</div>
							<div class="ms-2">	<span>pizza</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-plane"></i>
							</div>
							<div class="ms-2">	<span>plane</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-play"></i>
							</div>
							<div class="ms-2">	<span>play</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-play-store"></i>
							</div>
							<div class="ms-2">	<span>play-store</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-plug"></i>
							</div>
							<div class="ms-2">	<span>plug</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-plus"></i>
							</div>
							<div class="ms-2">	<span>plus</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pointer"></i>
							</div>
							<div class="ms-2">	<span>pointer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pointer-down"></i>
							</div>
							<div class="ms-2">	<span>pointer-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pointer-left"></i>
							</div>
							<div class="ms-2">	<span>pointer-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pointer-right"></i>
							</div>
							<div class="ms-2">	<span>pointer-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pointer-up"></i>
							</div>
							<div class="ms-2">	<span>pointer-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-popup"></i>
							</div>
							<div class="ms-2">	<span>popup</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-postcard"></i>
							</div>
							<div class="ms-2">	<span>postcard</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pound"></i>
							</div>
							<div class="ms-2">	<span>pound</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-power-switch"></i>
							</div>
							<div class="ms-2">	<span>power-switch</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-printer"></i>
							</div>
							<div class="ms-2">	<span>printer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-producthunt"></i>
							</div>
							<div class="ms-2">	<span>producthunt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-protection"></i>
							</div>
							<div class="ms-2">	<span>protection</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pulse"></i>
							</div>
							<div class="ms-2">	<span>pulse</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-pyramids"></i>
							</div>
							<div class="ms-2">	<span>pyramids</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-python"></i>
							</div>
							<div class="ms-2">	<span>python</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-question-circle"></i>
							</div>
							<div class="ms-2">	<span>question-circle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-quora"></i>
							</div>
							<div class="ms-2">	<span>quora</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-quotation"></i>
							</div>
							<div class="ms-2">	<span>quotation</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-radio-button"></i>
							</div>
							<div class="ms-2">	<span>radio-button</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-rain"></i>
							</div>
							<div class="ms-2">	<span>rain</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-react"></i>
							</div>
							<div class="ms-2">	<span>react</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-reddit"></i>
							</div>
							<div class="ms-2">	<span>reddit</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-reload"></i>
							</div>
							<div class="ms-2">	<span>reload</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-remove-file"></i>
							</div>
							<div class="ms-2">	<span>remove-file</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-reply"></i>
							</div>
							<div class="ms-2">	<span>reply</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-restaurant"></i>
							</div>
							<div class="ms-2">	<span>restaurant</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-revenue"></i>
							</div>
							<div class="ms-2">	<span>revenue</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-road"></i>
							</div>
							<div class="ms-2">	<span>road</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-rocket"></i>
							</div>
							<div class="ms-2">	<span>rocket</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-rss-feed"></i>
							</div>
							<div class="ms-2">	<span>rss-feed</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ruler"></i>
							</div>
							<div class="ms-2">	<span>ruler</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ruler-alt"></i>
							</div>
							<div class="ms-2">	<span>ruler-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ruler-pencil"></i>
							</div>
							<div class="ms-2">	<span>ruler-pencil</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-rupee"></i>
							</div>
							<div class="ms-2">	<span>rupee</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-save"></i>
							</div>
							<div class="ms-2">	<span>save</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-school-bench"></i>
							</div>
							<div class="ms-2">	<span>school-bench</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-school-bench-alt"></i>
							</div>
							<div class="ms-2">	<span>school-bench-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-scooter"></i>
							</div>
							<div class="ms-2">	<span>scooter</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-scroll-down"></i>
							</div>
							<div class="ms-2">	<span>scroll-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-search"></i>
							</div>
							<div class="ms-2">	<span>search</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-search-alt"></i>
							</div>
							<div class="ms-2">	<span>search-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-select"></i>
							</div>
							<div class="ms-2">	<span>select</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-seo"></i>
							</div>
							<div class="ms-2">	<span>seo</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-service"></i>
							</div>
							<div class="ms-2">	<span>service</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-share"></i>
							</div>
							<div class="ms-2">	<span>share</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-share-alt"></i>
							</div>
							<div class="ms-2">	<span>share-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shield"></i>
							</div>
							<div class="ms-2">	<span>shield</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shift-left"></i>
							</div>
							<div class="ms-2">	<span>shift-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shift-right"></i>
							</div>
							<div class="ms-2">	<span>shift-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ship"></i>
							</div>
							<div class="ms-2">	<span>ship</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shopify"></i>
							</div>
							<div class="ms-2">	<span>shopify</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shopping-basket"></i>
							</div>
							<div class="ms-2">	<span>shopping-basket</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shortcode"></i>
							</div>
							<div class="ms-2">	<span>shortcode</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shovel"></i>
							</div>
							<div class="ms-2">	<span>shovel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-shuffle"></i>
							</div>
							<div class="ms-2">	<span>shuffle</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-signal"></i>
							</div>
							<div class="ms-2">	<span>signal</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sketch"></i>
							</div>
							<div class="ms-2">	<span>sketch</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-skipping-rope"></i>
							</div>
							<div class="ms-2">	<span>skipping-rope</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-skype"></i>
							</div>
							<div class="ms-2">	<span>skype</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-slack"></i>
							</div>
							<div class="ms-2">	<span>slack</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-slice"></i>
							</div>
							<div class="ms-2">	<span>slice</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-slideshare"></i>
							</div>
							<div class="ms-2">	<span>slideshare</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-slim"></i>
							</div>
							<div class="ms-2">	<span>slim</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-snapchat"></i>
							</div>
							<div class="ms-2">	<span>snapchat</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sort-alpha-asc"></i>
							</div>
							<div class="ms-2">	<span>sort-alpha-asc</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sort-amount-asc"></i>
							</div>
							<div class="ms-2">	<span>sort-amount-asc</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sort-amount-dsc"></i>
							</div>
							<div class="ms-2">	<span>sort-amount-dsc</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-souncloud-original"></i>
							</div>
							<div class="ms-2">	<span>souncloud-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-soundcloud"></i>
							</div>
							<div class="ms-2">	<span>soundcloud</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spellcheck"></i>
							</div>
							<div class="ms-2">	<span>spellcheck</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spiner-solid"></i>
							</div>
							<div class="ms-2">	<span>spiner-solid</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spinner"></i>
							</div>
							<div class="ms-2">	<span>spinner</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spinner-arrow"></i>
							</div>
							<div class="ms-2">	<span>spinner-arrow</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spotify"></i>
							</div>
							<div class="ms-2">	<span>spotify</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spotify-original"></i>
							</div>
							<div class="ms-2">	<span>spotify-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-spray"></i>
							</div>
							<div class="ms-2">	<span>spray</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sprout"></i>
							</div>
							<div class="ms-2">	<span>sprout</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stackoverflow"></i>
							</div>
							<div class="ms-2">	<span>stackoverflow</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stamp"></i>
							</div>
							<div class="ms-2">	<span>stamp</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-star"></i>
							</div>
							<div class="ms-2">	<span>star</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-star-empty"></i>
							</div>
							<div class="ms-2">	<span>star-empty</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-star-filled"></i>
							</div>
							<div class="ms-2">	<span>star-filled</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-star-half"></i>
							</div>
							<div class="ms-2">	<span>star-half</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stats-down"></i>
							</div>
							<div class="ms-2">	<span>stats-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stats-up"></i>
							</div>
							<div class="ms-2">	<span>stats-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-steam"></i>
							</div>
							<div class="ms-2">	<span>steam</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sthethoscope"></i>
							</div>
							<div class="ms-2">	<span>sthethoscope</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stop"></i>
							</div>
							<div class="ms-2">	<span>stop</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-strikethrough"></i>
							</div>
							<div class="ms-2">	<span>strikethrough</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stripe"></i>
							</div>
							<div class="ms-2">	<span>stripe</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-stumbleupon"></i>
							</div>
							<div class="ms-2">	<span>stumbleupon</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-sun"></i>
							</div>
							<div class="ms-2">	<span>sun</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-support"></i>
							</div>
							<div class="ms-2">	<span>support</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-surf-board"></i>
							</div>
							<div class="ms-2">	<span>surf-board</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-swift"></i>
							</div>
							<div class="ms-2">	<span>swift</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-syringe"></i>
							</div>
							<div class="ms-2">	<span>syringe</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-tab"></i>
							</div>
							<div class="ms-2">	<span>tab</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-tag"></i>
							</div>
							<div class="ms-2">	<span>tag</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-target"></i>
							</div>
							<div class="ms-2">	<span>target</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-target-customer"></i>
							</div>
							<div class="ms-2">	<span>target-customer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-target-revenue"></i>
							</div>
							<div class="ms-2">	<span>target-revenue</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-taxi"></i>
							</div>
							<div class="ms-2">	<span>taxi</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-teabag"></i>
							</div>
							<div class="ms-2">	<span>teabag</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-telegram"></i>
							</div>
							<div class="ms-2">	<span>telegram</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-telegram-original"></i>
							</div>
							<div class="ms-2">	<span>telegram-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-text-align-center"></i>
							</div>
							<div class="ms-2">	<span>text-align-center</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-text-align-justify"></i>
							</div>
							<div class="ms-2">	<span>text-align-justify</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-text-align-left"></i>
							</div>
							<div class="ms-2">	<span>text-align-left</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-text-align-right"></i>
							</div>
							<div class="ms-2">	<span>text-align-right</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-text-format"></i>
							</div>
							<div class="ms-2">	<span>text-format</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-text-format-remove"></i>
							</div>
							<div class="ms-2">	<span>text-format-remove</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-thought"></i>
							</div>
							<div class="ms-2">	<span>thought</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-thumbs-down"></i>
							</div>
							<div class="ms-2">	<span>thumbs-down</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-thumbs-up"></i>
							</div>
							<div class="ms-2">	<span>thumbs-up</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-thunder"></i>
							</div>
							<div class="ms-2">	<span>thunder</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-thunder-alt"></i>
							</div>
							<div class="ms-2">	<span>thunder-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ticket"></i>
							</div>
							<div class="ms-2">	<span>ticket</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ticket-alt"></i>
							</div>
							<div class="ms-2">	<span>ticket-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-timer"></i>
							</div>
							<div class="ms-2">	<span>timer</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-train"></i>
							</div>
							<div class="ms-2">	<span>train</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-train-alt"></i>
							</div>
							<div class="ms-2">	<span>train-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-trash"></i>
							</div>
							<div class="ms-2">	<span>trash</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-travel"></i>
							</div>
							<div class="ms-2">	<span>travel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-tree"></i>
							</div>
							<div class="ms-2">	<span>tree</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-trees"></i>
							</div>
							<div class="ms-2">	<span>trees</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-trello"></i>
							</div>
							<div class="ms-2">	<span>trello</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-trowel"></i>
							</div>
							<div class="ms-2">	<span>trowel</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-tshirt"></i>
							</div>
							<div class="ms-2">	<span>tshirt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-tumblr"></i>
							</div>
							<div class="ms-2">	<span>tumblr</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-twitch"></i>
							</div>
							<div class="ms-2">	<span>twitch</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-twitter"></i>
							</div>
							<div class="ms-2">	<span>twitter</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-twitter-filled"></i>
							</div>
							<div class="ms-2">	<span>twitter-filled</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-twitter-original"></i>
							</div>
							<div class="ms-2">	<span>twitter-original</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ubuntu"></i>
							</div>
							<div class="ms-2">	<span>ubuntu</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-underline"></i>
							</div>
							<div class="ms-2">	<span>underline</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-unlink"></i>
							</div>
							<div class="ms-2">	<span>unlink</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-unlock"></i>
							</div>
							<div class="ms-2">	<span>unlock</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-upload"></i>
							</div>
							<div class="ms-2">	<span>upload</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-user"></i>
							</div>
							<div class="ms-2">	<span>user</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-users"></i>
							</div>
							<div class="ms-2">	<span>users</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ux"></i>
							</div>
							<div class="ms-2">	<span>ux</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-vector"></i>
							</div>
							<div class="ms-2">	<span>vector</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-video"></i>
							</div>
							<div class="ms-2">	<span>video</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-vimeo"></i>
							</div>
							<div class="ms-2">	<span>vimeo</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-visa"></i>
							</div>
							<div class="ms-2">	<span>visa</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-vk"></i>
							</div>
							<div class="ms-2">	<span>vk</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-volume"></i>
							</div>
							<div class="ms-2">	<span>volume</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-volume-high"></i>
							</div>
							<div class="ms-2">	<span>volume-high</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-volume-low"></i>
							</div>
							<div class="ms-2">	<span>volume-low</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-volume-medium"></i>
							</div>
							<div class="ms-2">	<span>volume-medium</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-volume-mute"></i>
							</div>
							<div class="ms-2">	<span>volume-mute</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-wallet"></i>
							</div>
							<div class="ms-2">	<span>wallet</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-warning"></i>
							</div>
							<div class="ms-2">	<span>warning</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-website"></i>
							</div>
							<div class="ms-2">	<span>website</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-website-alt"></i>
							</div>
							<div class="ms-2">	<span>website-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-wechat"></i>
							</div>
							<div class="ms-2">	<span>wechat</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-weight"></i>
							</div>
							<div class="ms-2">	<span>weight</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-whatsapp"></i>
							</div>
							<div class="ms-2">	<span>whatsapp</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-wheelbarrow"></i>
							</div>
							<div class="ms-2">	<span>wheelbarrow</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-wheelchair"></i>
							</div>
							<div class="ms-2">	<span>wheelchair</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-windows"></i>
							</div>
							<div class="ms-2">	<span>windows</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-wordpress"></i>
							</div>
							<div class="ms-2">	<span>wordpress</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-wordpress-filled"></i>
							</div>
							<div class="ms-2">	<span>wordpress-filled</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-world"></i>
							</div>
							<div class="ms-2">	<span>world</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-world-alt"></i>
							</div>
							<div class="ms-2">	<span>world-alt</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-write"></i>
							</div>
							<div class="ms-2">	<span>write</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-yahoo"></i>
							</div>
							<div class="ms-2">	<span>yahoo</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-ycombinator"></i>
							</div>
							<div class="ms-2">	<span>ycombinator</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-yen"></i>
							</div>
							<div class="ms-2">	<span>yen</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-youtube"></i>
							</div>
							<div class="ms-2">	<span>youtube</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-zip"></i>
							</div>
							<div class="ms-2">	<span>zip</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-zoom-in"></i>
							</div>
							<div class="ms-2">	<span>zoom-in</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
							<div class="font-22 text-white">	<i class="lni lni-zoom-out"></i>
							</div>
							<div class="ms-2">	<span>zoom-out</span>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">Gradient Background</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>