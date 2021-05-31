<?php

   session_start();
?>




<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp Page</title>

</head>
<body>

	<style type="text/css">

		
		#box{
			background-color:grey;
			margin: auto;
			width:400px;
			padding: 20px; 
			margin-top: 110px;
		}

		#text{
			font-size:20px;
			 margin:10px;
			 color:white;
			 text-align:center;
		}

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

        body{

    
    background-image: url("https://image.shutterstock.com/image-illustration/abstract-gradient-green-blue-yellow-260nw-505795042.jpg");
    background-repeat: no-repeat;
    background-size: cover;
        }


	</style>

	<nav class="navbar navbar-inverse fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 23px;" >Transit Card System</a>
    </div>
    
  </div>
</nav>
     
	<div id="box">

		<?php
		if(isset($_SESSION['status'])){  
		  if($_SESSION['status'] == "Registration succesful"){
		?>
		    <div class="alert alert-success" role="alert">Hey! <?php echo $_SESSION['status']; ?></div>
		        	
		<?php
		}else{
		?>
		    <div class="alert alert-danger" role="alert">Hey! <?php echo $_SESSION['status']; ?></div>
		
        <?php
        }
		unset($_SESSION['status']);}
		?>

		<form action="connect.php" method="post">
			<div id="text">Signup</div>

			<input type="text" name="firstName" class="form-control" placeholder="Firstname" required /><br>
			<input type="text" name="lastName" class="form-control" placeholder="Lastname" required /><br>
			<input type="email" name="email" class="form-control" placeholder="Email Address" required /><br>
			<input type="number" name="phoneNumber" class="form-control" placeholder="Phonenumber" maxlength="10" required /><br>
			<input type="password" name="password" class="form-control" placeholder="Password" minlength="8" required /><br>
			<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required /><br>

			<input type="submit" class="btn btn-primary btn-block" value="Signup"><br>

			<div id="text" style="font-size:15px">Already Have an Account?<a href="login.php"style="color:#80ced6; font-size:15px"> Login</a></div>

			<div id="text"></div>
			
		</form>
		
	</div>
</body>
</html>