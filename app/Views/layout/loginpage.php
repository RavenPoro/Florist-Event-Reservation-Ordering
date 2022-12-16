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
    <!---------------------------------- LOGIN FORM OF USER--------------------------------->
<section class="team section-padding">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header" style="background-color: #1f1f1f; color: #fff">
                <h4 class="text-warning text-center">Login Information</h4><hr>
                </div>
                <form action="<?= site_url('check') ?>" method="post" autocomplete="off">
                    <?php $validation = \Config\Services::validation(); ?>
                        <?= csrf_field(); ?>
                    <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <img src="<?= site_url('/img/s1.png'); ?>" width="250px" height="250px" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="floatingInput" value="<?= set_value('email') ?>" placeholder="email@example.com">
                                    <label for="floatingInput">Email address</label>
                                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="enter password">
                                    <label for="floatingPassword">Password</label>
                                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
                                </div>  
                                <hr>        
                                <div>
                                    <button type="submit" class="btn btn-outline-success mb-2">Login</button>
                                </div>
                                <div>
                                    <p>I don't have account.</p>
                                    <a href="<?= site_url('register') ?>" class="btn btn-outline-warning">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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