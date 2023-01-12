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
						<a class="nav-link" href="#">Book Now</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('bookoverview'); ?>">Book Overview</a>
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
                        <h4>Book Now</h4>
						<hr>
                        <div class="card-body">

						<?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?= session()->getFlashdata('success'); ?></div>
                	<?php endif ?>
						<form action="<?= site_url('addbook'); ?>" method="POST">
                            <div class="row">
								
                                <div class="col-md-6">
									<div class="card-body">
										<div class="card-header">
											<h5 class="text-center">Upcoming Events</h5>
										</div>
										<div class="card-body">
											<table class="table table-info table-sm">
												<thead>
													<tr>
														<th>Event</th>
														<th>Date of Event</th>
														<th>Time Start</th>
														<th>Time End</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($booking as $row) : ?>
													<tr>
														<td><?= $row['category']?></td>
														<td><?= $row['date']?></td>
														<td><?= $row['start']?></td>
														<td><?= $row['end']?></td>
													</tr>
													<?php endforeach; ?>
												</tbody>
											</table>				
										</div>
									</div>
								</div>
								
								<div class="col-md-3">							
                                    <div class="form-group mb-2">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" class="form-control" placeholder="Enter Full Name" aria-label="Enter Full Name">
									</div>
									<div class="form-group mb-2">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" class="form-control" placeholder="Enter contact Number" aria-label="Enter contact Number">
									</div>
									<div class="form-group mb-2">
                                        <label>Email Address</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email Address" aria-label="Enter Email Address">
									</div>
						
									
									<!-- <div class="form-group mb-2">
										<label>Product & Design Packages</label>
										<select name="package" class="form-select" aria-label="Default select example">
											<option>Package 1</option>
											<option>Package 2</option>
											<option>Package 3</option>
										</select>
									</div> -->
									
                                </div>
                            
                                <div class="col-md-3">
									<div class="form-group mb-2">
										<label>Event Name</label>
										<select name="category" class="form-select" aria-label="Default select example">
											<option>Wedding</option>
											<option>Catering</option>
										</select>
									</div>
									<div class="form-group mb-2">
										<label>Location of Events</label>
										<input type="text" name="location" class="form-control" placeholder="Enter location" aria-label="Enter location">
									</div>

									<div class="form-group mb-2">
										<label>Event Date</label>
										<input type="date" name="date" class="form-control" placeholder="MM/DD/YY" aria-label="Enter location">
									</div>
									
									<div class="form-group mb-2">
										<label>Event Start</label>
										<input type="time" name="start" class="form-control" placeholder="00:00am - 00:00pm" aria-label="Enter location">
										<label>Event End</label>
										<input type="time" name="end" class="form-control" placeholder="00:00am - 00:00pm" aria-label="Enter location">
									</div>
									<div class="form-group mb-2">
										<input type="hidden" name="status" value="Pending">
									</div>
									
                                </div>
                                <div class="col-md-12">
								<hr>
                                    <button type="submit" class="btn btn-primary px-4 float-end">Book now</button>
                                </div>
                            </div>
                        </form>
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
