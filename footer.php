<footer class="footer">
    <div class="section__container footer__container">
      <!-- <div class="footer__col">
        <h4>Helpful links</h4>
        <ul class="footer__links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./Blog.php">Blog</a></li>
          <li><a href="./cart.php">Cart</a></li>
          <li><a href="./login-system/login_form.php">Login</a></li>
        </ul>
      </div> -->
      <?php
// Define an associative array with link names and URLs
$links = [
    'Home' => 'index.php',
    'Blog' => 'Blog.php',
    'Cart' => 'cart.php',
    'Login' => 'login-system/login_form.php'
];
?>

<div class="footer__col">
    <h4>Helpful links</h4>
    <ul class="footer__links">
        <?php foreach ($links as $name => $url): ?>
            <li><a href="<?php echo $url; ?>" style="text-decoration:none"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
      <!-- <div class="footer__col">
        <h4>Communication</h4>
        <ul class="footer__links">
          <li><a href="./contact.php">Contact us</a></li>
        </ul>
      </div> -->
      <?php
// Define an associative array with link names and URLs
$communication_links = [
    'Contact us' => 'contact.php'
];
?>

<div class="footer__col">
    <h4>Communication</h4>
    <ul class="footer__links">
        <?php foreach ($communication_links as $name => $url): ?>
            <li><a href="<?php echo $url; ?>" style="text-decoration:none"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
      <!-- <div class="footer__col">
        <h4>Visit</h4>
        <ul class="footer__links">
        <li><a href="mailto:sathishkutta59@gmail.com">sathishkumar@gmail.com</a></li>
                <li><a href="https://maps.app.goo.gl/fM4sqx1K9yY81G2N6">2/27,Gomathipuram 2nd street, Madurai.</a></li>
                <li><a href="tel://+91 6379858232">+91 6379858232</a></li>
        </ul>
      </div> -->

      <?php
// Define an associative array with visit information
$visit_info = [
    'sathishkumar@gmail.com' => 'mailto:sathishkutta59@gmail.com',
    '2/27,Gomathipuram 2nd street, Madurai.' => 'https://maps.app.goo.gl/fM4sqx1K9yY81G2N6',
    '+91 6379858232' => 'tel://+91 6379858232'
];
?>

<div class="footer__col">
    <h4>Visit</h4>
    <ul class="footer__links">
        <?php foreach ($visit_info as $text => $link): ?>
            <li><a href="<?php echo $link; ?>" style="text-decoration:none" target="_blank"><?php echo $text; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
      <!-- <div class="footer__col">
        <h4>Social</h4>
        <ul class="footer__links">
        <div class="social">
                <a href="https://www.instagram.com/accounts/login/"><i class="ri-instagram-fill"></i></a>
                <a href="https://x.com/?lang=en-in"><i class="ri-twitter-line"></i></a>
                <a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a>
               </div>
        </ul>
        </div> -->

        <?php
// Define an associative array with social media platforms and their URLs
$social_links = [
    'ri-instagram-fill' => 'https://www.instagram.com/accounts/login/',
    'ri-twitter-line' => 'https://x.com/?lang=en-in',
    'ri-facebook-fill' => 'https://www.facebook.com/'
];
?>

<div class="footer__col">
    <h4>Social</h4>
    <ul class="footer__links ">
        <div class="social">
            <?php foreach ($social_links as $icon => $url): ?>
                <a href="<?php echo $url; ?>" style="text-decoration:none" target="_blank"><i class="<?php echo $icon; ?>"></i></a>
            <?php endforeach; ?>
        </div>
    </ul>
</div>
</div>
  
    <!-- <div class="footer__bar">
      &copy; 2024 All right reserved by Watch.
    </div> -->
    <?php
// Get the current year
$current_year = date("Y");
?>

<div class="footer__bar">
    &copy; <?php echo $current_year; ?> All rights reserved by Watch.
</div>
  </footer>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script>