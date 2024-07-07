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
			<?php include ('templates/side-nav.php') ?>
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
					<div class="breadcrumb-title pe-3">Pricing Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Pricing Tables</li>
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
				<!-- Section: Pricing table -->
				<div class="pricing-table">
					<h6 class="mb-0 text-uppercase">Basic Pricing Tables</h6>
					<hr/>
					<div class="row row-cols-1 row-cols-lg-3">
						<!-- Free Tier -->
						<div class="col">
							<div class="card mb-5 mb-lg-0">
								<div class="card-header bg-light py-3">
									<h5 class="card-title text-white text-uppercase text-center">Free</h5>
									<h6 class="card-price text-white text-center">$0<span class="term">/month</span></h6>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Single User</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
										<li class="list-group-item bg-transparent text-secondary"><i class='bx bx-x me-2 font-18'></i>Unlimited Private Projects</li>
										<li class="list-group-item bg-transparent text-secondary"><i class='bx bx-x me-2 font-18'></i>Dedicated Phone Support</li>
										<li class="list-group-item bg-transparent text-secondary"><i class='bx bx-x me-2 font-18'></i>Free Subdomain</li>
										<li class="list-group-item bg-transparent text-secondary"><i class='bx bx-x me-2 font-18'></i>Monthly Status Reports</li>
									</ul>
									<div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Plus Tier -->
						<div class="col">
							<div class="card mb-5 mb-lg-0">
								<div class="card-header bg-light py-3">
									<h5 class="card-title text-white text-uppercase text-center">Plus</h5>
									<h6 class="card-price text-white text-center">$9<span class="term">/month</span></h6>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Single User</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Private Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Dedicated Phone Support</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Free Subdomain</li>
										<li class="list-group-item bg-transparent text-secondary"><i class='bx bx-x me-2 font-18'></i>Monthly Status Reports</li>
									</ul>
									<div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Pro Tier -->
						<div class="col">
							<div class="card">
								<div class="card-header bg-light py-3">
									<h5 class="card-title text-uppercase text-center">Pro</h5>
									<h6 class="card-price text-center">$49<span class="term">/month</span></h6>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Single User</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Private Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Dedicated Phone Support</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Free Subdomain</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Monthly Status Reports</li>
									</ul>
									<div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<h6 class="mb-0 text-uppercase">Color Pricing Tables</h6>
					<hr/>
					<div class="row row-cols-1 row-cols-lg-3">
						<!-- Free Tier -->
						<div class="col">
							<div class="card mb-5 mb-lg-0 bg-dark">
								<div class="card-body">
									<h5 class="card-title grey-text text-uppercase text-center">Free</h5>
									<h6 class="card-price text-center">$0<span class="term">/month</span></h6>
									<hr class="my-4">
									<ul class="list-group list-group-flush">
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Single User</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Unlimited Private Projects</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Dedicated Phone Support</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Free Subdomain</li>
										<li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Monthly Status Reports</li>
									</ul>
									<div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Plus Tier -->
						<div class="col">
							<div class="card mb-5 mb-lg-0 bg-light">
								<div class="card-body">
									<h5 class="card-title text-white text-uppercase text-center">Plus</h5>
									<h6 class="card-price text-white text-center">$9<span class="term">/month</span></h6>
									<hr class="my-4">
									<ul class="list-group list-group-flush">
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Single User</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Private Projects</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Dedicated Phone Support</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Free Subdomain</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-x me-2 font-18'></i>Monthly Status Reports</li>
									</ul>
									<div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Pro Tier -->
						<div class="col">
							<div class="card bg-dark">
								<div class="card-body">
									<h5 class="card-title text-white text-uppercase text-center">Pro</h5>
									<h6 class="card-price text-white text-center">$49<span class="term">/month</span></h6>
									<hr class="my-4">
									<ul class="list-group list-group-flush">
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Single User</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Private Projects</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Dedicated Phone Support</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Free Subdomain</li>
										<li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Monthly Status Reports</li>
									</ul>
									<div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
				<!-- Section: Pricing table -->
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
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>