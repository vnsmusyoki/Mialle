<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
} else {
    include '../db-connection.php';
    $email_username = $_SESSION['admin'];
    $checkemail = "SELECT *  FROM `login` WHERE `login_email` = '$email_username' OR `login_username`= '$email_username'";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $globalusername = $fetch['login_username'];
            $globalemail = $fetch['login_email'];
            $globalloggedinid = $fetch['login_id'];
            $checkcustomer = "SELECT *  FROM `users` WHERE `login_user_id` = '$globalloggedinid'";
            $querycustomer = mysqli_query($conn, $checkcustomer);
            if ($querycustomer >= 1) {
                while ($fetchcustomer = mysqli_fetch_assoc($querycustomer)) {
                    $globalname = $fetchcustomer['user_name'];
                    $globalcontact = $fetchcustomer['user_contact'];
                    $globallocation = $fetchcustomer['user_location'];
                }
            }

            global $globalusername;
            global $globalemail;
            global $globalname;
            global $globalcontact;
            global $globallocation;
            global $globalloggedinid;
        }
    }
}
