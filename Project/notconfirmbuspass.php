<?php

 
         session_start();

         $to_email = $_SESSION['email'];

         $firstName = $_SESSION['firstName'];

         if(isset($_POST['submit'])){

         $reason = $_POST['reason'];

         $subject = "Sorry,Your Bus Application is not confirmed";
         
         $body = "Hi $firstName,Sorry Your Bus Application is not confirmed because $reason";
         
         $headers = "From: janvivuyyuru999@gmail.com";
         
         $result = mail($to_email, $subject, $body, $headers);

         if($result)
         {
            header("Location: emailsuccess.php");
         }
         else 
         {
            header("Location: emailfailure.php");
         }
      }

?>