<?php
session_start();
include "../functions.php";

$_SESSION['error'] = null;

// username and password should be between 5 and 10 chars.
if ($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$error = false;
$error_msg = '';
if (!empty($email) && !empty($password)) {
    $valid_user = null;
    $users = file_get_contents('../api_data/users.json'); // this variable will contain all the users in the DB. 
    $users = json_decode($users); // convert the json string to php object
    // loop through the users


if ($error) {
    $_SESSION['error'] = $error_msg;
    header('Location: ../');
    htu_redirect("../");
} else {
    $_SESSION['user'] = array(
        'display_name' => $valid_user->display_name
    );
    header('Location: ../home.php');
    htu_redirect("../home.php");
}
 59  
htu_courses/course.php