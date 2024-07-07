<?php include ('functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet"/>
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
								<li class="breadcrumb-item active" aria-current="page">Navs & Tabs</li>
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
				<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col">
						<h6 class="mb-0 text-uppercase">Primary Nav Tabs</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="primaryprofile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="primarycontact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Danger Nav Tabs</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#dangerhome" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#dangerprofile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#dangercontact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="dangerhome" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="dangerprofile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="dangercontact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Success Nav Tabs</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#successhome" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#successprofile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#successcontact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="successhome" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="successprofile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="successcontact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Warning Nav Tabs</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#warninghome" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#warningprofile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#warningcontact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="warninghome" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="warningprofile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="warningcontact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Primary Nav Pills</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-pills mb-3" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#primary-pills-contact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="primary-pills-home" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="primary-pills-contact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Danger Nav Pills</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-pills mb-3" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="pill" href="#danger-pills-home" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#danger-pills-profile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#danger-pills-contact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content" id="danger-pills-tabContent">
									<div class="tab-pane fade show active" id="danger-pills-home" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="danger-pills-profile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="danger-pills-contact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Success Nav Pills</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-pills mb-3" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="pill" href="#success-pills-home" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#success-pills-profile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#success-pills-contact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="success-pills-profile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="success-pills-contact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h6 class="mb-0 text-uppercase">Warning Nav Pills</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-pills mb-3" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="pill" href="#warning-pills-home" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
												</div>
												<div class="tab-title">Home</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#warning-pills-profile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
												</div>
												<div class="tab-title">Profile</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#warning-pills-contact" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
												</div>
												<div class="tab-title">Contact</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="warning-pills-home" role="tabpanel">
										<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
									</div>
									<div class="tab-pane fade" id="warning-pills-profile" role="tabpanel">
										<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									</div>
									<div class="tab-pane fade" id="warning-pills-contact" role="tabpanel">
										<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				
				 <h6 class="mb-0 text-uppercase">Vertical Nav Pills</h6>
			     <hr/>
				 <div class="card">
				    <div class="card-body">
					   <div class="d-flex align-items-start">
						  <div class="nav flex-column nav-pills me-3 vertical-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
							<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
							<button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
							<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
						  </div>
						  <div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
							    <p class="mb-0">w denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
							</div>
							<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
							     <p class="mb-0">w denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
							  <p class="mb-0">w denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
							</div>
							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
							   <p class="mb-0">w denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
							</div>
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