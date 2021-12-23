<?php
include 'admin.php';


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
                                    <h3>Admin List
                                        <small>All Admin Accountd</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Admin</li>
                                    <li class="breadcrumb-item active">My Listings</li>
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
                                    <h5>Manage Admin</h5>
                                </div>
                                <div class="card-body order-datatable">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email Address</th>
                                                <th>Username </th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $admins = "SELECT * FROM `admin`";
                                            $queryadmins = mysqli_query($conn, $admins);
                                            $queryadminrows = mysqli_num_rows($queryadmins);
                                            if ($queryadminrows >= 1) {
                                                while ($fetch = mysqli_fetch_assoc($queryadmins)) {
                                                    $firstname = $fetch['admin_first_name'];
                                                    $lastname = $fetch['admin_last_name'];
                                                    $mobile = $fetch['admin_mobile'];
                                                    $email = $fetch['admin_email'];
                                                    $adminloginid = $fetch['admin_login_id'];
                                                    $checkcategory = "SELECT * FROM `login` WHERE `login_id`='$adminloginid'";
                                                    $querycategory = mysqli_query($conn, $checkcategory);
                                                    while ($fetchsubcategory = mysqli_fetch_assoc($querycategory)) {
                                                        $username = $fetchsubcategory['login_username'];
                                                    }

                                                    echo "
                                                    <tr>
                                                         
                                                        <td>$firstname</td>
                                                        <td>$lastname</td>
                                                        <td>$email</td>
                                                        <td>$username</td>
                                                        <td>$mobile</td>
                                                        
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