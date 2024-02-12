<?php
session_start();
require 'Functions/session_f.php';

if (logged_in() === true) {
    $session_UserID = $_SESSION ['UserID'];
    $user_data = user_data ($session_UserID, 'UserID', 'Username', 'FirstName', 'LastName', 'Email','Password','PasswordRepeat');
}
$errors = array();
?>