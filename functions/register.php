<?php
include 'db-connection.php';
$message = "
        <script>
            toastr.success('Welcome and continue with registration');
        </script>
    ";

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
$passwordlength = strlen($password);
$usernamelength = strlen($username);

if(empty($full_name) || empty($location) || empty($phone_number) || empty($email_address) || empty($username) || empty($password) || empty($confirm_password)){
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
}