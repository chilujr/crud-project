<?php

function logged_in () {
    return (isset($_SESSION['UserID'])) ? true : false;
}

//Redirect if logged in
function logged_in_redirect() {
    if (logged_in() === true) {
        header ('Location: schedule.php');
        exit;
    }
}

//Redirect if not logged in
function protect_page () {
    if (logged_in() === false) {
        header ('Location: sign_up.php');
    }
}

function user_data ($UserID) {
    require ('connect.php');
    
    $data = array();
    $UserID = (int)$UserID;
    
    $func_num_args = func_num_args();
    $func_get_args = func_get_args();
    
    if ($func_num_args > 1) {
        unset ($func_get_args[0]);
    }
    
    $fields = '`' . implode('`,`', $func_get_args) . '`';
    if ($result = $connection->query("SELECT $fields FROM users WHERE 'UserID' = $UserID")) {
        $data = $result->fetch_assoc ();
        return $data;
        $result->free();
    }
}
// sanitize array
function array_sanitize(&$item){
	include 'connect.php';
	$item = htmlentities(strip_tags(mysqli_real_escape_string($connection,$item)));
}

// sanitize data
function sanitize($data){
	include 'connect.php';
	return htmlentities(strip_tags(mysqli_real_escape_string($connection,$data)));
}

// output errors
function output_errors($errors){
	$output = array();
	foreach ($errors as $error) {
		$output[] = '<li class="text-danger bg-danger">' . $error . '</li>';
	}
	return '<ul class="errors">' . implode('', $output) .'</ul>';
}
?>
