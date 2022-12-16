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
<!------------------- Product OF CRUD FUNCTION ---------------->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Edit Product Data
                        <a href="<?= site_url('product_list'); ?>" class="btn btn-danger px-4 float-end">Back</a></h4>       
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('product_list/update/'.$product['id']) ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" value="<?= $product['product_name'] ?>" class="form-control" placeholder="Enter product name" aria-label="Enter product name">
                                    </div>
                                </div>
             
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                    <label>Description</label>
                                        <textarea name="description" class="form-control" placeholder="Enter description" aria-label="Enter description" rows="3"><?= $product['description'] ?></textarea>
                                    </div>
                                </div>
                        
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" value="<?= $product['price'] ?>" placeholder="Enter price" aria-label="Enter price">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                    <label>Image</label>
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-primary px-4 float-end">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                    <img src="<?= site_url('uploads/'.$product['image']) ?>" class="w-50" alt="Product Image">
                </div>
        </div>
    </div>

                        
              
       
        
 

</body>
</html>
<?= $this->endSection() ?>