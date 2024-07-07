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

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-lg-3 col-xl-2">
										<a href="ecommerce-add-new-products.php" class="btn btn-light mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>New Product</a>
									</div>
									<div class="col-lg-9 col-xl-10">
										<form class="float-lg-end">
											<div class="row row-cols-lg-auto g-2">
												<div class="col-12">
													<div class="position-relative">
														<input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
													</div>
												</div>
												<div class="col-12">
													<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
														<button type="button" class="btn btn-light">Sort By</button>
														<div class="btn-group" role="group">
														  <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
															<i class='bx bx-chevron-down'></i>
														  </button>
														  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
														  </ul>
														</div>
													  </div>
												</div>
												<div class="col-12">
													<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
														<button type="button" class="btn btn-light">Collection Type</button>
														<div class="btn-group" role="group">
														  <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
															<i class='bx bxs-category'></i>
														  </button>
														  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
														  </ul>
														</div>
													  </div>
												</div>
												<div class="col-12">
													<div class="btn-group" role="group">
														<button type="button" class="btn btn-light">Price Range</button>
														<div class="btn-group" role="group">
														  <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
															<i class='bx bx-slider'></i>
														  </button>
														  <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
														  </ul>
														</div>
													  </div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
					<div class="col">
						<div class="card">
							<img src="assets/images/products/01.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/02.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/03.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/04.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/05.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/06.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/07.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/08.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
									<div class="cursor-pointer">
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-white'></i>
										<i class='bx bxs-star text-light-4'></i>
										<i class='bx bxs-star text-light-4'></i>
									  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/09.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/products/10.png" class="card-img-top" alt="...">
							<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>134</strong> Sales</p>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--end row-->


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