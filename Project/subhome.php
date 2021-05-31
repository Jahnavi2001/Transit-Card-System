<?php

   session_start();

   $con=mysqli_connect('localhost','root','');

   mysqli_select_db($con,'details');

   $email = $_SESSION['email'];

   $s =  "select * from registration where email='$email'";

   $result = mysqli_query($con, $s);

   $num = mysqli_num_rows($result);

   $row = mysqli_fetch_assoc($result);

   $_SESSION['firstName'] = $row['firstName'];

   $_SESSION['lastName'] = $row['lastName'];


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sub Home</title>

	<style type="text/css">
 
    .navbar {
         overflow: hidden;
         background-color: #333;
         position: fixed; 
         top: 0; 
         width: 100%;
      }


		.navbar-brand,
        .navbar-nav li a {
            line-height: 80px;
            height: 80px;
            padding-top: 0;
        }
body {
  /*background-image: url("https://www.enjpg.com/img/2020/light-pink-background-6-500x313.jpg");*/
   background-image: url("https://image.shutterstock.com/image-illustration/abstract-gradient-green-blue-yellow-260nw-505795042.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  /*background-color: #80ced6;*/
  /*background-color: hsla(89, 43%, 51%, 0.3);*/
  /*background-color: rgba(201, 76, 76, 0.3);*/
}
        
	</style>
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 23px;" >Transit Card System</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="font-size: 19px;">Home</a></li>
    	<li><a href="profile.php" style="font-size: 19px;">My Profile</a></li>
      <li><a href="viewstatus.php" style="font-size: 19px;">View Status</a></li>
      <li><a href="changepassword.php" style="font-size: 19px;">Change Password</a></li>
      <li><a href="help.php" style="font-size: 19px;">Help</a></li>
      <li><a href="home.php" style="font-size: 19px;" ><span class="glyphicon glyphicon-log-out" style="font-weight: bold"></span> Logout</a></li>
    </ul>
  </div>
</nav>

    
     <h1 style="text-align:center;padding-top:110px;font-size: 45px ;font-family: Garamond, serif; ">
      <span style="font-size: 55px;
     font-weight: bold;">Welcome <?php echo 
                   $row['firstName'];?> <?php echo $row['lastName'] ?></span><br>to<br><span style="font-weight: bold;
                   font-size: 75px; padding-top: 90px;">Sri Sai Maruthi City Bus Service</span> </h1><br>

    <div style="text-align: justify;padding-left: 100px; padding-right: 100px; font-family: 'Trebuchet MS', sans-serif;">

    <h4>Sri Sai Maruthi City Bus Service is a bus transport service from Nambur Village to Guntur City via Kakani and Viceversa provided for the people with the affordable price who are travelling either for the study purpose or any other work or job.</h4>

    <h4>Sri Sai Maruthi City Bus Service provides the buspass for the students who travel regularly in the bus inorder to reduce the daily transport cost.The people who wants the buspass can click on <span style="font-weight: bold;font-size:21px; ">Book Buspass Button </span> provided below and fill the application form online and click on submit button.</h4>

      <h4> The Registered candidates will be receiving an email with an <span style="font-weight: bold;font-size:21px; "> assigned slot</span> if the buspass is confirmed/accepted else an unconfirmed/rejected email. The Registered candidates can also check their status of buspass whether it is confirmed or not by clicking on <span style="font-weight: bold;font-size:21px; ">view status button </span> available on the navbar. The candidates who got confirmation mail can attend the bus ofiice at assigned slot and get paid and receive the buspass. </h4>

    </div>

  

    <div style="text-align: center;padding-top:15px;">
     <a href="bookbuspass.php"><button class="btn btn-primary" style="font-size: 19px;" >Book Buspass>></button></a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>

      <h2 style="text-align: center;font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">The Cost of Student BusPass is <b>Rs 750</b></h2>

      <h2 style="text-align: center;font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">The Cost of Normal BusPass is <b>Rs 1000</b></h2>

      <h2 style="text-align: center;font-size: 35px;font-family: 'Trebuchet MS', sans-serif;">It is a bus transport service from Nambur to Guntur Via Kakani and Viceversa.</h2>
     
     <div style="text-align: center;padding-top:20px; "><img src="1.jpg" width="400px" height="180px"></div> 




</body>
</html>