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
					<div class="breadcrumb-title pe-3">Content</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Grid System</li>
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
							<h5 class="mb-0">Available breakpoints</h5>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Breakpoint</th>
										<th>Class infix</th>
										<th>Dimensions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>X-Small</td>
										<td><em>None</em>
										</td>
										<td>&lt;576px</td>
									</tr>
									<tr>
										<td>Small</td>
										<td><code>sm</code>
										</td>
										<td>≥576px</td>
									</tr>
									<tr>
										<td>Medium</td>
										<td><code>md</code>
										</td>
										<td>≥768px</td>
									</tr>
									<tr>
										<td>Large</td>
										<td><code>lg</code>
										</td>
										<td>≥992px</td>
									</tr>
									<tr>
										<td>Extra large</td>
										<td><code>xl</code>
										</td>
										<td>≥1200px</td>
									</tr>
									<tr>
										<td>Extra extra large</td>
										<td><code>xxl</code>
										</td>
										<td>≥1400px</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h5 class="mb-0">Containers</h5>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<td class="border-dark"></td>
										<th scope="col">Extra small
											<br>	<span class="fw-normal">&lt;576px</span>
										</th>
										<th scope="col">Small
											<br>	<span class="fw-normal">≥576px</span>
										</th>
										<th scope="col">Medium
											<br>	<span class="fw-normal">≥768px</span>
										</th>
										<th scope="col">Large
											<br>	<span class="fw-normal">≥992px</span>
										</th>
										<th scope="col">X-Large
											<br>	<span class="fw-normal">≥1200px</span>
										</th>
										<th scope="col">XX-Large
											<br>	<span class="fw-normal">≥1400px</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" class="fw-normal"><code>.container</code>
										</th>
										<td class="text-muted">100%</td>
										<td>540px</td>
										<td>720px</td>
										<td>960px</td>
										<td>1140px</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th scope="row" class="fw-normal"><code>.container-sm</code>
										</th>
										<td class="text-muted">100%</td>
										<td>540px</td>
										<td>720px</td>
										<td>960px</td>
										<td>1140px</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th scope="row" class="fw-normal"><code>.container-md</code>
										</th>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td>720px</td>
										<td>960px</td>
										<td>1140px</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th scope="row" class="fw-normal"><code>.container-lg</code>
										</th>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td>960px</td>
										<td>1140px</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th scope="row" class="fw-normal"><code>.container-xl</code>
										</th>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td>1140px</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th scope="row" class="fw-normal"><code>.container-xxl</code>
										</th>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th scope="row" class="fw-normal"><code>.container-fluid</code>
										</th>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
										<td class="text-muted">100%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h5 class="mb-0">Grid options</h5>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col"></th>
										<th scope="col">xs
											<br>	<span class="fw-normal">&lt;576px</span>
										</th>
										<th scope="col">sm
											<br>	<span class="fw-normal">≥576px</span>
										</th>
										<th scope="col">md
											<br>	<span class="fw-normal">≥768px</span>
										</th>
										<th scope="col">lg
											<br>	<span class="fw-normal">≥992px</span>
										</th>
										<th scope="col">xl
											<br>	<span class="fw-normal">≥1200px</span>
										</th>
										<th scope="col">xxl
											<br>	<span class="fw-normal">≥1400px</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th class="text-nowrap" scope="row">Container <code class="fw-normal">max-width</code>
										</th>
										<td>None (auto)</td>
										<td>540px</td>
										<td>720px</td>
										<td>960px</td>
										<td>1140px</td>
										<td>1320px</td>
									</tr>
									<tr>
										<th class="text-nowrap" scope="row">Class prefix</th>
										<td><code>.col-</code>
										</td>
										<td><code>.col-sm-</code>
										</td>
										<td><code>.col-md-</code>
										</td>
										<td><code>.col-lg-</code>
										</td>
										<td><code>.col-xl-</code>
										</td>
										<td><code>.col-xxl-</code>
										</td>
									</tr>
									<tr>
										<th class="text-nowrap" scope="row"># of columns</th>
										<td colspan="6">12</td>
									</tr>
									<tr>
										<th class="text-nowrap" scope="row">Gutter width</th>
										<td colspan="6">1.5rem (.75rem on left and right)</td>
									</tr>
									<tr>
										<th class="text-nowrap" scope="row">Custom gutters</th>
										<td colspan="6"><a href="/docs/5.0/layout/gutters/">Yes</a>
										</td>
									</tr>
									<tr>
										<th class="text-nowrap" scope="row">Nestable</th>
										<td colspan="6"><a href="#nesting">Yes</a>
										</td>
									</tr>
									<tr>
										<th class="text-nowrap" scope="row">Column ordering</th>
										<td colspan="6"><a href="/docs/5.0/layout/columns/#reordering">Yes</a>
										</td>
									</tr>
								</tbody>
							</table>
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