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
					<div class="breadcrumb-title pe-3">Component</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Text Utilities</li>
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
				<h6 class="mb-0 text-uppercase">Background Colors</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
					<div class="col">
						<div class="card bg-primary text-center">
							<div class="card-body">
								<div class="p-4 text-white rounded">.bg-primary</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-secondary text-center">
							<div class="card-body">
								<div class="p-4 text-white rounded">.bg-secondary</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-success text-center">
							<div class="card-body">
								<div class="p-4 text-white rounded">.bg-success</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-danger text-center">
							<div class="card-body">
								<div class="p-4 text-white rounded">.bg-danger</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-warning text-center">
							<div class="card-body">
								<div class="p-4 text-dark rounded">.bg-warning</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-info text-center">
							<div class="card-body">
								<div class="p-4 text-dark rounded">.bg-info</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-light text-center">
							<div class="card-body">
								<div class="p-4 text-dark rounded">.bg-light</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-dark text-center">
							<div class="card-body">
								<div class="p-4 text-white rounded">.bg-dark</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<h6 class="mb-0 text-uppercase">Gradient Background Colors</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
					<div class="col">
						<div class="card bg-primary bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-white rounded">.bg-primary</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-secondary bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-white rounded">.bg-secondary</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-success bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-white rounded">.bg-success</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-danger bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-white rounded">.bg-danger.bg-gradient</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-warning bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-dark rounded">.bg-warning.bg-gradient</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-info bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-dark rounded">.bg-info.bg-gradient</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-light bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-dark rounded">.bg-light.bg-gradient</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-dark bg-gradient text-center">
							<div class="card-body">
								<div class="p-3 text-white rounded">.bg-dark.bg-gradient</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<h6 class="mb-0 text-uppercase">Text Colors</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-primary rounded">.text-primary</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-secondary rounded">.text-secondary</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-success rounded">.text-success</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-danger rounded">.text-danger</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-warning rounded">.text-warning</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-info rounded">.text-info</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center bg-dark">
							<div class="card-body">
								<div class="text-light rounded">.text-light</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card text-center">
							<div class="card-body">
								<div class="text-dark rounded">.text-dark</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<h6 class="mb-0 text-uppercase">Border Utilities</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="row row-cols-auto row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
							<div class="col">
								<div class="p-4 border text-center rounded bg-light">.border</div>
							</div>
							<div class="col">
								<div class="p-4 border-top text-center rounded bg-light">.border-top</div>
							</div>
							<div class="col">
								<div class="p-4 border-bottom text-center rounded bg-light">.border-bottom</div>
							</div>
							<div class="col">
								<div class="p-4 border-start text-center rounded bg-light">.border-start</div>
							</div>
							<div class="col">
								<div class="p-4 border-end text-center rounded bg-light">.border-end</div>
							</div>
							<div class="col">
								<div class="p-4 border-1 border text-center rounded bg-light">.border-1</div>
							</div>
							<div class="col">
								<div class="p-4 border-2 border text-center rounded bg-light">.border-2</div>
							</div>
							<div class="col">
								<div class="p-4 border-3 border text-center rounded bg-light">.border-3</div>
							</div>
							<div class="col">
								<div class="p-4 border-4 border text-center rounded bg-light">.border-4</div>
							</div>
							<div class="col">
								<div class="p-4 border-5 border text-center rounded bg-light">.border-5</div>
							</div>
							<div class="col">
								<div class="p-4 border border-3 border-primary text-center rounded bg-light">.border-primary</div>
							</div>
							<div class="col">
								<div class="p-4 border border-3 border-danger text-center rounded bg-light">.border-danger</div>
							</div>
							<div class="col">
								<div class="p-4 border border-3 border-success text-center rounded bg-light">.border-success</div>
							</div>
							<div class="col">
								<div class="p-4 border border-3 border-info text-center rounded bg-light">.border-info</div>
							</div>
							<div class="col">
								<div class="p-4 border border-3 border-warning text-center rounded bg-light">.border-warning</div>
							</div>
							<div class="col">
								<div class="p-4 border border-3 border-dark text-center rounded bg-light">.border-dark</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
				<h6 class="mb-0 text-uppercase">Border Radius</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="row row-cols-auto g-3 align-items-center">
							<div class="col">
								<img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded">
							</div>
							<div class="col">
								<img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded-top">
							</div>
							<div class="col">
								<img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded-bottom">
							</div>
							<div class="col">
								<img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded-start">
							</div>
							<div class="col">
								<img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded-end">
							</div>
							<div class="col">
								<img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded-circle">
							</div>
							<div class="col">
								<img src="http://via.placeholder.com/150x75" height="120" alt="..." class="img-fluid rounded-pill">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
				<h6 class="mb-0 text-uppercase">Shadows Examples</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="row row-cols-1 row-cols-lg-4 g-3 align-items-center">
							<div class="col">
								<div class="shadow-none p-4 rounded">No shadow</div>
							</div>
							<div class="col">
								<div class="shadow-sm p-4 rounded">Small shadow</div>
							</div>
							<div class="col">
								<div class="shadow p-4 rounded">Regular shadow</div>
							</div>
							<div class="col">
								<div class="shadow-lg p-4 rounded">Larger shadow</div>
							</div>
						</div>
						<!--end row-->
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