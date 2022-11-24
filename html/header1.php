<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" />
    <link rel="shortcut icon" href="./images/index/favicon.png.ico" type="image/x-icon">
    <title>Header</title>
</head>
<body>
    <!-- header start -->
  <header class="header">
    <div class="container-head">
      <div class="row v-center">
        <div class="header-item item-left">
          <div class="logo">
            <a href="./index.php">Winkelen</a>
          </div>
        </div>
        <!-- menu start here -->
        <div class="header-item item-center">
          <div class="menu-overlay">
          </div>
          <nav class="menu">
            <div class="mobile-menu-head">
              <div class="go-back"><i class="fa fa-angle-left"></i></div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>

            <!-- Home section -->

            <ul class="menu-main">

              <li>
                <a href="./index.php">Home</a>
              </li>

              <!-- Categories -->
              <li class="menu-item-has-children">
                <a href="./html/category.php">Categories</a>
              </li>

              <!-- Contact -->
              <li>
                <!-- <a href="./html/login.php">Login</a> -->
                <?php
                if (isset($_SESSION['user'])){
                  echo "<a href='./html/logout.php'>$_SESSION[user]</a>";
                }
                else{
                  echo "<a href='./html/login.php'>Login</a>";
                }
                ?>
              </li>
            </ul>
          </nav>
        </div>

        <!-- menu end here -->
        <div class="header-item item-right">
          <a href="#"><i class="fas fa-search"></i></a>
          <a href="#"><i class="far fa-heart"></i></a>
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span>
              <div class="mobile-menu-head">
                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- drop down menu -->

  <!-- <div id="mobile">
        <i id="bar" class="fa-solid fa-bars"></i>
      </div> -->
  </section>

</body>
</html>