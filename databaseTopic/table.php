<?php
    include("db/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="bootstrap_5.3/css/bootstrap.min.css">
    <script src="bootstrap_5.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <style>
    body {
        background-color: #F8F3E1;
    }
    </style>
</head>

<body>
    <div class="container mt-5 px-5">
        <h1 class="text-center">Table</h1>
        <div class="d-flex justify-content-end">
            <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i>Back</a>
        </div><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Timestamp</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql2 = "SELECT * FROM myguests";
                $result = mysqli_query($con, $sql2);
                
                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?= $row["firstname"]; ?></td>
                    <td><?= $row["lastname"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["reg_date"]; ?></td>
                    <td><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                            data-bs-target="#editModal<?= $row["id"]; ?>"><i
                                class="fa-regular fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal<?= $row["id"]; ?>"><i
                                class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
            <!-- Edit Information Modal -->
            <div class="modal fade" id="editModal<?= $row["id"]; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Information</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="update.php" method="post">
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                <label class="form-label" for="fname">First Name:</label>
                                <input type="text" name="fname" id="fname" class="form-control"
                                    value="<?= $row["firstname"]; ?>">
                                <label class="form-label" for="lname">Last Name:</label>
                                <input type="text" name="lname" id="lname" class="form-control"
                                    value="<?= $row["lastname"]; ?>">
                                <label class="form-label" for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="<?= $row["email"]; ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="update">Update</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Delete row Modal -->
            <div class="modal fade" id="deleteModal<?= $row["id"]; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Delete Information</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to Delete this row?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
                ?>
        </table>
    </div>
</body>

</html>