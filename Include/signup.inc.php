<?php
     if (isset($_POST['signup-submit'])) {
         
         require 'setup.php';
     }

$host = "localhost";
$user = "root";
$pass = "";

$uname = $_POST ["uname"];
$fname = $_POST ["fname"];
$lname = $_POST ["lname"];
$mail = $_POST ["mail"];
$psw = $_POST ["psw"];
$repeat = $_POST ["repeat"];

         
$connection = mysqli_connect($host, $user, $pass)
    or die ("Couldn't connect to the database");

$database = "blog_db";

     $uname = $_POST ["uname"];
     $fname = $_POST ["fname"];
     $lname = $_POST ["lname"];
     $mail = $_POST ["mail"];
     $psw = $_POST ["psw"];
     $repeat = $_POST ["repeat"];
 
mysqli_select_db($connection, $database);

$query = "INSERT INTO users (Username, FirstName, LastName, Email, Password, PasswordRepeat, Role) VALUES ('$uname','$fname','$lname','$mail','$psw', '$repeat', \"Standard\")";

$ret = mysqli_query ($connection, $query);

if ($ret) {
    $_SESSION['logged_in'] = true;
    echo "<script>alert('You have been registered successfully')</script>";
    echo "<script>window.location='../schedule.php'</script>";
}
else {
    echo mysqli_error($connection);
}
?>