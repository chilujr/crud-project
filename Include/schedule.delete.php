<?php


$host = "localhost";
$user = "root";
$pass = "";

$connection = mysqli_connect($host, $user, $pass)
    or die ("Couldn't connect to the database");

$database = "ET_System";

if (isset($_GET['task-delete'])) {
    
}
        $cname = $_GET ['cname'];
        $duration = $_GET ['duration'];
        $edate = $_GET ['edate'];
        $description = $_GET ['description'];

mysqli_select_db($connection, $database);

$query = "DELETE * FROM task (ClientName, Duration, EndDate, Description) VALUES ('$cname', '$duration','$edate', '$description')";

$ret = mysqli_query ($connection, $query);

if ($ret) {
    echo "<script>alert('Task deleted')</script>";
    echo "<script>window.location='../schedule.php'</script>";
}
else {
    echo mysqli_error($connection);
}

?>