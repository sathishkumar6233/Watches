<?php
include_once('./config.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="das.css">
</head>

<body>
    <!--  slide bar panel -->

    <div class="slidebar-container">
        <div class="slidebar">
            <h2>Watches</h2>
            <ul>
                <li><a href="#" onclick="showTab('home')" class="active">Company</a></li>
                <li><a href="#" onclick="showTab('chat')">Chat Box</a></li>
                <li><a href="#" onclick="showTab('about')">Users and Sub Admin list</a></li>
                <li><a href="#" onclick="showTab('service')">Sub Admin Create</a></li>
                <li><a href="#" onclick="showTab('contact')">Product list</a></li>
            </ul>
        </div>
        <!-- slide bar panel end -->

        <div class="container-fluid d-flex flex-column p-0 ">

            <!-- nav bar panel -->
            <nav>
                <ul class="d-flex justify-content-between">
                    <div class="button w-25 h-25 d-flex justify-content-start">
                        <button id="toggleButton" class="btn btn-primary h-25 text-start"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="search w-100">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search here">
                                <div class="input-group-prepend">
                                    <span style="background-color: #edc40a;border:2px solid #edc40a;" class="input-group-text " style="cursor: pointer;" id="basic-addon1"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" color="white">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg></span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="time mx-4" id="datetime">
                    </div>
                    <div class="dropdown" style="background-color: #edc40a; border-radius:5px ;">
                        <a class="btn  dropdown-toggle " style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu" style="background-color: #edc40a;color: white; border-radius:5px ;">
                            <li><a class="dropdown-item text-white fw-medium" href="#">logout</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </div>
                </ul>

            </nav>

            <!-- nav and slide bar panel end -->



            <!-- company revenue view panel start -->

            <div class="content w-100 ">
                <div id="home" class="tab-content active">
                    <h2>Company Revenue </h2>

                    <div class="container-fluid d-flex justify-content-center gap-5 mb-5 mt-5">
                        <div class="card px-5 py-2 " style="width:24%; border-bottom: 3px solid blue;">
                            <p class="fs-6">Income</p>
                            <h3>&#8377; 1.5L</h3>
                        </div>
                        <div class="card px-5 py-2 " style="width:24%; border-bottom: 3px solid red;">
                            <p class="fs-6">Stock Income</p>
                            <h3> &#8377;1L</h3>
                        </div>
                        <div class="card px-5 py-2 " style="width:24%; border-bottom: 3px solid yellow;">
                            <p class="fs-6">Sale</p>
                            <h3> &#8377;1.5M </h3>
                        </div>
                        <div class="card px-5 py-2 " style="width:24%; border-bottom: 3px solid #2dfc38;">
                            <p class="fs-6">Total</p>
                            <h3>&#8377;31,564 <span class="fs-5" style="color:#c4c0c0;"></span></h3>
                        </div>
                    </div>
                </div>
                <!-- company revenue view panel end -->



                <!-- admin&user list view panel end -->

                <div id="about" class="tab-content">
                    <!-- <h2>user and sub admin list Content</h2> -->

                    <div class="container-fluid">
                        <h3>Users List</h3>
                        <br><br>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                $usersquery = "SELECT * FROM userlists";
                                $usersproduct = mysqli_query($config, $usersquery);

                                while ($row = mysqli_fetch_array($usersproduct)) {

                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];

                                ?>
                                    <tr>
                                        <th scope="row"><?= $id ?></th>
                                        <td><?= $name ?></td>
                                        <td><?= $email ?></td>
                                    </tr>

                                <?php
                                }
                                // }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="container-fluid" style="margin-top: 50px;">
                        <h3>Sub Admin List</h3>
                        <br><br>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                $usersquery = "SELECT * FROM subAdmin";
                                $usersproduct = mysqli_query($config, $usersquery);

                                while ($row = mysqli_fetch_array($usersproduct)) {

                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];

                                ?>
                                    <tr>
                                        <th scope="row"><?= $id ?></th>
                                        <td><?= $name ?></td>
                                        <td><?= $email ?></td>
                                    </tr>

                                <?php
                                }
                                // }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- admin&user list view panel end -->
                <!-- <script>alert('working')</script> -->
                <!-- sub admin create panel -->
                <?php



                // Initialize error variables
                $userNameErr = "";
                $emailIDErr = "";
                $passwordErr = "";
                $confirmPasswordErr = "";

                // Initialize values
                $userName = "";
                $emailID = "";
                $password = "";
                $confirmPassword = "";

                // Input fields validation
                if (isset($_POST["submit"])) {

                    // echo " <script>alert('working')</script> ";
                    // Validating the User Name 
                    if (empty($_POST["userName"])) {
                        $userNameErr = "User Name is required";
                    } else {
                        $userName = htmlspecialchars($_POST["userName"]);
                        if (!preg_match("/^[a-zA-Z0-9_]*$/", $userName)) {
                            $userNameErr = "Only alphabets, numbers, and underscores are allowed for User Name";
                        }
                    }

                    // Validating the User EmailID ID  
                    if (empty($_POST["emailID"])) {
                        $emailIDErr = "Email ID is required";
                    } else {
                        $mailcheck = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
                        $emailID = htmlspecialchars($_POST["emailID"]);
                        if (!preg_match($mailcheck, $emailID)) {
                            $emailIDErr = "Invalid email format";
                        }
                    }

                    // Validating the User password
                    if (empty($_POST["password"])) {
                        $passwordErr = "Password is required";
                    } else {
                        $password = $_POST["password"];
                        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
                            $passwordErr = "Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
                        } else {
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        }
                    }

                    // Validating the User confirm password 
                    if (empty($_POST["confirmPassword"])) {
                        $confirmPasswordErr = "Confirm Password is required";
                    } else {
                        $confirmPassword = $_POST["confirmPassword"];
                        if ($password !== $confirmPassword) {
                            $confirmPasswordErr = "Passwords do not match";
                        }
                    }

                    if ($emailIDErr == "") {
                        $check_query = "SELECT * FROM subadmin WHERE email='$emailID'";
                        $check_result = mysqli_query($config, $check_query);
                        if (mysqli_num_rows($check_result) > 0) {
                            $duplicateEmailErr = "Email ID already exists";
                        }
                    }


                    // if (isset($_POST['subAdmin'])) {
                    //     if ($userNameErr == "" && $emailIDErr == "" && $passwordErr == "" && $confirmPasswordErr == "") {
                    //         // Insert into database
                    //         $query = "INSERT INTO subadmin(name, email, password) VALUES('$userName', '$emailID', '$hashed_password')";
                    //         $query_run = mysqli_query($config, $query);

                    //         if ($query_run) {
                    //             echo "<script>alert('Sub Admin Created Successfully');</script>";

                    //             // Send email
                    //             $mail = new PHPMailer(true);
                    //             try {
                    //                 $mail->isSMTP();
                    //                 $mail->Host       = 'smtp.example.com';
                    //                 $mail->SMTPAuth   = true;
                    //                 $mail->Username   = 'your-email@example.com';
                    //                 $mail->Password   = 'your-email-password';
                    //                 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    //                 $mail->Port       = 587;

                    //                 $mail->setFrom('your-email@example.com', 'Mailer');
                    //                 $mail->addAddress($emailID, $userName);

                    //                 $mail->isHTML(true);
                    //                 $mail->Subject = 'Registration Successful';
                    //                 $mail->Body    = "Dear $userName,<br><br>Thank you for registering!<br><br>Regards,<br>Team";
                    //                 $mail->AltBody = "Dear $userName,\n\nThank you for registering!\n\nRegards,\nTeam";

                    //                 $mail->send();
                    //                 echo 'Registration successful, email has been sent';
                    //             } catch (Exception $e) {
                    //                 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    //             }

                    //             echo '<script>window.location.href = "index.php";</script>';
                    //             exit(0);
                    //         } else {
                    //             echo "<script>alert('Sub Admin Not Created');</script>";
                    //             // header('Location: index.php');
                    //             // exit(0);
                    //         }
                    //     }
                    // }


                    if (isset($_POST['submit'])) {
                        if ($userNameErr == "" && $emailIDErr == "" && $passwordErr == "" && $confirmPasswordErr == "" && $duplicateEmailErr == "") {
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password securely
                            $query = "INSERT INTO subadmin(name, email, password) VALUES('$userName', '$emailID', '$hashed_password')";
                            $query_run = mysqli_query($config, $query);

                            if ($query_run) {
                                echo "<script>alert('Sub Admin Created Successfully');</script>";


                                require 'vendor/autoload.php';


                                // Send email using PHPMailer
                                $mail = new PHPMailer(true);
                                try {
                                    // Server settings
                                    $mail->isSMTP();
                                    $mail->Host = 'smtp.gmail.com'; // Update this with your actual SMTP server
                                    $mail->SMTPAuth = true;
                                    $mail->Username = 'sathishkutta59@gmail.com'; // Update with your actual email
                                    $mail->Password = 'fikuhdcyqlmlrsxd'; // Update with your actual password
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                    $mail->Port = 587;
                                    // $mail->Port = 465;

                                    // Recipients
                                    $mail->setFrom('sathishkutta59@gmail.com', 'Sathish Kumar');
                                    $mail->addAddress($emailID, $userName);
                                    // $mail->addAddress("www.sathis19799@gmail.com", "Sathis Kumar");

                                    // Content
                                    $mail->isHTML(true);
                                    $mail->Subject = 'Registration Successful';
                                    // $mail->Body = "
                                    // Dear $userName,<br><br>Thank you for registering!<br><br>Regards,<br>Team




                                    // ";
                                    $mail->isHTML(true); // Set email format to HTML
                                    $mail->Body = 'Welcome a board our new admin';
                                    // $mail->Body = '
                                    // <div style="width: 80%; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4;">
                                    //     <h1>Username :'. $username.'</h1>
                                    //     <h1>Email : '.$emailID.'</h1>
                                    //     <h1>Password :'.$password.'</h1>
                                    // </div>';


                                    $mail->AltBody = '<div style="width: 80%; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4;"><h1 style="color: #333;">Welcome to the Team, ' . htmlspecialchars($userName) . '!</h1><div style="margin-top: 20px;"><p>Dear ' . htmlspecialchars($userName) . ',</p><p>Welcome aboard! Your sub-admin account has been created successfully. Here are your login details:</p><p><strong>Username:</strong> ' . htmlspecialchars($userName) . '</p><p><strong>Email:</strong> ' . htmlspecialchars($emailID) . '</p><p><strong>Password:</strong> ' . htmlspecialchars($password) . '</p><p>You can access the admin page using the following link: <a href="http://localhost/php/cloth-hunt/dashboard/index.php" target="_blank" style="color: #1a73e8; text-decoration: none;">Click here to access the admin dashboard.</a></p><p>If you need any assistance, feel free to reach out.</p></div><div style="margin-top: 20px; font-size: 0.9em; color: #555;"><p>Best regards,<br>Team</p></div></div>';


                                    // $mail->AltBody = "Dear $userName,\n\nThank you for registering!\n\nRegards,\nTeam";

                                    $mail->send();
                                    echo "<script>alert('Registration successful, email has been sent');</script>";
                                } catch (Exception $e) {
                                    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
                                }

                                echo '<script>window.location.href = "index.php";</script>';
                                exit(0);
                            } else {
                                $_SESSION['message'] = "<script>alert('Sub Admin Not Created');</script>";
                                header('Location: index.php');
                                exit(0);
                            }
                        }
                    }
                }
                ?>


                <div id="service" class="tab-content">
                    <h2>Sub Admin Create</h2>
                    <div class="container-fluid w-100 d-flex justify-content-center align-items-center">
                        <div class="container mt-5">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <h3 class="text-center fw-bold">Create Sub-Admin</h3>
                                <div class="mb-3">
                                    <label for="subadminName" class="form-label">Name</label>
                                    <input type="text" name="userName" class="form-control" value="<?php echo $userName; ?>" id="subadminName">
                                    <span class="error text-danger"><?php echo $userNameErr; ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="subadminEmail" class="form-label">Email</label>
                                    <input type="email" name="emailID" class="form-control" value="<?php echo $emailID; ?>" id="subadminEmail">
                                    <span class="error text-danger"><?php echo $emailIDErr; ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="subadminPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" id="subadminPassword">
                                    <span class="error text-danger"><?php echo $passwordErr; ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="subadminConfirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="confirmPassword" class="form-control" value="<?php echo $confirmPassword; ?>" id="subadminConfirmPassword">
                                    <span class="error text-danger"><?php echo $confirmPasswordErr; ?></span>
                                </div>
                                <form class="button d-flex gap-3" method ="POST">
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </form>
                                <?php

                                // if (isset($_POST['submit'])) {
                                //     echo "<script>alert('Sumit btnworking')</script>";
                                // }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- <script>alert('working')</script> -->

                <!-- sub admin create panel end -->




                <!-- product list panel -->
                <div id="contact" class="tab-content">
                    <h2>product list</h2><br><br>

                    <div class="card-container w-100 h-25 d-flex align-items-center justify-content-center">
                        <!-- <div class="card  w-100 d-flex justify-content-around align-items-center flex-row gap-5">
                            <p> content</p>
                            <img src="../img/category-4.jpg" alt="">
                            <div class="card-content d-flex flex-row gap-5">
                                <h3>title</h3>
                                <p>content</p>
                                <form action="">
                                    <input type="button" name="edit" value="Edit" class="btn btn-primary">
                                    <input type="button" name="update" value="Update" class="btn btn-secondary">
                                    <input type="button" name="delte" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div> -->
                        <!-- <table >
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Deleted price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> -->
                        <!-- <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr> -->

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Watch Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php


                                $sql = "SELECT * FROM newarrival";
                                $result = mysqli_query($config, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    $pid = $row[0];
                                    echo "<tr>
                                    <th scope='row'>{$row[0]}</th>
                                    <td style='width=50px;'><img src='../assets/{$row[1]}'  alt='arrival' '></td>
                                    <td>{$row[2]}</td>
                                    <td>{$row[3]}</td>
                                    <td>
                                     <form method='POST' action=''>
                                        <a href='./edit.php?id=$pid'  type='submit' name='update' class='btn btn-primary'>Update</a>
                                        <input type='hidden' name='pid' value='$pid'>
                                    <input type='submit' name='delete' class='btn btn-danger' value='Delete'>
                                      </form>
                                    </td>
                                    <td>
                                    </td>
                                </tr>";
                                }


                                // 
                                ?>
                                <!-- <button type="submit" name="delete"></button> -->

                                <?php
                                if (isset($_POST['delete'])) {
                                    echo "<script>alert('working delete')</script>";
                                    $query = "DELETE FROM newarrival WHERE id = '$pid'";
                                    if (mysqli_query($config, $query)) {
                                        echo "<script>window.location.href='./index.php'</script>";
                                    } else {
                                        echo "Product Not Deleted ";
                                    }
                                }


                                ?>

                            </tbody>
                        </table>
                    </div>

                    <!-- <form class="d-flex justify-content-end align-items-center" action="./create.php" method="POST"> -->
                    <!-- <input type="hidden" name="hidden-create-id" value=""> -->
                    <!-- <button type="submit" name="delete" class="btn btn-primary">Create Product</button> -->
                    <!-- <a href="create.php" class="btn btn-primary">Create Product</a> -->
                    <!-- </form> -->
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="./create.php" class="btn btn-primary">Create Product</a>
                    </div>

                </div>
            </div>

            <!-- product list panel end -->


            <!-- chat panel end -->

            <div id="chat" class="tab-content">
                <h2>chat Content</h2>
            </div>


            <!-- chat panel end -->

        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // slidebar active and inactive

        const toggleButton = document.getElementById('toggleButton');
        const slidebar = document.querySelector('.slidebar');
        slidebar.classList.toggle('slidebar-open');
        slidebar.style.transitionDuration = '0.5s';
        toggleButton.addEventListener('click', () => {
            slidebar.classList.toggle('slidebar-open');
            // slidebar.style.transitionDuration = '0.5s';
        });


        // tab active and inactive
        function showTab(tabId) {
            let tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(function(tabContent) {
                tabContent.style.display = 'none';
            });

            let tabLinks = document.querySelectorAll('.slidebar ul li a');
            tabLinks.forEach(function(tabLink) {
                tabLink.classList.remove('active');
            });

            let selectedTabContent = document.getElementById(tabId);
            selectedTabContent.style.display = 'block';

            let activeLink = document.querySelector(`.slidebar ul li a[onclick="showTab('${tabId}')"]`);
            activeLink.classList.add('active');
        }

        // showTab('contact');
        showTab('service');
        // showTab('home');

        //time
        function updateDateTime() {
            let now = new Date();
            let dateTimeString = now.toLocaleString();
            document.getElementById("datetime").textContent = dateTimeString;
            document.getElementById("datetime").style.backgroundColor = '';
        }
        updateDateTime();
        setInterval(updateDateTime, 1000);
    </script>

</body>

</html>