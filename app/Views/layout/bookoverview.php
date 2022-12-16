<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>BeTwin - Home</title>
	<!-- All CSS -->
	<link href="<?php echo site_url('assets/'); ?>css/styles.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/css/style.css" rel="stylesheet">
</head>
<body>

	<!---------------------------------- LANDING PAGE OF USER AFTER LOGGED IN --------------------------------->

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url('design'); ?>"><span class="text-warning">Be</span>Twin</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('products'); ?>">Products</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="<?= site_url('design'); ?>">Designs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('booknow'); ?>">Book Now</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Book Overview</a>
					</li>
                    <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-shopping-cart"></i></a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li>
								<a href="#" class="dropdown-item dropdown-footer">View Cart</a>
								</li>
						</ul>
                	</li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" data-title="Logged Out" href="<?php echo site_url(''); ?>">Logout</a></li>
                    </ul>
                	</li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Book Overview</h4>
						<hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="text-center">
                                <h5>BeTwin Reservation and Ordering Platform</h5>
                                <p>Calapan City, Jp. Rizal St. beside Halina Bakery</p>
                                <p>Mobile Number: 0968 626 5272</p>
                                <p>Facebook Page: Bituin's Flower Accessories Shop</p><hr>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p><strong>Full Name:</strong></p>
                                        <p><strong>Contact Number:</strong></p>
                                        <p><strong>Email Address:</strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p><strong>Status:</strong></p>
                                        <p><strong>Event Name:</strong></p>
                                        <p><strong>Event Date:</strong></p>
                                        <p><strong>Time Start:</strong></p>
                                        <p><strong>Time End:</strong></p>
                                        <p><strong>Location:</strong></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- All Js -->
	<script src="js/bootstrap.bundle.min.js"></script> 


</body>
</html>
