<?php
include_once('./config.php');
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // File upload handling for imagePath1
    $image = '';
    if (isset($_FILES['image'])) {
        $file1 = $_FILES['image'];
        $fileName1 = $file1['name'];
        $fileTmpName1 = $file1['tmp_name'];
        $fileSize1 = $file1['size'];
        $fileError1 = $file1['error'];
        $fileType1 = $file1['type'];

        $fileExt1 = strtolower(pathinfo($fileName1, PATHINFO_EXTENSION));
        $allowedExtensions1 = array('jpg', 'jpeg', 'png');

        
        if (in_array($fileExt1, $allowedExtensions1)) {
            if ($fileError1 === 0) {
                $uploadDirectory = 'c:/xampp/htdocs/Watches/assets/';
                $fileNewName1 = uniqid('', true) . "." . $fileExt1;
                $fileDestination1 = $uploadDirectory . $fileNewName1;
                if (move_uploaded_file($fileTmpName1, $fileDestination1)) {
                    $image = $fileNewName1;
                } else {
                    $_SESSION['message'] = "Error moving the uploaded file.";
                    header('Location: create.php');
                    exit();
                }
            } else {
                $_SESSION['message'] = "Error uploading image.";
                header('Location: create.php');
                exit();
            }
        } else {
            $_SESSION['message'] = "Invalid file type. Only JPG, JPEG, PNG files are allowed.";
            header('Location: create.php');
            exit();
        }
    }

    // Insert into database
    $query = "INSERT INTO newarrival (img, title , price) VALUES ('$image', '$name', '$price')";

    if (mysqli_query($config, $query)) {
        $_SESSION['message'] = "Product created successfully!";
        header('Location: index.php');
        exit();
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($config);
        header('Location: create.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Product</title>
</head>

<body>
<div class="container mt-5">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-info">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create Product <a href="./index.php" class="btn btn-danger float-end">Back</a></h5>
                </div>
                <div class="card-body">
                    <form action="create.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="form-control btn btn-primary">Create Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
