<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST</title>
</head>

<body>
    <?php
        $result = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_REQUEST["base"] && $_REQUEST["exponent"])) {
                $base = $_REQUEST["base"];
                $exp = $_REQUEST["exponent"];
                $result = pow($base, $exp);
            }else {
                echo "Inputs not found";
            }
            
        }else {
            echo "Request method is not GET";
        }
    ?>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        Base:
        <input type="number" name="base" id="base"><br><br>
        Exponent:
        <input type="number" name="exponent" id="exponent"><br>
        <input type="submit" value="Submit" name="submit">
    </form><br><br>
    <h2><?= $base ?> ^ <?= $exp ?> = <?= $result ?></h2><br><br>

    <!-- 2nd Example -->
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        Name:
        <input type="text" name="name"><br><br>
        Age:
        <input type="text" name="age"><br><br>
        Course:
        <input type="text" name="course"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        if (!empty($_REQUEST)) {
            foreach ($_REQUEST as $param => $value) {
                $safeParam = htmlspecialchars($param);
                $safeValue = htmlspecialchars($value);
                echo "<p>Parameter <strong>$safeParam</strong> has value <strong>$safeValue</strong></p>";
            }
        } else {
            echo "<p>No parameters submitted yet.</p>";
        }
    ?>
</body>

</html>