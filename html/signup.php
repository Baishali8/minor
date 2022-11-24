<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Sign Up | Winkelen</title>
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">
</head>
<body>

<?php 
    
    include 'db.php';

    if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $conpass = mysqli_real_escape_string($conn, $_POST['conpass']);
    
        $password = password_hash($pass, PASSWORD_BCRYPT);
        $conpassword = password_hash($conpass, PASSWORD_BCRYPT);
    
        $emailquery = " select * from signup where Email='$email' ";
        $query = mysqli_query($conn,$emailquery);

        $uesrnamequery = " select * from signup where UserName='$uname' ";
        $query1 = mysqli_query($conn,$uesrnamequery);

    
        $emailcount = mysqli_num_rows($query);
        $usernamecount = mysqli_num_rows($query1);
        
        
        $_SESSION['user'] = $uname;

        if($usernamecount>0){
            ?>
            <script>
                alert("User Name already exists");
            </script>
            <?php
        }
        else{
            if($emailcount>0){
                ?>
                <script>
                    alert("Email already exists");
                </script>
                <?php
            }
            else{
                if($pass === $conpass){
        
        
                    $q = "insert into signup (FullName, UserName, Number, Email, Password, CPassword) values('$fname','$uname','$pnum','$email','$password','$conpassword')";
                    
                    $iquery = mysqli_query($conn, $q);
                    if($iquery){
                        ?>
                        <Script>
                            alert("Congratulations you have successfully registered yourself!");
                        </Script>
                        <?php
                     }
                     else{
                         ?>
                         <Script>
                             alert("An Error Has Been Occurred");
                         </Script>
                         <?php
                     }
                    ?>
                    <Script>
                    location.replace("../index.php");
                    </Script>
                    <?php
                }else{
                    ?>
                     <Script>
                    alert("Password not match")
                    </Script>
                    <?php
                }
            }
        }
    }    

?>

<div class="split-screen">
    <div class="left">
    <section class="copy">
    <h1>Explore Our Products</h1> </section>
  </div>
  <div class="right">
    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <section class="copy">
            <h2>Sign Up</h2>
            <div class="login-container">
                <p>Already have an account? <a href="../html/login.php">
                    <strong> log In </strong></a></p>
            </div>
        </section>
        
        <div class="input-container name">
            <label for="fname">Full Name</label>
            <input id="fname" name="fname" type="text" >
        </div>
        <div class="input-container email">
            <label for="uname">UserName</label>
            <input id="uname" name="uname" type="text">
        </div>
        <div class="input-container mobile">
            <label for="mobile">Phone Number</label>
            <input id="pnum" name="pnum" type="tel">
        </div>
        <div class="input-container mobile">
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
        </div>
        
        <div class="input-container password">
            <label for="password">Password</label>
            <input id="password" name="pass" type="password" placeholder="Must be at least 6 characters ">
            <i class="far fa-eye-slash"></i>
        </div>
        <div class="input-container confirm">
            <label for="password">Confirm Password</label>
            <input id="conpass" name="conpass" type="password" >
            <i class="far fa-eye-slash"></i>
        </div>
        <div class="input-container cta">
            <label class="checkbox-container">
                <input type="checkbox">
                <label for="check" class="p1">Remember Password</label>
                <span class="checkmark"></span>
                
            </label>
        </div>
        <!-- <button class="signup-btn" name="submit" type="submit">Sign Up </button> -->
        <input class="signup-btn" type="submit" value="Sign Up" name="submit">
        <section class="copy legal">
            <p><span class="small">By continuing, you agree to accept our <br> <a href="#">Privacy Policy </a> &amp; <a href="#">Terms of Service</a>.</span></p>
        </section>
    </form>
    
  </div>
   </div>
</body>
</html>