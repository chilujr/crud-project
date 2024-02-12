<?php

$host = "localhost";
$user = "root";
$pass = "";

//This creates the connection to the database
$connection = mysqli_connect($host, $user, $pass)
    or die ("Couldn't connect to the database");

/*
$sql = "CREATE DATABASE ET_System";
if (mysqli_query($connection, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($connection);
}
*/

$database = "ET_System";

mysqli_select_db($connection, $database);

/* The following code creates the table that will store the employees
$query = "CREATE Table Employees (
UserID varchar (255) NOT NULL,
Username varchar (255) NOT NULL,
FirstName varchar (255) NOT NULL,
LastName varchar (255) NOT NULL,
Email varchar (255) NOT NULL,
Password varchar (255) NOT NULL,
primary key(UserID))";

$ret = mysqli_query ($connection, $query);

if ($ret) {
    echo "<p>Table Created Succesfully!</p>";
}
else {
    echo "<p>Something went wrong: " . mysqli_error();
    + "</p>";
}

*/

/*Admin Information is entered

$query = "INSERT INTO Employees (UserID, Username, FirstName, LastName, Email, Password) VALUES (\"1\",\"Administrator\",\"Admin\",\"Admin\",\"admin@gmail.com\",\"password\")";

$ret = mysqli_query ($connection, $query);

if ($ret) {
    echo "<p>Data Inserted!</p>";
} else {
    echo "<p>Something went wrong: " . mysqli_error($connection);
}
*/

/* This code creates the table that will store Employee tasks

$query = "CREATE TABLE Task (
ID int(50) UNSIGNED NOT NULL AUTO_INCREMENT,
ClientName varchar (255) NOT NULL,
StartDate varchar (255) NOT NULL,
EndDate varchar (255) NOT NULL,
Description varchar (255) NOT NULL,
primary key(ID))";

$ret = mysqli_query ($connection, $query);

if ($ret) {
    echo "<p>Table Created!</p>";
} else {
    echo "<p>Something went wrong: " . mysqli_error($connection);
}
*/

