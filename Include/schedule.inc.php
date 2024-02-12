<?php

$host = "localhost";
$user = "root";
$pass = "";


$connection = mysqli_connect($host, $user, $pass)
    or die ("Couldn't connect to the database");

$database = "ET_System";

if (isset($_POST['task-submit'])) {
    

        $yname = $_POST ['yname'];
        $cname = $_POST ['cname'];
        $duration = $_POST ['duration'];
        $edate = $_POST ['edate'];
        $description = $_POST ['description'];

mysqli_select_db($connection, $database);

$query = "INSERT INTO task (Name, ClientName, Duration, EndDate, Description) VALUES ('$yname', '$cname', '$duration','$edate', '$description')";

$ret = mysqli_query ($connection, $query);

if ($ret) {
    echo "<script>alert('Tasks entered successfully')</script>";
    echo "<script>window.location='../schedule.php'</script>";
}
else {
    echo mysqli_error($connection);
}
}

?>