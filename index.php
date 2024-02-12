<?php
    require 'Include/session_start.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Chilufya Mwamba">
    <title>A+ Employee Scheluding System | Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img src="img/Logo.png" alt="Logo" style="width:40px;"></a>
        <div>
            <form class="form-inline" class="nav" action="Include/userlogin.inc.php" method="post">

                <input type="text" placeholder="Username" class="form-control mb-2 mr-sm-2" name="username" required>
                <input type="password" placeholder="Password" class="form-control mb-2 mr-sm-2" name="psw" required>
                <a href="schedule.php"><button type="submit" name="login-submit" class="btn btn-secondary">Login</button></a>
            </form>
        </div>
    </nav>

    <div class="jumbotron">
        <h1>Employee Scheduling System</h1>
        <h2>Get Started</h2>

        <a href="http://www.aplusurbantechnics.com/aplus/index.php"><button type="button" class="btn btn-primary">Home</button></a>
        <a href="sign_up.php"><button type="button" class="btn btn-secondary">Sign Up</button></a>

    </div>
        <div class="footer">
            <div class="row">
                <div class="column">
                    <h4>LUSAKA</h4>

                    <p>6TH FLOOR GODFREY HOUSE<br>
                        KABELENGA ROAD<br>
                        P.O. BOX 33976<br>
                        +260 211 238 150</p>
                </div>

                <div class="column">
                    <h4>KITWE</h4>

                    <p>2ND FLOOR, SUITE 330, MUKUBA PENSION HOUSE<br>
                        CNR PRESIDENT AVE & KATANTA ST.<br>
                        P.O. BOX 21144<br>
                        +260 211 238 102</p>

                </div>
            </div>
        </div>


</body>

</html>
