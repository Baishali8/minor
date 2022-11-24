<?php
include('../database/dbcon.php');
$id= $_GET['category_id'];
$result = mysqli_query($conn, "SELECT * FROM product");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List | Winkelen</title>
    <link rel="stylesheet" href="../css/product-list.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" />
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">
</head>
<body>
<?php
include "header.php";

?>

    <!-- Main Body -->
    <div class="wrapper">
        <div class="container">
            <div class="title">
                <h1>New Arrival</h1>
            </div>
            <div class="item-grid">
            <?php
            foreach($result as $row):
                if($row['category_id'] == $id):
                  ?>

                  <div class="item">
                    <div class="item-img">
                        <img src=".<?php echo $row['product_img']; ?>" alt="">
                        <div class="item-action">
                          <a href="<?php printf('%s?product_id=%s','./product.php',$row['product_id']); ?>" class="view">
                            <span>
                              <i class="fas fa-search-plus"></i>
                            </span>
                          </a>
                          <a href="#" class="buy">
                            <span>
                              <i class="fas fa-cart-plus"></i>
                            </span>
                          </a>
                          <a href="#" class="wishlist">
                            <span>
                              <i class="fas fa-heart"></i>
                            </span>
                          </a>
                        </div>
                    </div>

                    <div class="item-details">
                      <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                      </ul>
                      <p class="price">&#x20b9;<?php echo $row['product_price']; ?></p>
                      <p class="name"><?php echo $row['product_name']; ?></p>
                    </div>
                </div>

            <?php
            endif;
            endforeach;
            ?>
            </div>
        </div>
    </div>

    <footer class="section-p1">
      <div class="col">
          <div class="logoicon">
              <img class="logo" src="../images/index/logo.png" height="250" alt="">
          </div>
          <h4>Contact</h4>
          <p><strong>Address: </strong> Grand Trunk Road Near Khadina More, Dharampur, Chinsurah R S, Chinsurah, West
              Bengal 712101</p>
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
          <a href="../html/about.php">About Us</a>
          <a href="#">Delivery Information</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="../html/contactUs.php">Contact Us</a>
      </div>
      <div class="col">
          <h4>My Account</h4>
          <a href="../html/form.php">Sign In</a>
          <a href="#">View Cart</a>
          <a href="#">My Wishlist</a>
          <a href="#">Track My Order</a>
          <a href="../html/contactUs.php">Help</a>
      </div>
      <div class="col install">
          <h4>Install App</h4>
          <p>From App Store or Google Play</p>
          <div class="row">
              <img src="../images/index/app.jpg" alt="">
              <img src="../images/index/play.jpg" alt="">
          </div>
          <p>Secured Payment Gateways</p>
          <img src="../images/index/pay.png" alt="">
      </div>

      <div class="copyright">
          <p>&copy; Winkelen 2022 All rights reserved</p>
      </div>

  </footer>

    <script>
      let view = document.querySelectorAll('.view');
      let buy = document.querySelectorAll('.buy');
      let wishlist = document.querySelectorAll('.wishlist');

      setContent(view, 'View');
      setContent(buy, 'Add To Cart');
      setContent(wishlist, 'Save Item');

      function setContent(list, text){
        list.forEach(listItem => {
          listItem.setAttribute('data-before', text)
        });
      }
    </script>
    
</body>
</html>

