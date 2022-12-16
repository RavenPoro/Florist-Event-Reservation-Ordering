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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                 
                <div class="card">
                    <div class="card-header">
                        <h4>Products
                        <a href="<?= site_url('product_list'); ?>" class="btn btn-danger px-4 float-end">Back</a></h4>     
                        </h4>   
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('saveproduct'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" class="form-control" placeholder="Enter product name" aria-label="Enter product name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                    <label>Description</label>
                                        <textarea name="description" class="form-control" placeholder="Enter description" aria-label="Enter description" rows="3"></textarea>
                                    </div>
                                </div>
                        
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" placeholder="Enter price" aria-label="Enter price">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                    <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-primary px-4 float-end">Save</button>
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