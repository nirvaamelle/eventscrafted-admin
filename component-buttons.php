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
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Buttons</li>
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
								<div>
									<h5 class="card-title">Basic Examples</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-primary px-5">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-secondary px-5">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-success px-5">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-danger px-5">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-warning px-5">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-info px-5">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5">Light</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-dark px-5">Dark</button>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5">Light</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5">Dark</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h5 class="card-title">Round Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-primary px-5 radius-30">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-secondary px-5 radius-30">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-success px-5 radius-30">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-danger px-5 radius-30">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-warning px-5 radius-30">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-info px-5 radius-30">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30">Light</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-dark px-5 radius-30">Dark</button>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-outline-primary px-5 radius-30">Primary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary px-5 radius-30">Secondary</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success px-5 radius-30">Success</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-danger px-5 radius-30">Danger</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-warning px-5 radius-30">Warning</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-info px-5 radius-30">Info</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30">Light</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-dark px-5 radius-30">Dark</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h5 class="card-title">Button With Icons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-cloud-upload mr-1'></i>Upload</button>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5"><i class='bx bx-cloud-upload mr-1'></i>Upload</button>
									</div>
								</div>
								<!--end row-->
							</div>
							<div class="card-body">
								<div class="row row-cols-auto g-3">
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-cloud-upload mr-1'></i>Upload</button>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-user mr-1'></i>Person</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-comment mr-1'></i>Comments</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-home mr-1'></i>Home</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-bookmark mr-1'></i>Bookmark</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-heart-circle mr-1'></i>Love</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light px-5 radius-30"><i class='bx bx-cloud-download mr-1'></i>Downloads</button>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-user me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-comment-detail me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-home-alt me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-blanket me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-heart me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-refresh me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-like me-0'></i>
										</button>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-user me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-comment-detail me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-home-alt me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-blanket me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-heart me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-refresh me-0'></i>
										</button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-light"><i class='bx bx-like me-0'></i>
										</button>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h5 class="card-title">Group Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-light">1</button>
											<button type="button" class="btn btn-light">2</button>
											<button type="button" class="btn btn-light">3</button>
											<button type="button" class="btn btn-light">4</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-light">5</button>
											<button type="button" class="btn btn-light">6</button>
											<button type="button" class="btn btn-light">7</button>
											<button type="button" class="btn btn-light">8</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-light">9</button>
											<button type="button" class="btn btn-light">10</button>
											<button type="button" class="btn btn-light">11</button>
											<button type="button" class="btn btn-light">12</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-light">13</button>
											<button type="button" class="btn btn-light">14</button>
											<button type="button" class="btn btn-light">15</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="First group">
											<button type="button" class="btn btn-light">16</button>
											<button type="button" class="btn btn-light">17</button>
											<button type="button" class="btn btn-light">18</button>
											<button type="button" class="btn btn-light">19</button>
											<button type="button" class="btn btn-light">20</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-light">1</button>
											<button type="button" class="btn btn-light">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-light">1</button>
											<button type="button" class="btn btn-light">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-light">1</button>
											<button type="button" class="btn btn-light">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<button type="button" class="btn btn-light">1</button>
											<button type="button" class="btn btn-light">2</button>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
													<li><a class="dropdown-item" href="#">Dropdown link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light">Left</button>
											<button type="button" class="btn btn-light">Middle</button>
											<button type="button" class="btn btn-light">Right</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bx-like"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-share"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-comment-detail"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bxs-music"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxs-heart"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxs-florist"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bx-left-arrow"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-up-arrow"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-right-arrow"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bxl-facebook-square"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxl-twitter"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxl-linkedin-square"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class='bx bx-pointer me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-search-alt me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-rotate-right me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-aperture me-0'></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class='bx bx-export me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-star me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-pin me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-cloud-light-rain me-0'></i>
											</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bx-like"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-share"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-comment-detail"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bxs-music"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxs-heart"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxs-florist"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bx-left-arrow"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-up-arrow"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bx-right-arrow"></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-light"><i class="bx bxl-facebook-square"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxl-twitter"></i>
											</button>
											<button type="button" class="btn btn-light"><i class="bx bxl-linkedin-square"></i>
											</button>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light active">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
											<button type="button" class="btn btn-light">Button</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-light"><i class='bx bxl-facebook-square me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bxl-twitter me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bxl-linkedin-square me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bxl-youtube me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bxl-wordpress me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bxl-pinterest me-0'></i>
											</button>
										</div>
									</div>
									<div class="col">
										<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-light"><i class='bx bx-home-smile me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-coin-stack me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-book-heart me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-video-recording me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-paper-plane me-0'></i>
											</button>
											<button type="button" class="btn btn-light"><i class='bx bx-trash-alt me-0'></i>
											</button>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div>
									<h5 class="card-title">Dropdown Buttons</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Success</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Info</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="dropdown">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Danger</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Primary</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Secondary</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Success</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Info</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Warning</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Danger</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="w-100 border-top"></div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Dropdown</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Dropdown</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Dropdown</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Dropdown</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Dropdown</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col">
										<div class="btn-group">
											<button type="button" class="btn btn-light">Dropdown</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a>
												</li>
												<li><a class="dropdown-item" href="#">Another action</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!--end row -->
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
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">Gradient Background</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
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