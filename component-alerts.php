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
								<li class="breadcrumb-item active" aria-current="page">Alerts</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu">
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
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Icon Alert Examples</h5>
								<hr/>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bookmark-heart'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Primary Alerts</h6>
											<div class="text-white">A simple primary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-tag-alt'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Secondary Alerts</h6>
											<div class="text-white">A simple secondary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Success Alerts</h6>
											<div class="text-white">A simple success alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Danger Alerts</h6>
											<div class="text-white">A simple danger alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Warning Alerts</h6>
											<div class="text-white">A simple Warning alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-square'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Info Alerts</h6>
											<div class="text-white">A simple info alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bell'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Dark Alerts</h6>
											<div class="text-white">A simple dark alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Text Examples Without Icons</h5>
								<hr/>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple primary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple secondary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple success alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple danger alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple Warning alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple info alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple dark alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Border Examples</h5>
								<hr/>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bookmark-heart'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Primary Alerts</h6>
											<div>A simple primary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-tag-alt'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0">Secondary Alerts</h6>
											<div>A simple secondary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Success Alerts</h6>
											<div>A simple success alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Danger Alerts</h6>
											<div>A simple danger alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Warning Alerts</h6>
											<div>A simple danger alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-square'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Info Alerts</h6>
											<div>A simple info alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bell'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0">Dark Alerts</h6>
											<div>A simple dark alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Border Examples Without Icons</h5>
								<hr/>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple primary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple secondary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple success alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert  border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple danger alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple danger alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div>A simple info alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple dark alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
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