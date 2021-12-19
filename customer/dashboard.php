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
    <title>Mialle - Customer Dashboard</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="assets/images/dashboard/multikart-logo.png" alt=""></a></div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                </div>
                            </form>
                        </li>
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                        <li class="onhover-dropdown">
                            <a class="txt-dark" href="#">
                                <h6>EN</h6>
                            </a>
                            <ul class="language-dropdown onhover-show-div p-20">
                                <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                                <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                                <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                                <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div p-0">
                                <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>Your order ready for Ship..!</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success"><span><i class="download-color font-success" data-feather="download"></i></span>Download Complete</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger" data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-light txt-dark"><a href="#">All</a> notification</li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/man.png" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li><a href="#"><i data-feather="user"></i>Edit Profile</a></li>
                                <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                                <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                                <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                                <li><a href="#"><i data-feather="log-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="assets/images/dashboard/multikart-logo.png" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <div class="sidebar-user text-center">
                        <div><img class="img-60 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/man.png" alt="#">
                        </div>
                        <h6 class="mt-3 f-14">JOHN</h6>
                        <p>general manager.</p>
                    </div>
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="#"><i class="fa fa-circle"></i>
                                    <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="category.html"><i class="fa fa-circle"></i>Category</a></li>
                                        <li><a href="category-sub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                        <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a></li>
                                        <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a></li>
                                        <li><a href="add-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a></li>
                                        <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                        <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product List</a></li>
                                        <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                                <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                                <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                                <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>Media</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                                <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                                <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                                <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="translations.html"><i class="fa fa-circle"></i>Translations</a></li>
                                <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates</a></li>
                                <li><a href="taxes.html"><i class="fa fa-circle"></i>Taxes</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                        <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
                        </li>
                        <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <div class="right-sidebar" id="right_side_bar">
                <div>
                    <div class="container p-0">
                        <div class="modal-header p-l-20 p-r-20">
                            <div class="col-sm-8 p-0">
                                <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                            </div>
                            <div class="col-sm-4 text-end p-0"><i class="me-2" data-feather="settings"></i></div>
                        </div>
                    </div>
                    <div class="friend-list-search mt-0">
                        <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                    </div>
                    <div class="p-l-30 p-r-30">
                        <div class="chat-box">
                            <div class="people-list friend-list">
                                <ul class="list">
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/user.png" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/user1.jpg" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Ain Chavez</div>
                                            <div class="status"> 28 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/user2.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Kori Thomas</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/user3.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/man.png" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status"> 2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/user5.jpg" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status"> 2 hour ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="assets/images/dashboard/designer.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Hileri Jecno</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right sidebar Ends-->

            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Product List
                                        <small>Multikart Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Physical</li>
                                    <li class="breadcrumb-item active">Product List</li>
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