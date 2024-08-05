<?php

include_once '../config.php';

$isError = '';
$errorMsg = '';


$subAdmin = 'sathish123@gmail.com';
$subadminPass = 'sathish@123';

// $error = array();
if (isset($_POST['submit'])) {
    // Sanitize and validate input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the input values are valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isError = 1;
        $errorMsg = "Invalid email format";
    } else {
        // Prepare SQL statement to avoid SQL injection
        $stmt = $config->prepare("SELECT * FROM userlists WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $actualEmail = $row['email'];
            $actualId = $row['id'];
            $actualpwd = $row['password'];

            if ($email == $actualEmail && $password == $actualpwd) {
                // Initialize session
                session_start();
                $_SESSION['user'] = $actualId;
                // header('Location: index.php');
                echo "
                <script>window.location.href='../index.php'</script>
                  
                  ";
                // exit(); // Ensure script stops after redirect
            } else {
                $isError = 1;
                $errorMsg = "Password is incorrect";
            }
        } else {
            $isError = 1;
            $errorMsg = "Email not found in the database";
            // header('Location: register.php');
            echo "<script>alert('Email not found in the database')window.location.href='./register.php'</script>";
        }
    }
} else {
    // Handle the case where the form has not been submitted
    $email = "";
    $password = "";
}

if ($email == $subAdmin || $password == $subadminPass) {
    echo "<script>alert('SubAdmin is allowed');</script>";
    echo "<script>window.location.href='../dashboard/index.php';</script>";
    exit();
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {




//     // Validate email
//     $email = mysqli_real_escape_string($config, $_POST['email']);
//     $password = mysqli_real_escape_string($config, $_POST['password']);

//     if (empty($email)) {
//         $error[] = "Email is required.";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $error[] = "Invalid email format.";
//     }

//     // Validate password
//     if (empty($password)) {
//         $error[] = "Password is required.";
//     } elseif (strlen($password) < 6) {
//         $error[] = "Password must be at least 6 characters long.";
//     }

//     // If no errors, proceed with login logic
//     if (empty($error)) {
//         $query = "SELECT * FROM userlists WHERE email = '$email'";
//         $result = mysqli_query($config, $query);

//         if (mysqli_num_rows($result) == 1) {
//             // Fetch the user data
//             $user = mysqli_fetch_assoc($result);

//             // Verify the password
//             // Assuming the passwords are stored as hashed values in the database
//             // if (password_verify($password, $user['password'])) {
//             if ($password == $user['password']) { // Just for illustration, replace with proper password hashing in production
//                 // Login successful
//                 session_start();
//                 $_SESSION['user'] = $actualId;
//                 // $_SESSION['user'] = $user['email'];
//                 header('Location: ../index.php');
//                 // session_destroy();
//                 exit;
//             } 
//             else {
//                 $error[] = "Invalid email or password.";
//             }
//         } else {
//             $error[] = "Invalid email or password.";
//         }
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">

    <link rel="stylesheet" href="css/log.css">
</head>

<body>

    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <!-- <span class="error-msg" style=""><?php echo (!empty($errorMsg)) ? $errorMsg : ''; ?></span> -->
            <?php
            if (!empty($errorMsg)) {
            ?>
                <span class="error-msg" style=""><?php echo (!empty($errorMsg)) ? $errorMsg : ''; ?></span><br><br>
            <?php
            }

            ?>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo isset($email) ? $email : ''; ?>">
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p>Don't have an account? <a href="register_form.php">Register now</a></p>
        </form>
    </div>

</body>

</html>