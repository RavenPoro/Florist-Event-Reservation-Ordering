<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Point of Sales</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">POS</li>
                        </ol>
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                    <tr>
                                        <td>This is for point of sales</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </main>

                <?= $this->endSection() ?>