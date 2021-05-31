
<?php

 session_start();


 $con=mysqli_connect('localhost','root','');

 mysqli_select_db($con,'details');

 $email = $_SESSION['email'];


 $s =  "select * from register where email='$email'";

 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);

 
 if($num > 0){

    $row = mysqli_fetch_assoc($result);

 	$_SESSION['statusValue']= $row['status'];

 }else{
 	$_SESSION['statusValue'] = "Not Applied";
 }

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Status</title>

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

        p{
			text-align: center;
			font-size: 50px;
			font-family: 'Trebuchet MS', sans-serif;
			color:black;
			
		}

		body{

    
    background-image: url("https://image.shutterstock.com/image-illustration/abstract-gradient-green-blue-yellow-260nw-505795042.jpg");
    background-repeat: no-repeat;
    background-size: cover;
        }

		
	</style>
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 23px;" >Transit Card System</a>
    </div>
    
  </div>
</nav>

    <p style="padding-top: 190px;">Hey! <?php echo $_SESSION['firstName'];?> <?php echo $_SESSION['lastName']; ?></p><br>

	<p style="text-align: center;">Your Status of buspass is <?php echo $_SESSION['statusValue']?></p>

</body>
</html>

