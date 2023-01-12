<?php
$data = session()->get();
?>

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
            <div class="card">
                <div class="card-body">
                    <p>Welcome | <a href="">Logout</a></p>
                </div>

                <div class="container">
                    <h2>User Data</h2>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($userdata as $row) : ?>
                            <tr>
                                <td><?= $row['firstname'] ?></td>
                                <td><?= $row['lastname'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><a href="<?php echo base_url() ?>/edituser/<?= $row['admin_id'] ?>">Edit</a> | <a href="">Delete</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>