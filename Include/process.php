<?php

$myqsli = new mysql('localhost', 'root', '', 'ET_System') or die(mysqli_error($myqsli));

if (isset($_GET['delete'])) {
	$ID = $_GET['delete'];
	$mysqli->query("DELETE FROM task WHERE ID=$ID") or die(mysqli->error());
}