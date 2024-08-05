<?php
include_once('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="blogs.css">

<?php
include_once('./head.php');
?>

  </head>
  <body>


   <?php
   include_once('./nav.php');
   ?>

 

      <!-- design -->
    <section class = "design" id = "design">
      <div class = "container">
        <div class = "title">
          <h2>Recent Watch & Designs</h2>
          <p>recent Watch & designs on the blog</p>
        </div>

        <div class = "design-content">
         
          <!-- <div class = "design-item">
            <div class = "design-img">
              <img src = "./img/2022 New Casual Sport Chronograph Men's Watches Stainless Steel Band Wristwatch Big Dial Quartz Clock with Luminous Pointers - Silver blue.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
              <span>Art & Design</span>
            </div>
            <div class = "design-title">
              <a href = "https://www.watchaffinity.co.uk/blog/watch-quotes/">Everyone looks at your values and your personal style.</a>
            </div>
          </div>
    
          <div class = "design-item">
            <div class = "design-img">
              <img src = "./img/The High Standard Automatic Watch for Men_ Quality and Style in One.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
              <span>Art & Design</span>
            </div>
            <div class = "design-title">
              <a href = "https://www.watchaffinity.co.uk/blog/watch-quotes/">Starting a watch brand - Introducing Apiar</a>
            </div>
          </div>

          <div class = "design-item">
            <div class = "design-img">
              <img src = "./img/download (28).jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
              <span>Art & Design</span>
            </div>
            <div class = "design-title">
              <a href = "https://www.watchaffinity.co.uk/blog/watch-quotes/">The Watch is the most appealing to both beginners and experts.</a>
            </div>
          </div>
          
          <div class = "design-item">
            <div class = "design-img">
              <img src = "./img/CURREN Business Men's Watch Steel Band Multifunctional Chronograph Wristwatch Waterproof Round Watch.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
              <span>Art & Design</span>
            </div>
            <div class = "design-title">
              <a href = "https://www.watchaffinity.co.uk/blog/watch-quotes/">This revised and expanded edition of his autobiography </a>
            </div>
          </div>
          
          <div class = "design-item">
            <div class = "design-img">
              <img src = "./img/download (30).jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
              <span>Art & Design</span>
            </div>
            <div class = "design-title">
              <a href = "https://www.watchaffinity.co.uk/blog/watch-quotes/"> the first substantial advance in portable mechanical timekeeping</a>
            </div>
          </div>
       
          <div class = "design-item">
            <div class = "design-img">
              <img src = "./img/Round Quartz Watch Alloy Strap Alloy Pointer Alloy Case, Luxury Casual Luminous Calendar Watch, For Women Men.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
              <span>Art & Design</span>
            </div>
            <div class = "design-title">
              <a href = "https://www.watchaffinity.co.uk/blog/watch-quotes/"> For centuries people have been captivated by watches–whether for their technical precision</a>
            </div>
          </div> -->


          <?php
// Define an array with the design items
$design_items = [
    [
        'img_src' => './img/2022 New Casual Sport Chronograph Men\'s Watches Stainless Steel Band Wristwatch Big Dial Quartz Clock with Luminous Pointers - Silver blue.jpg',
        'alt_text' => 'Sport Chronograph Men\'s Watch',
        'link' => 'https://www.watchaffinity.co.uk/blog/watch-quotes/',
        'title' => 'Everyone looks at your values and your personal style.'
    ],
    [
        'img_src' => './img/The High Standard Automatic Watch for Men_ Quality and Style in One.jpg',
        'alt_text' => 'Automatic Watch for Men',
        'link' => 'https://www.watchaffinity.co.uk/blog/watch-quotes/',
        'title' => 'Starting a watch brand - Introducing Apiar'
    ],
    [
        'img_src' => './img/download (28).jpg',
        'alt_text' => 'Watch appealing to beginners and experts',
        'link' => 'https://www.watchaffinity.co.uk/blog/watch-quotes/',
        'title' => 'The Watch is the most appealing to both beginners and experts.'
    ],
    [
        'img_src' => './img/CURREN Business Men\'s Watch Steel Band Multifunctional Chronograph Wristwatch Waterproof Round Watch.jpg',
        'alt_text' => 'Business Men\'s Watch',
        'link' => 'https://www.watchaffinity.co.uk/blog/watch-quotes/',
        'title' => 'This revised and expanded edition of his autobiography'
    ],
    [
        'img_src' => './img/download (30).jpg',
        'alt_text' => 'Advance in portable mechanical timekeeping',
        'link' => 'https://www.watchaffinity.co.uk/blog/watch-quotes/',
        'title' => 'The first substantial advance in portable mechanical timekeeping'
    ],
    [
        'img_src' => './img/Round Quartz Watch Alloy Strap Alloy Pointer Alloy Case, Luxury Casual Luminous Calendar Watch, For Women Men.jpg',
        'alt_text' => 'Round Quartz Watch',
        'link' => 'https://www.watchaffinity.co.uk/blog/watch-quotes/',
        'title' => 'For centuries people have been captivated by watches–whether for their technical precision'
    ]
];
?>

<?php foreach ($design_items as $item): ?>
    <div class="design-item">
        <div class="design-img">
            <img src="<?php echo $item['img_src']; ?>" target="_blank"<?php echo $item['alt_text']; ?>">
            <span><i class="far fa-heart"></i></span> 
            <span>Art & Design</span>
        </div>
        <div class="design-title">
            <a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a>
        </div>
    </div>
<?php endforeach; ?>
         
        </div>
      </div>
    </section>
    <!-- end of design -->

  <!-- blog -->

    <!-- end of blog -->


    <section class = "about" id = "about">
      <div class = "container">
        <div class = "about-content">
          <div>
            <img src = "./img/2022 New Casual Sport Chronograph Men's Watches Stainless Steel Band Wristwatch Big Dial Quartz Clock with Luminous Pointers - Silver blue.jpg" alt = "">
          </div>
          <div class = "about-text">
            <div class = "title">
              <h2>Catherine Doe</h2>
              <p>Watch & design is my passion</p>
            </div>
            <p>Recently, when watching an interview with watch industry legend Jean-Claude Biver, he said something which resonated with me: “Look at your watch. Don’t look at what time it is.”</p>
            <p>I often find myself lost looking at my watch, whether at the detail on the dial or playing with the rotor through the caseback, and similarly as often I find myself checking back within seconds afterwards to check the time! It got me thinking about other watch quotes that people may have said, so I started recording some of the best ones I came across.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- <section class="subscribe">
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
      </section> -->

 <?php
include_once('./footer.php');
?>


  </body>
</html>