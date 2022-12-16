<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">


                <!------------------ USERS TABLE IN DASHBOARD ------------------------->

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Logged Users</li>
                        </ol>
                        <!------------------ FLASH DATA MSG ------------------------->

                        <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>

                        <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>

                       <!---------------  DISPLAY RECORDS IN DASHBOARD ------------------->
                        
                       <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Contact #</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($register as $row) : ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['firstname'] ?></td>
                                        <td><?= $row['lastname'] ?></td>
                                        <td><?= $row['age'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?= $row['contact'] ?></td>
                                        <td><?= $row['username'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td>
                                            <a href="<?= site_url('edit'.$row['id']) ?>"> <i class="btn btn-info fa fa-eye" aria-hidden="true"></i></a>                          
                                            <a href="<?= site_url('delete'.$row['id']) ?>"
                                            onclick="return  confirm('Do you want to delete this record?')">
                                            <i class="btn btn-danger fa fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <?= $this->endSection() ?>
