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
	<title>Admin Login Page</title>

</head>
<body>

	<style type="text/css">
		
		#box{

			background-color:grey;
			margin: auto;
			width:400px;
			padding: 20px; 
			margin-top: 180px;
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

	<div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
                <a href="home.php" class="navbar-brand">Transit Card System</a>
        </div>
    </nav>
    </div>


	<div id="box">

		<?php
		if(isset($_SESSION['status'])){  
		?>
		    <div class="alert alert-danger" role="alert">Hey! <?php echo $_SESSION['status']; ?></div>
		
        <?php
		unset($_SESSION['status']);}
		?>


		<form action="adminvalidation.php" method="POST">

			<div id="text">Admin Login</div>
			<div>
				<label style="color:white;">Username</label>
				<input type="email" name="email" class="form-control" placeholder="Email Address" required />
			</div><br>

			<div>
				<label style="color:white;">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password" required />
			</div><br>

			<input type="submit" class="btn btn-primary btn-block" value="Login"><br>

		</form>
		
	</div>
	

</body>
</html>