<?php include 'customer.php'; ?>
<?php $product_name =  $product_price = $product_description = $message = '';
if (isset($_GET['station'])) {
    $stationid = $_GET['station'];
    $pickpoint = "SELECT * FROM pickup_points  WHERE `pickup_point_id`='$stationid' ";
    $querypickpoint = mysqli_query($conn, $pickpoint);
    $querypickpointrows = mysqli_num_rows($querypickpoint);
    if ($querypickpointrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($querypickpoint)) {
            $globalshopname = $fetch['pickup_point_shop_name'];
            $globallocation = $fetch['pickup_point_location'];
            $globalpointid = $fetch['pickup_point_id'];


            global $globalpointid;
        }
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
    <title>Mialle - Upload New Pick Point Stations</title>

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
                                    <h3>Pick Up Point
                                        <small>Upload New Station</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Products</li>
                                    <li class="breadcrumb-item active">Upload New Station</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row products-admin ratio_asos">
                        <div class="col-xl-12 col-sm-12">
                            <div class="card">
                                <div class="card-body product-box">
                                    <form action="" enctype="multipart/form-data" method="POST" action="">
                                        <?php
                                        if (isset($_POST["uploadproduct"])) {
                                            include '../db-connection.php';

                                            $shopname = mysqli_real_escape_string($conn, $_POST['shop_name']);
                                            $location = mysqli_real_escape_string($conn, $_POST['location']);
                                            if (empty($shopname) || empty($location)) {
                                                echo $message = "
                                                <script>
                                                    toastr.error('Please Provide all the details');
                                                </script>
                                            ";
                                            } else if (!preg_match("/^[a-zA-z0-9 ]*$/", $shopname)) {
                                                $message = "
                                                    <script>
                                                        toastr.error('Provided an invalid shop name');
                                                    </script>
                                                ";
                                            } else {
                                                $checklocations = "UPDATE  `pickup_points` SET `pickup_point_location`='$location',`pickup_point_shop_name`='$shopname'  WHERE `pickup_point_id`='$globalpointid'";
                                                $querylocations = mysqli_query($conn, $checklocations);
                                                if ($querylocations >= 1) {
                                                    $message = "
                                                    <script>
                                                        toastr.error('You has been  updated successfully');
                                                    </script>
                                                ";
                                                echo "<script>window.location.replace('my-checkpoint.php');</script>";
                                                } 
                                            }
                                        }
                                        ?>
                                        <?php echo $message ?>
                                        <div class="form-row row">
                                            <div class="col-md-6 mb-4">
                                                <label for="name">Shop Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Write Shop Name here" name="shop_name" style="text-transform:capitalize;">
                                            </div>
                                            <br>
                                            <div class="col-md-6 mb-4">
                                                <label for="review">Location</label>
                                                <select name="location" id="" class="form-control">
                                                    <option value="">select Location</option>
                                                    <option value="Kisumu">Kisumu</option>
                                                    <option value="Nairobi">Nairobi</option>
                                                    <option value="Mombasa">Mombasa</option>
                                                </select>
                                            </div>
                                            <br>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-solid w-auto" name="uploadproduct">Upload Pickup Point</button>
                                    </form>
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