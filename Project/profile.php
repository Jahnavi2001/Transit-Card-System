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

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile</title>

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
 /*background-image: url(https://c8.alamy.com/comp/PRWE55/top-view-of-laptop-keyboard-isolated-on-white-background-PRWE55.jpg);*/

 
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
    <ul class="nav navbar-nav navbar-right">
      <li><a href="subhome.php" style="font-size: 19px;">Back to Home Page</a></li></ul>
      


    
  </div>
</nav>


     <h1 style="text-align: center;padding-top:100px;font-weight: bold;font-size: 50px ;
                     font-variant: small-caps;">My Profile</h1>

    <div id="box">

          <?php
		        if(isset($_SESSION['status'])){  
		      ?>
		      <div class="alert alert-success" role="alert">Hey! <?php echo $_SESSION['status']; ?></div>
		        	
          <?php
		       unset($_SESSION['status']);}
		      ?>


		<form action="profileconnect.php" method="post">

	      <div id="text" style="font-weight: bold; ">MY PROFILE</div>


		<label id="text">FirstName</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstName" id="text" size="40" value="<?=$row['firstName']?>" /><br>
		<label id="text">LastName</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastName" id="text" size="40" value="<?=$row['lastName']?>" /><br>
		<label id="text">Father'sName</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="fatherName" id="text" size="40" value="<?=$row['fatherName']?>"  /><br>

		<label id="text">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" 
		  size="40" value="<?php echo $_SESSION['email']?>" /><br>
		<label id="text">Phone Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="phoneNumber" maxlength="10" size="40" value="<?=$row['phoneNumber']?>" /><br>
 
         <label id="text">Date of birth</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="date" max="01-04-2020" id="text" size="40" placeholder="dd/mm/yyyy" 
           value="<?=$row['date']?>" /><br>

        <label id="text">Select Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="gender" >
                                             <?php if($row['gender'] == "Female") { ?>
                                               <option><?=$row['gender']?></option>
                                               <option>Male</option>
                                               <option>Trans-gender</option>
                                             <?php }else if($row['gender'] == "Male"){ ?>
                                               <option><?=$row['gender']?></option>
                                               <option>Female</option>
                                               <option>Trans-gender</option>
                                             <?php }else if($row['gender'] == "Trans-gender"){ ?>
                                               <option><?=$row['gender']?></option>
                                               <option>Male</option>
                                               <option>Female</option>
                                             <?php }else{ ?>
                                               <option> --Select-- </option>
                                               <option>Male</option>
                                               <option>Female</option>
                                               <option>Trans-gender</option>
                                             <?php } ?>

                                            </select><br>

		
        <label id="text">Select Category</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="category" >
                                             <?php if($row['category'] == "BC") { ?>
                                               <option><?=$row['category']?></option>
                                               <option>OC</option>
                                               <option>SC</option>
                                               <option>ST</option>
                                               <option>Others</option>
                                             <?php }else if($row['category'] == "OC"){ ?>
                                               <option><?=$row['category']?></option>
                                               <option>BC</option>
                                               <option>SC</option>
                                               <option>ST</option>
                                               <option>Others</option>
                                             <?php }else if($row['category'] == "SC"){ ?>
                                               <option><?=$row['category']?></option>
                                               <option>BC</option>
                                               <option>OC</option>
                                               <option>ST</option>
                                               <option>Others</option>
                                             <?php }else if($row['category'] == "ST"){ ?>
                                               <option><?=$row['category']?></option>
                                               <option>BC</option>
                                               <option>OC</option>
                                               <option>SC</option>
                                               <option>Others</option>
                                             <?php }else if($row['category'] == "Others"){ ?>
                                               <option><?=$row['category']?></option>
                                               <option>BC</option>
                                               <option>OC</option>
                                               <option>SC</option>
                                               <option>ST</option>
                                             <?php }else {?>
                                               <option>  --Select--  </option>
                                               <option>BC</option>
                                               <option>OC</option>
                                               <option>SC</option>
                                               <option>ST</option>
                                               <option>Others</option>
                                             <?php } ?>
                                            </select><br>

        <label id="text">District</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="district" size="40" value="<?=$row['district']?>" /><br>

        <label id="text">Mandal</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mandal" size="40" value="<?=$row['mandal']?>" /><br>

        <label id="text">Village</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="village" size="40" value="<?=$row['village']?>" /><br>

		<label id="text">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input 
		type="text" name="address"  size="40" height="200px" value="<?=$row['address']?>" /><br>

    <label id="text">College</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="college" size="40" value="<?=$row['college']?>" /><br>

    <label id="text">Class</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="class" size="40" value="<?=$row['class']?>" /><br>

           

		     <div class="form-group">
                <label class="col-md-5 control-label"></label>
                <div class="col-md-4"><br><br><br>
                 <button type="submit" class="btn btn-primary" name="update" >UPDATE</button>
                </div>
            

           </div>

        </form>
    </div>
    <br>
    


    
</body>
</html>