<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
       
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $pwd = stripslashes($_REQUEST['pwd']);
        $pwd = mysqli_real_escape_string($con, $pwd);
           $pwdr = stripslashes($_REQUEST['pwdr']);
        $pwdr= mysqli_real_escape_string($con, $pwdr);
        $query    = "INSERT into `users` (email, pwd, pwdr)
                     VALUES ( '$email','" . md5($pwd) . "','" . md5($pwdr) . "' )";
        $result   = mysqli_query($con, $query);
        if ($result) {
                              header("location:login.html");

        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.html'>registration</a> again.</p>
                  </div>";
        }
    } 
?>