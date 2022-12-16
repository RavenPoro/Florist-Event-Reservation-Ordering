<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>BeTwin - Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
						<a class="nav-link" href="">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('design'); ?>">Designs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('booknow'); ?>">Book Now</a>
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
			
				<?php foreach($products as $row) : ?>
				<div class="col-lg-3">
					<div class="card">
						<!-- <form action="< ?= site_url('addtocart'.$row['id'])?>" method="post"> -->
						<div class="card-body text-center">
							<h5 class="cart-title"><?= $row['product_name'] ?></h5>
							<p class="card-text">
								<img src="<?= base_url("uploads/".$row['image'])?>" height="200px" width="200x">
							</p>

							<label><?= number_to_currency($row['price'], 'PHP', 'en-us', 2); ?></label><br>

							<p class="cartd-text"><?= $row['description'] ?></p>

							<button class="btn btn-success btn-sm cart"
							 data-id="<?= $row['id']?>"
							 data-product_name="<?= $row['product_name']?>"
							 data-price="<?= $row['price']?>" ><i class="fa fa-shopping-basket"></i> Add to cart</button>
						</div>
						<!-- </form> -->
					</div>
					<br>
				</div>
				<?php endforeach; ?>
			
			</div>
        </div>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- All Js -->

	<script>
		$(document).ready(function(){
			$(".cart").click(function(){
				var id = $(this).attr("data-id");
				var product_name = $(this).attr("data-product_name");
				var price = $(this).attr("data-price");
				$.ajax({
					type: "POST",
					url: "addtocart",
					data: {
						'id': id,
						'product_name': product_name,
						'price': price,
					},
					success:function(data){
						console.log(data);
					}
				});
			});
		});
	</script>

</body>
</html>

           