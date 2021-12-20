<?php include 'customer.php'; ?>
<?php $category_name  = $sub_category_description = $message = '';
if (isset($_GET['subcategory'])) {
    $subcategoryid = $_GET['subcategory'];
     $checksubcategory = "SELECT * FROM `sub_categories` WHERE `sub_category_id` = '$subcategoryid'";
    $querychecksubcategory = mysqli_query($conn, $checksubcategory);
    $querysubcategoryrows = mysqli_num_rows($querychecksubcategory);
    if ($querysubcategoryrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($querychecksubcategory)) {
            $globalsubcategoryname = $fetch['sub_category_name'];
            $globalsubcategorydesc = $fetch['sub_category_desc'];
            $globalsubcategoryid = $fetch['sub_category_id'];
        }
        global $globalsubcategoryname;
        global $globalsubcategorydesc;
        global $globalsubcategoryid;
    }
} else {
    echo "<script>window.location.replace('all-sub-categories.php');</script>";
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
    <title>Mialle - Upload New SUB Category</title>

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
                                    <h3>Sub Category List
                                        <small>Upload New Sub Category</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Category</li>
                                    <li class="breadcrumb-item active">Upload New Category</li>
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
                                            $category = mysqli_real_escape_string($conn, $_POST['product_category']);
                                            $subcategory = mysqli_real_escape_string($conn, $_POST['sub_category_name']);
                                            $description = mysqli_real_escape_string($conn, $_POST['sub_category_description']);

                                            if (empty($category) || empty($description) || empty($subcategory)) {
                                                echo   $message = "
                                                <script>
                                                toastr.error('Provide all the Details');
                                            </script>";
                                            } else if (!preg_match("/^[a-zA-z ]*$/", $subcategory)) {
                                                echo $message = "
                                                    <script>
                                                        toastr.error('Provided an invalid category name');
                                                    </script>
                                                ";
                                            } else {

                                               $addcat = "UPDATE `sub_categories` SET `sub_category_name`='$subcategory',`sub_category_category_id`='$category', `sub_category_desc`='$description' WHERE `sub_category_id`='$globalsubcategoryid'";
                                                $querycat = mysqli_query($conn, $addcat);
                                                if ($querycat) {
                                                    echo "<script>window.location.replace('all-sub-categories.php');</script>";
                                                }
                                            }
                                        }
                                        ?>
                                        <?php echo $message ?>
                                        <div class="form-row row">
                                            <div class="col-md-12 mb-4">
                                                <label for="name">Sub Category Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Write Sub Category Name here" name="sub_category_name" value="<?php echo $globalsubcategoryname; ?>" style="text-transform:capitalize;">
                                            </div>
                                            <br>
                                        </div>
                                        <div class="form-row row">
                                            <div class="col-md-12 mb-4">
                                                <label for="name">Product Category</label>
                                                <select name="product_category" id="" class="form-control">
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
                                            <div class="form-row row mb-5">
                                                <div class="col-md-12">
                                                    <label for="name">Subcategory Description</label>
                                                    <textarea name="sub_category_description" class="form-control" id="" cols="30" rows="10"><?php echo $globalsubcategorydesc; ?></textarea>
                                                </div>

                                            </div>

                                            <div class="imgGallery">
                                                <!-- image preview -->
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-solid w-auto" name="uploadproduct">Update Sub Category</button>
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