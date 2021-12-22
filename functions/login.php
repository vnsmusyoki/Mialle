<?php
include 'db-connection.php';

$password = mysqli_real_escape_string($conn, $_POST['password']);
$email_username = mysqli_real_escape_string($conn, $_POST['email_username']);

if (empty($email_username) || empty($password)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else {
    $checkemail = "SELECT *  FROM `login` WHERE `login_username` = '$email_username' ";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $dbpassword = $fetch['login_password'];
            $category = $fetch['login_rank'];
            $password = md5($password);
            if ($password !== $dbpassword) {
                $message = "
                <script>
                toastr.error('Incorrect password.');
            </script>";
            } else {
                if ($category == "buyer") {
                    $_SESSION['buyer'] = $email_username;
                    echo "<script>window.location.replace('buyer/dashboard.php');</script>";
                }else if($category == "seller"){
                    $_SESSION['seller'] = $email_username;
                    echo "<script>window.location.replace('seller/dashboard.php');</script>";
                }else{
                    $_SESSION['admin'] = $email_username;
                    echo "<script>window.location.replace('admin/dashboard.php');</script>";
                }
            }
        }
    } else {

        $message = "
                <script>
                toastr.error('Username or Email Address does not exist.');
            </script>";
    }
}
