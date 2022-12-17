<?php
include("../model/dbconnect.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$phoneNumber = $_POST['phoneNumber'];
$name = $_POST['name'];

if($password == $confirmPassword){
    $password = md5($password);
    $is_admin = "false";
    $is_active = "true";
    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `phoneNumber`,`is_admin`,`is_active`) VALUES ('$name', '$email', '$password', '$phoneNumber','$is_admin','$is_active')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "User Created";
        header( "refresh:3;url=../view/login.php");
    }else{
        echo "User not created";
        header( "refresh:3;url=../view/signup.php");
    }
}else{
    echo "Password not matched";
    header( "refresh:3;url=../view/signup.php");
}


?>