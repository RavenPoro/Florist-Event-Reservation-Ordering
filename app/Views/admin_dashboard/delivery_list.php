<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Delivery List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Delivery List</li>
                        </ol>
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                    <tr>
                                        <td>This is for Delivery List</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </main>

                <?= $this->endSection() ?>