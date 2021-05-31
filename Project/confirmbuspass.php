<?php

    session_start();

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    $id = $_POST['id'];

    $email = $_POST['email'];

    $firstName = $_POST['firstName'];


    $_SESSION['email'] = $email;

    $_SESSION['firstName'] = $firstName;



    if(isset($_POST["confirm"]))
    {

        $sql ="UPDATE register
           SET status='Confirmed'
           WHERE id=$id ";

        $result = mysqli_query($con, $sql);

        ?>


        <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Confirm BusPass</title>

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


    </style>
        </head>
        <body>
            <div id="box">

              

        <form action="connectconfirmbuspass.php" method="POST">

            <div id="text">Enter the Slot time</div>
            <div>
                <label style="color:white;">Slot Time</label>
                <input type="text" name="slot" class="form-control" required />
            </div><br>


          <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
          </form>

            

        
      </div>
        
        </body>
        </html>

        <?php

      }
      else if(isset($_POST["notConfirm"]))
    {

         $sql ="UPDATE register
           SET status='Not Confirmed'
           WHERE id=$id ";

         $result = mysqli_query($con, $sql);

         $to_email = $_POST['email'];

         $_SESSION['email'] = $to_email;

         ?>

         <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Confirm BusPass</title>

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


    </style>
        </head>
        <body>
            <div id="box">

              

        <form action="notconfirmbuspass.php" method="POST">

            <div id="text">Enter the Reason</div>
            <div>
                <label style="color:white;">Reason</label>
                <input type="text" name="reason" class="form-control" required />
            </div><br>


          <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
          </form>

            

        
      </div>
        
        </body>
        </html>



         <?php

         //header('location:notconfirmbuspass.php');
         
    }

    ?>

    


