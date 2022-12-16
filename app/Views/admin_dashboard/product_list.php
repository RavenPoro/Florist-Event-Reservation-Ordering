<?= $this->extend('admin_dashboard/index') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Product List</li>
            </ol>
            <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>

                        <!------------------- Product OF CRUD FUNCTION ---------------->
                        
            <a href="<?= site_url('addproduct'); ?>" class="btn btn-primary">Add products</a></h4>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $row) : ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['description'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td>
                                <img src="<?= "uploads/".$row['image']; ?>" height="100px" width="100px" alt="image">
                            </td>
                            <td>
                                <a href="<?= site_url('product_list/edit/'.$row['id']) ?>">
                                <i class="btn btn-info fa fa-eye" aria-hidden="true"></i></a>
                                
                                <a href="<?= site_url('product_list/delete/'.$row['id']) ?>" 
                                onclick="return  confirm('Do you want to delete this record?')">
                                <i class="btn btn-danger fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>




                <!-- <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product List</li>

                        </ol>
                        <div class="card-body">
                            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add new product
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Product name" aria-label="Product name">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Description" aria-label="Description">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col">
                                            <select class="form-select">
                                                <option selected>Product Category</option>
                                                <option value="Option 1">Option 1</option>
                                                <option value="Option 2">Option 2</option>
                                                <option value="Option 3">Option 3</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Price" aria-label="Price">
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Available</label>
                                    </div><br>
                                    <div class="mb-3">
                                    <label class="form-label">Images</label>
                                        <input type="file" class="form-control">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">submit</button>
                                </div>
                                </div>
                            </div>
                            </div>
                           
                            
                            <table id="datatablesSimple">
                                    <tr>
                                        <td>This is for product list</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </main> -->

                <?= $this->endSection() ?>