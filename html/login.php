<?php session_start()?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Sign-in | Winkelen</title>
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">
</head>
<body>

<?php

include 'db.php';

if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $uname_search = " select * from signup where UserName='$uname' ";
    $query = mysqli_query($conn, $uname_search);

    $uname_count = mysqli_num_rows($query);

    $_SESSION['user'] = $uname;

    if($uname_count){
        $uname_pass = mysqli_fetch_assoc($query);
        $db_pass = $uname_pass['Password'];
        $pass_decode = password_verify($pass, $db_pass);
        
        if($pass_decode){
            ?>

        <script>
            alert("Welcome back good to see you!")
        </script>

            <?php
            ?>
            <Script>
                location.replace("../index.php");
            </Script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Password or UserName not match")
            </script>
            <?php
        }

    }else{
        ?>

        <script>
            alert("UserName Not Match")
        </script>

        <?php
    }
    
}


?>
   
    <div class="left">
    <section class="copy">
    <h1>Explore Our Products</h1> </section>
  </div>
  <div class="right">
    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <section class="copy">
            <h2>Log In</h2>
            <div class="login-container">
                <p>Don't have an account? <a href="../html/signup.php">
                    <strong> Sign Up </strong></a></p>
            </div>
        </section>
   
        

        <div class="input-container1">
            <label for="email">UserName</label>
            <input id="uname" name="uname" type="text" placeholder="enter username">
        </div>
      
        <div class="input-container2">
            <label for="password">Password</label>
            <input id="password" name="pass" type="password" placeholder="enter your password ">
            <i class="far fa-eye-slash"></i>
        </div>
        <div class="container3">
            <p> 
                <a href="#">
                <strong> Forgot password? </strong>
                </a>
            </p>
        </div>
    </section>
        <!-- <button class="login-btn" type="submit">Login </button> -->
        <input class="signup-btn" type="submit" value="Login" name="submit">
        <section class="copy legal">
            <p><span class="small">By continuing, you agree to accept our <br> <a href="#">Privacy Policy </a> &amp; <a href="#">Terms of Service</a>.</span></p>
        </section>
    </form>
  </div>
   
</body>
</html>