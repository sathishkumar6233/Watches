<?php

include 'config.php';

if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($config, $_POST['name']);
   $email = mysqli_real_escape_string($config, $_POST['email']);
//    $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
   $pass = $_POST['password'];
   $cpass =$_POST['cpassword'];
   
   $error = array();

   // Validate input fields
   if (empty($name)) {
       $error[] = "Name is required.";
   }
   if (empty($email)) {
       $error[] = "Email is required.";
   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $error[] = "Invalid email format.";
   }
   if (empty($pass)) {
       $error[] = "Password is required.";
   } elseif (strlen($pass) < 6) {
       $error[] = "Password must be at least 6 characters long.";
   }
   if (empty($cpass)) {
       $error[] = "Confirm Password is required.";
   } elseif (strlen($cpass) < 6) {
       $error[] = "Confirm Password must be at least 6 characters long.";
   } elseif ($pass != $cpass) {
       $error[] = "Passwords do not match.";
   }

   // If no errors, proceed with registration logic
   if (empty($error)) {
       $query = "SELECT * FROM userlists WHERE email = '$email'";
       $result = mysqli_query($config, $query);

       if (mysqli_num_rows($result) == 0) {
           $query = "INSERT INTO userlists (name, email, password, conformpassword) VALUES ('$name', '$email', '$pass', '$cpass')";
           if (mysqli_query($config, $query)) {
               echo "<script>alert('Registration successful');</script>";
               echo"<script>window.location.href='./login_form.php'</script>";
               exit;
           } else {
               $error[] = "Failed to register user. Please try again.";
           }
       } else {
           $error[] = "Email is already registered.";
       }
   }
}
?>

<!-- <script>window.location.href='../index.php'</script> -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/log.css">

</head>
<body>
     
<div class="form-container">

<form action="" method="post">
        <h3>Register Now</h3>
        <?php
        if (!empty($error)) {
            foreach ($error as $err) {
                echo '<span class="error-msg">'.$err.'</span>';
            }
        }
        ?>
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo isset($name) ? $name : ''; ?>">
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo isset($email) ? $email : ''; ?>">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="cpassword" placeholder="Confirm your password">
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>Already have an account? <a href="login_form.php">Login now</a></p>
    </form>

</div>

<!-- <select name="user_type">
   <option value="user">user</option>
   <option value="admin">admin</option> -->
</body>
</html>