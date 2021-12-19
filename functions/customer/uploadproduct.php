<?php
include '../db-connection.php';
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
$product_category = mysqli_real_escape_string($conn, $_POST['product_category']);
$product_sub_category = mysqli_real_escape_string($conn, $_POST['product_sub_category']);
$product_description = mysqli_real_escape_string($conn, $_POST['product_description']);


if (empty($product_name) || empty($product_price) || empty($product_category) || empty($product_sub_category) || empty($product_description)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z ]*$/", $product_name)) {
    $message = "
        <script>
            toastr.error('Provided an invalid name');
        </script>
    ";
} else {

    if (!empty(array_filter($_FILES['picture']['name']))) {
        $addproduct = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`, `product_user_id`, `product_images`, `product_category_id`, `product_sub_category_id`) VALUES ('$product_name', '$product_description','$product_price','$globalloggedinid',0,'$product_category','$product_sub_category')";
        $queryproduct = mysqli_query($conn, $addproduct);
        $last_id = mysqli_insert_id($conn);
        if ($queryproduct) {
            foreach ($_FILES['picture']['name'] as $id => $val) {
                $filename = $_FILES['picture']['name'];
                $filetmpname = $_FILES['picture']['tmp_name'];
                $filesize = $_FILES['picture']['size'];
                $fileerror = $_FILES['picture']['error'];
                $filetype = $_FILES['picture']['type'];
                $fileext = explode('.', $filename);
                $fileActualExt = strtolower(end($fileext));
                $allowed = array('jpg', 'png', 'jpeg');
                if (in_array($fileActualExt, $allowed)) {
                    if ($fileerror === 0) {
                        if ($filesize > 10000000) {
                            echo "<script>alert('upload too big');</script>";
                        } else {
                            $filenamenew = uniqid('', true) . "." . $fileActualExt;
                            $filedestination = 'products/' . $filenamenew;
                            move_uploaded_file($filetmpname, $filedestination);

                            if ($queryinsert) {

                                $uploadimage = "INSERT INTO `product_images`(`product_image_product_id`, `product_images_name`) VALUES ('$last_id', '$filenamenew')";
                                $queryuploadimage = mysqli_query($conn, $uploadimage);
                                if ($queryuploadimage) {
                                    echo "<script>window.location.replace('my-products.php?productuploaded=success');</script>";
                                }
                            }
                        }
                    } else {

                        $message = "
                        <script>
                            toastr.error('An error occurred during images upload');
                        </script>
                    ";
                    }
                } else {
                    $message = "
                    <script>
                        toastr.error('Upload Only Images with jpg,png, jpeg extensions as product images');
                    </script>
                ";
                }
            }
        }
    } else {
        $message = "
        <script>
            toastr.error('Provide at least 1 product image');
        </script>
    ";
    }
}
