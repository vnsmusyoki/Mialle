<?php include 'seller.php'; ?>

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
                                        <small>Sold  Products</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Products</li>
                                    <li class="breadcrumb-item active">Sold Product</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                  
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sold Products</h5>
                                </div>
                                <div class="card-body order-datatable">
                                    <table class="display" id="example">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>

                                            </tr>
                                        </thead>
                                        <tbody>
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

                                            $checkproducts = "SELECT *  FROM `products` WHERE `product_user_id` = '$globalsellerid' AND `product_status`='sold'";
                                            $querycustomer = mysqli_query($conn, $checkproducts);

                                            while ($fetchproduct = mysqli_fetch_assoc($querycustomer)) {
                                                $productname = $fetchproduct['product_name'];
                                                $productprice = $fetchproduct['product_price'];
                                                $productpicture = $fetchproduct['product_images'];
                                                $productcategory = $fetchproduct['product_category_id'];
                                                $productsubcategory = $fetchproduct['product_sub_category_id'];

                                                $checkcat = "SELECT * FROM `sub_categories` WHERE `sub_category_id`='$productsubcategory'";
                                                $queryc = mysqli_query($conn, $checkcat);
                                                while ($fetchsubcategory = mysqli_fetch_assoc($queryc)) {
                                                    $subcategoryname = $fetchsubcategory['sub_category_name'];
                                                }
                                                $checkcategories = "SELECT * FROM `categories` WHERE `category_id`='$productcategory'";
                                                $querycategory = mysqli_query($conn, $checkcategories);
                                                while ($fetchcategory = mysqli_fetch_assoc($querycategory)) {
                                                    $categoryname = $fetchcategory['category_name'];
                                                }

                                                echo "
                                                    <td><img src='../products/$productpicture' style='height:100px;'></td>
                                                    <td>Kshs. $productprice</td>
                                                    <td>$productname</td>
                                                    <td>$categoryname</td>
                                                    <td>$subcategoryname</td>
                                                ";
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