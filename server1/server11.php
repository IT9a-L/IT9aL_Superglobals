<?php 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" name="submit" value="Submit"><br><br>

        <!-- <a href="rename.php?subject=PHP&web=W3schools.com">Test $GET</a> -->
    </form>
    <?php 
        echo $_POST["username"] . "<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Hello {$_POST["username"]}.<br>";
        }else{
            echo "The request method is not equal to post<br>";
        }
    ?>
</body>

</html>
<?php 
// $subject = htmlspecialchars($_REQUEST['subject']);
// $web = htmlspecialchars($_REQUEST['web']);
// echo "Study $subject at $web.";


foreach ($_SERVER as $key => $value) {
echo "{$key} = {$value} <br>";
}
?>