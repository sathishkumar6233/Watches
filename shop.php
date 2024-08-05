<?php
session_start();

// include_once('./config.php');
if (!isset($_SESSION['user'])) {
  // header('location:login_form.php');

  // exit();
} else {
  $userId = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>



  <?php
  include_once('./head.php');
  ?>

</head>

<body>


  <?php
  include_once('./nav.php');
  ?>

  <section class="section__container arrival__container" id="">
    <h2 class="section__header">NEW ARRIVAL</h2>
    <div class="arrival__grid">
      <?php

      // $sql = "SELECT * FROM newarrival";
      // $result = mysqli_query($config, $sql);
      // while ($row = mysqli_fetch_array($result)) {
      //   echo "<div class='arrival__card'>
      //     <span>NEW</span>
      //     <a href='./product-card/product.php'> <img src='./assets/{$row[1]}' alt='arrival' /></a>
      //     <h4>{$row[2]}</h4>
      //     <p>{$row[3]}</p>
      //     <button class='btn read__more'>READ MORE</button>
      //     <button class='btn add__cart'>ADD TO CART</button>
      //   </div>";
      // }
      ?>


<?php
$sql = "SELECT * FROM newarrival";
$result = mysqli_query($config, $sql);

while ($row = mysqli_fetch_array($result)) {
    $pId = $row['id'];
    $productName = $row['title'];
    $productImage = $row['img'];
    $productPrice = $row['price'];

    echo "<div class='arrival__card'>
        <span>NEW</span>
        <a href='./product-card/product.php'><img src='./assets/$productImage' alt='arrival' /></a>
        <h4>$productName</h4>
        <p>$productPrice</p>
        <form action='' method='POST'>
            <input type='hidden' name='productId' value='$pId' />
            <input type='hidden' name='productName' value='$productName' />
            <input type='hidden' name='productImage' value='$productImage' />
            <input type='hidden' name='productPrice' value='$productPrice' />
            <input type='submit' name='addToCart' value='ADD TO CART' class='btn add__cart' />
        </form>
    </div>";
}

if (isset($_POST['addToCart'])) {
    $productName = $_POST['productName'];
    $productImage = $_POST['productImage'];
    $productPrice = $_POST['productPrice'];

    $query = "INSERT INTO addcart (userId, name,image,price ) VALUES('$userId','$productName','$productImage','$productPrice')";
    $result = mysqli_query($config, $query);

    if ($result) {
        echo "
        
        <script>window.location.href = 'cart.php';</script>
        ";
    } else {
        echo "Error updating cart: " . mysqli_error($config);
    }
}


      // else {
      //   // echo "<script>alert('not working')</script>";
      // }

      // if (isset($_POST['addToCart'])) {
      //     // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
      //         $productId = $_POST['productId'];
      //         $productName = $_POST['productName'];
      //         $productImage = $_POST['productImage'];
      //         $productPrice = $_POST['productPrice'];

      //         // Check if the cart session is set, if not, create it
      //         if (!isset($_SESSION['cart'])) {
      //             $_SESSION['cart'] = [];
      //         }

      //         // Add the product to the cart session
      //         $_SESSION['cart'][] = [
      //             'id' => $productId,
      //             'name' => $productName,
      //             'image' => $productImage,
      //             'price' => $productPrice
      //         ];

      //         // Redirect to cart.php after adding the product to the cart
      //         echo "<script>window.location.href = './cart.php';</script>";
      //         // exit();
      //     } else {
      //         // echo "<script>alert('Please log in to this website.')</script>";
      //         // echo "<script>window.location.href = './login-system/login_form.php';</script>";
      //     }
      // }




      //  echo $pId,$productImage,$productName,$productPrice;


      ?>



      <!-- <div class="arrival__card">
        <span>NEW</span>
        <img src="assets/arrival-1.png" alt="arrival" />
        <h4>TERJAN GOLD</h4>
        <p>$890</p>
       
        <button class="btn read__more">READ MORE</button>
        <button class="btn add__cart">ADD TO CART</button>
      </div> -->
      <!-- <div class="arrival__card">
        <img src="assets/arrival-2.png" alt="arrival" />
        <h4>SHEPARD PINK</h4>
        <p>$589</p>
        <button class="btn read__more">READ MORE</button>
        <button class="btn add__cart">ADD TO CART</button>
      </div>
      <div class="arrival__card">
        <span>NEW</span>
        <img src="assets/arrival-3.png" alt="arrival" />
        <h4>TITAN BLACK</h4>
        <p>$678</p>
        <button class="btn read__more">READ MORE</button>
        <button class="btn add__cart">ADD TO CART</button>
      </div>
      <div class="arrival__card">
        <img src="assets/arrival-4.png" alt="arrival" />
        <h4>ADERTICA WHITE</h4>
        <p>$570</p>
        <button class="btn read__more">READ MORE</button>
        <button class="btn add__cart">ADD TO CART</button>
      </div> -->
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
  include_once('./footer.php');
  ?>

</body>

</html>