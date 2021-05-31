<?php 

         session_start();

         $to_email = $_SESSION['email'];

         $firstName = $_SESSION['firstName'];

         $subject = "Your Buspass Application is Confirmed";

         if(isset($_POST['submit'])){

         $slot = $_POST['slot'];
         
         $body = "Hi, $firstName your assigned slot is $slot" ;
         
         $headers = "From: janvivuyyuru999@gmail.com";
         
         $res = mail($to_email, $subject, $body, $headers);

         if($res) 
         {
            header("Location: emailsuccess.php");
         }
         else 
         {
            header("Location: emailfailure.php");
         }

         }
         
    
?>