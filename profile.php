<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Task Scheduling">
    <meta name="keywords" content="time, employee, schedule">
    <meta name="author" content="Chilufya Mwamba">
    <title>My Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.png" alt="Logo" style="width:40px;">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="schedule.php">My Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row ">
                    <form action="profile.inc.php">
                        <h2>Edit Profile:</h2>

                        <div class="form-group">
                            <label for="fname"><b>First Name</b></label>
                            <input type="text" id="f_name" placeholder="Enter First Name" class="form-control mb-2 mr-sm-2" name="fname" required>
                        </div>


                        <div class="form-group">
                            <label for="lname"><b>Last Name</b></label>
                            <input type="text" id="l_name" placeholder="Enter Last Name" class="form-control mb-2 mr-sm-2" name="lname" required>
                        </div>


                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="text" id="e_mail" placeholder="Enter Email" class="form-control mb-2 mr-sm-2" name="email" required>
                        </div>


                        <div class="form-group">
                            <label for="psw"><b>Password</b></label>
                            <input type="password" id="pass" placeholder="Enter Password" class="form-control mb-2 mr-sm-2" name="psw" required>
                        </div>


                        <div class="form-group">
                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Enter Passowrd" class="form-control mb-2 mr-sm-2" name="psw" required>
                        </div>

                        <button type="button" name="update" class="btn btn-outline-secondary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col">
            <h2>Add Profile Picture:</h2>    
            
            
        </div>
    </div>


</body>

</html>
