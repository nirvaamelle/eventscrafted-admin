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
								<li class="breadcrumb-item active" aria-current="page">Avtars Chips</li>
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
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h4 class="mb-0">Chips</h4>
						</div>
						<hr>
						<div class="chip">
							<img src="assets/images/avatars/avatar-1.png" alt="Contact Person">John Doe</div>
						<div class="chip">
							<img src="assets/images/avatars/avatar-2.png" alt="Contact Person">Jessica Doe</div>
						<div class="chip">
							<img src="assets/images/avatars/avatar-3.png" alt="Contact Person">Michele Powa</div>
						<div class="chip">
							<img src="assets/images/avatars/avatar-4.png" alt="Contact Person">Clark Natela</div>
						<div class="chip">
							<img src="assets/images/avatars/avatar-5.png" alt="Contact Person">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">
							<img src="assets/images/avatars/avatar-6.png" alt="Contact Person">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">
							<img src="assets/images/avatars/avatar-7.png" alt="Contact Person">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<hr>
						<div class="chip">John Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">Jessica Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h4 class="mb-0">Sizing and Colors</h4>
						</div>
						<hr>
						<div class="chip chip-md">
							<img src="assets/images/avatars/avatar-1.png" alt="Contact Person">John Doe</div>
						<div class="chip chip-md bg-light text-dark">
							<img src="assets/images/avatars/avatar-2.png" alt="Contact Person">Jessica Doe</div>
						<div class="chip chip-md bg-dark text-white">
							<img src="assets/images/avatars/avatar-3.png" alt="Contact Person">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-md bg-danger text-white">
							<img src="assets/images/avatars/avatar-4.png" alt="Contact Person">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<hr>
						<div class="chip chip-lg">
							<img src="assets/images/avatars/avatar-5.png" alt="Contact Person">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-lg bg-primary text-white">
							<img src="assets/images/avatars/avatar-6.png" alt="Contact Person">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-lg bg-warning text-white">
							<img src="assets/images/avatars/avatar-7.png" alt="Contact Person">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<hr>
						<div class="chip chip-md">John Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-md">Jessica Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-md bg-info text-white">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-md bg-success text-white">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<hr>
						<div class="chip chip-lg">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-lg bg-secondary text-white">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
						</div>
						<div class="chip chip-lg bg-dark text-white">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
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