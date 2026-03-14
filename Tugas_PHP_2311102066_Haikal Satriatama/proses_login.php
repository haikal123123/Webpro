<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_SESSION['user']) && isset($_SESSION['pass'])){

if($username == $_SESSION['user'] && $password == $_SESSION['pass']){

header("Location: welcome.php");

}else{

$_SESSION['error'] = "wrong username/password";
header("Location: login.php");

}

}else{

$_SESSION['error'] = "wrong username/password";
header("Location: login.php");

}
?>