<?php include 'customer.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Mialle - Admin Dashboard</title>

    
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/toastr-btn.css">
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/toastr.min.js"></script>
    <script src="../assets/js/toastr-options.js"></script>
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

<?php include 'top-bar.php'; ?>

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="dashboard.php"><img class="blur-up lazyloaded" src="assets/images/dashboard/multikart-logos.png" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <div class="sidebar-user text-center">
                        <div><img class="img-60 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/man.png" alt="#">
                        </div>
                        <h6 class="mt-3 f-14"><?php echo $globalname; ?></h6>
                        <p><?php echo $globalemail; ?></p>
                    </div>
                    <?php include 'sidebar.php'; ?>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Product List
                                        <small>Uploaded Products</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Products</li>
                                    <li class="breadcrumb-item active">My Listings</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row products-admin ratio_asos">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/electronics/product/1.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="#"><img src="assets/images/furniture/product/4.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$800.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/fashion/product/17.jpg" class="img-fluid bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$650.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/furniture/product/3.jpg" class="img-fluid bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$650.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/fashion/pro/1.jpg" class="img-fluid bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$650.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/furniture/product/10.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/goggles/product/4.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            <div class="product-hover">
                                                <ul>
                                                    <li>
                                                        <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                    </li>
                                                    <li>
                                                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="#">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->

        </div>

    </div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

</body>

</html>