<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["email_assign"];
    $company = $_POST["company"];
    $days = $_POST["days"];
    $startdate = $_POST["start_date"];
    $contract = $_POST["contract"];
    $sql = "insert into Assign_Employee(EmailAddress,CompanyName,NumberOfDays,StartingDate,ContractLength) values('$email','$company','$days','$startdate','$contract')";
    $sql1 = "UPDATE Employees_availability_days SET available_days=available_days -'$days' WHERE EmailAddress='$email'";
    if ($con->query($sql) === true && $con->query($sql1) === true) {
        header("Location: admin dashboard.html");
    }
}
