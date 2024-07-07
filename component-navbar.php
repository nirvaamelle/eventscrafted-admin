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
								<li class="breadcrumb-item active" aria-current="page">Navbars</li>
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
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
							<div class="container-fluid">	<a class="navbar-brand" href="#">Navbar</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent1">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						  </a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</li>
									</ul>
									<form class="d-flex nav-search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Some" />
											<button class="btn" type="submit"><i class='bx bx-search'></i>
											</button>
										</div>
									</form>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
							<div class="container-fluid">	<a class="navbar-brand" href="#">Navbar</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent2">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						  </a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</li>
									</ul>
									<form class="d-flex">
										<button class="btn btn-light px-4" type="submit"><i class='bx bx-cart'></i> Buy Now</button>
									</form>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<nav class="navbar navbar-expand-lg navbar-dark bg-danger rounded">
							<div class="container-fluid">	<a class="navbar-brand" href="#">Navbar</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent3">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						  </a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</li>
									</ul>
									<form class="d-flex">
										<button class="btn btn-dark me-3 radius-30 px-4" type="submit"><i class='bx bx-lock'></i> Login</button>
										<button class="btn btn-light radius-30 px-4" type="submit"><i class='bx bx-user'></i> Register</button>
									</form>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<nav class="navbar navbar-expand-lg navbar-dark bg-success rounded">
							<div class="container-fluid">	<a class="navbar-brand" href="#">Navbar</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent4">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						  </a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bxl-facebook-square font-22 text-white'></i></a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bxl-twitter font-22 text-white'></i></a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bxl-linkedin-square font-22 text-white'></i></a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bxl-youtube font-22 text-white'></i></a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded">
							<div class="container-fluid">	<a class="navbar-brand" href="#">Navbar</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent5" aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent5">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						  </a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</li>
									</ul>
									<form class="d-flex">
										<button class="btn btn-dark me-3 radius-30 px-4" type="submit"><i class='bx bx-lock'></i> Login</button>
										<button class="btn btn-light radius-30 px-4" type="submit"><i class='bx bx-calendar-event'></i> Start For Free</button>
									</form>
								</div>
							</div>
						</nav>
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