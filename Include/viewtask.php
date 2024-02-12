<?php

	require 'Include/functions/pre_r.php';

$host = "localhost";
$user = "root";
$pass = "";

$mysqli = new mysqli('localhost', 'root', '', 'ET_System') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM task") or die($mysqli_error);
pre_r ($result)


	?>