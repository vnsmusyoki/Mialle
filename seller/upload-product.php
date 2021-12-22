<?php include 'customer.php';

?>
<?php $product_name =  $product_price = $product_description = $message = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Mialle - Upload New Product</title>

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
                                        <small>Upload New Product</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Products</li>
                                    <li class="breadcrumb-item active">Upload New Product</li>
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
                                            require '../functions/customer/uploadproduct.php';
                                        }
                                        ?>
                                        <?php echo $message ?>
                                        <div class="form-row row">
                                            <div class="col-md-6 mb-4">
                                                <label for="name">Product Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Write Product Name here" name="product_name" value="<?php echo $product_name; ?>" style="text-transform:capitalize;">
                                            </div>
                                            <br>
                                            <div class="col-md-6 mb-4">
                                                <label for="review">Product Price</label>
                                                <input type="number" min="1" class="form-control" id="lname" placeholder="Enter Product price" name="product_price" value="<?php echo $product_price; ?>">
                                            </div>
                                            <br>
                                        </div>
                                        <div class="form-row row">
                                            <div class="col-md-6 mb-4">
                                                <label for="name">Product Category</label>
                                                <select name="product_sub_category" id="" class="form-control">
                                                    <option value="">Select product category</option>
                                                    <?php
                                                    $categories = "SELECT * FROM `categories`";
                                                    $querycategory = mysqli_query($conn, $categories);
                                                    while ($fetch = mysqli_fetch_assoc($querycategory)) {
                                                        $categoryname = $fetch['category_name'];
                                                        $categoryid = $fetch['category_id'];
                                                        echo "<option value='$categoryid'>$categoryname</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-md-6 mb-4">
                                                <label for="review">Product Images</label>
                                                <input type="file" class="form-control" id="chooseFile" placeholder="Upload Product Images" name="picture">
                                            </div>
                                            <br>
                                        </div>
                                        <div class="form-row row">
                                            <div class="col-md-12 mb-4">
                                                <label for="name">Product Sub category</label>
                                                <select name="product_category" id="" class="form-control">
                                                    <option value="">Select product sub category</option>
                                                    <?php
                                                    $subcategories = "SELECT * FROM `sub_categories`";
                                                    $querysubcategory = mysqli_query($conn, $subcategories);
                                                    while ($fetch = mysqli_fetch_assoc($querysubcategory)) {
                                                        $categoryname = $fetch['sub_category_name'];
                                                        $categoryid = $fetch['sub_category_id'];
                                                        echo "<option value='$categoryid'>$categoryname</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row row mb-5">
                                            <div class="col-md-12">
                                                <label for="name">Product Description</label>
                                                <textarea name="product_description" class="form-control" id="" cols="30" rows="10"><?php echo $product_description; ?></textarea>
                                            </div>

                                        </div>

                                        <div class="imgGallery">
                                            <!-- image preview -->
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-solid w-auto" name="uploadproduct">Upload Product</button>
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