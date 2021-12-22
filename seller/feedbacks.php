<?php include 'seller.php'; ?>
<?php
$product_name =  $product_price = $product_description = $message = '';
if (isset($_GET['product'])) {
    $productid = $_GET['product'];
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
    <title>Mialle - Edit Product</title>

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
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
                                        <small>Upload Edited Product</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Products</li>
                                    <li class="breadcrumb-item active">Upload Edited Product</li>
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

                                    <?php
                                    include '../db-connection.php';
                                    $email_username = $_SESSION['seller'];
                                    $checkemail = "SELECT *  FROM `login` WHERE `login_username`= '$email_username'";
                                    $queryemail = mysqli_query($conn, $checkemail);
                                    $checkemailrows = mysqli_num_rows($queryemail);
                                    if ($checkemailrows >= 1) {
                                        while ($fetch = mysqli_fetch_assoc($queryemail)) {
                                            $globalusername = $fetch['login_username']; 
                                            $globalloggedinid = $fetch['login_id'];
                                            $checkcustomer = "SELECT *  FROM `seller` WHERE `seller_login_id` = '$globalloggedinid'";
                                            $querycustomer = mysqli_query($conn, $checkcustomer);
                                             
                                            while ($fetchcustomer = mysqli_fetch_assoc($querycustomer)) {
                                                $globalfirstname = $fetchcustomer['seller_first_name'];
                                                $globallastname = $fetchcustomer['seller_last_name'];
                                                $globalcontact = $fetchcustomer['seller_mobile'];
                                                $globalemail = $fetchcustomer['seller_email'];
                                                $globallocation = $fetchcustomer['seller_location'];
                                                $globaluserid = $fetchcustomer['seller_login_id'];
                                                $globalsellerid = $fetchcustomer['seller_id'];
                                            }
                                
                                            $globalname = $globalfirstname . " " . $globallastname;
                                            global $globalname;
                                            global $globalusername;
                                            global $globalemail;
                                            global $globalname;
                                            global $globalcontact;
                                            global $globallocation;
                                            global $globalloggedinid;
                                            global $globaluserid;
                                            global $globalsellerid;
                                        }
                                    }
                                 
                                    if ($globalsellerid !== $globalproductuserid) {
                                        echo "
                                        <div class='m-t-15'>
                                        <a href='add-to-cart.php?product=$globalproductid' class='btn btn-primary m-r-10' type='button'>Add To Cart</a>
                                         
                                    </div>
                                        ";
                                    }


                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Product Feedbacks</h5>
                                </div>
                                <div class="card-body order-datatable">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>Feed back</th>
                                                <th>Rating</th>
                                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $products = "SELECT * FROM `order_details` WHERE order_details_product_id='$globalproductid'";
                                            $queryproducts = mysqli_query($conn, $products);
                                            $queryproductsrows = mysqli_num_rows($queryproducts);
                                            if ($queryproductsrows >= 1) {
                                                while ($fetch = mysqli_fetch_assoc($queryproducts)) {
                                                    $orderid = $fetch['order_details_order_id'];

                                                    $comments = "SELECT * FROM `feedback` WHERE feedback_order_id='$orderid'";
                                                    $querycomments = mysqli_query($conn, $comments);
                                                    $queryproductsrows = mysqli_num_rows($querycomments);
                                                    if($fetchc = mysqli_fetch_assoc($querycomments)){
                                                        $message = $fetchc['feedback_comment'];
                                                        $rating = $fetchc['feedback_rating'];
                                                         echo "
                                                    <tr>
                                                  
                                                        <td>$rating</td>
                                                        <td>$message</td> 
                                                        

                                                    </tr>";
                                                    }

                                                   
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
    <script src="assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatables/custom-basic.js"></script>
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