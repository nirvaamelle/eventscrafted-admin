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
	<link href="assets/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
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
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Wizard</li>
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
				
<!--start stepper one--> 
			   
<h6 class="text-uppercase">Non Linear</h6>
<hr>
<div id="stepper1" class="bs-stepper">
  <div class="card">
	
	<div class="card-header">
		<div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
			<div class="step" data-target="#test-l-1">
			  <div class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
				<div class="bs-stepper-circle">1</div>
				<div class="">
					<h5 class="mb-0 steper-title">Personal Info</h5>
					<p class="mb-0 steper-sub-title">Enter Your Details</p>
				</div>
			  </div>
			</div>
			<div class="bs-stepper-line"></div>
			<div class="step" data-target="#test-l-2">
				<div class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
				  <div class="bs-stepper-circle">2</div>
				  <div class="">
					  <h5 class="mb-0 steper-title">Account Details</h5>
					  <p class="mb-0 steper-sub-title">Setup Account Details</p>
				  </div>
				</div>
			  </div>
			<div class="bs-stepper-line"></div>
			<div class="step" data-target="#test-l-3">
				<div class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
				  <div class="bs-stepper-circle">3</div>
				  <div class="">
					  <h5 class="mb-0 steper-title">Education</h5>
					  <p class="mb-0 steper-sub-title">Education Details</p>
				  </div>
				</div>
			  </div>
			  <div class="bs-stepper-line"></div>
				<div class="step" data-target="#test-l-4">
					<div class="step-trigger" role="tab" id="stepper1trigger4" aria-controls="test-l-4">
					<div class="bs-stepper-circle">4</div>
					<div class="">
						<h5 class="mb-0 steper-title">Work Experience</h5>
						<p class="mb-0 steper-sub-title">Experience Details</p>
					</div>
					</div>
				</div>
		  </div>
	</div>
	<div class="card-body">
	
	  <div class="bs-stepper-content">
		<form onSubmit="return false">
		  <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
			<h5 class="mb-1">Your Personal Information</h5>
			<p class="mb-4">Enter your personal information to get closer to copanies</p>

			<div class="row g-3">
				<div class="col-12 col-lg-6">
					<label for="FisrtName" class="form-label">First Name</label>
					<input type="text" class="form-control" id="FisrtName" placeholder="First Name">
				</div>
				<div class="col-12 col-lg-6">
					<label for="LastName" class="form-label">Last Name</label>
					<input type="text" class="form-control" id="LastName" placeholder="Last Name">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Phone Number</label>
					<input type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number">
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputEmail" class="form-label">E-mail Address</label>
					<input type="text" class="form-control" id="InputEmail" placeholder="Enter Email Address">
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputCountry" class="form-label">Country</label>
					<select class="form-select" id="InputCountry" aria-label="Default select example">
						<option selected>---</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					  </select>
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputLanguage" class="form-label">Language</label>
					<select class="form-select" id="InputLanguage" aria-label="Default select example">
						<option selected>---</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					  </select>
				</div>
				<div class="col-12 col-lg-6">
					<button class="btn btn-light px-4" onclick="stepper1.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
				</div>
			</div><!---end row-->
			
		  </div>

		  <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

			<h5 class="mb-1">Account Details</h5>
			<p class="mb-4">Enter Your Account Details.</p>

			<div class="row g-3">
				<div class="col-12 col-lg-6">
					<label for="InputUsername" class="form-label">Username</label>
					<input type="text" class="form-control" id="InputUsername" placeholder="jhon@123">
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputEmail2" class="form-label">E-mail Address</label>
					<input type="text" class="form-control" id="InputEmail2" placeholder="example@xyz.com">
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputPassword" class="form-label">Password</label>
					<input type="password" class="form-control" id="InputPassword" value="12345678">
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputConfirmPassword" class="form-label">Confirm Password</label>
					<input type="password" class="form-control" id="InputConfirmPassword" value="12345678">
				</div>
				<div class="col-12">
					<div class="d-flex align-items-center gap-3">
						<button class="btn btn-outline-light px-4" onclick="stepper1.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						<button class="btn btn-light px-4" onclick="stepper1.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					</div>
				</div>
			</div><!---end row-->
			
		  </div>

		  <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
			<h5 class="mb-1">Your Education Information</h5>
			<p class="mb-4">Inform companies about your education life</p>

			<div class="row g-3">
				<div class="col-12 col-lg-6">
					<label for="SchoolName" class="form-label">School Name</label>
					<input type="text" class="form-control" id="SchoolName" placeholder="School Name">
				</div>
				<div class="col-12 col-lg-6">
					<label for="BoardName" class="form-label">Board Name</label>
					<input type="text" class="form-control" id="BoardName" placeholder="Board Name">
				</div>
				<div class="col-12 col-lg-6">
					<label for="UniversityName" class="form-label">University Name</label>
					<input type="text" class="form-control" id="UniversityName" placeholder="University Name">
				</div>
				<div class="col-12 col-lg-6">
					<label for="InputCountry" class="form-label">Course Name</label>
					<select class="form-select" id="InputCountry" aria-label="Default select example">
						<option selected>---</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					  </select>
				</div>
				<div class="col-12">
					<div class="d-flex align-items-center gap-3">
						<button class="btn btn-outline-light px-4" onclick="stepper1.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						<button class="btn btn-light px-4" onclick="stepper1.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					</div>
				</div>
			</div><!---end row-->
			
		  </div>

		  <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
			<h5 class="mb-1">Work Experiences</h5>
			<p class="mb-4">Can you talk about your past work experience?</p>

			<div class="row g-3">
				<div class="col-12 col-lg-6">
					<label for="Experience1" class="form-label">Experience 1</label>
					<input type="text" class="form-control" id="Experience1" placeholder="Experience 1">
				</div>
				<div class="col-12 col-lg-6">
					<label for="Position1" class="form-label">Position</label>
					<input type="text" class="form-control" id="Position1" placeholder="Position">
				</div>
				<div class="col-12 col-lg-6">
					<label for="Experience2" class="form-label">Experience 2</label>
					<input type="text" class="form-control" id="Experience2" placeholder="Experience 2">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Position</label>
					<input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				</div>
				<div class="col-12 col-lg-6">
					<label for="Experience3" class="form-label">Experience 3</label>
					<input type="text" class="form-control" id="Experience3" placeholder="Experience 3">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Position</label>
					<input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				</div>
				<div class="col-12">
					<div class="d-flex align-items-center gap-3">
						<button class="btn btn-light px-4" onclick="stepper1.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						<button class="btn btn-light px-4" onclick="stepper1.next()">Submit</button>
					</div>
				</div>
			</div><!---end row-->
			
		  </div>
		</form>
	  </div>
	   
	</div>
   </div>
 </div>
<!--end stepper one--> 


<!--start stepper two--> 
<h6 class="text-uppercase">Linear Stepper</h6>
<hr>
<div id="stepper2" class="bs-stepper">
	<div class="card">
	  
	  <div class="card-header">
		  <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
			  <div class="step" data-target="#test-nl-1">
				<div class="step-trigger" role="tab" id="stepper2trigger1" aria-controls="test-nl-1">
				  <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
				  <div class="">
					  <h5 class="mb-0 steper-title">Personal Info</h5>
					  <p class="mb-0 steper-sub-title">Enter Your Details</p>
				  </div>
				</div>
			  </div>
			  <div class="bs-stepper-line"></div>
			  <div class="step" data-target="#test-nl-2">
				  <div class="step-trigger" role="tab" id="stepper2trigger2" aria-controls="test-nl-2">
					<div class="bs-stepper-circle"><i class='bx bx-file fs-4'></i></div>
					<div class="">
						<h5 class="mb-0 steper-title">Account Details</h5>
						<p class="mb-0 steper-sub-title">Setup Account Details</p>
					</div>
				  </div>
				</div>
			  <div class="bs-stepper-line"></div>
			  <div class="step" data-target="#test-nl-3">
				  <div class="step-trigger" role="tab" id="stepper2trigger3" aria-controls="test-nl-3">
					<div class="bs-stepper-circle"><i class='bx bxs-graduation fs-4'></i></div>
					<div class="">
						<h5 class="mb-0 steper-title">Education</h5>
						<p class="mb-0 steper-sub-title">Education Details</p>
					</div>
				  </div>
				</div>
				<div class="bs-stepper-line"></div>
				  <div class="step" data-target="#test-nl-4">
					  <div class="step-trigger" role="tab" id="stepper2trigger4" aria-controls="test-nl-4">
					  <div class="bs-stepper-circle"><i class='bx bx-briefcase fs-4'></i></div>
					  <div class="">
						  <h5 class="mb-0 steper-title">Work Experience</h5>
						  <p class="mb-0 steper-sub-title">Experience Details</p>
					  </div>
					  </div>
				  </div>
			</div>
	  </div>
	  <div class="card-body">
	  
		<div class="bs-stepper-content">
		  <form onSubmit="return false">
			<div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
			  <h5 class="mb-1">Your Personal Information</h5>
			  <p class="mb-4">Enter your personal information to get closer to copanies</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="FisrtName" class="form-label">First Name</label>
					  <input type="text" class="form-control" id="FisrtName" placeholder="First Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="LastName" class="form-label">Last Name</label>
					  <input type="text" class="form-control" id="LastName" placeholder="Last Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Phone Number</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputEmail" class="form-label">E-mail Address</label>
					  <input type="text" class="form-control" id="InputEmail" placeholder="Enter Email Address">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputCountry" class="form-label">Country</label>
					  <select class="form-select" id="InputCountry" aria-label="Default select example">
						  <option selected>---</option>
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option value="3">Three</option>
						</select>
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputLanguage" class="form-label">Language</label>
					  <select class="form-select" id="InputLanguage" aria-label="Default select example">
						  <option selected>---</option>
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option value="3">Three</option>
						</select>
				  </div>
				  <div class="col-12 col-lg-6">
					  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

			  <h5 class="mb-1">Account Details</h5>
			  <p class="mb-4">Enter Your Account Details.</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="InputUsername" class="form-label">Username</label>
					  <input type="text" class="form-control" id="InputUsername" placeholder="jhon@123">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputEmail2" class="form-label">E-mail Address</label>
					  <input type="text" class="form-control" id="InputEmail2" placeholder="example@xyz.com">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputPassword" class="form-label">Password</label>
					  <input type="password" class="form-control" id="InputPassword" value="12345678">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
					  <input type="password" class="form-control" id="InputConfirmPassword" value="12345678">
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger3">
			  <h5 class="mb-1">Your Education Information</h5>
			  <p class="mb-4">Inform companies about your education life</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="SchoolName" class="form-label">School Name</label>
					  <input type="text" class="form-control" id="SchoolName" placeholder="School Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="BoardName" class="form-label">Board Name</label>
					  <input type="text" class="form-control" id="BoardName" placeholder="Board Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="UniversityName" class="form-label">University Name</label>
					  <input type="text" class="form-control" id="UniversityName" placeholder="University Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputCountry" class="form-label">Course Name</label>
					  <select class="form-select" id="InputCountry" aria-label="Default select example">
						  <option selected>---</option>
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option value="3">Three</option>
						</select>
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger4">
			  <h5 class="mb-1">Work Experiences</h5>
			  <p class="mb-4">Can you talk about your past work experience?</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="Experience1" class="form-label">Experience 1</label>
					  <input type="text" class="form-control" id="Experience1" placeholder="Experience 1">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Position1" class="form-label">Position</label>
					  <input type="text" class="form-control" id="Position1" placeholder="Position">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience2" class="form-label">Experience 2</label>
					  <input type="text" class="form-control" id="Experience2" placeholder="Experience 2">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Position</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience3" class="form-label">Experience 3</label>
					  <input type="text" class="form-control" id="Experience3" placeholder="Experience 3">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Position</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-white px-4" onclick="stepper2.next()">Submit</button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>
		  </form>
		</div>
		 
	  </div>
	 </div>
   </div>
  <!--end stepper two--> 


<!--start stepper three--> 
	<h6 class="text-uppercase">Non Linear Vertical</h6>
	<hr>
	<div class="card">
		<div class="card-body">
			<div id="stepper3" class="bs-stepper gap-4 vertical">
				<div class="bs-stepper-header" role="tablist">
					<div class="step" data-target="#test-vl-1">
					  <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
						<div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
						<div class="">
							<h5 class="mb-0 steper-title">Personal Info</h5>
							<p class="mb-0 steper-sub-title">Enter Your Details</p>
						</div>
					  </div>
					</div>
				
					<div class="step" data-target="#test-vl-2">
						<div class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-vl-2">
						  <div class="bs-stepper-circle"><i class='bx bx-file fs-4'></i></div>
						  <div class="">
							  <h5 class="mb-0 steper-title">Account Details</h5>
							  <p class="mb-0 steper-sub-title">Setup Account Details</p>
						  </div>
						</div>
					</div>
				
					<div class="step" data-target="#test-vl-3">
						<div class="step-trigger" role="tab" id="stepper3trigger3" aria-controls="test-vl-3">
						  <div class="bs-stepper-circle"><i class='bx bxs-graduation fs-4'></i></div>
						  <div class="">
							  <h5 class="mb-0 steper-title">Education</h5>
							  <p class="mb-0 steper-sub-title">Education Details</p>
						  </div>
						</div>
					  </div>
					
						<div class="step" data-target="#test-vl-4">
							<div class="step-trigger" role="tab" id="stepper3trigger4" aria-controls="test-vl-4">
							<div class="bs-stepper-circle"><i class='bx bx-briefcase fs-4'></i></div>
							<div class="">
								<h5 class="mb-0 steper-title">Work Experience</h5>
								<p class="mb-0 steper-sub-title">Experience Details</p>
							</div>
							</div>
						</div>
				   </div>

				   <div class="bs-stepper-content">
					<form onSubmit="return false">
					  <div id="test-vl-1" role="tabpane3" class="bs-stepper-pane content fade" aria-labelledby="stepper3trigger1">
						<h5 class="mb-1">Your Personal Information</h5>
						<p class="mb-4">Enter your personal information to get closer to copanies</p>

						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="FisrtName" class="form-label">First Name</label>
								<input type="text" class="form-control" id="FisrtName" placeholder="First Name">
							</div>
							<div class="col-12 col-lg-6">
								<label for="LastName" class="form-label">Last Name</label>
								<input type="text" class="form-control" id="LastName" placeholder="Last Name">
							</div>
							<div class="col-12 col-lg-6">
								<label for="PhoneNumber" class="form-label">Phone Number</label>
								<input type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputEmail" class="form-label">E-mail Address</label>
								<input type="text" class="form-control" id="InputEmail" placeholder="Enter Email Address">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputCountry" class="form-label">Country</label>
								<select class="form-select" id="InputCountry" aria-label="Default select example">
									<option selected>---</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select>
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputLanguage" class="form-label">Language</label>
								<select class="form-select" id="InputLanguage" aria-label="Default select example">
									<option selected>---</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select>
							</div>
							<div class="col-12 col-lg-6">
								<button class="btn btn-light px-4" onclick="stepper3.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
							</div>
						</div><!---end row-->
						
					  </div>

					  <div id="test-vl-2" role="tabpane3" class="bs-stepper-pane content fade" aria-labelledby="stepper3trigger2">

						<h5 class="mb-1">Account Details</h5>
						<p class="mb-4">Enter Your Account Details.</p>

						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="InputUsername" class="form-label">Username</label>
								<input type="text" class="form-control" id="InputUsername" placeholder="jhon@123">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputEmail2" class="form-label">E-mail Address</label>
								<input type="text" class="form-control" id="InputEmail2" placeholder="example@xyz.com">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputPassword" class="form-label">Password</label>
								<input type="password" class="form-control" id="InputPassword" value="12345678">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputConfirmPassword" class="form-label">Confirm Password</label>
								<input type="password" class="form-control" id="InputConfirmPassword" value="12345678">
							</div>
							<div class="col-12">
								<div class="d-flex align-items-center gap-3">
									<button class="btn btn-outline-light px-4" onclick="stepper3.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
									<button class="btn btn-light px-4" onclick="stepper3.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
								</div>
							</div>
						</div><!---end row-->
						
					  </div>

					  <div id="test-vl-3" role="tabpane3" class="bs-stepper-pane content fade" aria-labelledby="stepper3trigger3">
						<h5 class="mb-1">Your Education Information</h5>
						<p class="mb-4">Inform companies about your education life</p>

						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="SchoolName" class="form-label">School Name</label>
								<input type="text" class="form-control" id="SchoolName" placeholder="School Name">
							</div>
							<div class="col-12 col-lg-6">
								<label for="BoardName" class="form-label">Board Name</label>
								<input type="text" class="form-control" id="BoardName" placeholder="Board Name">
							</div>
							<div class="col-12 col-lg-6">
								<label for="UniversityName" class="form-label">University Name</label>
								<input type="text" class="form-control" id="UniversityName" placeholder="University Name">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputCountry" class="form-label">Course Name</label>
								<select class="form-select" id="InputCountry" aria-label="Default select example">
									<option selected>---</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select>
							</div>
							<div class="col-12">
								<div class="d-flex align-items-center gap-3">
									<button class="btn btn-outline-light px-4" onclick="stepper3.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
									<button class="btn btn-light px-4" onclick="stepper3.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
								</div>
							</div>
						</div><!---end row-->
						
					  </div>

					  <div id="test-vl-4" role="tabpane3" class="bs-stepper-pane content fade" aria-labelledby="stepper3trigger4">
						<h5 class="mb-1">Work Experiences</h5>
						<p class="mb-4">Can you talk about your past work experience?</p>

						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Experience1" class="form-label">Experience 1</label>
								<input type="text" class="form-control" id="Experience1" placeholder="Experience 1">
							</div>
							<div class="col-12 col-lg-6">
								<label for="Position1" class="form-label">Position</label>
								<input type="text" class="form-control" id="Position1" placeholder="Position">
							</div>
							<div class="col-12 col-lg-6">
								<label for="Experience2" class="form-label">Experience 2</label>
								<input type="text" class="form-control" id="Experience2" placeholder="Experience 2">
							</div>
							<div class="col-12 col-lg-6">
								<label for="PhoneNumber" class="form-label">Position</label>
								<input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
							</div>
							<div class="col-12 col-lg-6">
								<label for="Experience3" class="form-label">Experience 3</label>
								<input type="text" class="form-control" id="Experience3" placeholder="Experience 3">
							</div>
							<div class="col-12 col-lg-6">
								<label for="PhoneNumber" class="form-label">Position</label>
								<input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
							</div>
							<div class="col-12">
								<div class="d-flex align-items-center gap-3">
									<button class="btn btn-light px-4" onclick="stepper3.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
									<button class="btn btn-white px-4" onclick="stepper3.next()">Submit</button>
								</div>
							</div>
						</div><!---end row-->
						
					  </div>
					</form>
				  </div>
			   </div>
		</div>
	</div>
  <!--end stepper three--> 


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
	<script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<script src="assets/plugins/bs-stepper/js/main.js"></script>
	
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>