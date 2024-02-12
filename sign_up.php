<?php
require 'Include/session_start.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Chilufya Mwamba">
    <title>Employee Sign Up</title>
    <link rel="stylesheet" href="css/sign_up.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>

    <header>
        <div class="container">
            <div id="branding">
                <img src="img/logo2.png">
            </div>
        </div>
    </header>

    <section id="signup">
        <form action="Include/signup.inc.php" method="post" style="border:1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <div class="form-group">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                </div>

                <div class="form-group">
                    <label for="fname"><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="fname" required>
                </div>

                <div class="form-group">
                    <label for="lname"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="lname" required>
                </div>

                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="mail" required>
                </div>

                <div class="form-group">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                </div>

                <div class="form-group">
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Enter Passowrd" name="repeat" required>
                </div>

                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>

                <div class="clearfix">
                    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
                    <a href="schedule.php"><button type="submit" name="signup-submit" class="signupbtn">Sign Up</button></a>
                </div>
        </form>
    </section>
</body>

</html>
