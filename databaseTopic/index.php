<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="bootstrap_5.3/css/bootstrap.min.css">
    <script src="bootstrap_5.3/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        background-color: #F8F3E1;
    }
    </style>
</head>

<body>
    <div class="container mt-5 mx-5 px-3 pt-5">
        <div class="d-flex justify-content-center">
            <div class="card shadow px-3 py-4" style="width:500px">
                <div class="card-body">
                    <h2 class="text-center">Register Here</h2>
                    <form action="insert.php" method="post">
                        <label class="form-label" for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname" class="form-control">
                        <label class="form-label mt-2" for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname" class="form-control">
                        <label class="form-label mt-2" for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control"><br>
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>