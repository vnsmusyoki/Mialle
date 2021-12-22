<?php
session_start();
if (!isset($_SESSION['buyer'])) {
    header('Location: ../login.php');
} else {
    include '../db-connection.php';
    $email_username = $_SESSION['buyer'];
    $checkemail = "SELECT *  FROM `login` WHERE `login_username`= '$email_username'";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $globalusername = $fetch['login_username']; 
            $globalloggedinid = $fetch['login_id'];
            $checkcustomer = "SELECT *  FROM `buyer` WHERE `buyer_login_id` = '$globalloggedinid'";
            $querycustomer = mysqli_query($conn, $checkcustomer);

            while ($fetchcustomer = mysqli_fetch_assoc($querycustomer)) {
                $globalfirstname = $fetchcustomer['buyer_first_name'];
                $globallastname = $fetchcustomer['buyer_last_name'];
                $globalcontact = $fetchcustomer['buyer_mobile'];
                $globalemail = $fetchcustomer['buyer_email'];
                $globallocation = $fetchcustomer['buyer_location'];
                $globaluserid = $fetchcustomer['buyer_login_id'];
                $globalbuyerid = $fetchcustomer['buyer_id'];
            }

            $globalfullname = $globalfirstname . " " . $globallastname;
            global $globalfullname;
            global $globalusername;
            global $globalemail;
            global $globalname;
            global $globalcontact;
            global $globallocation;
            global $globalloggedinid;
            global $globaluserid;
            global $globalbuyerid;
        }
    }
}
