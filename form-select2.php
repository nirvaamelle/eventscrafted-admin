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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
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
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/slack.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/behance.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="assets/images/app/google-drive.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/outlook.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/github.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/stack-overflow.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/figma.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/twitter.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-calendar.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/spotify.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-photos.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/pinterest.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/linkedin.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/dribble.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/youtube.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/envato.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/safari.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="assets/images/app/outlook.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="assets/images/app/github.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-light w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/11.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/02.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/03.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/04.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/05.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/06.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/07.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/08.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/09.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-light w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Select2</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light split-bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
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
					<div class="col-xl-9 mx-auto">

						<h6 class="mb-0 text-uppercase">Single Select Examples</h6>
						 <hr/>
						<div class="card">
							<div class="card-body">

								<div class="mb-4">
									<label for="single-select-field" class="form-label">Basic single select</label>
									<select class="form-select" id="single-select-field" data-placeholder="Choose one thing">
										<option></option>
										<option>Reactive</option>
										<option>Solution</option>
										<option>Conglomeration</option>
										<option>Algoritm</option>
										<option>Holistic</option>
									</select>
								</div>
		
								<div class="mb-4">
									<label for="single-select-optgroup-field" class="form-label">Single select w/ optgroup</label>
									<select class="form-select" id="single-select-optgroup-field" data-placeholder="Choose one thing">
										<option></option>
										<optgroup label="Group 1">
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
										</optgroup>
										<optgroup label="Group 2">
											<option>Algoritm</option>
											<option>Holistic</option>
										</optgroup>
									</select>
								</div>
		
								<div class="mb-4">
									<label for="single-select-clear-field" class="form-label">Single select w/ allow clear</label>
									 <select class="form-select" id="single-select-clear-field" data-placeholder="Choose one thing">
										 <option></option>
										 <option>Reactive</option>
										 <option>Solution</option>
										 <option>Conglomeration</option>
										 <option>Algoritm</option>
										 <option>Holistic</option>
									 </select>
								 </div>

								 <div class="mb-0">
									<label for="single-select-disabled-field" class="form-label">Disabled single select</label>
									<select class="form-select" id="single-select-disabled-field" data-placeholder="Choose one thing" disabled>
										<option></option>
										<option>Reactive</option>
										<option>Solution</option>
										<option>Conglomeration</option>
										<option>Algoritm</option>
										<option>Holistic</option>
									</select>
								</div>
		
							</div>
						</div>


						<h6 class="mb-0 text-uppercase">Multiple select</h6>
						 <hr/>
						<div class="card">
						   <div class="card-body">
                               
							<div class="mb-4">
								<label for="multiple-select-field" class="form-label">Basic multiple select</label>
								<select class="form-select" id="multiple-select-field" data-placeholder="Choose anything" multiple>
									<option selected>Christmas Island</option>
									<option selected>South Sudan</option>
									<option selected>Jamaica</option>
									<option>Kenya</option>
									<option>French Guiana</option>
									<option>Mayotta</option>
									<option>Liechtenstein</option>
									<option>Denmark</option>
									<option>Eritrea</option>
									<option>Gibraltar</option>
									<option>Saint Helena, Ascension and Tristan da Cunha</option>
									<option>Haiti</option>
									<option>Namibia</option>
									<option>South Georgia and the South Sandwich Islands</option>
									<option>Vietnam</option>
									<option>Yemen</option>
									<option>Philippines</option>
									<option>Benin</option>
									<option>Czech Republic</option>
									<option>Russia</option>
								</select>
							</div>

							<div class="mb-4">
								<label for="multiple-select-optgroup-field" class="form-label">Multiple select w/ optgroup</label>
								<select class="form-select" id="multiple-select-optgroup-field" data-placeholder="Choose anything" multiple>
									<optgroup label="Group 1">
										<option selected>Christmas Island</option>
										<option>South Sudan</option>
										<option selected>Jamaica</option>
										<option>Kenya</option>
										<option>French Guiana</option>
										<option>Mayotta</option>
									</optgroup>
									<optgroup label="Group 2">
										<option>Liechtenstein</option>
										<option>Denmark</option>
										<option>Eritrea</option>
										<option>Gibraltar</option>
										<option>Saint Helena, Ascension and Tristan da Cunha</option>
										<option>Haiti</option>
										<option>Namibia</option>
									</optgroup>
									<optgroup label="Group 3">
										<option>South Georgia and the South Sandwich Islands</option>
										<option>Vietnam</option>
										<option>Yemen</option>
										<option>Philippines</option>
										<option>Benin</option>
										<option>Czech Republic</option>
										<option>Russia</option>
									</optgroup>
								</select>
							</div>


							<div class="mb-4">
								<label for="multiple-select-clear-field" class="form-label">Multiple select w/ allow clear</label>
								<select class="form-select" id="multiple-select-clear-field" data-placeholder="Choose anything" multiple>
									<option>Christmas Island</option>
									<option>South Sudan</option>
									<option>Jamaica</option>
									<option>Kenya</option>
									<option>French Guiana</option>
									<option selected>Mayotta</option>
									<option selected>Liechtenstein</option>
									<option>Denmark</option>
									<option>Eritrea</option>
									<option>Gibraltar</option>
									<option>Saint Helena, Ascension and Tristan da Cunha</option>
									<option>Haiti</option>
									<option>Namibia</option>
									<option>South Georgia and the South Sandwich Islands</option>
									<option>Vietnam</option>
									<option>Yemen</option>
									<option>Philippines</option>
									<option>Benin</option>
									<option>Czech Republic</option>
									<option>Russia</option>
								</select>
							</div>

							<div class="mb-4">
								<label for="multiple-select-custom-field" class="form-label">Multiple select w/ custom entries</label>
								<select class="form-select" id="multiple-select-custom-field" data-placeholder="Choose anything" multiple>
									<option>Christmas Island</option>
									<option>South Sudan</option>
									<option>Jamaica</option>
									<option>Kenya</option>
									<option>French Guiana</option>
									<option>Mayotta</option>
									<option>Liechtenstein</option>
									<option>Denmark</option>
									<option>Eritrea</option>
									<option>Gibraltar</option>
									<option>Saint Helena, Ascension and Tristan da Cunha</option>
									<option>Haiti</option>
									<option>Namibia</option>
									<option>South Georgia and the South Sandwich Islands</option>
									<option>Vietnam</option>
									<option>Yemen</option>
									<option>Philippines</option>
									<option>Benin</option>
									<option>Czech Republic</option>
									<option>Russia</option>
								</select>
							</div>

							<div class="mb-0">
								<label for="multiple-select-disabled-field" class="form-label">Disabled multiple select</label>
								<select class="form-select" id="multiple-select-disabled-field" data-placeholder="Choose anything" multiple disabled>
									<option>Christmas Island</option>
									<option>South Sudan</option>
									<option>Jamaica</option>
									<option>Kenya</option>
									<option>French Guiana</option>
									<option>Mayotta</option>
									<option>Liechtenstein</option>
									<option>Denmark</option>
									<option>Eritrea</option>
									<option>Gibraltar</option>
									<option>Saint Helena, Ascension and Tristan da Cunha</option>
									<option>Haiti</option>
									<option>Namibia</option>
									<option>South Georgia and the South Sandwich Islands</option>
									<option>Vietnam</option>
									<option>Yemen</option>
									<option>Philippines</option>
									<option>Benin</option>
									<option>Czech Republic</option>
									<option>Russia</option>
								</select>
							</div>


						   </div>
						</div>



						<h6 class="mb-0 text-uppercase">Select with input groups</h6>
						 <hr/>
						<div class="card">
						   <div class="card-body">
							
							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Prepend</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<div class="input-group-text">Prepend</div>
										<select class="form-select" id="prepend-text-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
									</div>
									
									<div class="input-group">
										<div class="input-group-text">Prepend</div>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-text-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Button</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<button class="btn btn-light" type="button">Prepend</button>
										<select class="form-select" id="prepend-button-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
									</div>
									
									<div class="input-group">
										<button class="btn btn-light" type="button">Prepend</button>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-button-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Dropdown</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Prepend</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" id="prepend-dropdown-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
									</div>
									
									<div class="input-group mb-0">
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Prepend</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-dropdown-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
									</div>									
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Dropdown Toggle</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<button class="btn btn-light">Prepend</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" id="prepend-toggle-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
									</div>
									
									<div class="input-group mb-0">
										<button class="btn btn-light">Prepend</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-toggle-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
									</div>			
								</div>
							</div>


							
							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Append</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<select class="form-select" id="append-text-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<div class="input-group-text">Append</div>
									</div>
									
									<div class="input-group mb-0">
										<select class="form-select" data-placeholder="Choose anything" id="append-text-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<div class="input-group-text">Append</div>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select Append with Button</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<select class="form-select" id="append-button-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<button class="btn btn-light" type="button">Append</button>
									</div>
									
									<div class="input-group mb-0">
										<select class="form-select" data-placeholder="Choose anything" id="append-button-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<button class="btn btn-light" type="button">Append</button>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select Append with Dropdown</h6>	
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<select class="form-select" id="append-dropdown-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Append</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
									
									<div class="input-group mb-0">
										<select class="form-select" data-placeholder="Choose anything" id="append-dropdown-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Append</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select Append with Dropdown Toggle</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<select class="form-select" id="append-toggle-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<button class="btn btn-light">Append</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
									
									<div class="input-group mb-0">
										<select class="form-select" data-placeholder="Choose anything" id="append-toggle-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<button class="btn btn-light">Append</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Prepend & Append</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<div class="input-group-text">Prepend</div>
										<select class="form-select" id="prepend-append-text-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<div class="input-group-text">Append</div>
									</div>
									
									<div class="input-group mb-0">
										<div class="input-group-text">Prepend</div>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-append-text-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<div class="input-group-text">Append</div>
									</div>
								</div>
							</div>



							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Button Prepend & Append</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<button class="btn btn-light" type="button">Prepend</button>
										<select class="form-select" id="prepend-append-button-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<button class="btn btn-light" type="button">Append</button>
									</div>
									
									<div class="input-group mb-0">
										<button class="btn btn-light" type="button">Prepend</button>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-append-button-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<button class="btn btn-light" type="button">Append</button>
									</div>
								</div>
							</div>


							<div class="card shadow-none border">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Dropdown Button Prepend & Append</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Prepend</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" id="prepend-append-dropdown-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Append</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
									
									<div class="input-group mb-0">
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Prepend</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-append-dropdown-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Append</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>


							<div class="card shadow-none border mb-0">
								<div class="card-header bg-light">
									<h6 class="mb-0">Select with Dropdown toggle Prepend & Append</h6>
								</div>
								<div class="card-body">
									<div class="input-group mb-3">
										<button class="btn btn-light">Prepend</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" id="prepend-append-toggle-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
										<button class="btn btn-light">Append</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
									
									<div class="input-group mb-0">
										<button class="btn btn-light">Prepend</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
										<select class="form-select" data-placeholder="Choose anything" id="prepend-append-toggle-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
										<button class="btn btn-light">Append</button>
										<button class="btn btn-light dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="visually-hidden">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>

								</div>
							</div>


						  </div>
						</div>


						<h6 class="mb-0 text-uppercase">Select with Sizing</h6>
						 <hr/>
						<div class="card">
						   <div class="card-body">

							<div class="card border shadow-none">
								<div class="card-header bg-light">
									<h6 class="mb-0">Small Select2 Options</h6>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<select class="form-select form-select-sm" id="small-bootstrap-class-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
									</div>
									
									<div class="mb-0">
										<select class="form-select form-select-sm" data-placeholder="Choose anything" id="small-bootstrap-class-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
									  </div>
								</div>
							 </div>


							 <div class="card border shadow-none mb-0">
								<div class="card-header bg-light">
									<h6 class="mb-0">Large Select2 Options</h6>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<select class="form-select form-select-lg" id="large-bootstrap-class-single-field" data-placeholder="Choose one thing">
											<option></option>
											<option>Reactive</option>
											<option>Solution</option>
											<option>Conglomeration</option>
											<option>Algoritm</option>
											<option>Holistic</option>
										</select>
									</div>
									
									<div class="mb-0">
										<select class="form-select form-select-lg" data-placeholder="Choose anything" id="large-bootstrap-class-multiple-field" multiple>
											<option>Christmas Island</option>
											<option>South Sudan</option>
											<option>Jamaica</option>
											<option>Kenya</option>
											<option>French Guiana</option>
											<option>Mayotta</option>
											<option>Liechtenstein</option>
											<option>Denmark</option>
											<option>Eritrea</option>
											<option>Gibraltar</option>
											<option>Saint Helena, Ascension and Tristan da Cunha</option>
											<option>Haiti</option>
											<option>Namibia</option>
											<option>South Georgia and the South Sandwich Islands</option>
											<option>Vietnam</option>
											<option>Yemen</option>
											<option>Philippines</option>
											<option>Benin</option>
											<option>Czech Republic</option>
											<option>Russia</option>
										</select>
									</div>
								</div>
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
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="assets/plugins/select2/js/select2-custom.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>