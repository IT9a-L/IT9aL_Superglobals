<?php
session_start();
$item = $_GET["item"];
$quantity = $_GET["quantity"];
$price = 0;

if ($item == "Burger") {
    $price = 45;
}elseif($item == "Fries"){
    $price = 30;
}elseif ($item == "Chicken") {
    $price = 99;
}elseif ($item == "Sundae") {
    $price = 25;
}elseif ($item == "Coffee") {
    $price = 50;
}else{
    echo "Not in the option";
}

$total = $price * $quantity;

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
    <div class="container">
        <div class="row my-4">

            <!-- Order Management -->
            <div class="col mx-2 shadow p-3">
                <h1 class="text-center">Order Management, welcome <?= $_POST['username'] ?></h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Burger</td>
                        <td>45.00</td>
                    </tr>
                    <tr>
                        <td>Fries</td>
                        <td>30.00</td>
                    </tr>
                    <tr>
                        <td>Chicken</td>
                        <td>99.00</td>
                    </tr>
                    <tr>
                        <td>Sundae</td>
                        <td>25.00</td>
                    </tr>
                    <tr>
                        <td>Coffee</td>
                        <td>50.00</td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-2">
                        Selected Item:
                    </div>
                    <div class="col">
                        <p><?=$item ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">Price:</div>
                    <div class="col"><?=  $price ?></div>
                </div>
                <div class="row">
                    <div class="col-2">Quantity:</div>
                    <div class="col"><?=  $quantity ?></div>
                </div>
                <div class="row">
                    <div class="col-2">Total:</div>
                    <div class="col"><?=  $total ?></div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>