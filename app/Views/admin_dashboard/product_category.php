<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Category</h1>
                        
                        <form action="<?= site_url('addcategory') ?>" method="post">
                                <div class="col-md-3 mb-5">
                                    <label class="form-label">Category name</label>
                                    <input type="text" name="category_name" class="form-control" aria-label="Category name">
                                    <button type="submit" class="btn btn-primary mt-2 mb-3">Save</button>
                                    

                                <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?= session()->getFlashdata('success'); ?></div>
                                <?php endif ?>
                                </div>
                            
                             <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($category as $row) : ?>
                                        <tr>
                                            <td><?= $row['id']?></td>
                                            <td><?= $row['category_name']?></td>
                                            <td>
                                                <a href="<?= site_url('product_category/edit/'.$row['id']) ?>">
                                                <i class="btn btn-info fa fa-eye" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </main>

                <?= $this->endSection() ?>