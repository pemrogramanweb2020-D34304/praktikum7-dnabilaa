<?php

session_start();

$username = $_POST['email'];
$password = $_POST['password'];

if (empty($username) && empty($password)) {
    header("location:index.php?empty_all");
} else if (empty($username) && ! empty($password)) {
    header("location:index.php?empty_username");
} else if ( ! empty($username) && empty($password)) {
    header("location:index.php?empty_password");
} else {
    if ($username == 'dinda' && $password == wew){
        $_SESSION['session_username'] =$username;
        header("location:input.php");
    } else {
        header("location:index.php?failed");
    }
}
?>