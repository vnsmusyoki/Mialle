<?php include 'customer.php'; ?>
<?php
$product_name =  $product_price = $product_description = $message = '';
if (isset($_GET['cartitem'])) {
    $productid = $_GET['cartitem'];
    $checkproduct = "SELECT * FROM `products` WHERE `product_id` = '$productid'";
    $querycheckproduct = mysqli_query($conn, $checkproduct);
    $queryproductrows = mysqli_num_rows($querycheckproduct);
    if ($queryproductrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($querycheckproduct)) {
            $globalproductname = $fetch['product_name'];
            $globalproductdesc = $fetch['product_description'];
            $globalproductprice = $fetch['product_price'];
            $globalproductid = $fetch['product_id'];
            $globalproductimage = $fetch['product_images'];
            $globalproductuserid = $fetch['product_user_id'];
        }
        global $globalproductname;
        global $globalproductprice;
        global $globalproductdesc;
        global $globalproductid;
        global $globalproductimage;
        global $globalproductuserid;
        $checkuser = "SELECT * FROM `users` WHERE `user_id` = '$globalproductuserid'";
        $querycheckuser = mysqli_query($conn, $checkuser);
        $queryuserrows = mysqli_num_rows($querycheckuser);
        if ($queryuserrows >= 1) {
            while ($fetchuser = mysqli_fetch_assoc($querycheckuser)) {
                $globalphone = $fetchuser['user_contact'];
                $globalusername = $fetchuser['user_name'];
                $globallocation = $fetchuser['user_location'];
            }
        }
        global $globalusername;
        global $globalphone;
        global $globallocation;
    }
} else {
    echo "<script>window.location.replace('my-products.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Mialle - COntact Seller Product</title>

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
    <link rel="stylesheet" type="text/css" href="../assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/toastr-btn.css">
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/toastr.min.js"></script>
    <script src="../assets/js/toastr-options.js"></script>
    <script src="assets/js/images-view.js"></script>
    <style>
        .imgGallery img {
            padding: 8px;
            width: 100px;
            height: 100px;
        }
    </style>
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
                        <h6 class="mt-3 f-14"><?php echo $globalusername; ?></h6>
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
                                        <small>Contact Product Seller</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Products</li>
                                    <li class="breadcrumb-item active">Product Seller</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="card">
                        <div class="row product-page-main card-body">
                            <div class="col-xl-4">
                                <img src="../products/<?php echo $globalproductimage; ?>" alt="" class="img-fluid">

                            </div>
                            <div class="col-xl-8">
                                <div class="product-page-details product-right mb-0">
                                    <h2><?php echo $globalproductname; ?></h2>

                                    <hr>
                                    <h6 class="product-title">product details</h6>
                                    <p><?php echo $globalproductdesc; ?></p>
                                    <div class="product-price digits mt-2">
                                        <h3>Kshs. <?php echo $globalproductprice; ?></h3>
                                    </div>

                                    <hr>
                                    <span class="badge bg-success">Contact Seller Now to Check Product Availabilty</span>
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Full Names</td>
                                                <td><?php echo $globalusername; ?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Location</td>
                                                <td><?php echo $globallocation; ?></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Phone Number</td>
                                                <td><?php echo $globalphone; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php


                                    if ($globalloggedinid == $globalproductuserid) {
                                        echo "
                                        <div class='m-t-15'>
                                        <a href='shopping-cart.php' class='btn btn-primary m-r-10' type='button'>Return Back</a>
                                      
                                    </div>
                                        ";
                                    }


                                    ?>
                                    <div class="card">
                                        <div class="card-body product-box">
                                            <form action="" enctype="multipart/form-data" method="POST" action="">
                                                <?php
                                                if (isset($_POST["uploadproduct"])) {
                                                    include '../db-connection.php';
                                                    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
                                                    $description = mysqli_real_escape_string($conn, $_POST['rating_description']);

                                                    if (empty($rating) || empty($description)) {
                                                        echo   $message = "
                                                                    <script>
                                                                    toastr.error('Provide all the Details');
                                                                </script>";
                                                    } else {
                                                        $ordercid = $_GET['orderid'];
                                                        $productid = $_GET['cartitem'];
                                                        $checkcategory = "SELECT *  FROM `feedback` WHERE `feedback_user_id` = '$globalloggedinid' AND `feedback_order_id`='$ordercid'";
                                                        $quercategory = mysqli_query($conn, $checkcategory);
                                                        $checkcategoryrows = mysqli_num_rows($quercategory);
                                                        if ($checkcategoryrows >= 1) {
                                                            echo  $message = "
                                                    <script>
                                                        toastr.error('You have already rated this product.');
                                                    </script>";
                                                        } else {
                                                          $addcat = "INSERT INTO `feedback`(`feedback_user_id`, `feedback_comment`, `feedback_rating`, `feedback_order_id`) VALUES ('$globalloggedinid', '$description','$rating','$ordercid')";
                                                            $querycat = mysqli_query($conn, $addcat);
                                                            if ($querycat) {
                                                                echo "<script>window.location.replace('shopping-cart.php');</script>";
                                                            } else {
                                                                echo "failed";
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                                <?php echo $message ?>
                                                <div class="form-row row">
                                                    <div class="col-md-12 mb-4">
                                                        <label for="name">Product Rating</label>
                                                        <select name="rating" id="" class="form-control">
                                                            <option value="">select</option>
                                                            <option value="Good">Good</option>
                                                            <option value="Poor">Poor</option>
                                                            <option value="Excellent">Excellent</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="form-row row mb-5">
                                                    <div class="col-md-12">
                                                        <label for="name">Rating Description</label>
                                                        <textarea name="rating_description" class="form-control" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="imgGallery">
                                                    <!-- image preview -->
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-solid w-auto" name="uploadproduct">Upload Rating</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!--Customizer admin-->
    <!-- <script src="assets/js/admin-customizer.js"></script> -->

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

</body>

</html>