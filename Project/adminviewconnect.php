<?php

if(isset($_GET['id'])){

	session_start();

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'details');

    function validate($data){
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }

    $id = validate($_GET['id']);


    $s =  "select * from register WHERE id=$id ";

    $result = mysqli_query($con, $s);

    if(mysqli_num_rows($result)> 0){
         $row = mysqli_fetch_assoc($result);
    }else{
    	header("Location: adminhome.php");
    }

}
else{
	header("Location: adminhome.php");
}



?>