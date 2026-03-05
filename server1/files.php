<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
        <!--  -->
        <Label>Upload File:</Label>
        <input type="file" name="uploadfile" id="uploadfile"><br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php 
        //specifies the directory where the file is going to be placed
        $target_dir = "uploads/"; 

        //specifies the path of the file to be uploaded
        $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]); 

        // is not used yet (will be used later)
        $uploadOk = 1;

        //holds the file extension of the file (in lower case)
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["uploadfile"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
        }
        
        // Check file size. If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0
        if ($_FILES["uploadfile"]["size"] > 500000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
        }

        // This will upload the file to the folder or the directory you specify
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars(basename($_FILES["uploadfile"]["name"])) . " has been uploaded.<br>";
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        }
    ?>
</body>

</html>