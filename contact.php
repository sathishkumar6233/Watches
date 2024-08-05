<?php
include_once('./config.php')
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <?php
  include_once('./head.php');
  ?>

  </head>
  <body>


  <?php
include_once('./nav.php');
?>
    
    <section class = "contact-section">
      <div class = "contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact us</h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text"> A watch can become a sophisticated detail added to a woman's style. It can create a strong impression when she shakes hands or holds phones. That little thing on her wrist helps to perfect any appearance from a minimal look, a posh outfit to an office dress.</p>
      </div>


      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <a href="tel://+91 6379858232"><span style="color: black;">+91 6379858232</span></a>
            <!-- <span><a href="tel://+91 6379858232">+91 6379858232</a></span> -->
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <a href="mailto:sathishkutta59@gmail.com"> <span style = "color:black";>sathishkutta59@gmail.com.com</span></a>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>Address</span>
           <a href="https://maps.app.goo.gl/fM4sqx1K9yY81G2N6" target="_blank"> <span  style="color:black";>2/27,Gomathipuram 2nd street, Madurai.</span></a>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>Opening Hours</span>
            <span style="color:black";>Monday - Friday (9:00 AM to 5:00 PM)</span>
          </div>
        </div>

        <div class = "contact-form">
          <form>
            <div>
              <input type = "text" class = "form-control" placeholder="First Name" required>
              <input type = "text" class = "form-control" placeholder="Last Name" required>
            </div>
            <div>
              <input type = "email" class = "form-control" placeholder="E-mail" required>
              <input type = "text" class = "form-control" placeholder="Phone" required>
            </div>
            <textarea rows = "5" placeholder="Message" class = "form-control" required></textarea>
            <input type = "submit" class = "send-btn" value = "send message">
          </form>

          <div>
            <img src = "image/contact-png.png" alt = "">
          </div>
        </div>
      </div>

      <div class = "map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15720.492371141914!2d78.15613729999998!3d9.92370525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c44d5428bbfd%3A0xd3c4f554ed1984c9!2sGomathipuram%2C%20Tamil%20Nadu%20625020!5e0!3m2!1sen!2sin!4v1722845080275!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15720.492371141914!2d78.15613729999998!3d9.92370525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c44d5428bbfd%3A0xd3c4f554ed1984c9!2sGomathipuram%2C%20Tamil%20Nadu%20625020!5e0!3m2!1sen!2sin!4v1722845080275!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

    
    <?php
     include_once('./footer.php');
     ?>

  </body>
</html>