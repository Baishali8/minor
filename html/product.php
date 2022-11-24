<?php
include('../database/dbcon.php');
$id= $_GET['product_id'];
$result = mysqli_query($conn, "SELECT * FROM product");
foreach($result as $row):
    if($row['product_id'] == $id):
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $row['product_name']; ?> | Winkelen</title>

    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/product.css">

    
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">

</head>

<body>

<?php
include "header.php";

?>

    <!-- Main Body -->
    <section class="container sproduct my-5 pt-5">
        <div class="row">

            <div class="col-lg-5 col-md-12 col-12">

                <img class="img-fluid w-100 pb-1" src=".<?php echo $row['product_img'] ?>" alt="">

            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home/<?php echo $row['category_name'] ?></h6>
                <h3 class="py-4"><?php echo $row['product_name'] ?></h3>
                <h2>&#x20b9;<?php echo $row['product_price'] ?></h2>
                <input type="number" value="1">
                <button class="buy-btn btn">Add To Cart</button>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span>Think and Grow Rich has been called the "Granddaddy of All Motivational Literature." It was the first book to boldly ask, "What makes a winner?" The man who asked and listened for the answer, Napoleon Hill, is now counted in the top ranks of the world's winners himself.The most famous of all teachers of success spent "a fortune and the better part of a lifetime of effort" to produce the "Law of Success" philosophy that forms the basis of his books and that is so powerfully summarized in this one.In the original Think and Grow Rich, published in 1937, Hill draws on stories of Andrew Carnegie, Thomas Edison, Henry Ford, and other millionaires of his generation to illustrate his principles. In the updated version, Arthur R. Pell, Ph.D., a nationally known author, lecturer, and consultant in human resources management and an expert in applying Hill's thought, deftly interweaves anecdotes of how contemporary millionaires and billionaires, such as Bill Gates, Mary Kay Ash, Dave Thomas, and Sir John Templeton, achieved their wealth. Outmoded or arcane terminology and examples are faithfully refreshed to preclude any stumbling blocks to a new generation of readers.</span>
            </div>

        </div>
    </section>
    
    <!-- Main Body End -->

    <!-- Footer -->
    <footer class="section-p1">
        <div class="col-foot">
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
        <div class="col-foot">
            <h4>About</h4>
            <a href="../html/about.php">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="../html/contactUs.php">Contact Us</a>
        </div>
        <div class="col-foot">
            <h4>My Account</h4>
            <a href="../html/form.php">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="../html/contactUs.php">Help</a>
        </div>
        <div class="col-foot install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row-foot">
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
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>

<?php
    endif;
    endforeach;
?>
