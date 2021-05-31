<?php
  
  include 'adminviewconnect.php';

?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin View</title>
</head>
<body>

  

    <style type="text/css">

    
    #box{
      background-color:lightgrey;
      margin: auto;
      width:600px;
      padding: 20px; 
      margin-top: 70px;
    }

    #text{
      font-size:16px;
       margin:10px;
       color:black;
       text-align:center;
       font-weight:lighter;
    }
     
     p{
          padding-left: 50px;
          font-size: 20px ;
          font-family: Garamond, serif; 
     }
     span{
      font-weight: bold;
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

      <li><a href="adminviewprofile.php?email=<?=$row['email']?>" style="font-size: 22px"; >View Profile</a></li>
      
      
    </ul>
  </div>
</nav>


     <h1 style="text-align: center;padding-top:100px;font-weight: bold;font-size: 50px ;font-variant: small-caps;">Online Bus Pass Application</h1>

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


    <form action="confirmbuspass.php" method="post" enctype="multipart/form-data">

        <div id="text" style="font-weight: bold">APPLICATION FORM</div><br>

        <table>
          <tr><p><span>First Name : </span><?=$row['firstName']?> </p></tr>
          <tr><p><span>LastName : </span><?=$row['lastName']?></p></tr>
          <tr><p><span>Father'sName : </span><?=$row['fatherName']?></p></tr>
          <tr><p><span>Date of birth : </span><?=$row['date']?></p></tr>
          <tr><p><span>Gender : </span><?=$row['gender']?></p></tr>
          <tr><p><span>Email : </span><?=$row['email']?></p></tr>
          <tr><p><span>Phone Number : </span><?=$row['phoneNumber']?></p></tr>
          <tr><p><span>Aadharcard Number : </span><?=$row['aadharNumber']?></p></tr>
          <tr><p><span>Type of Application : </span><b><?=$row['type']?></b></p></tr><br>
          <tr><p><span>Uploaded Photo : </span><img src="<?=$row['photo']?>" alt="photo" width="150" height="100"></p></tr>

          
        </table>

    

      <br><br>

      <input type="text" name="email" value="<?=$row['email']?>" hidden>

      <input type="text" name="firstName" value="<?=$row['firstName']?>" hidden>

      <input type="text" name="id" value = "<?=$row['id']?>" hidden>
 
         <div class="form-group">
      
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                 <button type="submit" class="btn btn-success" name="confirm">CONFIRM</button>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
                 <button type="submit" class="btn btn-danger" name="notConfirm" >NOT CONFIRM </button>

           </div>

        </form>
    </div>
    
</body>
</html>
