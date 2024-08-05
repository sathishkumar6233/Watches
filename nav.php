<?php
// session_start();

function isLoggedIn() {
  return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}
?>


<header class="header__container" id="">
  <nav>
    <div class="nav__header">
      <div class="nav__logo">
        <a href="./index.php">
          <img src="assets/logo-dark.png" alt="logo-dark" class="logo-dark" />
          <img src="assets/logo-white.png" alt="logo-white" class="logo-white" />
        </a>
      </div>
      <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-line"></i>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <?php
      include_once 'config.php';

      // Get the current file name
      $currentPage = basename($_SERVER['SCRIPT_NAME']);

      // Fetch navigation links from the database
      $sql = "SELECT name, url FROM navgation";
      $result = $config->query($sql);

      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          $activeClass = $currentPage == basename($row['url']) ? 'active' : '';
          echo '<li><a href="' . $row['url'] . '" class="' . $activeClass . '" style="text-decoration:none">' . $row['name'] . '</a></li>';
        }
      } else {
        echo "0 results";
      }

      // Add Login/Logout links based on session status
      // if ($isLoggedIn) {
      // echo '<li><a href="./login-system/login_form.php">Login</a></li>';

      // echo '<li><a href="./login-system/login_form.php" style="text-decoration:none">Logout</a></li>';
      // } else {
      // echo '<li><a href="./login-system/login_form.php" style="text-decoration:none">Login</a></li>';
      // echo '<li><a href="./login-system/login_form.php" style="text-decoration:none">Logout</a></li>';

      // }


      ?>
      <style>
        .logout{
          border: none;
          font-size:16px;
          font-family: "Poppins", sans-serif;
          cursor: pointer;
          font-weight: 500;
          transition: 0.3s;
          color: #2d2b2c;
        }
        .logout:hover{
          color: #ffb667;
        }
      </style>
<?php
  if(isset($_POST['logout'])){
    session_destroy();
    echo"<script>alert('Logout Sucessfully')</script>";
    echo"<script>window.location.href='./index.php'</script>";
   
  }
?>
<!-- 
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" name="logout" value="Logout" class=" logout ">
      </form> -->

      <?php if (isset($_SESSION['user'])) : ?>
                <li>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="submit" name="logout" value="Logout" class=" logout ">
                    </form>
                </li>

            <?php else : ?>
                <li><a href="./login-system/login_form.php">Login</a></li>
             <?php endif; ?>
    </ul>
  </nav>
  <style>
    .nav__links .active {
      font-weight: bold;
      color: #ffb667;
      /* Example color for active link */
    }
  </style>
  <?php
  // Fetch banner data from the database
  $sql = "SELECT * FROM banner";
  $result = $config->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='header__image'>
              <img src='./assets/{$row['imagePath']}' alt='header' />
            </div>
            <div class='header__content'>
              <h1>{$row['title']}</h1>
              <p>{$row['subpara']}</p>
              <h4>{$row['price']}</h4>
              <div class='header__btns'>
                <button class='btn discover'>DISCOVER</button>
              </div>
            </div>";
    }
  }

  // Close the database connection
  // $config->close();
  ?>
</header>