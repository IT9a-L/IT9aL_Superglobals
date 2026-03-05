<?php 
    session_start();
     
    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
    }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <h3>Welcome to home page,
        <?= $_SESSION['username']?>, <?= $_SESSION['name'] ?> !
    </h3>
    <br>
    <form action="home.php" method="post"><button type="submit" name="logout">Logout</button></form>

</body>

</html>