<?php

include 'db.php';
// session_start()

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" />
  <link rel="shortcut icon" href="./images/index/favicon.png.ico" type="image/x-icon">
  <title>Winkelen - An Online Shopping Platform</title>
  <!-- BootStrap CDN -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>

<body>
<?php
include "html/header1.php";

?>
  
  <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons and upto 70% off!</p>
    <button>Shop Now</button>
  </section>

  <!-- testimonial -->



  <!-- testimonial -->

  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="./images/index/save.png" alt="">
      <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
      <img src="./images/index/online.png" alt="">
      <h6>Online Order</h6>
    </div>
    <div class="fe-box">
      <img src="./images/index/savemoney.png" alt="">
      <h6>Save Money</h6>
    </div>
    <div class="fe-box">
      <img src="./images/index/promotions.png" alt="">
      <h6>Promotions</h6>
    </div>
    <div class="fe-box">
      <img src="./images/index/happy.png" alt="">
      <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
      <img src="./images/index/support.png" alt="">
      <h6>F24/7 Support</h6>
    </div>
  </section>

  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
<?php
$result= mysqli_query($conn, "SELECT * FROM product WHERE product_id BETWEEN 1 AND 8");
while($row=mysqli_fetch_array($result)){
?>
    <a href="<?php printf('%s?product_id=%s','./html/product.php',$row['product_id']); ?>">
      <div class="pro">
        <img src="<?php echo $row['product_img']; ?>" alt="">
        <div class="des">
          <span>adidas</span>
          <h5><?php echo $row['product_name']; ?></h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>&#x20b9;<?php echo $row['product_price']; ?></h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
    </a>
    <?php
    }
    ?>
    </div>
  </section>

  <section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% Off</span> - All t-shirts & Accessories</h2>
    <button class="normal">Explore More</button>
  </section>

  <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
<?php
$result= mysqli_query($conn, "SELECT * FROM product WHERE product_id BETWEEN 9 AND 16");
while($row=mysqli_fetch_array($result)){
?>
      <a href="<?php printf('%s?product_id=%s','./html/product.php',$row['product_id']); ?>">
      <div class="pro">
        <img src="<?php echo $row['product_img']; ?>" alt="">
        <div class="des">
          <span>adidas</span>
          <h5><?php echo $row['product_name']; ?></h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>&#x20b9;<?php echo $row['product_price']; ?></h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
      </a>
    <?php
    }
    ?>
    </div>
  </section>

  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>crazy deals</h4>
      <h2>buy 1 get 1 free</h2>
      <span>The best classic dress is on sale at cara</span>
      <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
      <h4 class="h4-2">spring/summer</h4>
      <h2>upcoming seas

        on</h2>
      <span>The best classic dress is on sale at cara</span>
      <button class="white">Learn More</button>
    </div>
  </section>

  <section id="banner3">
    <div class="banner-box">
      <h2>SEASON SALE</h2>
      <h3>Winter Collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
      <h2>NEW FOOTWEAR COLLECTION</h2>
      <h3>Spring/Summer 2022</h3>
    </div>
    <div class="banner-box banner-box3">
      <h2>T SHIRTS</h2>
      <h3>New Trendy Prints</h3>
    </div>
  </section>

  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up For Newsletter</h4>
      <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address">
      <button class="normal">Sign Up</button>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col">
      <div class="logoicon">
        <img class="logo" src="./images/index/logo.png" height="250" alt="">
      </div>
      <h4>Contact</h4>
      <p><strong>Address: </strong> Grand Trunk Road Near Khadina More, Dharampur, Chinsurah R S, Chinsurah, West Bengal
        712101</p>
      <p><strong>Phone: </strong>+918101777737</p>
      <p><strong>Hours: </strong>24/7</p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-pinterest-p"></i>
          <i class="fa-brands fa-youtube"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="./html/about.php">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="./html/contactUs.php">Contact Us</a>
    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="./html/form.html">Sign In</a>
      <a href="#">View Cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track My Order</a>
      <a href="../html/contactUs.php">Help</a>
    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
        <img src="./images/index/app.jpg" alt="">
        <img src="./images/index/play.jpg" alt="">
      </div>
      <p>Secured Payment Gateways</p>
      <img src="./images/index/pay.png" alt="">
    </div>

    <div class="copyright">
      <p>&copy; Winkelen 2022 All rights reserved</p>
    </div>

  </footer>
  <?php
    mysqli_close($conn);
  ?>

  <script src="./js/script.js" charset="utf-8"></script>
</body>

</html>