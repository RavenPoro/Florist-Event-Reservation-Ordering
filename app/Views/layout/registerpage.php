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

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url(''); ?>"><span class="text-warning">Be</span>Twin</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url(''); ?>">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <!---------------------------------- REGISTER FORM OF USER --------------------------------->
<section class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-11 mt-5">
                <div class="card">
                    <div class="card-header"  style="background-color: #1f1f1f; color: #fff">
                        <h4 class="text-warning">Register your account</h4><hr>
                    </div>
                    <div class="card-body">                                            
                        <form action="<?= site_url('create'); ?>" method="POST" autocomplete="off">
                                <?php $validation = \Config\Services::validation(); ?>

                                <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <?= session()->getFlashdata('fail'); ?></div>
                                <?php endif ?>

                                <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <?= session()->getFlashdata('success'); ?></div>
                                <?php endif ?>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <img src="<?= site_url('/img/s3.png'); ?>" width="350px" height="320px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4>User Information</h4>
                                    <div class="form-floating mb-2">
                                        <input type="text" name="firstname" class="form-control" value="<?= set_value('firstname') ?>" id="floatingInput" placeholder="enter your name">
                                        <label for="floatingInput">First Name</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'firstname') : '' ?></small>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" name="lastname" class="form-control" value="<?= set_value('lastname') ?>" id="floatingInput" placeholder="Enter your lastname">
                                        <label for="floatingInput">Last Name</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'lastname') : '' ?></small>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" name="age" class="form-control"  value="<?= set_value('age') ?>" id="floatingInput" placeholder="Enter your age">
                                        <label for="floatingInput">Age</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'age') : '' ?></small>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" name="address" class="form-control" value="<?= set_value('address') ?>" id="floatingInput" placeholder="Enter your address">
                                        <label for="floatingInput">Address</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'address') : '' ?></small>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="contact" class="form-control" value="<?= set_value('contact') ?>" id="floatingInput" placeholder="Enter your contact number">
                                        <label for="floatingInput">Contact Number</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'contact') : '' ?></small>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4>Account Information</h4>
                                    <div class="form-floating mb-2">
                                        <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>" id="floatingInput" placeholder="Enter your username">
                                        <label for="floatingInput">Username</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></small>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>" id="floatingInput" placeholder="Enter your email address">
                                        <label for="floatingInput">Email Address</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>" id="floatingInput" placeholder="Enter new password">
                                        <label for="floatingInput">Password</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
                                    </div>
                                    <div class="form-floating mb-2">    
                                        <input type="password" name="confirmpassword" class="form-control" value="<?= set_value('confirmpassword') ?>" id="floatingInput" placeholder="Confirm your password">
                                        <label for="floatingInput">Confirm Password</label>
                                        <small class="text-danger"><?= isset($validation) ? display_error($validation, 'confirmpassword') : '' ?></small>
                                    </div>
                                    <hr>
                                    <div>
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <div>

                                    <div class="mt-2">
                                        <p>I already have an account.&nbsp;&nbsp;
                                        <a href="<?= site_url('login') ?>" class="btn btn-outline-warning">Sign in</a></p>
                                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
