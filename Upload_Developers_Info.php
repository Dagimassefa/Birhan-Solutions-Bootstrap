<?php
$conn = mysqli_connect('localhost', 'root', 'aakfd&da!', 'Birhan_Solutions');
$fname = $_POST["fnames"];
$lname = $_POST["lnames"];
$email = $_POST["emails"];
$phone = $_POST["tel"];
$College = $_POST["collegename"];
$level = $_POST["level"];
$major = $_POST["major"];
$linkedin = $_POST["linkedin"];
$github = $_POST["github"];

$other_skill = $_POST["addition"];
if (isset($_POST['submit'])) {
    $checkbox1 = $_POST['lang'];
    $chk = "";
    foreach ($checkbox1 as $chk1) {
        $chk .= $chk1 . ",";
    }
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "C:\\Users\\Dagi\\Downloads\\" . $fileName;

    $query = "INSERT INTO Developers_info(FirstName,LastName,EmailAddress,PhoneNumber,CollegeName,edu_level,Major,CV,LinkedInLink,GithubLink,LanguagesAndSkills,OtherSkills) 
    VALUES ('$fname','$lname','$email','$phone','$College','$level','$major','$fileName','$linkedin','$github','$chk','$other_skill')";
    $run = mysqli_query($conn, $query);

    if ($run) {
        move_uploaded_file($fileTmpName, $path);
        header("Location: index.html");
    } else {
        echo "error" . mysqli_error($conn);
    }
}
