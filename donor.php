<?php
require('db.php');
if (isset($_REQUEST['phone'])){
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con,$phone); 
    
    $type = stripslashes($_REQUEST['type']);
    $type = mysqli_real_escape_string($con,$type);



    $amount = stripslashes($_REQUEST['amount']);
    $amount = mysqli_real_escape_string($con,$amount);

    $location = stripslashes($_REQUEST['location']);
    $location = mysqli_real_escape_string($con,$location);
          
            
        $query = "INSERT into `donor` (phone, 
       type,amount,location)
VALUES ('$phone', '$type','$amount','$location')";
        $result = mysqli_query($con,$query);
        if($result){
            header("location:dashboard.php");


        }
    }
?>
