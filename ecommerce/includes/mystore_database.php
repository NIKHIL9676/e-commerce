<?php

    $conn=mysqli_connect("localhost","nikhil07","Nikhil@1234567890","mystore");
    if($conn){
    }
    else{

        echo mysqli_error($conn);

    }


?>