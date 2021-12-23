<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
} else {
    include '../db-connection.php';
    $email_username = $_SESSION['admin'];
    $checkemail = "SELECT *  FROM `login` WHERE `login_username`= '$email_username'";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $globalusername = $fetch['login_username']; 
            $globalloggedinid = $fetch['login_id'];
            $checkcustomer = "SELECT *  FROM `admin` WHERE `admin_login_id` = '$globalloggedinid'";
            $querycustomer = mysqli_query($conn, $checkcustomer);
            if ($querycustomer >= 1) {
                while ($fetchcustomer = mysqli_fetch_assoc($querycustomer)) {
                    $globalname = $fetchcustomer['admin_first_name']." ".$fetchcustomer['admin_last_name'];
                    $globalcontact = $fetchcustomer['admin_mobile'];
                    $globalemail = $fetchcustomer['admin_email'];
                    $globaluserid = $fetchcustomer['admin_id'];
                }
            }

            global $globalusername;
            global $globalemail;
            global $globalname;
            global $globalcontact;
            global $globallocation;
            global $globalloggedinid;
            global $globaluserid;
        }
    }
}
