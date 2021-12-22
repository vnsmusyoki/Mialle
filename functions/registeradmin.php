<?php
include '../db-connection.php';
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
$email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$passwordlength = strlen($password);
$usernamelength = strlen($username);
$phonelength = strlen($mobile_number);

if (empty($first_name) || empty($last_name) || empty($mobile_number) || empty($email_address) || empty($username) || empty($password)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z ]*$/", $first_name) || !preg_match("/^[a-zA-z ]*$/", $last_name)) {
    $message = "
        <script>
            toastr.error('Provided an invalid names characters');
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
} else if ($usernamelength < 8) {
    $message = "
    <script>
        toastr.error('Username field require at least 8 characters.');
    </script>";
} else {
    $checkphone = "SELECT *  FROM `admin` WHERE `admin_mobile` = '$mobile_number'";
    $queryphone = mysqli_query($conn, $checkphone);
    $checkphonerows = mysqli_num_rows($queryphone);
    if ($checkphonerows >= 1) {
        $message = "
        <script>
            toastr.error('Phone Number already exists. Please confirm your number again .');
        </script>";
    } else {
        $checkemail = "SELECT *  FROM `login` WHERE `login_email` = '$email_address'";
        $queryemail = mysqli_query($conn, $checkemail);
        $checkemailrows = mysqli_num_rows($queryemail);
        if ($checkemailrows >= 1) {
            $message = "
                <script>
                toastr.error('Email Address already exists. Please confirm your email address again .');
            </script>";
        } else {
            $checkusername = "SELECT *  FROM `login` WHERE `login_username` = '$username'";
            $queryusername = mysqli_query($conn, $checkusername);
            $checkusernamerows = mysqli_num_rows($queryusername);
            if ($checkusernamerows >= 1) {
                $message = "
                <script>
                toastr.error('Username already exists. Please confirm your username again .');
            </script>";
            } else {
                $password = md5($password);
                $adduser = "INSERT INTO `login`(`login_username`, `login_password`, `login_rank`) VALUES ('$username', '$password', 'admin')";
                $queryuser = mysqli_query($conn, $adduser);
                $last_id = mysqli_insert_id($conn);
                if ($queryuser) {
                    $addcustomer = "INSERT INTO `admin`(`admin_first_name`,`admin_last_name`, `admin_mobile`, `admin_email`, `admin_login_id`) VALUES ('$first_name','$last_name', '$mobile_number','$email_address','$last_id')";
                    $querycustomer = mysqli_query($conn, $addcustomer);
                    if ($querycustomer) {
                        $message = "
                        <script>
                        toastr.success('Your account has been created successfully. Proceed to Login Now.');
                    </script>";
                        echo "<script>window.location.replace('all-admins.php');</script>";
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
