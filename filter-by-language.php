<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Birhan Solutions|Admin Page|Filter by language</title>
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body style="margin-left: 30px;margin-right:30px">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Filter Based On Language</h2>
                    </div>


                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group" style="padding-left: 20%;padding-right: 20%; width: 100%;">
                            <input type="text" class="form-control" name="filt_lang" placeholder="Enter The Required language*" required style="height: 40px;border-radius: 10px;font-size: 15px;" />
                            <div class="validation"></div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Search" style="margin-left: 47%;margin-top:10px;">
                    </form>
                </div>

            </div>

        </div>

    </div>
    <?php
    include_once 'dbconnect.php';
    if (isset($_POST['submit'])) {
        $lang = $_POST["filt_lang"];
        $sql = "SELECT * FROM Developers_info where find_in_set('$lang',LanguagesAndSkills)";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {

            echo "<table style=' width:100%;border-collapse: collapse; margin: 25px 0;  font-size: 0.9em; font-family: sans-serif;min-width: 400px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); border: 1px solid black;'>";
            echo "<tr style=' background-color: #009879; color: #ffffff; border: 1px solid black;'><th style=' border: 1px solid black;'>First Name </th>
        <th style=' border: 1px solid black;'>Last Name</th><th style=' border: 1px solid black;'>Email Address </th><th style=' border: 1px solid black;'>Phone Number </th>
        <th style=' border: 1px solid black;'>College Name </th><th style=' border: 1px solid black;'>Level</th><th style=' border: 1px solid black;'>Major</th>
        <th style=' border: 1px solid black;'>CV</th><th style=' border: 1px solid black;'>LinkedIn</th><th style=' border: 1px solid black;'>Github</th><th>Languages</th>
        <th style=' border: 1px solid black;'>OtherSkills</th><th>status</th></tr>";
            while ($row = $result->fetch_assoc()) {

                echo "<tr style='border: 1px solid black;'><td style=' border: 1px solid black;'>" . $row['FirstName'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['LastName'] . "</td><td style=' border: 1px solid black;'>" . $row['EmailAddress'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['PhoneNumber'] . "</td><td style=' border: 1px solid black;'>" . $row['CollegeName'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['edu_level'] . "</td><td style=' border: 1px solid black;'>" . $row['Major'] . "</td>
            <td style=' border: 1px solid black;'>" ?> <a href="downloads.php?file=<?php echo $row['CV'] ?>">Download</a><?php echo "</td><td style=' border: 1px solid black;'>" . $row['LinkedInLink'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['GithubLink'] . "</td><td style=' border: 1px solid black;'>" . $row['LanguagesAndSkills'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['OtherSkills'] . "</td><td style=' border: 1px solid black;'>" . $row['emp_status'] . "</td></tr>";
                                                                                                                        }
                                                                                                                        echo "</table>";
                                                                                                                    } else
                                                                                                                        echo " 0 Results found";
                                                                                                                    $con->close();
                                                                                                                }
                                                                                                                            ?>




</body>

</html>