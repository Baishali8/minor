<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "winkelen1";

$conn = mysqli_connect($server,$user,$password,$db);

if($conn){
    ?>
        <!-- <Script>
        alert("Congratulations");
        </Script> -->

    <?php
}
else{
    ?>
        <!-- <Script>
        alert("Connection not Successfull");
        </Script> -->
        
    <?php
}

?>