<?php
session_start();

if (isset($_POST["login"])) {
    if(!empty($_POST["username"] && $_POST["name"] && $_POST["password"])){
        $_SESSION['name'] = $_POST["name"];
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['password'] = $_POST["password"];
    
        header("Location: home.php");
    }  else{
        echo "Missing name/username/password <br>";
    }  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7fcdb4b1d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="STYLES/style.css"> -->
</head>

<body>
    <form action="index.php" method="post">
        <label for="name">Full Name:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="login" value="login"><br><br>
    </form>
</body>

</html>