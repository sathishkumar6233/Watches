<?php
include_once('./config.php');

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product Edit</title>
</head>
<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $userId = $_GET['id'];
                            echo "<p>Received ID: $userId</p>"; // Debug output

                            $query = "SELECT * FROM newarrival WHERE id='$userId'";
                            $query_run = mysqli_query($config, $query);

                            if (!$query_run) {
                                echo "<p>Error in query: " . mysqli_error($config) . "</p>"; // Debug output
                            }

                            if (mysqli_num_rows($query_run) > 0) {
                                $userInfo = mysqli_fetch_assoc($query_run);
                                echo "<p>Product found</p>"; // Debug output
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $userInfo['id']; ?>">
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                        <input type="text" id="image" name="image" value="<?= $userInfo['img']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" value="<?= $userInfo['title']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price">Price</label>
                                        <input type="text" id="price" name="price" value="<?= $userInfo['price']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_user" class="btn btn-primary">Update Product</button>
                                    </div>
                                </form>
                        <?php
                            } else {
                                echo "<h4>No Product Found</h4>";
                            }
                        } else {
                            echo "<h4>No ID Parameter Found</h4>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
