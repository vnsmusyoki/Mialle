<?php
session_start();
if (!isset($_SESSION['seller'])) {
    header('Location: ../login.php');
} else {
    include '../db-connection.php';
    $email_username = $_SESSION['seller'];
    $checkemail = "SELECT *  FROM `login` WHERE `login_username`= '$email_username'";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $globalusername = $fetch['login_username']; 
            $globalloggedinid = $fetch['login_id'];
            $checkcustomer = "SELECT *  FROM `seller` WHERE `seller_login_id` = '$globalloggedinid'";
            $querycustomer = mysqli_query($conn, $checkcustomer);
             
            while ($fetchcustomer = mysqli_fetch_assoc($querycustomer)) {
                $globalfirstname = $fetchcustomer['seller_first_name'];
                $globallastname = $fetchcustomer['seller_last_name'];
                $globalcontact = $fetchcustomer['seller_mobile'];
                $globalemail = $fetchcustomer['seller_email'];
                $globallocation = $fetchcustomer['seller_location'];
                $globaluserid = $fetchcustomer['seller_login_id'];
            }

            $globalname = $globalfirstname . " " . $globallastname;
            global $globalname;
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
