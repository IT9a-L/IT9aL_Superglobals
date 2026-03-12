<?php
    include("db/database.php");
    if (isset($_POST["update"])) {
        if (!empty($_POST["id"] && $_POST["fname"] && $_POST["lname"] && $_POST["email"])){
            $id = $_POST["id"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];

            $sql = "UPDATE myguests SET firstname='$fname', lastname='$lname', email='$email' WHERE id='$id' ";
            if (mysqli_query($con, $sql)) {  
                header("Location: table.php");
            }
        }
    }
?>