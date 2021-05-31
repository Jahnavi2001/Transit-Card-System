<?php

session_start();
    
    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    $email = $_POST['email'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if($newPassword==$confirmPassword){

    	$oldPassword = md5($oldPassword);
    	$newPassword = md5($newPassword);
    	$confirmPassword = md5($confirmPassword);


    $s =  "select * from registration where email='$email' && password='$oldPassword'";

    $result = mysqli_query($con, $s);

    $num = mysqli_fetch_array($result);

    if($num>0){

        $sql = "UPDATE registration SET password='$newPassword'
                   WHERE email='$email'";

        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET confirmPassword='$confirmPassword'
                   WHERE email='$email'";

        mysqli_query($con, $sql);


        $_SESSION['status'] = "Password Changed Successfully";
        header('location:changepassword.php');
    }
    else{

    	$_SESSION['status'] = "Invalid Password";
        header('location:changepassword.php');
    }

    }

    else{

        $_SESSION['status'] = "Password does not  match";
        header('location:changepassword.php');
        
    }



?>
