<?php
    include("db/database.php");
    if (isset($_POST["delete"])) {
        $id = $_POST["id"];

        $sql = "DELETE FROM myguests WHERE id='$id' ";
        if (mysqli_query($con, $sql)) {  
            header("Location: table.php");
        }
    }
?>