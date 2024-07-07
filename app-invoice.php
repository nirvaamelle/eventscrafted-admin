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
					<div class="breadcrumb-title pe-3">Applications</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
						<div id="invoice">
							<div class="toolbar hidden-print">
								<div class="text-end">
									<button type="button" class="btn btn-dark" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
									<button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
								</div>
								<hr/>
							</div>
							<div class="invoice overflow-auto">
								<div style="min-width: 600px">
									<header>
										<div class="row">
											<div class="col">
												<a href="javascript:;">
													<img src="assets/images/logo-icon.png" width="80" alt="" />
												</a>
											</div>
											<div class="col company-details">
												<h2 class="name">
									<a target="_blank" href="javascript:;">
									Arboshiki
									</a>
								</h2>
												<div>455 Foggy Heights, AZ 85004, US</div>
												<div>(123) 456-789</div>
												<div>company@example.com</div>
											</div>
										</div>
									</header>
									<main>
										<div class="row contacts">
											<div class="col invoice-to">
												<div class="text-gray-light">INVOICE TO:</div>
												<h2 class="to">John Doe</h2>
												<div class="address">796 Silver Harbour, TX 79273, US</div>
												<div class="email"><a href="mailto:john@example.com">john@example.com</a>
												</div>
											</div>
											<div class="col invoice-details">
												<h1 class="invoice-id">INVOICE 3-2-1</h1>
												<div class="date">Date of Invoice: 01/10/2018</div>
												<div class="date">Due Date: 30/10/2018</div>
											</div>
										</div>
										<table>
											<thead>
												<tr>
													<th>#</th>
													<th class="text-left">DESCRIPTION</th>
													<th class="text-right">HOUR PRICE</th>
													<th class="text-right">HOURS</th>
													<th class="text-right">TOTAL</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="no">04</td>
													<td class="text-left">
														<h3>
										<a target="_blank" href="javascript:;">
										Youtube channel
										</a>
										</h3>
														<a target="_blank" href="javascript:;">
										   Useful videos
									   </a> to improve your Javascript skills. Subscribe and stay tuned :)</td>
													<td class="unit">$0.00</td>
													<td class="qty">100</td>
													<td class="total">$0.00</td>
												</tr>
												<tr>
													<td class="no">01</td>
													<td class="text-left">
														<h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
													<td class="unit">$40.00</td>
													<td class="qty">30</td>
													<td class="total">$1,200.00</td>
												</tr>
												<tr>
													<td class="no">02</td>
													<td class="text-left">
														<h3>Website Development</h3>Developing a Content Management System-based Website</td>
													<td class="unit">$40.00</td>
													<td class="qty">80</td>
													<td class="total">$3,200.00</td>
												</tr>
												<tr>
													<td class="no">03</td>
													<td class="text-left">
														<h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
													<td class="unit">$40.00</td>
													<td class="qty">20</td>
													<td class="total">$800.00</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td colspan="2">SUBTOTAL</td>
													<td>$5,200.00</td>
												</tr>
												<tr>
													<td colspan="2"></td>
													<td colspan="2">TAX 25%</td>
													<td>$1,300.00</td>
												</tr>
												<tr>
													<td colspan="2"></td>
													<td colspan="2">GRAND TOTAL</td>
													<td>$6,500.00</td>
												</tr>
											</tfoot>
										</table>
										<div class="thanks">Thank you!</div>
										<div class="notices">
											<div>NOTICE:</div>
											<div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
										</div>
									</main>
									<footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
								</div>
								<!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
								<div></div>
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