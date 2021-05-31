<?php

    session_start();
    
    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fatherName = $_POST['fatherName'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $aadharNumber = $_POST['aadharNumber'];
    $type = $_POST['type'];
    $photo = $_FILES["photo"]["name"];

    if($password==$confirmPassword){

    $s =  "select * from register where email='$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num==1){
        $_SESSION['status'] = "Email already exists";
        header('location:bookbuspass.php');

    }
    else{
        $reg="insert into register(firstName, lastName, fatherName, date, gender, email, phoneNumber,  aadharNumber, type, photo,status) values('$firstName', '$lastName', '$fatherName', '$date', '$gender', '$email', '$phoneNumber','$aadharNumber', '$type', '$photo','Not Visited')";
        mysqli_query($con, $reg);
        $_SESSION['status'] = "Registration succesful";
        header('location:bookbuspass.php');


    }  
    }
    else{
        $_SESSION['status'] = "Invalid Password";
        header('location:bookbuspass.php');
    }

    
?>