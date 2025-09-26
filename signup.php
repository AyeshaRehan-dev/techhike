<?php 
session_start();
    include './config.php';

    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $pass = mysqli_real_escape_string($connection,$_POST['password']);

    $insert = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$pass')";

    mysqli_query($connection,$insert);

    $_SESSION['ticket'] = $username;

    header("Location: http://localhost:3000/index.php");

?>