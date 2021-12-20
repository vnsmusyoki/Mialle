<?php
include 'customer.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Mialle - My Products</title>


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
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
                    <div class="logo-wrapper"><a href="index.php"><img class="blur-up lazyloaded" src="assets/images/dashboard/multikart-logos.png" alt=""></a></div>
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
                <?php
                if (isset($_GET['productuploaded'])) {
                    $msg = $_GET['productuploaded'];
                    if ($msg == "success") {
                        $messagenow = "
                        <script>
                        toastr.success('Product uploaded successfully.');
                    </script>";
                    }
                    echo $messagenow;
                }

                ?>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Manage Order</h5>
                                </div>
                                <div class="card-body order-datatable">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Product Category</th>
                                                <th>Product SUbCategory</th>
                                                <th>Contact Seller</th>
                                                <th>Remove Item</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $products = "SELECT * FROM orders INNER JOIN order_details ON orders.order_id=order_details.order_details_order_id WHERE orders.order_buyer_user_id='$globalloggedinid' ";
                                            $queryproducts = mysqli_query($conn, $products);
                                            $queryproductsrows = mysqli_num_rows($queryproducts);
                                            if ($queryproductsrows >= 1) {
                                                while ($fetch = mysqli_fetch_assoc($queryproducts)) {
                                                    $orderref = $fetch['order_ref'];
                                                    $date = $fetch['order_date'];
                                                    $orderid = $fetch['order_id'];
                                                    $buyer = $fetch['order_buyer_user_id'];
                                                    $checkcategory = "SELECT * FROM `order_details` WHERE `order_details_order_id`='$orderid'";
                                                    $querycategory = mysqli_query($conn, $checkcategory);
                                                    while ($fetchsubcategory = mysqli_fetch_assoc($querycategory)) {
                                                        $productfetchid = $fetchsubcategory['order_details_product_id'];
                                                    }
                                                    $checkproduct = "SELECT * FROM `products` WHERE `product_id`='$productfetchid'";
                                                    $queryproduct = mysqli_query($conn, $checkproduct);
                                                    while ($fetchcategory = mysqli_fetch_assoc($queryproduct)) {
                                                        $productpic = $fetchcategory['product_images'];
                                                        $name = $fetchcategory['product_name'];
                                                        $price = $fetchcategory['product_price'];
                                                        $categoryid = $fetchcategory['product_category_id'];
                                                        $subcategoryid = $fetchcategory['product_sub_category_id'];
                                                    }
                                                    $checksubcategory = "SELECT * FROM `sub_categories` WHERE `sub_category_id`='$subcategoryid'";
                                                    $querysubcategory = mysqli_query($conn, $checksubcategory);
                                                    while ($fetchsubcategory = mysqli_fetch_assoc($querysubcategory)) {
                                                        $subcategoryname = $fetchsubcategory['sub_category_name'];
                                                    }
                                                    $checkcat = "SELECT * FROM `categories` WHERE `category_id`='$categoryid'";
                                                    $querycat = mysqli_query($conn, $checkcat);
                                                    while ($fetchcategory = mysqli_fetch_assoc($querycat)) {
                                                        $categoryname = $fetchcategory['category_name'];
                                                    }
                                                    echo "
                                                    <tr>
                                                        <td><a href=''><img src='../products/$productpic' class='img-fluid' alt='' style='height:100px;'></a></td>
                                                        <td>$name</td>
                                                        <td>Kshs. $price</td>
                                                        <td>$categoryname</td>
                                                        <td>$subcategoryname</td>
                                                        <td><a href='contact-product-owner.php?cartitem=$productfetchid' class='btn btn-success'>07XXXXXXX</a></td>
                                                        <td><a href='delete-cart-item.php?cartitem=$categoryid' class='btn btn-warning'>Delete </a></td>

                                                    </tr>";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row products-admin ratio_asos">


                    </div>
                </div>
                <!-- Container-fluid Ends-->

            </div>

            <?php include 'footer.php'; ?>

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
    <script src="assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatables/custom-basic.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

</body>

</html>