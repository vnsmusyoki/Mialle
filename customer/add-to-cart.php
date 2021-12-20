<?php include 'customer.php'; ?>
<?php
if (isset($_GET['product'])) {
    $productid = $_GET['product'];
   $checkproduct = "SELECT * FROM orders INNER JOIN order_details ON orders.order_id=order_details.order_details_order_id WHERE orders.order_buyer_user_id='$globalloggedinid' AND order_details.order_details_product_id = '$productid'";
    $query = mysqli_query($conn, $checkproduct);
    $queryrows = mysqli_num_rows($query);
    if($queryrows == 0){
        $orderref = 6;
        $str = "1234567890";
        $randstr = substr(str_shuffle($str), 0, $orderref);
        $today = date('d/m/y');
        $addorder = "INSERT INTO `orders`(`order_ref`, `order_date`, `order_buyer_user_id`) VALUES ('$orderref', '$today', '$globalloggedinid')";
        $queryaddorder = mysqli_query($conn, $addorder);
        $last_id = mysqli_insert_id($conn);
        if ($queryaddorder) {
            $addorderdetails = "INSERT INTO `order_details`(`order_details_order_id`, `order_details_product_id`) VALUES ('$last_id', '$productid')";
            $queryaddpderdetails = mysqli_query($conn, $addorderdetails);
            if($queryaddpderdetails){
                echo "<script>window.location.replace('my-products.php');</script>";
            }
        }
    }else{
        echo "<script>window.location.replace('my-products.php');</script>";
    }
    
} else {
    echo "<script>window.location.replace('my-products.php');</script>";
}
   // $query = mysqli_query($conn, $checkproduct);
    // $queryrows = mysqli_num_rows($query);

    // if ($queryrows >= 1) {

    //     $checkproduct = "SELECT * FROM `order_details` WHERE `order_details_product_id`='$product_id'";
    //     $query = mysqli_query($conn, $checkproduct);
    //     $queryrows = mysqli_num_rows($query);
        
    // } else {
    //     $orderref = 6;
    //     $str = "1234567890";
    //     $randstr = substr(str_shuffle($str), 0, $orderref);
    //     $today = date('d/m/y');
    //     $addorder = "INSERT INTO `orders`(`order_ref`, `order_date`, `order_buyer_user_id`) VALUES ('$orderref', '$today', '$globalloggedinid')";
    //     $queryaddorder = mysqli_query($conn, $addorder);
    //     if ($queryaddorder) {
    //         $addorderdetails = "INSERT INTO `order_details`(`order_details_id`, `order_details_order_id`, `order_details_product_id`) VALUES ('[value-1]','[value-2]','[value-3]')";
    //         $queryaddpderdetails = mysqli_query($conn, $addorderdetails);
    //     }
    // }