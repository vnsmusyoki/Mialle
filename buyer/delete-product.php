<?php include 'customer.php'; ?>
<?php
$product_name =  $product_price = $product_description = $message = '';
if (isset($_GET['product'])) {
    $productid = $_GET['product'];
    $checkproduct = "DELETE  FROM `products` WHERE `product_id` = '$productid'";
    $querycheckproduct = mysqli_query($conn, $checkproduct); 
    if($querycheckproduct){
        echo "<script>window.location.replace('my-products.php');</script>";
    }
    
} 
