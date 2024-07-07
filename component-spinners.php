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
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Spinners</li>
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
				<div class="row row-cols-auto row-cols-1 row-cols-lg-2">
					<div class="col">
						<h5 class="mb-0">Border spinner</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Border Color spinner</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-secondary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-success" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-danger" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-warning" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-info" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-light" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-dark" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Growing spinner</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="spinner-grow" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Border Color spinner</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="spinner-grow text-primary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-secondary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-success" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-danger" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-warning" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-info" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-light" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-dark" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Growing Size Spinner</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border spinner-border-sm" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow spinner-grow-sm" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Border Color spinner</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<h5 class="mb-0">Spinners With Buttons</h5>
						<hr/>
						<div class="card">
							<div class="card-body">
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<hr/>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<hr>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<hr/>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
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