<?php
session_start();
$email_username = $message ='';
if (isset($_GET['accountcreated'])) {
    $msg = $_GET['accountcreated'];
    if ($msg == "success") {
        $messagenow = "
        <script>
        toastr.success('Your account has been created successfully. You can proceed to Login Now.');
    </script>";
    echo $messagenow;
    echo "<script>window.location.replace('login.php');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"> 
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <title>Mialle - Account Login</title>

 
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr-btn.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/toastr-options.js"></script>
</head>

<body class="theme-color-1">


    <?php include 'login-header.php'; ?>


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Seller's login</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" autocomplete="off">
                            <?php
                            if (isset($_POST["login"])) {
                               
                                require 'functions/login.php';
                            }
                            ?>
                            <!-- <?php echo $messagenow; ?> -->
                            <?php echo $message; ?>
                            <div class="form-group">
                                <label for="email"> Username</label>
                                <input type="text" class="form-control" id="email" name="email_username" placeholder="Email Address or Username" value="<?php echo $email_username;?>">
                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" id="review" placeholder="Enter your password" name="password">
                            </div>
                            <button type="submit" class="btn btn-solid" name="login">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Seller</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start Selling your products click register.</p><a href="seller-register.php" class="btn btn-solid">Create Seller Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->




    <!-- menu js-->
    <script src="assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>