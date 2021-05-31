<?php

    session_start();
    
    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($password==$confirmPassword){

    $s =  "select * from registration where email='$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    $encodepassword = md5($password); 

    $encodeconfirmPassword = md5($confirmPassword);

    if($num==1){
        $_SESSION['status'] = "Email already exists";
        header('location:signup.php');

    }
    else{
        $reg="insert into registration(firstName, lastName, email, phoneNumber, password, confirmPassword) values('$firstName', '$lastName', '$email', '$phoneNumber', '$encodepassword', '$encodeconfirmPassword')";
        mysqli_query($con, $reg);

       // $sql="insert into profile(firstName, lastName, fatherName, email, phoneNumber, date, gender, category,  college, address)
         //    values('$firstName', '$lastName', '', '$email', '$phoneNumber', '','','','','')";

        //mysqli_query($con, $sql);

        $_SESSION['status'] = "Registration succesful";
        header('location:signup.php');


    }  
    }
    else{
        $_SESSION['status'] = "Invalid Password";
        header('location:signup.php?');
    }

    
?>