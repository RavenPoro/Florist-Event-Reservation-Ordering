<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Edit Reservation Data
                        <a href="<?= site_url('reservation'); ?>" class="btn btn-danger px-4 float-end">Back</a></h4>
                    </div>
                        <div class="card-body">

                            <form action="<?= site_url('reservation/update/'.$booking['id']) ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" value="<?= $booking['fullname'] ?>" class="form-control" placeholder="Enter Full Name" readonly>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" value="<?= $booking['contact'] ?>" class="form-control" placeholder="Enter Contact Number" readonly>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email Address</label>
                                        <input type="text" name="email" value="<?= $booking['email'] ?>" class="form-control" placeholder="Enter Email Address" readonly>
                                    <br><hr>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" value="<?= $booking['status'] ?>" class="form-select">
                                            <option>Pending</option>
                                            <option>Approved</option>
                                            <option>Cancelled</option>
                                            <option>Finished</option>
                                        </select>
                                    </div>

                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Event Name</label>
                                        <input type="text" name="category" value="<?= $booking['category'] ?>" class="form-control" readonly>
                                    </div>
                                    <!-- <div class="form-group mb-2">
                                        <label>Product & Design Packages</label>
                                        <select name="package" value=" < ? $booking['package'] ? >" class="form-select" aria-label="Default select example">
                                            <option>Package 1</option>
                                            <option>Package 2</option>
                                            <option>Package 3</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group mb-2">
                                        <label>Location of Events</label>
                                        <input type="text" name="location" value="<?= $booking['location'] ?>" class="form-control" placeholder="Enter location" readonly>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label>Event Date</label>
                                        <input type="date" name="date" value="<?= $booking['date'] ?>" class="form-control" placeholder="MM/DD/YY" aria-label="Enter location">
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label>Event Start</label>
                                        <input type="time" name="start" value="<?= $booking['start'] ?>" class="form-control" placeholder="00:00am - 00:00pm" aria-label="Enter location">
                                        <label>Event End</label>
                                        <input type="time" name="end" value="<?= $booking['end'] ?>" class="form-control" placeholder="00:00am - 00:00pm" aria-label="Enter location">
                                    </div>
                                    <!-- <div class="form-group mb-2">
                                        <label>Mode of Payment</label>
                                        <select name="mop"   value="< ?= $booking['mop'] ? >" class="form-select" aria-label="Default select example">
                                            <option>Cash</option>
                                            <option>Gcash</option>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="col-md-12">
                                <hr>
                                    <button type="submit" class="btn btn-primary px-4 float-end">Update</button>
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