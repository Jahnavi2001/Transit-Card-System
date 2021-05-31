<?php

   session_start();
	
    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    $email = $_GET['email'];

    $s =  "select * from registration WHERE email='$email' ";

    $result = mysqli_query($con, $s);

    if(mysqli_num_rows($result)> 0){
         $row = mysqli_fetch_assoc($result);
         
    }else{
    	header("Location: adminhome.php");
    }


?>