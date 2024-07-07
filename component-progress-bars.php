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
								<li class="breadcrumb-item active" aria-current="page">Progress Bars</li>
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
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Basic progress bars</h5>
								</div>
								<hr>
								<div class="progress mb-4" style="height:7px;">
									<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-4" style="height:7px;">
									<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-4" style="height:7px;">
									<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-4" style="height:7px;">
									<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="height:7px;">
									<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Labels</h5>
								</div>
								<hr>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Backgrounds</h5>
								</div>
								<hr>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Multiple bars</h5>
								</div>
								<hr>
								<div class="progress" style="height:7px;">
									<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Striped</h5>
								</div>
								<hr>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3" style="height:7px;">
									<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="height:7px;">
									<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Animated stripes</h5>
								</div>
								<hr>
								<div class="progress" style="height:7px;">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
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