
<?php
session_start();
require 'dbconnect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);


    if (empty($username)) {
        echo "Please enter your email";
    } else if (empty($password)) {
        echo "Please enter your password";
    } else {

        // Hashing the password
        //$password = md5($password);

        $sql = "SELECT * FROM Admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {
            // the user name must be unique
            $row = mysqli_fetch_assoc($result);

            header("location: admin dashboard.html"); //header("Location: index.php");


        } else {
            header("Location: login.html?error=Incorect Username or password"); //header("Location: ../index.php?error=Incorect User name or password");
        }
    }
} else {
    header("Location: ../index.html");
}
