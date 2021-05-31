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
	<title>Change Password</title>

	<style type="text/css">
		#box{

			background-color:grey;
			margin: auto;
			width:500px;
			padding: 20px; 
			margin-top: 120px;
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
</head>
<body>


	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 23px;" >Transit Card System</a>
    </div>
    
  </div>
</nav>


	<div id="box">
		


        <?php
		if(isset($_SESSION['status'])){  
			if($_SESSION['status'] == "Password Changed Successfully"){
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

	<form action="validationchangepassword.php" method="POST">


		<div id="text">Change Pasword</div>
			<div>
				<label style="color:white;">Username</label>
				<input type="email" name="email" class="form-control" placeholder="Email Address" required />
			</div><br>

			<div>
				<label style="color:white;">Old Password</label>
				<input type="password" name="oldPassword" class="form-control" placeholder="Password" required />
			</div><br>

			<div>
				<label style="color:white;">New Password</label>
				<input type="password" name="newPassword" class="form-control" placeholder="Password" required />
			</div><br>

			<div>
				<label style="color:white;">Confirm Password</label>
				<input type="password" name="confirmPassword" class="form-control" placeholder="Password" required />
			</div><br>

			<input type="submit" class="btn btn-primary btn-block" value="Login"><br>

			<div id="text" style="font-size:15px">Back to Login - &nbsp;<a href="login.php"style="color:lightblue; font-size:15px">Login</a></div>

		
	</form>

	</div>


</body>
</html>