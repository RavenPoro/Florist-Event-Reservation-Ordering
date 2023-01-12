<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <!-- Bootstrap 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
</head>
<body>
    <div class="container mx-auto">
        <div class="col-md-6 m-auto p-5">
            <div class="card-header">
                <h1>Register</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php if(isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($Flash_message)) : ?>
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                Registered successfully!
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="/signup" method="POST">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" class="form-control" name="firstname" value="<?php set_value('firstname') ?>">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" class="form-control" name="lastname" value="<?php set_value('lastname') ?>">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="<?php set_value('email') ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="<?php set_value('password') ?>">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" value="<?php set_value('confirm_password') ?>">
                        </div>
                        <div class="checkbox">
                         <a href="<?php echo base_url() ?>/">Login</a>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>