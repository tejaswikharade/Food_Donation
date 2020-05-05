<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $pwd = stripslashes($_REQUEST['pwd']);
        $pwd = mysqli_real_escape_string($con, $pwd);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     and pwd='".md5($pwd)."'";
        $result = mysqli_query($con, $query)  or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/pwd.</h3><br/>
                  <p class='link'>Click here to <a href='login.html'>Login</a> again.</p>
                  </div>";
        }
    } 
?>