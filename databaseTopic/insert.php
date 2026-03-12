<?php
include("db/database.php");
    if (isset($_POST["submit"])) {
        if (!empty($_POST["fname"] && $_POST["lname"] && $_POST["email"])) {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $sql = "INSERT INTO myguests(firstname, lastname, email) VALUES('$fname', '$lname', '$email')";
            
            if (mysqli_query($con, $sql)) {  
                header("Location: table.php");
            }
        }else {
            header("Location: index.php");
        }
    }else {
        echo "Error! Something wrong.";
    }
?>