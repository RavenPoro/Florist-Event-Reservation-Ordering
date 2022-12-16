<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BeTwin - Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo site_url('assets/'); ?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo site_url('dashboard'); ?>">
            <span class="text-warning fs-2">Be</span><span class="fs-2">Twin</span></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" data-title="Logged Out" href="<?php echo site_url('admin'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Reservation</div>

                            <!--------------- BOOK NAV -------------------> 
                            <a class="nav-link collapsed" href="<?php echo site_url('/reservation'); ?>" 
                            aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Reservation  
                            </a>

                            <a class="nav-link collapsed" href="<?php echo site_url('/reservation_report'); ?>" 
                            aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Reservation Report
                            </a>
                            
                       

                            <div class="sb-sidenav-menu-heading">Products</div>

                            <!--------------- PRODUCTS NAV -------------------> 
                            <a class="nav-link collapsed" href="<?php echo site_url(''); ?>" data-bs-toggle="collapse" 
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('/design_list'); ?>">Designs</a>
                                    <a class="nav-link" href="<?php echo site_url('/product_list'); ?>">Product List</a>
                                    <a class="nav-link" href="<?php echo site_url('/product_category'); ?>">Product Category</a>
                                </nav>
                            </div>

                            <!--------------- SALES NAV -------------------> 
                            <a class="nav-link collapsed" href="<?php echo site_url(''); ?>" data-bs-toggle="collapse" 
                            data-bs-target="#collapseLast" aria-expanded="false" aria-controls="collapseLast">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sales
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLast" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('/pos'); ?>">Point of Sales</a>
                                    <a class="nav-link" href="<?php echo site_url('/order_list'); ?>">Order List</a>
                                </nav>
                            </div>                      

                            <!--------------- SALES REPORT NAV -------------------> 
                            <a class="nav-link collapsed" href="<?php echo site_url('/sales_report'); ?>" 
                            aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Sales Report   
                            </a>

                            <!--------------- DELIVERY LIST NAV -------------------> 
                            <a class="nav-link collapsed" href="<?php echo site_url('/delivery_list'); ?>" 
                            aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Delivery List     
                            </a>


                            
                            <!--------------- USER LIST NAV -------------------> 

                            <div class="sb-sidenav-menu-heading">Customer</div>


                            <a class="nav-link collapsed" href="<?php echo site_url('/users'); ?>" 
                            aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                User List    
                            </a>      
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>

            
            <?= $this->renderSection('content') ?>


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BeTwin 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="<?php echo site_url('assets/'); ?>js/scripts.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

        <script src="<?php echo site_url('assets/'); ?>assets/demo/chart-area-demo.js"></script>

        <script src="<?php echo site_url('assets/'); ?>assets/demo/chart-bar-demo.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

        <script src="<?php echo site_url('assets/'); ?>js/datatables-simple-demo.js"></script>

        
    </body>
</html>
