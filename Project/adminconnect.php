<?php

    session_start();

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');


    $s =  "select * from register ORDER BY id DESC";

    $result = mysqli_query($con, $s);

    
?>