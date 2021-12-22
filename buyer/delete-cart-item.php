<?php include 'customer.php'; ?>
<?php
if (isset($_GET['cartitem'])) {
    $cartitemid = $_GET['cartitem'];
    $checkproduct = "DELETE  FROM `orders` WHERE `order_id` = '$cartitemid'";
    $querycheckproduct = mysqli_query($conn, $checkproduct);
    if ($querycheckproduct) {
        echo "<script>window.location.replace('shopping-cart.php');</script>";
    }
}
