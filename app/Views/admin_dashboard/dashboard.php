<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">

                <!------------------ ADMIN DASHBOARD ------------------------->


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Finished Events</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <h1>1</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Upcoming Events</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1>0</h1>
                               
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Pending Events</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    <h1>0</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                
                                    <h1>0</h1>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Monthly Sales Chart
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Monthly Sales Bar Chart
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Logged Users Table
                            </div>
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

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Contact #</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?= $this->endSection() ?>