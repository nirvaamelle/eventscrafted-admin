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
					<div class="breadcrumb-title pe-3">Timeline</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Timeline</li>
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
				<div class="">
					<div class="">
						<div class="container py-2">
							<h2 class="font-weight-light text-center text-white py-3">Timeline Example 1</h2>
							<!-- timeline item 1 -->
							<div class="row">
								<!-- timeline item 1 left dot -->
								<div class="col-auto text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-light border">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<!-- timeline item 1 event content -->
								<div class="col py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end">Mon, Jan 9th 2020 7:00 AM</div>
											<h4 class="card-title text-white">Day 1 Orientation</h4>
											<p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
							<!-- timeline item 2 -->
							<div class="row">
								<div class="col-auto text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-light">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col py-2">
									<div class="card border-light shadow radius-15">
										<div class="card-body">
											<div class="float-end">Tue, Jan 10th 2019 8:30 AM</div>
											<h4 class="card-title text-white">Day 2 Sessions</h4>
											<p class="card-text">Sign-up for the lessons and speakers that coincide with your course syllabus. Meet and greet with instructors.</p>
											<button class="btn btn-sm btn-light" type="button" data-bs-target="#t2_details" data-bs-toggle="collapse">Show Details ▼</button>
											<div class="collapse border" id="t2_details">
												<div class="p-2 text-monospace">
													<div>08:30 - 09:00 Breakfast in CR 2A</div>
													<div>09:00 - 10:30 Live sessions in CR 3</div>
													<div>10:30 - 10:45 Break</div>
													<div>10:45 - 12:00 Live sessions in CR 3</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
							<!-- timeline item 3 -->
							<div class="row">
								<div class="col-auto text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-light border">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end">Wed, Jan 11th 2019 8:30 AM</div>
											<h4 class="card-title">Day 3 Sessions</h4>
											<p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
							<!-- timeline item 4 -->
							<div class="row">
								<div class="col-auto text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-light border">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end">Thu, Jan 12th 2019 11:30 AM</div>
											<h4 class="card-title">Day 4 Wrap-up</h4>
											<p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
						</div>
						<!--container-->
						<hr>
						<div class="container py-2">
							<h2 class="font-weight-light text-center text-white py-3">Timeline Example 2</h2>
							<!-- timeline item 1 -->
							<div class="row g-0">
								<div class="col-sm">
									<!--spacer-->
								</div>
								<!-- timeline item 1 center dot -->
								<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-light border">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<!-- timeline item 1 event content -->
								<div class="col-sm py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end small">Jan 9th 2019 7:00 AM</div>
											<h4 class="card-title text-white">Day 1 Orientation</h4>
											<p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
							<!-- timeline item 2 -->
							<div class="row g-0">
								<div class="col-sm py-2">
									<div class="card border-primary shadow radius-15">
										<div class="card-body">
											<div class="float-end small">Jan 10th 2019 8:30 AM</div>
											<h4 class="card-title text-white">Day 2 Sessions</h4>
											<p class="card-text">Sign-up for the lessons and speakers that coincide with your course syllabus. Meet and greet with instructors.</p>
											<button class="btn btn-sm btn-light" type="button" data-bs-target="#t22_details" data-bs-toggle="collapse">Show Details ▼</button>
											<div class="collapse border" id="t22_details">
												<div class="p-2 text-monospace">
													<div>08:30 - 09:00 Breakfast in CR 2A</div>
													<div>09:00 - 10:30 Live sessions in CR 3</div>
													<div>10:30 - 10:45 Break</div>
													<div>10:45 - 12:00 Live sessions in CR 3</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-white">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col-sm">
									<!--spacer-->
								</div>
							</div>
							<!--/row-->
							<!-- timeline item 3 -->
							<div class="row g-0">
								<div class="col-sm">
									<!--spacer-->
								</div>
								<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
										<span class="badge rounded-pill bg-light border">&nbsp;</span>
									</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col-sm py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end small">Jan 11th 2019 8:30 AM</div>
											<h4 class="card-title">Day 3 Sessions</h4>
											<p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache.</p>
										</div>
									</div>
								</div>
							</div>
							<!--/row-->
							<!-- timeline item 4 -->
							<div class="row g-0">
								<div class="col-sm py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end small">Jan 12th 2019 11:30 AM</div>
											<h4 class="card-title">Day 4 Wrap-up</h4>
											<p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
										<span class="badge rounded-pill bg-light border">&nbsp;</span>
									</h5>
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col-sm">
									<!--spacer-->
								</div>
							</div>
							<!--/row-->
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