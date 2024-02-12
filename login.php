<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Task Scheduling">
    <meta name="keywords" content="time, employee, schedule">
    <meta name="author" content="Chilufya Mwamba">
    <title>Login</title>
    <link rel="stylesheet" href="css/sign_up.css">
</head>

<body>

    <form action="userlogin.inc.php" method="post">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            

            <label for="psw"><a>Password</a></label>
         
            
            <p>Don't have an account? Click <a href="sign_up.php">Here</a> to sign up</p>

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            
            <div class="clearfix"> <button type="submit" class="signupbtn">Login</button>
            <button type="reset" class="cancelbtn">Cancel</button></div>
           
        </div>

    </form>
</body>

</html>
