<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h3 class="mb-3">
Welcome <?php echo $_SESSION['user']; ?>
</h3>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>
</div>

</div>

</div>

</div>

</body>
</html>