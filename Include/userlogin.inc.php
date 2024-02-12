<?php

$host = "localhost";
$user = "root";
$pass = "";

$connection = mysqli_connect($host, $user, $pass)
    or die ("Couldn't connect to the database");

$database = "ET_System";

$username = $_POST ["username"];
$psw = $_POST ["psw"];

mysqli_select_db($connection, $database);

$query = "SELECT * FROM users
          WHERE Username = '$username' AND
          Password = '$psw' ";

$ret = mysqli_query ($connection, $query);

$retresult = mysqli_num_rows ($ret);

if ($retresult == 0) {
    echo "<script>alert('User not found, please try again')</script>";
    echo "<script>window.location='../index.php'</script>";
    echo mysqli_error($connection);
} 
else {
    $_SESSION ['username'] = "$username";
    echo "<script>alert('Login Succesful')</script>";
    echo "<script>window.location='../schedule.php'</script>";
}
?>
    