<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["email_stat"];
    $status = $_POST["stat"];
    $sql = "Update Developers_info Set emp_status='$status' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        header("Location: admin dashboard.html");
    }
}
