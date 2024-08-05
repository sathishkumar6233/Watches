<?php
include_once('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<!-- <head> -->


<?php
include_once('./head.php');
?>


<!-- </head> -->
<body>


<?php
// include_once('./nav.php');
?>

  <section class="story">
  <div class="section__container story__container"> 
      <!-- <div class="story__image">
        <img src="assets/story.png" alt="story" />
      </div>
      <div class="story__content">
        <h2 class="section__header">OUR STORY</h2>
        <h4>Inspirational Watch Of This Year</h4>
        <p>
          Each timepiece featured in this collection embodies the pinnacle of
          horological artistry, blending cutting-edge design with unparalleled
          functionality.
        </p>
        <div class="story__btn">
          <button class="btn">DISCOVER</button>
        </div>
      </div> -->
   
    <?php

$sql = "SELECT * FROM Story";
$result = mysqli_query($config, $sql);
while ($row = mysqli_fetch_array($result)) {
  echo "<div class='story__image'>
    <img src='./assets/{$row[1]}' alt='story' />
    </div>
    <div class='story__content'>
      <h2 class='section__header'>{$row[2]}</h2>
      <h4>{$row[3]}</h4>
      <p>
        {$row[4]}
      </p>
      <div class='story__btn'>
          <button class='btn'>DISCOVER</button>
        </div>
    </div>";
};
?>
  </div>
 </section>


  <section class="section__container arrival__container" id="">
    <h2 class="section__header">WATCH COLLECTION</h2>
    <div class="arrival__grid">
      <!-- <div class="arrival__card">
          <span>NEW</span>
          <img src="assets/arrival-1.png" alt="arrival" />
          <h4>TERJAN GOLD</h4>
          <p>₹890</p>
          <button class="btn read__more">READ MORE</button>
          <button class="btn add__cart">ADD TO CART</button>
        </div>
      <div class="arrival__card">
          <img src="assets/arrival-2.png" alt="arrival" />
          <h4>SHEPARD PINK</h4>
          <p>₹589</p>
          <button class="btn read__more">READ MORE</button>
          <button class="btn add__cart">ADD TO CART</button>
        </div>
        <div class="arrival__card">
          <span>NEW</span>
          <img src="assets/arrival-3.png" alt="arrival" />
          <h4>TITAN BLACK</h4>
          <p>₹678</p>
          <button class="btn read__more">READ MORE</button>
          <button class="btn add__cart">ADD TO CART</button>
        </div>
        <div class="arrival__card">
          <img src="assets/arrival-4.png" alt="arrival" />
          <h4>ADERTICA WHITE</h4>
          <p>₹570</p>
          <button class="btn read__more">READ MORE</button>
          <button class="btn add__cart">ADD TO CART</button>
        </div> -->

        <?php

$sql = "SELECT * FROM watchcollection";
$result = mysqli_query($config, $sql);
while ($row = mysqli_fetch_array($result)) {
  echo "<div class='arrival__card'>
    <span>NEW</span>
    <img src='./assets/{$row[1]}' alt='arrival' />
    <h4>{$row[2]}</h4>
    <p>₹{$row[3]}</p>
    <button class='btn read__more'>READ MORE</button>
  </div>";
}
?>
    </div>
  </section>


  <section>
    <div class="client">
    <div class="section__container client__container">
        <div class="client__image">
          <img src="assets/client.jpg" alt="client" />
        </div>
      <div class="client__content">
      <div class="swiper">
      <div class="swiper-wrapper">
        <?php
        // $sql= "SELECT * FROM  review";
        // $result = mysqli_query($config, $sql);
        // while ($row = mysqli_fetch_array($result)) {
        //   echo "<div class='swiper-slide'>
        //   <div class='client__card'>
        //     <span><i class='ri-double-quotes-l'></i></span>
        //     <p>
        //       {$row[2]}
        //     </p>
        //     <div class='client__card__details'>
        //       <img src='./assets/{$row[1]}' alt='client' />
        //       <div>
        //         <h4>{$row[3]}</h4>
        //         <h5>{$row[4]}</h5>
        //       </div>
        //     </div>
        //   </div>
        // </div>";
        // }         
        ?>
           <div class="swiper-slide">
              <div class="client__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                  I never expected such an extensive range of watches catered
                  to various tastes and preferences. It was challenging to
                  choose just one! The service was impeccable, making my
                  shopping experience truly enjoyable. I'll definitely be back
                  for more.
                </p>
                <div class="client__card__details">
                  <img src="assets/client-1.jpg" alt="client" />
                  <div>
                    <h4>Michael Chen</h4>
                    <h5>Financial Analyst</h5>
                  </div>
                </div>
              </div>
            </div>
           <div class="swiper-slide">
              <div class="client__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                  As an avid watch collector, I've scoured countless websites,
                  but none match the caliber of this one. The selection is
                  unparalleled, and the attention to detail is evident in
                  every piece. Customer service was prompt and knowledgeable,
                  ensuring a seamless experience.
                </p>
                <div class="client__card__details">
                  <img src="assets/client-2.jpg" alt="client" />
                  <div>
                    <h4>Sarah Johnson</h4>
                    <h5>Marketing Executive</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                  From casual elegance to sophisticated luxury, this website
                  has it all. I've been a loyal customer for years, and their
                  consistency in delivering exceptional service and products
                  never ceases to amaze me. Whether it's a special occasion or
                  a personal treat, I trust this site to deliver.
                </p>
                <div class="client__card__details">
                  <img src="assets/client-3.jpg" alt="client" />
                  <div>
                    <h4>David Lee</h4>
                    <h5>Business Owner</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section class="subscribe">
    <div class="section__container subscribe__container">
      <div>
        <h2>Subscribe Our Newsletter</h2>
        <p>
          Be the first to know about our latest arrivals, exclusive offers,
          and insider updates by subscribing to our newsletter.
        </p>
      </div>
      <div>
        <button class="btn">SUBSCRIBE</button>
      </div>
    </div>
  </section>

<?php
include_once('./footer.php')
?>
  <!-- <footer class="footer">
    <div class="section__container footer__container">
      <div class="footer__col">
        <h4>Helpful links</h4>
        <ul class="footer__links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./About.php">About</a></li>
          <li><a href="./cart.php">Cart</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>About Us</h4>
        <ul class="footer__links">
          <li><a href="#">Customer Support</a></li>
          <li><a href="#">Terms & Condition</a></li>
          <li><a href="#">Copy Right</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Product</h4>
        <ul class="footer__links">
          <li><a href="#">Sports Watches</a></li>
          <li><a href="#">Mechanical Watches</a></li>
          <li><a href="#">Accessories</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Support</h4>
        <ul class="footer__links">
          <li><a href="#">Product Help</a></li>
          <li><a href="#">Service & Warranty</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__bar">
      &copy; 2024 All right reserved by Watch.
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script> -->

</body>

</html>