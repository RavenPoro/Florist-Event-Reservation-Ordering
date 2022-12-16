<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reservation</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Reservation</li>
                        </ol>

                        
                        <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>

                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Category</th>
                                        <!-- <th>Package</th> -->
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Time Start</th>
                                        <th>Time End</th>
                                        <!-- <th>Mode of Payment</th> -->
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($booking as $row) : ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['fullname'] ?></td>
                                        <td><?= $row['contact'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['category'] ?></td>
                                        <td><?= $row['location'] ?></td>
                                        <td><?= $row['date'] ?></td>
                                        <td><?= $row['start'] ?></td>
                                        <td><?= $row['end'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <td>
                                            <a href="<?= site_url('reservation/edit/'.$row['id']) ?>">
                                            <i class="btn btn-info fa fa-eye" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>

                <?= $this->endSection() ?>