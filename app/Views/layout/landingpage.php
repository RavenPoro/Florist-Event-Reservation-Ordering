<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>BeTwin - Home</title>
	<!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/css/style.css" rel="stylesheet">
</head>
<body>
	<!------------------------------------------------------------------------------------------>
	<!---------------------------------- LANDING PAGE OF SYSTEM --------------------------------->
	<!------------------------------------------------------------------------------------------>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url(''); ?>"><span class="text-warning">Be</span>Twin</a>
			<button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
			class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
			<span class="navbar-toggler-icon"></span></button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url(''); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
					<li class="nav-item" id="log">
						<a class="nav-link" href="<?php echo site_url('admin'); ?>">Admin</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="log" href="<?php echo site_url('login'); ?>">Login</a>
					</li>
                    
                    
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="img/p2.jpg">
				<div class="carousel-caption">
					<h5>BeTwin</h5>
					<p>An Online Reservation Software with Ordering on Mobile</p>
					<p><a class="gethome" href="#">Get Started</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/p3.jpg">
				<div class="carousel-caption">
					<h5>Your Dream Wedding</h5>
					<p>"More than anything, wedding dreams are about the need to commit to something and stick to it in real life,"</p>
					<p><a class="gethome" href="#">Get Started</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/p4.jpg">
				<div class="carousel-caption">
					<h5>Simplified Reservation</h5>
					<p>Very simply, an event reservation system is any software suite designed to help you schedule, manage, and run events.</p>
					<p><a class="gethome" href="#">Get Started</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
	
	<!----------------------------------- about section starts ----------------------------------->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="img/a1.jpg"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>We deserve once in a lifetime experience<br></h2>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. 
							Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, 
							explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, 
							ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
						<a class="gethome1" href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!----------------------------------- about section Ends ----------------------------------->

	<!----------------------------------- services section Starts ----------------------------------->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Services</h2>
						<p>BeTwin perform good services and leave a satisfaction</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-laptop"></i>
							<h3 class="card-title">On Schedule</h3>
							<p class="lead">Job is done in a well planned and expected agreed time right before the occurences. <br>&nbsp;</p>
							<button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-journal"></i>
							<h3 class="card-title">Good Pricing</h3>
							<p class="lead">Business is always there between the value offers to owner and customers.&nbsp;&nbsp;&nbsp;<br>&nbsp;</p>
							<button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-intersect"></i>
							<h3 class="card-title">Satisfaction</h3>
							<p class="lead">Offer a good services that makes our customer a satisfied experience of their expected wedding.&nbsp;<br>&nbsp;&nbsp;</p>
							<button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!----------------------------------- services section Ends ----------------------------------->

	<!----------------------------------- portfolio strats ----------------------------------->
	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Sample Wedding Designs</h2>
						<p>Get Start with Customization and Picked designs </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project1.jpg"></div>
                            <button class="getbody">View More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project2.jpg"></div>
                            <button class="getbody">View More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project3.jpg"></div>
                            <button class="getbody">View More</button>
						</div>
					</div>
				</div>
                <div class="row mt-5">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Sample Bouqet Designs</h2>
						<p>Get start with your desired designs</p>
					</div>
				</div>
			    </div>
                <div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project4.jpg"></div>
                            <button class="getbody">View More</button>
						</div>
					</div>
				</div>
                <div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project5.jpg"></div>
                            <button class="getbody">View More</button>
						</div>
					</div>
				</div>
                <div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project6.jpg"></div>
                            <button class="getbody">View More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--------------------- portfolio ends ---------------------->

	<!---------------------- team starts ------------------------>
	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Team</h2>
						<p>.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/team1.png">
							<h3 class="card-title py-2">John Raven Poro</h3>
							<p class="card-text">MinSU BSIT Student<br>System Developer<br>Future Web Developer</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/team2.jpg">
							<h3 class="card-title py-2">Carlos Bernales Jr.</h3>
							<p class="card-text">MinSU BSIT Student<br>System Developer<br>Future IT Technician</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/team3.png">
							<h3 class="card-title py-2">Jefferson Cusi</h3>
							<p class="card-text">MinSU BSIT Student<br>System Developer<br>Future IT</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/team4.png">
							<h3 class="card-title py-2">Erwin Gonio</h3>
							<p class="card-text">MinSU BSIT Student<br>System Developer<br>Future IT</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------- team ends--------------------------------------------->


	<!--------------------------------- Contact starts ------------------------------->
	<section class="contact section-padding" id="contact">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Contact Us</h2>
						<p>Facebook Page<br>
					BeTwin<br><br>Contact Number<br>
					091234657890<br><br>Email Address<br>BeTwinSoftware@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
				</div>
			</div>
		</div>
	</section>
	<!---------------------------------- contact ends ----------------------------------->


	<!----------------------------------- footer starts ----------------------------------->
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved By @BeTwin</p>
		</div>
	</footer>
	<!----------------------------------- footer ends ----------------------------------->
	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- All Js -->
	<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>
