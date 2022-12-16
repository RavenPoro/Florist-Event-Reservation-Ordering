<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sales Report</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Sales Report</li>
                        </ol>
                        <a href="#" class="btn btn-success">Excell Export</a>
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                    <tr>
                                        <td>This is for Sales report</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </main>

                <?= $this->endSection() ?>