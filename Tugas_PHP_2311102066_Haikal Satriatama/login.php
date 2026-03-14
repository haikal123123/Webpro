<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>Login</h2>

<form method="post" action="proses_login.php">

Username :
<input type="text" name="username">

<br><br>

Password :
<input type="password" name="password">

<br><br>

<button type="submit">Login</button>

</form>

<br>

<a href="register.php">Register</a>

<?php
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>

</body>
</html>