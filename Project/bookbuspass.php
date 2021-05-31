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
	<title>Book BusPass</title>
</head>
<body>

    <style type="text/css">

		
		#box{
			background-color:lightgrey;
			margin: auto;
			width:600px;
			padding: 20px; 
			margin-top: 50px;
		}

		#text{
			font-size:16px;
			 margin:10px;
			 color:black;
			 text-align:center;
			 font-weight:lighter;
		}

		 body {
 /*background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80');*/

 
 background-repeat: no-repeat;
    background-size: cover;
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


		



	</style>


    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 23px;" >Transit Card System</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="subhome.php" style="font-size: 19px;">Back to Home Page</a></li>
      </ul>
    
  </div>
</nav>


     <h1 style="text-align: center;padding-top:100px;font-weight: bold;font-size: 50px ;font-variant: small-caps;">Online Bus Pass Application</h1>

     <h2 style="text-align: center;font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">The Cost of 
     	Student BusPass is <b>Rs 750</b></h2>

     <h2 style="text-align: center;font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">The Cost of 
     	Normal BusPass is <b>Rs 1000</b></h2>

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


		<form action="buspassconnect.php" method="post" enctype="multipart/form-data">

	      <div id="text" style="font-weight: bold">REGISTRATION FORM</div>

		<label id="text">FirstName</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstName" id="text" size="40" required /><br>
		<label id="text">LastName</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastName" id="text" size="40" required /><br>
		<label id="text">Father'sName</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fatherName" id="text" size="40" required /><br>
 
         <label id="text">Date of birth</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date" max="01-04-2020" id="text" size="40" required /><br>


		<label id="text">Select Gender </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                <label id="text">Male</label><input type="radio" name="gender" value="male">
	                    <label id="text">Female</label><input type="radio"name="gender" value="female"><br>


		<label id="text">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" size="40" required /><br>
		<label id="text">Phone Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="phoneNumber" maxlength="10" size="40" required /><br>
		

		<label id="text">Aadharcard Number</label>&nbsp;<input type="text" name="aadharNumber" size="40" required /><br>

        <label id="text">Select Type</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="type" id="type" required>
        	                                   <option>-- Select --</option>
                                               <option>New BusPass</option>
                                               <option>Renewal</option>
                                            </select><br>

		<label id="text">Upload ID Card Photo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="file" 
		name="photo" required>


		     <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br><br>
                <button type="submit" class="btn btn-primary" >SUBMIT<span class="glyphicon glyphicon-send"></span></button>
                </div>
            

           </div>

        </form>
    </div>
    


    
</body>
</html>