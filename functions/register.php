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
$phonelength = strlen($phone_number);

if (empty($full_name) || empty($location) || empty($phone_number) || empty($email_address) || empty($username) || empty($password) || empty($confirm_password)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z ]*$/", $full_name)) {
    $message = "
        <script>
            toastr.error('Provided an invalid name');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z0-9 ]*$/", $username)) {
    $message = "
        <script>
            toastr.error('Username format is incorrect');
        </script>
    ";
} else if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    $message = "
        <script>
            toastr.error('Incorrect email address. Provide a valid one.');
        </script>
    ";
} else if ($passwordlength < 8) {
    $message = "
    <script>
        toastr.error('Password should have at least 8 characters.');
    </script>
";
} else if ($phonelength !== 10) {
    $message = "
    <script>
        toastr.error('Phone number must have 10 digits.');
    </script>
";
} else if ($phonelength < 8) {
    $message = "
    <script>
        toastr.error('Username field require at least 8 characters.');
    </script>";
} else if ($password !== $confirm_password) {
    $message = "
    <script>
        toastr.error('Password mismatch.');
    </script>
";
} else {
    $checkphone = "SELECT *  FROM `users` WHERE `user_contact` = '$phone_number'";
    $queryphone = mysqli_query($conn, $checkphone);
    $checkphonerows = mysqli_num_rows($queryphone);
    if ($checkphonerows >= 1) {
        $message = "
        <script>
            toastr.error('Phone Number already exists. Please confirm your number again or proceed to login if you already have an account.');
        </script>";
    } else {
        $checkemail = "SELECT *  FROM `login` WHERE `login_email` = '$email_address'";
        $queryemail = mysqli_query($conn, $checkemail);
        $checkemailrows = mysqli_num_rows($queryemail);
        if ($checkemailrows >= 1) {
            $message = "
                <script>
                toastr.error('Email Address already exists. Please confirm your email address again or proceed to login if you already have an account.');
            </script>";
        } else {
            $checkusername = "SELECT *  FROM `login` WHERE `login_username` = '$username'";
            $queryusername = mysqli_query($conn, $checkusername);
            $checkusernamerows = mysqli_num_rows($queryusername);
            if ($checkusernamerows >= 1) {
                $message = "
                <script>
                toastr.error('Username already exists. Please confirm your username again or proceed to login if you already have an account.');
            </script>";
            } else {
                $password = md5($password);
                $adduser = "INSERT INTO `login`(`login_username`, `login_password`, `login_email`, `login_rank`) VALUES ('$username', '$password', '$email_address', 'customer')";
                $queryuser = mysqli_query($conn, $adduser);
                $last_id = mysqli_insert_id($conn);
                if ($queryuser) {
                    $addcustomer = "INSERT INTO `users`(`user_name`, `user_contact`, `user_location`, `user_login_id`) VALUES ('$full_name', '$phone_number','$location','$last_id')";
                    $querycustomer = mysqli_query($conn, $addcustomer);
                    if ($querycustomer) {
                        $message = "
                        <script>
                        toastr.success('Your account has been created successfully. Proceed to Login Now.');
                    </script>";
                        echo "<script>window.location.replace('login.php?accountcreated=success');</script>";
                    } else {
                        $message = "
                        <script>
                        toastr.error('An Error Occurred.');
                    </script>";
                    }
                }
            }
        }
    }
}
