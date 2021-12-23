<?php
include 'seller.php';


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
                                    <h5>Sold Products Pick Up Points</h5>
                                </div>
                                <div class="card-body order-datatable">
                                    <table class="display" id="example">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Name</th>
                                                <th>Deliver shop</th>
                                                <th>Location</th>
                                                <th>Buyer</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $email_username = $_SESSION['seller'];
                                            $checkemail = "SELECT *  FROM `login` WHERE  `login_username`= '$email_username'";
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
                                            $products = "SELECT * FROM `products` WHERE `product_user_id` = '$globalsellerid' AND `product_status`='sold'";
                                            $queryproducts = mysqli_query($conn, $products);
                                            $queryproductsrows = mysqli_num_rows($queryproducts);
                                            if ($queryproductsrows >= 1) {
                                                while ($fetch = mysqli_fetch_assoc($queryproducts)) {
                                                    $name = $fetch['product_name'];
                                                    $price = $fetch['product_price'];
                                                    $image = $fetch['product_images'];
                                                    $productid = $fetch['product_id'];
                                                    $categoryid = $fetch['product_category_id'];
                                                    $subcategoryid = $fetch['product_sub_category_id'];
                                                    $checkcategory = "SELECT * FROM `order_details` WHERE `order_details_product_id`='$productid'";
                                                    $querycategory = mysqli_query($conn, $checkcategory);
                                                    while ($fetchsubcategory = mysqli_fetch_assoc($querycategory)) {
                                                        $orderdetailsid = $fetchsubcategory['order_details_id'];
                                                        $orderdetailsorderid = $fetchsubcategory['order_details_order_id'];
                                                        $checkcategory = "SELECT * FROM `pickup_points` WHERE `pickup_point_order_id`='$orderdetailsid'";
                                                        $querycategory = mysqli_query($conn, $checkcategory);
                                                        while ($fetchcategory = mysqli_fetch_assoc($querycategory)) {
                                                            $pickpointshop = $fetchcategory['pickup_point_shop_name'];
                                                            $pickpointlocation = $fetchcategory['pickup_point_location'];
                                                        }
                                                        $checkorder = "SELECT * FROM `orders` WHERE `order_id`='$orderdetailsorderid'";
                                                        $queryorder = mysqli_query($conn, $checkorder);
                                                        while ($fetchcategory = mysqli_fetch_assoc($queryorder)) {
                                                            $orderbuyer = $fetchcategory['order_buyer_user_id'];

                                                            $checkorder = "SELECT * FROM `buyer` WHERE `buyer_id`='$orderbuyer'";
                                                            $queryorder = mysqli_query($conn, $checkorder);
                                                            while ($fetchbuyer = mysqli_fetch_assoc($queryorder)) {
                                                                $orderbuyernames = $fetchbuyer['buyer_first_name'] . " " . $fetchbuyer['buyer_last_name'];
                                                                $orderbuyeremail = $fetchbuyer['buyer_email'];
                                                                $orderbuyermobile = $fetchbuyer['buyer_mobile'];
                                                                echo "
                                                                    <td><img src='../products/$image' style='height:100px;'></td>
                                                                    <td>Kshs. $price</td>
                                                                    <td>$name</td>
                                                                    <td>$pickpointshop</td>
                                                                    <td>$pickpointlocation</td>
                                                                    <td>$orderbuyernames</td>
                                                                    <td>$orderbuyeremail</td>
                                                                    <td>$orderbuyermobile</td>
                                                                ";
                                                            }
                                                        }
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
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>


    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
            $('#exampletwo').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>
</body>

</html>