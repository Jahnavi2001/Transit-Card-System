<?php

    include 'adminviewprofileconnect.php';

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
      margin-top: 50px;
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
  </div>
</nav>
  

     <h1 style="text-align: center;padding-top:100px;font-weight: bold;font-size: 50px ;font-variant: small-caps;">Profile</h1>

    <div id="box">


    <form action="adminviewprofileconnect.php" method="post" enctype="multipart/form-data">

        <div id="text" style="font-weight: bold">PROFILE</div><br>

        <table>
          <tr><p><span>First Name : </span><?=$row['firstName']?> </p></tr>
          <tr><p><span>Last Name : </span><?=$row['lastName']?></p></tr>
          <tr><p><span>Father's Name : </span><?=$row['fatherName']?></p></tr>
          <tr><p><span>Date of birth : </span><?=$row['date']?></p></tr>
          <tr><p><span>Gender : </span><?=$row['gender']?></p></tr>
          <tr><p><span>Email : </span><?=$row['email']?></p></tr>
          <tr><p><span>Phone Number : </span><?=$row['phoneNumber']?></p></tr>
          <tr><p><span>Category : </span><?=$row['category']?></p></tr>
          <tr><p><span>District : </span><?=$row['district']?></p></tr>
          <tr><p><span>Mandal: </span><?=$row['mandal']?></p></tr>
          <tr><p><span>Village : </span><?=$row['village']?></p></tr>
          <tr><p><span>Address : </span><?=$row['address']?></p></tr>
          <tr><p><span>College : </span><?=$row['college']?></p></tr>
          <tr><p><span>Class : </span><?=$row['class']?></p></tr>
          

          
        </table>

        </form>
    </div>
    
</body>
</html>
