<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
</head>
<body>
    <div class="container mx-auto">
        <div class="col-md-6 m-auto p-5">
            <div class="card-header">
                <h1>Login</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/" method="post">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="checkbox">
                        <a href="<?php echo base_url() ?>/signup">Register</a>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>