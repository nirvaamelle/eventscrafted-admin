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
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Validations</li>
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
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 border-bottom">
								<h5 class="mb-0">Bootstrap Validation</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">First Name</label>
										<input type="text" class="form-control" id="bsValidation1" placeholder="First Name" value="Jhon" required>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="bsValidation2" placeholder="Last Name" value="Deo" required>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Phone</label>
										<input type="text" class="form-control" id="bsValidation3" placeholder="Phone" required>
										<div class="invalid-feedback">
											Please choose a username.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Email</label>
										<input type="email" class="form-control" id="bsValidation4" placeholder="Email" required>
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation5" class="form-label">Password</label>
										<input type="password" class="form-control" id="bsValidation5" placeholder="Password" required>
										<div class="invalid-feedback">
											Please choose a password.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation6" name="radio-stacked" required>
												<label class="form-check-label" for="bsValidation6">Male</label>
											  </div>
											  <div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation7" name="radio-stacked" required>
												<label class="form-check-label" for="bsValidation7">Female</label>
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation8" class="form-label">DOB</label>
										<input type="date" class="form-control" id="bsValidation8" placeholder="Date of Birth" required>
										<div class="invalid-feedback">
											Please select date.
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Country</label>
										<select id="bsValidation9" class="form-select" required>
											<option selected disabled value>...</option>
											<option>One</option>
											<option>Two</option>
											<option>Three</option>
										</select>
										<div class="invalid-feedback">
										   Please select a valid country.
										</div>
									</div>
									
									<div class="col-md-6">
										<label for="bsValidation10" class="form-label">City</label>
										<input type="text" class="form-control" id="bsValidation10" placeholder="City" required>
										<div class="invalid-feedback">
											Please provide a valid city.
										</div>
									</div>
									<div class="col-md-4">
										<label for="bsValidation11" class="form-label">State</label>
										<select id="bsValidation11" class="form-select" required>
											<option selected disabled value>Choose...</option>
											<option>One</option>
											<option>Two</option>
											<option>Three</option>
										</select>
										<div class="invalid-feedback">
											Please select a valid State.
										 </div>
									</div>
									<div class="col-md-2">
										<label for="bsValidation12" class="form-label">Zip</label>
										<input type="text" class="form-control" id="bsValidation12" placeholder="Zip" required>
										<div class="invalid-feedback">
											Please enter a valid Zip code.
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea class="form-control" id="bsValidation13" placeholder="Address ..." rows="3" required></textarea>
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="bsValidation14" required>
											<label class="form-check-label" for="bsValidation14">Agree to terms and conditions</label>
											<div class="invalid-feedback">
												You must agree before submitting.
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-white px-4">Submit</button>
											<button type="reset" class="btn btn-light px-4">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

				<div class="row">
                    <div class="col-lg-8 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 border-bottom">
								<h5 class="mb-0">jQuery Validation</h5>
							</div>
							<div class="card-body p-4">
								<form id="jQueryValidationForm" method="post3" action="">
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input35" name="yourname" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input36" class="col-sm-3 col-form-label">Phone No</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input36" name="phone" placeholder="Phone No">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input37" name="username" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Email Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="input37" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Choose Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="input38" name="password" placeholder="Choose Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Confirm Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="input38" name="confirm_password" placeholder="Confirm Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input39" class="col-sm-3 col-form-label">Select Country</label>
										<div class="col-sm-9">
											<select class="form-select" id="input39" name="country">
												<option selected disabled value>Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											  </select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input40" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="input40" name="address" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="input41" name="agree">
												<label class="form-check-label" for="input41">Check me out</label>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-white px-4" name="submit2">Submit</button>
												<button type="reset" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
								</form>

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
	<script src="assets/plugins/validation/jquery.validate.min.js"></script>
	<script src="assets/plugins/validation/validation-script.js"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>