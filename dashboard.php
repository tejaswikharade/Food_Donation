<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
</head>
<body>
    <img src="FoodDonation_700x525_2.png"  height="100" width="150px" alt="food donation logo" id="logo">

 <a href="afterlogin.html" style="font-size: 50px; padding-left: 200px;
 padding-top: 250px;" >CLICK HERE TO DONATE!! </a><br>

     <div class="form" style="padding-left: 400px;">
        <p>Welcome, <?php echo $_SESSION['email']; ?>!</p>
        <p>Below is the food avilable for donation.</p>
    </div>
            <p><a href="logout.php" style="padding-left: 500px;">Logout</a></p>


<?php


include("db.php");
    
        $query = "SELECT * FROM `donor` ORDER BY `donor`.`sno` DESC
 ;";
        $result = mysqli_query($con,$query);
    // output data of each row
    	 while($row = mysqli_fetch_array($result)) { ?>
    


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
<body>
      <div class="card-deck  text-center col-md-4" style="display: inline-flex; color: black; padding-right: 50px; padding-left: 50px; padding-top: 50px;">
        <div class="card mb-12 box-shadow"   class="col-lg-4">
          <div class="card-header"  class="col-lg-4" style="background-color: #666699
;">
            <h4 class="my-0 font-weight-normal">Available Food</h4>
          </div>
          <div class="card-body">
              <?php 

  echo
         "Contact :{$row['phone']}  <br> ".
         " Food Type: {$row['type']} <br> ".
         "Amount of food : {$row['amount']} <br> ".
                  "Location:{$row['location']}  <br> "

            ?>
            <img src="img.jpg" style="height: 50px; width:150px;">
          </div>
        </div>
        


    </div>
     











</body>
</html>


         
         



    
 <?php   
} 
?>      
         </div>



</body>
</html>









