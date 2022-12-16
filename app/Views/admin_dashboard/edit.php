<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

    <!------------------- EDIT OF CRUD FUNCTION ---------------->

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Edit Data
                        <a href="<?= site_url('users') ?>" class="btn btn-danger float-end">Back</a>  
                        </h4>   
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('update'.$register['id']) ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                            <label>Firstname</label>
                                            <input type="text" name="firstname" value="<?= $register['firstname'] ?>" class="form-control" placeholder="Enter your firstname">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Lastname</label>
                                            <input type="text" name="lastname" value="<?= $register['lastname'] ?>" class="form-control" placeholder="Enter your lastname">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Age</label>
                                            <input type="text" name="age" value="<?= $register['age'] ?>" class="form-control" placeholder="Enter your age">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Address</label>
                                            <input type="text" name="address" value="<?= $register['address'] ?>" class="form-control" placeholder="Enter your address">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Contact</label>
                                            <input type="text" name="contact" value="<?= $register['contact'] ?>" class="form-control" placeholder="Enter your contact">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Username</label>
                                            <input type="text" name="username" value="<?= $register['username'] ?>" class="form-control" placeholder="Enter your username">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Email Address</label>
                                            <input type="text" name="email" value="<?= $register['email'] ?>" class="form-control" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary px-4 mt-2">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?= $this->endSection() ?>