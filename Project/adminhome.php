<?php
 
 
 include "adminconnect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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


  	.box{

  		width:1150px;
  	}

     

  	.container table{
  		padding: 20px;
  		border-radius: 10px;
  		box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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
      
      <li><a href="adminlogin.php" style="font-size: 19px;" ><span class="glyphicon glyphicon-log-out" style="font-weight: bold"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<br><br>

<h1 style="text-align: center; font-size:45px; padding-top: 60px;font-family: 'Trebuchet MS', sans-serif;">Hi, Admin</h1>
<h4 style="text-align: justify;padding-left: 100px; padding-right: 100px; font-family: 'Trebuchet MS', sans-serif;">These are the list of users who have applied either for New Buspass or Renewal of Buspass.Click on view to look at the complete details of particular user and either grant or reject the Buspass.</h4>

<br><br><br>



<div class="container">
     
     <div class="box">
	
		<?php if(mysqli_num_rows($result)){ ?>

      
	    <table  class="table table-striped">
         <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
  	<?php
  	    $i=0;
        while($rows = mysqli_fetch_assoc($result)){
        	$i++;

  	?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['firstName']?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['type']; ?></td>
      <td>
        <a href="adminview.php?id=<?=$rows['id']?>" class="btn btn-success" >View</a>
      </td>

      <td><?php echo $rows['status']?></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>


<?php } ?>

	</div>
  
</div>

</body>
</html>