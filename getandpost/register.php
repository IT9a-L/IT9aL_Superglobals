<?php 
    session_start();
    if(isset($_POST["submit"])){
        if (!empty($_POST["username"] && $_POST["password"] && $_POST["gender"] && $_POST["name"])) {
            $_SESSION['username'] = $_POST["username"];
            $_SESSION['name'] = $_POST["name"];
            $_SESSION['password'] = $_POST["password"];
            $_SESSION['gender'] = $_POST["gender"];
        }else{
            echo "something wrong";
        }
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $name = $_POST["name"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7fcdb4b1d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="STYLES/style.css">
</head>

<body>
    <div class="container text-center mt-4">
        <h5>Full Name: <?= $name ?></h5>
        <h5>Username: <?= $username ?></h5>
        <h5>Password: <?= $password ?></h5>
        <h5>Gender: <?= $gender ?></h5>
    </div>
</body>

</html>