<?php

    session_start();

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    $email = $_SESSION['email'];

    $s =  "select * from registration WHERE email='$email'";

    $result = mysqli_query($con, $s);

    if(mysqli_num_rows($result)> 0){
         $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: subhome.php");
    }

    if(isset($_POST['update'])){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $fatherName = $_POST['fatherName'];
        $phoneNumber = $_POST['phoneNumber'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
        $category = $_POST['category'];
        $district = $_POST['district'];
        $mandal = $_POST['mandal'];
        $village = $_POST['village'];
        $address = $_POST['address'];
        $college = $_POST['college'];
        $class = $_POST['class'];
        


        $sql = "UPDATE registration SET firstName='$firstName' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET lastName='$lastName' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET fatherName='$fatherName' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET phoneNumber='$phoneNumber' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET date='$date' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET gender='$gender' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET category='$category' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET district='$district' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET mandal='$mandal' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET village='$village' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET address='$address' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET college='$college' WHERE email='$email'";
        mysqli_query($con, $sql);

        $sql = "UPDATE registration SET class='$class' WHERE email='$email'";
        mysqli_query($con, $sql);

        

        $_SESSION['status'] = "Updated Successfully";
        header('location:profile.php');

    }


?>

